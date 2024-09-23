<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>postar</title>
    <link rel="stylesheet" href="postar.css">
    @vite('/resources/css/postar.css')
    <script>
        function toggleMenu() {
                 var menu = document.getElementById('menu');
                 if (menu.style.display === 'block') {
                     menu.style.display = 'none';
                 } else {
                     menu.style.display = 'block';
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
        <div class="menu" id="menu">
         <a href="home.html">
          Página Inicial
         </a>
         <a href="foto.html">
          Inserir Objeto
         </a>
         <a href="login.html">
          Conta Administrador
         </a>
         <a href="aviso.html">
          Notificações
         </a>
        </div>
       </div>
       <div class="container">
        <div class="title-container">
         <a href="home.html">
          <i class="fas fa-arrow-left back-icon">
          </i>
         </a>
         <div class="title">
          NOVA PUBLICAÇÃO
         </div>
        </div>
        <div class="image-container">
         <img alt="" width="600"/>
        </div>
        <div class="caption-input-container">
         <textarea class="caption-input" placeholder=" ">
         </textarea>
         <div class="caption-placeholder">
          Escreva uma legenda...
         </div>
        </div>
        <div class="options">
         <div class="option">
          <i class="fas fa-folder">
          </i>
          <select class="select-category">
           <option value="eletronicos">
            Eletrônicos
           </option>
           <option value="vestuario">
            Vestuário
           </option>
           <option value="objetos">
            Objetos
           </option>
           <option value="documento">
            Documento
           </option>
          </select>
         </div>
        </div>
        <a class="share-button" href="#">
         Compartilhar
        </a>
       </div>
       <script>
        const captionInput = document.querySelector('.caption-input');
             const captionPlaceholder = document.querySelector('.caption-placeholder');
     
             captionInput.addEventListener('input', function() {
                 if (captionInput.value.trim() !== '') {
                     captionPlaceholder.style.display = 'none';
                 } else {
                     captionPlaceholder.style.display = 'block';
                 }
             });
       </script>
</body>
</html>