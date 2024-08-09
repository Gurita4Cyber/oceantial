<header class="text-white fixed z-[90] lg:bg-menu-bg w-full lg:px-20 lg:h-[88px]" id="menuHead">
    <div class="lg:container lg:mx-auto">
        <div class="hidden lg:flex justify-between items-center lg:h-[88px]">
            <div class="order-1 justify-between flex gap-16 items-center">
                <a class="block" href=" ">
                    <img class="logodefault" src="img/logo.png" alt="">
                    <img class="hidden logodefault" src="img/logo.png" alt="">
                    <img class="hidden logodark" src="img/logo2.png" alt="">

                </a>
                <!-- navigation desktop -->
                <div class="flex items-center nav-header">
                    <?php require('menu-desktop.php') ?>
                </div>
            </div>
            <div class="navfont order-3 lg:flex hidden sm:hidden text-biru">
                <div class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <div class=" text-white text-xl font-thin flex items-center">
                        <div class="flex ml-6 items-center">

                            <div class="relative">
                                <?php if ($page == 'home') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'home') { ?> <?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'home') { ?>id/home<?php } ?>" data-thumbnail="img/in.png"> IN</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'home-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'home-indo') { ?>id/home<?php } ?>" data-thumbnail="img/in.png"> IN</option>
                                        <option value="<?php if ($page == 'home-indo') { ?> <?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>
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
        <?php require('menu-mobile.php') ?>
        <!-- mobile base navigation -->

    </div>
</header>