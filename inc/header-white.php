<!-- header -->
<header class="text-white fixed z-[90] lg:bg-menu-bg w-full lg:px-20 lg:h-[88px]" id="menuHead">
    <div class="lg:container lg:mx-auto">
        <div class="hidden lg:flex justify-between items-center lg:h-[88px]">
            <div class="order-1 justify-between flex gap-16 items-center">
                <a class="block" href=" ">
                    <img class="logodefault" src="img/logo2.png" alt="">
                    <img class="hidden logodefault" src="img/logo.png" alt="">
                    <img class="hidden logodark" src="img/logo2.png" alt="">
                </a>
                <!-- navigation desktop -->
                <div class="flex items-center nav-header black">
                    <?php require('menu-desktop.php') ?>
                </div>
            </div>
            <!-- translate -->
            <div class="navfont order-3 lg:flex hidden sm:hidden text-biru">
                <div class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <div class="text-xl font-thin flex items-center">
                        <div class="flex ml-6 items-center">

                            <div class="relative">


                                <?php if ($page == 'detail1') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail1') { ?>aroma-sense-microfiber-filter-701<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail1') { ?>id/aroma-sense-microfiber-filter-701<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail1-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail1-indo') { ?>id/aroma-sense-microfiber-filter-701<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail1-indo') { ?>aroma-sense-microfiber-filter-701<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail2') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail2') { ?>aroma-sense-microfiber-filter-801<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail2') { ?>id/aroma-sense-microfiber-filter-801<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail2-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail2-indo') { ?>id/aroma-sense-microfiber-filter-801<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail2-indo') { ?>aroma-sense-microfiber-filter-801<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail3') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail3') { ?>aroma-sense-microfiber-filter-arofix-grand-shower<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail3') { ?>id/aroma-sense-microfiber-filter-arofix-grand-shower<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail3-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail3-indo') { ?>id/aroma-sense-microfiber-filter-arofix-grand-shower<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail3-indo') { ?>aroma-sense-microfiber-filter-arofix-grand-shower<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail4') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail4') { ?>aroma-sense-microfiber-filter-arofix<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail4') { ?>id/aroma-sense-microfiber-filter-arofix<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail4-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail4-indo') { ?>id/aroma-sense-microfiber-filter-arofix<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail4-indo') { ?>aroma-sense-microfiber-filter-arofix<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail5') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail5') { ?>aroma-sense-microfiber-filter-as9000<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail5') { ?>id/aroma-sense-microfiber-filter-as9000<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail5-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail5-indo') { ?>id/aroma-sense-microfiber-filter-as9000<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail5-indo') { ?>aroma-sense-microfiber-filter-as9000<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail6') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail6') { ?>aroma-sense-microfiber-filter-kids&tulip<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail6') { ?>id/aroma-sense-microfiber-filter-kids&tulip<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail6-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail6-indo') { ?>id/aroma-sense-microfiber-filter-kids&tulip<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail6-indo') { ?>aroma-sense-microfiber-filter-kids&tulip<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail7') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail7') { ?>aroma-sense-microfiber-filter-prestiges<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail7') { ?>id/aroma-sense-microfiber-filter-prestiges<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail7-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail7-indo') { ?>id/aroma-sense-microfiber-filter-prestiges<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail7-indo') { ?>aroma-sense-microfiber-filter-prestiges<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail8') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail8') { ?>aroma-sense-microfiber-mist<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail8') { ?>id/aroma-sense-microfiber-mist<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail8-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail8-indo') { ?>id/aroma-sense-microfiber-mist<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail8-indo') { ?>aroma-sense-microfiber-mist<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail9') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail9') { ?>aroma-sense-microfiber-super-jet-wide<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail9') { ?>id/aroma-sense-microfiber-super-jet-wide<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail9-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail9-indo') { ?>id/aroma-sense-microfiber-super-jet-wide<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail9-indo') { ?>aroma-sense-microfiber-super-jet-wide<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail10') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail10') { ?>aroma-sense-microfiber-super-jet<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail10') { ?>id/aroma-sense-microfiber-super-jet<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail10-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail10-indo') { ?>id/aroma-sense-microfiber-super-jet<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail10-indo') { ?>aroma-sense-microfiber-super-jet<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail11') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail11') { ?>aroma-sense-showerhead-handheld-as9000-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail11') { ?>id/aroma-sense-showerhead-handheld-as9000-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail11-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail11-indo') { ?>id/aroma-sense-showerhead-handheld-as9000-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail11-indo') { ?>aroma-sense-showerhead-handheld-as9000-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail12') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail12') { ?>aroma-sense-showerhead-handheld-mist-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail12') { ?>id/aroma-sense-showerhead-handheld-mist-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail12-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail12-indo') { ?>id/aroma-sense-showerhead-handheld-mist-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail12-indo') { ?>aroma-sense-showerhead-handheld-mist-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail13') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail13') { ?>aroma-sense-showerhead-handheld-showerhead-701<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail13') { ?>id/aroma-sense-showerhead-handheld-showerhead-701<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail13-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail13-indo') { ?>id/aroma-sense-showerhead-handheld-showerhead-701<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail13-indo') { ?>aroma-sense-showerhead-handheld-showerhead-701<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail14') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail14') { ?>aroma-sense-showerhead-handheld-showerhead-801<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail14') { ?>id/aroma-sense-showerhead-handheld-showerhead-801<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail14-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail14-indo') { ?>id/aroma-sense-showerhead-handheld-showerhead-801<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail14-indo') { ?>aroma-sense-showerhead-handheld-showerhead-801<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail15') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail15') { ?>aroma-sense-spare-parts-anti-bakteri-arofix-01<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail15') { ?>id/aroma-sense-spare-parts-anti-bakteri-arofix-01<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail15-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail15-indo') { ?>id/aroma-sense-spare-parts-anti-bakteri-arofix-01<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail15-indo') { ?>aroma-sense-spare-parts-anti-bakteri-arofix-01<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail16') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail16') { ?>aroma-sense-spare-parts-anti-bakteri-as-701<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail16') { ?>id/aroma-sense-spare-parts-anti-bakteri-as-701<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'detail16-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail16-indo') { ?>id/aroma-sense-spare-parts-anti-bakteri-as-701<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail16-indo') { ?>aroma-sense-spare-parts-anti-bakteri-as-701<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail17') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail17') { ?>aroma-sense-spare-parts-anti-bakteri-as-801<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail17') { ?>id/aroma-sense-spare-parts-anti-bakteri-as-801<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail17-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail17-indo') { ?>id/aroma-sense-spare-parts-anti-bakteri-as-801<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail17-indo') { ?>aroma-sense-spare-parts-anti-bakteri-as-801<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail18') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail18') { ?>aroma-sense-spare-parts-anti-bakteri-as9000-medium<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail18') { ?>id/aroma-sense-spare-parts-anti-bakteri-as9000-medium<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail18-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail18-indo') { ?>id/aroma-sense-spare-parts-anti-bakteri-as9000-medium<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail18-indo') { ?>aroma-sense-spare-parts-anti-bakteri-as9000-medium<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail19') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail19') { ?>aroma-sense-spare-parts-anti-bakteri-kids<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail19') { ?>id/aroma-sense-spare-parts-anti-bakteri-kids<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail19-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail19-indo') { ?>id/aroma-sense-spare-parts-anti-bakteri-kids<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail19-indo') { ?>aroma-sense-spare-parts-anti-bakteri-kids<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail20') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail20') { ?>aroma-sense-spare-parts-anti-bakteri-prestiges<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail20') { ?>id/aroma-sense-spare-parts-anti-bakteri-prestiges<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail20-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail20-indo') { ?>id/aroma-sense-spare-parts-anti-bakteri-prestiges<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail20-indo') { ?>aroma-sense-spare-parts-anti-bakteri-prestiges<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail21') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail21') { ?>aroma-sense-spare-parts-anti-bakteri-tulip<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail21') { ?>id/aroma-sense-spare-parts-anti-bakteri-tulip<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail21-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail21-indo') { ?>id/aroma-sense-spare-parts-anti-bakteri-tulip<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail21-indo') { ?>aroma-sense-spare-parts-anti-bakteri-tulip<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail22') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail22') { ?>aroma-sense-spare-parts-chrome-handle<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail22') { ?>id/aroma-sense-spare-parts-chrome-handle<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail22-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail22-indo') { ?>id/aroma-sense-spare-parts-chrome-handle<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail22-indo') { ?>aroma-sense-spare-parts-chrome-handle<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail23') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail23') { ?>aroma-sense-spare-parts-white-handle<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail23') { ?>id/aroma-sense-spare-parts-white-handle<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail23-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail23-indo') { ?>id/aroma-sense-spare-parts-white-handle<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail23-indo') { ?>aroma-sense-spare-parts-white-handle<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail24') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail24') { ?>aroma-sense-vita<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail24') { ?>id/aroma-sense-vita<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail24-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail24-indo') { ?>id/aroma-sense-vita<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail24-indo') { ?>aroma-sense-vita<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail25') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail25') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-eucalyptus<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail25') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-eucalyptus<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail25-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail25-indo') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-eucalyptus<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail25-indo') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-eucalyptus<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail26') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail26') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lavender<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail26') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lavender<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail26-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail26-indo') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lavender<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail26-indo') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lavender<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail27') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail27') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lemon<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail27') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lemon<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail27-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail27-indo') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lemon<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail27-indo') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-lemon<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail28') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail28') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-neutral<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail28') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-neutral<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail28-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail28-indo') { ?>id/aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-neutral<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail28-indo') { ?>aroma-sense-vitamin-c-cartridges-aroma-therapy-for-shower-arofix-neutral<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail29') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail29') { ?>aroma-sense-vitamin-c-cartridges-eucalyptus<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail29') { ?>id/aroma-sense-vitamin-c-cartridges-eucalyptus<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail29-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail29-indo') { ?>id/aroma-sense-vitamin-c-cartridges-eucalyptus<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail29-indo') { ?>aroma-sense-vitamin-c-cartridges-eucalyptus<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail30') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail30') { ?>aroma-sense-vitamin-c-cartridges-jasmine<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail30') { ?>id/aroma-sense-vitamin-c-cartridges-jasmine<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail30-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail30-indo') { ?>id/aroma-sense-vitamin-c-cartridges-jasmine<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail30-indo') { ?>aroma-sense-vitamin-c-cartridges-jasmine<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail31') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail31') { ?>aroma-sense-vitamin-c-cartridges-lavender<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail31') { ?>id/aroma-sense-vitamin-c-cartridges-lavender<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail31-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail31-indo') { ?>id/aroma-sense-vitamin-c-cartridges-lavender<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail31-indo') { ?>aroma-sense-vitamin-c-cartridges-lavender<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail32') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail32') { ?>aroma-sense-vitamin-c-cartridges-lemon-mango<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail32') { ?>id/aroma-sense-vitamin-c-cartridges-lemon-mango<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail32-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail32-indo') { ?>id/aroma-sense-vitamin-c-cartridges-lemon-mango<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail32-indo') { ?>aroma-sense-vitamin-c-cartridges-lemon-mango<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail33') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail33') { ?>aroma-sense-vitamin-c-cartridges-lemon<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail33') { ?>id/aroma-sense-vitamin-c-cartridges-lemon<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail33-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail33-indo') { ?>id/aroma-sense-vitamin-c-cartridges-lemon<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail33-indo') { ?>aroma-sense-vitamin-c-cartridges-lemon<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail34') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail34') { ?>aroma-sense-vitamin-c-cartridges-neutral<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail34') { ?>id/aroma-sense-vitamin-c-cartridges-neutral<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail34-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail34-indo') { ?>id/aroma-sense-vitamin-c-cartridges-neutral<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail34-indo') { ?>aroma-sense-vitamin-c-cartridges-neutral<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail35') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail35') { ?>aroma-sense-vitamin-c-cartridges-phytoncide<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail35') { ?>id/aroma-sense-vitamin-c-cartridges-phytoncide<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail35-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail35-indo') { ?>id/aroma-sense-vitamin-c-cartridges-phytoncide<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail35-indo') { ?>aroma-sense-vitamin-c-cartridges-phytoncide<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail36') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail36') { ?>aroma-sense-vitamin-c-cartridges-pine<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail36') { ?>id/aroma-sense-vitamin-c-cartridges-pine<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail36-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail36-indo') { ?>id/aroma-sense-vitamin-c-cartridges-pine<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail36-indo') { ?>aroma-sense-vitamin-c-cartridges-pine<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail37') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail37') { ?>aroma-sense-vitamin-c-cartridges-rose<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail37') { ?>id/aroma-sense-vitamin-c-cartridges-rose<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail37-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail37-indo') { ?>id/aroma-sense-vitamin-c-cartridges-rose<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail37-indo') { ?>aroma-sense-vitamin-c-cartridges-rose<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail38') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail38') { ?>aroma-sense-vitamin-c-cartridges-vanilla-coconut<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail38') { ?>id/aroma-sense-vitamin-c-cartridges-vanilla-coconut<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail38-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail38-indo') { ?>id/aroma-sense-vitamin-c-cartridges-vanilla-coconut<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail38-indo') { ?>aroma-sense-vitamin-c-cartridges-vanilla-coconut<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail39') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail39') { ?>aroma-sense-wall-shower-arofix-grand<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail39') { ?>id/aroma-sense-wall-shower-arofix-grand<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail39-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail39-indo') { ?>id/aroma-sense-wall-shower-arofix-grand<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail39-indo') { ?>aroma-sense-wall-shower-arofix-grand<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail40') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail40') { ?>aroma-sense-wall-shower-arofix<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail40') { ?>id/aroma-sense-wall-shower-arofix<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail40-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail40-indo') { ?>id/aroma-sense-wall-shower-arofix<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail40-indo') { ?>aroma-sense-wall-shower-arofix<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail41') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail41') { ?>aromica-microfiber-filter-luxe<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail41') { ?>id/aromica-microfiber-filter-luxe<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail41-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail41-indo') { ?>id/aromica-microfiber-filter-luxe<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail41-indo') { ?>aromica-microfiber-filter-luxe<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail42') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail42') { ?>aromica-showerhead-handheld-luxe-black<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail42') { ?>id/aromica-showerhead-handheld-luxe-black<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail42-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail42-indo') { ?>id/aromica-showerhead-handheld-luxe-black<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail42-indo') { ?>aromica-showerhead-handheld-luxe-black<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail43') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail43') { ?>aromica-showerhead-handheld-luxe-chrome<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail43') { ?>id/aromica-showerhead-handheld-luxe-chrome<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail43-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail43-indo') { ?>id/aromica-showerhead-handheld-luxe-chrome<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail43-indo') { ?>aromica-showerhead-handheld-luxe-chrome<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail44') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail44') { ?>pure-rain-acf-filter-carbon<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail44') { ?>id/pure-rain-acf-filter-carbon<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail44-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail44-indo') { ?>id/pure-rain-acf-filter-carbon<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail44-indo') { ?>pure-rain-acf-filter-carbon<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail45') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail45') { ?>pure-rain-carbon-prc<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail45') { ?>id/pure-rain-carbon-prc<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail45-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail45-indo') { ?>id/pure-rain-carbon-prc<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail45-indo') { ?>pure-rain-carbon-prc<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail46') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail46') { ?>pure-rain-microfiber-prm<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail46') { ?>id/pure-rain-microfiber-prm<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail46-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail46-indo') { ?>id/pure-rain-microfiber-prm<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail46-indo') { ?>pure-rain-microfiber-prm<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail47') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail47') { ?>pure-rain-microfiber-tap-water-filter-pr100-bathroom<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail47') { ?>id/pure-rain-microfiber-tap-water-filter-pr100-bathroom<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail47-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail47-indo') { ?>id/pure-rain-microfiber-tap-water-filter-pr100-bathroom<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail47-indo') { ?>pure-rain-microfiber-tap-water-filter-pr100-bathroom<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail48') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail48') { ?>pure-rain-microfiber-tap-water-filter-pr303-kitchen<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail48') { ?>id/pure-rain-microfiber-tap-water-filter-pr303-kitchen<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail48-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail48-indo') { ?>id/pure-rain-microfiber-tap-water-filter-pr303-kitchen<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail48-indo') { ?>pure-rain-microfiber-tap-water-filter-pr303-kitchen<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail49') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail49') { ?>pure-rain-showerhead-handheld-showerhead-kids-shark-blue-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail49') { ?>id/pure-rain-showerhead-handheld-showerhead-kids-shark-blue-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail49-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail49-indo') { ?>id/pure-rain-showerhead-handheld-showerhead-kids-shark-blue-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail49-indo') { ?>pure-rain-showerhead-handheld-showerhead-kids-shark-blue-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail50') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail50') { ?>pure-rain-showerhead-handheld-showerhead-kids-shark-pink-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail50') { ?>id/pure-rain-showerhead-handheld-showerhead-kids-shark-pink-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail50-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail50-indo') { ?>id/pure-rain-showerhead-handheld-showerhead-kids-shark-pink-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail50-indo') { ?>pure-rain-showerhead-handheld-showerhead-kids-shark-pink-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail51') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail51') { ?>pure-rain-showerhead-handheld-showerhead-kids-turtle-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail51') { ?>id/pure-rain-showerhead-handheld-showerhead-kids-turtle-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail51-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail51-indo') { ?>id/pure-rain-showerhead-handheld-showerhead-kids-turtle-vitamin-c<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail51-indo') { ?>pure-rain-showerhead-handheld-showerhead-kids-turtle-vitamin-c<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail52') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail52') { ?>pure-rain-showerhead-handheld<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail52') { ?>id/pure-rain-showerhead-handheld<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail52-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail52-indo') { ?>id/pure-rain-showerhead-handheld<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail52-indo') { ?>pure-rain-showerhead-handheld<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail53') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail53') { ?>pure-rain-tap-water-filter-pr100-bathroom<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail53') { ?>id/pure-rain-tap-water-filter-pr100-bathroom<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail53-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail53-indo') { ?>id/pure-rain-tap-water-filter-pr100-bathroom<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail53-indo') { ?>pure-rain-tap-water-filter-pr100-bathroom<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail54') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail54') { ?>pure-rain-tap-water-filter-pr303-kitchen<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail54') { ?>id/pure-rain-tap-water-filter-pr303-kitchen<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail54-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail54-indo') { ?>id/pure-rain-tap-water-filter-pr303-kitchen<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail54-indo') { ?>pure-rain-tap-water-filter-pr303-kitchen<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'detail55') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail55') { ?>water-lab-acf-filter<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'detail55') { ?>id/water-lab-acf-filter<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'detail55-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'detail55-indo') { ?>id/water-lab-acf-filter<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'detail55-indo') { ?>water-lab-acf-filter<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>












                                <?php if ($page == 'home') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'about-us') { ?> <?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'about-us') { ?>id/home<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'home-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'about-us-indo') { ?>id/home<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'about-us-indo') { ?> <?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'about-us') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'about-us') { ?>about-us<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'about-us') { ?>id/about-us<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>
                                <?php if ($page == 'about-us-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'about-us-indo') { ?>id/about-us<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'about-us-indo') { ?>about-us<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'how-it-works') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'how-it-works') { ?>how-it-works<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'how-it-works') { ?>id/how-it-works<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'how-it-works-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'how-it-works-indo') { ?>id/how-it-works<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'how-it-works-indo') { ?>how-it-works<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>


                                <?php if ($page == 'faqs') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'faqs') { ?>faqs<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                        <option value="<?php if ($page == 'faqs') { ?>id/faqs<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                    </select>
                                <?php } ?>

                                <?php if ($page == 'faqs-indo') { ?>
                                    <select class="vodiapicker">
                                        <option value="<?php if ($page == 'faqs-indo') { ?>id/faqs<?php } ?>" data-thumbnail="img/in.png">ID</option>
                                        <option value="<?php if ($page == 'faqs-indo') { ?>faqs<?php } ?>" class="test" data-thumbnail="img/en.png"> EN </option>
                                    </select>
                                <?php } ?>



                                <div class="lang-select">
                                    <button class="btn-select blackbtn" value=""></button>
                                    <div class="b blacklanguage">
                                        <ul id="a" class="sel"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded ml-4 border appearance-none bg-btnsosmed efectmenu">
                        <a href="" class="py-2 px-4 flex font-normal items-center">
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
                            Shop Now
                        </a>
                    </div>
                </div>

            </div>
            <!-- translate end -->

        </div>
        <!-- mobile menu navigation -->
        <?php require('menu-mobile.php') ?>
        <!-- mobile base navigation -->

    </div>
</header>
<!-- headedr end -->