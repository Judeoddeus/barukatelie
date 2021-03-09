// Início do banner rotativo
let fotos = ["banner-verao.jpg", "banner-inverno.jpg", "banner-primavera.jpg", "banner-outono.jpg"];


function TrocarFoto(foto){
    document.querySelector(".banner-rotativo").src = "images/slider/" + fotos[foto];
}

let fotoAtual = 0;
TrocarFoto(fotoAtual);

setInterval(function(){
    fotoAtual++;
    if(fotoAtual > 3){
        fotoAtual = 0;
    }

    TrocarFoto(fotoAtual);
}, 3000);

// Fim


// Animação da galeria
$('#gallery a').lightBox();
// fim