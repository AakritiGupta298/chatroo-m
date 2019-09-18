<?php
if(!isset($_SESSION['username'])){
    //header("Location:index.php");
    
    
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Pacifico|Signika&display=swap" rel="stylesheet"> 
    <title>Let's Chat</title>
    
    <style>
    
        html,body{
            
            background-color:#8e0000;
            
        }
        
        #heading{
            
            text-align: center;
            
        }
        
        h1{
            color:#FFFFFF;
            font-size: 400%;
        }
        
        .chatcontainer{
            
            min-height: 500px;
            border-style: solid;
            border-width: 1px;
            border-color: grey;
            background-color:#c62828;
            margin-top: 10px;
            
        }
        
        .textcontainer{
            
            background-color:#FFFFFF;
            width: 400px;
            min-height: 40px;
            overflow: hidden;
            padding:8px;
            border-radius:3%;
            
        }
        
        
    </style>
    
  </head>
  <body>
      
       <p style="background-color: #8e0000; font-family: 'Pacifico', cursive; font-size: 80px; display: flex;justify-content: center; color: white;"> Chatroom </p>
      
       <div id="chatContainer" class="container chatcontainer">
           
           
                   
           <p></p>
           <div class="textcontainer" id="chat">
               
               
           </div>
           <p></p>
           
         
           
       </div>
       
       <br>
      
       <div class="container">
           
            <form method="post">
        
                <textarea id="message" name="message" class="form-control"  placeholder="Enter Message Here"></textarea>
        
                <p></p>
        
                <button type="submit" class="btn " style="background-color:#c62828; color:white;" id="send" name="send" value="Send">Send</button>
        
             </form>
        
       </div>
        
          
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    
       $(document).ready(function(){
           
           $("button").click(function(e){
               e.preventDefault();
               
              var text = $('#message').val();
              if(text !=''){
                  
                  //alert(text);
                  
                  $.ajax({
                      
                      url:"chatroom_insert.php",
                      method:"POST",
                      data:{msg:text},
                      success:function(data){
                          
                          $('#message').val()="";
                          
                      }
                      
                      
                  });
                  
              }
              
             
               
           });
           
            setInterval(
                 
               getData,500);
             
       });
       function getData(){
              $.ajax({
                      
                      url:"chatroom_update.php",
                      method:"POST",
                      data:{
                          msg:"hi"},
                      success:function(data){
                         // alert(data);
                          
                          $('#chatContainer').html(data);
                          
                      }
                      
                      
                  });
           
       }
              
            
      
  
    </script>
    
  </body>
  
</html>