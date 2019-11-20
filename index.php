<?php
session_start();

/*if ($_SESSION['iT'] == 1) {
SetCookie("time",1);	
}
 else SetCookie("time",0);*/

// echo($_SESSION['iT']);

?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
	<meta name="description" content="Вещи из Dota 2 дешевле, чем у Гейба">
	<meta name="keywords" content="dota, dota 2, dota 2 random, рандомные вещи из доты">
	<link rel="shortcut icon" type="image/x-icon" href="./template/img/i-Con.png">
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<link href="./template/css/style.css" rel="stylesheet">
	<link href="./template/css/styles.css" rel="stylesheet">
	<link href="./template/css/bootstrap.min.css" rel="stylesheet">
	<link href="./template/css/jquery.arcticmodal-0.3.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
	<script type="text/javascript" src="./server/server.js"></script>



<script type="text/javascript" src="http://vk.com/js/api/share.js?91" charset="windows-1251"></script>

<script type="text/javascript"><!--


--></script>

</head>
<body>
<div class="wrapper" style="width: 1125px; padding-top: 5px;">
  <div class="row" style="margin-left: 5px;">
	<div class="brand-wrapper" style="width: 388px; float: left;">
		<div class="clearfix">
			<div class="pull-left">
				<a href="/"><img src="./template/img/Logo.png" alt=""></a>
			</div>
			<div class="lnav">
			<hr class="style-two" style="margin-top: 0px; margin-bottom: 1px;">
			<a class="page-scroll" href="#reviews" style="margin-right: 4px;">отзывы</a>
			<a data-modal="#siteGuarantee" href="#" style="margin-right: 4px;">гарантии</a>
			<a data-modal="#siteFAQ" href="#">помощь



<?php 



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


   //print_r($row);
    //echo($row[0]['balance']);

   $_SESSION['money'] = $row[0]['balance'];
			 // echo($_SESSION['money']);


         ?>



<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function()
{
function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}


var MoneyB = "<?php echo($row[0]['balance']);?>";
    // console.log(MoneyB);
    
      sessionStorage['time'] = 0;

      sessionStorage['money'] = MoneyB;
	  // alert(sessionStorage['money']);
window.onload = function () {  
    document.getElementById('logout').onclick = function (event){ 
      // alert(event.target.id);
      document.cookie = "time=0";



      var TOWN = '<?php $_SESSION['iT'] = 0;?>';
      

    }  
  }	



}, false);
 

</script>



         

			</a>
			</div>

		</div>
	</div>
<!-- Скрыть БЛОК -->			
		<div style="width: 400px; float: left; padding-top: 10px; text-transform: uppercase; display:none;" id="Pri">
		<div style="font-size: 21px; font-weight: bold; padding-bottom: 4px; color: #D3A23A;">2 веские причины покупать у нас:</div>
		<div style="font-size: 16px; color: #c5c4c4;">- У нас дешевле, чем в Steam</div>
		<div style="font-size: 16px; color: #c5c4c4; padding-bottom: 3px;">- Выше шанс выпадения дорогих предметов</div>
		<hr class="style-two" style="margin: 0;">
		<div style="padding-top: 9px; font-size: 14px; text-align: center;">

			<?php

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
			echo $link = '<a href="' . $url . '?' . urldecode(http_build_query($params)) . '" class="mainloginbtn vklogin" style="margin-left:90px;">'.'Войти через ВК'.'</a>';




			?>
			
			
		</div>
	</div>
	<!-- Скрыть БЛОК -->

	<!-- Скрыть БЛОК -->
<div id="help" style="display: none">
	<div class="visible-lg shopkeeper clearfix" style="padding-bottom: 5px;" id="help; ">
		<div class="pull-right" style="padding-top: 15px; padding-right: 25px;">
		    <div class="MainInstr" data-modal="#siteInstruction">
			<img src="./template/img/main.png" style="border: 2px solid #D3A23A; height: 121px;">
			</div>
		</div>
	</div>
</div>		
	<!-- Скрыть БЛОК -->
