<html>
    <head></head>
    <body><form> <h1>Registration form</h1>
        Name:<input type="text" name="Name">
        Roll No:<input type="number" name="Roll No">
        Email:<input type="email" name="email">
        password:<input type="password" name="password">
        <input type="submit" value="register">
    </form>
    <?php
    $conn=mysqli_connect('localhost','root','','test');
    if(!$conn){
        die("Connection failed".mysqli_connect_error());

    }
    else{
        if(isset($_POST)){
            echo "connected successfuully";
            $Name=$_POST[" Name"];
            $RollNo=$POST["Roll No"];
            $email=$POST["email"];
            $password=$POST["password"];
        }
        else{
            echo "Cant register";
        }
        

    }

    ?>
       
    </body>
</html>