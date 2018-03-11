var images = ["p1.png", "p2.png", "p3.png", "p4.png", "p5.png", "p6.png", "p7.gif"];
var img_root_path = "img/penguin/"; 

change_img();

// Must be included under img tag
function change_img(){

    var dom_img = document.getElementById("penguin");

    var image = images[Math.floor(Math.random() * images.length)];
    var path = img_root_path + image;

    dom_img.src = path;
}