function toggleForms() {
    const registerForm = document.getElementById('register-form');
    const loginForm = document.getElementById('login-form');
    if (registerForm.style.display === 'none') {
        registerForm.style.display = 'block';
        loginForm.style.display = 'none';
    } else {
        registerForm.style.display = 'none';
        loginForm.style.display = 'block';
    }
}

function handleRegister(event) {
    event.preventDefault(); 

    const email = document.getElementById('register_email').value.trim();
    const password = document.getElementById('register_password').value.trim();
    const passwordConfirmation = document.getElementById('password_confirmation').value.trim();
    const alertContainer = document.createElement('div');

    if (password === passwordConfirmation) {
        alertContainer.className = 'alert alert-success';
        alertContainer.innerHTML = '<strong>Registration successful!</strong> You can now sign in.';
        document.getElementById('form-container').appendChild(alertContainer);
        alertContainer.style.display = 'block'; 
        setTimeout(() => alertContainer.remove(), 3000); 

        toggleForms(); // Show the sign-in form
    } else {
        alertContainer.className = 'alert alert-danger';
        alertContainer.innerHTML = '<strong>Error!</strong> Passwords do not match. Please try again.';
        document.getElementById('form-container').appendChild(alertContainer);
        alertContainer.style.display = 'block'; 
        setTimeout(() => alertContainer.remove(), 3000); 
    }
}


function handleLogin(event) {
    event.preventDefault(); 

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();
    const alertContainer = document.createElement('div');

    const validEmail = "user@example.com";
    const validPassword = "password123";

    if (email === validEmail && password === validPassword) {
        alertContainer.className = 'alert alert-success';
        alertContainer.innerHTML = '<strong>Login successful!</strong> Welcome back!';
        document.getElementById('form-container').appendChild(alertContainer);
        alertContainer.style.display = 'block';
        setTimeout(() => alertContainer.remove(), 3000); 

        setTimeout(() => {
            window.location.href = "https://hansits034.github.io/gamehtml5.html";
        }, 3000); 
    } else {
        alertContainer.className = 'alert alert-danger';
        alertContainer.innerHTML = '<strong>Error!</strong> Invalid email or password. Please try again.';
        document.getElementById('form-container').appendChild(alertContainer);
        alertContainer.style.display = 'block'; 
        setTimeout(() => alertContainer.remove(), 3000); 
    }
}