<!-- Начало БЛОКА -->
    <div style="float: right; padding-top: 10px; margin-right: 25px; display: block;" id="Op">
	<div class="userinfobox">
	<div style="float: left">Вы вошли как: <?php echo " ".$row[0]['Name']; echo ' '.$row[0]['LastName']; ?> <a href="" id="logout">[Выйти]</a> </div>
	<div class="orderhistory">История покупок</div>
</div>		
<div style="float: left; font-size: 21px; color: #EEE;">Ваш баланс: <span class="userBalance"> <?php echo($row[0]['balance']); ?> </span> руб</div>
<div style="float: right; margin-left: 15px; margin-top: -3px;">
	<div class="addbal">Пополнить</div>
</div>
<div class="clearfix"></div>
<div class="tradelinkbox">
	<form class="form-inline" action="/save.php" method="Post" id="form">
		<div class="form-group">
			<div style="background: #212121; border-color: #434343;" class="input-group">
				<input type="text" value='<?php echo($row[0]['trade']);?>' placeholder="Введите вашу ссылку на обмен" class="linkInput" name="tr">
				<a class="utlink" href="" onclick="document.getElementById('form').submit(); return false;">Сохранить</a>
			</div>
		</div>
		</form>
    <a target="_blank" href="http://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" data-modal="#tradelinkInstruction" class="llink">Как узнать ссылку на обмен?</a>
	<span class="userPanelError"></span>
</div></div>
<!-- Конец БЛОКА -->



	</div>
<div class="stone containero" style="padding: 15px 10px; margin-bottom: -10px; height: 200px;" id="tope">
	<div style="font-size: 24px; color: #F7F7F7; text-align: center; text-transform: uppercase; padding-bottom: 12.5px; font-weight: bold; line-height: 21px;">Последние выигрыши<br>
		<span style="font-size: 17px; font-weight: normal; text-transform: lowercase; letter-spacing: 1px;">В прямом эфире</span>
	</div>
	<div id="lastWinners">
       
	</div>
</div>

<div id="randoms" >
	<img src="./template/img/close.png" id="clo_blocks" style="float: left;"> 
	<div id="Title"></div>
      <div id="img">
        <img src="" id="img_url" style="float: left;">
      </div>



      <div style="width: 410px; margin: 0 auto;">
		<div class="shareBtn" style="float:left; margin-top: 150px; "><a href="http://vk.com/share.php?url=http://dota-factory.ru/" target="_blank"><span style="position: relative; padding:0;"><img src="./template/img/vk_icon.png"><span>Поделиться результатом</span></span></a></div>

<div id="aftersellBlock3" style="display: block; float: left; margin-top: 30px;">
            <div class="recweapinfo" style="padding: 3px 3px 3px 5px; line-height: 15px; font-size: 15px; margin-top: 10px;">
                <span style="color: #D3A23A">Поздравляем!</span> Вы выиграли предмет. Испытайте свою удачу еще раз на <a href="http://dota-factory.ru/" target="_blank">Dota-factory</a>
            </div>
            <div class="TryAgainBtn arcticmodal-close insetl" onclick="opl(this);">Попробовать еще раз</div>
        </div>
		
		
	</div>

</div>


<div id="log_in">
  <spand id="log_text">Пожалуйста, авторизуйтесь!</spand>
</div>


<div id="no_moneys">
  <spand id="log_text">У Вас не хватает средств. Пополнить можно тут - <a href="http://dota-factory.ru/" target="_blank">Dota-factory</a></spand>
</div>



<div class="stone containero">
        
			<div class="item-wrapper">
			<div class="item" data-key="Set">
				<div class="desc">
					<div class="name">
						<span>Случайный сет или аркана</span>
					</div>
				</div>
				<div class="img-wrapper">
					<a class="item-link">
						<img src="./template/img/cases/set.png" width="189px" class="itemsimg">
					</a>
				</div>
				<img src="./template/img/stand.png" class="stand">
				<div class="cost" >
					<img src="./template/img/money.png"> 150 рублей
				</div>
				<div class="buyb" id="P1" data-price="150" onclick="opl(this);"> 
					<img src="./template/img/ook.png" style="margin-top: -3px;" > Открыть
				</div>
				
			</div>
		</div>
