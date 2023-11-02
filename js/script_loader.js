//Script loader

window.onload = function(){
    $('#onload').fadeOut();
    $('body').removeClass('hidden');
}

/*Función mostrar y ocultar*/
function mostrar_chat(){
    document.getElementById('chatbox').style.display = 'block';
    document.getElementById('chat-box_boton').style.display = 'none';
    }
    
function ocultar_chat(){
    document.getElementById('chatbox').style.display = 'none';
    document.getElementById('chat-box_boton').style.display = 'block';
}