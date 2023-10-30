<!DOCTYPE html>
<html>
<head>
<style>
.blink {
  animation: blink 1s steps(1, end) infinite;
}

@keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}
</style>
</head>
<body>

<button class="blink" onclick="showImages()">Click me</button>

<div id="overflow" style="display:none;">
    <img src="image1.jpg" alt="image1">
    <img src="image2.jpg" alt="image2">
    <img src="image3.jpg" alt="image3">
</div>

<script>
function showImages() {
  var x = document.getElementById("overflow");
  if (x.style.display === "none") {
    x.style.display = "block";
    x.style.top = document.getElementById("topnav").offsetHeight + "px";
    x.style.width = document.getElementById("topnav").offsetWidth + "px";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>
