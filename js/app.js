document.addEventListener("DOMContentLoaded",()=>{
let span_swicth_js = document.querySelector(".span_swicth")
let swicth_div = document.querySelector(".switch_dc_comics")
let button_js = document.querySelector("button")
let func_switch_time = function(){
    switch_anim.classList.remove("switch_anim_show")
    switch_anim.classList.add("switch_anim")

}
button_js.addEventListener("click",()=>{
    window.location="./a_propos.html"
})
let body_change = document.querySelector(".body")
let counter = 0;
let switch_anim = document.querySelector(".switch_anim")
let img_changing_js = document.querySelector(".logo_changing")

let logo_header_desk = document.querySelector("header > .desk")
let logo_header_mobile = document.querySelector("header > .mobile")

span_swicth_js.addEventListener("click",()=>{
    counter+=1

    if(counter%2==0){
      
        logo_header_desk.setAttribute("src","./assets/marvel_icone.png")
        logo_header_mobile.setAttribute("src","./assets/marvel_icone.png")
        body_change.classList.remove("body_grayscale")
        body_change.classList.add("body")

        img_changing_js.setAttribute("src","./assets/marvel_icone.png")

    }else{
       
        body_change.classList.remove("body")
        body_change.classList.add("body_grayscale")
        
        logo_header_desk.setAttribute("src","./assets/DC_Comics_logo.png")
        logo_header_mobile.setAttribute("src","./assets/DC_Comics_logo.png")
        img_changing_js.setAttribute("src","./assets/DC_Comics_logo.png")

    }

    swicth_div.classList.toggle("swicth_dc_comics_on")

    
    span_swicth_js.classList.toggle("span_swicth_right")
    switch_anim.classList.remove("switch_anim")

    switch_anim.classList.add("switch_anim_show")

    setTimeout(func_switch_time,2000)

})





})