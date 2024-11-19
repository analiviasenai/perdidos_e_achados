<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>postar</title>
    <link rel="stylesheet"  href="{{ asset('css/postar.css') }}">
    
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
         <a href="{{ route('home') }}">
          Página Inicial
         </a>
         <a href="foto">
          Inserir Objeto
         </a>
         <a href="login">
          Conta Administrador
         </a>
         <a href="aviso">
          Notificações
         </a>
        </div>
       </div>
       <div class="container">
        <div class="title-container">
         <a href="home">
          <i class="fas fa-arrow-left back-icon">
          </i>
         </a>
         <div class="title">
          NOVA PUBLICAÇÃO
         </div>
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action= "{{ route('postar.store') }}"  method="POST"
         enctype="multipart/form-data">
        @csrf
        <div class="image-container">
            <img id="uploaded-image" src="" alt="Imagem enviada">
            <input id="input-img" type="hidden" name="img" value="" />
            <script>
              const base64String = localStorage.getItem('image');
              const img = document.getElementById('uploaded-image');
              img.src = base64String;
              const imgInput = document.getElementById('input-img');
              imgInput.value = base64String;
            </script>
        </div>
        <div class="caption-input-container">
        </div>
        <div class="options">
        <input type="text" name="descricao" required>
        <input type="text" name="airline" required>
        <button class="share-button" type="submit">
         Compartilhar
        </a>
        </form>
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