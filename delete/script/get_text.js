const rows = document.querySelectorAll('.articles-row');
var textarea = document.querySelector('.input');
var textarea_title = document.querySelector('.input-title');

for (let key of rows) {

    key.addEventListener('click', pickRow);

    function pickRow() {
        let idToFind = key.querySelector('.article-no').textContent;
        let titleToFind = key.querySelector('.article-title').textContent;

        let xhr = new XMLHttpRequest();
        xhr.open('GET', './php/get_article.php?id=' + idToFind);
        xhr.send();

        xhr.addEventListener('load', loadResponse);

        function loadResponse() {
            if (xhr.status == 200) {
                textarea.textContent = xhr.responseText;
                textarea_title.textContent = titleToFind;
            }
        }

    }

}