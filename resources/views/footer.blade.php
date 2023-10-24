<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    {{-- script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>
    <style>
        body, html {
            margin: 0;
        }
        footer {
            background-color: white;
            color: black;
            font-size: 16px;
            /* position: absolute; */
            bottom: 0;
            padding: 40px 20px 0;
        }
        footer * {
            box-sizing: border-box;
            border: none;
            outline: none;
        }
        .row {
            padding: 1em 1em;
        }
        .row.primary {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 2fr;
            align-items: stretch;
        }
        .column {
            width: 100%;
            display: flex;
            flex-direction: column;
            padding: 0 2em;
            min-height: 15em;
        }
        h3 {
            width: 100%;
            text-align: left;
            color: black;
            font-size: 1.4em;
            white-space: nowrap;
            margin: 20px 0 20px;
        }
        ul {
            list-style-type: none !important;
            text-align: left;
            display: flex;
            flex-direction: column;
            padding: 0;
            margin-left: 0;
        }
        li:not(:first-child) {
            margin-top: 0.8em;
        }
        ul li a {
            color: #a7a7a7;
            text-decoration: none;
        }
        ul li a:hover {
            color: #2a8ded;
        }
        .about p {
            text-align: justify;
            line-height: 2;
            margin: 0;
        }

        .column-about {
            text-align: left;
        }

        .column-links {
            margin-right: 10px;
        }

        .column-subscribe {
            margin-right: 10px;
        }
        
        .column-subscribe input {
            font-size: 1em;
            padding: 1em;
            width: 100%;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .column-subscribe button {
            font-size: 1em;
            padding: 1em;
            border-radius: 5px;
            width: 100%;
            background-color: #c7940a;
            color: #ffffff;
        }
        
        .social {
            display: flex;
            flex-direction: row;
            margin: 0.5em 0 0;
        }

        .social img {
            margin-right: 30px;
            width: 40px;
        }

        .copyright {
            padding: 0.3em 1em;
            background-color: black;
        }

        .footer-menu{
            float: left;
            margin-top: 10px;
        }

        .footer-menu a{
            color: #cfd2d6;
            padding: 6px;
            text-decoration: none;
        }
        .footer-menu a:hover{
            color: #27bcda;
        }

        .copyright {
            background-color: white;
            color: black;
        }

        .copyright p {
            font-size: 0.9em;
            text-align: right;
        }
        @media screen and (max-width: 850px) {
            .row.primary {
                grid-template-columns: 1fr;
            }
        }

        .column-links ul{
            list-style: none;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<footer>
        <div class="row primary">
            <div class="column-about">
                <h3>Maison de L'Anglaise</h3>
                <p>A culinary haven in the heart of Quebec, offering a delightful fusion of traditional British flavors with a modern twist.</p>
                <div class="social">
                    <img src="{{asset('assets/facebook.png')}}">
                    <img src="{{asset('assets/twitter.png')}}" >   
                    <img src="{{asset('assets/instagram.png')}}"> 
                    <img src="{{asset('assets/youtube.png')}}">                      
                </div>
            </div>
            <div class="column-links">
                <h3>Discover</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Hours & Location</a></li>
                    <li><a href="#">Menus</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>
            <div class="column-links">
                <h3>Cookies & <br>Policies</h3>
                <ul>
                    <li><a href="#faq">F.A.Q</a></li>
                    <li><a href="#cookies-policy">Cookies Policy</a></li>
                    <li><a href="#terms-of-services">Terms Of Service</a></li>
                    <li><a href="#support">Support</a></li>
                </ul>
            </div>
            <div class="column-subscribe">
                <h3>Newsletter</h3>
                <div>
                    <input type="email" placeholder="Your email here" />
                    <button>Subscribe</button>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <p>Copyright &copy; 2021 Maison de L'Anglais Quebecr</p>
        </div>
    </footer>
</body>