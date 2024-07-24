<?php
$page = 'home';
require('base.php')
?>

<body>

  <!-- header -->
  <header class="text-white fixed z-[90] lg:bg-menu-bg w-full lg:px-20 lg:h-[88px]" id="menuHead">
    <div class="lg:container lg:mx-auto">
      <div class="hidden lg:flex justify-between items-center lg:h-[88px]">
        <div class="order-1 justify-between flex gap-16 items-center">
          <a class="block" href="index.html">
            <img class="logodefault" src="img/logo.png" alt="">
            <img class="hidden logodefault" src="img/logo.png" alt="">
            <img class="hidden logodark" src="img/logo2.png" alt="">

          </a>
          <!-- navigation desktop -->
          <div class="flex items-center nav-header">
            <div class="nav-a">
              <a href="index.html" class="p-5 text-base inline-flex items-center">
                Home
              </a>
            </div>
            <div class="nav-a toggleable vfb-checkbox">
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
                              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#004E98"></path>
                              </svg>
                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Showerhead Handheld - Medium AS9000 Vitamin C
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Showerhead Mist
                                  Vitamin C</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Shower Head Wall -
                                  Arofix</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Showerhead
                                  701</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Showerhead
                                  801</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -Super
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
                              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#66102D"></path>
                              </svg>

                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Showerhead Handheld - Medium AS9000 Vitamin C
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Showerhead Mist
                                  Vitamin C</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Shower Head Wall -
                                  Arofix</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Showerhead
                                  701</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Showerhead
                                  801</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -Super
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
                              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#004E98"></path>
                              </svg>
                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Showerhead Handheld - Showerhead Kids Shark Pink
                                  Vitamin
                                  C
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Showerhead Kids Shark Blue Vitamin C</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
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
                              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#004E98"></path>
                              </svg>
                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Vitamin C Cartidges isi 1 - Lemon
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                                  Vitamin C Cartidges isi 1 - Lemon Manggo
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Vanilla Coconut
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Neutral
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Lavender
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Phytoncide
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Jasmine
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Pine
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Rose
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                                  - Eucalyptus
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
                                  Therapy for Shower Arofix - Isi 1 pcs - Lavender
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
                                  Therapy for Shower Arofix - Isi 1 pcs - Lemon
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
                                  Therapy for Shower Arofix - Isi 1 pcs - Neutral
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
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
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.36849 19.25L5.78516 16.5833L2.78516 15.9167L3.07682 12.8333L1.03516 10.5L3.07682 8.16667L2.78516 5.08333L5.78516 4.41667L7.36849 1.75L10.2018 2.95833L13.0352 1.75L14.6185 4.41667L17.6185 5.08333L17.3268 8.16667L19.3685 10.5L17.3268 12.8333L17.6185 15.9167L14.6185 16.5833L13.0352 19.25L10.2018 18.0417L7.36849 19.25ZM9.32682 13.4583L14.0352 8.75L12.8685 7.54167L9.32682 11.0833L7.53516 9.33333L6.36849 10.5L9.32682 13.4583Z" fill="#F4CF7A" />
                              </svg>

                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Microfiber PRM (Isi 3)
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Carbon PRC
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
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z" fill="#004E98" />
                              </svg>

                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Microfiber Filter Prestiges (isi 5)
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Filter Medium
                                  (isi 5)</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Mist (isi
                                  5)</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Filter Arofix
                                  (isi 5)</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Filter 801 (isi
                                  5)</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Filter 701 (isi
                                  5)</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Filter
                                  GrandShower (isi 5)</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Super Jet</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Super Jet
                                  Wide</a>
                              </li>

                            </ul>
                          </div>
                          <div class="p-6">
                            <div class="inline-flex items-center pb-6">
                              <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica
                              </h2>
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.36458 19.25L5.78125 16.5833L2.78125 15.9167L3.07292 12.8333L1.03125 10.5L3.07292 8.16667L2.78125 5.08333L5.78125 4.41667L7.36458 1.75L10.1979 2.95833L13.0312 1.75L14.6146 4.41667L17.6146 5.08333L17.3229 8.16667L19.3646 10.5L17.3229 12.8333L17.6146 15.9167L14.6146 16.5833L13.0312 19.25L10.1979 18.0417L7.36458 19.25ZM9.32292 13.4583L14.0313 8.75L12.8646 7.54167L9.32292 11.0833L7.53125 9.33333L6.36458 10.5L9.32292 13.4583Z" fill="#66102D" />
                              </svg>


                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
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
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z" fill="#F4CF7A" />
                              </svg>

                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Alat Tap Water Filter PR100 (Bathroom)
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Alat Tap Water Filter
                                  PR303 (Kitchen) </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Tap Water
                                  Filter (Bathroom) PR100</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Microfiber Tap Water
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
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z" fill="#004E98" />
                              </svg>


                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  Spare parts - White Handle
                                </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Chrome
                                  Handle </a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Anti bakteri
                                  Tulip</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Anti bakteri
                                  AS9000 Medium</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Anti bakteri
                                  AS 701</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Anti bakteri
                                  AS9000 Medium</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Anti bakteri
                                  Prestiges</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Anti bakteri
                                  Kids</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Spare parts - Anti bakteri
                                  Arofix 01</a>
                              </li>
                              <li>
                                <a class="block py-4" href="detail-product.html">Vita</a>
                              </li>

                            </ul>
                          </div>
                          <div class="p-6">
                            <div class="inline-flex items-center pb-6">
                              <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                Pure Rain
                              </h2>
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1957_2179)">
                                  <path d="M8.09896 19.25L6.51562 16.5833L3.51562 15.9167L3.80729 12.8333L1.76562 10.5L3.80729 8.16667L3.51562 5.08333L6.51562 4.41667L8.09896 1.75L10.9323 2.95833L13.7656 1.75L15.349 4.41667L18.349 5.08333L18.0573 8.16667L20.099 10.5L18.0573 12.8333L18.349 15.9167L15.349 16.5833L13.7656 19.25L10.9323 18.0417L8.09896 19.25ZM10.0573 13.4583L14.7656 8.75L13.599 7.54167L10.0573 11.0833L8.26563 9.33333L7.09896 10.5L10.0573 13.4583Z" fill="#F4CF7A" />
                                </g>
                                <defs>
                                  <clipPath id="clip0_1957_2179">
                                    <rect width="20" height="20" fill="white" transform="translate(0.933594 0.5)" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
                                  ACF Filter Carbon
                                </a>
                              </li>
                            </ul>
                            <div class="inline-flex items-center pb-6 pt-6">
                              <h2 class="text-title2 text-lg  mb-1 font-semibold">
                                Water Lab
                              </h2>
                              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.63021 19.25L6.04688 16.5833L3.04688 15.9167L3.33854 12.8333L1.29688 10.5L3.33854 8.16667L3.04688 5.08333L6.04688 4.41667L7.63021 1.75L10.4635 2.95833L13.2969 1.75L14.8802 4.41667L17.8802 5.08333L17.5885 8.16667L19.6302 10.5L17.5885 12.8333L17.8802 15.9167L14.8802 16.5833L13.2969 19.25L10.4635 18.0417L7.63021 19.25ZM9.58854 13.4583L14.2969 8.75L13.1302 7.54167L9.58854 11.0833L7.79688 9.33333L6.63021 10.5L9.58854 13.4583Z" fill="#50808E" />
                              </svg>

                            </div>
                            <ul class="navmenubig">
                              <li>
                                <a class="block py-4" href="detail-product.html">
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
            <div class=" text-white text-xl font-thin flex items-center">
              <div class="flex ml-6 items-center">

                <div class="relative">
                  <select class="vodiapicker">
                    <option value="en" class="test" data-thumbnail="img/en.png"> EN </option>
                    <option value="au" data-thumbnail="img/in.png"> IN</option>
                  </select>
                  <div class="lang-select">
                    <button class="btn-select" value=""></button>
                    <div class="b">
                      <ul id="a" class="sel"></ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-white ml-4 rounded border appearance-none border-white efectmenu">
              <a href="" class="py-2 px-4 flex font-normal items-center">
                <svg class="mr-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1668_5945)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.666667 0C0.298477 0 0 0.298477 0 0.666667C0 1.03486 0.298477 1.33333 0.666667 1.33333H2.78688L3.3413 4.10338C3.34425 4.12236 3.34801 4.14106 3.35253 4.15947L4.46611 9.72321C4.55764 10.1834 4.80817 10.5973 5.17365 10.8915C5.53747 11.1844 5.99225 11.3406 6.4591 11.3333H12.9276C13.3944 11.3406 13.8492 11.1844 14.213 10.8915C14.5787 10.5972 14.8291 10.1836 14.9206 9.72321L14.9215 9.71822L15.9882 4.12488C16.0254 3.92972 15.9736 3.72812 15.847 3.57504C15.7203 3.42195 15.532 3.33333 15.3333 3.33333H4.54695L3.98704 0.535829C3.92467 0.224257 3.65108 0 3.33333 0H0.666667ZM4.81382 4.66667H14.5275L13.6123 9.4656C13.5815 9.6182 13.4982 9.75523 13.3769 9.85289C13.255 9.951 13.1025 10.0031 12.9461 10.0001L12.9333 10H6.45333L6.44056 10.0001C6.28413 10.0031 6.13162 9.951 6.00974 9.85289C5.88786 9.75478 5.80437 9.61692 5.77389 9.46346L4.81382 4.66667Z" fill="white" />
                    <path d="M4.66667 14C4.66667 13.2636 5.26362 12.6667 6 12.6667C6.73638 12.6667 7.33333 13.2636 7.33333 14C7.33333 14.7364 6.73638 15.3333 6 15.3333C5.26362 15.3333 4.66667 14.7364 4.66667 14Z" fill="white" />
                    <path d="M12 14C12 13.2636 12.597 12.6667 13.3333 12.6667C14.0697 12.6667 14.6667 13.2636 14.6667 14C14.6667 14.7364 14.0697 15.3333 13.3333 15.3333C12.597 15.3333 12 14.7364 12 14Z" fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_1668_5945">
                      <rect width="16" height="16" fill="white" />
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
      <div class="header-mobile homepagenav mobile-only">
        <a href="index.html" class="logo">
          <img class="logodefault" src="img/logo.png" alt="">
          <img class="hidden logodefault" src="img/logo.png" alt="">
          <img class="hidden logodark" src="img/logo2.png" alt="">
        </a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon whitemenu" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu text-black">
          <li><a href="index.html">Home</a></li>
          <li>

            <input type="checkbox" id="menuBtn" />
            <label class="menu__close" for="menuBtn">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5247 15.8337C11.4002 15.8341 11.2772 15.8067 11.1647 15.7533C11.0523 15.7 10.9532 15.6221 10.8747 15.5254L6.84973 10.5254C6.72716 10.3763 6.66016 10.1892 6.66016 9.99623C6.66016 9.8032 6.72716 9.61617 6.84973 9.46706L11.0164 4.46706C11.1578 4.29688 11.3611 4.18986 11.5815 4.16954C11.8018 4.14923 12.0212 4.21728 12.1914 4.35873C12.3616 4.50017 12.4686 4.70343 12.4889 4.92379C12.5092 5.14414 12.4412 5.36354 12.2997 5.53373L8.57473 10.0004L12.1747 14.4671C12.2766 14.5894 12.3414 14.7383 12.3613 14.8963C12.3812 15.0542 12.3554 15.2146 12.287 15.3584C12.2186 15.5021 12.1105 15.6233 11.9754 15.7076C11.8403 15.7918 11.6839 15.8356 11.5247 15.8337Z" fill="#232020" />
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
                  <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z" fill="#232020" />
                  </svg>
                </button>
                <div class="content">
                  <div class="inline-flex items-center pb-0 pt-2">
                    <h2 class="text-title2 text-sm  mb-1 font-semibold">Aroma
                      Sense
                    </h2>
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#004E98"></path>
                    </svg>
                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        Showerhead Handheld - Medium AS9000 Vitamin C
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                        Showerhead Mist
                        Vitamin C</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Shower Head Wall -
                        Arofix</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                        Showerhead
                        701</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                        Showerhead
                        801</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -Super
                        Jet
                        Wide
                        PR-SJW</a>
                    </li>
                  </ul>
                  <div class="inline-flex items-center">
                    <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica
                    </h2>
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#66102D"></path>
                    </svg>

                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        Showerhead Handheld - Medium AS9000 Vitamin C
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                        Showerhead Mist
                        Vitamin C</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Shower Head Wall -
                        Arofix</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                        Showerhead
                        701</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                        Showerhead
                        801</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -Super
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
                  <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z" fill="#232020" />
                  </svg>
                </button>
                <div class="content">
                  <div class="inline-flex items-center pb-0 pt-2">
                    <h2 class="text-title2 text-sm  mb-1 font-semibold">Aroma
                      Sense
                    </h2>
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#004E98"></path>
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
                  <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z" fill="#232020" />
                  </svg>
                </button>
                <div class="content">
                  <div class="inline-flex items-center pb-0 pt-2">
                    <h2 class="text-title2 text-sm  mb-1 font-semibold">Aroma
                      Sense
                    </h2>
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.16683 19.1914L5.5835 16.5247L2.5835 15.8581L2.87516 12.7747L0.833496 10.4414L2.87516 8.10807L2.5835 5.02474L5.5835 4.35807L7.16683 1.69141L10.0002 2.89974L12.8335 1.69141L14.4168 4.35807L17.4168 5.02474L17.1252 8.10807L19.1668 10.4414L17.1252 12.7747L17.4168 15.8581L14.4168 16.5247L12.8335 19.1914L10.0002 17.9831L7.16683 19.1914ZM9.12516 13.3997L13.8335 8.69141L12.6668 7.48307L9.12516 11.0247L7.3335 9.27474L6.16683 10.4414L9.12516 13.3997Z" fill="#004E98"></path>
                    </svg>
                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        Vitamin C Cartidges isi 1 - Lemon
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Showerhead Handheld -
                        Vitamin C Cartidges isi 1 - Lemon Manggo
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Vanilla Coconut
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Neutral
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Lavender
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Phytoncide
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Jasmine
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Pine
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Rose
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges isi 1
                        - Eucalyptus
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
                        Therapy for Shower Arofix - Isi 1 pcs - Lavender
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
                        Therapy for Shower Arofix - Isi 1 pcs - Lemon
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
                        Therapy for Shower Arofix - Isi 1 pcs - Neutral
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Vitamin C Cartidges Aroma
                        Therapy for Shower Arofix - Isi 1 pcs - Eucalyptus
                      </a>
                    </li>

                  </ul>
                  <div class="inline-flex items-center pb-0 pt-2">
                    <h2 class="text-title2 text-sm  mb-1 font-semibold">Pure
                      Rain
                    </h2>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.36849 19.25L5.78516 16.5833L2.78516 15.9167L3.07682 12.8333L1.03516 10.5L3.07682 8.16667L2.78516 5.08333L5.78516 4.41667L7.36849 1.75L10.2018 2.95833L13.0352 1.75L14.6185 4.41667L17.6185 5.08333L17.3268 8.16667L19.3685 10.5L17.3268 12.8333L17.6185 15.9167L14.6185 16.5833L13.0352 19.25L10.2018 18.0417L7.36849 19.25ZM9.32682 13.4583L14.0352 8.75L12.8685 7.54167L9.32682 11.0833L7.53516 9.33333L6.36849 10.5L9.32682 13.4583Z" fill="#F4CF7A" />
                    </svg>

                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        Microfiber PRM (Isi 3)
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Carbon PRC
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- menu list end -->
                <!-- menu list -->
                <button type="button" class="collapsible second relative">
                  Filter
                  <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z" fill="#232020" />
                  </svg>
                </button>
                <div class="content">
                  <div class="inline-flex items-center pb-0 pt-2">
                    <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma
                      Sense
                    </h2>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z" fill="#004E98" />
                    </svg>

                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        Microfiber Filter Prestiges (isi 5)
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Filter Medium
                        (isi 5)</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Mist (isi
                        5)</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Filter Arofix
                        (isi 5)</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Filter 801 (isi
                        5)</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Filter 701 (isi
                        5)</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Filter
                        GrandShower (isi 5)</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Super Jet</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Super Jet
                        Wide</a>
                    </li>

                  </ul>
                  <div class="inline-flex items-center pb-0 pt-2">
                    <h2 class="text-title2 text-sm  mb-1 font-semibold">Pure
                      Rain
                    </h2>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.36849 19.25L5.78516 16.5833L2.78516 15.9167L3.07682 12.8333L1.03516 10.5L3.07682 8.16667L2.78516 5.08333L5.78516 4.41667L7.36849 1.75L10.2018 2.95833L13.0352 1.75L14.6185 4.41667L17.6185 5.08333L17.3268 8.16667L19.3685 10.5L17.3268 12.8333L17.6185 15.9167L14.6185 16.5833L13.0352 19.25L10.2018 18.0417L7.36849 19.25ZM9.32682 13.4583L14.0352 8.75L12.8685 7.54167L9.32682 11.0833L7.53516 9.33333L6.36849 10.5L9.32682 13.4583Z" fill="#F4CF7A" />
                    </svg>

                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        Microfiber PRM (Isi 3)
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Carbon PRC
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- menu list end -->
                <!-- menu list -->
                <button type="button" class="collapsible second relative">
                  Home
                  <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z" fill="#232020" />
                  </svg>
                </button>
                <div class="content">
                  <div class="inline-flex items-cepb-0 pt-2">
                    <h2 class="text-title2 text-lg  mb-1 font-semibold">
                      Pure Rain
                    </h2>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5638 19.25L5.98047 16.5833L2.98047 15.9167L3.27214 12.8333L1.23047 10.5L3.27214 8.16667L2.98047 5.08333L5.98047 4.41667L7.5638 1.75L10.3971 2.95833L13.2305 1.75L14.8138 4.41667L17.8138 5.08333L17.5221 8.16667L19.5638 10.5L17.5221 12.8333L17.8138 15.9167L14.8138 16.5833L13.2305 19.25L10.3971 18.0417L7.5638 19.25ZM9.52214 13.4583L14.2305 8.75L13.0638 7.54167L9.52214 11.0833L7.73047 9.33333L6.5638 10.5L9.52214 13.4583Z" fill="#F4CF7A" />
                    </svg>

                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        Alat Tap Water Filter PR100 (Bathroom)
                      </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Alat Tap Water Filter
                        PR303 (Kitchen) </a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Tap Water
                        Filter (Bathroom) PR100</a>
                    </li>
                    <li>
                      <a class="block py-4" href="detail-product.html">Microfiber Tap Water
                        Filter PR300 (Kitchen)</a>
                    </li>

                  </ul>
                </div>
                <!-- menu list end -->
                <!-- menu list -->
                <button type="button" class="collapsible second relative">
                  Orther
                  <svg class="absolute top-5 right-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.0886 4.41107C7.76317 4.08563 7.23553 4.08563 6.91009 4.41107C6.58466 4.73651 6.58466 5.26414 6.91009 5.58958L11.3208 10.0003L6.91009 14.4111C6.58466 14.7365 6.58466 15.2641 6.91009 15.5896C7.23553 15.915 7.76317 15.915 8.0886 15.5896L13.0886 10.5896C13.414 10.2641 13.414 9.73651 13.0886 9.41107L8.0886 4.41107Z" fill="#232020" />
                  </svg>
                </button>
                <div class="content">
                  <div class="inline-flex items-cepb-0 pt-2">
                    <h2 class="text-title2 text-lg  mb-1 font-semibold">
                      Pure Rain
                    </h2>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1957_2179)">
                        <path d="M8.09896 19.25L6.51562 16.5833L3.51562 15.9167L3.80729 12.8333L1.76562 10.5L3.80729 8.16667L3.51562 5.08333L6.51562 4.41667L8.09896 1.75L10.9323 2.95833L13.7656 1.75L15.349 4.41667L18.349 5.08333L18.0573 8.16667L20.099 10.5L18.0573 12.8333L18.349 15.9167L15.349 16.5833L13.7656 19.25L10.9323 18.0417L8.09896 19.25ZM10.0573 13.4583L14.7656 8.75L13.599 7.54167L10.0573 11.0833L8.26563 9.33333L7.09896 10.5L10.0573 13.4583Z" fill="#F4CF7A" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1957_2179">
                          <rect width="20" height="20" fill="white" transform="translate(0.933594 0.5)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
                        ACF Filter Carbon
                      </a>
                    </li>
                  </ul>
                  <div class="inline-flex items-center pb-0 pt-2">
                    <h2 class="text-title2 text-lg  mb-1 font-semibold">
                      Water Lab
                    </h2>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.63021 19.25L6.04688 16.5833L3.04688 15.9167L3.33854 12.8333L1.29688 10.5L3.33854 8.16667L3.04688 5.08333L6.04688 4.41667L7.63021 1.75L10.4635 2.95833L13.2969 1.75L14.8802 4.41667L17.8802 5.08333L17.5885 8.16667L19.6302 10.5L17.5885 12.8333L17.8802 15.9167L14.8802 16.5833L13.2969 19.25L10.4635 18.0417L7.63021 19.25ZM9.58854 13.4583L14.2969 8.75L13.1302 7.54167L9.58854 11.0833L7.79688 9.33333L6.63021 10.5L9.58854 13.4583Z" fill="#50808E" />
                    </svg>

                  </div>
                  <ul class="navmenubig">
                    <li>
                      <a class="block py-4" href="detail-product.html">
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
                <div class="flex items-center">

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
              <div class="rounded border appearance-none bg-btnsosmed efectmenu">
                <a href="" class="p-2 flex font-normal items-center">
                  <svg class="mr-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1668_5945)">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.666667 0C0.298477 0 0 0.298477 0 0.666667C0 1.03486 0.298477 1.33333 0.666667 1.33333H2.78688L3.3413 4.10338C3.34425 4.12236 3.34801 4.14106 3.35253 4.15947L4.46611 9.72321C4.55764 10.1834 4.80817 10.5973 5.17365 10.8915C5.53747 11.1844 5.99225 11.3406 6.4591 11.3333H12.9276C13.3944 11.3406 13.8492 11.1844 14.213 10.8915C14.5787 10.5972 14.8291 10.1836 14.9206 9.72321L14.9215 9.71822L15.9882 4.12488C16.0254 3.92972 15.9736 3.72812 15.847 3.57504C15.7203 3.42195 15.532 3.33333 15.3333 3.33333H4.54695L3.98704 0.535829C3.92467 0.224257 3.65108 0 3.33333 0H0.666667ZM4.81382 4.66667H14.5275L13.6123 9.4656C13.5815 9.6182 13.4982 9.75523 13.3769 9.85289C13.255 9.951 13.1025 10.0031 12.9461 10.0001L12.9333 10H6.45333L6.44056 10.0001C6.28413 10.0031 6.13162 9.951 6.00974 9.85289C5.88786 9.75478 5.80437 9.61692 5.77389 9.46346L4.81382 4.66667Z" fill="black" />
                      <path d="M4.66667 14C4.66667 13.2636 5.26362 12.6667 6 12.6667C6.73638 12.6667 7.33333 13.2636 7.33333 14C7.33333 14.7364 6.73638 15.3333 6 15.3333C5.26362 15.3333 4.66667 14.7364 4.66667 14Z" fill="black" />
                      <path d="M12 14C12 13.2636 12.597 12.6667 13.3333 12.6667C14.0697 12.6667 14.6667 13.2636 14.6667 14C14.6667 14.7364 14.0697 15.3333 13.3333 15.3333C12.597 15.3333 12 14.7364 12 14Z" fill="black" />
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


  <section class="text-black lg:h-screen relative">

    <div class="absolute w-full h-full flex items-center">
      <div class="m-auto text-center">
        <div class="pb-10 text-white text-5xl">Awaken Your Senses</div>
        <a href="" class="text-white block rounded border appearance-none border-white py-2 px-6 w-[132px] m-auto">
          Learn More
        </a>
      </div>
    </div>
    <img src="img/cover-2.gif" alt="" class="object-cover h-screen w-full">
  </section>


  <section class="w-full lg:px-20 lg:pb-20 bg-bg-section">
    <div class="container mx-auto flex flex-wrap">
      <div class="lg:py-20 py-10 lg:px-16 container mx-auto">
        <div class="text-center">
          <h2 class="font-bold text-[40px] capitalize">Inspired by the ocean, crafted for you</h2>
        </div>
      </div>
      <div class=" w-full mx-auto p-4 lg:p-0">
        <div class="w-full bg-gray-100 relative mb-8 rounded-xl overflow-hidden group">
          <img alt="gallery" class="w-full object-cover lg:h-[560px] h-full object-center block rounded-[32px] group-hover:stroke-white" src="img/sample/1.jpg">
          <div class="text-left left-0 absolute z-10 w-full hbox bottom-0 p-10">
            <div class="flex items-center">
              <h2 class="text-4xl text-white font-medium title-font mb-2">Aroma Sense</h2>
              <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5607 9.43934C10.9749 8.85355 10.0251 8.85355 9.43934 9.43934C8.85355 10.0251 8.85355 10.9749 9.43934 11.5607L21.8787 24H10.5C9.67157 24 9 24.6716 9 25.5C9 26.3284 9.67157 27 10.5 27H25.5C26.3284 27 27 26.3284 27 25.5V10.5C27 9.67157 26.3284 9 25.5 9C24.6716 9 24 9.67157 24 10.5V21.8787L11.5607 9.43934Z" fill="white" />
              </svg>
            </div>
            <div class="group-hover:stroke-white text-white text-xl group-hover:block hidden">
              Elevate your shower time with Aroma Sense Showerhead, infusing your <br>skin with the nourishing benefits
              of vitamin C.
            </div>
          </div>
        </div>
        <div class="flex flex-wrap lg:-mx-4">
          <div class="lg:px-4 lg:w-1/2 w-full">
            <div class="w-full bg-gray-100 relative mb-8 rounded-xl overflow-hidden group">
              <img alt="gallery" class="w-full object-cover lg:h-[560px] h-full object-center block rounded-[32px]" src="img/sample/2.jpg">
              <div class="text-left left-0 absolute z-10 w-full hbox bottom-0 p-10">
                <div class="flex items-center">
                  <h2 class="text-4xl text-white font-medium title-font mb-2">Aroma Sense</h2>
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5607 9.43934C10.9749 8.85355 10.0251 8.85355 9.43934 9.43934C8.85355 10.0251 8.85355 10.9749 9.43934 11.5607L21.8787 24H10.5C9.67157 24 9 24.6716 9 25.5C9 26.3284 9.67157 27 10.5 27H25.5C26.3284 27 27 26.3284 27 25.5V10.5C27 9.67157 26.3284 9 25.5 9C24.6716 9 24 9.67157 24 10.5V21.8787L11.5607 9.43934Z" fill="white" />
                  </svg>
                </div>
                <div class="group-hover:stroke-white text-white text-xl group-hover:block hidden">
                  Elevate your shower time with Aroma Sense Showerhead, infusing your <br>skin with the nourishing
                  benefits
                  of vitamin C.
                </div>
              </div>
            </div>
          </div>
          <div class="lg:px-4 lg:w-1/2 w-full">
            <div class="w-full bg-gray-100 relative mb-8 rounded-xl overflow-hidden group">
              <img alt="gallery" class="w-full object-cover lg:h-[560px] h-full object-center block rounded-[32px]" src="img/sample/3.jpg">
              <div class="text-left left-0 absolute z-10 w-full hbox bottom-0 p-10">
                <div class="flex items-center">
                  <h2 class="text-4xl text-white font-medium title-font mb-2">Aroma Sense</h2>
                  <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5607 9.43934C10.9749 8.85355 10.0251 8.85355 9.43934 9.43934C8.85355 10.0251 8.85355 10.9749 9.43934 11.5607L21.8787 24H10.5C9.67157 24 9 24.6716 9 25.5C9 26.3284 9.67157 27 10.5 27H25.5C26.3284 27 27 26.3284 27 25.5V10.5C27 9.67157 26.3284 9 25.5 9C24.6716 9 24 9.67157 24 10.5V21.8787L11.5607 9.43934Z" fill="white" />
                  </svg>
                </div>
                <div class="group-hover:stroke-white text-white text-xl group-hover:block hidden">
                  Elevate your shower time with Aroma Sense Showerhead, infusing your <br>skin with the nourishing
                  benefits
                  of vitamin C.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full bg-gray-100 relative mb-8 rounded-xl overflow-hidden group">
          <img alt="gallery" class="w-full object-cover lg:h-[560px] h-full object-center block rounded-[32px]" src="img/sample/4.jpg">
          <div class="text-left left-0 absolute z-10 w-full hbox bottom-0 p-10">
            <div class="flex items-center">
              <h2 class="text-4xl text-white font-medium title-font mb-2">Aroma Sense</h2>
              <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5607 9.43934C10.9749 8.85355 10.0251 8.85355 9.43934 9.43934C8.85355 10.0251 8.85355 10.9749 9.43934 11.5607L21.8787 24H10.5C9.67157 24 9 24.6716 9 25.5C9 26.3284 9.67157 27 10.5 27H25.5C26.3284 27 27 26.3284 27 25.5V10.5C27 9.67157 26.3284 9 25.5 9C24.6716 9 24 9.67157 24 10.5V21.8787L11.5607 9.43934Z" fill="white" />
              </svg>
            </div>
            <div class="group-hover:stroke-white text-white text-xl group-hover:block hidden">
              Elevate your shower time with Aroma Sense Showerhead, infusing your <br>skin with the nourishing benefits
              of vitamin C.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="w-full pb-28 lg:px-20 ">
    <div class="container mx-auto flex flex-wrap">
      <div class="container mx-auto">
        <div class="text-center">
          <h2 class="font-bold text-[40px] capitalize py-20">Healthy skin starts here</h2>
        </div>
      </div>
      <div class="flex flex-wrap w-full">
        <div class="p-4 lg:w-1/3 w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <svg width="121" height="120" viewBox="0 0 121 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1250_9281)">
                <path d="M30.3841 64.0875C27.5265 64.0875 23.232 64.0052 18.8551 63.613C8.12966 62.6532 2.27192 60.4154 0.952839 56.7735C-0.111206 53.8419 1.78375 50.5401 6.74746 46.6843C11.8236 42.738 16.897 40.2836 21.8306 39.3896C25.8344 38.6628 29.7424 38.9535 33.4473 40.2562C39.7411 42.4665 43.2239 46.805 43.3693 46.9887L41.3673 48.5766C41.3344 48.5354 38.1258 44.5727 32.4902 42.6311C24.9679 40.0395 16.8339 42.0826 8.31335 48.7054C4.50418 51.6645 2.74362 54.2231 3.35517 55.9069C3.7775 57.0752 6.15784 59.9136 19.0827 61.0708C26.4816 61.7345 33.6475 61.4932 33.7188 61.4932L33.8066 64.0463C33.7764 64.0463 32.4601 64.0902 30.3814 64.0902L30.3841 64.0875Z" fill="black" />
                <path d="M79.5992 80.3689C75.8558 80.3689 71.4323 80.2701 66.943 79.9438C60.0843 79.4474 54.4022 78.5315 50.0555 77.2179C44.3404 75.4902 40.8219 73.0166 39.6015 69.8628C38.6718 67.4605 39.0695 64.7373 40.7862 61.7728C42.5222 58.7726 45.6978 55.3995 50.2227 51.7521C62.1686 42.1236 74.1775 38.1389 85.9149 39.9078C95.6668 41.3777 103.345 46.6403 108.073 50.7978C112.796 54.9497 115.535 58.7726 116.01 59.4582C116.487 59.9491 118.563 62.2033 119.775 65.475C121.05 68.9112 121.59 74.119 116.926 79.4228L115.006 77.7362C118.083 74.2397 118.881 70.414 117.378 66.3663C116.226 63.2646 114.148 61.2106 114.126 61.1914L114.032 61.1009L113.958 60.9912C113.931 60.9528 111.2 56.9434 106.321 52.6653C101.859 48.7547 94.6246 43.8047 85.509 42.4362C74.5147 40.7853 63.1805 44.5917 51.8243 53.7458C43.9811 60.067 40.5778 65.3214 41.9819 68.9441C43.6876 73.3456 52.6086 76.3485 67.1021 77.3989C78.5379 78.2271 89.5622 77.5744 89.6719 77.5689L89.8282 80.1193C89.7597 80.1248 85.5337 80.3744 79.5992 80.3744V80.3689Z" fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_1250_9281">
                  <rect width="120" height="120" fill="white" transform="translate(0.666504)" />
                </clipPath>
              </defs>
            </svg>

            <div class="w-full">
              <h2 class="title-font font-bold lg:text-2xl text-lg text-black pt-4">Neutralize chlorine</h2>

            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M41.6879 105.914C32.7571 105.914 24.3569 102.508 18.04 96.3261C11.7171 90.1379 8.23389 81.91 8.23389 73.1554C8.23389 66.8325 10.0775 60.6958 13.5627 55.4086C16.9568 50.2639 21.7312 46.1589 27.3728 43.5411C31.862 41.4559 36.678 40.4004 41.6879 40.4004C49.0801 40.4004 56.0842 42.7113 61.9417 47.0837C69.7735 52.9273 74.5637 61.779 75.0865 71.3712C75.1202 71.9336 75.138 72.5356 75.138 73.1554C75.138 78.5218 73.7835 83.8467 71.2211 88.5497C68.7418 93.1023 65.1437 97.0707 60.8169 100.029C55.1951 103.879 48.5811 105.914 41.6879 105.914ZM41.6879 42.246C36.9493 42.246 32.3947 43.246 28.1491 45.2163C17.1707 50.3115 10.0775 61.278 10.0775 73.1554C10.0775 90.2012 24.2579 104.069 41.686 104.069C48.2049 104.069 54.4604 102.146 59.7734 98.5063C68.2388 92.7221 73.2904 83.2447 73.2904 73.1554C73.2904 72.5732 73.2746 72.0089 73.2429 71.4782C72.7498 62.4285 68.229 54.0779 60.8368 48.5629C55.3 44.4302 48.6782 42.246 41.686 42.246H41.6879Z" fill="black" />
              <path d="M84.0233 109.245C74.9776 109.245 66.332 105.946 59.6804 99.9539L58.8091 99.1677L59.7774 98.5063C68.2409 92.7221 73.2945 83.2447 73.2945 73.1554C73.2945 72.5732 73.2786 72.0089 73.2469 71.4782C72.7538 62.4285 68.233 54.0779 60.8408 48.563L59.9002 47.8619L60.8031 47.1134C63.9814 44.4797 67.5617 42.4242 71.4449 41.0044C75.4628 39.537 79.6945 38.7925 84.0233 38.7925C88.063 38.7925 92.0274 39.442 95.8057 40.7252C110.277 45.6342 120 59.0146 120 74.0188C120 78.7773 119.048 83.3912 117.17 87.7378C115.357 91.9339 112.762 95.7003 109.457 98.936C102.663 105.586 93.6314 109.247 84.0253 109.247L84.0233 109.245ZM61.7874 99.34C67.9736 104.546 75.8252 107.398 84.0233 107.398C102.843 107.398 118.155 92.423 118.155 74.0168C118.155 59.8027 108.935 47.1253 95.2136 42.4698C91.6274 41.2519 87.863 40.6341 84.0253 40.6341C76.346 40.6341 68.8845 43.1747 62.8844 47.8085C70.1578 53.6462 74.5895 62.1671 75.0886 71.3693C75.1222 71.9316 75.14 72.5336 75.14 73.1534C75.14 78.5199 73.7856 83.8447 71.2231 88.5478C68.932 92.7557 65.6845 96.4647 61.7874 99.338V99.34Z" fill="black" />
              <path d="M61.4207 48.9967L60.8386 48.563C55.3018 44.4303 48.6799 42.246 41.6877 42.246C36.9491 42.246 32.3945 43.2461 28.1489 45.2164L26.937 45.7788L26.84 44.4461C26.7865 43.7194 26.7607 42.9926 26.7607 42.2837C26.7607 37.9172 27.6855 33.6796 29.5093 29.6914C31.2678 25.8458 33.7866 22.3923 36.9906 19.4298C43.5669 13.3485 52.3077 10 61.6009 10C70.8941 10 79.4131 13.2674 85.9597 19.2001C92.5163 25.1428 96.2352 33.0895 96.4292 41.5767L96.4589 42.8956L95.2094 42.4718C91.6232 41.254 87.8588 40.6361 84.0211 40.6361C75.9516 40.6361 68.1218 43.4401 61.9772 48.5333L61.4187 48.9967H61.4207ZM41.6877 40.4005C48.8364 40.4005 55.6226 42.5609 61.3593 46.658C64.397 44.2401 67.7852 42.3411 71.4427 41.0044C75.4606 39.5371 79.6923 38.7925 84.0211 38.7925C87.6073 38.7925 91.1341 39.3054 94.5242 40.3173C93.4193 24.5032 78.9378 11.8455 61.6009 11.8455C43.4065 11.8455 28.6063 25.4992 28.6063 42.2837C28.6063 42.5193 28.6103 42.755 28.6162 42.9946C32.747 41.2718 37.1392 40.4005 41.6877 40.4005Z" fill="black" />
              <path d="M16.7724 42.0539C13.5486 42.0539 10.9268 38.8063 10.9268 34.8141C10.9268 30.822 13.5486 27.5745 16.7724 27.5745C19.9962 27.5745 22.618 30.822 22.618 34.8141C22.618 38.8063 19.9962 42.0539 16.7724 42.0539ZM16.7724 29.418C14.5664 29.418 12.7723 31.8379 12.7723 34.8141C12.7723 37.7904 14.5664 40.2103 16.7724 40.2103C18.9784 40.2103 20.7725 37.7904 20.7725 34.8141C20.7725 31.8379 18.9784 29.418 16.7724 29.418Z" fill="black" />
              <path d="M4.19412 29.4181C1.84358 29.4181 0 26.428 0 22.6101C0 18.7922 1.8416 15.8 4.19412 15.8C6.54663 15.8 8.38823 18.7902 8.38823 22.6101C8.38823 26.43 6.54663 29.4181 4.19412 29.4181ZM4.19412 17.6456C3.08519 17.6456 1.84554 19.7685 1.84554 22.6101C1.84554 25.4517 3.08519 27.5745 4.19412 27.5745C5.30304 27.5745 6.54269 25.4517 6.54269 22.6101C6.54269 19.7685 5.30304 17.6456 4.19412 17.6456Z" fill="black" />
              <path d="M8.60235 51.8025C6.37063 51.8025 4.62207 49.4757 4.62207 46.5054C4.62207 43.535 6.37063 41.2083 8.60235 41.2083C10.8341 41.2083 12.5826 43.535 12.5826 46.5054C12.5826 49.4757 10.8341 51.8025 8.60235 51.8025ZM8.60235 43.0538C7.4459 43.0538 6.46766 44.6341 6.46766 46.5054C6.46766 48.3767 7.4459 49.9569 8.60235 49.9569C9.75881 49.9569 10.737 48.3767 10.737 46.5054C10.737 44.6341 9.75881 43.0538 8.60235 43.0538Z" fill="black" />
              <path d="M26.8243 86.3437C20.5332 86.3437 16.4103 84.7001 16.1846 84.609L16.8816 82.9001L16.5331 83.7536L16.8796 82.8981C16.947 82.9258 23.7965 85.6348 33.1333 83.9179C45.4999 81.6446 56.6506 72.6484 65.3794 57.8997L66.9676 58.8403C61.9398 67.3335 56.1575 73.9791 49.7811 78.5911C44.6484 82.302 39.1236 84.712 33.3591 85.7536C31.0026 86.1793 28.8046 86.3417 26.8224 86.3417L26.8243 86.3437Z" fill="black" />
              <path d="M60.5178 26.622L59.9376 24.8695C59.7198 24.9408 59.6841 25.0576 59.6821 25.0715C59.6841 25.0596 59.9019 23.9863 56.5078 20.3407L57.8583 19.0833C60.6742 22.1071 61.8208 24.1546 61.4683 25.5289C61.3079 26.1547 60.8703 26.5032 60.5158 26.62L60.5178 26.622Z" fill="black" />
              <path d="M52.0068 36.0695C51.189 36.0695 50.1553 35.3586 48.6187 33.7744L49.9434 32.4893C51.4979 34.0913 52.0266 34.22 52.0484 34.2259C52.0009 34.216 51.8286 34.218 51.6603 34.3527C51.5672 34.4279 51.4563 34.5606 51.4563 34.7606L53.3019 34.7527C53.3019 35.1982 53.0603 35.7468 52.5098 35.9705C52.3514 36.0359 52.183 36.0695 52.0068 36.0695Z" fill="black" />
              <path d="M71.6684 38.0539L69.8921 37.5568C70.4069 35.7152 71.6268 34.0459 73.2406 32.9785L74.2605 34.5172C73.011 35.3449 72.0684 36.634 71.6703 38.0539H71.6684Z" fill="black" />
              <path d="M83.6313 59.8483L81.8174 59.5136C82.1738 57.5848 84.2115 56.169 86.1779 56.4819L85.8868 58.3037C84.9026 58.1473 83.8075 58.8978 83.6313 59.8483Z" fill="black" />
              <path d="M44.1455 61.6207C43.8702 61.0563 43.4148 60.5712 42.8643 60.2504L43.791 58.6543C44.6544 59.1553 45.3692 59.9216 45.8029 60.8088L44.1455 61.6207Z" fill="black" />
              <path d="M26.1072 71.4484L25.1548 69.8682C25.6934 69.5434 26.0617 68.9394 26.0974 68.3256C26.133 67.7137 25.834 67.0741 25.3389 66.6939L26.4617 65.2285C27.4439 65.981 28.0102 67.2087 27.9409 68.4305C27.8716 69.6523 27.1686 70.8068 26.1092 71.4464L26.1072 71.4484Z" fill="black" />
              <path d="M25.9313 80.1001C25.7134 80.1001 25.4976 80.0823 25.2817 80.0447L25.5926 78.2248C26.2263 78.3337 26.9412 78.1159 27.5055 77.6426C28.0501 77.1872 28.365 76.5812 28.3709 75.9792L30.2165 75.9931C30.2066 77.1357 29.6521 78.2526 28.6897 79.0565C27.8818 79.7338 26.9036 80.0962 25.9313 80.0962V80.1001Z" fill="black" />
              <path d="M36.5827 98.8906C35.5906 97.647 34.844 96.253 34.3608 94.746L36.1173 94.1836C36.5311 95.4747 37.1728 96.6727 38.0243 97.7401L36.5807 98.8906H36.5827Z" fill="black" />
              <path d="M58.082 86.906L57.3296 85.2209C58.3078 84.7852 59.3276 84.4149 60.3593 84.1218L60.8643 85.8981C59.9157 86.1674 58.9811 86.506 58.082 86.908V86.906Z" fill="black" />
              <path d="M55.389 57.7453L53.7573 56.882C54.2821 55.8899 55.0564 55.0284 55.995 54.3948L57.0287 55.9235C56.3395 56.3889 55.7732 57.0186 55.389 57.7453Z" fill="black" />
              <path d="M87.2732 64.5898L86.5571 66.2908L88.9589 67.3019L89.675 65.6009L87.2732 64.5898Z" fill="black" />
              <path d="M89.8364 89.6123L88.7651 91.1152L90.5405 92.3807L91.6118 90.8778L89.8364 89.6123Z" fill="black" />
              <path d="M104.905 83.6211C104.487 82.7141 104.602 81.6092 105.198 80.8032L106.681 81.9023C106.487 82.1656 106.445 82.5538 106.582 82.8488L104.907 83.6211H104.905Z" fill="black" />
              <path d="M108.141 68.8148C107.725 68.0187 107.095 67.3434 106.325 66.8603L107.303 65.2959C108.352 65.9514 109.206 66.8722 109.774 67.9573L108.139 68.8128L108.141 68.8148Z" fill="black" />
              <path d="M106.242 61.3632C104.473 60.284 102.441 59.6127 100.366 59.4265L100.533 57.5889C102.889 57.8027 105.196 58.5632 107.204 59.7889L106.242 61.3632Z" fill="black" />
            </svg>

            <div class="w-full">
              <h2 class="title-font font-bold lg:text-2xl text-lg text-black pt-4">Remove dirt and <br>
                rust residues</h2>

            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <svg width="121" height="120" viewBox="0 0 121 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1250_9313)">
                <path d="M68.4592 27.1017C63.5203 27.7033 58.9706 29.2644 54.5704 31.2895C52.8756 32.0681 51.2673 33.0394 49.6236 33.9281C47.7256 34.9505 45.7923 34.9479 43.8235 33.9202C35.8371 38.7294 30.4892 49.9167 32.5654 58.0251C33.4974 57.3251 34.3035 56.6802 35.1528 56.0943C38.6722 53.6563 42.4157 52.9249 46.4502 54.6983C48.9276 55.7876 50.5044 57.6436 50.6539 60.3962C50.8112 63.2904 49.3916 65.4374 46.9103 66.8137C43.4814 68.7169 39.9463 68.3512 36.4426 66.9985C35.6365 66.6878 34.8972 66.2042 33.5878 65.52C33.7923 67.5608 33.9103 69.232 34.1383 70.8875C34.563 73.9704 35.2787 77.0258 35.4714 80.1205C36.0809 89.9197 30.1274 98.1617 20.6664 100.785C19.5181 101.103 18.6295 101.398 18.1183 102.617C16.6358 106.132 13.659 107.756 10.1908 108.877C7.37135 109.789 4.66202 111.048 1.88977 112.11C1.46508 112.271 0.946042 112.192 0.533154 112.22C-0.638663 110.619 0.328651 109.648 1.44148 109.093C3.43514 108.106 5.55464 107.363 7.63481 106.561C9.25884 105.936 11.0087 105.562 12.5108 104.733C13.6079 104.123 14.3944 102.947 15.7864 101.559C13.9382 101.162 12.7074 101.076 11.6261 100.627C9.23919 99.6403 6.71072 98.7712 4.63449 97.2927C1.992 95.4131 1.40608 92.4246 2.55823 89.9983C3.78117 87.4266 6.66747 85.8734 9.69532 86.2666C13.1793 86.7188 15.7156 88.6535 17.2649 91.7128C18.2087 93.5728 18.7474 95.6372 19.6007 97.973C23.069 97.5522 25.9985 95.8849 28.2596 93.093C31.4408 89.1608 32.998 84.6308 32.6008 79.5464C32.4474 77.5645 32.066 75.5984 31.7593 73.6283C31.5273 72.1537 31.0987 70.6948 31.0083 69.2124C30.7448 65.0245 30.3869 60.9074 29.3409 56.7746C28.1691 52.1424 29.7774 47.6399 31.948 43.4796C34.1029 39.3468 37.0364 35.7999 40.5518 32.7445C41.5074 31.9148 42.4315 31.2188 42.3647 29.7166C42.2506 27.1174 43.6859 25.1749 45.593 23.6806C47.4491 22.2296 49.4073 20.8258 51.515 19.7955C57.3426 16.9485 63.3354 14.5145 69.8827 13.7791C70.6219 13.6966 71.3101 13.0281 71.9904 12.5877C72.1791 12.4658 72.242 12.163 72.3875 11.9624C76.4692 6.32355 80.7868 6.72464 83.9209 13.0281C84.1961 13.5825 84.4635 14.137 84.495 14.1999C90.7237 16.0952 96.6221 17.6367 102.336 19.6854C109.17 22.1391 114.081 27.0427 117.77 33.2006C119.693 36.4133 120.259 39.9248 119.897 43.6408C119.567 47.0462 117.915 49.5156 114.864 50.9784C110.633 53.0075 106.158 54.0299 101.451 53.6248C95.234 53.094 91.9584 49.8813 91.2467 43.7155C91.0343 41.8595 91.0343 39.9799 90.7827 38.1278C90.2636 34.3056 88.4941 32.0367 84.8332 30.4913C84.1726 32.0327 83.6063 33.641 82.8159 35.1314C81.3177 37.9469 79.5678 40.7624 75.84 40.3967C72.3521 40.0546 70.9405 37.2115 70.036 34.2741C69.3479 32.0406 69.0215 29.697 68.471 27.1095L68.4592 27.1017ZM85.5135 27.1253C91.4394 30.3615 93.3269 33.3343 93.8105 39.9838C93.901 41.2225 93.9717 42.469 94.1448 43.6998C94.7582 48.0528 96.7951 50.1605 101.117 50.6638C105.56 51.1868 109.783 50.2352 113.775 48.273C115.992 47.1838 117.263 45.2019 117.149 42.8661C117.023 40.3102 116.685 37.5733 115.615 35.3005C113.527 30.8688 110.302 27.2668 106.064 24.589C100.7 21.1993 94.77 19.5085 88.6435 18.3248C87.7076 18.144 86.7324 18.1833 85.5449 18.1086C85.537 21.219 85.5292 24.0542 85.5213 27.1253H85.5135ZM82.7687 26.5315C82.6193 23.2952 82.7097 20.6645 82.3086 18.1125C82.0059 16.1975 81.2981 14.251 80.3504 12.5562C79.2218 10.5429 77.7275 10.4839 76.0878 12.0411C75.5569 12.5483 75.0693 13.15 74.7193 13.7949C71.0781 20.523 70.6652 27.5146 73.3588 34.6241C73.7874 35.7487 74.975 37.0307 76.0721 37.3531C77.6764 37.825 78.8836 36.3504 79.4813 35.0134C80.779 32.0957 81.8053 29.0599 82.7687 26.5276V26.5315ZM69.7647 16.9918C69.222 16.9328 68.7148 16.7441 68.2783 16.8463C61.5934 18.3956 55.1642 20.6134 49.3719 24.3805C48.2434 25.1159 47.1817 26.04 46.3205 27.0702C44.7043 29.0049 44.8734 29.8503 46.8868 31.9187C50.3944 30.3183 53.8036 28.4937 57.3977 27.196C61.098 25.8591 64.9791 25.0372 68.99 23.9323C69.2417 21.6751 69.4973 19.3669 69.7607 16.9879L69.7647 16.9918ZM34.3231 61.5995C36.9656 64.6824 39.8912 65.8621 43.5247 65.0402C46.1907 64.4347 47.9013 62.6179 47.7676 60.5771C47.6378 58.5756 45.6992 56.8926 42.9781 56.692C39.152 56.4089 36.2971 58.0093 34.3231 61.6034V61.5995ZM15.8415 98.0398C15.6645 93.4981 13.5922 90.3051 10.4071 89.3102C8.29152 88.6496 6.1091 89.4242 5.29119 91.1269C4.57552 92.6212 5.10637 94.1784 6.95847 95.5546C9.52231 97.4618 12.4282 98.2404 15.8375 98.0359L15.8415 98.0398Z" fill="black" />
                <path d="M70.8345 55.9215C70.3823 59.9796 66.7607 62.8305 62.7144 62.3035C58.7704 61.7923 55.8133 57.9662 56.3402 54.0536C56.8593 50.2236 60.3905 47.5064 64.3345 47.8996C68.428 48.3086 71.2907 51.8358 70.8345 55.9175V55.9215ZM67.9836 55.7366C68.3336 53.2396 66.6467 51.0297 64.1694 50.7348C61.7707 50.4517 59.5725 52.2369 59.254 54.7378C58.9552 57.0539 60.5516 59.1381 62.9189 59.5156C65.3412 59.9048 67.6415 58.1904 67.9836 55.7366Z" fill="black" />
                <path d="M79.6348 56.578C80.1027 52.3233 83.4059 49.6886 87.6527 50.1841C91.8956 50.6756 94.5853 53.9984 94.1331 58.1823C93.6887 62.3073 90.2126 65.1189 86.1034 64.6745C82.0689 64.238 79.1865 60.6321 79.6348 56.578ZM86.536 61.9377C88.9189 62.1343 91.2861 60.1681 91.4945 57.8166C91.703 55.473 89.6503 53.0114 87.3539 52.8541C84.9906 52.689 82.6234 54.6983 82.4228 57.038C82.2105 59.5272 84.0586 61.7332 86.536 61.9416V61.9377Z" fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_1250_9313">
                  <rect width="120" height="120" fill="white" transform="translate(0.333008)" />
                </clipPath>
              </defs>
            </svg>

            <div class="w-full">
              <h2 class="title-font font-bold lg:text-2xl text-lg text-black pt-4">Help restore skin's <br>
                natural moisture</h2>

            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <svg width="97" height="120" viewBox="0 0 97 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M86.5824 118.002L88.1035 116.32C87.9356 116.169 71.2396 101.033 54.1591 81.7452C44.1439 70.4353 35.9614 59.9358 29.8355 50.5364C22.2347 38.8711 17.8198 28.9143 16.7124 20.9412L14.466 21.2527C15.6196 29.5593 20.1538 39.8325 27.9395 51.7825C34.1263 61.2768 42.3818 71.8688 52.4724 83.2639C69.6333 102.642 86.412 117.851 86.5799 118.002H86.5824Z" fill="black" />
              <path d="M55.5583 120C58.1163 120 61.582 119.45 66.0116 118.347C71.2759 117.036 76.0121 115.385 76.0584 115.368L78.4946 114.517L76.219 113.3C70.3048 110.136 65.2035 109.427 61.9641 109.388C57.9142 109.34 54.3195 110.318 52.1023 112.066C50.2721 113.509 49.5079 115.417 50.0019 117.301C50.221 118.136 50.7856 118.817 51.6301 119.267C52.5477 119.754 53.8522 120 55.5583 120ZM72.6826 114.105C65.537 116.383 55.5291 118.771 52.6962 117.264C52.3262 117.067 52.2337 116.872 52.1948 116.726C51.8638 115.466 52.7253 114.465 53.5066 113.847C56.8774 111.187 64.4929 110.545 72.6826 114.105Z" fill="black" />
              <path d="M38.7505 107.213C41.3644 107.213 45.3875 104.837 51.0461 99.9551C55.113 96.4455 58.5471 92.8751 58.5812 92.841L60.3579 90.9889L57.7927 90.9208C51.068 90.7431 46.2028 92.3811 43.3041 93.7878C39.6778 95.5475 36.9251 98.0178 35.7544 100.566C34.7809 102.683 34.9805 104.735 36.3021 106.198C36.8886 106.845 37.7137 107.196 38.6872 107.21C38.7067 107.21 38.7286 107.21 38.7505 107.21V107.213ZM55.0108 93.2256C49.7465 98.4023 42.0142 104.944 38.7554 104.944C38.7432 104.944 38.731 104.944 38.7213 104.944C38.2783 104.937 38.0958 104.798 37.9862 104.677C37.0955 103.693 37.4021 102.413 37.8159 101.515C39.5901 97.6576 46.0787 93.7002 55.0108 93.2256Z" fill="black" />
              <path d="M43.7711 84.4005C44.1167 84.4005 44.3357 84.3956 44.3966 84.3932L46.4678 84.3299L45.2971 82.6189C45.19 82.4607 42.6102 78.7054 39.3732 74.9719C34.7514 69.6394 31.2954 67.2275 28.8104 67.595C27.8418 67.7386 26.5421 68.3665 25.8558 70.5399C24.8287 73.7866 25.1646 76.5685 26.8585 78.8076C30.8256 84.05 41.1012 84.4005 43.7711 84.4005ZM29.3094 69.8293C30.1028 69.8293 32.4831 70.4888 37.6574 76.459C39.4535 78.5301 41.0647 80.6451 42.1258 82.0884C38.5092 81.9156 31.4317 81.1027 28.662 77.4398C27.4207 75.7994 27.209 73.7672 28.0146 71.2263C28.4186 69.9485 28.9613 69.8682 29.139 69.8414C29.1853 69.8341 29.2412 69.8293 29.3094 69.8293Z" fill="black" />
              <path d="M30.5972 58.6801L27.9686 56.5456C27.8543 56.4507 25.0992 54.2237 21.704 52.0966C16.8923 49.0835 13.4217 47.8812 11.095 48.4215C9.93161 48.6917 9.05302 49.4072 8.55408 50.4903C8.05515 51.5733 8.10141 52.654 8.69039 53.6129C9.87566 55.5405 13.3073 56.9083 19.1777 57.7942C23.2957 58.4172 27.0559 58.556 27.2141 58.5608L30.5996 58.6825L30.5972 58.6801ZM12.2705 50.5584C14.9283 50.5584 19.7278 53.3354 23.5464 56.0443C17.9949 55.5234 11.7667 54.287 10.6204 52.4203C10.4841 52.1964 10.3867 51.9238 10.6106 51.437C10.8175 50.9892 11.1242 50.741 11.6061 50.629C11.8081 50.5828 12.0296 50.5584 12.2705 50.5584Z" fill="black" />
              <path d="M18.8149 38.0899L17.0383 35.7413C13.7648 31.414 6.94766 25.6264 3.18255 26.4879C2.02162 26.7532 1.24279 27.6026 0.984802 28.8828C0.814436 29.7346 1.00672 30.6084 1.54459 31.4067C4.0928 35.1937 14.7189 37.3111 15.9212 37.5399L18.8125 38.0899H18.8149ZM4.0247 28.6638C5.82085 28.6638 9.72221 31.1098 13.0371 34.5536C9.10645 33.5217 4.59172 31.874 3.42349 30.1387C3.16064 29.7468 3.17283 29.4888 3.20447 29.3282C3.31399 28.783 3.53546 28.7319 3.68393 28.6979C3.78615 28.6735 3.90057 28.6638 4.02226 28.6638H4.0247Z" fill="black" />
              <path d="M15.6973 20.6468L15.4514 17.7384C15.4368 17.5802 15.1131 13.8005 14.3465 9.79683C12.8667 2.0719 11.0973 0.597012 9.89503 0.156491C9.15515 -0.113662 8.00638 -0.16722 6.72619 1.1154C5.65045 2.19358 5.12232 3.54923 5.15396 5.14825C5.27565 10.9699 13.2148 18.359 13.5531 18.6705L15.6973 20.6492V20.6468ZM9.03588 2.2739C9.06265 2.2739 9.08944 2.27878 9.11378 2.28608C9.27685 2.34449 10.7469 3.07463 12.1171 10.2227C12.4214 11.8072 12.655 13.377 12.8254 14.6791C10.4232 12.0019 7.4807 8.04447 7.41986 5.09712C7.40038 4.12846 7.69731 3.34966 8.3301 2.71687C8.47126 2.57571 8.7998 2.2739 9.03588 2.2739Z" fill="black" />
              <path d="M21.8742 33.4341L23.1106 31.5358C23.1836 31.4238 24.9117 28.7588 26.4133 25.5608C28.5721 20.9584 29.1148 17.7579 28.0756 15.7719C27.6107 14.8836 26.5861 13.8103 24.3567 13.747C22.0641 13.6789 20.8106 14.7449 20.1608 15.6478C18.7954 17.5437 18.5545 20.7953 19.4477 25.3101C20.083 28.5203 21.0565 31.1975 21.0979 31.3094L21.8767 33.4366L21.8742 33.4341ZM24.1499 16.0105C24.1961 16.0105 24.2423 16.0105 24.291 16.0105C25.5201 16.0445 25.8925 16.4899 26.0653 16.8209C27.0875 18.7728 24.8557 24.0785 22.4803 28.2136C21.4556 24.6529 20.3872 19.206 21.9984 16.9669C22.2977 16.5508 22.8453 16.0056 24.1499 16.0056V16.0105Z" fill="black" />
              <path d="M32.2986 53.4132L33.9681 50.977C34.0557 50.8504 36.1172 47.8325 37.9839 44.3059C40.6709 39.2338 41.5081 35.8435 40.5467 33.9451C40.1792 33.2198 39.3785 32.3461 37.6505 32.2901C36.2511 32.2463 35.0123 32.7769 34.0631 33.8259C32.4373 35.6244 31.5879 39.0074 31.5367 43.8824C31.5002 47.3822 31.8921 50.3588 31.9067 50.4829L32.2961 53.4108L32.2986 53.4132ZM37.4826 34.556C37.5142 34.556 37.5459 34.556 37.5775 34.556C38.3271 34.5803 38.4659 34.8529 38.5243 34.9697C38.736 35.3859 39.1741 37.2137 35.9809 43.2447C35.2702 44.5882 34.5182 45.8684 33.8708 46.9295C33.6615 42.9697 33.8367 37.4571 35.7473 35.347C36.234 34.8091 36.789 34.556 37.485 34.556H37.4826Z" fill="black" />
              <path d="M44.9641 71.903L46.3538 70.1701C46.4317 70.0752 48.2619 67.7826 49.929 64.9788C52.3361 60.9265 53.1198 58.0084 52.3264 56.0564C51.9637 55.1632 51.0802 54.0412 48.9433 53.7808C46.7505 53.5131 45.463 54.4185 44.7669 55.2241C43.3358 56.8815 42.8515 59.8702 43.3212 64.1124C43.6547 67.1157 44.3483 69.6566 44.3775 69.7613L44.9665 71.903H44.9641ZM48.1694 56.0005C48.3227 56.0005 48.4882 56.0102 48.6659 56.0321C49.929 56.1854 50.1432 56.7136 50.2235 56.9107C50.9731 58.7555 48.5296 63.2995 46.0227 66.8383C45.3048 63.1583 44.9811 58.444 46.4803 56.7063C46.7529 56.3923 47.2129 56.0005 48.167 56.0005H48.1694Z" fill="black" />
              <path d="M57.6904 84.52L58.8878 84.0429C60.8227 83.2714 63.2638 79.3797 64.7655 76.2839C65.7877 74.1762 68.0706 68.9143 67.2017 65.5484C66.6541 63.4236 64.931 62.3795 62.4728 62.6886C60.5574 62.9296 59.0387 63.8569 57.9605 65.4462C54.2417 70.9247 57.2426 82.7701 57.3716 83.2739L57.6928 84.5224L57.6904 84.52ZM63.3344 64.8985C64.5124 64.8985 64.8385 65.4754 65.004 66.113C65.4688 67.9165 64.5951 71.4333 62.7235 75.2934C61.4287 77.9633 60.1218 79.8762 59.1726 80.9544C58.3913 77.0019 57.6125 69.9901 59.837 66.719C60.5428 65.6798 61.4993 65.0957 62.7551 64.9375C62.9693 64.9107 63.1616 64.8985 63.3369 64.8985H63.3344Z" fill="black" />
              <path d="M75.8686 100.992L76.8202 98.8307C76.8883 98.6774 78.4971 95.0023 79.7165 90.6798C81.4201 84.6318 81.4737 80.4237 79.8698 78.1749C79.1786 77.2038 77.8108 76.0916 75.2309 76.3033C72.6048 76.5199 71.3222 77.895 70.7065 79.0121C69.3241 81.5214 69.6113 85.671 71.5632 91.3418C72.9651 95.4112 74.7028 98.7577 74.7758 98.8988L75.8686 100.992ZM75.871 78.5448C77.1804 78.5448 77.7231 79.073 78.02 79.4916C79.1688 81.1028 78.9984 84.8509 77.5382 90.0422C76.9443 92.1523 76.241 94.131 75.6885 95.5791C73.6344 91.0473 70.8768 83.4003 72.69 80.1074C73.2084 79.1655 74.0748 78.6763 75.4134 78.5643C75.5741 78.5521 75.7274 78.5448 75.8686 78.5448H75.871Z" fill="black" />
              <path d="M90.4762 113.852L91.6177 110.963C91.6347 110.92 93.3165 106.648 94.6673 102.053C97.2422 93.2963 96.4269 90.9258 95.5921 89.906C95.0007 89.1832 94.1124 88.8887 93.0902 89.0737C91.1699 89.4217 89.695 90.4439 88.7093 92.1111C85.2216 98.0082 89.3129 110.382 89.4881 110.905L90.4762 113.85V113.852ZM93.6718 91.2884C93.7886 91.2884 93.8178 91.3249 93.8373 91.3468C94.0344 91.5878 94.9009 93.2087 92.4939 101.401C91.9049 103.402 91.2526 105.344 90.7074 106.884C89.6877 102.63 88.7945 96.4189 90.6612 93.2671C91.3062 92.1768 92.2334 91.5367 93.4941 91.3079C93.5696 91.2933 93.628 91.2884 93.6718 91.2884Z" fill="black" />
            </svg>


            <div class="w-full">
              <h2 class="title-font font-bold lg:text-2xl text-lg text-black pt-4">Benefit of negative ions</h2>

            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M59.082 16.7353C53.0611 16.7353 47.3882 15.9333 43.1104 14.479C40.9794 13.7553 39.2954 12.9011 38.102 11.9408C36.7433 10.8483 36.0527 9.64625 36.0527 8.36762C36.0527 7.08899 36.7416 5.88689 38.102 4.7944C39.2954 3.83586 40.9811 2.98173 43.1104 2.2563C47.3882 0.801967 53.0611 0 59.082 0C65.1029 0 70.7759 0.801967 75.0536 2.2563C77.1847 2.97999 78.8686 3.83412 80.062 4.7944C81.4207 5.88689 82.1113 7.08899 82.1113 8.36762C82.1113 9.64625 81.4224 10.8483 80.062 11.9408C78.8686 12.8994 77.1829 13.7536 75.0536 14.479C70.7759 15.9333 65.1029 16.7353 59.082 16.7353ZM59.082 1.62131C53.2334 1.62131 47.7465 2.39201 43.6323 3.79241C39.9008 5.06061 37.674 6.77238 37.674 8.36936C37.674 9.96635 39.9008 11.6764 43.6323 12.9464C47.7465 14.345 53.2334 15.1174 59.082 15.1174C64.9307 15.1174 70.4175 14.3468 74.5317 12.9464C78.2632 11.6782 80.49 9.96635 80.49 8.36936C80.49 6.77238 78.2632 5.06235 74.5317 3.79241C70.4175 2.39375 64.9289 1.62131 59.082 1.62131Z" fill="black" />
              <path d="M58.8627 50.9922C54.611 50.9922 50.6047 50.4251 47.5777 49.3953C44.2307 48.2558 42.4614 46.6936 42.4614 44.8774H44.0828C44.0828 45.8743 45.6224 47.0189 48.0996 47.8609C50.9631 48.8351 54.785 49.3709 58.8627 49.3709C62.9404 49.3709 66.7624 48.8351 69.6259 47.8609C72.1031 47.0172 73.6427 45.8743 73.6427 44.8774H75.264C75.264 46.6954 73.4948 48.2575 70.1478 49.3953C67.1208 50.4251 63.1126 50.9922 58.8627 50.9922Z" fill="black" />
              <path d="M58.5861 33.1765C50.8395 33.1765 43.5504 32.7173 38.0619 31.884C35.3602 31.4734 33.2292 30.9916 31.7261 30.4523C30.5223 30.0208 28.9219 29.2936 28.9219 27.9837C28.9219 26.5816 30.7833 25.8144 32.1837 25.3586C33.9633 24.7811 36.4649 24.2783 39.6206 23.8643L39.8311 25.4717C37.0129 25.8422 34.6522 26.3015 33.0065 26.8007C31.0721 27.387 30.6406 27.8602 30.5571 27.9837C30.6963 28.1872 31.7783 29.3424 38.8482 30.3601C44.1924 31.1307 51.2031 31.5534 58.5878 31.5534C65.9726 31.5534 72.9816 31.129 78.3275 30.3601C85.3957 29.3424 86.4795 28.1872 86.6186 27.9837C86.4777 27.7767 85.3748 26.6007 78.1135 25.5761L78.3397 23.9704C81.2675 24.3844 83.583 24.8767 85.2217 25.4352C86.5229 25.8788 88.2521 26.625 88.2521 27.9837C88.2521 29.3424 86.6517 30.0191 85.4479 30.4523C83.9448 30.9916 81.8138 31.4734 79.1121 31.884C73.6236 32.7173 66.3344 33.1765 58.5878 33.1765H58.5861Z" fill="black" />
              <path d="M58.862 55.9918C52.18 55.9918 45.886 54.8976 41.1368 52.911C36.165 50.8304 33.4268 47.9774 33.4268 44.8756C33.4268 41.7738 36.3528 38.7243 41.6674 36.6245L42.2624 38.1328C37.6767 39.9437 35.0481 42.4018 35.0481 44.8756C35.0481 47.3494 37.4958 49.6283 41.7631 51.4149C46.3174 53.3215 52.3888 54.3705 58.862 54.3705C65.3351 54.3705 71.4065 53.3215 75.9609 51.4149C80.2282 49.6283 82.6759 47.245 82.6759 44.8756C82.6759 42.5062 80.0786 39.975 75.552 38.1693L76.1522 36.6628C81.4042 38.759 84.2954 41.6747 84.2954 44.8756C84.2954 48.0765 81.5573 50.8304 76.5854 52.911C71.8379 54.8976 65.5439 55.9918 58.8602 55.9918H58.862Z" fill="black" />
              <path d="M59.7482 120C49.7575 120 40.3582 119.161 33.2779 117.639C25.6252 115.994 21.7441 113.824 21.7441 111.19C21.7441 108.557 25.6252 106.387 33.2779 104.742C40.3565 103.219 49.7575 102.381 59.7482 102.381C69.7389 102.381 79.1382 103.219 86.2185 104.742C93.8712 106.387 97.7523 108.557 97.7523 111.19C97.7523 113.824 93.8712 115.994 86.2185 117.639C79.1399 119.161 69.7389 120 59.7482 120ZM59.7482 104C49.8688 104 40.5896 104.827 33.6189 106.325C26.0584 107.951 23.3655 109.903 23.3655 111.189C23.3655 112.474 26.0584 114.426 33.6189 116.053C40.5896 117.552 49.8688 118.377 59.7482 118.377C69.6276 118.377 78.9068 117.55 85.8775 116.053C93.438 114.426 96.1309 112.474 96.1309 111.189C96.1309 109.903 93.438 107.951 85.8775 106.325C78.9068 104.825 69.6276 104 59.7482 104Z" fill="black" />
              <path d="M21.8671 111.618C11.8903 95.6607 8.76247 81.173 12.5688 68.5606C13.7465 64.6569 15.6027 60.9428 18.0834 57.5227C20.0649 54.7914 22.4447 52.2411 25.162 49.943C29.7877 46.0271 33.7384 44.2145 33.9037 44.1396L34.5734 45.6166L34.2394 44.879L34.5752 45.6166C34.5369 45.634 30.6262 47.4328 26.1658 51.22C22.0724 54.6958 16.6587 60.6088 14.1171 69.0495C10.4603 81.1904 13.5308 95.2258 23.2432 110.762L21.8689 111.622L21.8671 111.618Z" fill="black" />
              <path d="M97.6004 111.658L96.2783 110.721C106.365 96.4836 109.842 83.3181 106.615 71.5912C104.1 62.4511 97.8753 55.8857 93.0948 51.9872C87.8828 47.7355 83.2032 45.6393 83.1562 45.6184L83.8121 44.1362C84.0086 44.2232 88.7022 46.3229 94.0776 50.6981C97.2368 53.2711 99.9716 56.0962 102.202 59.0988C104.999 62.8652 107.008 66.9185 108.174 71.1493C111.542 83.372 107.984 97.0003 97.6004 111.66V111.658Z" fill="black" />
              <path d="M76.9703 94.4381L76.5492 92.8724C77.9653 92.4914 78.8525 91.86 79.2596 90.9397C80.2808 88.6294 78.2837 84.7622 76.6797 81.6552C75.9073 80.1574 75.2393 78.8648 74.9592 77.8593C74.4826 76.1371 75.0132 74.4827 76.5371 72.9397C77.7601 71.7011 79.4597 70.6781 80.9575 69.7735C81.7212 69.3125 82.4432 68.8793 83.0155 68.467C85.992 66.3325 85.7728 65.4958 85.738 65.4088C85.6789 65.2592 84.9447 63.9492 77.4347 64.151C73.3692 64.2589 69.3959 64.7617 69.3576 64.7669L69.1523 63.1594C69.1924 63.1542 73.237 62.6428 77.3808 62.5314C85.3344 62.3174 86.82 63.7335 87.2463 64.8173C87.9647 66.6422 85.7154 68.5279 83.9601 69.7874C83.3356 70.2363 82.5858 70.6868 81.7943 71.1652C78.3915 73.2162 75.843 74.9785 76.5214 77.4296C76.7563 78.2734 77.4173 79.5572 78.1201 80.9159C79.8824 84.3291 82.0778 88.579 80.7435 91.599C80.1346 92.9768 78.8647 93.9336 76.9703 94.4433V94.4381Z" fill="black" />
              <path d="M53.0244 45.1698L51.457 44.7558C51.7736 43.5519 52.7113 42.5464 53.903 42.1289L54.4388 43.6598C53.7603 43.8981 53.2054 44.4896 53.0262 45.168L53.0244 45.1698Z" fill="black" />
              <path d="M63.7089 45.7541L63.3923 45.0844C62.7591 43.7466 61.6753 40.9301 61.3726 39.3401L62.9644 39.0356C63.1888 40.2082 63.9664 42.3375 64.5596 43.7257C66.3079 43.1447 68.1189 42.7637 69.9577 42.5932L70.1073 44.2076C68.1572 44.3885 66.2383 44.8234 64.403 45.4984L63.7072 45.7541H63.7089Z" fill="black" />
              <path d="M61.8748 27.8859L60.3096 28.3088L61.3596 32.195L62.9248 31.7721L61.8748 27.8859Z" fill="black" />
              <path d="M67.164 25.2823C64.2866 25.2823 61.3867 24.4317 59.0068 22.859L59.901 21.5073C62.4113 23.1669 65.5792 23.9237 68.5905 23.581L68.7731 25.1919C68.2408 25.2527 67.7015 25.2823 67.164 25.2823Z" fill="black" />
              <path d="M49.5657 27.074L47.9443 27.0566C47.9722 24.4002 48.374 21.7629 49.1377 19.2144L50.6912 19.6806C49.971 22.083 49.5918 24.5707 49.5657 27.074Z" fill="black" />
              <path d="M60.0539 10.3091L48.9062 10.0429L52.683 8.57469C53.4102 8.29287 54.0747 7.84227 54.614 7.28211L51.1434 7.04902L51.2513 5.43115L57.4583 5.84865L56.8459 6.96204C56.5189 7.557 56.0962 8.10321 55.6021 8.58161L60.0886 8.68949L60.0504 10.3108L60.0539 10.3091Z" fill="black" />
              <path d="M67.3881 12.3271L65.7667 12.3114C65.7806 10.8641 64.8604 9.40447 63.5278 8.76255L64.2307 7.30127C66.139 8.2198 67.4072 10.2395 67.3863 12.3253L67.3881 12.3271Z" fill="black" />
              <path d="M75.0686 21.9194L73.6334 21.1644C74.3153 19.8683 73.7447 18.0435 72.4365 17.3354L73.2072 15.9089C75.2895 17.0362 76.1593 19.844 75.0686 21.9194Z" fill="black" />
              <path d="M46.2642 39.6808C45.3021 38.4804 44.8446 36.9217 45.0082 35.4048L46.6208 35.5787C46.5025 36.6747 46.8348 37.8003 47.5289 38.6683L46.2642 39.6825V39.6808Z" fill="black" />
              <path d="M37.6731 8.2142L36.0762 8.49463L42.4872 45.0024L44.0841 44.722L37.6731 8.2142Z" fill="black" />
              <path d="M80.4779 8.1788L73.6323 44.6873L75.2259 44.9861L82.0715 8.47761L80.4779 8.1788Z" fill="black" />
              <path d="M30.483 27.8193L28.9165 28.2373L33.4238 45.1296L34.9903 44.7117L30.483 27.8193Z" fill="black" />
              <path d="M86.6464 27.7927L82.6938 44.6841L84.2725 45.0535L88.225 28.1621L86.6464 27.7927Z" fill="black" />
            </svg>


            <div class="w-full">
              <h2 class="title-font font-bold lg:text-2xl text-lg text-black pt-4">Nutrition for the skin</h2>

            </div>
          </div>
        </div>
        <div class="p-4 lg:w-1/3 w-1/2">
          <div class="h-full flex flex-col items-center text-center">
            <svg width="121" height="120" viewBox="0 0 121 120" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1250_9362)">
                <path d="M12.56 95.0599C10.3023 93.6063 8.33977 90.477 6.56285 85.4921C5.2161 81.7189 3.99305 76.8914 2.92465 71.1417C1.11399 61.4052 0.360486 52.231 0.352051 52.141L2.96401 51.9302C2.97244 52.0201 3.71751 61.0763 5.50287 70.6835C7.78307 82.9307 10.7915 90.806 13.977 92.8584L12.5572 95.0599H12.56Z" fill="black" />
                <path d="M119.729 70.6805L117.148 70.225C119.02 59.5888 115.891 49.5458 112.933 42.9948C109.7 35.8309 105.963 31.1524 105.924 31.1074L107.962 29.4626C108.122 29.6595 111.915 34.3998 115.289 41.8477C118.416 48.7502 121.722 59.3582 119.726 70.6805H119.729Z" fill="black" />
                <path d="M26.075 63.0751C23.8538 63.0751 21.7226 63.002 19.6955 62.8558C14.3844 62.4706 10.0602 61.5906 6.84091 60.241C3.23364 58.7284 1.09965 56.6591 0.500781 54.0893C0.0537387 52.1746 0.500779 50.1306 1.83347 48.0106C7.18392 39.4943 26.6935 30.2133 50.3812 24.9191C64.5487 21.7532 78.2749 20.4402 89.0292 21.219C94.3403 21.6042 98.6645 22.4842 101.887 23.8338C105.494 25.3464 107.628 27.4158 108.227 29.9855C108.674 31.9002 108.227 33.9443 106.894 36.0642C101.544 44.5805 82.034 53.8615 58.3464 59.1558C46.8498 61.7256 35.6428 63.0751 26.0806 63.0751H26.075ZM82.6301 23.6201C73.2675 23.6201 62.2629 24.9472 50.9491 27.4776C28.2596 32.5497 8.97209 41.5665 4.049 49.4052C3.10431 50.9094 2.76692 52.2871 3.04808 53.496C3.86906 57.0162 10.1642 59.541 19.8839 60.2467C30.3908 61.0086 43.8442 59.7153 57.77 56.6029C80.4595 51.5308 99.747 42.514 104.67 34.6753C105.615 33.1711 105.952 31.7934 105.671 30.5844C104.85 27.0643 98.5549 24.5395 88.8352 23.8338C86.8643 23.6904 84.7922 23.6201 82.6301 23.6201Z" fill="black" />
                <path d="M28.24 99.2772C24.0816 99.2772 20.6684 98.9848 18.0677 98.4C14.4407 97.5874 12.4529 96.2322 11.9918 94.2557C11.7472 93.207 11.9834 92.0964 12.6975 90.9605C15.1942 86.9849 23.4519 83.0206 29.941 80.3974C39.0393 76.717 50.8227 73.1744 63.1177 70.4275C77.246 67.2701 90.7978 65.4003 101.277 65.1614C106.436 65.0433 110.597 65.3301 113.642 66.0105C117.269 66.823 119.257 68.1782 119.718 70.1547C119.962 71.2035 119.726 72.3141 119.012 73.45C116.515 77.4255 108.258 81.3899 101.769 84.0131C92.6703 87.6934 80.887 91.236 68.5919 93.9829C54.4637 97.1404 40.9118 99.0101 30.433 99.249C29.6795 99.2659 28.9485 99.2744 28.24 99.2744V99.2772ZM103.447 67.7565C102.772 67.7565 102.069 67.7649 101.336 67.7818C91.0255 68.0151 77.6536 69.8652 63.6885 72.986C51.5284 75.7048 39.894 79.1996 30.9222 82.8294C22.3834 86.2848 16.5494 89.7572 14.9159 92.3579C14.5869 92.8808 14.4632 93.3194 14.5419 93.6624C14.8287 94.8939 18.4866 96.9042 30.3712 96.6315C40.6813 96.3981 54.0532 94.5481 68.0155 91.4272C80.1756 88.7084 91.81 85.2136 100.782 81.5839C109.321 78.1284 115.155 74.6561 116.788 72.0554C117.117 71.5324 117.241 71.0938 117.162 70.7508C116.892 69.5952 113.656 67.7565 103.444 67.7565H103.447Z" fill="black" />
                <path d="M29.3981 70.7422C13.7656 70.7422 4.34683 67.8266 3.89697 67.6832L4.68703 65.1837C4.80793 65.223 17.1058 69.013 36.5423 67.9165C54.4746 66.9044 82.3318 61.4021 113.211 40.9421L114.659 43.1267C100.79 52.3178 86.3496 59.3299 71.7378 63.969C60.0359 67.686 48.1992 69.8959 36.5536 70.5397C34.0456 70.6775 31.6558 70.7394 29.3981 70.7394V70.7422Z" fill="black" />
                <path d="M18.3766 51.6095L16.6025 49.6836C16.8753 49.4305 23.4122 43.4615 33.7982 38.4906C39.9106 35.5666 46.0848 33.6069 52.1494 32.6707C59.7407 31.4982 67.1774 31.934 74.2485 33.9612C75.6656 34.248 77.1754 35.0633 77.2316 36.5029C77.3075 38.4119 75.1229 40.2985 64.228 43.2985C60.6376 44.2881 58.8438 45.0079 57.9526 45.4578C59.4202 45.8233 62.2374 46.1241 65.0209 46.1776C66.1258 45.9189 72.0498 44.6396 75.629 45.8823L74.7715 48.3565C72.1595 47.4512 67.1774 48.3425 65.4792 48.7614L65.3133 48.8036H65.1446C65.049 48.8008 62.7969 48.7614 60.4774 48.514C56.4427 48.0866 54.7951 47.3387 54.6068 45.8514C54.4043 44.2629 56.2881 43.3519 56.9966 43.0089C58.4052 42.3257 60.5448 41.5946 63.5336 40.7708C71.1614 38.6706 73.5765 37.307 74.3272 36.7109C74.1304 36.6322 73.8943 36.5591 73.689 36.5169L73.5793 36.4888C58.3659 32.1055 44.2039 36.4213 35.0044 40.813C24.953 45.6096 18.4469 51.5449 18.3823 51.6039L18.3766 51.6095Z" fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_1250_9362">
                  <rect width="120" height="120" fill="white" transform="translate(0.333008)" />
                </clipPath>
              </defs>
            </svg>


            <div class="w-full">
              <h2 class="title-font font-bold lg:text-2xl text-lg text-black pt-4">Safe for various <br>
                skin types</h2>

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="w-full lg:pb-5 lg:px-20" style="background-image: url(img/section-1.png); background-repeat: no-repeat; background-size: cover;">
    <div class="w-full py-36">
      <div class="w-full lg:pb-5">
        <div class="container text-center lg:text-left">
          <h3 class="lg:text-[40px] text-2xl text-black font-bold pb-10 m-2 lg:m-0 leading-[135%]">It is time to give
            full
            attention to
            <br> each
            droplet of
            water as
            it flows <br> upon
            your body
          </h3>
          <a class="text-white bg-btnbg inline-flex items-center md:mb-2 lg:mb-0 py-2 px-4 rounded-lg">Learn More<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg></a>

        </div>

      </div>
    </div>
  </section>

  <section class="w-full lg:pb-5 lg:px-20">
    <div class="container mx-auto flex flex-wrap">
      <div class="container mx-auto">
        <div class="text-center">
          <h2 class="font-bold lg:text-[40px] text-2xl capitalize lg:py-20 py-10">What they say about us </h2>
        </div>
      </div>
      <div class="flex flex-wrap desktop-onlyflex">
        <div class="p-3 md:w-1/3">
          <div class="flex rounded-lg h-full p-2 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img src="img/bazar.png" alt="">
              </div>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">This showerhead not only provides all the benefit for your skin,
                but
                also saves 20-50%
                on water usage thanks to its advanced technology.</p>
              <a class="mt-3 text-black inline-flex items-center uppercase font-bold">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-3 md:w-1/3">
          <div class="flex rounded-lg h-full p-2 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img src="img/cosmopolitan.png" alt="">
              </div>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Innovative products for your self-care
                sessions at home! Aroma Sense Showerhead adds an element of aromatherapy to your shower.</p>
              <a class="mt-3 text-black inline-flex items-center uppercase font-bold">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-3 md:w-1/3">
          <div class="flex rounded-lg h-full p-2 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img src="img/female-daily.png" alt="">
              </div>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Using the Aroma Sense showerhead leaves skin feeling cleaner.
                The
                shower's cartridge not only adds a pleasant fragrance to the water, but also contains vitamin C.</p>
              <a class="mt-3 text-black inline-flex items-center uppercase font-bold">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

      </div>

      <!-- owl-craousel 1 -->
      <div class="owl-carousel owl-theme mobile-only pb-10">
        <div class="item">
          <div class="m-5 rounded-2xl border border-border2">
            <div class="flex rounded-lg h-full p-5 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img src="img/bazar.png" alt="">
                </div>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">This showerhead not only provides all the benefit for your
                  skin,
                  but
                  also saves 20-50%
                  on water usage thanks to its advanced technology.</p>
                <a class="mt-3 text-black inline-flex items-center uppercase font-bold">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="m-5 rounded-2xl border border-border2">
            <div class="flex rounded-lg h-full p-5 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img src="img/cosmopolitan.png" alt="">
                </div>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Innovative products for your self-care
                  sessions at home! Aroma Sense Showerhead adds an element of aromatherapy to your shower.</p>
                <a class="mt-3 text-black inline-flex items-center uppercase font-bold">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="m-5 rounded-2xl border border-border2">
            <div class="flex rounded-lg h-full p-5 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img src="img/female-daily.png" alt="">
                </div>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Using the Aroma Sense showerhead leaves skin feeling cleaner.
                  The
                  shower's cartridge not only adds a pleasant fragrance to the water, but also contains vitamin C.</p>
                <a class="mt-3 text-black inline-flex items-center uppercase font-bold">Learn More
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>

          </div>
        </div>
        <!-- end owl -->

      </div>
    </div>
  </section>


  <section class="w-full lg:px-20 bg-bg-section">
    <div class="container px-5 py-24 mx-auto flex items-center md:flex-row flex-col">
      <div class="lg:inline-flex md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center items-center">
        <h2 class="text-3xl text-black  font-bold title-font lg:mb-0 mb-1">Excellent</h2>
        <img class="lg:my-0 lg:mx-4 mx-auto pb-6 lg:pb-0 pt-6 lg:pt-0" src="img/star.png" alt="">
        <h2 class="text-lg text-black font-medium">RATED 4.8 OUT OF 5 BASED ON 325.842 REVIEWS</h2>
      </div>
      <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0 space-x-4">
        <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
          <img src="img/shopee.png" alt="">
        </button>
        <button class="bg-gray-100 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-200 focus:outline-none">
          <img src="img/tokopedia.png" alt="">
        </button>
      </div>
    </div>
  </section>

  <section class="w-full lg:pb-5 lg:px-20">
    <div class="container mx-auto flex flex-wrap">
      <div class="lg:px-16 container mx-auto">
        <div class="text-center">
          <h2 class="font-bold lg:text-[40px] text-2xl capitalize lg:py-20 py-10">Everyday with Ocential </h2>
        </div>
      </div>
      <div class="desktop-onlyflex">
        <div class="flex flex-wrap">
          <div class="p-3 md:w-1/3">
            <div class="flex rounded-lg h-full p-2 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img class="mr-4" src="img/icon-shopee.png" alt="">
                  <h3 class="text-xl font-bold">Bearcupz</h3>
                </div>
              </div>
              <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                  9000
                  lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                  membantu.</p>
              </div>
            </div>
          </div>

          <div class="p-3 md:w-1/3">
            <div class="flex rounded-lg h-full p-2 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img class="mr-4" src="img/icon-tokopedia.png" alt="">
                  <h3 class="text-xl font-bold">Vino</h3>
                </div>
              </div>
              <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Produk sesuai dengan deskripsi yang dijelaskan oleh Seller di
                  halaman produk. Respon Seller, kecepatan pemrosesan pesanan dan pengemasan/ packaging pesanan aman dan
                  bagus</p>
              </div>
            </div>
          </div>

          <div class="p-3 md:w-1/3">
            <div class="flex rounded-lg h-full p-2 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img class="mr-4" src="img/icon-shopee.png" alt="">
                  <h3 class="text-xl font-bold">Shabrinakh</h3>
                </div>
              </div>
              <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                  9000
                  lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                  membantu.</p>
              </div>
            </div>
          </div>
          <div class="p-3 md:w-1/3">
            <div class="flex rounded-lg h-full p-2 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img class="mr-4" src="img/icon-shopee.png" alt="">
                  <h3 class="text-xl font-bold">Bearcupz</h3>
                </div>
              </div>
              <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                  9000
                  lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                  membantu.</p>
              </div>
            </div>
          </div>

          <div class="p-3 md:w-1/3">
            <div class="flex rounded-lg h-full p-2 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img class="mr-4" src="img/icon-tokopedia.png" alt="">
                  <h3 class="text-xl font-bold">Vino</h3>
                </div>
              </div>
              <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Produk sesuai dengan deskripsi yang dijelaskan oleh Seller di
                  halaman produk. Respon Seller, kecepatan pemrosesan pesanan dan pengemasan/ packaging pesanan aman dan
                  bagus</p>
              </div>
            </div>
          </div>

          <div class="p-3 md:w-1/3">
            <div class="flex rounded-lg h-full p-2 flex-col">
              <div class="flex items-center mb-3">
                <div class="mr-3 inline-flex items-center justify-center ">
                  <img class="mr-4" src="img/icon-shopee.png" alt="">
                  <h3 class="text-xl font-bold">Shabrinakh</h3>
                </div>
              </div>
              <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                  </path>
                </svg>
              </div>
              <div class="flex-grow py-5">
                <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                  9000
                  lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                  membantu.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- owl-craousel 1 -->
      <div class="owl-carousel owl-theme mobile-only">
        <div class="item">
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-shopee.png" alt="">
                <h3 class="text-xl font-bold">Bearcupz</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                9000
                lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                membantu.</p>
            </div>
          </div>
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-tokopedia.png" alt="">
                <h3 class="text-xl font-bold">Vino</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Produk sesuai dengan deskripsi yang dijelaskan oleh Seller di
                halaman produk. Respon Seller, kecepatan pemrosesan pesanan dan pengemasan/ packaging pesanan aman dan
                bagus</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-shopee.png" alt="">
                <h3 class="text-xl font-bold">Shabrinakh</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                9000
                lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                membantu.</p>
            </div>
          </div>
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-shopee.png" alt="">
                <h3 class="text-xl font-bold">Bearcupz</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                9000
                lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                membantu.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-tokopedia.png" alt="">
                <h3 class="text-xl font-bold">Vino</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Produk sesuai dengan deskripsi yang dijelaskan oleh Seller di
                halaman produk. Respon Seller, kecepatan pemrosesan pesanan dan pengemasan/ packaging pesanan aman dan
                bagus</p>
            </div>
          </div>
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-shopee.png" alt="">
                <h3 class="text-xl font-bold">Shabrinakh</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                9000
                lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                membantu.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-shopee.png" alt="">
                <h3 class="text-xl font-bold">Shabrinakh</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                9000
                lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                membantu.</p>
            </div>
          </div>
          <div class="flex rounded-2xl border border-border2 h-full p-5 m-5 flex-col">
            <div class="flex items-center mb-3">
              <div class="mr-3 inline-flex items-center justify-center ">
                <img class="mr-4" src="img/icon-shopee.png" alt="">
                <h3 class="text-xl font-bold">Shabrinakh</h3>
              </div>
            </div>
            <div class="flex items-center"><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-7 h-7 text-bgstart" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                </path>
              </svg>
            </div>
            <div class="flex-grow py-5">
              <p class="leading-relaxed text-base h-28">Walaupun air dirumah tidak kencang tekanannya,tapi pakai as
                9000
                lumayan jadi kencang jernih dan bersih dari ampas2 yg terkandung dalam air. Admin ramah dan sangat
                membantu.</p>
            </div>
          </div>
        </div>

        <!-- end owl -->
      </div>
  </section>

  <section class="w-full desktop-only lg:pb-40 lg:pt-20 lg:px-20">
    <div class="container mx-auto">
      <!-- showerhead -->
      <div class="product-list">
        <div class="container pl-4 pb-6">
          <div class="text-left">
            <h2 class="font-bold text-3xl capitalize">Showerhead </h2>
          </div>
        </div>
        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Showerhead
                801</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Showerhead
                701</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Medium AS9000
                Vitamin C
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/4.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Showerhead
                Mist Vitamin
                C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
        </div>
      </div>
      <!-- home -->
      <div class="product-list">
        <div class="container pb-6 pt-20 pl-4">
          <div class="text-left">
            <h2 class="font-bold text-3xl capitalize">Home </h2>
          </div>
        </div>
        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Alat Tap Water Filter PR100
                (Bathroom) </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Alat Tap Water Filter PR303
                (Kitchen) </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Microfiber Tap Water Filter
                (Bathroom) PR100
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/4.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Microfiber Tap Water Filter PR300
                (Kitchen)
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>


        </div>
      </div>
      <!-- Aromatube -->
      <div class="product-list">
        <div class="container pb-6 pt-20 pl-4">
          <div class="text-left">
            <h2 class="font-bold text-3xl capitalize">aromatube </h2>
          </div>
        </div>
        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges Aroma Therapy
                for Shower
                Arofix - Neutral (1 pcs)</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges - Vanilla
                Coconut (1 pcs)
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges Aroma Therapy
                for Shower
                Arofix - Lavender (1 pcs)</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/4.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges - Pine
                (1 pcs)</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>

        </div>
      </div>
      <!-- showerhead kids -->
      <div class="product-list">
        <div class="container pb-6 pt-20 pl-4">
          <div class="text-left">
            <h2 class="font-bold text-3xl capitalize">Showerhead Kids Series </h2>
          </div>
        </div>
        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/shower-kids/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16671 19.1914L5.58337 16.5247L2.58337 15.8581L2.87504 12.7747L0.833374 10.4414L2.87504 8.10807L2.58337 5.02474L5.58337 4.35807L7.16671 1.69141L10 2.89974L12.8334 1.69141L14.4167 4.35807L17.4167 5.02474L17.125 8.10807L19.1667 10.4414L17.125 12.7747L17.4167 15.8581L14.4167 16.5247L12.8334 19.1914L10 17.9831L7.16671 19.1914ZM9.12504 13.3997L13.8334 8.69141L12.6667 7.48307L9.12504 11.0247L7.33337 9.27474L6.16671 10.4414L9.12504 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">SH - Showerhead Kids Shark Pink
                Vitamin C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/shower-kids/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16671 19.1914L5.58337 16.5247L2.58337 15.8581L2.87504 12.7747L0.833374 10.4414L2.87504 8.10807L2.58337 5.02474L5.58337 4.35807L7.16671 1.69141L10 2.89974L12.8334 1.69141L14.4167 4.35807L17.4167 5.02474L17.125 8.10807L19.1667 10.4414L17.125 12.7747L17.4167 15.8581L14.4167 16.5247L12.8334 19.1914L10 17.9831L7.16671 19.1914ZM9.12504 13.3997L13.8334 8.69141L12.6667 7.48307L9.12504 11.0247L7.33337 9.27474L6.16671 10.4414L9.12504 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">SH - Showerhead Kids Shark Blue
                Vitamin C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/shower-kids/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16671 19.1914L5.58337 16.5247L2.58337 15.8581L2.87504 12.7747L0.833374 10.4414L2.87504 8.10807L2.58337 5.02474L5.58337 4.35807L7.16671 1.69141L10 2.89974L12.8334 1.69141L14.4167 4.35807L17.4167 5.02474L17.125 8.10807L19.1667 10.4414L17.125 12.7747L17.4167 15.8581L14.4167 16.5247L12.8334 19.1914L10 17.9831L7.16671 19.1914ZM9.12504 13.3997L13.8334 8.69141L12.6667 7.48307L9.12504 11.0247L7.33337 9.27474L6.16671 10.4414L9.12504 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">SH - Showerhead Kids Turtle Vitamin
                C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>


        </div>
      </div>

    </div>
  </section>

  <!-- Tabs caraousel -->
  <div class="mobile-only simplecarousel-list lg:hidden block mt-20">
    <div class="crousel-mobile">
      <div style="width: 22px;">
        <ul id="tabs" class="flex text-base font-medium uppercase">
          <li class="bordercustom"><a id="default-tab" href="#first"> Showerhead </a></li>
          <li><a href="#second"> Home </a></li>
          <li><a href="#tree"> Aroma Tube </a></li>
          <li><a href="#four"> Showerhead Kids </a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Tab Contents -->
  <div id="tab-contents" class="mb-10 mobile-only">
    <div id="first" class="p-4">
      <!-- showerhead -->
      <div class="product-list">

        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Showerhead
                801</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Showerhead
                701</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aromica</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Medium AS9000
                Vitamin C
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/showerhead/4.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Showerhead Handheld - Showerhead
                Mist Vitamin
                C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="second" class="hidden p-4">
      <!-- home -->
      <div class="product-list">

        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>
              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Alat Tap Water Filter PR100
                (Bathroom) </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Alat Tap Water Filter PR303
                (Kitchen) </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Microfiber Tap Water Filter
                (Bathroom) PR100
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/home/4.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Pure Rain</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#F4CF7A" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Microfiber Tap Water Filter PR300
                (Kitchen)
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div id="tree" class="hidden p-4">
      <!-- Aromatube -->
      <div class="product-list">

        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges Aroma Therapy
                for Shower
                Arofix - Neutral (1 pcs)</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges - Vanilla
                Coconut (1 pcs)
              </h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges Aroma Therapy
                for Shower
                Arofix - Lavender (1 pcs)</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/aromatube/4.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16659 19.1914L5.58325 16.5247L2.58325 15.8581L2.87492 12.7747L0.833252 10.4414L2.87492 8.10807L2.58325 5.02474L5.58325 4.35807L7.16659 1.69141L9.99992 2.89974L12.8333 1.69141L14.4166 4.35807L17.4166 5.02474L17.1249 8.10807L19.1666 10.4414L17.1249 12.7747L17.4166 15.8581L14.4166 16.5247L12.8333 19.1914L9.99992 17.9831L7.16659 19.1914ZM9.12492 13.3997L13.8333 8.69141L12.6666 7.48307L9.12492 11.0247L7.33325 9.27474L6.16659 10.4414L9.12492 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">Vitamin C Cartidges - Pine
                (1 pcs)</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div id="four" class="hidden p-4">
      <!-- showerhead kids -->
      <div class="product-list">

        <div class="flex flex-wrap w-full">
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/shower-kids/1.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16671 19.1914L5.58337 16.5247L2.58337 15.8581L2.87504 12.7747L0.833374 10.4414L2.87504 8.10807L2.58337 5.02474L5.58337 4.35807L7.16671 1.69141L10 2.89974L12.8334 1.69141L14.4167 4.35807L17.4167 5.02474L17.125 8.10807L19.1667 10.4414L17.125 12.7747L17.4167 15.8581L14.4167 16.5247L12.8334 19.1914L10 17.9831L7.16671 19.1914ZM9.12504 13.3997L13.8334 8.69141L12.6667 7.48307L9.12504 11.0247L7.33337 9.27474L6.16671 10.4414L9.12504 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">SH - Showerhead Kids Shark Pink
                Vitamin C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/shower-kids/2.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16671 19.1914L5.58337 16.5247L2.58337 15.8581L2.87504 12.7747L0.833374 10.4414L2.87504 8.10807L2.58337 5.02474L5.58337 4.35807L7.16671 1.69141L10 2.89974L12.8334 1.69141L14.4167 4.35807L17.4167 5.02474L17.125 8.10807L19.1667 10.4414L17.125 12.7747L17.4167 15.8581L14.4167 16.5247L12.8334 19.1914L10 17.9831L7.16671 19.1914ZM9.12504 13.3997L13.8334 8.69141L12.6667 7.48307L9.12504 11.0247L7.33337 9.27474L6.16671 10.4414L9.12504 13.3997Z" fill="#01ADEF" />
                </svg>

              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">SH - Showerhead Kids Shark Blue
                Vitamin C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>
          <div class="lg:w-1/4 w-1/2 p-5">
            <a class="block relative rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="img/shower-kids/3.jpg">
            </a>
            <div class="mt-8">
              <div class="inline-flex items-center">
                <h2 class="text-title2 text-lg  mb-1 font-semibold">Aroma Sense</h2>
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.16671 19.1914L5.58337 16.5247L2.58337 15.8581L2.87504 12.7747L0.833374 10.4414L2.87504 8.10807L2.58337 5.02474L5.58337 4.35807L7.16671 1.69141L10 2.89974L12.8334 1.69141L14.4167 4.35807L17.4167 5.02474L17.125 8.10807L19.1667 10.4414L17.125 12.7747L17.4167 15.8581L14.4167 16.5247L12.8334 19.1914L10 17.9831L7.16671 19.1914ZM9.12504 13.3997L13.8334 8.69141L12.6667 7.48307L9.12504 11.0247L7.33337 9.27474L6.16671 10.4414L9.12504 13.3997Z" fill="#01ADEF" />
                </svg>


              </div>

              <h2 class="text-title2 title-font lg:text-lg text-sm font-normal mt-3">SH - Showerhead Kids Turtle Vitamin
                C</h2>
              <p class="mt-6 text-black font-bold text-sm lg:text-lg">IDR 299,000</p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>



  <!-- footer -->
  <?php
  require('footer.php')
  ?>