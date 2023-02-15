<?php
$title=$_POST['title'];


include 'connection.php';
$sql="INSERT INTO todos(title)VALUES('$title')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{

}

?>