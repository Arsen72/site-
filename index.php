<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	 <link rel="stylesheet" href="css/main.css">
	 <link rel="stylesheet" href="css/header.css">
	 <link rel="stylesheet" href="css/menu.css">
	 <link rel="stylesheet" href="css/main-content.css">
	 <link rel="stylesheet" href="css/sidebar.css">
	 <link rel="stylesheet" href="css/footer.css">
	 <link rel="stylesheet" href="font/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
   <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
</head>
<body>

<div class="w-fon"></div>
	<div class="window-signup-wraper">
		<div class="window-signup">

			<i class="fa fa-times" aria-hidden="true" id="signup-close"></i>

			<p class="header">Реєстрація</p>

       <div class="form">

				<div class="inf">

				<p><label for="">Логін:</label></p>
				<input type="login" name="login_signup" id='login_signup' value="<?php echo $data['login_signup']; ?>">
				<div id='login_signup_status'><div id="check_icon"></div><div id="cross_icon"></div></div>

				<p><label for="">Ваше Ім'я:</label></p>
        <input id="name_signup" type="text" name="name_signup" value="<?php echo $data['name_signup']; ?>">
				<div id='name_signup_status'><div id="check_icon"></div><div id="cross_icon"></div></div>

				<p><label for="">Ваше прізвище:</label></p>
				<input id='surname_signup' type="text" name="surname_signup" value="<?php echo $data['surname_signup']; ?>">
				<div id='surname_signup_status'><div id="check_icon"></div><div id="cross_icon"></div></div>

				<p><label for="">Пароль:</label></p>
				<input id="password_signup" type="password" name="password_signup" value="<?php echo $data['password_signup']; ?>" placeholder="Не менше 6 символів" class="password_signup">
				<div id='password_signup_status'><div id="check_icon"></div><div id="cross_icon"></div></div>

				<p><label for="">Email:</label></p>
				<input id="email_signup" type="email" name="email_signup" value="<?php echo $data['email_signup']; ?>" placeholder="example@dviinya.club">
				<div id='email_signup_status'><div id="check_icon"></div><div id="cross_icon"></div></div>

			</div>

				<input type="submit" name="do_signup" value="Зареєструватися" id="do_signup">

     </div>

		</div>
	</div>

