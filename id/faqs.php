<?php
$page = 'faqs-indo';
require('../inc/base.php')
?>
<?php require($_SERVER['PUBLIC'] . 'inc/meta.php') ?>

<body>

    <!-- header -->
    <?php require($_SERVER['PUBLIC'] . 'inc/header-white.php') ?>
    <!-- headedr end -->



    <section class="w-full pt-20 lg:px-20 relative">

        <div class="container">
            <div class="text-center">
                <h2 class="font-bold text-3xl capitalize py-20">Frequently Asked Questions </h2>
            </div>
        </div>
        <div>
            <div class="relative lg:w-[620px] flex justify-center items-center mx-auto rounded-3xl">
                <label for="filterList" class="sr-only">Filter</label>
                <input type="text" id="filterList" value="" name="footer-field" placeholder="Search questions" class="lg:w-full bg-gray-100 bg-opacity-50 rounded-3xl border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-16 leading-8 transition-colors duration-200 ease-in-out">

                <div class="absolute lg:left-6 left-20">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 9.16667C4 6.03705 6.53705 3.5 9.66667 3.5C12.7963 3.5 15.3333 6.03705 15.3333 9.16667C15.3333 10.689 14.7331 12.0711 13.7563 13.0892C13.7256 13.1134 13.6961 13.1396 13.6678 13.1679C13.6395 13.1962 13.6133 13.2257 13.5891 13.2564C12.571 14.2331 11.1889 14.8333 9.66667 14.8333C6.53705 14.8333 4 12.2963 4 9.16667ZM14.3346 15.2489C13.0418 16.2426 11.4232 16.8333 9.66667 16.8333C5.43248 16.8333 2 13.4008 2 9.16667C2 4.93248 5.43248 1.5 9.66667 1.5C13.9008 1.5 17.3333 4.93248 17.3333 9.16667C17.3333 10.9233 16.7426 12.5419 15.7489 13.8347L18.707 16.7929C19.0976 17.1834 19.0976 17.8166 18.707 18.2071C18.3165 18.5976 17.6833 18.5976 17.2928 18.2071L14.3346 15.2489Z" fill="#797A7B" />
                    </svg>
                </div>
                <small class="form-text text-muted"></small>
            </div>
        </div>
    </section>
    <section id="testList" class="w-full pb-20  lg:px-20 relative">
        <!-- section acordion -->
        <div class="container mx-auto lg:border-b-2 lg:border-gray-100 lg:py-20 py-16">
            <div class="flex flex-wrap lg:-m-5">
                <div class="lg:p-5 p-2 lg:w-1/3 flex flex-col items-start">
                    <h2 class="lg:text-3xl text-2xl font-semibold">Showerhead</h2>
                </div>
                <div class="lg:p-5 p-2 lg:w-2/3 flex flex-col items-start">

                    <div class="accordion2">
                        <!-- inputan -->
                        <input type="checkbox" id="item1" name="accordion1">

                        <label for="item1" class="font-medium lg:text-2xl text-sm">Apa perbedaan Showerhead AS 9000 dan AS 701?
                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content1" class="item">

                            <div class="lg:text-lg text-sm">Perbedaan terletak pada ukuran diameter showerhead. Showerhead AS 9000 memiliki diameter 8cm, sedangkan AS 701 memiliki diameter 11,5cm. Oleh karena itu, tipe AS 701 lebih cocok digunakan pada tekanan air yang kuat.
                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item2" name="accordion1">

                        <label for="item2" class="font-medium lg:text-2xl text-sm">Berapa ukuran diameter masing-masing shower Oceantial?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>


                        </label>

                        <div id="content2" class="item">

                            <div class="lg:text-lg text-sm">Aroma Sense - Showerhead Handheld Kids Series memiliki diameter 4,6 cm,
