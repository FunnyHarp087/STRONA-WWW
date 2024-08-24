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
        <div id="logo"><img src="../zdjecia/pad.png">USŁUGI</div>
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
            TO TUTAJ ZNAJDZIESZ OFEROWANE PRZEZEMNIE USŁUGI.<br>
            DO KAŻDEJ USŁUGI PODCHODZĘ BARDZO INDYWIDUALNIE ORAZ Z CAŁĄ CHĘCIĄ JĄ WYKONUJE.<br>
            OCZYWISCIE STAWKA JEST LICZONA OD GODZINY.
            <br>
            <p>
            <form onsubmit="return false;">
                <table>
                    <tr>
                        <td><input type="radio" id="us1"></td>
                        <td>NAPRAWA KOMPUTERA</td>
                    </tr>
                    <tr>
                        <td><input type="radio" id="us2"></td>
                        <td>NAPRAWA SIECI LOKALNYCH</td>
                    </tr>
                    <tr>
                        <td><input type="radio" id="us3"></td>
                        <td>WYMIANA PODZESPOŁÓW</td>
                    </tr>
                    <tr>
                        <td><input type="radio" id="us4"></td>
                        <td>POMOC PRZY PROJEKTOWANIU STRONY</td>
                    </tr>
                    <tr>
                        <td><input type="radio" id="us5"></td>
                        <td>ZARZĄDZANIE OBSŁUGĄ BAZY DANYCH</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="reset">RESETUJ OPCJE WYBORU</button>
                            <button onclick="oblicz()">ZOBACZ MÓJ CENNIK</button>
                        </td>
                    </tr>
                </table>
            </form>
            
            </p>
            <p id="wynik"></p>
            <script src="../skrypt/uslugi.js"></script>
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