<?php /* Template Name: Careers Page */ ?>

<?php get_header()?>

<main>

    <div class="hero hero-careers">

        <div class="hero-container">


            <h6>Careers</h6>
            <h1>
                Join our team.
            </h1>

            <p>
                We're always expanding our lively, hard-working group of creators, believers, and achievers.Let’s do
                great work together. </p>

        </div>

        <div class="more">
            <p>More</p>
        </div>

        <div class="second-container">

            <div class="img-container">
                <img src="<?= get_template_directory_uri(); ?>/dist/assets/images/careers.jpg" alt="">
            </div>

        </div>

    </div>



    <div class="life">

        <div class="life-container">
            <div class="life-title">
                <h2>The life at Nazadv.</h1>
            </div>

            <div class="life__items">


                <div class="life__item">
                    <div class="life__item-title">
                        <h3>Agility is everything.</h3>
                    </div>
                    <p>
                        Nazadv HQ enjoys a culture of energy and enthusiasm. We keep things agile and friction-free,
                        with regular client communication and quick iteration. </p>
                </div>


                <div class="life__item">
                    <div class="life__item-title">
                        <h3>Balance over burnout.</h3>
                    </div>
                    <p>
                        Of course, when the pressure is on, we can out-grind anyone. But happiness is our heartbeat, and
                        we encourage a balanced approach to work and life. </p>
                </div>

                <div class="life__item">
                    <div class="life__item-title">
                        <h3>Continuous learning.</h3>
                    </div>
                    <p>
                        We want to give every team member the right time and space to learn new skills. It's not enough
                        to just be great at what we do. Because great today is only so-so tomorrow, and irrelevant by
                        next week. We thrive when we're on our toes.
                    </p>
                </div>
            </div>

        </div>

    </div>


    <div class="careers-quote">

        <div class="careers-quote-container">

                <p>We're a mostly remote team working from home, coffee shops, and co-working spaces. But that doesn’t
                    mean we’re not tight-knit. You'll experience being part of a highly connected and supportive team,
                    always pushing each other towards growth. As a part of a fast-growing digital agency, you’ll be
                    exposed to new opportunities frequently and will rarely have a dull day.</p>
        </div>

    </div>

    <div class="positions">

        <div class="positions-container">
            <div class="positions-header">
                <h1>Our Open Positions</h1>
             <p>We are always looking for great talent to be a part of the Nazadv team. Our vision is born out of our
                dedication to digital media and a passion for technologies.</p>
                <strong>Development</strong>

            </div>


            <div class="positions-list">

                    <div class="position">
                        <div class="position-content">
                            <div class="position-header">
                                <h6>.01</h6>
                                <h2>Sr.FRONT-END DEVELOPER</h2>
                            </div>
                            <div class="position-type">
                                <h4>Remote - International</h4>
                            </div>
                            <p>
                                Nazadv is seeking a Front-End WP Developer who is motivated to combine the art of design
                                with the art of programming. The developer transforms completed designs into live,
                                interactive web experiences with beautiful, clean code and works with back-end
                                developers to integrate everything from interactive landing pages to full-fledged
                                dashboards and web apps. If this is you, please feel free to apply.

                            </p>
                        </div>
                        <div class="position-listing">
                            <a href="#">View Listing</a>
                        </div>

                    </div>


                    <div class="position">
                        <div class="position-content">
                            <div class="position-header">
                                <h6>.01</h6>
                                <h2>Jr.FRONT-END DEVELOPER</h2>
                            </div>
                            <div class="position-type">
                                <h4>Remote - International</h4>
                            </div>
                            <p>
                                Nazadv is seeking a Front-End WP Developer who is motivated to combine the art of design
                                with the art of programming. The developer transforms completed designs into live,
                                interactive web experiences with beautiful, clean code and works with back-end
                                developers to integrate everything from interactive landing pages to full-fledged
                                dashboards and web apps. If this is you, please feel free to apply.

                            </p>
                        </div>
                        <div class="position-listing">
                            <a href="#">View Listing</a>
                        </div>

                    </div>


            </div>


        </div>

    </div>

    <div class="work-nazadv">
        <div class="work-nazadv-container">
            <div class="work-image">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/careers2.jpg" alt="">
            </div>
            <div class="work-text">
                <h1>Work with Nazadv</h1>
                <p>
                Working with us will be a pretty experience, and you want in.<br/>
If you don't see one that fits, but still think you'd be a great addition, please say hi.
                </p>
            </div>
        </div>
    </div>

    <?php require 'template-parts/form.php' ?>
</main>


<?php get_footer(); ?>