let cout=0;

let x = document.querySelector(".opacity_connected")
document.querySelector(".show_connexion_data").addEventListener('click',()=>{
       document.querySelector(".modale_info").classList.replace("modale_info","modale_info_show");
         x.classList.add('opacity_connected_show');
})


document.querySelector(".modale_info button").addEventListener('click',()=>{
    document.querySelector(".modale_info_show").classList.replace("modale_info_show","modale_info");
  x.classList.remove("opacity_connected_show")


})
