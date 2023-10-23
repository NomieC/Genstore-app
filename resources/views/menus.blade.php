<!DOCTYPE html>
<html>
<head>
    <title>Card Flip</title>
    <style>
        .content {
            text-align: center;
        }

        .heading {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .description {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .card {
            display: inline-block;
            width: 300px;
            height: 400px;
            perspective: 1000px;
            margin: 10px;
        }

        .front {
            width: 100%;
            height: 100%;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            backface-visibility: hidden;
        }

        .front p {
            color: #fff;
            padding: 20px;
        }

        .back {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #f1f1f1;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            backface-visibility: hidden;
        }

        .back p {
            margin-bottom: 10px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .card:hover .front {
            transform: rotateY(180deg);
        }

        .card:hover .back {
            transform: rotateY(0);
        }
        :root {
            --primary: hsl(222, 80%, 50%);
            --primary-light: hsl(222, 50%, 95%);
            --secondary: hsl(350, 80%, 50%);
            --red: hsl(10, 80%, 50%);
            --orange: hsl(50, 80%, 50%);
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        html {
            font-size: 18px;
            line-height: 1.5;
            font-weight: 300;
            color: #333;
            font-family: "Nunito Sans", sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: var(--primary-light);
            background-attachment: fixed;
        }

        .content {
            display: flex;
            margin: 0 auto;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 1000px;
        }

        .heading {
            width: 100%;
            margin-left: 1rem;
            font-weight: 900;
            font-size: 1.618rem;
            text-transform: uppercase;
            letter-spacing: 0.1ch;
            line-height: 1;
            padding-bottom: 0.5em;
            margin-bottom: 1rem;
            position: relative;
        }

        .heading:after {
            display: block;
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, adjust-hue(var(--primary), -20deg), var(--primary));
            bottom: 0;
        }

        .description {
            width: 100%;
            margin-top: 0;
            margin-left: 1rem;
            margin-bottom: 3rem;
        }

        .card {
            color: inherit;
            cursor: pointer;
            width: calc(33% - 2rem);
            min-width: calc(33% - 2rem);
            height: 400px;
            min-height: 400px;
            perspective: 1000px;
            margin: 1rem;
        }

        @media screen and (max-width: 800px) {
        .card {
            width: calc(50% - 2rem);
        }
        }

        @media screen and (max-width: 500px) {
        .card {
            width: 100%;
        }
        }

        .front,
        .back {
            display: flex;
            border-radius: 6px;
            background-position: center;
            background-size: cover;
            text-align: center;
            justify-content: center;
            align-items: center;
            position: absolute;
            height: 100%;
            width: 100%;
            backface-visibility: hidden;
            transform-style: preserve-3d;
            transition: ease-in-out 600ms;
        }

        .front {
            background-size: cover;
            padding: 2rem;
            font-size: 1.618rem;
            font-weight: 600;
            color: #fff;
            overflow: hidden;
            font-family: Poppins, sans-serif;
        }

        .front:before {
            position: absolute;
            display: block;
            content: '';
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, adjust-hue(var(--primary), -20deg), var(--primary));
            opacity: 0.25;
            z-index: -1;
        }

        .card:hover .front {
            transform: rotateY(180deg);
        }

        .card:nth-child(even):hover .front {
            transform: rotateY(-180deg);
        }

        .back {
            background: #fff;
            transform: rotateY(-180deg) ;
            padding: 0 2em;
        }

        .back .button {
            background: linear-gradient(135deg, adjust-hue(var(--primary), -20deg), var(--primary));
        }

        .back .button:before {
            box-shadow: 0 0 10px 10px rgba(var(--primary), 0.25);
            background-color: rgba(var(--primary), 0.25);
        }

        .card:hover .back {
            transform: rotateY(0deg);
        }

        .card:nth-child(even) .back {
            transform: rotateY(180deg);
        }

        .card:nth-child(even) .back .button {
            background: linear-gradient(135deg, adjust-hue(var(--secondary), -20deg), var(--secondary));
        }

        .card:nth-child(even) .back .button:before {
            box-shadow: 0 0 10px 10px rgba(var(--secondary), 0.25);
            background-color: rgba(var(--secondary), 0.25);
        }

        .card:nth-child(even):hover .back {
            transform: rotateY(0deg);
        }

        .button {
            --height: 40px;
            transform: translateZ(var(--height));
            cursor: pointer;
            backface-visibility: hidden;
            font-weight: bold;
            color: #fff;
            padding: 0.5em 1em;
            border-radius: 100px;
            font: inherit;
            border: none;
            position: relative;
            transform-style: preserve-3d;
            transition: 300ms ease;
        }

        .button:before {
            transition: 300ms ease;
            position: absolute;
            display: block;
            content: '';
            transform: translateZ(calc(-1 * var(--height)));
            backface-visibility: hidden;
            height: calc(100% - 20px);
            width: calc(100% - 20px);
            border-radius: 100px;
            left: 10px;
            top: 16px;
        }

        .button:hover {
            transform: translateZ(calc(var(--height) + 15px));
        }

        .button:hover:before {
            transform: translateZ(calc(-1 * (var(--height) + 15px)));
        }

        .button:active {
            transform: translateZ(calc(var(--height) / 2));
        }

        .button:active:before {
            transform: translateZ(calc(-1 * (var(--height) / 2)));
            top: 12px;
        }


    </style>
</head>
<body>
    <div class="content">
        <h1 class="heading">Card Flip</h1>
        <p class="description">Hover over a card to flip it.</p>
        <a href="#!" class="card">
            <div class="front" style="background-image: url(//source.unsplash.com/300x401)"><p>Lorem ipsum dolor sit amet consectetur adipisi.</p></div>
            <div class="back">
                <div>
                    <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                    <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
                    <button class="button">Click Here</button>
                </div>
            </div>
        </a>
        <a href="#!" class="card">
            <div class="front" style="background-image: url(//source.unsplash.com/300x402)"><p>Lorem ipsum dolor sit amet consectetur adipisi.</p></div>
            <div class="back">
                <div>
                    <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                    <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
                    <button class="button">Click Here</button>
                </div>
            </div>
        </a>
        <a href="#!" class="card">
            <div class="front" style="background-image: url(//source.unsplash.com/300x403)"><p>Lorem ipsum dolor sit amet consectetur adipisi.</p></div>
            <div class="back">
                <div>
                    <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                    <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
                    <button class="button">Click Here</button>
                </div>
            </div>
        </a>
        <a href="#!" class="card">
            <div class="front" style="background-image: url(//source.unsplash.com/300x404)"><p>Lorem ipsum dolor sit amet consectetur adipisi.</p></div>
            <div class="back">
                <div>
                    <p>Consectetur adipisicing elit. Possimus, praesentium?</p>
                    <p>Provident consectetur natus voluptatem quis tenetur sed beatae eius sint.</p>
                    <button class="button">Click Here</button>
                </div>
            </div>
        </a>
    </div>
</body>
</html>
