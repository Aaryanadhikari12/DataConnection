<?php
$server = "localhost";
$user = "root";
$pass = "";
$db ="datacon";

$con = mysqli_connect($server, $user, $pass, $db);

if($con){
    ?>
    <script>
        alert("Connection to the server is successful.");
        </script>
        <?php 
}else{
    ?>
    <script>
        alert("Connection to the server is unsuccessful.");
        </script>
        <?php
}



?>