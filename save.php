<?php
session_start();
$_SESSION['iT'] = 1;
header('Location: http://dota-factory.ru/');

// echo $_POST["tr"];



$dbh = 'mysql:dbname=u0082283_dota;host=localhost';
			$user = 'u0082_rever';
			$password = 'u#6o5Hd8';

		try {	
    		$dbh = new PDO($dbh, $user, $password);
    		$dbh->query("SET NAMES 'utf8'");
				} catch (PDOException $e) {
    				echo 'Подключение не удалось: ' . $e->getMessage();
	}

	if (!$dbh) {
		throw new PDOException();
	}

$Trade = $_POST['tr'];	
				 
				

			
			$stmt = $dbh->prepare("UPDATE `Users` SET `trade` = :Trade WHERE `user_id` = :user_id");
			$stmt->bindParam(':Trade', $Trade);
			$stmt->bindParam(':user_id', $_SESSION['id_vk']);
			$stmt->execute();
?>