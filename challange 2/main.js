var box = document.getElementById('box');
var x = 50;
var y = 50;
var xDirection = 1;
var yDirection = 1;
// change box position
setInterval(function () {
    x += xDirection * 10;
    y += yDirection * 10;
    box.style.left = x + 'px';
    box.style.top = y + 'px';
    // get screen size
    let screenWidth = window.innerWidth;
    let screenHeight = window.innerHeight;

    // screen size - box size
    let xLimit = screenWidth - 100;
    let yLimit = screenHeight - 100;

    if (x >= xLimit) {
        xDirection = -1;
    }
 
    if (x <= 0) {
        xDirection = 1;
    }

    
    if (y >= yLimit) {
        yDirection = -1;
    }
    if (y <= 0) {
        yDirection = 1;
    }
}, 1000);