<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <!-- link na excalidraw: https://excalidraw.com/#json=CRVlpRHsa24WkudflvdVS,ugSN3OK7OK8YEAAioizmsg -->

    <div class="top-container">
        <h1>Scroll Down</h1>
    </div>

    <header class="main-header" id="myHeader">
        <img src="pictures/logo.png" alt="" class="logo">
    </header>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>
