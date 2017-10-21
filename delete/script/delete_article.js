var article_delete = document.querySelectorAll('.article-delete');

for (let key of article_delete) {

    let idToDelete = key.parentNode.querySelector('.article-no').textContent;
    key.addEventListener('click', function() {

        let xhr = new XMLHttpRequest();
        xhr.open('GET', './php/delete_article.php?id=' + idToDelete);
        xhr.send();

        xhr.addEventListener('load', loadResponse);

        function loadResponse() {
            if (xhr.status == 200) {
                console.log(xhr.responseText);
                key.parentNode.style.display = "none";
            }
        }
    })
}

