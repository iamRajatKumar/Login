<?php 
include ('dbcon.php');
if(isset($_POST['submit'])){
$username = $_POST['user'];
$password = $_POST['pass'];

$query = "select * from userlogin where uname='$username' and upass= '$password'";
$res = mysqli_query($con, $query);
$row= mysqli_fetch_array($res, MYSQLI_ASSOC);
$count =  mysqli_num_rows($res);
if($count == 1){
    header("Location: welcome.php");
}
else{
    //header("Location: index.php");
    echo '<script>
    window.location.href = "index.php";
    alert("Login failed");
    </script>';
}
}

?>