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

            .hnlCard{
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top:30px;
            }

            .hnlCard h3{
                border-top: 1px solid white;
                border-bottom: 1px solid white;
                padding: 8px 0 8px;
                margin: 20px 90px 0;
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

            @media screen and (max-width: 800px) {
                .hnlCard {
                    flex-direction: column-reverse;
                }

                .text {
                    margin: 20px;
                }
                

            }
            
        </style>

    </head>
    <body class="antialiased">
    <div>
            <div class="title">
                <!-- <div>Logo</div> -->
                <h1>Hours & Location</h1>
                <p>Nestled in the heart of Quebec, Maison exudes an inviting charm on a picturesque block, located at 570 Hudson Street (corner of West 11th). 
                    <br>Whether seeking a cozy café, lively wine bar, or a relaxing evening retreat, Maison offers a versatile ambiance for all guests. With a 
                    <br>sidewalk patio for fair-weather enjoyment, Maison welcomes walk-in guests and offers takeout and delivery services via Caviar, ensuring guests
                    <br> can savor our cuisine from the comfort of their homes.</p>
            </div>
            <div class="hnlCard">
                <div class="text">
                    <h3>570 Hudson St, New York, NY 10014</h3>
                    <p>info@maisonquebec.com</p>
                    <p>Seven Days a Week</p><br>
                    <p>Monday - Wednesday: Noon - 10 PM</p>
                    <p>Thursday & Friday: Noon - 11 PM</p>
                    <p>Saturday: 11 AM - 11 PM</p>
                    <p>Sunday: 11 AM - 10 PM</p>
                </div>
                <div class="image">
                    <img src="https://www.travelandleisure.com/thmb/gydVR_uyC8mZqthQsPAln4QFVkI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/royale-homes-quebec-city-WALKTLQC1121-d587bf9b016a40849a9c239eb6e4d08b.jpg">
                </div>
            </div>
        </div>
    </body>
</html>