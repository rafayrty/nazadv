<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('title') ?></title>
    <?php wp_head(); ?>
    <meta name="theme-color" content="#343466">
</head>

<body>

    <header class="<?= (!is_front_page()) ? 'bg-header' : '' ?>">

        <div class="container-header">

            <div class="logo">
                <a href="<?= site_url() ?>">
                    <svg width="159" height="28" viewBox="0 0 159 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_136_1552)">
                            <path
                                d="M139.272 8.51827H135.632C131.507 8.51827 128.151 11.9033 128.151 16.0656C128.151 20.2279 131.507 23.6129 135.632 23.6129C136.944 23.6129 138.179 23.2931 139.272 22.7253V23.4806H143.633V15.5418V8.51827V3.64478H139.272V8.51827ZM135.632 19.2135C133.911 19.2135 132.512 17.8022 132.512 16.0656C132.512 14.329 133.911 12.9176 135.632 12.9176H139.272V15.5418C139.272 17.5651 137.638 19.2135 135.632 19.2135Z"
                                fill="white" />
                            <path
                                d="M154.64 11.567C154.64 14.9906 152.383 17.8959 149.29 18.8386V8.45215H144.929V23.5633H147.109C153.667 23.5633 159.001 18.1826 159.001 11.567V8.45215H154.64V11.567Z"
                                fill="white" />
                            <path
                                d="M111.755 16.0656C111.755 20.2279 115.111 23.6129 119.237 23.6129C120.548 23.6129 121.783 23.2932 122.876 22.7253V23.4861H127.237V8.51282H119.242C115.111 8.51833 111.755 11.9033 111.755 16.0656ZM122.876 15.5419C122.876 17.5652 121.242 19.2136 119.237 19.2136C117.515 19.2136 116.116 17.8022 116.116 16.0656C116.116 14.329 117.515 12.9177 119.237 12.9177H122.876V15.5419Z"
                                fill="white" />
                            <path
                                d="M85.406 8.48523C81.2691 8.48523 77.9082 11.8812 77.9082 16.0491C77.9082 20.2224 81.2746 23.6129 85.406 23.6129C86.7175 23.6129 87.9581 23.2932 89.051 22.7253V23.4861H93.4229V8.48523H85.406ZM89.051 13.9045V15.5253C89.051 17.5541 87.417 19.2025 85.406 19.2025C83.6791 19.2025 82.2801 17.7857 82.2801 16.0491C82.2801 14.3125 83.6846 12.8956 85.406 12.8956H89.051V13.9045Z"
                                fill="white" />
                            <path
                                d="M103.499 16.8042C105.887 14.7699 108.641 13.4468 110.494 12.9507V8.47961H95.1157V12.9507H101.22C101.045 13.094 100.87 13.2373 100.695 13.3807C99.0723 14.7644 97.7716 16.2474 96.8317 17.7966C95.695 19.6655 95.1212 21.5785 95.1212 23.4805H110.494V19.015H101.335C102.056 18.1053 102.865 17.3445 103.499 16.8042Z"
                                fill="white" />
                            <path
                                d="M72.4482 10.4485C71.1203 8.52995 69.6284 6.9808 68.0108 5.8396C65.9997 4.42276 63.8903 3.70607 61.7426 3.70607H59.5566V23.4922H63.9285V8.57405C65.721 9.3128 67.508 10.9226 69.0491 13.2325C71.1476 16.3805 72.4537 20.3057 72.4537 23.4867H76.8256V3.66748H72.4537V10.4485H72.4482Z"
                                fill="white" />
                            <path
                                d="M39.9317 0.226807C36.5981 0.226807 33.5815 1.95238 31.8219 4.62618C31.3136 5.39249 30.9147 6.23047 30.636 7.1346L28.6194 5.1003L25.6903 2.14533L25.5974 2.05712C24.406 0.960036 22.854 0.359119 21.2364 0.359119C18.0067 0.359119 15.318 2.75727 14.8425 5.88315C14.7934 6.18636 14.766 6.5006 14.7606 6.82036L14.6567 8.73888C13.8643 8.26476 13.0064 7.91193 12.1101 7.69141C11.3396 7.49294 10.5417 7.39371 9.72744 7.39371C4.36642 7.3882 0 11.7986 0 17.2124C0 22.6261 4.36642 27.031 9.73291 27.031C13.0774 27.031 16.0885 25.311 17.8537 22.6316L14.0064 18.7505C13.3725 20.5477 11.6729 21.7882 9.73291 21.7882C7.23 21.7882 5.19708 19.7318 5.19708 17.2069C5.19708 14.6819 7.23 12.6255 9.73291 12.6255C10.4707 12.6255 11.1866 12.802 11.8259 13.1383C12.1976 13.3312 12.5364 13.5738 12.8479 13.8715L14.3125 15.349L19.0341 20.1122L21.0506 22.1465L23.8541 24.9747C25.0782 26.2096 26.7068 26.8932 28.4391 26.8932C31.6688 26.8932 34.3576 24.495 34.8385 21.3692C33.5925 20.8013 32.4449 20.0185 31.4284 19.0427L31.3355 18.9545L29.8709 17.477L29.7234 20.2169L29.7179 20.3548C29.7179 21.0715 29.1441 21.6503 28.4336 21.6503C28.0948 21.6503 27.7724 21.518 27.5319 21.2699L22.0944 15.7845L19.6188 13.2871L19.8046 9.76981L19.9522 7.02434V6.88651C19.9522 6.17534 20.5315 5.59096 21.2364 5.59096C21.5425 5.59096 21.8376 5.6957 22.0671 5.89969L30.0567 13.9652L33.1771 17.1131L33.2263 17.1572C33.7783 17.692 34.3794 18.1441 35.0243 18.5245C35.8221 18.9986 36.6746 19.3514 37.5709 19.5719C38.336 19.7704 39.1284 19.8696 39.9372 19.8696C45.3037 19.8696 49.6701 15.4647 49.6701 10.051C49.6701 4.63721 45.3037 0.226807 39.9317 0.226807ZM39.9317 14.6268C39.1994 14.6268 38.489 14.4504 37.8496 14.1196C37.478 13.9266 37.1337 13.6785 36.8222 13.3808L35.3685 11.9144L35.5216 8.97594C35.5598 8.81606 35.609 8.65619 35.6637 8.50182C36.2976 6.7101 38.0026 5.46967 39.9372 5.46967C42.4401 5.46967 44.4785 7.52051 44.4785 10.0455C44.4785 12.5704 42.4346 14.6268 39.9317 14.6268Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_136_1552">
                                <rect width="159" height="26.8042" fill="white" transform="translate(0 0.226807)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>

            <div class="main-menu">


                <div class="menu">
                <?php wp_nav_menu( array( "theme_location" => 'header-menu' ) ) ?>
                    <!-- <nav>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav> -->
                </div>
                <div class="menu-icon">
                    <a href="#">
                        <ul>
                            <li id="start"></li>
                            <li id="middle"></li>
                            <li id="end"></li>
                        </ul>
                        <!-- <svg width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line id="start" x1="20.1299" y1="1.69995" x2="0.999443" y2="1.69995" stroke="white" stroke-width="2"
                                stroke-linecap="round" />
                            <line id="middle" x1="26.0005" y1="12.5" x2="6.87005" y2="12.5" stroke="white" stroke-width="2"
                                stroke-linecap="round" />
                            <line id="end" x1="20.1299" y1="23.2999" x2="0.999443" y2="23.2999" stroke="white" stroke-width="2"
                                stroke-linecap="round" />
                        </svg> -->
                    </a>
                </div>



            </div>





        </div>

        <div class="overlay-menu">

            <div class="overlay-menu-container">


                <div class="overlay-first">
                    <div class="logo">
                        <svg width="159" height="28" viewBox="0 0 159 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_136_1552)">
                                <path
                                    d="M139.272 8.51827H135.632C131.507 8.51827 128.151 11.9033 128.151 16.0656C128.151 20.2279 131.507 23.6129 135.632 23.6129C136.944 23.6129 138.179 23.2931 139.272 22.7253V23.4806H143.633V15.5418V8.51827V3.64478H139.272V8.51827ZM135.632 19.2135C133.911 19.2135 132.512 17.8022 132.512 16.0656C132.512 14.329 133.911 12.9176 135.632 12.9176H139.272V15.5418C139.272 17.5651 137.638 19.2135 135.632 19.2135Z"
                                    fill="white" />
                                <path
                                    d="M154.64 11.567C154.64 14.9906 152.383 17.8959 149.29 18.8386V8.45215H144.929V23.5633H147.109C153.667 23.5633 159.001 18.1826 159.001 11.567V8.45215H154.64V11.567Z"
                                    fill="white" />
                                <path
                                    d="M111.755 16.0656C111.755 20.2279 115.111 23.6129 119.237 23.6129C120.548 23.6129 121.783 23.2932 122.876 22.7253V23.4861H127.237V8.51282H119.242C115.111 8.51833 111.755 11.9033 111.755 16.0656ZM122.876 15.5419C122.876 17.5652 121.242 19.2136 119.237 19.2136C117.515 19.2136 116.116 17.8022 116.116 16.0656C116.116 14.329 117.515 12.9177 119.237 12.9177H122.876V15.5419Z"
                                    fill="white" />
                                <path
                                    d="M85.406 8.48523C81.2691 8.48523 77.9082 11.8812 77.9082 16.0491C77.9082 20.2224 81.2746 23.6129 85.406 23.6129C86.7175 23.6129 87.9581 23.2932 89.051 22.7253V23.4861H93.4229V8.48523H85.406ZM89.051 13.9045V15.5253C89.051 17.5541 87.417 19.2025 85.406 19.2025C83.6791 19.2025 82.2801 17.7857 82.2801 16.0491C82.2801 14.3125 83.6846 12.8956 85.406 12.8956H89.051V13.9045Z"
                                    fill="white" />
                                <path
                                    d="M103.499 16.8042C105.887 14.7699 108.641 13.4468 110.494 12.9507V8.47961H95.1157V12.9507H101.22C101.045 13.094 100.87 13.2373 100.695 13.3807C99.0723 14.7644 97.7716 16.2474 96.8317 17.7966C95.695 19.6655 95.1212 21.5785 95.1212 23.4805H110.494V19.015H101.335C102.056 18.1053 102.865 17.3445 103.499 16.8042Z"
                                    fill="white" />
                                <path
                                    d="M72.4482 10.4485C71.1203 8.52995 69.6284 6.9808 68.0108 5.8396C65.9997 4.42276 63.8903 3.70607 61.7426 3.70607H59.5566V23.4922H63.9285V8.57405C65.721 9.3128 67.508 10.9226 69.0491 13.2325C71.1476 16.3805 72.4537 20.3057 72.4537 23.4867H76.8256V3.66748H72.4537V10.4485H72.4482Z"
                                    fill="white" />
                                <path
                                    d="M39.9317 0.226807C36.5981 0.226807 33.5815 1.95238 31.8219 4.62618C31.3136 5.39249 30.9147 6.23047 30.636 7.1346L28.6194 5.1003L25.6903 2.14533L25.5974 2.05712C24.406 0.960036 22.854 0.359119 21.2364 0.359119C18.0067 0.359119 15.318 2.75727 14.8425 5.88315C14.7934 6.18636 14.766 6.5006 14.7606 6.82036L14.6567 8.73888C13.8643 8.26476 13.0064 7.91193 12.1101 7.69141C11.3396 7.49294 10.5417 7.39371 9.72744 7.39371C4.36642 7.3882 0 11.7986 0 17.2124C0 22.6261 4.36642 27.031 9.73291 27.031C13.0774 27.031 16.0885 25.311 17.8537 22.6316L14.0064 18.7505C13.3725 20.5477 11.6729 21.7882 9.73291 21.7882C7.23 21.7882 5.19708 19.7318 5.19708 17.2069C5.19708 14.6819 7.23 12.6255 9.73291 12.6255C10.4707 12.6255 11.1866 12.802 11.8259 13.1383C12.1976 13.3312 12.5364 13.5738 12.8479 13.8715L14.3125 15.349L19.0341 20.1122L21.0506 22.1465L23.8541 24.9747C25.0782 26.2096 26.7068 26.8932 28.4391 26.8932C31.6688 26.8932 34.3576 24.495 34.8385 21.3692C33.5925 20.8013 32.4449 20.0185 31.4284 19.0427L31.3355 18.9545L29.8709 17.477L29.7234 20.2169L29.7179 20.3548C29.7179 21.0715 29.1441 21.6503 28.4336 21.6503C28.0948 21.6503 27.7724 21.518 27.5319 21.2699L22.0944 15.7845L19.6188 13.2871L19.8046 9.76981L19.9522 7.02434V6.88651C19.9522 6.17534 20.5315 5.59096 21.2364 5.59096C21.5425 5.59096 21.8376 5.6957 22.0671 5.89969L30.0567 13.9652L33.1771 17.1131L33.2263 17.1572C33.7783 17.692 34.3794 18.1441 35.0243 18.5245C35.8221 18.9986 36.6746 19.3514 37.5709 19.5719C38.336 19.7704 39.1284 19.8696 39.9372 19.8696C45.3037 19.8696 49.6701 15.4647 49.6701 10.051C49.6701 4.63721 45.3037 0.226807 39.9317 0.226807ZM39.9317 14.6268C39.1994 14.6268 38.489 14.4504 37.8496 14.1196C37.478 13.9266 37.1337 13.6785 36.8222 13.3808L35.3685 11.9144L35.5216 8.97594C35.5598 8.81606 35.609 8.65619 35.6637 8.50182C36.2976 6.7101 38.0026 5.46967 39.9372 5.46967C42.4401 5.46967 44.4785 7.52051 44.4785 10.0455C44.4785 12.5704 42.4346 14.6268 39.9317 14.6268Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_136_1552">
                                    <rect width="159" height="26.8042" fill="white" transform="translate(0 0.226807)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <div class="addresses">

                        <div class="address">

                            <div class="address__city">
                                <h3>Nazareth, Israel</h3>
                            </div>

                            <div class="address__text">
                                <p>Paulus ha Shishi 102 3rd floor</p>
                                <a href="tel:+972 53-306-5330">+972 53-306-5330</a><br />
                                <a href="mailto:Info@nazadv.com">Info@nazadv.com</a><br />
                                <a href="#" class="view_more">View Location ></a>
                            </div>

                        </div>

                        <div class="address">

                            <div class="address__city">
                                <h3>California, USA</h3>
                            </div>

                            <div class="address__text">
                                <p>Paulus ha Shishi 102 3rd floor</p>
                                <a href="tel:+972 53-306-5330">+972 53-306-5330</a><br />
                                <a href="mailto:Info@nazadv.com">Info@nazadv.com</a><br />
                                <a href="#" class="view_more">View Location ></a>
                            </div>

                        </div>
                    </div>

                        <div class="socials">
                            <p>Follow Us</p>

                            <ul>
                                <li>

                                    <a href="#">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 9C18 4.02943 13.9706 0 9 0C4.02943 0 0 4.02943 0 9C0 13.4921 3.29115 17.2155 7.59375 17.8907V11.6016H5.30859V9H7.59375V7.01719C7.59375 4.76156 8.93742 3.51562 10.9932 3.51562C11.9776 3.51562 13.0078 3.69141 13.0078 3.69141V5.90625H11.873C10.755 5.90625 10.4062 6.60006 10.4062 7.3125V9H12.9023L12.5033 11.6016H10.4062V17.8907C14.7088 17.2155 18 13.4921 18 9Z"
                                                fill="white" />
                                        </svg>
                                    </a>

                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 9C18 4.02943 13.9706 0 9 0C4.02943 0 0 4.02943 0 9C0 13.4921 3.29115 17.2155 7.59375 17.8907V11.6016H5.30859V9H7.59375V7.01719C7.59375 4.76156 8.93742 3.51562 10.9932 3.51562C11.9776 3.51562 13.0078 3.69141 13.0078 3.69141V5.90625H11.873C10.755 5.90625 10.4062 6.60006 10.4062 7.3125V9H12.9023L12.5033 11.6016H10.4062V17.8907C14.7088 17.2155 18 13.4921 18 9Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 9C18 4.02943 13.9706 0 9 0C4.02943 0 0 4.02943 0 9C0 13.4921 3.29115 17.2155 7.59375 17.8907V11.6016H5.30859V9H7.59375V7.01719C7.59375 4.76156 8.93742 3.51562 10.9932 3.51562C11.9776 3.51562 13.0078 3.69141 13.0078 3.69141V5.90625H11.873C10.755 5.90625 10.4062 6.60006 10.4062 7.3125V9H12.9023L12.5033 11.6016H10.4062V17.8907C14.7088 17.2155 18 13.4921 18 9Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
            <div class="overlay-last menu-list">
            <?php wp_nav_menu( array( "theme_location" => 'fullscreen-menu' ) ) ?>

                <!-- <nav>
                    <ul>
                        <li> <a href="#">Home</a> </li>
                        <li> <a href="#">About</a> </li>
                        <li> <a href="#">Services</a> </li>
                        <li> <a href="#">Projects</a> </li>
                        <li> <a href="#">Careers</a> </li>
                        <li> <a href="#">Contact</a> </li>

                    </ul>
                </nav> -->
            </div>




        </div>

        </div>

    </header>