<?php
include ("connection.php");
if (isset($_POST['Email']) && isset($_POST['password'])){
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM demo WHERE Email = '".$Email."' and password = '".$password."'";
    $result = mysqli_query($connection,$sql);
    if ($result->num_rows>0){
  

      while($row = $result->fetch_assoc()) {
        $First_Name=$row["First_Name"];
        $Last_Name=$row["Last_Name"];
        $Image=$row["Image"];
        setcookie("First_Name",$First_Name,time()+3600);
        setcookie("Last_Name",$Last_Name,time()+3600);
        setcookie("Image",$Image,time()+3600);
    }

        header("Location:http://localhost:8080/Task1/login.php");
    }
    else{

        ?>
        
        <div style="color:Red;">
            <center>
            <?php
            echo "bad user name or password";
            ?>
            </div>

        <?php
    }
    mysqli_close($connection);
}
?>



<html>
 <head>
        <style>
            body {background-color: pink;}
            h1 {color:blue; font-weight: bold;}
            p {color: red ; font-weight: bold ;}

           
        </style>
        
        <title>Task1</title>    
   
    </head>  

<body>
<h1>
    <center>
    <?php
    echo"Welcome";
    ?>
</h1>	
<form method ="POST" action="">
<center>

Email   : <input type="text" name="Email" />
<br />
Password: <input type="text" name="password"/>
<center>
<input type="submit" name="Log in" />
	
</form> 
</body>
</html>
