const registerForm = document.querySelector('#register');
const loginForm = document.querySelector('#login');

document.querySelector("#toRegister").addEventListener('click', () => {
    registerForm.style.display = "block";
    loginForm.style.display = "none";
});