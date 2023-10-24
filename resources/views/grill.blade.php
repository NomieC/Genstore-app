<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maison de l'Anglaise</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

            .grillCard{
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

            .grillCard img {
                max-width: 970px;
                min-height:650px;
            }

            .grillCard p {
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
                .grillCard {
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
                        <form action="menu"><button type="submit" class="menuButton" ><a style="color: white">MENU</a></button></form>
                </div>
                <div class="image">
                    <img src="https://res.cloudinary.com/tf-lab/image/upload/w_3840,c_fill,q_auto,f_auto/restaurant/8e48df01-2364-41aa-870d-b0f5755e8916/77b7c45d-34eb-4ae9-a20c-205b1666dfe8.jpg">
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>