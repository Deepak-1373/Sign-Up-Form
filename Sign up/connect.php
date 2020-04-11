<?php


$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

if (!empty($fullname) || (!empty($email)) || (!empty($password)) || (!empty($dob)) || (!empty($gender))) {


	$conn=new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$valQuery="SELECT email from registration WHERE email=? LIMIT 1";
		$Insert="INSERT INTO registration(fullname,email,password,dob,gender) VALUES (?,?,?,?,?)";

	//prepare statement

		$stmt = $conn->prepare($valQuery);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows();

		if ($rnum == 0) {
			$stmt->close();

			$stmt = $conn->prepare($Insert);
			$stmt->bind_param("sssss",$fullname, $email, $password, $dob, $gender);
			$stmt->execute();
			$stmt->close();
			?>
			<script type="text/javascript">
			alert("New record Inserted Successfully");
			</script>
			<?php 

		}else{
			?>
			<script type="text/javascript">
				alert("Email already existed");
				window.location = "index.php";
			</script>
			<?php
		}
	}
	} else{
		?>
		<script type="text/javascript">
		alert("All fields are required");
		</script>
		<?php 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	 <!-- BOOTSTRAP CDN -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- BOOTSTRAP CDN END -->

<style type="text/css">
h1{
	position: absolute;
	top: 40%;
    left: 27%;
    font-family: cursive;

}
body{
	background-image: url("background.png");
	background-size: cover;
}
</style>
</head>
<body>
	<div class="main-container">
		<div>
			<h1 style="font-size: 100px">
				<span style="color: blue;font-size: ">W</span>
				<span style="color: red">e</span>
				<span style="color: #FFD700">l</span>
				<span style="color: blue">c</span>
				<span style="color: green">o</span>
				<span style="color: red">m</span>
				<span style="color: #F50986">e</span>
			</h1>
</body>
</html>