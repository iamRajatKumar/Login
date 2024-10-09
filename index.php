<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include 'dbcon.php'?>
<body>
    <div id ="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" method="post" onsubmit="return isValid()">
            <label>Username : </label>
            <input type="text" id="user" name="user"/>
            <br/>
            <label>Password : </label>
            <input type="password" id="pass" name="pass"/>
            <br/>
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
    </div>
    <script>
        function isValid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length == "" && pass.length==""){
                alert("username or password field is empty");
                return false;
            }
            else{
                if(user.length ==""){
                    alert("username is empty");
                    return false;
                }
                if(pass.length ==""){
                    alert("password is empty");
                    return false;
                }
            }
        } 
    </script>
</body>
</html>