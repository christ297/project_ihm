a&//grab the sign up button,sign in button and container

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container =document.getElementById('container');
const title = document.getElementById('title');
const signUp = ()=>{
    container.classList.add('right-panel-active');
    title.innerHTML ="Sign Up";
};
const signIn =() =>{
    container.classList.remove('right-panel-active');
    title.innerHTML ="Sign In";
};

signUpButton.addEventListener('click', signUp);

signInButton.addEventListener('click', signIn);

//title.innerHTML ="Sign Up";