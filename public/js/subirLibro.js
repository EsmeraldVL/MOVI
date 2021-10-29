document.getElementById("file11").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function() {
      let preview = document.getElementById('preview'),
        image = document.getElementById('foto');

      image.src = reader.result;

      preview.innerHTML = '';
      preview.append(image);

    };
    console.log(document.getElementById("file11").value);
  }


function TestFileType( fileName, fileTypes ) {
if (!fileName) return;

dots = fileName.split(".")
//get the part AFTER the LAST period.
fileType = "." + dots[dots.length-1];

return (fileTypes.join(".").indexOf(fileType) != -1) ?
alert('That file is OK!') : 
alert("Please only upload files that end in types: \n\n" + (fileTypes.join(" .")) + "\n\nPlease select a new file and try again.");
}
