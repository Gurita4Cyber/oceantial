<?php
$page = 'faqs';
require('base.php')
?>


<body>

    <!-- header -->
    <?php

    require('inc/header-white.php')
    ?>
    <!-- headedr end -->




    <section class="w-full lg:pb-20 pt-20 lg:px-20 relative">

        <div class="container">
            <div class="text-center">
                <h2 class="font-bold text-3xl capitalize py-20">Frequently Asked Questions </h2>
            </div>
        </div>
        <div>
            <div class="relative lg:w-[621px] flex justify-center items-center mx-auto rounded-3xl">
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
                    <h2 class="lg:text-3xl text-2xl font-semibold">Showehead</h2>
                </div>
                <div class="lg:p-5 p-2 lg:w-2/3 flex flex-col items-start">

                    <div class="accordion2">
                        <!-- inputan -->
                        <input type="checkbox" id="item1" name="accordion1">

                        <label for="item1" class="font-medium lg:text-2xl text-sm">What are the differences between the
                            AS 9000 and
                            AS 701?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content1" class="item">

                            <div class="lg:text-lg text-sm">The difference lies in the diameter of the showerhead. AS
                                9000 Showerhead
                                has a diameter
                                of 8cm, while AS 701 has a diameter of 11.5cm. Therefore, the AS 701 model is more
                                suitable for use with strong water pressure.

                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item2" name="accordion1">

                        <label for="item2" class="font-medium lg:text-2xl text-sm">What are the diameter sizes of each
                            Oceantial
                            showerhead?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>


                        </label>

                        <div id="content2" class="item">

                            <div class="lg:text-lg text-sm">Aroma Sense - Showerhead Handheld Kids Series diameter size
                                is 4,6cm,
                                Aroma Sense - Showerhead Handheld - Medium AS9000 diameter size is 8Cm, Aroma Sense -
                                Showerhead Handheld - Showerhead 701 diameter size is 11,5Cm, Aroma Sense - Showerhead
                                Handheld - Showerhead 801 diameter size is 8,6Cm, Aroma Sense - Arofix Grand diameter
                                size is 11,5cm, and Aroma Sense - Showerhead Handheld - Showerhead Mist diameter size is
                                8Cm.

                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item3" name="accordion1">

                        <label for="item3" class="font-medium lg:text-2xl text-sm">Is the Ocential showerhead size
                            compatible with
                            all brands of hoses?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>


                        </label>

                        <div id="content3" class="item">

                            <div class="lg:text-lg text-sm">You can easily replace your old shower with our product
                                because it is
                                simple to remove and attach. We provide a diameter size guide for each showerhead to
                                ensure a perfect fit.

                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item4" name="accordion1">

                        <label for="item4" class="font-medium lg:text-2xl text-sm">What are the differences between the
                            showerheads
                            from the brands available in Oceantial and other showers?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>


                        </label>

                        <div id="content4" class="item">

                            <div class="lg:text-lg text-sm">The Oceantial showerhead is crafted from high-quality
                                stainless steel.
                                Its built-in water filter effectively removes rust and possesses antibacterial
                                properties. The optimal water pressure ensures a strong yet gentle flow. Showers from
                                the brands available at Oceantial are designed not only for bathing but also to ensure
                                the water quality is excellent for skin and hair care, as well as providing a relaxing
                                experience. This is made possible by adding microfiber filters, antibacterial features,
                                and aromatherapy in the showers from the brands offered at Oceantial.

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

                        <label for="item5" class="font-medium lg:text-2xl text-sm">What are the appropriate faucet sizes
                            for
                            Oceantial products?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content5" class="item">

                            <div class="lg:text-lg text-sm">
                                For PR 303, the compatible faucet should have an external thread diameter of 2.2 cm. As
                                for PR 100, the compatible faucet should have an external thread diameter of 2.2 cm and
                                an internal thread diameter ranging from 2.0 cm to 2.4 cm.

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

                        <label for="item6" class="font-medium lg:text-2xl text-sm">What are the different variants of
                            aroma tube
                            available?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content6" class="item">

                            <div class="lg:text-lg text-sm">
                                Lemon, Lemon Mango, Vanilla Coconut, Jasmine, Rose, Pine, Phytoncide, Neutral,
                                Eucalyptus, Lavender

                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item7" name="accordion2">

                        <label for="item7" class="font-medium lg:text-2xl text-sm">How long can the antibacterial be
                            used before it
                            needs to be replaced or renewed?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content7" class="item">

                            <div class="lg:text-lg text-sm">
                                The antibacterial can be used for a duration of 1-2 years.

                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item8" name="accordion2">

                        <label for="item8" class="font-medium lg:text-2xl text-sm">How do you clean the antibacterial?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content8" class="item">

                            <div class="lg:text-lg text-sm">
                                <p class="pb-4">
                                    If the showerhead is not too dirty, you can clean it by simply letting water flow
                                    over
                                    it while rotating it. This will help remove any light dirt or residue from the
                                    surface
                                    of the showerhead.
                                </p>
                                <p class="pb-4">
                                    The second method is to soak the showerhead in water for at least 5 minutes. After
                                    soaking, rinse the showerhead with hot or warm water to further clean it.
                                </p>
                                <p class="pb-4">
                                    If the showerhead is heavily soiled, you can use a specialized cleaning solution
                                    (such as a non-scrub or liquid-based cleanser). Follow the instructions provided on
                                    the cleaning product packaging. After using the cleaning solution, be sure to rinse
                                    the showerhead thoroughly with clean water to remove any residue from the cleanser.
                                </p>


                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item9" name="accordion2">

                        <label for="item9" class="font-medium lg:text-2xl text-sm">What are the differences between the
                            PRM filter
                            and the PRC filter?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content9" class="item">

                            <div class="lg:text-lg text-sm">
                                <p class="pb-4">
                                    The PRM filter is designed to filter out impurities in the water. The frequency of
                                    replacing the filter depends on the water quality in each area. If the water quality
                                    is very poor, the filter may need to be replaced more frequently.
                                </p>
                                <p class="pb-4">
                                    On the other hand, the PRC filter is designed to filter out impurities, turbid
                                    water, odor, and metals in the water. This filter can last up to 12,000 liters of
                                    water, or approximately 4 months, when used for showering with an average
                                    consumption of around 100 liters of water per day.
                                </p>


                            </div>

                        </div>
                        <!-- inputan -->
                        <!-- inputan -->
                        <input type="checkbox" id="item10" name="accordion2">

                        <label for="item10" class="font-medium lg:text-2xl text-sm">When is the right time to replace
                            the
                            microfiber filter?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>

                        <div id="content10" class="item">

                            <div class="lg:text-lg text-sm">
                                <p class="pb-4">
                                    The microfiber filter should be replaced when its color has turned black or brown,
                                    and when the water spray from the shower becomes weaker.
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
                            How to install showerhead handheld?

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
                            How to install a microfiber filter?

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
                            How to install filter prm & prc?

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
                            How to install Aroma Tube?

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
                            How to install tap water filter PR100

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
                            How to install filter PR303?

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
                            Is there a warranty for this product?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content17" class="item">
                            <div class="lg:text-lg text-sm">
                                <p>
                                    Currently, we do not provide an official guarantee for this product. However, we
                                    provide an unboxing video as a usage guide. If there is damage to the product, you
                                    can contact our admin for further assistance.
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
                            Where can I order Oceantial?

                            <svg class="fa-chevron-down" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0578 20.9425C15.5785 21.4632 16.4228 21.4632 16.9435 20.9425L24.9435 12.9425C25.4642 12.4218 25.4642 11.5776 24.9435 11.0569C24.4228 10.5362 23.5785 10.5362 23.0578 11.0569L16.0007 18.1141L8.94346 11.0569C8.42276 10.5362 7.57854 10.5362 7.05784 11.0569C6.53714 11.5776 6.53714 12.4218 7.05784 12.9425L15.0578 20.9425Z" fill="#232020" />
                            </svg>
                        </label>
                        <div id="content18" class="item">
                            <div class="lg:text-lg text-sm">
                                Oceantial products can be ordered via our official e-commerce at Shopee, Tokopedia,
                                TikTok Shop, or through our official WhatsApp contact listed below.
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


            $(function() {
                $("#filterList").keyup(function() {
                    var valThis = $(this).val().toLowerCase();
                    if (valThis == "") {
                        $("#testList > div").show();
                    } else {
                        $("#testList > div").each(function() {
                            var text = $(this).text().toLowerCase();
                            text.indexOf(valThis) >= 0 ? $(this).show() : $(this).hide();
                        });
                    }

                    // Start - Unnecessary "matching results" code
                    var remainingResults = $('#testList > div[style!="display: none;"]').length;
                    if (valThis != '') {
                        $('small.form-text.text-muted').html('<strong>' + remainingResults + '</strong> matching results');
                    } else {
                        $('small.form-text.text-muted').html('');
                    }
                    // End - Unnecessary "matching results" code

                });
            });

        })
    </script>

</body>

</html>