<?php   include '../connection/db.php'; ?>


<?php

function display(){
	GLOBAL $db;
	$id = $_SESSION['user_id'];
	$Query = $db->prepare("SELECT * FROM users WHERE id = ?");
	$Query->execute(array($id));
	if($Query->rowCount()!=0){
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$db_name = $r->name;
		$db_email = $r->email;
		$db_gender = $r->gender;
		$db_degree = $r->degree;
		echo "name  :" . $db_name ."<br>";
		echo "email  :" . $db_email ."<br>";
		echo "gender  :" . $db_gender ."<br>";
		echo "degree  :" . $db_degree ."<br>";
	}

}
display();

?>