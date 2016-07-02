<?php
require ('simple_html_dom.php');
$html = file_get_html("https://www.youtube.com/user/PowerAmbroz/about")
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Cempatible" content="IE=edge,chrome=1" />

  <title>Ambroz's Twitch Channel</title>

  <meta name="description" content="Stworzę dla Ciebie stronę WWW oraz film! Zatrudnij Programistę: PHP, JavaScript, HTML, CSS, JQuery, MySQL, WordPress, Joomla. Zatrudnij Profesjonalny Montarz Filmu!!" />
  <meta name="keywords" content="zamów, stronę, tworzenie, www, montarz, php, portfolio, html, javascript, jquery, WordPress, MySQL, Joomla" />
  <link rel="stylesheet" href="../style/twitchstyle.css" type="text/css" />
  <link rel="stylesheet" href="../css/fontello.css" type="text/css"/>
  <link href='https://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>
<body onload>

  <div id="container">
    <div class="rectangle">
      <div id="logo">Ambroz's Twitch</div>
      <div id="zegar">12:00:00</div>
      <div style="clear:both"></div>
    </div>

    <div class="square">
      <a href="../index.php" id="powrot" class="tilelink">
        <div class="tile1">
          <i class="icon-to-start-alt"></i><br />Powrót
        </div></a>
        <a href="https://www.twitch.tv/powerambroz/profile/highlights" id="transmisjetwitch" target="_blankc" class="tilelink">
          <div class="tile1_1">
            <i class="icon-twitch"></i><br />Poprzednie Transmisje
          </div></a>
          <div style="clear:both"></div>

          <a href="cv.php" id="ogladajtrnsmisje" class="tilelink">
            <div class="tile2">
              <i class="icon-desktop"></i><br />Oglądaj Transmisje
            </div></a>
            <a href="https://socialblade.com/twitch/user/powerambroz" id="statystyki" target="_blank" class="tilelink">
              <div class="tile3">
                <i class="icon-signal"></i><br />Statystyki
              </div></a>
              <div style="clear:both"></div>

              <div class="tile4">
                <i>”It's time to kick ass and chew bubble gum, and I am all out of gum.” </i><br />– Duke z Duke Nukem 3D
              </div>
            </div>
            <div class="square">
              <div id="info" class="tile5">
                Hej Moi Drodzy z Tej Strony Ambroz<br /><br /> Witam was na stronie reprezentującej mój kanał w serwisie Twitch.
                Znajdziecie tu linki do FanPage na FB, Google+, kanału w serwisie YouTube oraz Twitch.tv.
              </div>
              <a href="http://www.youtube.com/c/TheWitcherWolves" target="_blank" id="kanalyt_twitch" class="tilelink">
                <div class="yt">
                  <i class="icon-youtube"></i>
                </div></a>
                <a href="https://www.facebook.com/The-Witcher-Wolves-104450432985287/" target="_blank" id="fanpagefb_twitch" class="tilelink">
                  <div class="fb">
                    <i class="icon-facebook-squared"></i>
                  </div></a>
                  <a href="https://plus.google.com/b/117740807669273170331/+TheWitcherWolves/posts?pageId=117740807669273170331" target="_blank" id="fanpagegplus_twitch" class="tilelink">
                    <div class="gplus">
                      <i class="icon-gplus-squared"></i>
                    </div></a>
                    <a href="https://www.twitch.tv/powerambroz/profile" target="_blank" id="twitch" class="tilelink">
                      <div class="twitch">
                        <i class="icon-twitch"></i>
                      </div></a>
                      <div style="clear:both"></div>
                    </div>
                    <div style="clear:both"></div>

                    <div class="rectangle">2016 &copy; Paweł Ambroziak - Portfolio. Programista webowy oraz Monter Filmów zaprasza do współpracy!</div>
                  </div>
                  <?php
                  include('../view/footer.php');
                  ?>
