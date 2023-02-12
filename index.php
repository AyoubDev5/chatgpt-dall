
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chat GPT Mockup</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!--s weetalert -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://venlocal.com/plugins/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"> ChatGPT Schedule</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
              <div class="card card-dark">
                <div class="card-header">
                  <h5 class="card-title m-0">RSS Feed</h5>
                </div>
                <div class="card-body">

                  <div class="input-group">

                    <div class="input-group input-group-lg">
                      <input id="myInput" type="text" name="rss" class="form-control" placeholder="Copy" value="https://ssur.uk/chatgpt/feed.xml">
                      <span class="input-group-append">
                        <button class="btn btn-primary btn-flat" onclick="copyText()" onmouseout="updateText()">COPY FEED</button>
                      </span>
                    </div>
                  </div>

                </div>
              </div>

              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">Writer</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">

                    <div class="form-group">
                      <label for="InputKeyword">Primary Keyword</label>
                      <input id="aiKeyword" class="form-control form-control-lg" value="" placeholder="Example: How to earn money from Youtube">
                    </div>

                    <div class="form-group">
                      <label class="control-label">Choose Use Case</label>
                      <select id="aiType" class="form-control form-control-lg" name="">
                        <option value="blog_idea">Blog Idea &amp; Outline</option>
                        <option value="blog_writing">Blog Section Writing</option>
                        <option value="business_idea">Business Ideas</option>
                        <option value="cover_letter">Cover Letter</option>
                        <option value="social_ads">Facebook, Twitter, Linkedin Ads</option>
                        <option value="google_ads">Google Search Ads</option>
                        <option value="post_idea">Post &amp; Caption Ideas</option>
                        <option value="product_des">Product Description</option>
                        <option value="seo_meta">SEO Meta Description</option>
                        <option value="seo_title">SEO Meta Title</option>
                        <option value="video_des">Video Description</option>
                        <option value="video_idea">Video Idea</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="control-label">Number Of Variants</label>
                      <select id="aiVariant" class="form-control form-control-lg" name="">
                        <option value="1">1 Variants</option>
                        <option value="2">2 Variants</option>
                        <option value="3">3 Variants</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="InputImage">Summarize</label>
                      <input type="number" id="quantity" min="1" max="10" name="summarize" class="form-control form-control-lg" placeholder="Enter number of paragrahs">
                    </div>
                    <div class="form-group">
                      <label for="InputImage">Image</label>
                      <textarea class="form-control form-control-lg" rows="3" placeholder="Enter query"></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">Query</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form >
                  <div class="card-body">
                    <div class="form-group">
                      <label for="InputTitle">Title</label>
                      <input id="title" type="text" name="title" class="form-control form-control-lg form-control-border" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="InputContent">Content</label>
                      <textarea id="content" type="text" class="form-control form-control-lg form-control-border" rows="3" placeholder="Enter query"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="InputImage">Image</label>
                      <textarea id="image" type="text" class="form-control form-control-lg form-control-border" rows="3" placeholder="Enter query"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="InputImage">Summarize</label>
                      <input id="summarize" type="number" min="1" max="10" name="summarize" class="form-control form-control-lg form-control-border" placeholder="Enter number of paragrahs">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button id="save" type="button" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>

              <div class="card card-dark">
                <div class="card-header">
                  <h3 class="card-title">All scheduled chats</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <input type="text" id="search" class="mb-2" placeholder="Enter to search">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                        <td>Query</td>
                        <td>Fantasy movie</td>
                        <td>Give me one title of a horror movie containing a ghost dragon in a fantasy setting.</td>
                        <td>Give me a movie poster of a fantasy movie titled "Ghost Dragon of the Fantasy Realm" containing a ghost dragon in a fantasy setting, photo, digital art</td>
                        <td>
                          <button class="m-1 btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#view"><i class="fas fa-eye"></i> View</button>
                          <button class="m-1 btn btn-block btn btn-info btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-pencil-alt"></i> Edit</button>
                          <button class="m-1 btn btn-block btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <td>Query</td>
                        <td>Astronaut</td>
                        <td>Tell me ways to become an astronaut</td>
                        <td>Give me an image of an astronaut riding a horse in a photorealistic style</td>
                        <td>
                          <button class="m-1 btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#view"><i class="fas fa-eye"></i> View</button>
                          <button class="m-1 btn btn-block btn btn-info btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-pencil-alt"></i> Edit</button>
                          <button class="m-1 btn btn-block btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                        </td>
                      </tr> -->
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Type</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="modal fade" id="view">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">View query</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <input type="hidden" id="viewSummarize"/>
                    <p id="viewTitle"></p>
                    <div class="form-group">
                      ME : <textarea id="viewContent" type="text" name="content" class="form-control form-control-lg form-control-border" rows="3" disabled></textarea></br>
                      GPT : <span id="gpt-mess"></span>
                    </div>
                    <div class="form-group">
                      ME : <textarea id="viewImage" type="text" name="image" class="form-control form-control-lg form-control-border" rows="3" disabled></textarea></br>
                      GPT : <img id="gpt-image" src="" alt="dall" width="200" height="100"/>
                    </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="edit">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit query</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <form action="query.php" method="POST">
                  <input type="hidden" id="update" name="update" class="update">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="InputTitle">Title</label>
                      <input id="InputTitle" type="text" name="titleUp" class="form-control form-control-lg form-control-border" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="InputContent">Content</label>
                      <textarea id="InputContent" type="text" name="content" class="form-control form-control-lg form-control-border" rows="3" placeholder="Enter query"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="InputImage">Image</label>
                      <textarea id="InputImage" type="text" name="image" class="form-control form-control-lg form-control-border" rows="3" placeholder="Enter query"></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" id="saveChange" class="btn btn-primary">Save changes</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Version 1.0
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2022.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <script>
    // Taken from : https://www.w3schools.com/howto/howto_js_copy_clipboard.asp
    // I renamed functions for better code clarity/readability

    function copyText() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");
      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      /* Copy the text inside the text field */
      document.execCommand("copy");

      var tooltip = document.getElementById("myTooltip");
      tooltip.innerHTML = "Copied: " + copyText.value;
    }

    function updateText() {
      var tooltip = document.getElementById("myTooltip");
      tooltip.innerHTML = "Copy to clipboard";
    }
  </script>

  <!-- jQuery -->
  <script src="https://venlocal.com/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://venlocal.com/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://venlocal.com/plugins/dist/js/adminlte.min.js"></script>
  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>

  <script>
    $(document).ready(function() {

      //delete data
      $(document).on('click', '.remove', function(e){
        e.preventDefault()

        var id = $(this).attr("data-id")

        
          const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
          })

          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.isConfirmed) {
                  $.ajax({
                    url: "query.php",
                    method: "POST",
                    data: {id: id},
                  }).then(res=>{
                      swalWithBootstrapButtons.fire(
                      'Deleted!',
                      'Your data has been deleted.',
                      'success'
                      );
                      location.reload();
                  }).catch(err=>{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: '<a href="">Why do I have this issue?</a>'
                      })
                  })
              }
              else if(result.dismiss === Swal.DismissReason.cancel){
                  swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                  )
              }
              
          })
      })
      

      // get all data
      $.ajax({
          url: "query.php",
          method: "GET",
          dataType: "json",
      }).then(res=>{
          $.each(res, function(index, item) {
          $('#example1 tbody').append(
            '<tr>' +
            '<td> Query </td>' +
            '<td>' + item.title + '</td>' +
            '<td>' + item.content + '</td>' +
            '<td>' + item.image + '</td>' +
            '<td><button data-id='+item.id+' class="view m-1 btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#view"><i class="fas fa-eye"></i> View</button><button data-id='+item.id+' data-up="update" class="edit m-1 btn btn-block btn btn-info btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-pencil-alt"></i> Edit</button><button type="button" data-id='+item.id+' class="remove m-1 btn btn-block btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button></td>'+
            '</tr>'
          );
        });
      }).catch(err=>{
          console.log(err);
      })

      // post data 
      $("#save").click(function(e){
        e.preventDefault();

        var title = $('#title').val();
        var content = $('#content').val();
        var image = $('#image').val();
        var summarize = $('#summarize').val();

        $.ajax({
          url: "query.php",
          method: "POST",
          data: {
            title: title,
            content: content,
            image:image,
            summarize: summarize
          }
        }).then(res=>{
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: res,
              showConfirmButton: false,
              timer: 1000
            })
            location.reload();
            //get data
                $.ajax({
                    url: "query.php",
                    method: "GET",
                    dataType: "json",
                }).then(res=>{
                    $.each(res, function(index, item) {
                    $('#example1 tbody').append(
                      '<tr>' +
                      '<td> Query </td>' +
                      '<td>' + item.title + '</td>' +
                      '<td>' + item.content + '</td>' +
                      '<td>' + item.image + '</td>' +
                      '<td><button class="m-1 btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#view"><i class="fas fa-eye"></i> View</button><button class="m-1 btn btn-block btn btn-info btn-sm" data-toggle="modal" data-target="#edit"><i class="fas fa-pencil-alt"></i> Edit</button><button class="m-1 btn btn-block btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button></td>'+
                      '</tr>'
                    );
                  });
                }).catch(err=>{
                    console.log(err);
                })
        }).catch(err=>{
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
              footer: '<a href="">Why do I have this issue?</a>'
            })
        })


      })


      //get for edit data
      $(document).on("click", ".edit", function(e){
          e.preventDefault()

          var idUp = $(this).attr("data-id")

          $.ajax({
            url: "query.php",
            method: "POST",
            data: {
              idUp: idUp
            },
            dataType: "json",
            success: function(data){
              $(".update").val(data.id)
              $("#InputTitle").val(data.title)
              $("#InputContent").val(data.content)
              $("#InputImage").val(data.image)
            },
            error: function(err){
              console.log(err);
            }
          })
      })

      //search data for table
      $("#search").keyup(function(){
          var searchTerm = $(this).val().toLowerCase();
          $("#example1 tbody tr").each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
              $(this).hide();
            }else{
              $(this).show();
            }
          });
      });

      //for view model
      $(document).on("click",".view",function(e){
        e.preventDefault()

          var idUp = $(this).attr("data-id")

          $.ajax({
            url: "query.php",
            method: "POST",
            data: {
              idUp: idUp
            },
            dataType: "json",
            success: function(data){
              $("#viewSummarize").val(data.summarize)
              $("#viewTitle").text(data.title)
              $("#viewContent").val(data.content)
              $("#viewImage").val(data.image)
            },
            error: function(err){
              console.log(err);
            }
          })
      })
    })
  </script>
  <script type="module" src="script.js"></script>
</body>

</html>