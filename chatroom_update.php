<?php
session_start();
        
         $link = mysqli_connect("localhost","root","","blog");
        
         if(mysqli_connect_error()){
           
             die("Database connection error");

    }
                   $query1 = "SELECT * FROM `chat`";
                   $result = mysqli_query($link, $query1);
                   ?> <br>
                   <?php
                   while($row = mysqli_fetch_assoc($result)){ ?> 
                   <?php if($row['username']==$_SESSION['username']){ ?>
                   <div style="background-color:white; border-radius:25px; width:600px; padding:10px; margin-left:auto; margin-right:0;">
                       <strong><?php echo $row['username']; ?></strong>
                        <br>
                        <p><?php echo $row['message']; ?></p>
                        
                    </div>
                    <br>  
           
                   <?php }else{ ?>
                    <div style="background-color:white; border-radius:25px; width:600px; padding:10px; ">
                       <strong><?php echo $row['username']; ?></strong>
                        <br>
                        <p><?php echo $row['message']; ?></p>
                        
                    </div>
                    <br>  

                   <?php }} ?>