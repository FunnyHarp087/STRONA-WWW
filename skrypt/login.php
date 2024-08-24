<?php
session_start();

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "logowanie";
             
$conn = @new mysqli($host, $db_user, $db_password, $db_name);
    
    $log = $_POST['log'];
    $pass = $_POST['pass'];


    if(isset($_POST['rel']))
    {
        $data = date("Y-m-d");
        $kw1 = "INSERT INTO log (login, haslo, rok) VALUES ('$log', '$pass', '$data')";
            if ($conn->query($kw1)) {
                echo "Pomyślnie zarejestrowano";
                header('Location: ../html/index.html');
            }
    }else if(isset($_POST['but']))
    {
        $kw2 = "SELECT * FROM log WHERE login = '$log' AND haslo = '$pass'";
        $result1 = $conn->query($kw2);

            if ($result1) {
                $ilosc = $result1->num_rows;
                if ($ilosc == 1) {
                    $tak = $result1->fetch_assoc();
                    $_SESSION['nazwa'] = $tak['login'];
                    $_SESSION['photo'] = $tak['photo'];
                    $_SESSION['data'] = $tak['rok'];

                    unset($_SESSION['blad']);
                    $result1->close();
                    header('Location: ../html/index.php');
                } else {
                    $_SESSION['blad'] = '<span style="color:white;">Nieprawidłowy login lub hasło!</span>';
                    header('Location: ../html/index.php');
                }
            }
    }

    $conn->close();
?>