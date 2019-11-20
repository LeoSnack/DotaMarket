
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<div class="item-wrapper">
			<div data-price="150" data-key="Chroma 2 Case" class="item">
				<div class="desc">
					<div class="name">
						<span>Случайный сет или аркана</span>
					</div>
				</div>
				<div class="img-wrapper">
					<a class="item-link">
						<img width="189px" class="itemsimg" src="ran.jpg">
					</a>
				</div>
				<div class="cost">
					<img src="../template/img/money.png"> 150 рублей
				</div>
				<div class="buyb" id="test" data-price="60" data-key="Set" >
					<img style="margin-top: -3px;" src="../template/img/ook.png"> Открыть
				</div>
			</div>
		</div>


<div id="random" style="margin-top: 20px; margin-left: 700px; display: none;">
  <div id="Title"></div>
  <div id="img">
    <img src="" id="img_url" style="float: left;">
  </div>

</div>

<script type="text/javascript">



atr = document.getElementById('test').getAttribute('data-price');
alert('ATR = '+ atr);

function getRandomInt(min, max)
{
  return Math.floor(Math.random() * (max - min + 1)) + min;
}


objects = [
	{title: "WARD", src: "../template/img/ranobj/ward.png"},
	{title: "Set", src: "../template/img/ranobj/set.png"},
	{title: "Myt", src: "../template/img/ranobj/myt.png"}
] ;


// alert('COUNT '+objects.length); - кол элементов
// alert(objects[0]['title']); - вывод информации о объекте


function RandomObj (object) {
	var maxCount;
    maxCount = object.length-1;

    ren = getRandomInt(0,maxCount);
	// alert(ren);
        
    // alert(object[ren]['title'] + ' ' + object[ren]['src']);
   
    var url_img;
    var title_img;

    var img = document.getElementById("img_url"); 
    var title = document.getElementById("Title"); 

    url_img = object[ren]['src'];
    title_img = object[ren]['title'];
  
	img.src = url_img; 
	title.innerHTML = title_img;
    
}


    document.getElementById('test').onclick = function (event){ 
      document.getElementById('random').style.display = 'block';
         RandomObj(objects);
    }  
  



</script>



<style>
   #random {
    border: 3px solid red;
    padding: 10px;
    height: 550px;
    width: 500px;
   }
  </style>