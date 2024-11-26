<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
    <script src="./login.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <div class="back-arrow">
        <a href="home">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <i class="fas fa-bars menu-icon" onclick="toggleMenu()"></i>
    <div class="menu" id="menu">
        <i class="fas fa-times close-icon" onclick="toggleMenu()"></i>
        <a href="home">
            <i class="fas fa-home"></i>
            Página Inicial
        </a>
        <a href="foto">
            <i class="fas fa-plus-circle"></i>
            Inserir Objeto
        </a>
        <a href="login">
            <i class="fas fa-user-cog"></i>
            Conta Administrador
        </a>
        <a href="aviso">
            <i class="fas fa-bell"></i>
            Notificações
        </a>
    </div>
    <div class="container">
        <div class="logo">
            <img height="50" src="{{ asset('img/logo.png') }}" width="50"/>
        </div>
        <div class="logo-text">ENCONTRE JÁ</div>
        
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <div>
                <input class="input-field" type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input class="input-field" type="password" id="password" name="password" placeholder="Senha" required>
            </div>
            <button type="submit" id="entrar">Enviar</button>
        </form>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
