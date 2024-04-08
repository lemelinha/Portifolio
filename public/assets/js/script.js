const images = [
    'http://localhost:5000/assets/images/carousel1/image1.jpg',
    'http://localhost:5000/assets/images/carousel1/image2.jpg',
    'http://localhost:5000/assets/images/carousel1/image3.jpg'
];

window.onload = function () {
    const imageCarousel = document.getElementById('1');
    imageCarousel.style.backgroundImage = 'url(' + images[0] + ')';
};

function nextImage (carouselId) {
    const imageCarousel = document.getElementById(carouselId);
    let i = images.indexOf(imageCarousel.style.backgroundImage.split('"')[1]);
    if (i === images.length - 1){
        i = 0;
    } else {
        i += 1;
    }
    imageCarousel.style.backgroundImage = 'url(' + images[i] + ')';
}

function previousImage (carouselId) {
    const imageCarousel = document.getElementById(carouselId);
    let i = images.indexOf(imageCarousel.style.backgroundImage.split('"')[1]);
    if (i === 0){
        i = images.length - 1;
    } else {
        i -= 1;
    }
    imageCarousel.style.backgroundImage = 'url(' + images[i] + ')';
}
