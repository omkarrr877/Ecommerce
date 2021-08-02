<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    ?>
    <script>
    alert("Connection failed")
    </script>
    <?php
}



?>