<!--   -->
			<div class="item-wrapper">
			<div class="item" data-key="Legendary">
				<div class="desc">
					<div class="name">
						<span>Случайный Legendary</span>
					</div>
				</div>
				<div class="img-wrapper">
					<a class="item-link">
						<img src="./template/img/cases/leg.png" width="189px" class="itemsimg">
					</a>
				</div>
				<img src="./template/img/stand.png" class="stand">
				<div class="cost" >
					<img src="./template/img/money.png"> 100 рублей
				</div>
				<div class="buyb" id="P2" data-price="100" onclick="opl(this);">
					<img src="./template/img/ook.png" style="margin-top: -3px;" > Открыть
				</div>
			
			</div>
		</div>

			<div class="item-wrapper">
			<div class="item" data-key="Immortal">

				<div class="desc">
					<div class="name">
						<span>Случайный Immortal</span>
					</div>
				</div>
				<div class="img-wrapper">
					<a class="item-link">
						<img src="./template/img/cases/huk.png" width="189px" class="itemsimg">
					</a>
				</div>
				
				<img src="./template/img/stand.png" class="stand">
				<div class="cost" >
					<img src="./template/img/money.png"> 90 рублей
				</div>
				<div id="P3" data-price="90" class="buyb" onclick="opl(this);">
					<img src="./template/img/ook.png" style="margin-top: -3px;"> Открыть
				</div>
			</div>
		</div>

			<div class="item-wrapper">
			<div class="item" data-key="Ward" >
				<div class="desc">
					<div class="name">
						<span>Случайный вард</span>
					</div>
				</div>
				<div class="img-wrapper">
					<a class="item-link">
						<img src="./template/img/cases/ward.png" width="189px" class="itemsimg">
					</a>
				</div>
				<img src="./template/img/stand.png" class="stand">
				<div class="cost">
					<img src="./template/img/money.png"> 25 рублей
				</div>
				<div class="buyb" id="P4" data-price="25" onclick="opl(this);">
					<img src="./template/img/ook.png" style="margin-top: -3px;"> Открыть
					<input type="hidden" name="25" />
				</div>
			</div>
		</div>


			<div class="item-wrapper">
			<div class="item" data-key="Kur">
				<div class="desc">
					<div class="name">
						<span>Случайный Курьер</span>
					</div>
				</div>
				<div class="img-wrapper">
					<a class="item-link">
						<img src="./template/img/cases/kur.png" width="189px" class="itemsimg">
					</a>
				</div>
				<img src="./template/img/stand.png" class="stand">
				<div class="cost" >
					<img src="./template/img/money.png"> 30 рублей
				</div>
				<div class="buyb" id="P5"  data-price="30" onclick="opl(this);">
					<img src="./template/img/ook.png" style="margin-top: -3px;"> Открыть
				</div>
			</div>
		</div>

			<div class="item-wrapper">
			<div class="item" data-key="Mythical">
				<div class="desc">
					<div class="name">
						<span>Случайный Mythical</span>
					</div>
				</div>
				<div class="img-wrapper">
					<a class="item-link">
						<img src="./template/img/cases/myt.png" width="189px" class="itemsimg">
					</a>
				</div>
				<img src="./template/img/stand.png" class="stand">
				<div class="cost">
					<img src="./template/img/money.png"> 60 рублей
				</div>
				<div class="buyb" id="P6" data-price="60" onclick="opl(this);"->
					<img src="./template/img/ook.png" style="margin-top: -3px;"> Открыть
				</div>
			</div>
			</div>
		</div>
		
	  	
     </div>
 

 <div id="summa"></div>

