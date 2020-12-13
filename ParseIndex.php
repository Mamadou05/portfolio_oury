<?php 
require_once "config.php";

if(isset($_POST['btnSend'])){
	$lastname = verifyInput($_POST["lastname"]);
	$email = verifyInput($_POST["email"]) ;
	$message = verifyInput($_POST["message"]);
	$objet = verifyInput($_POST["objet"]);
	// $isSuccess = true;

	
	if(empty($lastname)){
		$lastnameError = "Je veux connaitre ton prenom";
	}

	if(!isEmail($email)){
		$emailError = "Ton mail n'est pas valide";
	}

	// if(!isPhone($phone)){
	// 	$phoneError = "Entrer un numero de Téléphone valide svp";
	// }

	if(empty($message)){
		$messageError = "J'ai pas reçu ton message";
	}
	if(!empty($lastname) && !empty($email)  && !empty($message)){
	try{
		$sqlInsert = $db->prepare("INSERT INTO contacts (lastname,email,message,objet,creat_at) VALUES (:lastname,:email,:message,:objet,NOW() )");
	$sqlInsert->execute(array(':lastname'=>$lastname,':email'=>$email,':message'=>$message,':objet'=>$objet));
	// if($sqlInsert->rowCount()==1){
	// 	header("Location: index.php?error=false");
	// }
	
	if($sqlInsert->rowCount()===1){
		header("Location: formulaire.php?error=false");
	}else{
		header("Location: formulaire.php?error=true");
	}
	}catch(PDOException $ex){
		echo "L'erreur suivante s'est produit :".$ex->getMessage();
	}
}
	
	
}
// On verifie le numero a saisi est former de chiffre
function isPhone($var){
	return preg_match("/^[0-9 ]*$/", $var);
}
// On verifie que l'email est valide avec la fonction filter_var
function isEmail($var){
	return filter_var($var,FILTER_VALIDATE_EMAIL);
}
// On verifie les donnees saisi par l'utilisateur ne contiennent pas de script
function verifyInput ($var){
		$var = trim($var);
		$var = htmlspecialchars($var);
		$var = stripcslashes($var);
		return $var;	
	}


?>
