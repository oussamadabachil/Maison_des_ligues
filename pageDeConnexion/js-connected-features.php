<script >
    let test_push_js = document.querySelector(".test_push");
let el = document.querySelectorAll("main ul li div button:last-child");
let modal = document.querySelector(".parent-modale");
let closed = document.querySelector(".modale button");
let closed_all = document.querySelector(".modale img");

let btn_mod_nom = document.querySelector(".grid_inline .a ul .Upnom");
let btn_mod_prenom = document.querySelector(".grid_inline .a ul .Upprenom");
let btn_mod_ville = document.querySelector(".grid_inline .a ul .Upville");
let btn_mod_pays = document.querySelector(".grid_inline .a ul .Uppays");
btn_mod_nom.addEventListener("click", () => {

    document.querySelector(".modiForm").classList.add("show");
})
btn_mod_prenom.addEventListener("click", () => {
   

})
btn_mod_ville.addEventListener("click", () => {
    
    
    })
btn_mod_pays.addEventListener("click", () => {
   
})
open_modal = function() {
    /* les variables */
    let idevenet = this.dataset.id;
    let image = this.dataset.image;
    let title = this.dataset.title;
    let desc = this.dataset.description;
    let dates = this.dataset.dates;
    modal.classList.add("modale-active"); /* ajouter la classe active */
    /* sélectionner les sélecteurs html*/
    document.querySelector(" #modaleid img").setAttribute("src", image);
    document.querySelector("#modaleid .desc h3").innerText = title;
    document.querySelector("#modaleid .desc p").innerHTML = `<span>Description de l'activité</span> : ${desc}`;
    document.querySelector("#modaleid .desc time").innerText = `Annee ${dates}`;
    document.querySelector("#modaleid .desc time").setAttribute("datetime", dates);


    document.querySelector(".subscirbe_button").addEventListener("click", (e) => {

        e.preventDefault();
        modal.classList.remove("modale-active");
        window.history.pushState(1, "", "./connected.php?id_event=" + idevenet);
        document.querySelector(".modale-confirm").classList.add("show");
    })
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



</script>