function showPassword(){
    const eye = document.querySelector('.password_img')
    const first_input = document.querySelector('.input_password');
    const second_input = document.querySelector('.input_confirm_password');

    eye.addEventListener('click', () =>{
        eye.classList.toggle('active');

        if(first_input.getAttribute('type') === 'password'){
            first_input.setAttribute('type', 'text')
            second_input.setAttribute('type', 'text')
        } else{
            first_input.setAttribute('type', 'password')
            second_input.setAttribute('type', 'password')
        }
    })
}
showPassword()