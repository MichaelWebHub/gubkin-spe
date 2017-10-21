var article_create = document.querySelector('.create-article');
var create_title = document.querySelector('.create-title');
var create_text = document.querySelector('.create-text');

var ctitle = create_title.textContent;
var ctext = create_text.conte;

create_title.addEventListener('input', function() {
    ctitle = create_title.textContent;
} );

create_text.addEventListener('input', function(e) {
    ctext = create_text.textContent; //innerHTML
} );

article_create.addEventListener('click', function() {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', './php/create_article.php?title=' + ctitle + '&text=' + ctext);
    xhr.send();
    xhr.addEventListener('load', loadResponse);
    function loadResponse() {
        if (xhr.status == 200) {
            article_create.classList.add('done');
            article_create.textContent = "Done";
        }
    }
})