<!-- Window exite -->

	<div class="window-exit-wraper">
		<div class="window-exit">

			<i class="fa fa-times" aria-hidden="true" id="exit-close"></i>

      <p class="header">Вхід</p>

         <div class="form">

				<div class="inf">

				<p><label for="login">Логін:</label></p>
				<input type="login" name="login" id="login">
				<div id='login_status'><div id="check_icon"></div><div id="cross_icon"></div></div>

				<p><label for="password">Пароль:</label></p>
				<input type="password" name="password" id="password">
				<div id='password_status'><div id="check_icon"></div><div id="cross_icon"></div></div>

				</div>

				<input type="submit" id="do_login" name="do_login" value="Ввійти">
			</div>
      <p class="signup-a">Реєстрація</p>

		</div>
	</div>


 <div class="page-wraper">
  <header>

  	<ul class="top-menu">
  		<li>Головна</li>
			<li>Форум</li>
  		<li>Статті</li>
  		<li>Новини</li>
  		<li>Про нас</li>
  		<li>Зворотній зв'язок</li>
  	</ul>

  	 <div class="logo">
  	 	<p>dviinya.club</p>
  	 </div>

  	 <div class="search">

  	 	<input type="search" name="search" placeholder="Пошук">
        <button><i class="fa fa-search" aria-hidden="true"></i></button>

  	 </div>

       <p class="description">Все про дітей, двійнят, трійнят</p>

       <div class="exit-signup">
        <span class="exit">Вхід</span> | <span class="signup">Реєстрація</span>
       </div>

  </header>

   <div class="menu">
   	<ul>
   		<li>Головна</li>
   		<li>Вагітність</li>
   		<li>Двійня</li>
   		<li>Трійня</li>
   		<li>Статті</li>
   		<li>Новини</li>
   		<li>Про нас</li>
   	</ul>
   </div>

    <div class="content">

    	<div class="main-content">

        <div class="slider-wraper">

          <div class="main-slider">

            <div class="slide">
              <img src="img/slide-img_1.jpg" alt="Slide image 1" class="slide-img">
              <div class="text-bg">
              <p class="slide-description">Дитячий сон до 6 місяців</p>
              </div>
            </div>

            <div class="slide">
              <img src="img/slide-img_2.jpg" alt="Slide image 2" class="slide-img">
              <div class="text-bg">
              <p class="slide-description">Вплив регулярних прогулянок на дитину</p>
              </div>
            </div>

            <div class="slide">
              <img src="img/slide-img_3.jpg" alt="Slide image 3" class="slide-img">
              <div class="text-bg">
              <p>Топ 10 розвиваючих ігор для дітей</p>
              </div>
            </div>

            <div class="slide">
              <img src="img/slide-img_4.jpg" alt="Slide image 4" class="slide-img">
              <div class="text-bg">
              <p class="slide-description">Як навчити дитину читати</p>
            </div>
            </div>

          </div>

    	</div>

        <!-- News -->

        <div class="news">
          <div class="news_1"><p>Топ 10 розвиваючих ігор <br> для дітей</p></div>
          <div class="news_2"><p>Вплив регулярних прогулянок <br> на дитину</p></div>
          <div class="news_3"><p>Як навчити дитину читати?</p></div>
          <div class="news_4"><p>Дитячий сон до 6 місяців</p></div>

          <button>Більше статтей</button>

    </div>

         <!-- Second slider -->

         <div class="second-slider-wraper">

            <div class="second-slider">
              <div class="s-slide"><div class="circle_1"><i class="fa fa-calendar-o" aria-hidden="true"></i><p>266</p><p class="desc">Календар вагітності</p></div></div>
              <div class="s-slide"><div class="circle_2"><div class="icon"></div><p>Прикорм дитини</p></div></div>
              <div class="s-slide"><div class="circle_3"><div class="icon"></div><p>Розвиток до року</p></div></div>
              <div class="s-slide"><div class="circle_4"><div class="icon"></div><p>Розвиток до <br> 3 років</p></div></div>
              <div class="s-slide"><div class="circle_5"><div class="icon"></div><p>Від 4 до 7 <br> років</p></div></div>
              <div class="s-slide"><div class="circle_6"><div class="icon"></div><p>Від 8 до 11 років</p></div></div>
              <div class="s-slide"><div class="circle_7"><div class="icon"></div><p>Розваги для дітей</p></div></div>
              <div class="s-slide"><div class="circle_8"><div class="icon"></div><p>Колискові</p></div></div>
            </div>

         </div>

         <div class="about-us">
           <p class="header">Про нас</p>
           <p class="a-u-content">Того, нечитабельность текста исключительно демонстрационная, то и проектах, ориентированных на. Запуске проекта с разной частотой, имеется разница в книгопечатании. Книгопечатник вырвал отдельные фразы и. Конечно, <br> возникают некоторые вопросы, связанные с использованием lorem. Конечно, <br> возникают некоторые вопросы, связанные с разной частотой имеется.</p>

          <button>Більше</button>

         </div>


    </div>

        <div class="sidebar">

         <div class="my-profile">

           <p class="header">Мій профіль</p>

           <div class="user-ava"></div>

           <p class="user-name">Леся Паламарчук</p>

        <div class="sent-s">
           <p class="sent">Мої повідомлення</p><div class="ind">3</div>
           <p class="sent">Мої статті</p>
           <p class="sent">Редагувати</p>
         </div>

         </div>

         <div class="articles">

             <p class="header">Статті за темою:</p>

						 <ul>
						 	<li>Ріст та розвиток<div class="ind-article_1"><p>3</p></div></li>
						 	<li>Виховання<div class="ind-article_2"><p>5</p></div></li>
						 	<li>Годування<div class="ind-article_3"><p>6</p></div></li>
						 	<li>Новини<div class="ind-article_4"><p>3</p></div></li>
						 	<li>Цікаве<div class="ind-article_5"><p>3</p></div></li>
						 	<li>Ігри та розваги<div class="ind-article_6"><p>3</p></div></li>
						 </ul>

         </div>

				 <div class="voting">

					<p class="header">Опитування</p>
					<p class="sub-header">Якого віку ваша наймолодша <br> дитина?</p>

            <form method="post">
							<label>
								 <input class="radio" type="radio" name="radio-test" checked>
								 <span class="radio-custom"></span>
								 <span class="label"> до 6 місяців</span>
						 </label><br><br>
						 <label>
								<input class="radio" type="radio" name="radio-test">
								<span class="radio-custom"></span>
								<span class="label"> до року</span>
						</label><br><br>
						<label>
							 <input class="radio" type="radio" name="radio-test">
							 <span class="radio-custom"></span>
							 <span class="label"> 1-3 роки</span>
					 </label><br><br>
					 <label>
							<input class="radio" type="radio" name="radio-test">
							<span class="radio-custom"></span>
							<span class="label"> 4-7 років</span>
					</label><br><br>
					<label>
						 <input class="radio" type="radio" name="radio-test">
						 <span class="radio-custom"></span>
						 <span class="label"> 7-11 років</span>
				 </label><br><br>

				 <button>Надіслати</button>

            </form>

						<p class="more">Інші опитування</p>

				 </div>

        </div>

    </div>

		<footer>

			<ul class="col_1">
				<li>Головна</li>
				<li><div class="line"></div></li>
				<li>Двійня</li>
				<li>Трійня</li>
				<li><div class="line"></div></li>
				<li>Вагітність</li>
				<li>До року</li>
				<li>1-3 роки</li>
				<li>3-6 років</li>
				<li>7-11 років</li>
			</ul>

			<ul class="col_2">
				<li>Статті</li>
				<li><div class="line"></div></li>
				<li>Вагітність</li>
				<li>Рість та розвиток</li>
				<li>Виховання</li>
				<li>Годування</li>
				<li>Цікаве</li>
				<li>Новини</li>
				<li>Ігри та розваги</li>
			</ul>

			<ul class="col_3">
				<li>Мій профіль</li>
				<li>Редагувати</li>
				<li>Мої повідомлення</li>
				<li>Мої статті</li>
				<li><div class="line"></div></li>
				<li>Форум</li>
			</ul>


		<ul class="col_4">
				<li>Про нас</li>
	  		<li>Зворотній зв'язок</li>
				<li>Заропонувати статтю</li>
	 </ul>

	  <p>dviinya.club | 2017</p>

		</footer>

</div>

<!-- Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/sl-script.js"></script>
<script src="js/popups.js"></script>
<script src="js/signup.js"></script>
<script src="js/login.js"></script>

</body>
</html>
