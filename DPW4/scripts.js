function toggleForm(type) {
  const loginForm = document.getElementById('loginForm');
  const registerForm = document.getElementById('registerForm');
  const btnLogin = document.getElementById('btnLogin');
  const btnRegister = document.getElementById('btnRegister');

  if (type === 'login') {
    loginForm.classList.add('active');
    registerForm.classList.remove('active');  
    btnLogin.classList.add('active'); 
    btnRegister.classList.remove('active'); 
  } else {  
    loginForm.classList.remove('active'); 
    registerForm.classList.add('active'); 
    btnLogin.classList.remove('active');
    btnRegister.classList.add('active');
  }
}

document.getElementById('registerForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const user = document.getElementById('regUsername').value;
  const pass = document.getElementById('regPassword').value;
  localStorage.setItem(user, JSON.stringify({ password: pass }));
  document.getElementById('registerResult').innerHTML = '<div class="message success">Registration successful!</div>';
  this.reset();
});

document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const user = document.getElementById('loginUsername').value;
  const pass = document.getElementById('loginPassword').value;
  const data = JSON.parse(localStorage.getItem(user));

  if (data && data.password === pass) {
    document.getElementById('loginResult').innerHTML = '<div class="message success">Login successful!</div>';
  } else {
    document.getElementById('loginResult').innerHTML = '<div class="message error">Login failed. Wrong credentials.</div>';
  }
});
