
var cleanSlider = document.getElementById("cleanliness");
var cleanOut = document.getElementById("cleanValue");
cleanOut.value = cleanSlider.value;
cleanSlider.addEventListener("click", function() {
	alert("df");
	cleanOut.value = 3;
});