document.addEventListener("DOMContentLoaded",()=>{
let span_swicth_js = document.querySelector(".span_swicth")
let swicth_div = document.querySelector(".switch_dc_comics")
let button_class = document.querySelector(".button_form")
let button_form_location  = document.querySelector("main>.button_form")
let func_switch_time = ()=>{
    switch_anim.classList.remove("switch_anim_show")
    switch_anim.classList.add("switch_anim")

}
/*
button_class.addEventListener("click",()=>{
    window.location="./a_propos.html"
})*/
let body_change = document.querySelector(".body")
let counter = 0;
let switch_anim = document.querySelector(".switch_anim")
let img_changing_js = document.querySelector(".logo_changing")

let logo_header_desk = document.querySelector("header > .desk")
let logo_header_mobile = document.querySelector("header > .mobile")
document.querySelector(".grid_2").style.display="none"
span_swicth_js.addEventListener("click",()=>{
    counter+=1

    if(counter%2==0){
        button_class.classList.remove("button_form_dc")

        button_class.classList.add("button_form")
        document.querySelector(".grid").style.display="grid"
        document.querySelector(".grid_2").style.display="none"

        swicth_div.setAttribute("style","    background-color: red;  transition:all .3s;      ")
        logo_header_desk.setAttribute("src","./assets/marvel_icone.png")
        logo_header_mobile.setAttribute("src","./assets/marvel_icone.png")
        body_change.classList.remove("body_grayscale")
        body_change.classList.add("body")

        img_changing_js.setAttribute("src","./assets/marvel_icone.png")

    }else{
        button_class.classList.remove("button_form")

        button_class.classList.add("button_form_dc")

        swicth_div.setAttribute("style","    background-color: rgb(88,143,224);transition:all .3s;      ")
        body_change.classList.remove("body")
        body_change.classList.add("body_grayscale")
        document.querySelector(".grid_2").style.display="grid"
        document.querySelector(".grid").style.display="none"

        
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




console.log(navigator.userAgent);

let el, modal, closed, open_modal, closed_all,figure_this;

el = document.querySelectorAll("main ul li");
modal = document.querySelector(".parent-modale");
closed = document.querySelector(".modale button");
closed_all = document.querySelector(".modale img");

/* property elements */

open_modal = function () {
    console.log(this.dataset.image);
    /* les variables */

    let image = this.dataset.image;
    let title = this.dataset.title;
    let desc = this.dataset.description;
    let dates = this.dataset.dates;
    modal.classList.add("modale-active"); /* ajouter la classe active */
    /* sélectionner les sélecteurs html*/
    document.querySelector(" #modaleid img").setAttribute("src", image);
    document.querySelector("#modaleid .desc h3").innerText = title;
    document.querySelector("#modaleid .desc p").innerHTML = `<strong>Déscription : </strong>${desc}`;
    document.querySelector("#modaleid .desc time").innerText = `Annee ${dates}`;
    document.querySelector("#modaleid .desc time").setAttribute("datetime", dates);
};


for (rows of el) {
    rows.addEventListener("click", open_modal
    );

}
closed.addEventListener("click", () => {
    modal.classList.remove("modale-active");

});
closed_all.addEventListener("click", () => {
    modal.classList.remove("modale-active");
});

button_form_location.addEventListener("click",()=>{
    location.href="./a_propos.html"
})

})