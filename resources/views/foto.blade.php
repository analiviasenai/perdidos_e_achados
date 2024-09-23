<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=400, initial-scale=1.0">
    <title>Camera</title>   
    <link rel="stylesheet" href="foto.css">
    @vite('/resources/css/foto.css')
    @vite('/resources/js/foto.js')
    <script src="./foto.js"></script>
</head>
<body>
    <script src="{{ asset('js/foto.js') }}"></script>
    <div class="header">
        <h1>ENCONTRE JÁ</h1>
        <img src="/storage/img/
        hamburguer.png" onclick="toggleMenu()" width="50" height="50">
    </div>
       <div class="menu" id="menu">
        <div class="close-icon" onclick="toggleMenu()">
         ×
        </div>
        <a href="./home.html">
         <i class="fas fa-home">
         </i>
         Página Inicial
        </a>
        <a href="./foto.html">
         <i class="fas fa-plus-circle">
         </i>
         Inserir Objeto
        </a>
        <a href="login.html">
         <i class="fas fa-user-cog">
         </i>
         Conta Administrador
        </a>
        <a href="./aviso.html">
         <i class="fas fa-bell">
         </i>
         Notificações
        </a>
       </div>
    </div>
    <div class="divider"></div>
    <div class="footer">
        <img src="#" height="40" width="40"></img>
        <div class="advance">
            <h4>AVANÇAR</h4>
        </div>
    </div>
    
    <div id="camera">
        <video id="video" autoplay></video>
        <canvas id="captura"></canvas>
    </div> 
    <br>
    <br>

    <div class="botaoCamera">
        <img id="botao" width="120px" height="100px" src="./img/botao.png">   <br>
    </div>

    <div id="meio">
        <label class="picture" for="picture__input" tabIndex="0">
            <span class="picture__image">Escolha uma imagem</span>
        </label>
        <input type="file" accept="image/*" id="picture__input"/>
    </div>
    

</body>
</html>