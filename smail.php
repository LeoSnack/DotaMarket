<?php
header('Content-Type: text/html; charset=utf-8');

$dbh = 'mysql:dbname=Dota;host=localhost';
			$user = 'root';
			$password = '';

		try {	
    		$dbh = new PDO($dbh, $user, $password);
    		$dbh->query("SET NAMES 'utf8'");
				} catch (PDOException $e) {
    				echo 'Подключение не удалось: ' . $e->getMessage();
	}

	if (!$dbh) {
		throw new PDOException();
	}

$sql = "SELECT * FROM `Users` WHERE `user_id` = :id";
   $placeholders = array(':id' => "119582928");
  
   $stmt = $dbh->prepare($sql);
   $stmt->execute($placeholders);
   $row = $stmt->fetchAll(PDO::FETCH_ASSOC); 


// echo $_POST["obj"];
// echo($row[0]['trade']);


$to  = 'lev.kekish@gmail.com' . ', ';
$to .= 'wez@example.com';
$message = "Пользователь с Trade: ".$row[0]['trade']." выиграл ".$_POST["obj"];
$message = wordwrap($message, 70, "\r\n");
// echo($message);
mail($to, $_POST["obj"], $message);

?>