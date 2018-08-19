<?php   include '../connection/db.php'; ?>


<?php

function login(){
	GLOBAL $db;
	if($_GET['login_form'] && $_GET['login_form'] == 'true'){
    $email = $_POST['login_email'];
	$password = $_POST['login_password'];
	$Query = $db->prepare("SELECT * FROM users WHERE email = ?");
	$Query->execute(array($email));
	if($Query->rowCount()!=0){
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$db_password = $r->password;
		if(password_verify($password, $db_password)){
			$id = $r->id;
			$_SESSION['user_id'] = $id;
			echo json_encode(['error' => 'success', 'msg' => 'ajax/after_login.php']);

		}else{
			echo json_encode(['error' => 'no_password' , 'msg' => 'Please enter correct password']);
		}
	}else{
		echo json_encode(array('error' => 'no_email', 'msg' => 'Please enter correct email'));
	}
	}

}
login();

?>