<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <!-- link na excalidraw: https://excalidraw.com/#json=CRVlpRHsa24WkudflvdVS,ugSN3OK7OK8YEAAioizmsg -->

  <div class="top-container">
    <img src="pictures/logo+obrazek.png" alt="" class="logo">

    <div class="search">
      <input type="search" 
      placeholder="Hledat nástroj, značku, žánr..."
      class="search-window">
    </div>

    <div class="clicker_img">
      <div class="profile-icon">
        <img src="pictures/profile-icon.png " alt="" class="profile-icon_img">
      </div>

      <div class="cart">
        <img src="pictures/shopping-cart.png" alt="" class="cart_img"> 
      </div>
    </div>

  </div>

  <header id="myHeader" class="main-header">
    <div class="header-things"> <a href=""> <h2> Kytary </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Bicí </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Zvuk </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Dechy </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Klávesy </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Záznamová média </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Studio </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Kabely </h2> </a> </div>
    <div class="header-things"> <a href=""> <h2> Další věci... </h2> </a> </div>
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
