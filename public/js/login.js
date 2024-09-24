function toggleDropdown() {
    var dropdown = document.getElementById('dropdown');
    if (dropdown.style.display === 'block') {
        dropdown.style.display = 'none';
    } else {
        dropdown.style.display = 'block';
    }
  }
  
  function login() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
  
    fetch('http://localhost:3000/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => {
        if (response.status === 200) {
            alert('Login successful');
        } else {
            alert('Invalid credentials');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
  }
 
const button = document.getElementById('entrar');

// Adicione um evento de clique ao botão
button.addEventListener('click', function() {
  // Quando o botão for clicado, redirecione para a outra página
  window.location.href = 'home.html';
});