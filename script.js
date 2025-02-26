let slideIndex = 0;
let slideTimeout;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    slideTimeout = setTimeout(showSlides, 10000); 
}

function changeSlide(n) {
    clearTimeout(slideTimeout);
    slideIndex += n;
    let slides = document.getElementsByClassName("slide");
    if (slideIndex > slides.length) {
        slideIndex = 1;
    } else if (slideIndex < 1) {
        slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
    slideTimeout = setTimeout(showSlides, 10000);
}

// let featuredSlideIndex = 0;
// showFeaturedSlides();

// function showFeaturedSlides() {
//     let slides = document.getElementsByClassName("featured-slides")[0].children;
//     for (let i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     featuredSlideIndex++;
//     if (featuredSlideIndex > slides.length) {
//         featuredSlideIndex = 1;
//     }
//     slides[featuredSlideIndex - 1].style.display = "block";
//     setTimeout(showFeaturedSlides, 10000);
// }

// function changeFeaturedSlide(n) {
//     featuredSlideIndex += n;
//     let slides = document.getElementsByClassName("featured-slides")[0].children;
//     if (featuredSlideIndex > slides.length) {
//         featuredSlideIndex = 1;
//     } else if (featuredSlideIndex < 1) {
//         featuredSlideIndex = slides.length;
//     }
//     for (let i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     slides[featuredSlideIndex - 1].style.display = "block";
// }

// function toggleMenu() {
//     let navLinks = document.getElementById("nav-links");
//     navLinks.classList.toggle("show");
// }
