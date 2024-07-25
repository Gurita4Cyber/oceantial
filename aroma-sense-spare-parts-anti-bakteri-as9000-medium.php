<!doctype html>
<html>

<head>
    <!-- meta -->
    <div w3-include-html="meta.html"></div>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico?" type="image/x-icon" />

    <!-- cdn font -->
    <link href="https://fonts.cdnfonts.com/css/aileron" rel="stylesheet">


    <link href="css/oceantial.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

    <script>
        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /*loop through a collection of all HTML elements:*/
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i];
                /*search for elements with a certain atrribute:*/
                file = elmnt.getAttribute("w3-include-html");
                if (file) {
                    /*make an HTTP request using the attribute value as the file name:*/
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4) {
                            if (this.status == 200) { elmnt.innerHTML = this.responseText; }
                            if (this.status == 404) { elmnt.innerHTML = "Page not found."; }
                            /*remove the attribute, and call this function once more:*/
                            elmnt.removeAttribute("w3-include-html");
                            includeHTML();
                        }
                    }
                    xhttp.open("GET", file, true);
                    xhttp.send();
                    /*exit the function:*/
                    return;
                }
            }
        };
    </script>

</head>

<body>

    <!-- header -->
    <header class="text-white fixed z-[90] lg:bg-menu-bg w-full lg:px-20 lg:h-[88px]" id="menuHead">
        <div class="lg:container lg:mx-auto">
            <div class="hidden lg:flex justify-between items-center">
                <div class="order-1 justify-between flex gap-16 items-center">
                    <a class="block" href="index.html">
                        <img class="logodefault" src="img/logo2.png" alt="">
                        <img class="hidden logodefault" src="img/logo.png" alt="">
                        <img class="hidden logodark" src="img/logo2.png" alt="">
                    </a>
                    <!-- navigation desktop -->
                    <div class="flex items-center nav-header black">
                        <div class="nav-a">
                            <a href="index.html" class="p-5 text-base inline-flex items-center">
                                Home
                            </a>
                        </div>
                        <div class="nav-a toggleable blacktogle vfb-checkbox active">
                            <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
                            <label for="toggle-one" class="block cursor-pointer p-5 text-sm lg:text-base">Shop</label>
                            <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                                <div class="mx-auto w-full flex space-x-4">
                                    <div class="px-4 w-2/5 pb-6 pt-6 lg:pt-3">
                                        <!-- Tabs caraousel -->
                                        <div class="desktop-only simplecarousel-list lg:hidden block ml-6">
                                            <div class="crousel-desktop">
                                                <ul id="tabsnav" class=" text-base font-medium uppercase">
                                                    <li class="bordercustom"><a id="default-tab" href="#first">
                                                            Showerhead
                                                        </a></li>
                                                    <li><a href="#second"> Showerhead Kids Series </a></li>
                                                    <li><a href="#tree"> Aroma Tube </a></li>
                                                    <li><a href="#four"> Filter </a></li>
                                                    <li><a href="#five"> Home </a></li>
                                                    <li><a href="#six"> orther </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 w-[858px] pb-6 pt-6 lg:pt-3">
                                        <!-- Tab Contents -->
                                        <div id="tab-contentsnav" class="mb-10 desktop-only text-black">
                                            <!-- Showerhead -->
                                            <div id="first" class="p-4">
                                                <h2 class="text-2xl text-font-nav pb-6">Showerhead</h2>
                                                <div class="flex justify-between">
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma
                                                                Sense
                                                            </h2>
                                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                                    fill="#004E98"></path>
                                                            </svg>
                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Showerhead Handheld - Medium AS9000 Vitamin C
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead Mist
                                                                    Vitamin C</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Shower Head Wall -
                                                                    Arofix</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead
                                                                    701</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead
                                                                    801</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -Super
                                                                    Jet
                                                                    Wide
                                                                    PR-SJW</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica
                                                            </h2>
                                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                                    fill="#66102D"></path>
                                                            </svg>

                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Showerhead Handheld - Medium AS9000 Vitamin C
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead Mist
                                                                    Vitamin C</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Shower Head Wall -
                                                                    Arofix</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead
                                                                    701</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead
                                                                    801</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -Super
                                                                    Jet
                                                                    Wide
                                                                    PR-SJW</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                            <!-- showerhead kids series -->
                                            <div id="second" class="hidden p-4">
                                                <h2 class="text-2xl text-font-nav pb-6">Showerhead</h2>
                                                <div class="flex justify-between">
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma
                                                                Sense
                                                            </h2>
                                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                                    fill="#004E98"></path>
                                                            </svg>
                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Showerhead Handheld - Showerhead Kids Shark Pink
                                                                    Vitamin
                                                                    C
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead Kids Shark Blue Vitamin C</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Showerhead Kids Turtle Vitamin C</a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Aroma tube -->
                                            <div id="tree" class="hidden p-4">
                                                <h2 class="text-2xl text-font-nav pb-6">Aroma Sense</h2>
                                                <div class="flex justify-between">
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma
                                                                Sense
                                                            </h2>
                                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                                    fill="#004E98"></path>
                                                            </svg>
                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Vitamin C Cartidges isi 1 - Lemon
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Showerhead Handheld -
                                                                    Vitamin C Cartidges isi 1 - Lemon Manggo
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Vanilla Coconut
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Neutral
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Lavender
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Phytoncide
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Jasmine
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Pine
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Rose
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                                    - Eucalyptus
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                                    Therapy for Shower Arofix - Isi 1 pcs - Lavender
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                                    Therapy for Shower Arofix - Isi 1 pcs - Lemon
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                                    Therapy for Shower Arofix - Isi 1 pcs - Neutral
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                                    Therapy for Shower Arofix - Isi 1 pcs - Eucalyptus
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure
                                                                Rain
                                                            </h2>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36849 19.25L5.78516 16.5833L2.78516 15.9167L3.07682 12.8333L1.03516 10.5L3.07682 8.16667L2.78516 5.08333L5.78516 4.41667L7.36849 1.75L10.2018 2.95833L13.0352 1.75L14.6185 4.41667L17.6185 5.08333L17.3268 8.16667L19.3685 10.5L17.3268 12.8333L17.6185 15.9167L14.6185 16.5833L13.0352 19.25L10.2018 18.0417L7.36849 19.25ZM9.32682 13.4583L14.0352 8.75L12.8685 7.54167L9.32682 11.0833L7.53516 9.33333L6.36849 10.5L9.32682 13.4583Z"
                                                                    fill="#F4CF7A" />
                                                            </svg>

                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Microfiber PRM (Isi 3)
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Carbon PRC
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- filter -->
                                            <div id="four" class="hidden p-4">
                                                <h2 class="text-2xl text-font-nav pb-6">Filter</h2>
                                                <div class="flex justify-between">
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma
                                                                Sense
                                                            </h2>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z"
                                                                    fill="#004E98" />
                                                            </svg>

                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Microfiber Filter Prestiges (isi 5)
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Filter Medium
                                                                    (isi 5)</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Mist (isi
                                                                    5)</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Filter Arofix
                                                                    (isi 5)</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Filter 801 (isi
                                                                    5)</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Filter 701 (isi
                                                                    5)</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Filter
                                                                    GrandShower (isi 5)</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Super Jet</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Super Jet
                                                                    Wide</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica
                                                            </h2>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36458 19.25L5.78125 16.5833L2.78125 15.9167L3.07292 12.8333L1.03125 10.5L3.07292 8.16667L2.78125 5.08333L5.78125 4.41667L7.36458 1.75L10.1979 2.95833L13.0312 1.75L14.6146 4.41667L17.6146 5.08333L17.3229 8.16667L19.3646 10.5L17.3229 12.8333L17.6146 15.9167L14.6146 16.5833L13.0312 19.25L10.1979 18.0417L7.36458 19.25ZM9.32292 13.4583L14.0313 8.75L12.8646 7.54167L9.32292 11.0833L7.53125 9.33333L6.36458 10.5L9.32292 13.4583Z"
                                                                    fill="#66102D" />
                                                            </svg>


                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Microfiber Filter Luxe (isi 5)
                                                                </a>
                                                            </li>


                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- home sense -->
                                            <div id="five" class="hidden p-4">
                                                <h2 class="text-2xl text-font-nav pb-6">Home</h2>
                                                <div class="flex justify-between">
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                                                Pure Rain
                                                            </h2>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z"
                                                                    fill="#F4CF7A" />
                                                            </svg>

                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Alat Tap Water Filter PR100 (Bathroom)
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Alat Tap Water Filter
                                                                    PR303 (Kitchen) </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Tap Water
                                                                    Filter (Bathroom) PR100</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Microfiber Tap Water
                                                                    Filter PR300 (Kitchen)</a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- orther -->
                                            <div id="six" class="hidden p-4">
                                                <h2 class="text-2xl text-font-nav pb-6">Orther</h2>
                                                <div class="flex justify-between">
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                                                Aroma Sense
                                                            </h2>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z"
                                                                    fill="#004E98" />
                                                            </svg>


                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    Spare parts - White Handle
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Chrome
                                                                    Handle </a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Anti bakteri
                                                                    Tulip</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Anti bakteri
                                                                    AS9000 Medium</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Anti bakteri
                                                                    AS 701</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Anti bakteri
                                                                    AS9000 Medium</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Anti bakteri
                                                                    Prestiges</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Anti bakteri
                                                                    Kids</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Spare parts - Anti bakteri
                                                                    Arofix 01</a>
                                                            </li>
                                                            <li>
                                                                <a class="block py-4" href="">Vita</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="p-6">
                                                        <div class="inline-flex items-center pb-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                                                Pure Rain
                                                            </h2>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_1957_2179)">
                                                                    <path
                                                                        d="M8.09896 19.25L6.51562 16.5833L3.51562 15.9167L3.80729 12.8333L1.76562 10.5L3.80729 8.16667L3.51562 5.08333L6.51562 4.41667L8.09896 1.75L10.9323 2.95833L13.7656 1.75L15.349 4.41667L18.349 5.08333L18.0573 8.16667L20.099 10.5L18.0573 12.8333L18.349 15.9167L15.349 16.5833L13.7656 19.25L10.9323 18.0417L8.09896 19.25ZM10.0573 13.4583L14.7656 8.75L13.599 7.54167L10.0573 11.0833L8.26563 9.33333L7.09896 10.5L10.0573 13.4583Z"
                                                                        fill="#F4CF7A" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_1957_2179">
                                                                        <rect width="20" height="20" fill="white"
                                                                            transform="translate(0.933594 0.5)" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    ACF Filter Carbon
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="inline-flex items-center pb-6 pt-6">
                                                            <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                                                Water Lab
                                                            </h2>
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.63021 19.25L6.04688 16.5833L3.04688 15.9167L3.33854 12.8333L1.29688 10.5L3.33854 8.16667L3.04688 5.08333L6.04688 4.41667L7.63021 1.75L10.4635 2.95833L13.2969 1.75L14.8802 4.41667L17.8802 5.08333L17.5885 8.16667L19.6302 10.5L17.5885 12.8333L17.8802 15.9167L14.8802 16.5833L13.2969 19.25L10.4635 18.0417L7.63021 19.25ZM9.58854 13.4583L14.2969 8.75L13.1302 7.54167L9.58854 11.0833L7.79688 9.33333L6.63021 10.5L9.58854 13.4583Z"
                                                                    fill="#50808E" />
                                                            </svg>

                                                        </div>
                                                        <ul class="navmenubig">
                                                            <li>
                                                                <a class="block py-4" href="">
                                                                    ACF Filter
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="px-4 w-40 border-gray-600 pb-6 pt-6 lg:pt-3">
                                        <li class="pt-3">
                                            <img src="img/placeholder.png">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nav-a">
                            <a href="how-it-works.html" class="p-5 text-base inline-flex items-center">
                                How it Works
                            </a>
                        </div>
                        <div class="nav-a">
                            <a href="faqs.html" class="p-5 text-base inline-flex items-center">
                                FAQs
                            </a>
                        </div>

                        <div class="nav-a">
                            <a href="about-us.html" class="p-5 text-base inline-flex items-center">
                                About Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="navfont order-3 lg:flex hidden sm:hidden text-biru">
                    <div class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                        <div class="text-xl font-thin flex items-center">
                            <div class="flex items-center">

                                <div class="relative">
                                    <select class="vodiapicker">
                                        <option value="en" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="au" data-thumbnail="img/in.png"> IN</option>
                                    </select>
                                    <div class="lang-select">
                                        <button class="btn-select blackbtn" value=""></button>
                                        <div class="b blacklanguage">
                                            <ul id="a" class="sel"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" ml-6 rounded border appearance-none bg-btnsosmed efectmenu">
                            <a href="" class="py-2 px-4 flex font-normal items-center">
                                <svg class="mr-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1668_5945)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.666667 0C0.298477 0 0 0.298477 0 0.666667C0 1.03486 0.298477 1.33333 0.666667 1.33333H2.78688L3.3413 4.10338C3.34425 4.12236 3.34801 4.14106 3.35253 4.15947L4.46611 9.72321C4.55764 10.1834 4.80817 10.5973 5.17365 10.8915C5.53747 11.1844 5.99225 11.3406 6.4591 11.3333H12.9276C13.3944 11.3406 13.8492 11.1844 14.213 10.8915C14.5787 10.5972 14.8291 10.1836 14.9206 9.72321L14.9215 9.71822L15.9882 4.12488C16.0254 3.92972 15.9736 3.72812 15.847 3.57504C15.7203 3.42195 15.532 3.33333 15.3333 3.33333H4.54695L3.98704 0.535829C3.92467 0.224257 3.65108 0 3.33333 0H0.666667ZM4.81382 4.66667H14.5275L13.6123 9.4656C13.5815 9.6182 13.4982 9.75523 13.3769 9.85289C13.255 9.951 13.1025 10.0031 12.9461 10.0001L12.9333 10H6.45333L6.44056 10.0001C6.28413 10.0031 6.13162 9.951 6.00974 9.85289C5.88786 9.75478 5.80437 9.61692 5.77389 9.46346L4.81382 4.66667Z"
                                            fill="black" />
                                        <path
                                            d="M4.66667 14C4.66667 13.2636 5.26362 12.6667 6 12.6667C6.73638 12.6667 7.33333 13.2636 7.33333 14C7.33333 14.7364 6.73638 15.3333 6 15.3333C5.26362 15.3333 4.66667 14.7364 4.66667 14Z"
                                            fill="black" />
                                        <path
                                            d="M12 14C12 13.2636 12.597 12.6667 13.3333 12.6667C14.0697 12.6667 14.6667 13.2636 14.6667 14C14.6667 14.7364 14.0697 15.3333 13.3333 15.3333C12.597 15.3333 12 14.7364 12 14Z"
                                            fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1668_5945">
                                            <rect width="16" height="16" fill="black" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Shop Now
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <!-- mobile menu navigation -->
            <div class="header-mobile mobile-only">
                <a href="index.html" class="logo">
                    <img class="logodefault" src="img/logo2.png" alt="">
                    <img class="hidden logodefault" src="img/logo2.png" alt="">
                    <img class="hidden logodark" src="img/logo2.png" alt="">
                </a>
                <input class="menu-btn" type="checkbox" id="menu-btn" />
                <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                <ul class="menu text-black">
                    <li><a href="index.html">Home</a></li>
                    <li>

                        <input type="checkbox" id="menuBtn" />
                        <label class="menu__close" for="menuBtn">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.5247 15.8337C11.4002 15.8341 11.2772 15.8067 11.1647 15.7533C11.0523 15.7 10.9532 15.6221 10.8747 15.5254L6.84973 10.5254C6.72716 10.3763 6.66016 10.1892 6.66016 9.99623C6.66016 9.8032 6.72716 9.61617 6.84973 9.46706L11.0164 4.46706C11.1578 4.29688 11.3611 4.18986 11.5815 4.16954C11.8018 4.14923 12.0212 4.21728 12.1914 4.35873C12.3616 4.50017 12.4686 4.70343 12.4889 4.92379C12.5092 5.14414 12.4412 5.36354 12.2997 5.53373L8.57473 10.0004L12.1747 14.4671C12.2766 14.5894 12.3414 14.7383 12.3613 14.8963C12.3812 15.0542 12.3554 15.2146 12.287 15.3584C12.2186 15.5021 12.1105 15.6233 11.9754 15.7076C11.8403 15.7918 11.6839 15.8356 11.5247 15.8337Z"
                                    fill="#232020" />
                            </svg>

                            back
                        </label>
                        <label class="menu__close uptodo" for="menuBtn"></label>
                        <div class="relative">
                            <label class="menu__button w-full" for="menuBtn"></label>

                            <div class="overlay bg-white w-full h-4 absolute"></div>
                        </div>


                        <div class="menu">

                            <div class="menu__container">
                                <!-- menu list -->
                                <button type="button" class="collapsible second relative">
                                    Showerhead
                                    <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z"
                                            fill="#232020" />
                                    </svg>
                                </button>
                                <div class="content">
                                    <div class="inline-flex items-center pb-0 pt-2">
                                        <h2 class="text-title2 text-sm  mb-1 font-semibold">Aroma
                                            Sense
                                        </h2>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                fill="#004E98"></path>
                                        </svg>
                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                Showerhead Handheld - Medium AS9000 Vitamin C
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -
                                                Showerhead Mist
                                                Vitamin C</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Shower Head Wall -
                                                Arofix</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -
                                                Showerhead
                                                701</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -
                                                Showerhead
                                                801</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -Super
                                                Jet
                                                Wide
                                                PR-SJW</a>
                                        </li>
                                    </ul>
                                    <div class="inline-flex items-center">
                                        <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica
                                        </h2>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                fill="#66102D"></path>
                                        </svg>

                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                Showerhead Handheld - Medium AS9000 Vitamin C
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -
                                                Showerhead Mist
                                                Vitamin C</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Shower Head Wall -
                                                Arofix</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -
                                                Showerhead
                                                701</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -
                                                Showerhead
                                                801</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -Super
                                                Jet
                                                Wide
                                                PR-SJW</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- menu list end -->
                                <!-- menu list -->
                                <button type="button" class="collapsible second relative">
                                    Showerhead Kids Series
                                    <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z"
                                            fill="#232020" />
                                    </svg>
                                </button>
                                <div class="content">
                                    <div class="inline-flex items-center pb-0 pt-2">
                                        <h2 class="text-title2 text-sm  mb-1 font-semibold">Aroma
                                            Sense
                                        </h2>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                fill="#004E98"></path>
                                        </svg>
                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="detail-product.html">
                                                Showerhead Handheld - Showerhead Kids Shark Pink Vitamin C
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                                Showerhead Kids Shark Blue Vitamin C</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="detail-product.html">Shower Head Wall -
                                                Arofix</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                                Showerhead Kids Turtle Vitamin C</a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- menu list end -->

                                <!-- menu list -->
                                <button type="button" class="collapsible second relative">
                                    Aroma Tube
                                    <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z"
                                            fill="#232020" />
                                    </svg>
                                </button>
                                <div class="content">
                                    <div class="inline-flex items-center pb-0 pt-2">
                                        <h2 class="text-title2 text-sm  mb-1 font-semibold">Aroma
                                            Sense
                                        </h2>
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                                                fill="#004E98"></path>
                                        </svg>
                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                Vitamin C Cartidges isi 1 - Lemon
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Showerhead Handheld -
                                                Vitamin C Cartidges isi 1 - Lemon Manggo
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Vanilla Coconut
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Neutral
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Lavender
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Phytoncide
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Jasmine
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Pine
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Rose
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges isi 1
                                                - Eucalyptus
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                Therapy for Shower Arofix - Isi 1 pcs - Lavender
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                Therapy for Shower Arofix - Isi 1 pcs - Lemon
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                Therapy for Shower Arofix - Isi 1 pcs - Neutral
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Vitamin C Cartidges Aroma
                                                Therapy for Shower Arofix - Isi 1 pcs - Eucalyptus
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="inline-flex items-center pb-0 pt-2">
                                        <h2 class="text-title2 text-sm  mb-1 font-semibold">Pure
                                            Rain
                                        </h2>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.36849 19.25L5.78516 16.5833L2.78516 15.9167L3.07682 12.8333L1.03516 10.5L3.07682 8.16667L2.78516 5.08333L5.78516 4.41667L7.36849 1.75L10.2018 2.95833L13.0352 1.75L14.6185 4.41667L17.6185 5.08333L17.3268 8.16667L19.3685 10.5L17.3268 12.8333L17.6185 15.9167L14.6185 16.5833L13.0352 19.25L10.2018 18.0417L7.36849 19.25ZM9.32682 13.4583L14.0352 8.75L12.8685 7.54167L9.32682 11.0833L7.53516 9.33333L6.36849 10.5L9.32682 13.4583Z"
                                                fill="#F4CF7A" />
                                        </svg>

                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                Microfiber PRM (Isi 3)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Carbon PRC
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- menu list end -->
                                <!-- menu list -->
                                <button type="button" class="collapsible second relative">
                                    Filter
                                    <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z"
                                            fill="#232020" />
                                    </svg>
                                </button>
                                <div class="content">
                                    <div class="inline-flex items-center pb-0 pt-2">
                                        <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma
                                            Sense
                                        </h2>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z"
                                                fill="#004E98" />
                                        </svg>

                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                Microfiber Filter Prestiges (isi 5)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Filter Medium
                                                (isi 5)</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Mist (isi
                                                5)</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Filter Arofix
                                                (isi 5)</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Filter 801 (isi
                                                5)</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Filter 701 (isi
                                                5)</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Filter
                                                GrandShower (isi 5)</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Super Jet</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Super Jet
                                                Wide</a>
                                        </li>

                                    </ul>
                                    <div class="inline-flex items-center pb-0 pt-2">
                                        <h2 class="text-title2 text-sm  mb-1 font-semibold">Pure
                                            Rain
                                        </h2>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.36849 19.25L5.78516 16.5833L2.78516 15.9167L3.07682 12.8333L1.03516 10.5L3.07682 8.16667L2.78516 5.08333L5.78516 4.41667L7.36849 1.75L10.2018 2.95833L13.0352 1.75L14.6185 4.41667L17.6185 5.08333L17.3268 8.16667L19.3685 10.5L17.3268 12.8333L17.6185 15.9167L14.6185 16.5833L13.0352 19.25L10.2018 18.0417L7.36849 19.25ZM9.32682 13.4583L14.0352 8.75L12.8685 7.54167L9.32682 11.0833L7.53516 9.33333L6.36849 10.5L9.32682 13.4583Z"
                                                fill="#F4CF7A" />
                                        </svg>

                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                Microfiber PRM (Isi 3)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Carbon PRC
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- menu list end -->
                                <!-- menu list -->
                                <button type="button" class="collapsible second relative">
                                    Home
                                    <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z"
                                            fill="#232020" />
                                    </svg>
                                </button>
                                <div class="content">
                                    <div class="inline-flex items-cepb-0 pt-2">
                                        <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                            Pure Rain
                                        </h2>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z"
                                                fill="#F4CF7A" />
                                        </svg>

                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                Alat Tap Water Filter PR100 (Bathroom)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Alat Tap Water Filter
                                                PR303 (Kitchen) </a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Tap Water
                                                Filter (Bathroom) PR100</a>
                                        </li>
                                        <li>
                                            <a class="block py-4" href="">Microfiber Tap Water
                                                Filter PR300 (Kitchen)</a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- menu list end -->
                                <!-- menu list -->
                                <button type="button" class="collapsible second relative">
                                    Orther
                                    <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z"
                                            fill="#232020" />
                                    </svg>
                                </button>
                                <div class="content">
                                    <div class="inline-flex items-cepb-0 pt-2">
                                        <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                            Pure Rain
                                        </h2>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1957_2179)">
                                                <path
                                                    d="M8.09896 19.25L6.51562 16.5833L3.51562 15.9167L3.80729 12.8333L1.76562 10.5L3.80729 8.16667L3.51562 5.08333L6.51562 4.41667L8.09896 1.75L10.9323 2.95833L13.7656 1.75L15.349 4.41667L18.349 5.08333L18.0573 8.16667L20.099 10.5L18.0573 12.8333L18.349 15.9167L15.349 16.5833L13.7656 19.25L10.9323 18.0417L8.09896 19.25ZM10.0573 13.4583L14.7656 8.75L13.599 7.54167L10.0573 11.0833L8.26563 9.33333L7.09896 10.5L10.0573 13.4583Z"
                                                    fill="#F4CF7A" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1957_2179">
                                                    <rect width="20" height="20" fill="white"
                                                        transform="translate(0.933594 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                ACF Filter Carbon
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="inline-flex items-center pb-0 pt-2">
                                        <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                            Water Lab
                                        </h2>
                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.63021 19.25L6.04688 16.5833L3.04688 15.9167L3.33854 12.8333L1.29688 10.5L3.33854 8.16667L3.04688 5.08333L6.04688 4.41667L7.63021 1.75L10.4635 2.95833L13.2969 1.75L14.8802 4.41667L17.8802 5.08333L17.5885 8.16667L19.6302 10.5L17.5885 12.8333L17.8802 15.9167L14.8802 16.5833L13.2969 19.25L10.4635 18.0417L7.63021 19.25ZM9.58854 13.4583L14.2969 8.75L13.1302 7.54167L9.58854 11.0833L7.79688 9.33333L6.63021 10.5L9.58854 13.4583Z"
                                                fill="#50808E" />
                                        </svg>

                                    </div>
                                    <ul class="navmenubig">
                                        <li>
                                            <a class="block py-4" href="">
                                                ACF Filter
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- menu list end -->
                            </div>
                        </div>


                    </li>
                    <li><a href="how-it-works.html">How it Works</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li>
                        <div class="flex w-full justify-between">
                            <div class="text-xl font-thin flex items-center">
                                <div class="flex ml-6 items-center">

                                    <div class="relative">
                                        <select class="vodiapicker2">
                                            <option value="en" class="test" data-thumbnail2="img/en.png"> EN </option>
                                            <option value="in" data-thumbnail2="img/in.png"> IN</option>
                                        </select>
                                        <div class="lang-select">
                                            <button class="btn-select2 blackbtn" value=""></button>
                                            <div class="b2 blacklanguage">
                                                <ul id="a2" class="sel"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" ml-6 rounded border appearance-none bg-btnsosmed efectmenu">
                                <a href="" class="p-2 flex font-normal items-center">
                                    <svg class="mr-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1668_5945)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.666667 0C0.298477 0 0 0.298477 0 0.666667C0 1.03486 0.298477 1.33333 0.666667 1.33333H2.78688L3.3413 4.10338C3.34425 4.12236 3.34801 4.14106 3.35253 4.15947L4.46611 9.72321C4.55764 10.1834 4.80817 10.5973 5.17365 10.8915C5.53747 11.1844 5.99225 11.3406 6.4591 11.3333H12.9276C13.3944 11.3406 13.8492 11.1844 14.213 10.8915C14.5787 10.5972 14.8291 10.1836 14.9206 9.72321L14.9215 9.71822L15.9882 4.12488C16.0254 3.92972 15.9736 3.72812 15.847 3.57504C15.7203 3.42195 15.532 3.33333 15.3333 3.33333H4.54695L3.98704 0.535829C3.92467 0.224257 3.65108 0 3.33333 0H0.666667ZM4.81382 4.66667H14.5275L13.6123 9.4656C13.5815 9.6182 13.4982 9.75523 13.3769 9.85289C13.255 9.951 13.1025 10.0031 12.9461 10.0001L12.9333 10H6.45333L6.44056 10.0001C6.28413 10.0031 6.13162 9.951 6.00974 9.85289C5.88786 9.75478 5.80437 9.61692 5.77389 9.46346L4.81382 4.66667Z"
                                                fill="black" />
                                            <path
                                                d="M4.66667 14C4.66667 13.2636 5.26362 12.6667 6 12.6667C6.73638 12.6667 7.33333 13.2636 7.33333 14C7.33333 14.7364 6.73638 15.3333 6 15.3333C5.26362 15.3333 4.66667 14.7364 4.66667 14Z"
                                                fill="black" />
                                            <path
                                                d="M12 14C12 13.2636 12.597 12.6667 13.3333 12.6667C14.0697 12.6667 14.6667 13.2636 14.6667 14C14.6667 14.7364 14.0697 15.3333 13.3333 15.3333C12.597 15.3333 12 14.7364 12 14Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1668_5945">
                                                <rect width="16" height="16" fill="black" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Shop Now</span>

                                </a>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
            <!-- mobile base navigation -->

        </div>
    </header>
    <!-- headedr end -->



    <section class="w-full pb-20 pt-20 lg:px-20 relative">
        <div class="container px-5 pt-20 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 rounded-lg overflow-hidden flex items-end justify-start relative">
                <div class="relative">
                    <img src="img/product/1.jpg" alt="">
                    <img class="absolute top-0 left-0 w-20 border border-btnbg rounded-md" src="img/showerhead/1.jpg"
                        alt="">
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full">
                <div class="inline-flex items-center">
                    <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma
                        Sense
                    </h2>
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z"
                            fill="#004E98"></path>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold py-4">Aroma Sense - Spare parts - Anti bakteri AS9000 Medium</h1>
                <div class="flex mb-4"><span class="flex items-center"><svg fill="currentColor" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-bgstart"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-bgstart" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-bgstart" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-bgstart" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 text-bgstart" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                            </path>
                        </svg>
                        <span class="text-gray-600 ml-3">4 Reviews</span></span>

                </div>
                <p class="pb-4">Keep your Aroma Sense shower head functioning at its best with our antibacterial ceramic beads! These beads effectively absorb chemical particles and contaminants that may be present in your water supply, ensuring that your shower water is clean and healthy.

                </p>
                <p class="pb-4">It is recommended to check and replace your antibacterial ceramic beads every time you check your refill cartridges, which is typically every 2-3 months. This will help ensure that your shower head continues to work optimally and that you enjoy the full benefits of its features.</p>

                <section
                    class="accordion bg-btnbg text-white my-0 mx-auto inline-flex items-center justify-center w-full">
                    <div class="tab w-full">
                        <input type="checkbox" name="accordion-1" id="cb2">
                        <label for="cb2" class="tab__label">Buy Now</label>
                        <div class="tab__content">
                            <a class="flex p-4" href="http://bit.ly/aromasenseindo
                            ">
                                <div class="iconbuy mr-3"><img src="img/icon/whatsapp.png" alt=""></div>
                                Shop via WhatsApp
                            </a>
                            <a class="flex p-4" href="https://shopee.co.id/Antibacterial-Ceramic-Balls-i.193319332.13466107571?sp_atk=7db30a61-ae51-44be-91aa-f0cd710b45c7&xptdk=7db30a61-ae51-44be-91aa-f0cd710b45c7
                            ">
                                <div class="iconbuy mr-3"><img src="img/icon/shopee.png" alt=""></div>
                                Shop via Shopee
                            </a>
                            <a class="flex p-4" href="https://www.tokopedia.com/oceantial/antibacterial-ceramic-balls-as9000?extParam=src%3Dshop">
                                <div class="iconbuy mr-3"><img src="img/icon/tokopedia.png" alt=""></div>
                                Shop via Tokopedia
                            </a>
                            <a class="flex p-4" href="https://www.tiktok.com/@oceantial">
                                <div class="iconbuy mr-3"><img src="img/icon/tiktok.png" alt=""></div>
                                Shop via TikTok Shop
                            </a>
                        </div>
                    </div>
                </section>
            </div>
    </section>
    

    <section class="w-full desktop-only lg:pb-40 lg:pt-20 lg:px-20">
        <div class="container mx-auto">
            <!-- Related Products -->
            <div class="product-list">
                <div class="container pl-4 pb-6">
                    <div class="text-left">
                        <h2 class="font-bold text-3xl capitalize">Related Products </h2>
                    </div>
                </div>
                <div class="flex flex-wrap w-full">
                    <div class="lg:w-1/4 w-1/2 p-5">
                        <a class="block relative rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="img/showerhead/1.jpg">
                        </a>
                        <div class="mt-8">
                            <div class="inline-flex items-center">
                                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z"
                                        fill="#01ADEF"></path>
                                </svg>
                            </div>

                            <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld -
                                Showerhead
                                801</h2>
                            <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 w-1/2 p-5">
                        <a class="block relative rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="img/showerhead/2.jpg">
                        </a>
                        <div class="mt-8">
                            <div class="inline-flex items-center">
                                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z"
                                        fill="#01ADEF"></path>
                                </svg>
                            </div>

                            <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld -
                                Showerhead
                                701</h2>
                            <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 w-1/2 p-5">
                        <a class="block relative rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="img/showerhead/3.jpg">
                        </a>
                        <div class="mt-8">
                            <div class="inline-flex items-center">
                                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica</h2>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z"
                                        fill="#01ADEF"></path>
                                </svg>

                            </div>

                            <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld -
                                Medium AS9000
                                Vitamin C
                            </h2>
                            <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
                        </div>
                    </div>
                    <div class="lg:w-1/4 w-1/2 p-5">
                        <a class="block relative rounded overflow-hidden">
                            <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                src="img/showerhead/4.jpg">
                        </a>
                        <div class="mt-8">
                            <div class="inline-flex items-center">
                                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z"
                                        fill="#01ADEF"></path>
                                </svg>
                            </div>

                            <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld -
                                Showerhead
                                Mist Vitamin
                                C</h2>
                            <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- footer -->
    <div w3-include-html="footer.html"></div>


    <button id="btt" class="fixed right-4 bottom-4 z-50 bg-red-800 rounded-full p-5" title="Return To Top">
        <svg class="fill-white" width="18" height="18" viewBox="0 0 320 512">
            <path
                d="M168.5 84.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 149.3 40.3 267.8c-4.7 4.7-12.3 4.7-17 0L3.5 248c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0zm-17 160L3.5 391c-4.7 4.7-4.7 12.3 0 17l19.8 19.8c4.7 4.7 12.3 4.7 17 0L160 309.3l119.7 118.5c4.7 4.7 12.3 4.7 17 0l19.8-19.8c4.7-4.7 4.7-12.3 0-17l-148-146.8c-4.7-4.7-12.3-4.7-17 0z" />
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
        tabTogglers2.forEach(function (toggler2) {
            toggler2.addEventListener("click", function (c) {
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
            coll[i].addEventListener("click", function () {
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

        $(document).ready(function () {
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