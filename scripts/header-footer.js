// NAVBAR OPEN/CLOSE

let show = false;

const menuSection = document.querySelector(".menuSection");
const menuToggle = menuSection.querySelector(".menuToggle");
const menuLinks = menuSection.querySelectorAll("#menu li a");

menuToggle.addEventListener("click", () => {
    show = !show;
    menuSection.classList.toggle("on", show);

    if (show) {
        document.body.style.overflow = "hidden";
    } else {
        document.body.style.overflow = "auto";
    }
});

menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
        show = false;
        menuSection.classList.remove("on");
        document.body.style.overflow = "auto";
    });
});

// SCROLL TO ID ON CLICK

const menuItems = document.querySelectorAll('#menu a[href^="#"]');

menuItems.forEach(item => {
    item.addEventListener('click', scrollToIdOnClick);
})

function scrollToIdOnClick(event) {
    event.preventDefault();
    const element = event.target;
    const id = element.getAttribute('href');
    const to = document.querySelector(id).offsetTop;

    window.scroll({
        top: to,
        behavior: "smooth",
    });

    const urlWithoutAnchor = window.location.href.split('#')[0];
    const newUrl = urlWithoutAnchor + id;

    updateUrlWithoutAnchor(newUrl);
}

function updateUrlWithoutAnchor(newUrl) {
    history.replaceState(null, null, newUrl);
}

