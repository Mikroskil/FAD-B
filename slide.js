// JavaScript Document
//image counter as there is no guarantee that the last images loaded
//is the last one to finish
var loaded = 0, numOfImages = 4;

//first part of chain, invoke async load
var image0 = document.createElement('img'); //this will work in new Chrome
var image1 = document.createElement('img'); //instead of new Image
var image2 = document.createElement('img');
var image3 = document.createElement('img');

//common event handler when images has loaded with counter
//to know that all images has loaded
image0.onload = image1.onload = 
image2.onload = image3.onload = function(e) {
    loaded++;
    if (loaded === numOfImages)
        draw();   // <-- second part of chain, invoke loop
}

//show if any error occurs
image0.onerror = image1.onerror = 
image2.onerror = image3.onerror = function(e) {
    alert(e.toString());
}

//invoke async loading... you can put these four into your
//window.onload if you want to
image0.src ="slide1.png";
image1.src ="slide2.png";
image2.src = "slide3.png";
image3.src = "slide4.png";

// this is the main function
function draw() {

    var images = new Array(image0, image1, image2, image3),
        counter = 0,
        maxNum = images.length - 1,

        myCanvas = document.getElementById('myCanvas'),
        ctx = myCanvas.getContext('2d'),

        me = this; //this we need for setTimeout()

    //third part of chain, have a function to invoke by setTimeout
    this._draw = function() {

        ctx.clearRect(0, 0, myCanvas.width, myCanvas.height)
        ctx.drawImage(images[counter++], 0, 0);
        if (counter > maxNum) counter = 0;

        setTimeout(me._draw, 3000); //here we use me instead of this
    }
    this._draw(); //START the loop
}