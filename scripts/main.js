const buttonAuth = document.querySelector('.button_auth');
const closeAuth = document.querySelector('.close-auth');
const modalAuth = document.querySelector('.modal_auth');
//register modal
const modal_reg = document.querySelector('.modal_reg');
const closeReg = document.querySelector('.close-reg');
const button_register = document.querySelector('.button_register');

const categoryMenu = document.querySelector('.category-menu');
const category = document.querySelector('.category')
const like = document.querySelector('.like')



category.addEventListener('click',()=>{
    categoryMenu.classList.toggle('is-open')
});

buttonAuth.addEventListener('click',()=>{
    modalAuth.style.display = 'flex'
});
closeAuth.addEventListener('click',()=>{
    modalAuth.style.display = 'none'
})
button_register.addEventListener('click',()=>{
    modal_reg.style.display = 'flex'
});
closeReg.addEventListener('click',()=>{
    modal_reg.style.display = 'none'
});
like.addEventListener('click',()=>{
    like.style.color = "red"
    removeEventListener();
})


