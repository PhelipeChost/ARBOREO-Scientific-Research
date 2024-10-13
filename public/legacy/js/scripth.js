var header = document.getElementById('header');
var navigation = document.getElementById('nav_header');
var Content = document.getElementById('content');
var showSideBar = false;

function toggleSlideBar(){
    showSideBar = !showSideBar;
    if(showSideBar){
        nav_header.style.marginLeft = '-10vw';
        nav_header.style.animationName = 'showSidebar';
        content.style.filter= 'blur(2px)'
    }
    else{
        nav_header.style.marginLeft = '-100vw';
        nav_header.style.animationName = '';
        content.style.filter = ''; 
    }
}
