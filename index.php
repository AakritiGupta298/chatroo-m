<?php
session_start();
    
    $error = "";
    
    if(isset($_POST['submit'])){
        
       
        
         if(!$_POST['username']){
        
             $error = "Username is required.";
        
        }
        else{
            $_SESSION['username'] = $_POST['username'];
            //echo $_SESSION['username']; exit;
           header("location:chatpage1.php");
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
        
        .design{
            
            background-color:#c62828;
            margin-top:150px;
            
        }
        
        h1{
            
            color:#FFFFFF;
            
        }
        
        .btn1{
            
            margin-bottom: 20px;
            
        }
        
    </style>
    
  </head>
  <body>
      <p style="background-color: #8e0000; font-family: 'Pacifico', cursive; font-size: 80px; display: flex;justify-content: center; color: white;"> Chatroom </p>
    <form method = "post" class = "container design">
        <div class="form-group">
        <br>
            <h2><strong>Enter the Chatroom</strong></h2><b>
        
            <?php if($error){?>
            <div class="alert alert-danger" role="alert">
                 <strong> Error: <br></strong>
                <div id="error"><?php echo $error; ?></div>
            </div>
            <?php } ?>
            
        <input type="text" class="form-control" id="username" name = "username" aria-describedby="emailHelp" placeholder="Enter Username"><br>
         <button type="submit" name = "submit" class="btn  btn1"style="background-color:#8e0000; color:white;">Submit</button>
         
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>