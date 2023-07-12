import IMask from 'imask';

const phoneMask = IMask(
    document.querySelector('#phone'), {
        mask: "(00) 0000-0000"
    }
)

const mobilePhoneMask = IMask(
    document.querySelector('#mobilePhone'), {
        mask: "(00) 00000-0000"
    }
)
