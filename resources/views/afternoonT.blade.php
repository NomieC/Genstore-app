<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maison de l'Anglaise</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap'); 
            body, html {
                margin: 0;
                background-color: white;
                color: black;    
                font-family: "cormorant", sans-serif;
            }

            .title {
                text-align: center;
                margin: 100px;
            }

            .title h1{
                margin-bottom: 40px;
                font-size: 50px;
            }

            .title p{
                margin: 40px 0 0;
                font-size: 20px;
            }

            .teaCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top:30px;
            }

            .teaCard h3{
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 8px 0 8px;
                margin: 20px 100px 0;
            }

            img {
                max-width: 970px;
                min-height:650px;
            }

            .text {
                font-size: 20px;   
                text-align: center;
                color: white;
                margin-left: 60px;
                margin-right: 60px;
            }

            .text h3{
                margin-bottom: 60px;
            }

            .menuButton {
                margin: auto;
                text-align:center;
                cursor: pointer; 
                border-top: 1px solid white; 
                border-left: 0;
                border-right: 0;
                border-bottom: 1px solid white; 
                background-color: transparent; 
                height: 36px; 
                width: 70px; 
                font-size: 18px;
                margin-top: 60px;
                margin-bottom: 40px;
            }

            .menuButton a{
                color: white; 
                text-align:center;
                text-decoration:none;
                margin:auto;
                font-family: "cormorant", sans-serif;
            }

            .topnav {
                overflow: hidden;
                background-color: #927c55;
                position: relative;
                display: flex;
            }

            #navBars a {
                color: white;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
                display: block;
            }

            .topnav a.icon {
                background: #927c55;
                display: block;
                position: absolute;
                right: 0;
                top: 0;
            }

            #navBars a:hover {
                background-color: #bcb7a4;
                color: black;
            }

            .active {
                background-color: #927c55;
                color: white;
                text-decoration: none;
                padding: 14px 16px;
                font-size: 17px;
            }

            .icon {
                background-color: #927c55;
                color: white;
                text-decoration: none;
                padding: 14px 16px;
                font-size: 17px;
                justify-content: space-between;
            }

            #bookNowButton{
                background-color: black;
                border: none;   
                padding: 5px 16px ;
                margin: 10px 16px;             
            }

            #bookNowButton a{
                color: white;
                text-decoration: none;
            }

            @media screen and (max-width: 800px) {
                #navBars {
                    display: none;
                    text-align: center;
                }
                .topnav {
                    display: grid;
                    grid-template-columna: repeat(3, 1fr);
                }

                #bookNowButton{
                    margin-bottom: 15px;
                    display: none;
                    align-items: center;
                    margin: auto;
                }
                .teaCard {
                    flex-direction: column-reverse;
                }

                .text {
                    margin: 20px;
                }

            }

            @media screen and (min-width: 801px) {
                #navBars {
                    display: flex !important;
                    margin: auto;
                }
                .topnav a.icon {
                    display: none;
                }
                button{
                    display: flex !important;
                }
                
            }
        </style>

    </head>
    <body class="antialiased">
        <div class="topnav">
            <a href="#" class="active">Logo</a>
            <div id="navBars">
                <a href="#">Hours & Location</a>
                <a href="#">About Maison</a>
                <a href="#">Menus</a>
                <a href="#">Dining</a>
                <a href="#">Grill</a>
                <a href="#">Afternoon Tea</a>
                <a href="#">Wine</a>
                <a href="#">Events</a>
                <a href="#">Contact</a>
                <a href="#">Press</a>     
            </div>
            <button id="bookNowButton"><a href="#">Book Now</a></button>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i id="iconBars" class="fa fa-bars"></i>
            </a>
        </div>
        <div>
            <div class="title">
                <div>Logo</div>
                <h1>Afternoon Tea<br>at Maison</h1>
                <p>Maison's Afternoon Tea is a delightful and elegant affair that captures the essence of British tradition 
                    <br>and sophistication. Served in a charming setting, the experience offers a refined selection of 
                    <br>delectable pastries, finger sandwiches, and freshly baked scones, all accompanied by a variety of fine teas. 
                    <br>Guests are invited to indulge in a leisurely afternoon filled with delectable treats, complemented by
                    <br>impeccable service and an inviting ambiance, making it an ideal setting for intimate gatherings, celebrations, 
                    <br>or simply a relaxing afternoon of culinary indulgence.</p>
            </div>
            <div class="teaCard">
                <div class="text">
                    <h3>British's Favourite Pastime</h3>
                    <p>Embracing the cherished British pastime of afternoon tea, 
                        <br>Maison artfully presents an assortment of delicate pastries and sandwiches
                        <br>alongside a selection of premium teas, exuding a timeless charm and elegance.</p>
                    <button class="menuButton"><a href="#">MENU</a></button>
                </div>
                <div class="image">
                    <img src="https://www.travoh.com/wp-content/uploads/2022/06/008-Mandarin-Oriental-Ritz-Madrid-Hotel-Madrid-Spain-Palm-Court-Restaurant.jpg">
                </div>
            </div>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("navBars");
                var icon = document.getElementById("iconBars");
                if (x.style.display === "block") {
                    x.style.display = "none";
                    document.getElementById("bookNowButton").style.display = "none";
                    icon.classList.remove("fa-light");
                    icon.classList.remove("fa-times");
                    icon.classList.add("fa-bars");
                } else {
                    x.style.display = "block";
                    document.getElementById("bookNowButton").style.display = "block";
                    icon.classList.remove("fa-bars");
                    icon.classList.add("fa-light", "fa-times");
                }
            }
        </script>
    </body>
</html>
