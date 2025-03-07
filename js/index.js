document.querySelector("body > section.popup > div > div.popupbtn > a").addEventListener("click",function(){
    $(".popup")[0].style.zIndex = "-100";
    $(".popup")[0].style.width = "0";
    $(".popup")[0].style.opacity = "0";

});





var poptext = ['I made this website for selling cookies during my work with them i made so many plugins to automatize the ordering proccess from the website by buildinh api plugins, inventory plugins, breastfeeding certificate pluging that send customers automatic certifacate of achievement with his name and breasfeeding duration.\n I hepled them expand their busniess by building 3 more different language and country stores to reach more customers.','karon car website whch is car rental agency i worked with them for one year from 2018 till 2019 during my work with them i helped them expand ther business to internation customer not just local customer by building internationa websites and make it fully responsive and user friendly, i helped them also to advertise their business in all the world.','This web site is made with HTML, SASS(CSS) and Javascript. As you all know that the average of checking a CV from an employer is less than 7 second, so i decided to make something impresive that will let people spend more than 7 second in my cv, so i made my online resumee from scratch hope to let people stay longer to check my background.','Creative agency this one will be created with html sass(css), javascript and php. and it still under contruction it will ve available soon.it will have soo many cool effects and animation to drive potential business owner to deal with this creative agency to create their online business version.','Dubai clinic just Sample project that i spend my free time building it i will add a link to it once its finished','creative agency website number two this one is comming soon too','Api plugin i made it with php and develped to be more effecient with OOP(php), this plugin take order information once it placed on the website which is wordpress or woocommerce store as an array and encode this array to json before using curl post request to api server (courier company) and get response which we decode it from json to php array to get success message and according to this respond we send the customer an email if his order is sent to the courier and change the order status and add note with the tracking number (AWB) or get the error details write it in the note if the order was not pushed to the api.']

for(let i=0; i<=6; i++){

    document.getElementsByClassName("project-link-pop")[i].addEventListener("click",function(){
    
        $(".popup")[0].style.zIndex = "10000";
        $(".popup")[0].style.width = "100%";
        $(".popup")[0].style.opacity = "1";

        $("#popup-tlt")[0].innerText = $(".project-title")[i].innerText;
    
        $(".popup__row--col--img")[0].src = $(".project-img")[i].src;
        
        $("#popup-text")[0].innerText = poptext[i];


        
    });
    

}



var prog = document.getElementsByClassName("skills__container__progress--fill");
var val = document.getElementsByClassName("skills__container__Data--value");
function FillProgress (id,num){
    
    prog[id].style.width = num+"rem";
    
}

function fillthem(){
    FillProgress(0,26);
    FillProgress(2,26);
    FillProgress(5,26);

}
var scrooled = true;
// document.getElementsByClassName("skills")[0].onwheel = function(){

//     if (scrooled == true){

//         scrooled = false;
//         FillProgress(0,26);
//         count(0,85);
        
//         FillProgress(1,27);
//         count(1,90);
    
//         FillProgress(2,27);
//         count(2,90);
    
//         FillProgress(3,15);
//         count(3,50);
    
//         FillProgress(4,21);
//         count(4,70);
    
//         FillProgress(5,24);
//         count(5,80);
    
//         FillProgress(6,22.5);
//         count(6,75);
    
//         FillProgress(7,23.4);
//         count(7,78);
    
//         FillProgress(8,20);
//         count(8,66);
    
    
//         FillProgress(9,21);
//         count(9,68);
//     }
    
//}

function count(sm,sv){
    var xx = 30;
    setInterval(() => {

        if(xx <= sv){
            //for(i=0; i<=9; i++){
                document.querySelectorAll(".skills__container__Data--value")[sm].innerText = xx+"%"
            
            //}
            xx +=1;
            }

        }, 30);

}
    


function checkbox(){
    if ($(".nav-btn--input")[0].checked){
        document.getElementsByClassName("nav-background")[0].style.transform = "scale(80)";
           document.getElementsByClassName("navigation_list")[0].style.display = "inline"; 
       
        }
           
           else if (!$(".nav-btn--input")[0].checked){
                document.getElementsByClassName("nav-background")[0].style.transform = "scale(1)";
                   document.getElementsByClassName("navigation_list")[0].style.display = "";  
                 }

}

function collaps(){
        document.getElementsByClassName("nav-background")[0].style.transform = "scale(1)";
        document.getElementsByClassName("navigation_list")[0].style.display = "none";   
        $(".nav-btn--input")[0].checked=false; 
}


function isInViewport() {
        const rect = document.getElementsByClassName("skills__container__Data")[0].getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    
        );
    }

    var scrooled = true;
    window.addEventListener("scroll",function(){
        isInViewport();

    if (isInViewport() == true){

        if (scrooled == true){

        scrooled = false;
        FillProgress(0,26);
        count(0,85);
        
        FillProgress(1,27);
        count(1,90);
    
        FillProgress(2,27);
        count(2,90);
    
        FillProgress(3,15);
        count(3,50);
    
        FillProgress(4,21);
        count(4,70);

        FillProgress(5,24);
        count(5,80);
    
        FillProgress(6,22.5);
        count(6,75);
    
        FillProgress(7,23.4);
        count(7,78);
    
        FillProgress(8,20);
        count(8,66);
    
    
        FillProgress(9,21);
        count(9,68);
    }
        
    }
    })
    
// var menu = 0;
// function nav(){
// if (menu == 0){
//     //$(".navigation_list")[0].style.display = "none";
//     $(".navigation")[0].style.transform = "scale(1)";
//     $(".navigation")[0].style.display = "block";

//     // var style = document.createElement('style');
//     // document.head.appendChild(style);
//     // style.sheet.insertRule('.navigation__menu--btn--lines:first-child{ transform: translate(0rem,.2rem) rotate(45deg);margin-bottom: 0;}');

//     var style = document.createElement('style');
//   style.innerHTML = `
//   .navigation__menu--btn--lines:first-child{ 
//     transform: translate(0rem,.2rem) rotate(45deg);
//     margin-bottom : 0;}

//     .navigation__menu--btn--lines:last-child{
//             transform: rotate( -45deg);
//         }

//     .navigation__menu--btn--lines:nth-child(2){
//         display: none;
//     }

//     .navigation{
//         height: 100%;
//         width: 100%;
//         opacity:1;
//         top:0;
//         right:0;

    

//   `;
//   document.head.appendChild(style);
//   menu = 1;
//     }else if (menu == 1){
//         $(".navigation")[0].style.display = "none";
//         menu = 0;
//     }    
// }
