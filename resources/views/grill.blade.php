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
            body {
                background-color: white;
                color: black;      
            }

            .title {
                text-align: center;
                margin: 100px;
            }

            .title h1{
                margin-bottom: 40px;
            }

            .grillCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top:30px;
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
                border: 1px solid white; 
                background-color: transparent; 
                height: 36px; 
                width: 70px; 
                font-size: 18px;
                margin-top: 60px;
            }

            .menuButton a{
                color: white; 
                text-align:center;
                text-decoration:none;
                margin:auto;
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
                .grillCard {
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
                <h1>Grill at Maison</h1>
                <p>Maison Grill offers a sophisticated and inviting ambiance, serving as the perfect setting for guests 
                    <br>to savor a diverse and delectable array of grilled dishes. With a focus on premium cuts of meat, 
                    <br>the restaurant expertly showcases the flavors of British cuisine through a fusion of traditional 
                    <br>grilling techniques and contemporary culinary innovation. Guests can indulge in a culinary journey that 
                    <br>highlights the finest quality ingredients, sourced from local farmers and producers, creating an unforgettable 
                    <br>dining experience that celebrates the art of grilling in an elegant and welcoming atmosphere.</p>
            </div>
            <div class="grillCard">
                <div class="text">
                    <h3>British's Wild Game</h3>
                    <p>Celebrating the essence of British's wild game, Maison Grill 
                        <br>artfully presents a selection of premium cuts expertly sourced from 
                        <br>local hunters and sustainable producers, delivering a rich and flavorsome dining experience.</p>
                    <button class="menuButton"><a href="#">MENU</a></button>
                </div>
                <div class="image">
                    <img src="https://res.cloudinary.com/tf-lab/image/upload/w_3840,c_fill,q_auto,f_auto/restaurant/8e48df01-2364-41aa-870d-b0f5755e8916/77b7c45d-34eb-4ae9-a20c-205b1666dfe8.jpg">
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
