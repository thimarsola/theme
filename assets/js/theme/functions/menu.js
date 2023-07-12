const toggle = document.querySelector(".header__row__wrapper__toggle");

function toggleMenu(event) {
    if (event.type === "touchstart") event.preventDefault();
    const header = document.querySelector(".header");
    header.classList.toggle("header--active");

    const active = header.classList.contains("header--active");
    const toggleButton = document.querySelector(
        ".header__row__wrapper__toggle__wrapper"
    );
    toggleButton.setAttribute("aria-expanded", active);

    if (active === true) {
        document.body.style.overflow = "hidden";
    } else {
        document.body.style.overflow = "auto";
    }

    document.onclick = function (e) {
        if (event.target.classList !== "header") {
            header.classList.remove("header--active");
            document.body.style.overflow = "auto";
        }
    };
}

toggle.addEventListener("click", toggleMenu);
toggle.addEventListener("touchstart", toggleMenu);
