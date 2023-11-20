<?php
  
 
   
  
  
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  $conn=mysqli_connect('localhost', 'root', '', 'my_db');

  if(!$conn){
    die('Could not Connect MySql Server:' .mysqli_connect_error());
  }else{
    $stmt = $conn->prepare("insert into users(name, mobile, email, password)values(?,?,?,?)");
    $stmt ->bind_param("siss", $name, $mobile, $email, $password);
    $stmt ->execute();
    echo "registered successfully";
    $stmt ->close();
    $conn ->close();
  }

?>
<!DOCTYPE html>
<html lang="en">

  <body>

    <div class="card-body">            
        <a href="login.php" class="btn btn-primary">Ok</a>
    </div>

  </body>

</html>