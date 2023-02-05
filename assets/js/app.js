function mostrarContra(password1, eye_password ){
    let password = document.getElementById(password1);
    let eye = document.getElementById(eye_password);

    if(password.type == 'password' && eye.classList.contains('fa-eye')){
        password.type = 'text';
        eye.classList.replace("fa-eye","fa-eye-slash")
    }else{
        password.type = 'password';
        eye.classList.replace("fa-eye-slash","fa-eye")
    }
}