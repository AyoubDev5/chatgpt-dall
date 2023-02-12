<?php

  require_once 'database.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['content']) && isset($_POST['image'])) {
    

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $summarize = $_POST['summarize'];
    
    $sql = "INSERT INTO query (title,content,image,summarize) VALUES ('$title','$content','$image','$summarize')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  }

  if($_SERVER['REQUEST_METHOD'] == 'GET'){

      $query = "SELECT id,title,content,image FROM query";
      $result = mysqli_query($conn, $query);
      $data = array();

      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      header("Content-Type: application/json");
      echo json_encode($data);
      
      mysqli_close($conn);
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])){

      $id = $_POST['id'];

      $query = "DELETE FROM query WHERE id=$id";
      $result = mysqli_query($conn, $query);

      if($result){
          echo 'success';
      } else {
          echo 'error';
      }
      
      mysqli_close($conn);
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idUp'])){

        $id = $_POST['idUp'];

        $query = "SELECT id, title, content, image, summarize FROM query WHERE id=$id";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);

        echo json_encode($data);

        mysqli_close($conn);
        
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titleUp'])){

    $id = $_POST['update'];
    $title = $_POST['titleUp'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    
    $sql = "UPDATE query SET title='$title' , content='$content' , image='$image' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error Updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);

  }



?>