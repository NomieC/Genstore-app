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

            button{
                background-color: black;
                border: none;   
                padding: 5px 16px ;
                margin: 10px 16px;             
            }

            button a{
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
                    display: none;
                    align-items: center;
                    margin: auto;
                }
                #bookNowButton{
                    margin-bottom: 15px;
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
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <script>
            function myFunction() {
                var x = document.getElementById("navBars");
                if (x.style.display === "block") {
                    x.style.display = "none";
                    document.getElementById("bookNowButton").style.display = "none";
                } else {
                    x.style.display = "block";
                    document.getElementById("bookNowButton").style.display = "block";
                }
            }
        </script>
    </body>
</html>
