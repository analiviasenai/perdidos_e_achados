<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontre Já</title>
    @vite(['resources/css/aviso.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('show');  // Toggle da classe 'show' para abrir e fechar o menu
        }
        function searchItems() {
            var input, filter, cards, cardContainer, card, i, txtValue;
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

   
    <div class="search-bar">
        <div class="search-container">
            <input type="text" id="searchInput" onkeyup="searchItems()" placeholder="Buscar...">
        </div>
    </div>

    
    <div id="cardContainer" class="card-container">
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
                <div class="icon"><i class="fas fa-exclamation-tr iangle"></i> <span style="color: #4b0082;">Objetos</span></div>
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
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Acessórios</span></div>
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
                <div class="icon"><i class="fas fa-exclamation-triangle"></i> <span style="color: #4b0082;">Fones</span></div>
                <div class="date-time">20/06 13:50 h</div>
            </div>
            <div class="card-body">
                <div class="alert">Alerta !</div>
                Foi encontrado um fone.
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
    