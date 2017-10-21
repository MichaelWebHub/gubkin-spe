<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.quilljs.com/1.3.3/quill.snow.css" rel="stylesheet">
    <title>Document</title>
    <style>


    </style>
</head>

<body>


    <div id="editor"> </div>
    <button class="button"> Button </button>
    <div class="output"></div>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.3/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        var button = document.querySelector('.button');
        var output = document.querySelector('.output');
        button.addEventListener('click', foo);

        function foo() {
            var delta = quill.getContents();
            console.log(delta);

            output.innerHTML = delta.ops;
        }

    </script>



</body>

</html>
