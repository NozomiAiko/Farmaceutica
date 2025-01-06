//icono1
const ico1 =document.getElementById("icono1");
const sidebar =document.querySelector(".sidebar");
const spans =document.querySelectorAll("span");
const menu =document.querySelector(".menu");
const main = document.querySelector("main");
menu.addEventListener("click",()=>{
    sidebar.classList.toggle("maxSidebar");
    if(sidebar.classList.contains("maxSidebar")){
        menu.children[0].style.display ="none";
        menu.children[1].style.display ="block";
    }else{
        menu.children[0].style.display ="block";
        menu.children[1].style.display ="none";
    }
    if(window.innerWidth<=320){
        sidebar.classList.add("miniSidebar");
        main.classList.add("minMain");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
});
ico1.addEventListener("click",()=>{
    sidebar.classList.toggle("miniSidebar");
    main.classList.toggle("minMain");
    spans.forEach((span)=>{
        span.classList.toggle("oculto");
    });
});
