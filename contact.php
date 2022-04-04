<?php /* Template Name: Contact Page */ ?>
<?php get_header() ?>

<main class="contact-page">
    <div class="hero hero-contact">
        <div class="hero-container">
            <h6>Contact Us</h6>

            <h1>Let's kickstart your business success.</h1>

            <p>Whether you need help developing your website or app, or just want to say hello, drop us a line anytime.
            </p>

        </div>

        <div class="more">
            <p>More</p>
        </div>

        <div class="second-container">

            <form action="">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name*" class="input" id="">
                </div>

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email*" class="input" id="">
                </div>


                <div class="form-group">
                    <input type="phone" name="phone" placeholder="Phone Number" class="input" id="">
                </div>

                <div class="checkbox-group">

                    <p>What services are you interested in?</p>

                    <label for="product" class="checkbox">
                        <input type="checkbox" class="input-checkbox" name="product" id="product">
                        Product & MVP
                    </label>

                    <label for="Marketing" class="checkbox">
                        <input type="checkbox" class="input-checkbox" name="Marketing" id="Marketing">
                        Marketing & Communication
                    </label>

                    <label for="web" class="checkbox">
                        <input type="checkbox" class="input-checkbox" name="web" id="web">
                        Web Design
                    </label>

                </div>

                <div class="form-group">
                    <label>Budget Range?</label>
                    <select name="budget" id="">
                        <option>Prefer Not To Say</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea name="" id="" placeholder="Message" cols="30" rows="3"></textarea>
                </div>

                <div class="submit-btn-container">
                    <input type="submit" value="Send Now" class="submit-btn">
                </div>


            </form>

        </div>

    </div>

    <div class="contact-bottom">
        <div class="contact-bottom-container">
            <div class="contact-image">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/contact.png" alt="img-man">
            </div>

            <div class="openings">
                <h1>Ready for a new job?</h1>
                <p>We're always expanding our lively, hard-working group of creators, believers, and achievers.Let’s do
                    great work together.</p>

                <a href="#">See Current Openings</a>

            </div>
        </div>

    </div>


</main>

<?php get_footer() ?>