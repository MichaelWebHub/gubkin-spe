const dropdown = document.querySelector('.dropdown');
const cmt_menu = document.querySelector('.committees-wrapper');
const committee = document.querySelector('.committees-wrapper-inside');

dropdown.addEventListener('click', appear);
//dropdown.addEventListener('mouseout', disappear);

function appear() {

    cmt_menu.classList.toggle('appear');

    setTimeout(function () {
        cmt_menu.classList.toggle('appear-width');
    }, 100);

    setTimeout(function () {
        committee.classList.toggle('appear');
    }, 200);

}
