var container = document.getElementById('editor');
var saveDelta = document.getElementById('saveDelta');
var text = document.getElementById('text');
var editor = new Quill(container);

var quill = new Quill('#editor', {
    modules: {
        formula: false,
        toolbar: [
      ['bold', 'italic', 'underline', 'strike'],
      ['blockquote', 'code-block'],
      [{'list': 'ordered'}, {'list': 'bullet'}],
      [{'indent': '-1'}, {'indent': '+1'}],
      [{'align': []}],
      [{'size': ['small', false, 'large', 'huge']}],
      [{'header': [1, 2, 3, 4, 5, 6, false]}],
      [{'color': []}, {'background': []}],
      [{'font': []}],
      ['link', 'image', 'video'],
      ['clean']
    ]
    },
    placeholder: 'Write your text here',
    theme: 'snow'
});


saveDelta.addEventListener('click', function () {
    var delta = quill.getContents(); 
    text.innerHTML = quill.root.innerHTML;
    var object = JSON.stringify(delta);
    console.log(object);

    let xhr = new XMLHttpRequest();
    xhr.open('GET', './php/create_article.php?content=' + object);
    xhr.send();
    xhr.addEventListener('load', loadResponse);
    function loadResponse() {
        if (xhr.status == 200) {

        }
    }


})
