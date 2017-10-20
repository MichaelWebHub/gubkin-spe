const secret = document.querySelector('.panel');
const panelClose = document.querySelector('.panel-close');

var word = [];

panelClose.addEventListener('click', () => secret.classList.toggle('hide'));

document.addEventListener('keydown', function (e) {
    easterEgg(e);
})

function easterEgg(e) {

    switch (e.keyCode) {
        case 65:
            if (word == '') {
                word.push(String.fromCharCode(e.keyCode).toLowerCase());
                console.log(word);
            } else {
                word.splice(0, );
            }
            break;
        case 68:
            if (word[word.length - 1] == 'a') {
                word.push(String.fromCharCode(e.keyCode).toLowerCase())
                console.log(word);
            } else {
                word.splice(0, );
            }
            break;
        case 77:
            if (word[word.length - 1] == 'd') {
                word.push(String.fromCharCode(e.keyCode).toLowerCase())
                console.log(word);
            } else {
                word.splice(0, );
            }
            break;
        case 73:
            if (word[word.length - 1] == 'm' || word[word.length - 1] == 'k') {
                word.push(String.fromCharCode(e.keyCode).toLowerCase())
                console.log(word);
            } else {
                word.splice(0, );
            }
            break;
        case 78:
            if (word[word.length - 1] == 'i') {
                word.push(String.fromCharCode(e.keyCode).toLowerCase())
                console.log(word);
            } else {
                word.splice(0, );
            }
            break;
        case 53:
            if (word[word.length - 1] == 'n') {
                word.push(String.fromCharCode(e.keyCode).toLowerCase())
                console.log(word);
            } else {
                word.splice(0, );
            }
            break;
    }

    if (word.join('') == 'admin5') {
        secret.classList.toggle('hide');
    }

}
