function getRandomInt(min, max)
{
  return Math.floor(Math.random() * (max - min + 1)) + min;
}


objects = [
    {name: "Павел Сим..", object: "WARD", img: "../template/img/ranobj/ward.png", color: '#62146A'},
    {name: "Егор Шанг..", object: "SET", img: "../template/img/ranobj/set.png", color: '#212E6E'},
    {name: "Артем Вар..", object: "MYT", img: "../template/img/ranobj/myt.png", color: '#963133'}
];


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
     divto.appendChild(div);
     var text = "text";
     var CountDiv = document.getElementById("lastWinners").querySelectorAll("div#Win").length;   
}




var timerId = setInterval(function () {
   RandomUser(objects);   
 var CountDiv = document.getElementById("lastWinners").querySelectorAll("div#Win").length;      
   if (CountDiv == 13) {
    setTimeout(function() {
  clearInterval(timerId);
      // console.log("STOP");  

        
}, 0);

       var divto = document.getElementById("lastWinners");
       divto.innerHTML = ''; 

       var timerId = setInterval(function () {
   RandomUser(objects);   
}, 1000);

   }
  }, 1000);

function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

function hide () {
  document.getElementById('log_in').style.display = 'none';
}

function hideMo () {
  document.getElementById('no_moneys').style.display = 'none';
}


setInterval(hideMo, 4000);
setInterval(hide, 4000);

  ///// РАНДОМНЫЕ ВЕЩИ

objectP1 = [
    {title: "WARD", src: "../template/img/ranobj/ward.png"}
];


objectP2 = [
    {title: "Set", src: "../template/img/ranobj/set.png"}
];

objectP3 = [
{title: "Myt", src: "../template/img/ranobj/myt.png"},
{title: "Set", src: "../template/img/ranobj/set.png"}
];

if (getCookie('time') == 0) {
    document.getElementById('log_in').style.display = 'block';
  } 
   else {



var url_img;
var title_img;

function RandomObj (object) {
    var maxCount;
    maxCount = object.length-1;

    ren = getRandomInt(0,maxCount);

    url_img = object[ren]['src'];
    title_img = object[ren]['title'];
}



   function ResultGift (arg) {
  var ind = document.getElementById("randoms");
  var closes = document.getElementById('clo_blocks');
  ind.style.display = 'block';



closes.onclick = function(){
  ind.style.display = 'none';
  }
   
  RandomObj(arg);

  var img = document.getElementById("img_url"); 
  var title = document.getElementById("Title");    
  img.src = url_img; 
  title.innerHTML = title_img;
}


  function mail_obj(){
   
   var title = document.getElementById("Title");
   var ajax_title = title.innerHTML;
   // console.log(ajax_title);

   var xmlhtt = new XMLHttpRequest();
    xmlhtt.open('POST', 'smail.php', true); 
    xmlhtt.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
    xmlhtt.send("obj=" + ajax_title); 
    // xmlhttp.send("a=" + encodeURIComponent(a) + "&b=" + encodeURIComponent(b));
    xmlhtt.onreadystatechange = function() {
      if (xmlhtt.readyState == 4) {
        if(xmlhtt.status == 200) { 
          document.getElementById("summa").innerHTML = xmlhtt.responseText;
        }
      }
    };
  }



   function opl(el){
    var atr = el.dataset.price;
    var Caseid = el.id;
       // alert(Caseid);
  
   document.querySelector('div.insetl').id = Caseid;
   document.querySelector('div.insetl').setAttribute("data-price", atr);

   var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('POST', 'send.php', true); 
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
    xmlhttp.send("atr=" + atr + "&id=" + Caseid /*+ "&obj=" + ajax_title*/); 
    // xmlhttp.send("a=" + encodeURIComponent(a) + "&b=" + encodeURIComponent(b));
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4) {
        if(xmlhttp.status == 200) { 

             // document.getElementById("summa").innerHTML = xmlhttp.responseText;

          if(xmlhttp.responseText == "P1"){
              ResultGift(objectP1);
              mail_obj();
          }
           else if (xmlhttp.responseText == "P2") {
              ResultGift(objectP2);
              mail_obj();
                  }
            else if (xmlhttp.responseText == "P3") {
              ResultGift(objectP3);
              mail_obj();
                  }
            else if (xmlhttp.responseText == "P4") {
              ResultGift(objectP2);
              mail_obj();
                  }
            else if (xmlhttp.responseText == "P5") {
              ResultGift(objectP1);
              mail_obj();
                  }
            else if (xmlhttp.responseText == "P6") {
              ResultGift(objectP1);
              mail_obj();
                  }
            else if (xmlhttp.responseText == "P7") {
                document.getElementById('no_moneys').style.display = 'block';
                // console.log("NO MONEY")
                  }                  

        }
      }
    };
  }
}