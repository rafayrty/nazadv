<?php /* Template Name: Portfolio Page */ ?>

<?php get_header() ?>
<main>
<div class="hero hero-portfolio">

    <div class="hero-container">

        <h6>Our Works</h6>



        <h1>Creative outcomes that drive real results.</h1>

        <p>Here are some of the clients we have worked with and what we have achieved.</p>

    </div>

    <div class="more">
        <p>More</p>
    </div>

    <div class="second-container">

       

        <div class="img-container">
            <img src="<?= get_template_directory_uri(); ?>/dist/assets/images/image1.jpg" alt="">
        </div>

    </div>


</div>


<div class="projects">

<div class="projects-container">


<div class="projects-categories">
    <div class="category">
        <a href="#" class="active">All</a>
    </div>
    <div class="category">
        <a href="#">Graphic Design</a>
    </div>
    <div class="category">
        <a href="#">Web Design</a>
    </div>
    <div class="category">
        <a href="#">Product & MVP</a>
    </div>
    <div class="category">
        <a href="#">Marketing & Communication</a>
    </div>
</div>

<div class="projects-list">

    <div class="project">
        <div class="project-img">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slide1.jpg" alt="">
        </div>
        <div class="project-categories">
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Web Development</a></li>

            </ul>
        </div>

        <div class="project-description">
            <div class="project-text">
                <h1>Regus</h1>
                <p>Landing page of the centre branch for new targeted audiences</p>
            </div>

            <div class="view-project">
                <a href="#">View Project</a>
            </div>
        </div>
    </div>


    <div class="project">
        <div class="project-img">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slide1.jpg" alt="">
        </div>
        <div class="project-categories">
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Web Development</a></li>

            </ul>
        </div>

        <div class="project-description">
            <div class="project-text">
                <h1>Regus</h1>
                <p>Landing page of the centre branch for new targeted audiences</p>
            </div>

            <div class="view-project">
                <a href="#">View Project</a>
            </div>
        </div>
    </div>

    <div class="project">
        <div class="project-img">
            <img src="<?= get_template_directory_uri() ?>/dist/assets/images/slide1.jpg" alt="">
        </div>
        <div class="project-categories">
            <ul>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Web Development</a></li>

            </ul>
        </div>

        <div class="project-description">
            <div class="project-text">
                <h1>Regus</h1>
                <p>Landing page of the centre branch for new targeted audiences</p>
            </div>

            <div class="view-project">
                <a href="#">View Project</a>
            </div>
        </div>
    </div>

    
</div>

</div>


</div>
<?php require 'template-parts/form.php'; ?>
</main>

<?php get_footer() ?>