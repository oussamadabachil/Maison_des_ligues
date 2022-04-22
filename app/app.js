document.addEventListener("DOMContentLoaded",()=>{
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

    btn_js_darkmode.addEventListener("click",()=>{
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



})