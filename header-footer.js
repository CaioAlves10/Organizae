let show = true;

const menuSection = document.querySelector(".menuSection")
const menuToggle = menuSection.querySelector(".menuToggle")

menuToggle.addEventListener("click", () => {

    /* // se o show for "true" coloca "hidden" senão coloca "initial"
    document.body.style.overflow = show ? "hidden" : "initial" */

    menuSection.classList.toggle("on", show)
    show = !show;
})