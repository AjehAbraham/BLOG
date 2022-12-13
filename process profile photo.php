<script>
    myvar =setTimeout(loadprofile,3000);
function loadprofile(){

window.location.href='profile.php';

}
</script>
<?php
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

if ($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("location: profile.php");
exit("post method reuired");

}

if(empty($_FILES)){
    header("location: profile.php");
    exit('$_FILES is empty');
  

}

if ($_FILES["image"]["size"] > 5000000){
   
    exit('file too large max(5mb)');
   
}
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime_type = $finfo -> file($_FILES["image"]["tmp_name"]);
$mime_types =["image/gif", "image/png", "image/jpeg"];
if(! in_array($_FILES["image"]["type"],$mime_types)){
    header("location: profile.php");
exit("invalid file type");

}
$pathinfo = pathinfo($_FILES["image"]["name"]);

$base = $pathinfo["filename"];

$base = preg_replace("/[^\w-]", "_", $base);

$filename = $base . "." . $pathinfo["extension"];

$destination = __DIR__. "/uploads/" . $filename;

$i = 1;

while (file_exists($destination)){

$filename = $base . "($i)." .$pathinfo["extenstion"];
$destination  = __DIR__ . "/uploads/" . $filename;

$i++;

}
if (! move_uploaded_file($_FILES["image"]["tmp_name"],$destination)){

exit("Fail to upload file");
header("location: profile.php");

}

$date_up =htmlspecialchars( date("Y.m.d h:i:sa"));

$stmt = $conn -> prepare ("INSERT INTO Profile_photos(image_path,User_ids,date_uploaded)
VALUES(?,?,?)
");

$stmt -> bind_param("sss",$filename ,$user['id'], $date_up );

if(!$stmt -> execute()){

    die("Fail to upload file");
}else{

    echo "<p>file uploaded successfully</p>";
}


header("location: profile.php");


$stmt -> close();
$conn -> close();
?>

