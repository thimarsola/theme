/**
 * Code example: https://github.com/Basir-PD/100-Projects-HTML-CSS-JavaScript/tree/master/7%20-%20How%20To%20Create%20an%20Accordion
 */

const header = document.querySelectorAll(".accordion-header");
const body = document.querySelectorAll(".accordion-body");

header.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        body.forEach((acc) => {
            if (
                e.target.nextElementSibling !== acc &&
                acc.classList.contains("active")
            ) {
                acc.classList.remove("active");
                header.forEach((btn) => btn.classList.remove("active"));
            }
        });

        const panel = btn.nextElementSibling;
        panel.classList.toggle("active");
        btn.classList.toggle("active");
    });
});

window.onclick = (e) => {
    if (!e.target.matches(".accordion-header")) {
        header.forEach((btn) => btn.classList.remove("active"));
        body.forEach((acc) => acc.classList.remove("active"));
    }
};
