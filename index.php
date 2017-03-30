<!DOCTYPE html>
<html lang="en-Us">
    <head>
        <meta charset="UTF-8">
        <title>login and registration using OOP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <center><h1>Login and Registration System <u> using oop concept</u></h1></center>
        <div id="login_container">
            <br>
            <center>
                <form method="post" action="login_submit.php">
                <h2>Login Form</h2>
                <?php 
                if(isset($_GET['err']))
                {
                    echo "<p>Your email or password may be wrong</p>";
                }
                
                
                ?>
                <input type="email" name="e" placeholder="Enter Your Email"/><br><br>
                <input type="password" name="p" placeholder="Enter Your Password"/><br><br>
                <input type="submit" name="login" value="Submit"/>
                </form>
            </center>
            <br>
        </div>
        <div id="register_container">
               <center>
                   <form method="post" enctype="multipart/form-data" action="regis_submit.php">
                <h2>Registration Form </h2>
                <br>
                <?php if(isset($_GET['msg']))
                {
                   echo "<h3>your registration is  succssfull done</h3>";  
                }
                ?>
                
                <input type="text" name="s" placeholder="Enter Your Name"/><br><br>
                <input type="email" name="e" placeholder="Enter Your Email"/><br><br>
                <input type="number" name="nm" placeholder="Enter Mobile Number"/><br><br>
                <input type="password" name="p" placeholder="Enter Your Password"/><br><br>
                Uploade your image &emsp;<input type="file" name="img" /><br><br>
                <input type="submit" name="submit" value="Submit"/>
                   </form>
            </center>
            <br>
            
        </div>
    </body>
</html>
 