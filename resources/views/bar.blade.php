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

                font-size: 20px;
            }

            .barCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top:30px;
            }

            .barCard h3{
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

                button {
                    
                }
                #bookNowButton{
                    margin-bottom: 15px;
                    display: none;
                    align-items: center;
                    margin: auto;
                }
                .barCard {
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
                <h1>Gentlemen's Bar<br>at Maison</h1>
                <p>Maison Bar is a sophisticated and stylish destination that offers a vibrant and inviting atmosphere for guests to enjoy 
                    <br>handcrafted cocktails and an extensive selection of premium spirits. With a focus on mixology finesse, the bar 
                    <br>presents a diverse array of innovative concoctions and classic favorites, expertly crafted by skilled bartenders. Guests can 
                    <br>relish in the cozy and contemporary ambiance, making Maison Bar the perfect spot for social gatherings, intimate conversations, 
                    <br>and unwinding after a long day, all while experiencing the epitome of British hospitality and elegance.</p>
            </div>
            <div class="barCard">
                <div class="text">
                    <h3>Maison's Vintage Collection</h3>
                    <p>Indulge in Maison's Vintage collection, a meticulously curated wine list boasting a selection of prestigious 
                        <br>international vintages and exclusive imports, offering a diverse and luxurious tasting experience overseen by our esteemed sommelier.</p>
                    <button class="menuButton"><a href="#">MENU</a></button>
                </div>
                <div class="image">
                    <img src="https://ritzparis.twic.pics/prod/ritz-bar-jerome-galland-1.jpg?twic=v1/cover=2850x1247/quality=85">
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