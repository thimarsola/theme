const cookieBox = document.querySelector('.cookies')
const button = document.querySelector('.cookies__wrapper__button__accept')

function setCookies(){
    if(document.cookie.includes("yes")) return
    cookieBox.classList.add('cookies--active')

    button.addEventListener('click', () => {
        cookieBox.classList.remove('cookies--active')
        setTimeout(() => {
            cookieBox.remove()
        }, 5000)
        document.cookie = "accepted_cookies= yes; max-age= " + 60 * 60 * 24 * 30 + "; path=/";
    })
}

window.addEventListener("load", setCookies)

if(document.cookie.includes("yes")){
    cookieBox.remove()
}
