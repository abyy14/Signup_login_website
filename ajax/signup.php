<?php


include '../connection/db.php';
$a = 'abi';
function check_email(){
	GLOBAL $db;
	if(isset($_POST['check_email'])){
		$email= $_POST['check_email'];
		$Query =$db->prepare("SELECT email FROM users WHERE email =?");
		$Query->execute(array($email));
		if($Query->rowCount()==0){
			echo json_encode(array('error' => 'email_success'));
		}else{
			echo json_encode(array('error' => 'email_fail','message' => 'Sorry this email is already exists'));
		}
	}
}// check email method
check_email();







function signup_submit(){
	GLOBAL $db;
	if(isset($_GET['signup'])&& $_GET['signup'] == 'true')
	{
		 $name = $_POST['name'];
		 $email = $_POST['email'];
		 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		 $gender = $_POST['gender'];
		 $degree = $_POST['degree'];
		
		 $Query = $db->prepare("INSERT INTO users (name, email, password, gender,degree) VALUES(?,?,?,?,?)");
		 $Query->execute([$name, $email, $password,$gender, $degree]);
		 if($Query){
		 	$_SESSION['user_name'] =$name;
		 	echo json_encode(['error' => 'success','msg'=> 'success.php']);
		 }else{
		 	alert("failed");
		 }
	}
}
signup_submit();
?>