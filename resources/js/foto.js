//funçao do menu

function toggleMenu() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('active');
}



//funcao camera
function startVideoFromCamera(){

    const specs = {video:{width:1080, aspectRatio:25/28}}

    navigator.mediaDevices.getUserMedia(specs).then(stream=>{

        const videoElement =document.querySelector("#video")
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
       
       
    });

}

window.addEventListener("DOMContentLoaded", startVideoFromCamera)