Aroma Sense - Showerhead Handheld - Medium AS9000 memiliki diameter 8 cm,
Aroma Sense - Showerhead Handheld - Showerhead 701 memiliki diameter 11,5 cm,
Aroma Sense - Showerhead Handheld - Showerhead 801 memiliki diameter 8,6 cm,
Aroma Sense - Arofix Grand memiliki diameter 11,5 cm, dan
Aroma Sense - Showerhead Handheld - Showerhead Mist memiliki diameter 8 cm.
                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item3" name="accordion1">

                        <label for="item3" class="font-medium lg:text-2xl text-sm">Apakah showerhead Ocential ukurannya cocok dengan semua merk selang?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>


                        </label>

                        <div id="content3" class="item">

                            <div class="lg:text-lg text-sm">Anda dapat dengan mudah mengganti shower lama Anda dengan produk kami karena proses pemasangannya yang sederhana. Kami menyediakan panduan ukuran diameter untuk setiap showerhead guna memastikan kesesuaian.
                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item4" name="accordion1">

                        <label for="item4" class="font-medium lg:text-2xl text-sm">Apa perbedaan showerhead dari brand-brand yang ada di Oceantial dan shower lainnya?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>


                        </label>

                        <div id="content4" class="item">

                            <div class="lg:text-lg text-sm">Showerhead Oceantial terbuat dari stainless steel berkualitas tinggi. Filter air di dalam shower ini mampu menghilangkan karat dan memiliki sifat antibakteri. Tekanan air maksimal membuat aliran air kuat namun tetap lembut. Shower dari berbagai merek di Oceantial tidak hanya berfungsi untuk mandi, tetapi juga memastikan kualitas air terbaik untuk menjaga kesehatan kulit dan rambut serta memberikan efek relaksasi. Hal ini didukung oleh kehadiran filter mikrofiber, antibakteri, dan aromaterapi di dalam shower dari brand-brand yang ada di Oceantial.

                            </div>

                        </div>
                        <!-- inputan -->

                    </div>
                </div>

            </div>

        </div>
        <!-- section acordion -->

        <!-- section acordion -->
        <div class="container mx-auto lg:border-b-2 lg:border-gray-100 lg:py-20 py-16">
            <div class="flex flex-wrap lg:-m-5">
                <div class="lg:p-5 p-2 lg:w-1/3 flex flex-col items-start">
                    <h2 class="lg:text-3xl text-2xl font-semibold">Home appliance</h2>
                </div>
                <div class="lg:p-5 p-2 lg:w-2/3 flex flex-col items-start">

                    <div class="accordion2">
                        <!-- inputan -->
                        <input type="checkbox" id="item5" name="accordion2">

                        <label for="item5" class="font-medium lg:text-2xl text-sm">Berapa ukuran keran yang sesuai untuk produk Oceantial?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content5" class="item">

                            <div class="lg:text-lg text-sm">
                            Untuk shower PR 303, keran yang kompatibel memiliki drat luar dengan diameter 2,2 cm. Sedangkan untuk shower PR 100, keran yang kompatibel memiliki diameter drat luar 2,2 cm dan diameter drat dalam antara 2,0 cm hingga 2,4 cm.

                            </div>

                        </div>
                        <!-- inputan -->


                    </div>
                </div>

            </div>

        </div>
        <!-- section acordion -->

        <!-- section acordion -->
        <div class="container mx-auto lg:border-b-2 lg:border-gray-100 lg:py-20 py-16">
            <div class="flex flex-wrap lg:-m-5">
                <div class="lg:p-5 p-2 lg:w-1/3 flex flex-col items-start">
                    <h2 class="lg:text-3xl text-2xl font-semibold">Filter & Aroma Tube</h2>
                </div>
                <div class="lg:p-5 p-2 lg:w-2/3 flex flex-col items-start">

                    <div class="accordion2">
                        <!-- inputan -->
                        <input type="checkbox" id="item6" name="accordion2">

                        <label for="item6" class="font-medium lg:text-2xl text-sm">Apa saja varian aroma tube?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content6" class="item">

                            <div class="lg:text-lg text-sm">
                            Lemon, Lemon Mango, Vanilla Coconut, Jasmine, Rose, Pine, Phytoncide, Neutral, Eucalyptus, Lavender

                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item7" name="accordion2">

                        <label for="item7" class="font-medium lg:text-2xl text-sm">Berapa lama antibakteri dapat digunakan sebelum perlu diganti atau diperbarui?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content7" class="item">

                            <div class="lg:text-lg text-sm">
                            Antibakteri bisa digunakan dalam rentang waktu 1-2 tahun

                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item8" name="accordion2">

                        <label for="item8" class="font-medium lg:text-2xl text-sm">Bagaimana cara membersihkan antibakteri?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content8" class="item">

                            <div class="lg:text-lg text-sm">
                                <p class="pb-4">
                                Jika showerhead tidak terlalu kotor, Anda dapat membersihkannya dengan membiarkannya terkena aliran air sambil diputar-putar. Hal ini dapat membantu menghilangkan kotoran ringan pada showerhead.
                                </p>
                                <p class="pb-4">
                                Metode kedua adalah merendam showerhead di dalam air selama minimal 5 menit. Setelah direndam, bilas showerhead dengan air panas atau air hangat untuk membersihkannya lebih lanjut.
                                </p>
                                <p class="pb-4">
                                Jika showerhead sangat kotor, Anda dapat menggunakan cairan pembersih khusus (seperti cairan pembersih non-scrub/berbahan dasar cairan cns). Ikuti petunjuk penggunaan pada kemasan produk pembersih tersebut. Setelah menggunakan cairan pembersih, pastikan untuk membilas showerhead dengan air bersih untuk menghilangkan residu cairan pembersih.
                                </p>


                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item9" name="accordion2">

                        <label for="item9" class="font-medium lg:text-2xl text-sm">Apa perbedaan antara PRM filter dan PRC filter?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content9" class="item">

                            <div class="lg:text-lg text-sm">
                                <p class="pb-4">
                                Filter PRM berfungsi untuk menyaring kotoran dalam air. Penggantian filter ini tergantung pada kualitas air di masing-masing daerah. Jika kualitas air sangat buruk, maka filter perlu diganti lebih sering.
                                </p>
                                <p class="pb-4">
                                Sementara itu, Filter PRC berfungsi untuk menyaring kotoran, air yang keruh, bau, dan berlogam dalam air. Filter ini dapat bertahan hingga 12.000 liter air, atau sekitar 4 bulan, jika digunakan untuk mandi dengan konsumsi sekitar 100 liter air per hari.
                                </p>


                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item10" name="accordion2">

                        <label for="item10" class="font-medium lg:text-2xl text-sm">Kapan waktu yang tepat untuk mengganti microfiber filter?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content10" class="item">

                            <div class="lg:text-lg text-sm">
                                <p class="pb-4">
                                Microfiber filter perlu diganti ketika warnanya sudah berubah menjadi hitam atau coklat, dan ketika semprotan air dari shower menjadi lebih kecil.
                                </p>



                            </div>

                        </div>
                        <!-- inputan -->


                    </div>
                </div>

            </div>

        </div>
        <!-- section acordion -->

        <!-- section acordion -->
        <div class="container mx-auto lg:border-b-2 lg:border-gray-100 lg:py-20 py-16">
            <div class="flex flex-wrap lg:-m-5">
                <div class="lg:p-5 p-2 lg:w-1/3 flex flex-col items-start">
                    <h2 class="lg:text-3xl text-2xl font-semibold">Filter & Aroma Tube</h2>
                </div>
                <div class="lg:p-5 p-2 lg:w-2/3 flex flex-col items-start">

                    <div class="accordion2">
                        <!-- inputan -->
                        <input type="checkbox" id="item11" name="accordion2">
                        <label for="item11" class="font-medium lg:text-2xl text-sm">
                        Bagaimana cara memasang shower handheld?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content11" class="item">
                            <div class="lg:text-lg text-sm">
                                <div class="videowrapper">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/-IKC5Ia2xio?si=_dTYXWiQZ-JafJTH" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item12" name="accordion2">
                        <label for="item12" class="font-medium lg:text-2xl text-sm">
                        Bagaimana cara memasang microfiber?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content12" class="item">
                            <div class="lg:text-lg text-sm">
                                <div class="videowrapper">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YPU1awXyOts?si=rTOyaT80Wzxcsusz" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item13" name="accordion2">
                        <label for="item13" class="font-medium lg:text-2xl text-sm">
                        Bagaimana cara memasang filter prm & prc?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content13" class="item">
                            <div class="lg:text-lg text-sm">
                                <div class="videowrapper">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/c1yLrdMjuVg?si=TYwMQNV81gVCZwVR" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                                <div class="videowrapper">
                                    <iframe width="560" height="315" src="https://youtube.com/embed/r0jOlfkoatA?si=kDnhPR8RWbKlHn__" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>



                            </div>
                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item14" name="accordion2">
                        <label for="item14" class="font-medium lg:text-2xl text-sm">
                        Bagaimana cara memasang aroma tube?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content14" class="item">
                            <div class="lg:text-lg text-sm">
                                <div class="videowrapper">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/y519mMfXxQM?si=EobVCOuxSS5n8TQl" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>

                            </div>
                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item15" name="accordion2">
                        <label for="item15" class="font-medium lg:text-2xl text-sm">
                        Bagaimana cara memasang filter keran PR100

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content15" class="item">
                            <div class="lg:text-lg text-sm">
                                <div class="videowrapper">
                                    <iframe width="560" height="315" src="https://youtube.com/embed/LlJr6yo-EFs?si=vmVKRl3A0sQGABs5" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>


                            </div>
                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item16" name="accordion2">
                        <label for="item16" class="font-medium lg:text-2xl text-sm">
                        Bagaimana cara memasang filter PR303?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content16" class="item">
                            <div class="lg:text-lg text-sm">
                                <div class="videowrapper">
                                    <iframe width="560" height="315" src="https://youtube.com/embed/W7UW6FuPuvg?si=weOBLWqw7rLU_mCc" title="YouTube video player" frameborder="0" allow="accelerometer;  clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>

                            </div>
                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item17" name="accordion2">
                        <label for="item17" class="font-medium lg:text-2xl text-sm">
                        Apakah ada jaminan garansi untuk produk ini?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content17" class="item">
                            <div class="lg:text-lg text-sm">
                                <p>
                                Saat ini, kami belum menyediakan garansi resmi untuk produk ini. Namun, kami menyediakan video unboxing sebagai panduan penggunaan. Jika terjadi kerusakan pada produk, Anda dapat menghubungi admin kami untuk mendapatkan bantuan lebih lanjut.
                                </p>
                            </div>
                        </div>
                        <!-- inputan -->

                    </div>
                </div>

            </div>

        </div>
        <!-- section acordion -->

        <!-- section acordion -->
        <div class="container mx-auto lg:border-b-2 lg:border-gray-100 lg:py-20 py-16">
            <div class="flex flex-wrap lg:-m-5">
                <div class="lg:p-5 p-2 lg:w-1/3 flex flex-col items-start">
                    <h2 class="lg:text-3xl text-2xl font-semibold">Shipping</h2>
                </div>
                <div class="lg:p-5 p-2 lg:w-2/3 flex flex-col items-start">

                    <div class="accordion2">
                        <!-- inputan -->
                        <input type="checkbox" id="item18" name="accordion2">
                        <label for="item18" class="font-medium lg:text-2xl text-sm">
                        Dimana saya bisa memesan produk-produk Oceantial?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content18" class="item">
                            <div class="lg:text-lg text-sm">
                            Produk Oceantial dapat dipesan melalui official e-commerce kami di Shopee, Tokopedia, TikTok Shop, maupun WhatsApp di official WhatsApp kami yang tertera di bawah.
                            </div>
                        </div>
                        <!-- inputan -->

                    </div>
                </div>

            </div>

        </div>
        <!-- section acordion -->



    </section>



    <!-- footer -->
    <?php require($_SERVER['PUBLIC'] . 'inc/footer-indo.php') ?>