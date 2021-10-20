window.addEventListener('load', () =>{
   let imagen  = new Image();

   imagen.addEventListener('load' , function () {
       let canvasImage = document.querySelector('#canvasImage');

       let contexto = canvasImage.getContext('2d');

       contexto.drawImage(imagen, 0, 0);

       let datosImagen = contexto.getImagenDate(0, 0, this.width, this.height);

       try{
            let texto = OCRAD(datosImagen);

            document.querySelector('#resultado').innerText = texto;
       }catch(error){

       }
   });

   imagen.src = 'img.png'
});