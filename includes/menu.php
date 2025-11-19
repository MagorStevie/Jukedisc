<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Jukedisc</title>
</head>
<body>

  <script>
      function openPopup() {
          document.getElementById("myModal").style.display = "flex";
      }

      function closePopup() {
          document.getElementById("myModal").style.display = "none";
      }
  </script>

    <!-- link na excalidraw: https://excalidraw.com/#json=CRVlpRHsa24WkudflvdVS,ugSN3OK7OK8YEAAioizmsg -->

  <div class="top-container">
    <a href="index.php"> <img src="pictures/logo+obrazek.png" alt="" class="logo"> </a>

    <div class="search">
      <input type="search" 
      placeholder="Hledat nástroj, značku, žánr..."
      class="search-window">
    </div>

    <div class="clicker_img">
      <div class="profile-icon">
        <a href="register.php"> <img src="pictures/profile-icon.png " alt="" class="profile-icon_img"> </a>
      </div>

      <div class="cart">
        <a href="shopping-list.php"> <img src="pictures/shopping-cart.png" alt="" class="cart_img">  </a>
      </div>
    </div>

  </div>

  <header id="myHeader" class="main-header">
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Kytary </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Bicí </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Zvuk </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Dechy </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Klávesy </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Záznamová média </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Studio </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Kabely </h2> </a> </div>
    <div class="header-things"> <a href="" onclick="openPopup()"> <h2> Další věci... </h2> </a> </div>
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

            <div class="modal" id="myModal" style="display: none;">
                <div class="modal-content">
                    <span class="close" onclick="closePopup()"> &times; </span>
                    <h2> Došlo k chybě! </h2>
                    <p> Zkuste to později </p>
                </div>
            </div>

</body>
</html>
