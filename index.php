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
	<link rel="stylesheet" href="style/media.css" media="screen">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
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
									<span class="menu_tel"><i class="fas fa-phone"></i>  +380 (97) 851 97 94</span>
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
					
							<p>Ми молода перспективна команда, яка цілеспрямовано займаєтсья  в сфері "веб-розробка". 	<br> Працюючи з нами ви отримаєте найбільш зручний та сучасний сайт, за короткий час і доступну ціну.</p>
						</div>

						<div class="container">
							<div class="cont_img">
								<img src="img/Без назви-2.png" alt="Ескиз на ПК">
							</div>					
							<div class="cont_content">
								<ul>
									<li>Сайт - візитка
										<p>Це повноцінний інтернет-ресурс, як правило, складається з сторінки, що містить основну інформацію про компанію, її діяльність, пропоновані товари або послуги, особливості та способи зворотного зв’язку. Грамотно розроблений сайт-візитка стає візитною карткою, ефективною рекламою, цілодобовим офісом, обличчям компанії в Інтернеті. </p>
									</li>
									<li>Інтернет - магазин
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
									<div class="grid">
										<figure class="effect-duke">
											<img src="img/1.jpg" alt="img01"/>
											<figcaption>
												<h2>Мій <span>Методист</span></h2>
												<p>Інформаційний сайт, за допомогою якого ви можете інформувати відвідувачів.</p>
												<a href="#">View more</a>
											</figcaption>			
										</figure>
									</div>
									<div class="grid grid3">
										<figure class="effect-duke">
											<img src="img/2.jpg" alt="img01"/>
											<figcaption>
												<h2>Агро <span>База</span></h2>
												<p>Інтернет-магазин, де проводиться прямий продаж товарів.</p>
												<a href="#">View more</a>
											</figcaption>			
										</figure>
									</div>
									<div class="grid">
										<figure class="effect-duke">
											<img src="img/3.jpg" alt="img01"/>
											<figcaption>
												<h2>Гуртова <span>База</span></h2>
												<p>Сайт-програма на якій розміщуються ваші бізнес обрахування та збереження даних. </p>
												<a href="#">View more</a>
											</figcaption>			
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="why_us_block">
						<div class="why_us">
							<div class="why_us_title">
								<h1>Чому ми?</h1>
								<br>
								<p class="title_p1">Ми робимо швидко та якісно.</p>
								<br>
								<p class="title_p2">Ми вже довгий час займаємся в цій сфері.</p>
								<br>
								<p class="title_p3">Ми видповідально ставимося до своєї роботи.</p>
							</div>
							
						</div>
						
					</div>
					<div class="sequence">
						<div class="container">
							<div class="page-header">
								<h1 id="timeline">Послідовність співпраці з нами</h1>
							</div>
							<ul class="timeline">
								<li>
									<div class="timeline-badge"><h2>1</h2></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Розуміння про те чи ми вам підходимо?</h4>
											<p><small class="text-muted">Жодного випадку про невиконаний до кінця проект.</small></p>
										</div>
										<br>
										<div class="timeline-body">
											<p>Після перегляду вами нашого сайта, Ви складаєте аналіз оцінку про те чи саме від нас Вам потрібна робота.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge warning"><h2>2</h2></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Зв'яжіться з нами!</h4>
										</div>
										<div class="timeline-body">
											<p>Зв'язаться з нами Ви можете внизу сайта в контактній формі, або ж зателефонавути нам на гарячу лінію.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge danger"><h2>3</h2></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Обговорення вашого проета!</h4>
										</div>
										<div class="timeline-body">
											<p>Після обговорення з</p>
										</div>
									</div>
								</li>	
									<li class="timeline-inverted">
										<div class="timeline-badge info"><h2>4</h2></div>
										<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
										</div>
									</div>
									</li>
								<li>
									<div class="timeline-badge success"><h2>5</h2></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				
					<div class="contact_form">
						<div class="con_block">
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
								</div>
								<div class="connect">
									<h1>Connect with us</h1>
									<div class="contact-left">
										<a href="#"><i class="fab fa-skype"></i>Skype</a><br/><br/>
										<a href="#"><i class="fab fa-telegram-plane"></i>Telegram</a><br/><br/>
										<a href="#"><i class="fab fa-viber"></i>Viber</a>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="footer">
						<div class="fot-left">
							<p><span style="color: #02d871">© MY FREELANCER</span> - Design by BULYK | Code by BULAVA</p>
						</div>


					</div>
				</div>	
				



			</body>
			</html>
