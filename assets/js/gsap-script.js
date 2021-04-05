// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function (event) {

    //console.log("DOM loaded");

    // wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function (e) {

        // custom GSAP code goes here
        //console.log("window loaded");
        const tl = gsap.timeline({defaults: {ease: 'power1.out'}});

        tl.to('.text', {y:'0%', duration: 1, stagger: 0.25});
        tl.to('.slider', {y: '-100%', duration: 1.5, delay: 0.5});
        tl.to('.intro', {y:'-100%', duration: 1}, '-=1.2');
        tl.fromTo('.hero-wrapper', {opacity: 0}, {opacity: 1, duration: 0.93});
        tl.fromTo('nav', {opacity: 0}, {opacity: 1, duration: 1}, '-=1.35');
    
        
    }, false);
    

});