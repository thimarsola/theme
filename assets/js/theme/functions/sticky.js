window.onscroll = () => {
    const header = document.querySelector(".header");
    const sticky = header.offsetTop;

    if (window.scrollY >= 320) {
        header.classList.add("header--fixed");
    } else {
        header.classList.remove("header--fixed");
    }
};
