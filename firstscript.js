const wrapper=document.querySelector('.wrapper');
const loginlink=document.querySelector('.login-link');
const Registerlink=document.querySelector('.reg-link');
Registerlink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});

loginlink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});