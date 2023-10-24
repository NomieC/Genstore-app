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

            .sundayCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top:30px;
            }

            /* .sundayCard h3{
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 8px 0 8px;
                margin: 0 100px 0;
            } */

            .christmasCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            /* .christmasCard h3{
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 8px 0 8px;
                margin: 0 100px 0;
            } */

            .christmasCard .text {
                flex-basis: 50%;
            }

            .christmasCard .image {
                flex-basis: 50%;
            }

            .valentineCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            /* .valentineCard h3{
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 8px 0 8px;
                margin: 0 100px 0;
            } */

            .sundayCard img, .christmasCard img, .valentine img {
                max-width: 970px;
                min-height:650px;
            }

            .sundayCard p, .christmasCard p, .valentineCard p {
                font-size: 20px;   
                text-align: center;
                color: white;
                margin-left: 60px;
                margin-right: 60px;
            }

            .text h3 {
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 20px 0 8px;
                margin: 20px 0 60px;
                color: white;
                text-align: center;
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
                .sundayCard {
                    flex-direction: column-reverse;
                }
                .christmasCard {
                    flex-direction: column;
                }
                .valentineCard {
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
                <h1>Events & Experiences<br>at Maison</h1>
                <p>Maison de l'Anglais is a premier fine dining establishment nestled in the heart of Quebec, 
                    <br>offering an exquisite culinary journey through the flavors of British cuisine. 
                    <br>With an emphasis on elegance and innovation, the restaurant celebrates the essence of 
                    <br>traditional British dishes while incorporating contemporary techniques and locally sourced ingredients. 
                    <br>From sumptuous roasts to delicate pastries, each dish is meticulously crafted to deliver a sophisticated 
                    <br>and unforgettable dining experience that resonates with both locals and visitors alike.</p>
            </div>
                <div class="sundayCard">
                    <div class="text">
                        <h3>Sunday Lunch</h3>
                        <p>Maison's Sunday Lunch features a sumptuous spread of classic British dishes made from seasonal, locally sourced ingredients. Guests can relish succulent roasts, flavorful gravies, fresh vegetables, and Yorkshire puddings in a warm and inviting atmosphere, perfect for enjoying time with loved ones.</p>
                        <button class="menuButton"><a href="#">MENU</a></button>
                    </div>
                    <div class="image">
                        <img src="https://www.hawksmoornyc.com/wp-content/uploads/Hawksmoor-NYC-Roast-Spread-3-scaled.jpg">
                    </div>
                </div>
                <div class="christmasCard">
                    <div class="image">
                        <img src="https://www.optionstheedge.com/sites/default/files/field/featured-image/2019/christmas_eve_buffet_christmas_day_brunch_1.jpg">
                    </div>
                    <div class="text">
                        <h3>Christmas Dinner</h3>
                        <p>Maison's Christmas Dinner offers a lavish feast of traditional British favorites, expertly prepared with the finest seasonal ingredients sourced locally. Guests can enjoy the rich flavors and heartwarming dishes in an elegant and festive ambiance, perfect for creating cherished holiday memories with friends and family.</p>
                        <button class="menuButton"><a href="#">MENU</a></button>
                    </div>
                </div>
                <div class="valentineCard">
                    <div class="text">
                        <h3>Valentine's Day</h3>
                        <p>Maison's Valentine's Day celebration offers a romantic dining experience accentuated by a curated menu of exquisite dishes designed to ignite the senses and evoke the spirit of love. With impeccable service and a charming ambiance, couples can revel in an enchanting evening, creating cherished memories in the company of affection and romance.</p>
                        <button class="menuButton"><a href="#">MENU</a></button>
                    </div>
                    <div class="image">
                        <img src="https://diningandnightlife.com/wp-content/uploads/2022/02/Ristorante-Valentines-2-1000x600.jpg">
                    </div>
                </div>
        </div>
        @include('footer')
    </body>
</html>