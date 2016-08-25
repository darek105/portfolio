<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'www.dariuszskiciak.com';
		$to = 'dariusz.skiciak@gmail.com';
		$subject = 'Message from www.dariuszskiciak';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail='<div class="alertEmail">Please enter a valid email address</div>';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alertMessage">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alertMessage">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dariusz Skiciak</title>
        <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
        <section id="topHome">
            <div class="box_menu_phone">
                <div class="for_smallScreen">
                    <div id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="hamburger_menu">
                        <ul class="menu_phone">
                            <li>
                                <a class="menu-item scrollTo" href="#topHome">HOME</a>
                            </li>
                            <li>
                                <a class="menu-item scrollTo" href="#myself">ABOUT ME</a>
                            </li>
                            <li>
                                <a class="menu-item scrollTo" href="#allSkills">SKILLS</a>
                            </li>
                            <li>
                                <a class="menu-item scrollTo" href="#portfolio">PORTFOLIO</a>
                            </li>
                            <li>
                                <a class="menu-item scrollTo" href="#contact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box_menu ">
                <ul class="menu">
                    <li class="underline">
                        <a class="menu-item scrollTo" href="#topHome">HOME</a>
                    </li>
                    <li class="underline">
                        <a class="menu-item scrollTo" href="#myself">ABOUT ME</a>
                    </li>
                    <li class="underline">
                        <a class="menu-item scrollTo" href="#allSkills">SKILLS</a>
                    </li>
                    <li class="underline">
                        <a class="menu-item scrollTo" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="underline">
                        <a class="menu-item scrollTo" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <div id="home" data-parallax="2">
                <div class="home_title">
                    <div class="portfolio_meta">
                        <span></span>
                        <h1>PORTFOLIO</h1>
                        <span></span>
                    </div>
                    <div class="border_title">
                        <span></span>
                        <img src="img/preson.png" alt=""/>
                        <span></span>
                    </div>
                    <h2>I AM FRONT END DEVELOPER</h2>
                    <h3>AND</h3>
                    <h2>computer science student</h2>
                </div>
            </div>
        </section>
        <section>
            <div id="myself">
                <div class="line">
                    <span></span>
                    <img src="img/gear.png" alt=""/>
                    <span></span>
                </div>
                <div class="title_myself">
                    <h1>WHAT I DO</h1>
                    <h2>The longer you stay in one place, the greater your chance of disillusionment</h2>
                </div>
                <div class="description_myself">
                    <div class="student">
                        <img src="img/com.png" alt=""/>
                        <h1>COMPUTER SCINCE STUDNET</h1>
                        <p>
                            I'm a student three years of computer science at the Jagiellonian University.
                        </p>
                    </div>
                    <div class="front_end">
                        <img src="img/web.png" alt=""/>
                        <h1>FRONT-END DEVELOPER</h1>
                        <p>
                            From high school, I have been starting developing websites and web applications. I mainly develops front-end but back-end not for me too like a stranger.
                        </p>
                    </div>
                    <div class="hobby">
                        <img src="img/book.png" alt=""/>
                        <h1>HOBBY</h1>
                        <p>
                            Free time, I try to keep up with the world of F1. After the F1 really like to read about technological novelties.
                        </p>
                    </div>
                </div>
                <div class="line bottom">
                    <span></span>
                    <img src="img/gear.png" alt=""/>
                    <span></span>
                </div>

            </div>
        </section>
        <section >
            <div id="allSkills">
                <div id="skills">
                    <div class="title_myself">
                        <h1>WHAT I KNOW</h1>
                        <h2>Energy and persistence conquer all things</h2>
                    </div>
                    <div class="box_skills know">
                        <div class="one_skills">
                            <h1>HTML5</h1>
                        </div>
                        <div class="two_skills">
                            <h1>CSS3</h1>
                            <h1>SASS</h1>
                        </div>
                        <div class="one_skills">
                            <h1>RWD</h1>
                        </div>
                        <div class="two_skills">
                            <h1>JAVASCRIPT</h1>
                            <h1>JQUERY</h1>
                        </div>
                        <div class="one_skills">
                            <h1>BOOTSTRAP</h1>
                        </div>
                        <div class="two_skills">
                            <h1>PHOTOSHOP</h1>
                            <h1>GIMP</h1>
                        </div>
                    </div>
                </div>
                <div id="skill_learn">
                    <div class="title_myself">
                        <h1>WHAT I LEARN</h1>
                        <h2>Energy and persistence conquer all things</h2>
                    </div>
                    <div class="box_skills learn">
                        <div class="one_skills">
                            <h1>ANGULARJS</h1>
                        </div>
                        <div class="two_skills">
                            <h1>GIT</h1>
                            <h1>PHP</h1>
                        </div>
                        <div class="one_skills">
                            <h1>LESS</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="portfolio">

                <div class="title_portfolio">
                    <h1>PORTFOLIO</h1>
                    <div class="line_portfolio">
                        <span></span>
                        <img src="img/pen.png" alt=""/>
                        <span></span>
                    </div>
                </div>
                <div class="box_port">
                    <div class="box_large">
                        <div class="one">
                            <div class="port_img">
                                <a href="portfolio/1/index.html"><img src="img/link.png" alt=""/></a>
                                <a href="https://github.com/darek145/portfolio/tree/master/portfolio/2"><img src="img/git.png" alt=""/></a>
                            </div>
                        </div>
                        <div class="two">
                            <div class="port_img">
                                <a href="portfolio/2/index.html"><img src="img/link.png" alt=""/></a>
                                <a href="https://github.com/darek145/portfolio/tree/master/portfolio/3"><img src="img/git.png" alt=""/></a>
                            </div>
                        </div>
                        <div class="three">
                            <div class="port_img">
                                <a href="portfolio/3/index.html"><img src="img/link.png" alt=""/></a>
                                <a href="https://github.com/darek145/portfolio/tree/master/portfolio/8"><img src="img/git.png" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <div class="box_large">
                        <div class="four">
                            <div class="port_img">
                                <a href="portfolio/4/index.html"><img src="img/link.png" alt=""/></a>
                                <a href="https://github.com/darek145/portfolio/tree/master/portfolio/4"><img src="img/git.png" alt=""/></a>
                            </div>
                        </div>
                        <div class="five">
                            <div class="port_img">
                                <a href="portfolio/5/index/index.html"><img src="img/link.png" alt=""/></a>
                                <a href="https://github.com/darek145/portfolio/tree/master/portfolio/5"><img src="img/git.png" alt=""/></a>
                            </div>
                        </div>
                        <div class="six">
                            <div class="port_img">
                                <a href="portfolio/6/index.html"><img src="img/link.png" alt=""/></a>
                                <a href="https://github.com/darek145/portfolio/tree/master/portfolio/1"><img src="img/git.png" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div id="contact">
                <div class="title_contact">
                    <h1>CONTACT</h1>
                    <div class="line_contact">
                        <span></span>
                        <img src="img/mail.png" alt=""/>
                        <span></span>
                    </div>
                </div>
                <div class="point">
                    <div class="localization">
                        <img src="img/gps.png" alt=""/>
                        <h1>POLAND, CRACOW</h1>
                    </div>
                    <div class="adresEmail">
                        <img src="img/letter.png" alt=""/>
                        <div class="phoneEmail">
                            <h1>+48 888 217 883</h1>
                            <h1>dariusz.skiciak@gmail.com</h1>
                        </div>
                    </div>
                </div>
                <div class="email">
                    <form class="" action="index.php" method="post">
                        <div class="name">
                            <input type="text" name="name" id="name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
                        </div>
                        <div class="mail">
                            <input type="text" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
														<?php echo $errEmail; ?>
                        </div>
                        <div class="message">
                            <textarea name="message" id="message" rows="8" cols="40" placeholder="Write something..." required><?php echo htmlspecialchars($_POST['message']);?></textarea>
                        </div>
                        <div class="send">
                            <input type="submit" id="submit" name="submit" value="SEND">
														 <?php echo $result; ?>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div id="map"></div>
        </section>
        <section>
            <footer>
                <h1>Copyright (c) 2016 Copyright Holder All Rights Reserved.</h1>
            </footer>
        </section>

        <script src="jquery-1.11.0.js"></script>
        <script src="script.js"></script>
    </body>
</html>
