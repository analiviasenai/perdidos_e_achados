//funçao do menu

function toggleMenu() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('active');
}



//funcao camera
function startVideoFromCamera(){
    const specs = {video:{width:1080, aspectRatio:25/28}}

    let stream = null;

    navigator.mediaDevices.getUserMedia(specs).then(_stream=>{
        stream = _stream;
        const videoElement = document.querySelector("#video")
        videoElement.srcObject = stream;
        video.play();

    }).catch(error => {
        console.log(error);
    })

    document.querySelector('#botao').addEventListener('click',() =>{
       var canvas = document.querySelector('#captura');
       var video = document.querySelector('#video');
       canvas.height = video.videoHeight;
       canvas.width = video.videoWidth;
       var context = canvas.getContext('2d');
       context.drawImage(video,0  ,0 ,canvas.width,canvas.height);
       video.pause();

       // Add this code to download the image
       canvas.toBlob(blob => {
         const url = URL.createObjectURL(blob);
         const a = document.createElement('a');
         a.href = url;
         a.download = 'captured_image.png';
         a.click();
       });

       // Reset the video element and request access to the camera again
       video.srcObject = null;
       stream.getTracks().forEach(track => track.stop());
       navigator.mediaDevices.getUserMedia(specs).then(_stream=>{
           stream = _stream;
           video.srcObject = stream;
           video.play();
       }).catch(error => {
           console.log(error);
       });
    });
}
window.addEventListener("DOMContentLoaded", startVideoFromCamera)

  /*botao avancar*/
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('upload-form');
    const fileInput = document.getElementById('upload');

    if (form && fileInput) {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onloadend = () => {
          const base64String = reader.result;
          localStorage.setItem('image', base64String);
          location.href = 'postar.html'; // Redireciona para a página 2
        };
        reader.readAsDataURL(file);
      });
    } else {
      console.error('Elementos não encontrados');
    }
  });