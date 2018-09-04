<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyFreelancer</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/header.css">
	<link rel="stylesheet" href="style/content.css">
	<link rel="stylesheet" href="style/galery.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/upload.js"></script>
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
</head>
<body>
	<div class="bg_top">
		<div class="content_resize">
			<div class="header">
				<div class="logo">
					<a href="#"><img src="img/logo.png" alt="Logo"></a>
				</div>
				<div class="langbar">
					<?php $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
					<form action="/index" method="post" enctype="multipart/form-data">
						<ul class="lang"><!-- <?php echo $language; ?>   --> Мова <i class="fas fa-chevron-down"></i>
							<ul class="sub-lang">
								<li><button type="submit" name="ru" value="ru">Русский</button></li>
								<li><button type="submit" name="en" value="en">English</button></li>
								<li><button type="submit" name="ua" value="ua">Українська</button></li>
							</ul></ul>
							<input type="hidden" name="redirect" value="<?php echo $redirect;?>">
						</div> 
						<div class="menu">
							<ul>
								<li><a href="#"><i class="fas fa-home"></i></a></li>
								<li><a href="#">Про нас</a></li>
								<li><a href="#">Наші роботи</a></li>
								<li><a href="#">Контакти</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="carousel_text">
					<div class="car_text">
						<p>молода команда</p>
						<h1>MY<span>FREELANCER</span></h1>
						<p class="slogan">Швидко виконає ваші завдання!</p>
					</div>
					<div class="car_text inf_block_btn">
						<a href="#" class="inform_btn">ВЗНАТИ БІЛЬШЕ</a>
					</div>
				</div>
			</div>
			<div class="bg_bottom">
				<div class="development">
					<div class="development-width">	
						<div class="side_development">
							<h1><i class="fas fa-thumbs-up"></i></h1>
							<p>ХОРОША ЯКІСТЬ</p>
						</div>
						<div class="side_development">
							<h1><i class="far fa-clock"></i></h1>
							<p>ШВИДКА РОБОТА</p>
						</div>
						<div class="side_development">
							<h1><i class="fas fa-money-bill-alt"></i></h1>
							<p>ДОСТУПНА ЦІНА</p>
						</div>
					</div>
				</div>
				<div class="content_resize2">

					<div class="portfolio">
						<div class="portfol_con">
							<h1>Про нас</h1>
							<br>
							<br>
							<p>Ми молода перспективна команда, яка цілеспрямовано займаєтсья  в сфері "веб-розробка". 	<br> Працюючи з нами ви отримаєте найбільш зручний та сучасний сайт, за короткий час і доступну ціну.</p>
						</div>
				
						<div class="container">
							<div class="cont_img">
								<img src="img/Без назви-2.png" alt="Ескиз на ПК">
							</div>					
							<div class="cont_content">
								<ul>
									<li>Сайт візитка
									<p>Це повноцінний інтернет-ресурс, як правило, складається з сторінки, що містить основну інформацію про компанію, її діяльність, пропоновані товари або послуги, особливості та способи зворотного зв’язку. Грамотно розроблений сайт-візитка стає візитною карткою, ефективною рекламою, цілодобовим офісом, обличчям компанії в Інтернеті. </p>
									</li>
									<li>Інтернет-магазин
									<p>Це місце в інтернеті, за допомогою якого відбувається прямий продаж товарів споживачеві (юридичній або фізичній особі), враховуючи доставку. При цьому розміщення споживацької інформації, замовлення товару і угода відбуваються там само, всередині мережі (на сайті інтернет-магазину).</p>
									</li>
									<li>Інформаційний сайт
									<p>Інформаційний сайт - це орієнтований на зовнішню аудиторію сайт, який створює присутність організації в мережі Інтернет. Першочерговим завданням такого сайту є представлення бренду організації потенційним клієнтам.</p>
									</li>
								</ul>
							</div>
						</div>	
					</div>
						<div class="pricings">
							<div class="pric_title">
								<h1>Наші роботи</h1>
								<p>Тут ви можете побачити зразки наших робіт.</p>
							</div>
							<br>
							<br>
							<div class="price">
								<div class="price_con">
									<div class="works_block">
										<div class="img_block">
											<img src="img/1.png" alt="">
										</div>
										<div class="title-block">
											
										</div>
									</div>
									<div class="works_block">
										<div class="img_block">
											<img src="img/2.png" alt="">
										</div>
										<div class="title-block">
											
										</div>
									</div>
									<div class="works_block">
										<div class="img_block">
											<img src="img/3.png" alt="">
										</div>
										<div class="title-block">
											
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="contact_form">
							<div class="con_left">
								<h1>Contact Form</h1>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
								<form action="#" method="post">
									<input type="text" name="name" text="" placeholder=" Name">
									<input type="text" email="" placeholder=" Email addres" class="eml"> <br/><br/>
									<textarea name="" id="" cols="30" rows="13" placeholder=" Message"></textarea> <br/><br/>
									<input type="submit" value="Send Message">
								</form>
							</div>
							<div class="con_right">
								<div class="address">
									<h1>Our Address</h1>
									<p><b>Twitter, Inc.</b> <br/>
										795 Folsom Ave, Suite 600<br/>
										San Francisco, CA 94107<br/>
										P: (123) 456-7890
									</p>
									<p class="right"><b>Twitter, Inc.</b><br/>
										795 Folsom Ave, Suite 600<br/>
										San Francisco, CA 94107<br/>
										P: (123) 456-7890
									</p>
								</div>
								<div class="connect">
									<h1>Connect with us</h1>
									<div class="contact-left">
										<a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><br/><br/>
										<a href="#"><i class="fab fa-google-plus-g"></i></i>Google Plus</a><br/><br/>
										<a href="#"><i class="fab fa-pinterest"></i>Pinterest</a>
									</div>
									<div class="contact-right">
										<a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a><br/><br/>
										<a href="#"><i class="fab fa-twitter"></i>Twitter</a><br/>
										<a href="#"><i class="fab fa-youtube"></i></i>Youtube</a>
										
									</div>
								</div>
							</div>
						</div>
						<div class="footer">
							<div class="fot-left">
								<p>© 2018 Shape. All Rights Reserved.</p>
							</div>


						</div>
					</div>	
					
					
					
				</body>
				</html>
