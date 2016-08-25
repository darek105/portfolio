<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'www.dariuszskiciak.com';
		$to = 'darek123551@gmail.com';
		$subject = 'Message from www.dariuszskiciak';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		//Check if simple anti-bot test is correct
		if ($human !== 3) {
			$errHuman = 'Your anti-spam is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Dziekuję za maila postaram się szybko odpowedzieć.</div>';
	} else {
		$result='<div class="alert alert-danger">Coś poszło nie tak. Spróbuj jeszcze raz.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
  <head>

  		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		<title>Dariusz Skiciak</title>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  		<link href="css/index.css" rel="stylesheet">
      <link href="css/sass/portfolio.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Combo&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Ceviche+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Joti+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Kalam&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

			<link rel="icon" href="img/logo.png" size="20x20">
  </head>
  <body>
      <!-- NAWIGACJA -->
      <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#mainmenu"
                        aria-expanded="false">
                                      <span class="sr-only">Przełacznik nawigacji</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><em>Dariusz Skiciak</em></a>
                  </div>

                  <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                      <ul class="nav navbar-nav">
                          <li class="menu hidden-xs"><a href="#carousel">HOME</a></li>
													<li class="menu hidden-cd hidden-sm hidden-lg"><a href="#oMniexs">HOME</a></li>
                          <li class="menu hidden-xs"><a href="#oMnie">O MNIE</a></li>
													<li class="menu hidden-cd hidden-sm hidden-lg"><a href="#oMniexs">O MNIE</a></li>
													<li class="menu"><a href="#portfolio">PORTFOLIO</a></li>
                          <li class="menu"><a href="#umiejetnosci">UMIEJETNOŚCI</a></li>
                          <li class="menu"><a href="#contact">KONTAKT</a></li>
                      </ul>
                  </div>
            </div>
      </nav>
      <!-- KONIEC NAWIGACJI -->

                    <!-- AUTOR INFO-->
                      <header id="carousel" class="carousel slide hidden-xs" data-ride="carousel" data-interval="1000">
                             <ol class="carousel-indicators">
                                     <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                     <li data-target="#carousel" data-slide-to="1"></li>
                                     <li data-target="#carousel" data-slide-to="2"></li>
                             </ol>

                             <div class="carousel-inner">
                                   <div class="item active">
                                         <img class="img_header" src="img/header1.jpg" alt="" />
                                         <div class="carousel-caption caption-center">
                                              <h2>Nazywam się Dariusz Skiciak</h2>
                                         </div>
                                   </div>
                                   <div class="item">
                                         <img class="img_header" src="img/header2.jpg" alt="" />
                                         <div class="carousel-caption">
                                              <h2>Studiuję informatykę na UJ</h2>
                                         </div>
                                   </div>
                                   <div class="item">
                                       <img class="img_header" src="img/header3.jpg" alt="" />
                                       <div class="carousel-caption">
                                           <h2>Buduję i projektuję strony internetowe</h2>
                                       </div>
                                   </div>
                             </div>

                             <!-- Controls -->
                             <a class="left carousel-control" href="#carousel" data-slide="prev">
                                 <span class="icon-prev"></span>
                             </a>
                             <a class="right carousel-control" href="#carousel" data-slide="next">
                                 <span class="icon-next"></span>
                             </a>
                   </header>
                   <!-- KOONIEC AUTHOR-INFO-->

                            <!-- O MNIE -->
                            <div class="oMnie container hidden-xs" id="oMnie">
                                  <div class="row">
                                        <div class="col-xs-12 col-sm-6 picturePerson">
                                          <!--Moje zdejecie-->
                                          <img src="img/person.png" alt="Ja" />
                                        </div>
                                        <div class="col-xs-12 col-sm-6 description">
                                          <div class="tabs">
                                              <ul class="tab-list">
                                                    <li class="active"><a class="tab-control" href="#tab-1"><h4>O mnie</h4></a></li>
                                                    <li><a class="tab-control" href="#tab-2"><h4>CV</h4></a></li>
                                              </ul>

                                              <div class="tab-panel active" id="tab-1">
                                                 <p>Cześć. Nazywam się Dariusz Skiciak. Jestem studentem  informatyki na Uniwersytecie Jagiellońskim. Aktualnie skończyłem już IV semestr. Od roku zacząłem się zajmować stworzeniem stron internetowych. Moje projekty można zobaczyć poniżej w dziale moje projekty. Chce daje się rozwijać w tym kierunku.
                                                   Poza frontendem tworze różne projekty w AutoCAD-zie. Wolnym czasie staram się być na bieżąco ze światem F1. Najciekawszym tutaj elementem jest wykorzystanie najnowszych technologii w bolidach. Większość tych technologii jest później wykorzystywana w zwykłych samochodach. Przykładem może tutaj być KERS(Kinetic Energy Recovery System), który służy do odzyskiwania energii z hamowania. Jeśli chodzi o informacje ze świata F1 to bardzo polecam stronę f1.dziel-pasje.
                                              </div>

                                              <div class="tab-panel" id="tab-2">
                                                  <a class="CV" href="CV.pdf" target="_blank">CV</a>
                                              </div>
                                          </div>
                                      </div>
                                </div>
                          </div>


                          <div class="oMnie container hidden-md hidden-sm hidden-lg" id="oMniexs">
                                <div class="row">
                                      <div class="col-xs-12 picturePerson">
                                        <!--Moje zdejecie-->
                                        <img src="img/person.png" alt="Ja" />
                                      </div>
                                </div>
                                <div class="row">
                                      <div class="col-xs-12 description">
                                               <p>Cześć. Nazywam się Dariusz Skiciak. Jestem studentem  informatyki na Uniwersytecie Jagiellońskim. Aktualnie skończyłem już IV semestr. Od roku zacząłem się zajmować stworzeniem stron internetowych. Moje projekty można zobaczyć poniżej w dziale moje projekty. Chce daje się rozwijać w tym kierunku.
                                                 Poza frontendem tworze różne projekty w AutoCAD-zie. Wolnym czasie staram się być na bieżąco ze światem F1. Najciekawszym tutaj elementem jest wykorzystanie najnowszych technologii w bolidach. Większość tych technologii jest później wykorzystywana w zwykłych samochodach. Przykładem może tutaj być KERS(Kinetic Energy Recovery System), który służy do odzyskiwania energii z hamowania. Jeśli chodzi o informacje ze świata F1 to bardzo polecam stronę f1.dziel-pasje.
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <a class="CV" href="CV.pdf" target="_blank">CV</a>
                                    </div>
                                </div>
                          </div>


													<div class="container projekty" id="portofilo">
															<div class="row">
																		<h1 class="h1_projekty">MOJE PROJEKTY:</h1>
															</div>
															<div class="row">
																		<div class="box-set col-xs-12 col-sm-6 col-md-4 hidden-xs">
																					<div class="box box-1">
																							<h1 class="scala">PORTFOLIO</h1>
																					</div>
																					<div class="box box-2"><a href="http://www.dariuszskiciak.com"><div class="min_port"></div></a></div>
																					<div class="box box-3"><a href="portfolio/2/index.html"><div class="min_port1"></div></a></div>
																					<div class="box box-4"><a href="portfolio/3/index.html"><div class="min_port5"></div></a></div>
																					<div class="box box-5"><a href="portfolio/8/index.html"><div class="min_port7"></div></a></div>
																					<div class="box box-6"><a href="portfolio/4/index.html"><div class="min_port6"></div></a></div>
																	</div>
																	<div class="col-xs-12 col-sm-6 col-md-4 hidden-md hidden-sm hidden-lg">
																			<a href="http://www.dariuszskiciak.com"><img src="img/portfolio/port0.3.jpg" alt="" /></a>
																			<a href="portfolio/2/index.html"><img src="img/portfolio/port4.3.PNG" alt="" /></a>
																			<a href="portfolio/3/index.html"><img src="img/portfolio/port5.3.PNG" alt="" /></a>
																			<a href="portfolio/8/index.html"><img src="img/portfolio/port7.3.PNG" alt="" /></a>
																			<a href="portfolio/4/index.html"><img src="img/portfolio/port6.3.PNG" alt="" /></a>
																			<a href="portfolio/5/index/index.html"><img src="img/portfolio/port1.3.jpg" alt="" /></a>
																			<a href="portfolio/6/index.html"><img src="img/portfolio/port3.3.jpg" alt="" /></a>
																			<a href="portfolio/7/home/index.html"><img src="img/portfolio/port2.3.jpg" alt="" /></a>

																</div>
															</div>
															<div class="row second_talia">
																		<div class="box-set col-xs-12 col-sm-6 col-md-4 hidden-xs">
																					<div class="box box-1">
																							<h1 class="scala">PORTFOLIO2</h1>
																					</div>
																					<div class="box box-2"><a href="portfolio/5/index/index.html"><div class="min_port2"></div></a></div>
																					<div class="box box-3"><a href="portfolio/6/index.html"><div class="min_port3"></div></a></div>
																					<div class="box box-4"><h1 class="scala">CDN...</h1></div>
																		</div>
															</div>
													</div>


                    <!-- UMIEJETNOSCI-->
                    <div class="container gallery-page" id="umiejetnosci">
                          <div class="row">
                              <div class="col-xs-12">
                                  <h1>UMIEJĘTNOŚCI:</h1>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 skills">
                                   <img class="img-responsive skills" src="img/html.png" alt="HTML5" />
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 skills">
                                   <img class="img-responsive skills" src="img/css.png" alt="CSS3" />
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 skills">
                                   <img class="img-responsive skills" src="img/rwd.png" alt="BOOTSTRAP" />
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 skills">
                                   <img class="img-responsive skills" src="img/js.png" alt="JAVASCRIPT" />
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 skills">
                                   <img class="img-responsive skills" src="img/jQ.png" alt="JQUERY" />
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 skills">
                                   <img class="img-responsive skills" src="img/bootstrap.png" alt="RWD" />
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 skills">
                                   <img class="img-responsive skills" width="150px" src="img/sass.svg" alt="SASS" />
                              </div>
                          </div>
                    </div>
                    <!--KONIEC UMIEJTNOSCI -->

                    <!--KONTAKT-->
                    <div class="contact" id="contact">
                          <div class="container">
                               <div class="row">
                                    <div class="col-xs-12">
                                          <h1>KONTAKT:</h1>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                         <form class="form" role="form" action="index.php" method="post">
                                               <div class="form-group">
                                                    <label for="name">Imie:</label>
                                                    <input type="text" id="name" class="form-control" name="name" placeholder="Wpisz imię:" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                                    <div id="feedmessage"></div>
                                               </div>
                                               <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email:" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                                    <div id="emailCheck"></div>

                                               </div>
                                               <div class="form-group">
                                                    <label for="massage">Treśc:</label>
                                                    <textarea class="form-control" rows="3" name="message" id="message" placeholder="Wpisz wiadomośc: "><?php echo htmlspecialchars($_POST['message']);?></textarea>

                                               </div>
                                               <div class="form-group">
                                                    <label for="human" class="control-label">1 + 2 = ?</label>
                                                    <input type="text" class="form-control" id="human" name="human" placeholder="Wynik:">
                                                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                               </div>
                                               <div class="form-group">
                                                    <input id="submit" name="submit" type="submit" value="Wyślij" class="btn btn-primary">
                                               </div>
                                               <div class="form-group">
                                                   <?php echo $result; ?>
                                               </div>
                                         </form>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 mapa">
                                         <iframe width="600"
                                                 height="450"
                                                 frameborder="0"
                                                 style="border:0"
                                                 allowfullscreen
                                                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6095.77778137297!2d19.904178429168503!3d50.030867035145775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165c871b4d112b%3A0x895ee961f832315d!2sNorymberska%2C+Krak%C3%B3w!5e0!3m2!1spl!2spl!4v1463228388614">
                                         </iframe>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                         <address class="adres">
                                                <strong>Dariusz Skiciak</strong><br>
                                                 <br>
                                                 <strong>Tel: </strong></abbr>888217883<br>
                                                 <strong>E-mail:</strong>
													                       <a href="mailto:dariusz.skiciak@gmail.com">dariusz.skiciak@gmail.com</a> <br>
                                                 <a href="https://www.facebook.com/darek.skiciak"><img class="social_media" src="img/facebook.png" alt="FACEBOOK" /></a>
                                                 <a href="https://www.instagram.com/darekskiciak/"><img class="social_media" src="img/instagram.png" alt="INSTAGRAM" /></a>
                                                 <a href="#"><img class="social_media" src="img/twitter.png" alt="TWITTER" /></a>
                                         </address>
                                    </div>
                               </div>
                          </div>
                    </div>
                    <!--KONIEC KONTAKT -->

                    <!--FOOTER -->
                    <div class="footer">
                      <div class="container">
                           <div class="row">
                                <div class="col-xs-12">
                                     <footer class="prawa">Copyright (c) 2016 Copyright Holder All Rights Reserved.</footer>
                                </div>
                           </div>
                      </div>
                    </div>

      <!-- SKRYPTY -->
      <script src="js/jquery-1.11.0.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/animation.js"></script>
      <script src="js/karty.js"></script>
      <script src="js/email.js"></script>

  </body>
</html>
