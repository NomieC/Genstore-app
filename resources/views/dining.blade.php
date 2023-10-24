<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Maison de l'Anglaise</title>
        {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >

    {{-- script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>
        
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

            .diningCard{
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

            .diningCard img {
                max-width: 970px;
                min-height:650px;
            }

            .diningCard p {
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
                .diningCard {
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
                <h1>Dining at Maison</h1>
                <p>Maison presents a sophisticated and refined dining experience that encapsulates the essence of 
                    <br>British cuisine with a modern twist. The restaurant's elegant ambiance and attentive service create an 
                    <br>inviting atmosphere for guests to immerse themselves in an exquisite culinary journey. From carefully curated 
                    <br>seasonal menus to an extensive selection of fine wines and spirits, each dish is expertly prepared using 
                    <br>locally sourced ingredients, showcasing a fusion of flavors that highlight the diversity of British gastronomy. 
                    <br>Maison's dedication to culinary excellence is evident in every meticulously crafted plate, offering guests
                    <br>a delightful and memorable dining experience that combines tradition with innovation, making it a go-to destination 
                    <br>for those seeking a taste of elevated British cuisine in a welcoming and elegant setting.</p>
            </div>
            <div class="diningCard">
                <div class="text">
                    <h3>British's Taste</h3>
                    <p>Infused with rich culinary heritage, Maison's British-inspired menu pays 
                        <br>homage to the finest local farmers and producers, presenting an array of 
                        <br>thoughtfully curated dishes that celebrate the essence of traditional British flavors.</p>
                    <button class="menuButton"><a href="#">MENU</a></button>
                </div>
                <div class="image">
                    <img src="https://media.tatler.com/photos/63fca84f4b09b756109187d4/16:9/w_2580%2Cc_limit/Lanesborough_270223.jpg">
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>