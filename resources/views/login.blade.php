<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina de Login</title>
    <link rel="stylesheet" href="login.css">
    @vite('/resources/css/login.css')
    @vite('/resources/js/login.js')
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
        <a href="home.html">
         <i class="fas fa-arrow-left">
         </i>
        </a>
       </div>
       <div class="menu-icon" onclick="toggleMenu()">
        <i class="fas fa-bars">
        </i>
       </div>
       <div class="menu" id="menu">
        <a href="home.html">
         Página Inicial
        </a>
        <a href="postar.html">
         Inserir Objeto
        </a>
        <a href="postar.html">
         Conta Administrador
        </a>
        <a href="aviso.html">
         Notificações
        </a>
       </div>
       <div class="container">
        <div class="logo">
         <img alt="Magnifying glass icon" height="50" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-Hh5RPsKhtBPsWCFSiEKnUJ6x/user-8qgiVpCV0U0b7zDjfFInHgjl/img-zkLoF30B5dbiw7SRaTFIV0dc.png?st=2024-09-16T18%3A30%3A40Z&amp;se=2024-09-16T20%3A30%3A40Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-16T00%3A26%3A25Z&amp;ske=2024-09-17T00%3A26%3A25Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=dkOSMInu7qrSnV6fSNnjZDem3zLMfpt%2BzGhzUZYt9vo%3D" width="50"/>
        </div>
        <div class="logo-text">
         ENCONTRE JÁ
        </div>
        <input class="input-field" placeholder="e-mail" type="text"/>
        <input class="input-field" placeholder="Senha" type="password"/>
        <button class="login-button">
         ENTRAR
        </button>
       </div>
</body>
</html>