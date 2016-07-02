<!DOCTYPE HTML>
<html lang="pl">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Cempatible" content="IE=edge,chrome=1" />

  <title>Paweł Ambroziak - Portfolio i Twórczość</title>

  <meta name="description" content="Stworzę dla Ciebie stronę WWW oraz film! Zatrudnij Programistę: PHP, JavaScript, HTML, CSS, JQuery, MySQL, WordPress, Joomla. Zatrudnij Profesjonalny Montarz Filmu!!" />
  <meta name="keywords" content="zamów, stronę, tworzenie, www, montarz, php, portfolio, html, javascript, jquery, WordPress, MySQL, Joomla" />
  <link rel="stylesheet" href="style/style.css" type="text/css" />
  <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
  <link href='https://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<script type="text/javascript" src="js/zegarek.js"></script>
  <script type="text/javascript" src="js/hover_index.js"></script>
</head>
<body onload="odliczanie();">

  <div id="container">
    <div class="rectangle">
      <div id="logo">Paweł Ambroziak</div>
	<div id="zegar"></div>
      <div style="clear:both"></div>
    </div>

    <div class="square">
      <a href="kimjestem.php" id="kimjestem" class="tilelink">
        <div class="tile1">
          <i class="icon-user"></i><br />Kim Jestem?
        </div></a>
        <a href="php/cooferuje.php" id="cooferuje" class="tilelink">
          <div class="tile1_1">
            <i class="icon-laptop"></i><br />Co Oferuję?
          </div></a>
          <div style="clear:both"></div>

          <a href="CV.pdf" id="cv" target="_blank" class="tilelink">
            <div class="tile2">
              <i class="icon-vcard"></i><br />Curruculum Vitae
            </div></a>
            <a href="mailto:n7komandore@gmail.com" id="kontakt" class="tilelink">
              <div class="tile3">
                <i class="icon-gmail"></i><br />Kontakt ze mną
              </div></a>
              <div style="clear:both"></div>

              <div class="tile4">
                <i>”Problem z programistami jest taki, że nigdy nie da się powiedzieć, co robią, zanim nie jest za późno” </i>– Seymour Cray
              </div>
            </div>
            <div class="square">
              <div id="info" class="tile5">
                Witam Ciebie<br /><br />
                Witaj na mojej stronie, gdzie dowiesz się kim jestem, jakie mam zainteresowania. Zobaczysz także moje CV oraz co potrafię zrobić. Dodatkowo dowiesz sie o moich pasjach. Miłego Oglądania!
              </div>
              <a href="php/yt.php" id="yt" class="tilelink">
                <div class="yt">
                  <i class="icon-youtube"></i>
                </div></a>
                <!--<a href="fb.php" class="tilelink">
                <div class="fb">
                <i class="icon-facebook-squared"></i>
              </div></a>
              <a href="gplus.php" class="tilelink">
              <div class="gplus">
              <i class="icon-gplus-squared"></i>
            </div></a>-->
            <a href="php/twitch.php" class="tilelink">
              <div class="twitch">
                <i class="icon-twitch"></i>
              </div></a>
              <div style="clear:both"></div>
            </div>
            <div style="clear:both"></div>

            <div class="rectangle">2016 &copy; Paweł Ambroziak - Portfolio. Programista webowy oraz Monter Filmów zaprasza do współpracy!</div>
          </div>
          <?php
          // include_once('view/footer.php');
          ?>
        </body>
        </html>
