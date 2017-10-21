var images = document.images;
var images_total_count = images.length;
var images_loaded_count = 0;

for (var i = 0; i < images_total_count; i++) {
    var imagesClone = new Image();
    imagesClone.onload = loadImg;
    imagesClone.src = images[i].src;
}

function loadImg() {
    images_loaded_count++;
    if (images_loaded_count >= images_total_count) {
        setTimeout(preload, 1500);
    }
}


function preload() {
    var preloader = document.getElementById('preloader');
    preloader.classList.add("hide");
    document.body.classList.remove('overflow');
}
