const menu = document.querySelector('.menu');
const closeBtn = document.querySelector('.menu .menu_btn');

function openMenu(){
    closeBtn.style.display="block";
    menu.style.width='100%'
    document.body.style.overflow="hidden"
}

function closeMenu(){
    closeBtn.style.display="none";
    menu.style.width='0%'
    document.body.style.overflow="auto"
}

const illusion = document.getElementsByTagName('body')[0];
const darkMode = document.getElementById('dark-change');

darkMode.addEventListener('click' , function(){
    darkMode.classList.toggle('active');    
    illusion.classList.toggle('night');   
})


const kaleidoscope = document.getElementById('kaleidoscope')
const service = document.querySelector(".lemenu")

kaleidoscope.addEventListener('click',() =>
{
 service.classList.toggle('mobile-menu')
});

