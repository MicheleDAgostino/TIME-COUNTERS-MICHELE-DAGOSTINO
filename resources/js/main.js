// NAVBAR

let navbar = document.querySelector('#navbar');

let navbarTitle = document.querySelector('#navbarTitle');

let navContainer = document.querySelector('#navContainer');

let navLink = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', ()=>{

    let scrolled = window.scrollY;

    if(scrolled > 0){

        navbar.style.background = 'var(--grey)';
        navContainer.classList.remove('my-3');
        navbarTitle.style.fontSize = '25px';

    }else{
        navbar.style.background = 'transparent';
        navContainer.classList.add('my-3');
        navbarTitle.style.fontSize = '30px';
    }

})
