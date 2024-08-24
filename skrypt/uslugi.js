function oblicz()
{
    var wynik = document.getElementById("wynik")
    var suma = 0;
    var usluga1 = 100;
    var usluga2 = 90;
    var usluga3 = 50;
    var usluga4 = 30;
    var usluga5 = 150;
    
    if(document.getElementById("us1").checked){
        suma += usluga1;
    }
    if(document.getElementById("us2").checked){
        suma += usluga2;
    }
    if(document.getElementById("us3").checked){
        suma += usluga3;
    }
    if(document.getElementById("us4").checked){
        suma += usluga4;
    }
    if(document.getElementById("us5").checked){
        suma += usluga5;
    }
    wynik.innerHTML = "Koszt mojej/moich usług wynosi: " + suma + " zł";
}