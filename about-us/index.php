<?php
$page = 'about-us';
require('../inc/base.php')
?>
<?php require($_SERVER['PUBLIC'] . 'inc/meta.php') ?>

<body>

    <!-- header -->
    <?php require($_SERVER['PUBLIC'] . 'inc/header-white.php') ?>
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
    <?php require($_SERVER['PUBLIC'] . 'inc/footer.php') ?>