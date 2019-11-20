<?php
session_start();
setcookie('time', 1);
header('Location: http://dota-factory.ru/');

$client_id = '4893860'; // ID приложения
$client_secret = 'j07xeO7KcKCvMHu4yIZJ'; // Защищённый ключ
$redirect_uri = 'http://dota-factory.ru/vk.php'; // Адрес сайта
$version = '5.30';
$s;


$url = 'http://oauth.vk.com/authorize';

	$params = array(
	    'client_id'     => $client_id,
	    'scope' => 'friends,video,offline',
	    'redirect_uri'  => $redirect_uri,
	    'response_type' => 'code',
	    'v'=> $version,
	    'state' => $s

	);







//echo ("<h1>".$_GET['code']."</h1>");

if (isset($_GET['code'])) {
    $params = array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri
        );

$token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

        if (isset($token['access_token'])) {
        $params = array(
            'uids'         => $token['user_id'],
            'fields'       => 'uid,first_name,last_name',
            'access_token' => $token['access_token']
        );

            $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
            var_dump($userInfo);
            var_dump($userInfo['response'][0]['uid']);

            $Name = $userInfo['response'][0]['first_name'];
            $LastName = $userInfo['response'][0]['last_name'];
            $UI = $userInfo['response'][0]['uid'];
			
			$_SESSION['id_vk'] = $UI;
      $_SESSION['iT'] = 1;

            //echo "Name: ".$Name." LastName: ".$LastName;
    }    
}




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


      if($dbh) {


                 $sql = "SELECT * FROM `Users` WHERE `user_id` = :UI";

  $placeholders = array(':UI' => $UI);
  
  $stmt = $dbh->prepare($sql);
  $stmt->execute($placeholders);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
     if($row > 0) {
  echo('Вы уже ВХОДИЛИ');
 // print_r($row);
} else {



        $stmt = $dbh->prepare("INSERT INTO `Users` (user_id,Name, LastName) VALUES (:UI, :Name, :LastName)");
        $stmt->bindParam(':UI', $UI);
		$stmt->bindParam(':Name', $Name);
		$stmt->bindParam(':LastName', $LastName);
		$stmt->execute();
        
      }
        
        

}
  else echo "ОШИБКА, ДИБИЛ!";

//echo '<p>'.$_COOKIE['Name']."</p>";


echo "<div id='Name'>".$Name."</div>";
echo "<div id='LasthgfrName'>".$LastName."</div>";



?>	

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function()
{
var Name;

  Name = document.getElementById('Name');
 // alert(Name.innerHTML);
}, false);
 

</script>
