const input_title = document.querySelector('.input-title');
const input_text = document.querySelector('.input');
const input_id = document.querySelector('.element-id');

const edit = document.querySelector('.edit-article');

let title = input_title.textContent;
let idToEdit = input_id.textContent;
let text = input_text.textContent;


        input_title.addEventListener('input', function() {
            title = input_title.textContent;
        } );

        input_text.addEventListener('input', function() {
            text = input_text.textContent;
        } );

        edit.addEventListener('click', function() {
            let xhr = new XMLHttpRequest();
            xhr.open('GET', './php/edit_article.php?id='+idToEdit+'&title='+title+'&text='+text);
            xhr.send();

            xhr.addEventListener('load', loadResponse);

            function loadResponse() {
                if (xhr.status == 200) {
                    edit.classList.add('done');
                    edit.textContent = 'Done';
                }
            }

        })







