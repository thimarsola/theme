//https://codepen.io/codeorum/pen/JjGzMRQ

function accordion(elem, option) {
    document.addEventListener("click", function (e) {
        if (!e.target.matches(elem + " .a-btn")) return;
        else {
            if (!e.target.parentElement.classList.contains("active")) {
                if (option == true) {
                    var elementList = document.querySelectorAll(
                        elem + " .a-container"
                    );
                    Array.prototype.forEach.call(elementList, function (e) {
                        e.classList.remove("active");
                    });
                }
                e.target.parentElement.classList.add("active");
            } else {
                e.target.parentElement.classList.remove("active");
            }
        }
    });
}

accordion(".accordion.v1", true);
accordion(".accordion.v2", false);
