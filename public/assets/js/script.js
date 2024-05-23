let projects_images = {} // objeto com cada projeto e suas imagens
$(document).ready(function () {
    $('.projeto').each(function () {
        let project_id = $(this).attr('id')
        projects_images[project_id] = $(this).find('.carousel-container img').map(function () { return $(this) }).get()
    })
});

$('.previous').on('click', function () {
    let project_id = $(this).attr('id');
    let images_array = projects_images[project_id]
    Object.values(images_array).forEach(image => {
        if (image.css('display') == 'block'){
            currentImage = images_array.indexOf(image)
        }
    })

    images_array[currentImage].css('display', 'none')
    if (currentImage === 0) {
        previousImage = images_array.length - 1
    } else {
        previousImage = currentImage - 1
    }

    images_array[previousImage].css('display', 'block')
    return
});

$('.next').on('click', function () {
    let project_id = $(this).attr('id');
    let images_array = projects_images[project_id]
    Object.values(images_array).forEach(image => {
        if (image.css('display') == 'block'){
            currentImage = images_array.indexOf(image)
        }
    })

    images_array[currentImage].css('display', 'none')
    if (currentImage === images_array.length - 1) {
        nextImage = 0
    } else {
        nextImage = currentImage + 1
    }

    images_array[nextImage].css('display', 'block')
    return
});
