var menu = document.getElementById('menu')
var menuBtn = document.getElementById('menuBtn') 
var menustate = false;
// menu.style.display="none"


function checkMenu(){
    
}



function handleMenuBtn(){  
    menustate = !menustate 
    // checkMenu()

    if(menustate){
        menu.style.display="block"
    }else{
        menu.style.display="none"
    }
        
      
}