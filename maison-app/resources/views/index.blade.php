<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >

    {{-- script --}}
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>

</head>
<body>
    
    <header class="parallax" data-parallax="scroll">
        <nav>
            <h1 class="logo">
                <a href="/">Menu</a>
            </h1>
            <a href="" class="btn-sign-up">Sign up</a>
        </nav>

        <div class="header-title">Maison de l'Anglais</div>
        <div class="header-bottom">
            <p class="today-date">3 <span>/12</span></p>
            <ul class="social-media">
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
            </ul>
        </div>
    </header>

    <div class="wrapper">
        <div class="content">
          <header class="header">
            <div class="layers">
              <div class="layer-title">
                <div class="subtitle">Welcome to</div>
                <div class="title">Maison de l'Anglais</div>
                <p class="article-text" style="text-align: center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis
                    error provident dignissimos facere. Repellendus tempore autem qui!
                    Quia magnam tempora esse id necessitatibus corrupti mollitia
                    expedita sapiente cum rerum, ut dicta laboriosam!
                  </p>
              </div>
            </div>
        </div>
      </div>

    {{-- miscellaneous --}}
    
    <section id="misc">
        <div class="misc-container">
            <div class="misc-image-box">
                <div class="image-container">
                    <img class="misc-img1" src="{{asset("assets/authentic.jpg")}}" alt="image">
                </div>
                <div class="image-container">
                    <img class="misc-img2" src="{{asset("assets/fresh.jpg")}}" alt="image">
                </div>
                <div class="image-container">
                    <img class="misc-img3" src="{{asset("assets/unique.jpg")}}" alt="image">
                </div>
            </div>
            
            <div class="misc-text-box">
                    
                <div id="first" class="right-block-misc">
                    <h2 class="misc-title">authentic english food</h2>
                    <p class="misc-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat tempora dignissimos quis repellendus nihil dolorem aliquam quod explicabo fugit similique voluptatem voluptatibus fuga, id soluta omnis eius eligendi cum!</p>
                    <p class="misc-normaltext">Indulge in the exquisite taste of our handcrafted dishes made with the finest ingredients. From classic English breakfasts to hearty pub favorites, our menu is carefully curated to satisfy your cravings and transport you to the charming streets of England.</p>
                </div>
                
                <div id="first" class="right-block-misc">
                    <h2 class="misc-title">quality of products</h2>
                    <p class="misc-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat tempora dignissimos quis repellendus nihil dolorem aliquam quod explicabo fugit similique voluptatem voluptatibus fuga, id soluta omnis eius eligendi cum!</p>
                    <p class="misc-normaltext">At Maison de l'Anglais, quality is our utmost priority. We source only the freshest and highest-quality ingredients to create our culinary masterpieces. Every dish is crafted with precision and care, ensuring that you savor the authentic flavors and enjoy a dining experience that exceeds your expectations.</p>
                </div>
                
                <div id="first" class="right-block-misc">
                    <h2 class="misc-title">unique flavors</h2>
                    <p class="misc-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat tempora dignissimos quis repellendus nihil dolorem aliquam quod explicabo fugit similique voluptatem voluptatibus fuga, id soluta omnis eius eligendi cum!</p>
                    <p class="misc-normaltext">Discover a world of flavors that harmoniously come together to create distinctive and memorable dishes. Our chefs, inspired by global cuisines, infuse creativity into every recipe, ensuring that each bite is a burst of unique tastes and textures. Immerse yourself in our culinary creations and embark on a gastronomic journey that celebrates the diversity of flavors.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="about">
        <div class="about-container">
            <div class="image-gallery">
    
                <div class="image-box">
                    <img src="{{asset("assets/breakfast.jpg")}}" alt="image">
                    <h2 class="theme">P</h2>
                </div>
                <div class="image-box">
                    <img src="{{asset("assets/pastry.jpg")}}" alt="image">
                    <h2 class="theme">A</h2>
                </div>
                <div class="image-box">
                    <img src="{{asset("assets/tea.jpg")}}" alt="image">
                    <h2 class="theme">R</h2>
                </div>
                <div class="image-box">
                    <img src="{{asset("assets/wine.jpg")}}" alt="image">
                    <h2 class="theme">L</h2>
                </div>
    
            </div>
            <div class="about-info">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo aliquam natus minus molestias? Adipisci labore, sunt libero quam sequi temporibus quaerat. Rem, quo quis dolorem et modi atque deserunt hic!
            </div>
        </div>
    </section>

    <footer>
        ini percobaan footer
    </footer>
</body>

</html>