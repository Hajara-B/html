<html>
    <head>
        <title>register</title>
    </head>
<body>
    <center>
        <h1><marquee style="color:blue">USER REGISTRATION</marquee></h1>
    <form style="bgcolor:blue" method="post" action="home.php">
        Name : <input type="text" name="name"><br><br>
        Username : <input type="text" name="username"><br><br>
        Password : <input type="password" name="password"><br><br>
        Retype password : <input type="password" name="repassword"><br><br>
        <input type="submit" value="Submit">
        <input type="reset" name="Reset">
        </center>
</form>
<?php 
if($_POST){
    if($_POST['password']!==$_POST['repassword']){
    echo"<script>alert(Password Mismatch)</script>";
 }
else{
        $conn = mysqli_connect('localhost', 'root', '','data');
        if(!$conn){
            echo"<script>alert(database connection error)</script>";
        }
        else
        {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sq = "INSERT INTO details VALUES('$name', '$username', '$password')";
            $result = mysqli_query($conn, $result);
        
        }
}
}

?>

</body>
</html>