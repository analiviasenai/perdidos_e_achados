document.getElementById('login-form').addEventListener('submit', (e) => {
    e.preventDefault();
  
    const usuario = document.getElementById('usuario').value;
    const senha = document.getElementById('senha').value;
  
    fetch('/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ usuario, senha })
    })
    .then(response => response.json())
    .then(data => {
      if (data.autenticado) {
        window.location.href = '/pagina-de-destino';
      } else {
        alert('Credenciais inválidas');
      }
    })
    .catch(error => {
      console.error('Erro ao autenticar usuário:', error);
    });
  });