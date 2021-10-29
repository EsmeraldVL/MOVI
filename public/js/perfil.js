var nombre = document.getElementById("nombresID");
var apellido = document.getElementById('apellidosID');
var pais = document.getElementById('paisID');
var Fecha_Nacimiento = document.getElementById('fechaNID');
var editar_btn= document.getElementById('editar');
var guardar_btn= document.getElementById('guardar');

function editarD() {
    guardar_btn.style.display = 'inline';
    editar_btn.style.display = 'none';
    nombre.disabled=false;
    apellido.disabled=false;
    pais.disabled=false;
    
}

function ocultar() {
    guardar_btn.style.display = 'none';
    editar_btn.style.display = 'inline';
    nombre.disabled=true;
    apellido.disabled=true;
    pais.disabled=true;
}