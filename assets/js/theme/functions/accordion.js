const cards = document.querySelectorAll(
    ".doubts__row__wrapper__content__row__card"
);

let i = 0;
Array.from(cards).forEach(function (card) {
    const header = card.querySelector(
            ".doubts__row__wrapper__content__row__card__header"
        ),
        active = "doubts__row__wrapper__content__row__card--active";

    header.addEventListener("click", function () {
        if (this.parentElement.classList.contains(active)) {
            card.classList.remove(active);
        } else {
            for (let j = 0; j < cards.length; j++) {
                cards[j].classList.remove(active);
            }
            card.classList.add(active);
        }
    });
});
