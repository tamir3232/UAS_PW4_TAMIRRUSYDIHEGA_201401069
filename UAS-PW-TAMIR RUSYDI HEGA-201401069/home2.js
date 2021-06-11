const translate = document.querySelectorAll(".translate");
const big_title= document.querySelector(".big-title");
const header = document.querySelector("header");
const shadow = document.querySelector(".shadow");
const content= document.querySelector(".content");
const section = document.querySelector("section");
const text = document.querySelector(".text");
const footer= document.querySelector("footer");
const imgcontainer=document.querySelector(".imgcontainer");

let header_height = header.offsetHeight;
let footer_height = footer.offsetHeight;
let section_height = section.offsetHeight;


window.addEventListener('scroll',()=>{
   let scroll = window.pageYOffset;
   
   
   translate.forEach(element => {
       let speed = element.dataset.speed;
       element.style.transform = `translateY(${scroll*speed*2}px)`;
   })

   big_title.style.opacity=-scroll/(header_height/2)+1;
   shadow.style.height=`${scroll* 0.5+300 }px`;
  
   //about
   if(scroll >= section_height-400){
    $('.text').addClass('muncul');
    $('.imgcontainer').addClass('muncull');
    text.style.opacity=-scroll/(section_height+1600)+1;
    imgcontainer.style.opacity=-scroll/(section_height+1600)+1;
   }

   
   
                           

});

