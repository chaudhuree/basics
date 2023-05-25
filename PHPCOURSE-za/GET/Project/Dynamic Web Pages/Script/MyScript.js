var myImage = document.getElementById("mainImage");

var imageArray = ["images/bournelegacy.jpg","images/inception.jpg","images/star0.jpg",
				  "images/hunger0.jpg","images/V forever.jpg"];
var imageIndex = 0;

function changeImage() {
	myImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length) {
		imageIndex = 0;
	}
}

// setInterval is also in milliseconds
var intervalHandle = setInterval(changeImage,2000);

myImage.onclick =  function click() {
	clearInterval(intervalHandle);
}; 