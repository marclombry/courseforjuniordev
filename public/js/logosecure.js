function stopSelectImg(img) {
    if (img instanceof HTMLImageElement && img.classList.contains('logosecure')) {
        img.addEventListener('contextmenu', function (e) {
            e.preventDefault();
        });
    }
}

function stopCtrl(e) {
    if(e.key == 'Control') {
        e.preventDefault();
    }
}

function stopCopyCut(img) {
    img.addEventListener('cut copy', function(e) {
        e.preventDefault();
    })
}

function stopCLickRight(e,img)
{
    if (e.button === 2 && img.classList.contains('logosecure')) {
        e.preventDefault(); 
    }
}

let images = document.querySelectorAll('img');
images.forEach(function (img) {
    img.addEventListener('mousedown', function (e) {
        stopCLickRight(e,img);
        stopSelectImg(img);
    });
    img.addEventListener('keydown', function (e) {
        stopCtrl(e);
    });
    stopCopyCut(img)
});