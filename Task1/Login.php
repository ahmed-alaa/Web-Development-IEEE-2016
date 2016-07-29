

<html>
    <head>
        <style>
            body {background-color: lightgrey;}
            h1 {color:blue;}
            p {color: red ; font-weight: bold ;}
           
        </style>
        <title>Welcome</title>    
   
    </head>  
    
<body>


    
    <h1>
    <center>
    <?php  
     
     echo "Welcome ".$_COOKIE['First_Name'].$_COOKIE["Last_Name"];
     
    ?> 
    </center>   
    </h1>
    
   

 <img src= <?php echo $_COOKIE["Image"]; ?> >
</body>
</html>