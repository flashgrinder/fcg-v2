const mouseIcon = document.querySelector('.header-page__icon');

function contenttScroll(){
    const content = document.querySelector('.header-page');
    window.scrollTo(0, content.scrollHeight);
}

function init() {
    mouseIcon.addEventListener('click', contenttScroll);
}

export default {init}