function menuShow() {
    let display = document.querySelector('.menuItens');
    if (display.classList.contains('d-none')) {
        display.classList.remove('d-none');
        display.classList.add('d-blok');
    } else {
        display.classList.remove('d-block');
        display.classList.add('d-none');
    }
}