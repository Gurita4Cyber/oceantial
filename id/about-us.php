<?php
$page = 'about-us-indo';
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
                    <p class="lg:pb-5 text-lg pb-2 lg:text-left">Tentang kami</p>
                    <h2 class="font-semibold lg:text-8xl text-[40px] desktop-only">
                        This is <br> Oceantial
                    </h2>
                    <h2 class="font-semibold lg:text-8xl text-[40px] pb-6 mobile-only">
                        This is Oceantial
                    </h2>
                </div>
                <div class="lg:p-5 w-full p-2 lg:w-1/2 flex flex-col items-center justify-center text-center lg:text-left">
                    <p class="flex text-lg pb-4">
                        Sejak tahun 2019, Oceantial telah hadir sebagai distributor produk premium di Indonesia. Terinspirasi oleh alunan ketenangan laut, kami berkomitmen untuk menghadirkan produk-produk unggulan yang memperkaya kehidupan sehari-hari dan membangkitkan indra.
                    </p>
                    <p class="flex text-lg pb-4">
                        Bertempat di DKI Jakarta, pusat dinamika Indonesia, Oceantial telah membangun kemitraan yang kuat dan jaringan distribusi yang luas, memastikan produk berkualitas kami dapat diakses di seluruh penjuru negeri. Di Oceantial, kami percaya pada kekuatan transformasi dengan menghadirkan kualitas terbaik, membawa sentuhan ketenangan lautan ke setiap rumah.
                    </p>


                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <img class="w-full desktop-only" src="img/about-us.jpg" alt="">
        <img class="w-full mobile-only" src="img/about-us-mobile.jpg" alt="">

        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold  text-white text-center lg:w-full w-96">
            <h3 class="">Tagline Kami</h3>
            <h3 class="lg:text-[80px] text-[40px]">Awaken Your <br>
                Senses </h3>

        </div>
    </section>

    <section class="w-full pb-20 pt-20 lg:px-20 relative">
        <div class="mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 flex flex-col justify-center lg:text-left text-center lg:px-0 px-4">
                <h3 class="font-semibold text-[40px] pb-8">Misi kami</h3>
                <p class="pb-4 text-lg">Seperti angin laut yang bergerak lembut, sentuhan lembut tiap tetes air pada kulit terasa seperti pelukan yang menenangkan. Ocential, terinspirasi oleh sentuhan menenangkan lautan, menciptakan pengalaman serupa yang membawa ketenangan bagi setiap insan yang merasakannya.</p>
                <p class="pb-4 text-lg">Ocential berusaha menyediakan solusi inovatif dengan efektivitas tinggi dan bahan berkualitas terbaik untuk kebutuhan kulit dan tubuh.</p>
                <p class="text-lg lg:pb-0 pb-10">Dengan menggabungkan esensi menenangkan dari lautan dengan inovasi ilmiah, Ocential memberikan pengalaman yang dapat membangkitkan indera.</p>
            </div>
            <img class="lg:w-1/2 w-full lg:h-auto object-cover object-center" src="img/mission.jpg" alt="">
        </div>
    </section>


    <!-- footer -->
    <?php require($_SERVER['PUBLIC'] . 'inc/footer-indo.php') ?>