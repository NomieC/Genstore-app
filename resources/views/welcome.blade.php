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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>


</head>
<body>
    @include('navbar')
    <header class="parallax" data-parallax="scroll">
        <a href="" class="header-title"><img src="{{asset('assets/logo.jpeg')}}" alt=""></a>
        {{-- <div class="header-bottom">
            <p class="today-date">3 <span>/12</span></p>
            <ul class="social-media">
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
            </ul>
        </div> --}}
    </header>

    <div class="welcome-container">
        <div class="welcome-content">
          <header class="welcome-header">
            <div class="layers">
              <div class="layer-title">
                <div class="welcome-title">Welcome to</div>
                <div class="welcome-subtitle">Maison de l'Anglais</div>
                <p class="welcome-text">
                    In the heart of Maison de l'Anglais lies a tale of dedication and creativity. We believe in the power of delightful dining experiences, where each ingredient is carefully chosen, and every recipe is an expression of our culinary expertise. With a touch of innovation and a commitment to quality, we bring you dishes that not only please the palate but also warm the soul.
                  </p>
              </div>
            </div>
        </div>
      </div>

    <header class="parallax-intro" data-parallax="scroll">
        <div class="intro-text">Maison de l'Anglais was built by a dedicated team of students wishing to get an A</div>
    </header>

    {{-- miscellaneous --}}
    
    <section id="misc">
        <div class="misc-container">
            <div class="misc-image-box " >
                <div class="image-container">
                    <img class="misc-img1 misc-photos show-on-scroll" src="{{asset("assets/authentic.jpg")}}" alt="image">
                </div>
                <div class="image-container">
                    <img class="misc-img2 misc-photos show-on-scroll" src="{{asset("assets/fresh.jpg")}}" alt="image">
                </div>
                <div class="image-container">
                    <img class="misc-img3 misc-photos show-on-scroll" src="{{asset("assets/unique.jpg")}}" alt="image">
                </div>
            </div>
            
            <div class="misc-text-box " >
                    
                <div id="first" class="right-block-misc">
                    <img class="mobile-view-misc1" src="{{asset("assets/authentic.jpg")}}" alt="">
                    <h2 class="misc-title">authentic english food</h2>
                    <p class="misc-subtitle">Dive into a Culinary Odyssey</p>
                    <p class="misc-normaltext">Indulge in the exquisite taste of our handcrafted dishes made with the finest ingredients. From classic English breakfasts to hearty pub favorites, our menu is carefully curated to satisfy your cravings and transport you to the charming streets of England.</p>
                </div>
                
                <div id="second" class="right-block-misc">
                    <img class="mobile-view-misc2" src="{{asset("assets/fresh.jpg")}}" alt="">
                    <h2 class="misc-title">quality of products</h2>
                    <p class="misc-subtitle">Where Freshness Meets Excellence</p>
                    <p class="misc-normaltext">At Maison de l'Anglais, quality is our utmost priority. We source only the freshest and highest-quality ingredients to create our culinary masterpieces. Every dish is crafted with precision and care, ensuring that you savor the authentic flavors and enjoy a dining experience that exceeds your expectations.</p>
                </div>
                
                <div id="third" class="right-block-misc">
                    <img class="mobile-view-misc3" src="{{asset("assets/unique.jpg")}}" alt="">
                    <h2 class="misc-title">unique flavors</h2>
                    <p class="misc-subtitle">A Symphony of Distinctive Tastes</p>
                    <p class="misc-normaltext">Discover a world of flavors that harmoniously come together to create distinctive and memorable dishes. Our chefs, inspired by global cuisines, infuse creativity into every recipe, ensuring that each bite is a burst of unique tastes and textures. Immerse yourself in our culinary creations and embark on a gastronomic journey that celebrates the diversity of flavors.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- grid section --}}
    <section id="about-us" class="grid-section">
        <div class="grid-container" style="margin-bottom: 300px">
            <div class="satu"></div>
            <div class="dua">
                <div class="grid-text-container">
                    <h1 class="grid-title">About Us</h1>
                    <p class="grid-normaltext">Welcome to Maison, where culinary excellence meets warm hospitality. At Maison, we believe in the power of delightful dining experiences. Our chefs, inspired by global flavors and local ingredients, craft dishes that tantalize taste buds and create lasting memories.</p>
                </div>
            </div>
            <div class="tiga"></div>
            <div class="empat">
                <div class="grid-text-container">
                    <h1 class="grid-title">Our Mission</h1>
                    <p class="grid-normaltext">We are dedicated to providing high-quality products and excellent customer service to enhance your experience.</p>
                </div>
            </div>
            <div class="lima"></div>
            <div class="enam"></div>
            <div class="tujuh">
                <div class="grid-text-container">
                    <h1 class="grid-title">Our Values</h1>
                    <p class="grid-normaltext">We uphold integrity, innovation, and customer satisfaction as our core values in every aspect of our business.</p>
                </div>
            </div>
            <div class="delapan parallax-delapan" data-parallax="scroll"></div>
            <div class="sembilan"></div>
            <div class="sepuluh">
                <div class="grid-text-container">
                    <h1 class="grid-title">Community Engagement</h1>
                    <p class="grid-normaltext">We actively participate in community events and support local initiatives to give back to the community that supports us.</p>
                </div>
            </div>
            <div class="sebelas">
                <div class="grid-text-container">
                    <h1 class="grid-title">Visit Us</h1>
                    <p class="grid-normaltext">Come and experience our restaurant located in the heart of the city.</p>
                </div>
            </div>
            <div class="duabelas"></div>
            <div class="tigabelas">
                <div class="grid-text-container">
                    <h1 class="grid-title">Awards</h1>
                    <p class="grid-normaltext">We've been honored with prestigious awards for our culinary excellence and sustainable practices.</p>
                </div>
            </div>
          </div>
    </section>

    {{-- About --}}
    <section>
        {{-- <div class="about-container">
            <h1 style="text-align: center; margin-bottom: 80px">Our Courses</h1>
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
        </div> --}}
        
        <h1 style="text-align: center; margin-bottom: 80px">Our Courses</h1>
        <div id="course-container">
            <div class="slide anim-in">
                <div class="image" style="background-image: url('assets/Diningroom.jpg');"></div>
                <div class="overlay"></div>
                <div class="content">
                    <h1 class="title" data-title="Dining Room">Dining Room</h1>
                    <div class="emblem" style="background-image: url('assets/logo.jpeg');"></div>
                    <button class="city-info"><a href="/dining">MENU</a>
                    </button>
                </div>
                <div class="btn-close"></div>
            </div>
            <div class="slide anim-in">
                <div class="image" style="background-image: url('assets/Grill.jpg');"></div>
                <div class="overlay"></div>
                <div class="content">
                    <h1 class="title" data-title="Grill">Grill</h1>
                    <div class="emblem" style="background-image: url('assets/logo.jpeg');"></div>
                    <button class="city-info"><a href="/grill">MENU</a>
                    </button>
                </div>
                <div class="btn-close"></div>
            </div>
            <div class="slide anim-in">
                <div class="image" style="background-image: url('assets/Afternoontea.jpg');"></div>
                <div class="overlay"></div>
                <div class="content">
                    <h1 class="title" data-title="Afternoon Tea">Afternoon Tea</h1>
                    <div class="emblem" style="background-image: url('assets/logo.jpeg');"></div>
                    <button class="city-info"><a href="/tea">MENU</a>
                    </button>
                </div>
                <div class="btn-close"></div>
            </div>
            <div class="slide anim-in">
                <div class="image" style="background-image: url('assets/Bar.jpg');"></div>
                <div class="overlay"></div>
                <div class="content">
                    <h1 class="title" data-title="Bar">Bar</h1>
                    <div class="emblem" style="background-image: url('assets/logo.jpeg');"></div>
                    <button class="city-info"><a href="/bar">MENU</a>
                    </button>
                </div>
                <div class="btn-close"></div>
            </div>
        </div>
    </section>

    <header class="parallax-outro" data-parallax="scroll">
        <div class="outro-container">
            <div class="outro-text">
                A chef's palate is born out of his childhood, and one thing all chefs have in common is a mother who can cook.
            </div>
            <div class="outro-quote">~ Marco Pierre White</div>
            <div class="outro-button-box">
                <button class="outro-button">Menus</button>
            </div>
        </div>
    </header>

    @include('footer')
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollDuration = 1000; 
        const scrollStep = -30; 

        function smoothScroll(targetPosition) {
            let currentPosition = window.pageYOffset;
            const distance = targetPosition - currentPosition;
            let startTime = null;

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const ease = Math.sqrt(Math.min(1, timeElapsed / scrollDuration));

                window.scrollTo(0, currentPosition + ease * distance);

                if (timeElapsed < scrollDuration) {
                    requestAnimationFrame(animation);
                } else {
                    window.scrollTo(0, targetPosition);
                }
            }
        }
            requestAnimationFrame(animation);
    });

    var scroll = window.requestAnimationFrame || function(callback) { window.setTimeout(callback, 1000/60)};
        var elemetsToShow = document.querySelectorAll('.show-on-scroll');

        function loop() {
            elemetsToShow.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.classList.add('is-visible');
                } else {
                    element.classList.remove('is-visible');
                }
            });
            scroll(loop);
        }
        loop();

        function isElementInViewport(el) {
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            return (
                (rect.top <= 0 && rect.bottom >= 0) ||
                (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight)) ||
                    (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
            );
        }

        //scroll up on logo click
        document.addEventListener("DOMContentLoaded", function() {
            var logoLink = document.getElementById("logo-link");

            logoLink.addEventListener("click", function(event) {
                event.preventDefault();

                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    } else {
                        // If target element is not found, redirect to home page with the target ID as a fragment
                        window.location.href = `/#${about}`;
                    }
                });
            });
        });

        // Our courses
        (function(window, document, $, undefined) {
            var $slides, $btnArr;

            function onClick(e) {
                var $target = $(e.target);
                var $parentSlide = $target.closest('.slide');
                if ($parentSlide.hasClass('active') || $parentSlide.hasClass('last-viewed')) {
                    return;
                }

                $parentSlide.removeClass('anim-in last-viewed').addClass('active');
                $parentSlide.siblings().removeClass('anim-in last-viewed').addClass('anim-out');
                $parentSlide.find('.city-info a').css('pointer-events', 'auto');
            }

            function closeSlide(e) {
                var $slide = $(e.target).parent();
                $slide.removeClass('active anim-in').addClass('last-viewed');
                $slide.siblings().removeClass('anim-out').addClass('anim-in');
                $slide.find('.city-info a').css('pointer-events', 'none');
            }

            $(function() {
                $slides = $('.slide');
                $btnArr = $slides.find('.btn-close');
                $slides.on('click', onClick);
                $btnArr.on('click', closeSlide);
            });
        })(this, document, jQuery);
</script>
</html>

