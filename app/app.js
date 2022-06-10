document.addEventListener("DOMContentLoaded",()=>{
    /*let el_button = document.querySelectorAll("main ul li div button:last-child");*/
    let el= document.querySelectorAll("main ul li div button:last-child");
    let modal = document.querySelector(".parent-modale");
    let closed = document.querySelector(".modale button");
    let closed_all = document.querySelector(".modale img");
    let count = 0;
    let opacity_div_menu = document.querySelector('.opacity_menu_off')
    let btn_js_app_show = document.querySelector('.icon_show')
    let btn_js_app_hide = document.querySelector('.icon_close')
    let btn_js_darkmode = document.querySelector(".dark_li")
    let btn_form = document.querySelector(".newsletter_button")
    let menu_mobile = document.querySelector(".js_menu_mobile_hidden")


    let form_toggle = document.querySelector(".form_hidden")
    btn_form.addEventListener("click",()=>{
        form_toggle.classList.toggle("form_shown")
    })

    opacity_div_menu.addEventListener('click',()=>{
        menu_mobile.classList.remove('js_menu_mobile')
        opacity_div_menu.classList.toggle('opacity_menu')

        menu_mobile.classList.add('js_menu_mobile_hidden')
    })


    if(localStorage.getItem("darkmode")==true){
        document.querySelector(".body").classList.add('body_dark')
        document.querySelector('.h1').classList.add("h1_white")
        document.querySelector('.h2').classList.add("h2_white")
        document.querySelector('.p').classList.add("p_white")
        document.querySelector('.footer_black').classList.add('footer_white')

    }else{
        document.querySelector(".body").classList.remove('body_dark')
        document.querySelector('.h1').classList.remove("h1_white")
        document.querySelector('.h2').classList.remove("h2_white")
        document.querySelector('.p').classList.remove("p_white")
        document.querySelector('.footer_black').classList.remove('footer_white')
    }
    btn_js_darkmode.addEventListener("click",()=>{
        count+=1
        if(count%2==0){
            localStorage.setItem("darkMode",true)
        }else{
            localStorage.setItem("darkMode",false)

        }
        document.querySelector(".body").classList.toggle('body_dark')
        document.querySelector('.h1').classList.toggle("h1_white")
        document.querySelector('.h2').classList.toggle("h2_white")
        document.querySelector('.p').classList.toggle("p_white")
        document.querySelector('.footer_black').classList.toggle('footer_white')
    })

    btn_js_app_show.addEventListener('click',()=>{
        menu_mobile.classList.remove('js_menu_mobile_hidden')
        opacity_div_menu.classList.remove('opacity_menu_off')

        opacity_div_menu.classList.add('opacity_menu')

        menu_mobile.classList.add('js_menu_mobile')

    })
    btn_js_app_hide.addEventListener('click',()=>{
        menu_mobile.classList.remove('js_menu_mobile')
        opacity_div_menu.classList.toggle('opacity_menu')

        menu_mobile.classList.add('js_menu_mobile_hidden')

    })


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
        document.querySelector("#modaleid .desc p").innerHTML = `<strong>Description : </strong>${desc}`;
        document.querySelector("#modaleid .desc time").innerText = `Annee ${dates}`;
        document.querySelector("#modaleid .desc time").setAttribute("datetime", dates);
    };

for (rows of el) {
    rows.addEventListener("click", open_modal);
}
closed.addEventListener("click", () => {
    modal.classList.remove("modale-active");

});
closed_all.addEventListener("click", () => {
    modal.classList.remove("modale-active");
});

    

})