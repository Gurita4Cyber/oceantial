<?php
$page = 'detail31';
require('inc/base.php')
?>
<?php require($_SERVER['PUBLIC'] . 'inc/meta.php') ?>

<body>

    <!-- header -->
    <?php require($_SERVER['PUBLIC'] . 'inc/header-white.php') ?>
    <!-- headedr end -->



    <section class="w-full pb-20 pt-20 lg:px-20 relative">
        <div class="container px-5 pt-20 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 rounded-lg overflow-hidden flex items-end justify-start relative">
                <div class="relative">
                    <img src="img/Lavender.jpg" alt="Aroma Sense - Vitamin C Cartridges - Lavender">
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full">
                <div class="pb-8">
                    <div class="inline-flex items-center gap-1 pb-4">
                        <h2 class="text-title2 text-lg font-semibold">Aroma
                            Sense
                        </h2>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#004E98"></path>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold pb-4 capitalize">Aroma Sense - Vitamin C Cartridges - Lavender</h1>
                    <div class="flex">
                        <!-- rating -->
                        <?php require($_SERVER['PUBLIC'] . 'inc/rating.php') ?>
                        <!-- rating end -->

                    </div>
                </div>
                <div class="price pb-8">
                    <h2 class="font-semibold text-2xl">IDR 170,000</h2>
                </div>
                <p class="pb-4">Bring home the luxury and enjoyment before only experienced in five-star resorts. The
                    Aroma Sense
                    AS-9000 Vitamin C Showerhead, the first of its kind, emits Vitamin C, aromatherapy, and negative
                    ions during your shower to rejuvenate your mind and body. The secret is the replaceable Vitamin C
                    filter cartridge that promotes healthier skin and hair, and removes chlorine and other contaminants.
                    The cartridge also contains natural aroma oils, which release an aromatherapy effect to relieve
                    stress and relax your mind.

                </p>
                <p class="pb-4">This shower head offers 1.5x the water pressure of ordinary showerheads, while reducing
                    water
                    consumption by 25%. The light and elegant design with a perfect-size grip enables an unbeatable
                    handheld experience. The grip handle can be easily disassembled for cartridge replacement.</p>

                <section class="accordion bg-btnbg text-white my-0 mx-auto inline-flex items-center justify-center w-full">
                    <div class="tab w-full">
                        <input type="checkbox" name="accordion-1" id="cb2">
                        <label for="cb2" class="tab__label">Beli Sekarang</label>
                        <div class="tab__content">
                            <a class="flex p-4" href="http://bit.ly/aromasenseindo
                            ">
                                <div class="iconbuy mr-3"><img src="img/icon/whatsapp.png" alt=""></div>
                                Tersedia di WhatsApp
                            </a>
                            <a class="flex p-4" href="https://s.shopee.co.id/3q3DMDivVt">
                                <div class="iconbuy mr-3"><img src="img/icon/shopee.png" alt=""></div>
                                Tersedia di Shopee
                            </a>
                            <a class="flex p-4" href="https://www.tokopedia.com/oceantial/aromatherapy-vitamin-c-aroma-sense-lavender-1pcs?extParam=src%3Dshop%26whid%3D7243527">
                                <div class="iconbuy mr-3"><img src="img/icon/tokopedia.png" alt=""></div>
                                Tersedia di Tokopedia
                            </a>
                            <a class="flex p-4" href="https://www.tiktok.com/@oceantial">
                                <div class="iconbuy mr-3"><img src="img/icon/tiktok.png" alt=""></div>
                                Tersedia di TikTok Shop
                            </a>
                        </div>
                    </div>
                </section>
            </div>
    </section>


    <section class="w-full lg:pb-40 lg:pt-20 lg:px-20">
        <div class="container mx-auto">
            <!-- Produk Terkait-->
            <div class="product-list">
                <div class="container pl-4 pb-6">
                    <div class="text-left">
                        <h2 class="font-bold text-3xl capitalize">Produk Terkait</h2>
                    </div>
                </div>
                <?php require($_SERVER['PUBLIC'] . 'inc/related-product.php') ?>
            </div>

        </div>
    </section>


    <!-- footer -->
    <?php require($_SERVER['PUBLIC'] . 'inc/footer.php') ?>