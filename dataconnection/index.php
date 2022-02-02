<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Connection</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="name" id="name" required size="40" placeholder="Enter the student's name..."><br><br>
        <label for="">Roll no.</label>
        <input type="number" name="roll" id="roll" required size="40" placeholder="Enter your roll no..."><br><br>
        <label for="">Address</label>
        <input type="text" name="address" id="address" required size="40" placeholder="Enter the student's address..."><br><br>
        <input type="submit" value="Entry" name="submit">
    </form>
</body>
</html>

<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $address = $_POST['address'];
     $insertdata ="INSERT INTO saveddata(name,rollno,address) VALUES ('$name','$roll','$address')";

     $result = mysqli_query($con, $insertdata);

     if($result){
         header("Location:index.php");
         ?>
         <script>
             alert("Data storing is successful.");
             </script>
             <?php 
     }
     else{
        ?>
        <script>
            alert("Connection to the server is unsuccessful.");
            </script>
            <?php 
     }
}
?>