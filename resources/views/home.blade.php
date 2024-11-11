<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    
</head>
<body>
    <div class="header">
        <h1>
         ENCONTRE JÁ
        </h1>
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()">
        </i>
       </div>
       <div class="search-bar">
        <i class="fas fa-search">
        </i>
        <input id="searchInput" onkeyup="filterPosts()" placeholder="Search..." type="text"/>
       </div>
       <div class="menu" id="menu">
        <i class="fas fa-times close-icon" onclick="toggleMenu()">
        </i>
         <i class="fas fa-home">
         </i>
         Página Inicial
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
       <div class="post" data-name="eletrônico">
        <div class="post-header">
         <div class="avatar" style="background-color: #ff7043;">
          E
         </div>
         <div class="name">
          Ernesto Coordenador
         </div>
        </div>
        <img src="{{ asset('img/celularperdido.png') }}" height="350" width="300"></img>
        <div class="description">
         Encontrado no refeitório, às 12:45
        </div>
        <div class="category">
         Eletrônico
        </div>
        <div class="date">
         06/08
        </div>
        <div class="verified perdido">
         Perdido
         <i class="fas fa-times">
         </i>
        </div>
       </div>
       <div class="post" data-name="garrafa">
        <div class="post-header">
         <div class="avatar" style="background-color: #e91e63;">
          B
         </div>
         <div class="name">
          Beatriz Limpeza
         </div>
        
        </div>
        <img src="{{ asset('img/garrafa.png') }}" height="350" width="300"></img>
        <div class="description">
         Encontrado na sala de limpeza, às 14:30
        </div>
        <div class="category">
         Garrafa
        </div>
        <div class="date">
         06/08
        </div>
        <div class="verified">
         Achado
         <i class="fas fa-check">
         </i>
        </div>
       </div>
       @foreach ($fotos as $foto)
       <div class="post" data-name="carteira">
        <div class="post-header">
         <div class="avatar" style="background-color: #ff7043;">
          E
         </div>
         <div class="name">
          {{ $foto->id }}
         </div>
        </div>
        <img src="{{ $foto->source }}" height="350" width="300"></img>
        <div class="description">
         {{ $foto->descricao }}
        </div>
        <div class="category">
         {{ $foto->airline }}
        </div>
        <div class="date">
         {{ $foto->created_at }}
        </div>
        <div class="verified perdido">
         Perdido
         <i class="fas fa-times">
         </i>
        </div>
       </div>
       @endforeach
       <div class="post" data-name="carteira">
        <div class="post-header">
         <div class="avatar" style="background-color: #ff7043;">
          E
         </div>
         <div class="name">
          Ernesto Coordenador
         </div>
        </div>
        <img src="{{ asset('img/carteira.png') }}" height="350" width="300"></img>
        <div class="description">
         Encontrado na biblioteca, às 10:00
        </div>
        <div class="category">
         Carteira
        </div>
        <div class="date">
         05/08
        </div>
        <div class="verified perdido">
         Perdido
         <i class="fas fa-times">
         </i>
        </div>
       </div>
       <div class="post" data-name="chaves">
        <div class="post-header">
         <div class="avatar" style="background-color: #e91e63;">
          B
         </div>
         <div class="name">
          Beatriz Limpeza
         </div>
    
        </div>
        <img src="{{ asset('img/chavesperdidas.png') }}" height="350" width="300"></img>
        <div class="description">
         Encontrado no corredor, às 09:15
        </div>
        <div class="category">
         Chaves
        </div>
        <div class="date">
         05/08
        </div>
        <div class="verified">
         Achado
         <i class="fas fa-check">
         </i>
        </div>
       </div>
       <script>
        function toggleMenu() {
                 var menu = document.getElementById('menu');
                 if (menu.style.display === 'flex') {
                     menu.style.display = 'none';
                 } else {
                     menu.style.display = 'flex';
                 }
             }
     
             function filterPosts() {
                 var input, filter, posts, post, i, txtValue;
                 input = document.getElementById('searchInput');
                 filter = input.value.toLowerCase();
                 posts = document.getElementsByClassName('post');
     
                 for (i = 0; i < posts.length; i++) {
                     post = posts[i];
                     txtValue = post.getAttribute('data-name');
                     if (txtValue.toLowerCase().indexOf(filter) > -1) {
                         post.style.display = "";
                     } else {
                         post.style.display = "none";
                     }
                 }
             }
       </script>
</body>
</html>