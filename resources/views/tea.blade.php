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
            .antialiased, html {
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
                font-size: 20px;
            }

            .teaCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top:30px;
            }

            .text h3 {
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 20px 0 8px;
                margin: 20px 0 60px;
                color: white;
                text-align: center;
            }

            .teaCard img {
                max-width: 970px;
                min-height:650px;
            }

            .teaCard p {
                font-size: 20px;   
                text-align: center;
                color: white;
                margin-left: 60px;
                margin-right: 60px;
            }


            .menuButton {
                display: flex;
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

            @media screen and (max-width: 800px) {
                .teaCard {
                    flex-direction: column-reverse;
                }

                .text {
                    margin: 20px;
                }

            }
        </style>

    </head>
    <body class="antialiased">
        @include('navbar')
        <div>
            <div class="title">
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
                        <form action="menu"><button type="submit" class="menuButton" ><a style="color: white">MENU</a></button></form>
                </div>
                <div class="image">
                    <img src="https://www.travoh.com/wp-content/uploads/2022/06/008-Mandarin-Oriental-Ritz-Madrid-Hotel-Madrid-Spain-Palm-Court-Restaurant.jpg">
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>