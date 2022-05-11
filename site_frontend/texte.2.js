var formSignin = document.querySelector('#signin')
var formSignup = document.querySelector('#signup')
var btnColor = document.querySelector('.btnColor')

document.querySelector('#btnSignin').addEventListener('click', () => {
    formSignin.style.left = "60px"
    formSignup.style.left = "490px"
    btnColor.style.left = "0px"
} )


document.querySelector('#btnSignup').addEventListener('click', () => {
    formSignin.style.left = "-490px"
    formSignup.style.left = "60px"
    btnColor.style.left = "110px"
} )