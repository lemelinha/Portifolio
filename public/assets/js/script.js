function nextImage (carouselId) {
    const imageCarousel = document.getElementById(carouselId);
    let i = images[carouselId].indexOf(imageCarousel.style.backgroundImage.split('"')[1]);
    if (i === images[carouselId].length - 1){
        i = 0;
    } else {
        i += 1;
    }
    imageCarousel.style.backgroundImage = 'url(' + images[carouselId][i] + ')';
}

function previousImage (carouselId) {
    const imageCarousel = document.getElementById(carouselId);
    let i = images[carouselId].indexOf(imageCarousel.style.backgroundImage.split('"')[1]);
    if (i === 0){
        i = images[carouselId].length - 1;
    } else {
        i -= 1;
    }
    imageCarousel.style.backgroundImage = 'url(' + images[carouselId][i] + ')';
}
