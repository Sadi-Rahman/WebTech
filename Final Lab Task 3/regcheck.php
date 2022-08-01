<?php 

    $json = $_POST['data'];
  
    $student = json_decode($json);
   
    echo $student->username;
    print_r($student);
    
    
?>