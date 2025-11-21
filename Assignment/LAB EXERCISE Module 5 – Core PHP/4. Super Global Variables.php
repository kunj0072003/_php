<html>

<head>

<title> Create a form that takes a user's name and email </title>

</head>

<body> 


    <form method="post">
        <p>User Name: <input type="text" name="uname" /></p>
        <p>Email: <input type="email" name="email" /></p>
        <p><input type="submit" name="submit" /></p>
    </form>


    <?php
    
    
    if (isset($_POST['submit'])) {
        
          $userName = $_POST['uname']; 
        $email = $_POST['email'];

        echo $uname=$_POST['uname'] . "<br>";
        echo $email=$_POST['email'];
        
    }


    ?>

</body>


</html>


