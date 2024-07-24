<?php
$page = 'about-us';
require('../base.php')
?>

<body>

    <!-- header -->
    <?php
    require('../inc/header-white.php')
    ?>
    <!-- headedr end -->



    <section class="w-full pb-20 pt-20 lg:px-20 px-4 relative">
        <div class="container mx-auto lg:py-20 pt-10">
            <div class="flex flex-wrap lg:-m-5">
                <div class="lg:p-5 w-full p-2 lg:w-1/2 flex flex-col  justify-center lg:text-left text-center">
                    <p class="lg:pb-5 text-lg pb-2 lg:text-left">About us</p>
                    <h2 class="font-semibold lg:text-8xl text-[40px] desktop-only">
                        This is <br> Oceantial
                    </h2>
                    <h2 class="font-semibold lg:text-8xl text-[40px] pb-6 mobile-only">
                        This is Oceantial
                    </h2>
                </div>
                <div class="lg:p-5 w-full p-2 lg:w-1/2 flex flex-col items-center justify-center text-center lg:text-left">
                    <p class="flex text-lg desktop-only">
                        We recognize the vital role of fostering a profound connection between the products we offer and
                        their impact on overall well-being. Our aim extends beyond protecting the body externally; we
                        strive
                        to provide inner serenity.
                    </p>
                    <p class="flex text-lg mobile-only pb-4">
                        We recognize the vital role of fostering a profound connection between the products we offer and
                        their impact on overall well-being.
                    </p>
                    <p class="flex text-lg mobile-only">
                        Our aim extends beyond protecting the body externally; we
                        strive
                        to provide inner serenity.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <img class="w-full desktop-only" src="img/about-us.jpg" alt="">
        <img class="w-full mobile-only" src="img/about-us-mobile.jpg" alt="">

        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold  text-white text-center lg:w-full w-96">
            <h3 class="">Our Tagline</h3>
            <h3 class="lg:text-[80px] text-[40px]">Awaken Your <br>
                Senses</h3>

        </div>
    </section>

    <section class="w-full pb-20 pt-20 lg:px-20 relative">
        <div class="mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 flex flex-col justify-center lg:text-left text-center lg:px-0 px-4">
                <h3 class="font-semibold text-[40px] pb-8">Our Mission</h3>
                <p class="pb-4 text-lg">Like the gentle sea breeze, the soft touch of each water droplet on the skin
                    feels like
                    a comforting
                    embrace. Ocential, inspired by the soothing touch of the ocean, strives to create a similar
                    experience that brings serenity to every soul that embraces it.</p>
                <p class="pb-4 text-lg">Ocential attempt to provide innovative solutions with high effectiveness and the
                    finest
                    quality
                    ingredients for the needs of the skin and body.</p>
                <p class="text-lg lg:pb-0 pb-10">By blending the calming essence of the sea with scientific
                    innovation,
                    Ocential
                    aims to deliver an
                    experience that awakens the senses.</p>
            </div>
            <img class="lg:w-1/2 w-full lg:h-auto object-cover object-center" src="img/mission.jpg" alt="">
        </div>
    </section>


    <!-- footer -->
    <div w3-include-html="footer.html"></div>


    <button id="btt" class="fixed right-4 bottom-4 z-50 bg-red-800 rounded-full p-5" title="Return To Top">
        <svg class="fill-white" width="18" height="18" viewBox="0 0 320 512">
            <path d="M168.5 84.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 149.3 40.3 267.8c-4.7 4.7-12.3 4.7-17 0L3.5 248c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0zm-17 160L3.5 391c-4.7 4.7-4.7 12.3 0 17l19.8 19.8c4.7 4.7 12.3 4.7 17 0L160 309.3l119.7 118.5c4.7 4.7 12.3 4.7 17 0l19.8-19.8c4.7-4.7 4.7-12.3 0-17l-148-146.8c-4.7-4.7-12.3-4.7-17 0z" />
        </svg>
    </button>


    <!-- pemanggilan html -->
    <script>
        includeHTML();
    </script>


    <!-- jQuery JS -->
    <script src="js/jquery.min.js"></script>
    <!-- Oceantial JS -->
    <script src="js/oceantial.js"></script>
    <script src="js/select-open.js"></script>
    <script src="js/owl.carousel.js"></script>

    <script>
        let tabsContainer2 = document.querySelector("#tabsnav");
        let tabTogglers2 = tabsContainer2.querySelectorAll("#tabsnav a");
        tabTogglers2.forEach(function(toggler2) {
            toggler2.addEventListener("click", function(c) {
                c.preventDefault();
                let tabName2 = this.getAttribute("href");

                let tabContents2 = document.querySelector("#tab-contentsnav");

                for (let b = 0; b < tabContents2.children.length; b++) {

                    tabTogglers2[b].parentElement.classList.remove("bordercustom");
                    tabContents2.children[b].classList.remove("hidden");
                    if ("#" + tabContents2.children[b].id === tabName2) {
                        continue;
                    }
                    tabContents2.children[b].classList.add("hidden");

                }
                c.target.parentElement.classList.add("bordercustom");
            });
        });




        // Get the button
        const menuHead = document.getElementById("menuHead");

        // When the user scrolls down 20px from the top of the document, show the button

        const scrollFunction = () => {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.classList.remove("hidden");
                menuHead.classList.add("bg-default");
                menuHead.classList.add("drop-shadow-lg");

            } else {
                mybutton.classList.add("hidden");
                menuHead.classList.remove("bg-default");
                menuHead.classList.remove("drop-shadow-lg");

            }
        };
    </script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                dots: false,
                loop: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })
    </script>

</body>

</html>