<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>les-1</title>
  <link href="./template/css/style.css" rel="stylesheet">
  <!--<script src="./server/server.js"></script>
</html>

-->
 </head>




 
</script>



 <!--  <div type="button" value="Сумма" onclick="summa()">
    TEST
  </div> -->
  <p>Сумма равна: <span id="summa"></span></p>



<script type="text/javascript">
"use strict";
  /* Данная функция создаёт кроссбраузерный объект XMLHTTP */
 


 

  /*function getXmlHttp() {
    var xmlhttp;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
  }
  
 document.addEventListener("DOMContentLoaded", function () {


});

window.onclick=function(e){
    // var elem = e ? e.target : window.event.srcElement;
    // alert(elem.id)
    
   var elem;
    if(e){
        elem = e.target;
    }else{
        elem = window.event.srcElement;
    }
    
    var atrs = elem.getAttribute('data-price');
    // console.log(atrs);
    window.atr = atrs; 
  }


  function oplata() {
    var atr = window.atr;
 
   // console.log(atr);
    // var atr = 3; // Считываем значение a
    // var b = 4; // Считываем значение b
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', 'send.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем кодировку
    xmlhttp.send("atr=" + encodeURIComponent(atr)); // Отправляем POST-запрос
    xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) { // Ответ пришёл
        if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
          document.getElementById("summa").innerHTML = xmlhttp.responseText; // Выводим ответ сервера
        }
      }
    };
  }*/


function opl(el){
    var atr = el.dataset.price;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('POST', 'send.php', true); 
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
    xmlhttp.send("atr=" +atr); 
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4) {
        if(xmlhttp.status == 200) { 
          document.getElementById("summa").innerHTML = xmlhttp.responseText;
        }
      }
    };
    
  }</script>

<div class="buyb" id="P2" data-price="100" onclick="opl(this);"> Открыть </div>

<div class="buyb" id="P2" data-price="50" onclick="opl(this);"> Открыть </div>





</script>

</html>

