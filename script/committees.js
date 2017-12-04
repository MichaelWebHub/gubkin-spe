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

const mobile_dropdown = document.querySelector('.mobile-dropdown');
const mobile_menu_dropdown = document.querySelector('.mobile-menu-committees');

mobile_dropdown.addEventListener('click', function() {
    mobile_menu_dropdown.classList.toggle('hide');
})
