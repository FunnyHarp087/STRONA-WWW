function tak(txt)
{
    var wynik = document.getElementById('wynik');

    if(txt === 'bold'){
        wynik.style.fontWeight = "bold";
    }
    if(txt === 'italic'){
        wynik.style.fontStyle = "italic";
    }
    if(txt === 'left'){
        wynik.style.textAlign = "left";
    }
    if(txt === 'right'){
        wynik.style.textAlign = "right";
    }
    if(txt === 'center'){
        wynik.style.textAlign = "center";
    }
    if(txt === 'justify'){
        wynik.style.textAlign = "justify";
    }

}
function reset()
{
    var wynik = document.getElementById('wynik');
    
    wynik.style.fontWeight = "normal";
    wynik.style.fontStyle = "normal";
}