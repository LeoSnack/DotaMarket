<?php
header('Content-Type: text/html; charset=utf-8');
// session_start();


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


// print_r($_POST);

  $atr = $_POST["atr"];
  $id = $_POST['id'];


 if ($atr > $row[0]['balance']) {
  // echo "<div id='no_money' style='display: block'><spand id='log_text'>У Вас не хватает средств. Пополнить можно тут - <a href='http://dota-factory.ru/'' target='_blank'>Dota-factory</a></spand></div>";
   echo("P7");
 }
  else 
    {

   $res = $row[0]['balance'] - $atr;
   $vk = "119582928";
   // echo("<br />".$res);

            $stmt = $dbh->prepare("UPDATE `Users` SET `balance` = :balance WHERE `user_id` = :user_id");
      $stmt->bindParam(':balance', $res);
      $stmt->bindParam(':user_id', $vk);
      $stmt->execute();


    if ($id == "P1") {
  echo("P1");
}
 else if ($id == "P2") {
  echo("P2");
}
 else if ($id == "P3") {
  echo("P3");
}
 else if ($id == "P4") {
  echo("P4");
}
 else if ($id == "P5") {
  echo("P5");
}
 else if ($id == "P6") {
  echo("P6");
}



  }







  // echo $atr;

// echo($row[0]['balance']);

// echo("<b>".$_POST['id']."</b>");

// var P1 = document.getElementById('P1'); // Случайный сет или аркана
//   var P2 = document.getElementById('P2'); // Случайный Legendary
//   var P3 = document.getElementById('P3'); // Случайный Immortal
//   var P4 = document.getElementById('P4'); // Случайный вард
//   var P5 = document.getElementById('P5'); // Случайный Курьер
//   var P6 = document.getElementById('P6'); // Случайный Mythical







?>
