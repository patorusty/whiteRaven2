document.addEventListener('DOMContentLoaded', function() {

var formulario = document.forms.registro;
var contacto = document.forms.contacto;

if (formulario) {
    var nombre = formulario.elements.name;
    var apellido = formulario.elements.lastname;
    var email = formulario.elements.email;
    var password = formulario.elements.password;
    var rePassword = formulario.elements.password_confirmation;
    var inputName = document.getElementById("name");
    var errorName = document.getElementById("error_name");
    var inputLastname = document.getElementById("lastname");
    var errorLastname = document.getElementById("error_lastname");
    var inputEmail = document.getElementById("email");
    var errorEmail = document.getElementById("error_email");
    var inputPassword = document.getElementById("password");
    var errorPassword = document.getElementById("error_password");
    var inputRePassword = document.getElementById("password_confirmation");
    var errorRePassword = document.getElementById("error_rePassword");
    var inputImg = document.getElementById("img");
    var errorImg = document.getElementById("error_img");

    formulario.onsubmit = function submit(e) {
        
        if (!validation()){
            e.preventDefault()
        }  

    }
}

if (contacto) {

    var nombre2 = contacto.elements.name;
    var apellido2 = contacto.elements.lastname;
    var email2 = contacto.elements.email;
    var message = contacto.elements.message;    
    var inputName = document.getElementById("name");
    var errorName = document.getElementById("error_name");
    var inputLastname = document.getElementById("lastname");
    var errorLastname = document.getElementById("error_lastname");
    var inputEmail = document.getElementById("email");
    var errorEmail = document.getElementById("error_email");
    var inputMessage = document.getElementById("message");
    var errorMessage = document.getElementById("error_message");


    contacto.onsubmit = function submit(e) {
        
        if (!contactValidator()){
            e.preventDefault()
        }  

    }
}


function validation() {
    if (checkNombre(nombre.value)) {
        inputName.className += ' is-valid ';
    } else {
        inputName.className += ' is-invalid ';
        errorName.innerHTML = 'El nombre ingresado es incorrecto';
    }
    if (checkApellido(apellido.value)) {
        inputLastname.className += ' is-valid ';
    } else {
        inputLastname.className += ' is-invalid ';
        errorLastname.innerHTML = 'El apellido ingresado es incorrecto';
    }
    if (checkEmail(email.value)) {
        inputEmail.className += ' is-valid ';
    } else {
        inputEmail.className += ' is-invalid ';
        errorEmail.innerHTML = 'El email ingresado es incorrecto';
    }
    if (checkPassword(password.value)) {
        inputPassword.className += ' is-valid ';
    } else {
        inputPassword.className += ' is-invalid ';
        errorPassword.innerHTML = 'La contraseña debe tener un minimo de 8 caracteres, mayuculas, minusculas y un numero';
    }
    if (checkRePassword(password.value, rePassword.value)) {
        inputRePassword.className += ' is-valid ';
    } else {
        inputRePassword.className += ' is-invalid ';
        errorRePassword.innerHTML = 'Las contraseñas no coinciden';
    }
    if (checkAvatar(img.value)) {
        inputImg.className += ' is-valid ';
        return true;
    } else {
        inputImg.className += ' is-invalid ';
        errorImg.innerHTML = 'El Avatar es obligatorio';
        return false;
    } 
}

function contactValidator() {
    if (checkNombre(nombre2.value)) {
        inputName.className += ' is-valid ';
    } else {
        inputName.className += ' is-invalid ';
        errorName.innerHTML = 'El nombre ingresado es incorrecto';
    }
    if (checkApellido(apellido2.value)) {
        inputLastname.className += ' is-valid ';
    } else {
        inputLastname.className += ' is-invalid ';
        errorLastname.innerHTML = 'El apellido ingresado es incorrecto';
    }
    if (checkEmail(email2.value)) {
        inputEmail.className += ' is-valid ';
    } else {
        inputEmail.className += ' is-invalid ';
        errorEmail.innerHTML = 'El email ingresado es incorrecto';
    }
    if (checkMensaje(message.value)) {
        inputEmail.className += ' is-valid ';
        return true;
    } else {
        inputEmail.className += ' is-invalid ';
        errorEmail.innerHTML = 'El email ingresado es incorrecto';
        return false;
    }
}


function checkNombre(nombre){
    var regexNombre = /^[a-zA-Z ]{2,30}$/;
    if (regexNombre.test(nombre)){
        return true;
    } else return false;
}

function checkApellido(apellido){
    var regexNombre = /^[a-zA-Z ]{2,30}$/;
    if (regexNombre.test(apellido)){
        return true;
    } else return false;
}

function checkEmail(email){
    var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (regexEmail.test(email)){
        return true;
    } else return false;
}

function checkPassword(password){
    var regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/;
    if (regexPassword.test(password)){
        return true;
    } else return false;
}

function checkRePassword(password, rePassword){
    if (password === rePassword){
        return true;
    } else return false;
}

function checkAvatar(img){
    if (img){
        return true
    } return false;
}

function checkMensaje(mensaje){
    var regexMensaje = /^[A-Za-z0-9]{10,800}$/;
    if (regexMensaje.test(mensaje)){
        return true;
    } else return false;
}


var contador = document.getElementById('contador');

function traerUsers() {
    fetch('http://localhost:8000/api/usuarios')
    .then(response => response.json())
    .then(data => {
        contador.innerHTML = data.cantidad;
        
    });
}

traerUsers()
setInterval(traerUsers, 30000)







});
    