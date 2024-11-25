<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontre Já</title>
    @vite(['resources/css/foto.css', 'resources/js/foto.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            color: #4b0082;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 10px 20px;
            border-bottom: 1px solid #ccc;
        }
        .header h1 {
            font-size: 20px;
        }
        .header .menu-icon {
            font-size: 24px;
            cursor: pointer;
    color: #4a148c; /* Ícone na cor branca */
            border-radius: 5px;
            padding: 5px;
            width: 40px; /* Largura do retângulo */
            height: 40px; /* Altura do retângulo */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .menu {
            position: absolute;
            top: 60px; /* Ajuste para ficar abaixo do cabeçalho */
            right: 20px;
            background-color: #3f51b5;
            color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: none; /* Inicialmente escondido */
            flex-direction: column;
            z-index: 1000;
        }
        .menu.show {
            display: flex; /* Mostra o menu quando a classe 'show' é adicionada */
        }
        .menu a {
            padding: 15px 20px;
            text-decoration: none;
            color: white;
            border-bottom: 1px solid #5c6bc0;
        }
        .menu a:last-child {
            border-bottom: none;
        }
        .menu a:hover {
            background-color: #5c6bc0;
        }
        .menu .close-icon {
            align-self: flex-end;
            padding: 10px;
            cursor: pointer;
        }
        .search-bar {
            display: flex;
            justify-content: center;
            padding: 10px 0;
            position: relative;
        }
        .search-bar input {
            width: 95%; /* Aumenta o comprimento da barra de busca */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding-left: 40px;
        }
        .search-bar .fa-search {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ccc;
        }
        .card {
            background-color: white;
            border: 1px solid #4b0082;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            margin-bottom: 10px;
            color: #4b0082;
        }
        .card .card-header .icon {
            font-size: 24px;
            color: #FFD700; /* Cor amarela para o ícone de alerta */
        }
        .card .card-header .date-time {
            font-size: 14px;
            color: #333;
        }
        .card .card-body {
            font-size: 14px;
            color: #666;
        }
        .card .card-body .alert {
            font-weight: bold;
            color: #4b0082;
        }
    </style>
    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('show');  // Toggle da classe 'show' para abrir e fechar o menu
        }
        function searchItems() {
            var input, filter, cards, cardContainer , card, i, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toLowerCase();
            cardContainer = document.getElementById('cardContainer');
            cards = cardContainer.getElementsByClassName('card');

            for (i = 0; i < cards.length; i++) {
                card = cards[i];
                txtValue = card.textContent || card.innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    card.style.display = "";
                } else {
                    card.style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
    <!-- Header e Menu -->
    <div class="header">
        <h1>ENCONTRE JÁ</h1>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </div>

    <div class="menu" id="menu">
        <i class="fas fa-times close-icon" onclick="toggleMenu()"></i> 

        <a href="home">
            <i class="fas fa-home"></i>
            Página inicial
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

    <!-- Barra de Pesquisa -->
    <div class="search-bar">
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" id="searchInput" onkeyup="searchItems()" placeholder="Buscar...">
        </div>
    </div>

    <!-- Cards com Notificações -->
    <div id="cardContainer">
        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Vestuário</span></div>
                <div class="date-time">18/08 15:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado uma blusa de frio.
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Eletrônicos</span></div>
                <div class="date-time">10/08 08:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado um relógio digital.
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Objetos</span></div>
                <div class="date-time">05/08 09:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado uma garrafa térmica.
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Documento</span></div>
                <div class="date-time">22/05 15:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado uma carteira de motorista.
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa -exclamation-triangle"></i> <span style="color: #4b0082;">Acessórios</span></div>
                <div class="date-time">12/09 14:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado um par de óculos.
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Livros</span></div>
                <div class="date-time">30/07 11:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado um livro de matemática.
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Chaves</span></div>
                <div class="date-time">25/06 10:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado um chaveiro com várias chaves.
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Mochilas</span></div>
                <div class="date-time">15/04 13:00 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrada uma mochila preta.
            </div>
        </div>
    </div>
</body>
</html>