<?php
$input_email = $_POST['input_email'];
$input_pass = $_POST['input_pass'];
$input_Token = $_POST['input_Token'];
        
   
            if ($input_Token == $_COOKIE["cookie_token"]){
               
                 
     echo "Token valid <br>";
     
       
     
    
    if($input_email == "hasi@gmail.com" && $input_pass == "hasi"){
        
        
         echo "Email and Password are valid";
        
        
        
    }else{
        
        
         echo "Email and Password are invalid";
        
        
        
    }
    
                
            }
       
     else {
        
         
         
         
     
    
    echo "Token invalid";
    
    
    
    }
    ?>