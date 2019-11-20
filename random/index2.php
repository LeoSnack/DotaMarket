
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>


<div id="lastWinners">
 

</div>

<script type="text/javascript">



/*atr = document.getElementById('test').getAttribute('data-price');
alert('ATR = '+ atr);*/


function getRandomInt(min, max)
{
  return Math.floor(Math.random() * (max - min + 1)) + min;
}


objects = [
	{name: "Павел Симиненко", object: "WARD", img: "../template/img/ranobj/ward.png", color: '#62146A'},
	{name: "Егор Шангин", object: "SET", img: "../template/img/ranobj/set.png", color: '#212E6E'},
	{name: "Артем Варанкин", object: "MYT", img: "../template/img/ranobj/myt.png", color: '#963133'}
];



colors = [
 '#62146A',
 '#212E6E',
 '#963133',
 '#3A1F6E'
];


// alert(colors[0]);

// alert('COUNT '+objects.length); - кол элементов
// alert(objects[0]['title']); - вывод информации о объекте


function RandomUser (object) {

	var Users; // Все юзеры
    

    Users = object.length-1; // массив юзеров
    
    UserRan = getRandomInt(0,Users); // рандомный юзер
	
   
    var Name; // Результат рандомного имени
    var url_img; // Результат рандомной картинки
    var Color; // Результат рандомного цвета


    var Name = document.getElementById("Name"); // Место, где будет выводить имя
    var Img = document.getElementById("Img"); // Место, где будет выводить картинку 

    name = object[UserRan]['name']; // Делаем рандомное имя
    url_img = object[UserRan]['img']; // Делаем рандомную картинку
    Color =  object[UserRan]['color']; // Делаем рандомный цвет
     

     var div = document.createElement('div');
     var divName = document.createElement('div');
     var IMG = document.createElement('IMG');
     var divto = document.getElementById("lastWinners");

     div.id = "Win";
     divName.innerHTML = name; 

     
     IMG.id = 'Img';
     IMG.src = url_img;

     div.appendChild(IMG);
     div.appendChild(divName);
    

     div.style.border = "3px solid"+" "+Color;
     document.body.insertBefore(div, divto);
}

var timerId = setInterval(function () {
   RandomUser(objects);    
}, 1000);


setTimeout(function() {
  clearInterval(timerId);
}, 7000);



</script>



<style>
   #lastWinners {
    border: 3px solid red;
    padding: 10px;
    height: 140px;
    width: 700px;
   }

   #Win {
   	width: 70px;
   	height: 100px;
   	padding: 10px;   	
   	border: 3px solid red;
   	float: left;
    margin-top: 5px;
    margin-left: 10px;
   }

   #Name {
   	text-align:  center;
   	margin-top: 50px;
   }
  </style>