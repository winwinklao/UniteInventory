//Hamburgur
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
toglecheck = true;

const mobileMenu = () => {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
  };

  menu.addEventListener('click', mobileMenu);


function toglenavbar(){
  if(toglecheck){
    toglecheck = !toglecheck;
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  else{
    toglecheck = !toglecheck;
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
} 

