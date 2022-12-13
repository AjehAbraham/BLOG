
<?php
$is_valid = false;
session_start();

if(isset($_SESSION["user_id"])){

    include __DIR__. ("/connection.php");

$sql = "SELECT * FROM register_db
WHERE id = {$_SESSION["user_id"]}";

$result = $conn -> query($sql);

$user = $result -> fetch_assoc();

}else {
   header("location:login.php");
   exit;
}


?>

<?php if(isset($user)) {


$first_name = $Last_name ="";

include __DIR__ . ("/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST"){


$first_name = $_POST["First_name"];

$Last_name =$_POST["Last_name"];

}
 

$sql = "UPDATE  register_db SET First_name='$first_name' ,Last_name='$Last_name' WHERE id =$user[id]";

if ($conn -> query ($sql) == TRUE){
echo "Updated successfully. ";

}else{
    echo "fatal error". $conn ->error;
}

}else{

    header("location:login.php");
}

$conn -> close();
?>

<script>
    myvar =setTimeout(loadprofile,1000);
function loadprofile(){

window.location.href='profile.php';

}
</script>
