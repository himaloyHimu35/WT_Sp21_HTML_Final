<html>
<header>
    </header>
    <body>
        
        <?php
        if(!isset($_COOKIE["uname"])){
            header("Location:signin.php");
        }
        ?>
    
    <h3> You are Log in As  <?php echo $_COOKIE["uname"]; ?> </h3>
    </body>

</html>