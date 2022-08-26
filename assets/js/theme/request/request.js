const Swal = require("sweetalert2");

document.contactForm.onsubmit = async (e) => {
    e.preventDefault();

    const form = e.target;
    const data = new FormData(form);
    data.append("ajax", true);

    const options = {
        method: form.method,
        body: new URLSearchParams(data),
    };

    const status = document.querySelector(
        ".contact__row__card__body__form__status"
    );
    const name = document.querySelector('input[name="name"]').value;
    const successColor = getComputedStyle(
        document.documentElement
    ).getPropertyValue("--clr-success-500");
    const dangerColor = getComputedStyle(
        document.documentElement
    ).getPropertyValue("--clr-danger-500");

    fetch(form.action, options)
        .then((response) => {
            if (response.ok) {
                return response.json();
            } else {
                throw Error(response.statusText);
            }
        })
        .then((json) => {
            status.classList.remove("hidden");

            setTimeout(() => {
                status.classList.add("hidden");
            }, 3000);

            setTimeout(() => {
                Swal.fire({
                    icon: "success",
                    title: name,
                    text: "Sua mensagem foi enviada. \n Obrigado pelo contato!",
                    confirmButtonColor: successColor,
                });
            }, 3000);
        })
        .catch((error) => {
            status.classList.remove("hidden");

            setTimeout(() => {
                status.classList.add("hidden");
            }, 3000);

            setTimeout(() => {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Houve um erro ao tentar enviar a sua mensagem, tente novamente!",
                    confirmButtonColor: dangerColor,
                });
            }, 3000);
        });
};
