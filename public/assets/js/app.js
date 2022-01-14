const registerForm = document.querySelector('#register');
const loginForm = document.querySelector('#login');
const toRegisterDiv = document.querySelector('#toRegisterDiv')

document.querySelector("#toRegister").addEventListener('click', () => {
    registerForm.style.display = "block";
    loginForm.style.display = "none";
    toRegisterDiv.style.display = "none";
});