<?php 
include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";;
// exit();

$email = $_POST["email"];
$name = $_POST["name"];
$birthday = $_POST["date"];
$username = $_POST["username"];
$password = $_POST["password"];
$member_lavel = $_POST['member_lavel'];


    $sql = "INSERT INTO member
    (
    name,	
    birthday,
    email,
    username,
    password,
    member_lavel
    )
    VALUES
    (
    '$name,',
    '$date',
    '$email',
    '$username',
    '$password',
    '$member_lavel'
    )";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");

	//exit();
	//mysqli_close($conn);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลเรียบร้อย');";
	echo "window.location = 'index.php?act=login'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'register.php'; ";
	echo "</script>";
}
?>