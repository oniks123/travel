const profile_cont = document.querySelector (".profile-cont")
const profile_menu = document.querySelector (".profil-menu")

profile_cont.addEventListener ("click", () => (
    profile_menu.classList.toggle ("active")
))