<div class="clearfix"></div>
<div id="recent_wins2"></div>
<div id="lolkekISH" style="display:none"></div>
<div id="reviews"><hr class="style-two"></div>
<div class="clearfix"></div>
<div style="width: 700px; margin: 0 auto; ">
<div class="stone" style="font-size: 13px;
line-height: 15px;
color: #eaeaea;
padding: 10px;
margin-left: -10px;
margin-right: -10px;
margin-bottom: 5px;
text-align: center;">
<span style="color: #EFDA08;">ВНИМАНИЕ!</span> Steam ввел новые ограничения, поэтому сейчас <br>действуют новые условия покупки. <a style="color: #EFDA08; cursor: pointer; text-decoration: underline;" data-modal="#rules">Ознакомиться с новыми условиями</a>
	<div style="padding-top: 5px;">
	Перед тем, как задавать вопросы в комментариях, почитайте <a style="color: #EFDA08; cursor: pointer; text-decoration: underline;" data-modal="#siteFAQ" href="./#">"Помощь по сайту"</a>
	</div>
	<div style="padding-top: 5px;">
	За комментариями следят наши модераторы, поэтому если вы не хотите попасть в черный список, советуем вам прочитать  <a style="color: #EFDA08; cursor: pointer; text-decoration: underline;" data-modal="#siteComRules" href="./#">"Правила поведения в комментариях"</a>
	</div>
<!--<div style="padding-top: 10px; color: red; font-size: 16px;">Комментарии закрываем до утра из-за большого количества спама.<br>Откроем комментарии в 08:00 по мск</div> -->
</div>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>
<script type="text/javascript">
  VK.init({apiId: 4893860, onlyWidgets: true});
</script>
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "665", attach: "graffiti,photo"});
</script>
<!-- <div style="padding: 10px; font-size: 14px;">ВНИМНИЕ! Перезажгружаем сервер. Если вам вдруг не пришли предметы или деньги на счет - не волнуйтесь, как сервер перезагрузиться - все придет!</div> -->
</div></div>


<!-- modals-start -->
<div style="display: none;">
<div id="orderHistory" class="itemmodal" style="min-width: 560px; position: relative; padding: 30px 25px 5px 25px; border-radius: 6px; border: 1px solid #4F3D18;">
	<div class="box-modal_close arcticmodal-close mini"></div>
	
	
	<div style="padding: 5px 10px; font-size: 14px; border: 1px solid #555; margin-bottom: 5px;">
	<span style="margin-right: 4px; color:#D3A22C; font-size: 16px;"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></span> Вы можете забрать ваши предметы на <a style="margin-left: 3px; color:#D3A22C;" href="http://steamcommunity.com/id/me/tradeoffers/" target="_blank">странице предложений обмена в Steam</a>
	</div>
	
	
	<div style="padding: 10px 10px; line-height: 15px; font-size: 13px; border: 1px solid #D55252; background: rgba(213, 82, 82, 0.14); margin-bottom: 5px; width: 573px;">
		Steam ввел новые ограничения и поэтому сейчас наши боты не могут сразу отправлять предметы <span style="color: rgb(75, 105, 255);">Армейского качества</span>
		<div style="padding-top: 3px;">
		Сейчас моментально отправляются только <span style="color: rgb(228, 174, 57);">Ножи</span> и предметы редкости <span style="color: rgb(136, 71, 255);">Запрещенное</span>, <span style="color: rgb(211, 44, 230);">Засекреченное</span> и <span style="color: rgb(235, 75, 75);">Тайное</span>
		</div>
		<div style="padding-top: 3px;">
		Полную информацию <a style="cursor: pointer; text-decoration: underline;" data-modal="#rules">читать здесь</a>
		</div>
		<div style="padding-top: 5px; padding-left: 15px;">
			Мы можем выкупать у вас предметы Армейского качества по рыночной цене торговой площадки Steam и зачислить возвращенные средства на ваш баланс на нашем сайте.
			<div style="padding-top: 5px;">
			Или же вы можете подождать пока разрешиться проблема и наши боты снова попробуют отправить вам данный предмет (минимальный срок ожидания – 7 дней)
			</div>
		</div>
	</div>
	
	<table class="table table-bordered" style="background: rgba(0, 0, 0, 0.29);">
		<thead style="font-weight: bold; font-size: 11px; text-transform: uppercase;">
		<tr>
			<th>ID заказа</th>
			<th>Дата</th>
			<th>Кейс</th>
			<th>Предмет</th>
			<th>Статус</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="5" style="text-align: center;">Подождите...</td>
			</tr>
		</tbody>
	</table>
</div>
</div>

</div>

</body></html>