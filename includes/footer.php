<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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

    <div class="sluzby">
        <div class="nase-sluzby">
            <h2 class="dolu"> Naše služby </h2>
            <p> něco </p>
            <p> něco </p>
            <p> něco </p>
            <p> něco </p>
            <div class="btn-sluzby">
                <button class="btn-dole" onclick="openPopup()"> Kontaktujte nás </button>
            </div>
        </div>
        <div class="sluzby-spolecnost">
            <h2 class="dolu"> O společnosti </h2>
            <p> něco </p>
            <p> něco </p>
            <p> něco </p>
            <p> něco </p>
            <div class="btn-sluzby">
                <button class="btn-dole" onclick="openPopup()"> Info o nás </button>
            </div>
        </div>
        <div class="sluzby-komunita">
            <h2 class="dolu"> Komunita </h2>           
            <p> něco </p>
            <p> něco </p>
            <p> něco </p>
            <p> něco </p>
            <div class="btn-sluzby">
                <button class="btn-dole" onclick="openPopup()"> Proč zrovna nás </button>
            </div>
        </div>
    </div>

    <div class="social">
        <div class="social-news">
            <h2> S námi vám neunikne žádná novinka </h2>
            <ul class="tips">
                <li class="lol"> Žhavé novinky </li>
                <li class="lol"> Lákavé slevy </li>
                <li class="lol"> Tipy pro zlepšení hraní </li>
                <li class="lol"> Zajímavé akce </li>
            </ul>
        </div>

        <div class="social-media">
            <h2> Sociální sítě </h2>

            <div class="bytwo">
                <div class="one">
                    <a href="https://www.instagram.com/jukedisc_/"> <div> <img src="pictures/instagram-icon.png" alt="" class="icon"> Instagram:  jukedisc_ </div> </a> 
                    <div> <img src="pictures/facebook-icon.png" alt="" class="icon"> Facebook: nemáme </div>
                </div>
                <div class="two">
                    <div> <img src="pictures/youtube-icon.png" alt="" class="icon"> Youtbue: nemáme </div>
                    <div> <img src="pictures/twitter-icon.png" alt="" class="icon"> Twitter: nemáme </div>
                </div>
            </div>

        </div>
    </div>

            <div class="modal" id="myModal" style="display: none;">
                <div class="modal-content">
                    <span class="close" onclick="closePopup()"> &times; </span>
                    <h2> Došlo k chybě! </h2>
                    <p> Zkuste to později </p>
                </div>
            </div>

</body>
</html>
