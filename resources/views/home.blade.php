<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @vite(['resources/css/home.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    
</head>
<body>
    <div class="header">
        <h1 ali>
         ENCONTRE JÁ
        </h1>
        <i class="fas fa-bars menu-icon" onclick="toggleMenu()">
        </i>
       </div>
       <div class="search-bar">
        </i>

            <!--<i class="fas fa-search">-->
            <input id="searchInput" onkeyup="filterPosts()" placeholder=" Buscar..." type="text" />
       </div>
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
       
       @foreach ($fotos as $foto)
       <div class="post" data-name="carteira">
        <div class="post-header">
         <div class="avatar" style="background-color: #ff7043;">
         {{ $foto->user->name[0]}}
         </div>
         <div class="name">
          {{ $foto->user->name}}
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
        </div>
       </div>
       @endforeach
      
</body>

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

</html>