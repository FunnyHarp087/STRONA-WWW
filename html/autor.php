<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>STRONA WWW</title>
    <link rel="stylesheet" href="../styl/styl.css">
    <link rel="icon" href="../zdjecia/logo.png">
    <link rel="stylesheet" href="../zdjecia/fontello-d8586a9b/css/fontello.css">
</head>
<body>
    <div id="wrap">
        <div id="logo"><img src="../zdjecia/pad.png">O AUTORZE</div>
        <div id="menu">
            <ol>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="uslugi.php">Usługi</a></li>
                <li><a href="autor.php">O autorze</a></li>
            </ol>
        </div>
        <div id="log">
            <div id="login">
            <?php
                if(isset($_SESSION['blad'])){
                    echo '<p>'.$_SESSION['blad'].'<br>'."<a href='../html/index.html'>Powrót</a>".'</p>';
                    ;
                }else{
                    echo "<p>Witaj ".$_SESSION['nazwa']."!</p>";
                echo '<div id="imglog">';
                echo "<img src='../zdjecia/".$_SESSION['photo']."' id='img1'>";
                echo '<p id="imgtxt">'."Data utworzenia konta: ".'<br>'.'<b>'.$_SESSION['data'].'</b>'.'</p>';
                echo '</div>';
                echo "<a href='../html/index.html'>Wyloguj</a>";
                }
            ?>
            </div>
            <div id="aktywosc">
            </div>
        </div>
        <div id="opis">
            <i class="icon-user" style="float: left;"></i>
            NAZYWAM SIĘ JAKUB. JESTEM UCZCIEM KLASY 5, W KTOREJ SPECJALIZUJE SIĘ DZIEDZINIE INFORMATYCZNEJ. LUBIE PROGRAMOWAĆ, TWORZYĆ STRONY WWW W WOLNYM CZASIE ORAZ CHODZIĆ NA SIŁOWNIE. <br>
            MAM 20LAT ORAZ DUŻO CHĘCI DO PRACY CO JEST SPORĄ ZALETĄ WŚRÓD MŁODYCH OSÓB.
        </div>
        <div id="stopka">
            <div id="fb">
                <a href="https://www.facebook.com/jakub.staszek.336/" target="_blank"><i class="icon-facebook-rect"></i></a></div>
            <div id="git">
                <a href="https://github.com/FunnyHarp087" target="_blank"><i class="icon-github"></i></a></div>
            <div id="wc3">
                <a href="https://www.w3schools.com/" target="_blank"><i class="icon-w3c"></i></a></div>
            <div id="insta">
                <a href="https://www.instagram.com/stanaszekj/" target="_blank"><i class="icon-instagram"></i></a></div>
        </div>
    </div>
</body>
</html>