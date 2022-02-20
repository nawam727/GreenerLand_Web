<!DOCTYPE html>
<htmal>
  <body>
  <?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['District']) && isset($_POST['message'])) {
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "contactDB";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if(!$conn){
        echo "Connection faild!";
        exit();
    }	

    function validate($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $contact = validate($_POST['contact']);
    $District = validate($_POST['District']);
    $message = validate($_POST['message']);


    if(empty($name) || empty($email) || empty($contact) || empty($District) || empty($message)) {
      header("Location: index.php");
        } else {
            $sql = "insert into contactform(name, email, contact, District, message) values('$name','$email','$contact','$District','$message')";
            $res = mysqli_query($conn, $sql);

            if($res) {
              echo "";
            } else {
               echo "Your message could not be sent!";
            }
          }
} else {
  header("Location: index.php");
}
?> 


<script src="include/JS/Sub.js"></script>




  </body>
</html>