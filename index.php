<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cousine&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css"/>
<script src="owl-carousel/owl.carousel.min.js"></script>


</head>
<body>

	<div class="page">
		<div class="header">
			<div class="header__icon">D.</div>
			<div class="header__menu">
				<span><a href="#" style="text-decoration: none;color:black;">Главная</a></span>
				<span><a href="#about"style="text-decoration: none;color:black;">Обо мне</a></span>
				<span><a href="#portfolio"style="text-decoration: none;color:black;">Партфолио</a></span>
				<span><a href="#contacti"style="text-decoration: none;color:black;">Контакты</a></span>
			</div>
		</div>

		<div class="body">
			<div class="body__content">Здравствуйте ,я<div class="body__text">Давид Кренович</div></div>
			<div class="body__img"><img src="img/main.png"></div>
			<div class="body__content">Професия <div class="body__text">Веб-разработчик</div></div>
		</div>
		<div class="about">
			<div class="about_wrapper">
				<div class='about_wrapper__item-1'></div>
				<div class='about_wrapper__item-2' id="about"> Обо мне</div>
				<div class='about_wrapper__item-1'></div>
			</div>
			<div class="about_text">
				<div class="about_text__item">
					Привет, меня зовут Давид. Я
					полноценный веб-разбработчик.
					Занимаюсь созданием сайтов с
					максимальным профессианолизмом и любовью 
				</div>
				<div class="about_text__item">
					<span>
					 Иструменты, которыми я владею :
					 Python (django,flask),JavaScript,
					 vanilla.js , vue.js , git , PHP,
					 HTML5 , CSS3 , SASS и т.д 
					</span>
				</div>
				<div class="about_text__item">
					Так же я занимаюсь информационной 
					безопасностью , а именно тестирование
					сайтов на уязвимости
				</div>
			</div>
			<div class="about_blok">
				<div class="about_blok__item"><img src="img/1.png" height="80px;">
					<div class="about_blok__itext"><div style="font-size:1.5em">Web Design</div>

				</div>
				</div>
				<div class="about_blok__item"><img src="img/2.png" height="80px;">
					<div class="about_blok__itext"><div style="font-size:1.5em">Development</div>Lorem ipsum dolor sit amet,consectetueradipiscing elitAenean commodo ligulaeget dolor.Aenean massa.</div>
				</div>
				<div class="about_blok__item"><img src="img/3.png" height="80px;">
					<div class="about_blok__itext"><div style="font-size:1.5em">Inf. Sec</div>Lorem ipsum dolor sit amet,consectetueradipiscing elitAenean commodo ligulaeget dolor.Aenean massa.</div>
				</div>
				<div class="about_blok__item"><img src="img/4.jpg" height="80px;">
					<div class="about_blok__itext"><div style="font-size:1.5em">Marketing</div>Lorem ipsum dolor sit amet,consectetueradipiscing elitenean o ligulaeget dolor.enean massa.</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="container_item">24<div class="container_item__text">Счастивых клиентов</div></div>
			<div class="container_item">20<div class="container_item__text">Законченных проектов</div></div>
			<div class="container_item">7<div class="container_item__text">Новых концептов</div></div>
			<div class="container_item">1024<div class="container_item__text">Кружек кофе</div></div>
		</div>
	
		<div class="skils">
			<div class="skils_wrapper">
				<div class='skils_wrapper__item-1'></div>
				<div class='skils_wrapper__item-2' id='portfolio'>Портфолио</div>
				<div class='skils_wrapper__item-1'></div>
			</div>
			<div class="inner">
				<div id="carousel">
					<div class="carousel-element">Онлайн кинотеатр
						<a href="http://frozen-sea-90733.herokuapp.com" style="color: white"><div class="carousel-element__button">Прейти</div></a>
					</div>
					<div class="carousel-element">Лендинг меховой фабрики
						<a href="http://beksfurs.herokuapp.com"style="color: white"><div class="carousel-element__button" id="link__2">Перейти</div></a>
					</div>
					<div class="carousel-element">Интернет магазин
						<div class="carousel-element__button">Перейти</div>
					</div>
				</div>
			</div>
		</div>


		
	</div>
	<footer id='contacti'>
<!-- 		<div> Телефон : +7(903) 444 42-70</div>
		<hr>
		<div>Почта : babayan.dawid2017@yandex.ru</div> -->

	</footer>
<script type="text/javascript">
	$(document).ready(function(){
	
	// Находим блок карусели
	var carousel = $("#carousel");

	// Запускаем плагин карусели

	carousel.owlCarousel({
	singleItem: true, // Показывать только 1 блок на всю ширину
});
});
	$('#link__1').on('click',function(){})
</script>
</body>
</html>