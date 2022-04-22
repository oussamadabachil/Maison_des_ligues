document.addEventListener("DOMContentLoaded",()=>{


    let btn_form = document.querySelector(".newsletter_button")

    let form_toggle = document.querySelector(".form_hidden")
    btn_form.addEventListener("click",()=>{
        form_toggle.classList.toggle("form_shown")
    })
})