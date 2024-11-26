<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400, initial-scale=1.0">
    <title>Camera</title>   
    @vite(['resources/css/foto.css', 'resources/js/foto.js'])
    <link rel="stylesheet" href="{{ asset('css/foto.css') }}"href="{{ asset('js/foto.js') }}" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
         function toggleMenu() {
           var menu = document.getElementById('menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
               menu.style.display = 'block';
           } else {
              menu.style.display = 'none';
            }
     }
    </script>
</head>
<body>
<div class="header">
        <h1>
         ENCONTRE JÁ
        </h1>
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()">
        </i>
       </div>
        </i>
       <div class="menu" id="menu">
        <i class="fas fa-times close-icon" onclick="toggleMenu()">
             </i>

             <a href="home">
         <i class="fas fa-home">
         </i>
        Página inicial
        </a>
        
        <a href="foto">
         <i class="fas fa-plus-circle">
         </i>
         Inserir Objeto
        </a>

        <a href="login">
         <i class="fas fa-user-cog">
         </i>
         Conta Administrador
        </a>

        <a href="aviso">
         <i class="fas fa-bell">
         </i>
         Notificações
        </a>
        
       </div>
   
    <br>
    <div id="camera">
        <video id="video" autoplay></video>
        <canvas id="captura"></canvas>
    </div> 
    <br>
    <br>

    <div class="botaoCamera">
        <img id="botao" width="120px" height="100px" src="{{ asset('img/botao.png') }}">   <br>
    </div>    

    <br>
    <form id="upload-form">
    <div class="centered-upload-button">
        <input type="file" id="upload" name="upload" />
        <br><br>
        <button id="uploadButton" type="submit">Avançar</button>
      </div>
    </form>
</body>
</html>