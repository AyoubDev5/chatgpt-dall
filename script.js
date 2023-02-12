

$(document).ready(function(){

    async function createMessageRequest(content, summarize, image) {
        
        const response = await fetch("http://localhost:5000/messages", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            message: content,
            max: summarize,
            image:image
          })
        });
        const data = await response.json();
        $("#gpt-image").attr("src", data.url);
        $("#gpt-mess").text(data.message.trim())

    }
   
    $("#view").on("shown.bs.modal", function(e){
        e.preventDefault()

        const content = $("#viewContent").val();
        const image = $("#viewImage").val();
        const summarize = $("#viewSummarize").val();
        const number = parseInt(summarize)

        createMessageRequest(content,number,image)
        
    })
    
})
       

