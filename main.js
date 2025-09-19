(function () {
    let viewAll = document.getElementById("view-all");
if (!viewAll) return;
viewAll.addEventListener('click', function () {
    let card = document.querySelectorAll(".card.hidden").forEach(el => el.classList.remove("hidden"));
    this.style.display = "none;" 
})
})();





