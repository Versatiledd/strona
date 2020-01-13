<?php
    get_header(); ?>

    <section class="home">
        <div class="container">
            <div class="description">
                 <h2 class="description__title">All The Tools You Need To Build A Successful Online Business</h2>
                 <p class="description_paragraph">A team of 100+ experienced developers and designers, ready to help you build your web and mobile applications.</p>
            </div>
            <div class="buttons">
                <button class="btn-home">Get Started</button>
                <button class="btn-video">Video</button>
            </div>
        </div>
        <div class="container-img">
            <div class="image">
                <img src="<?php echo get_theme_file_uri('images/front.svg'); ?>" alt="technology">
            </div>
        </div>
    </section>
    <section class="info"> 
        <div class="info__title">
        <p class="description_paragraph info__size">We Are Fantasy We've got you covered on</p>
        <button class="info__btn">Learn More</button>
        </div>
        <div class="container-info">
        <div class="information__acapit">
            <p class="description_paragraph padding__size">Every product must make a statement and we’re ready to create it with holistic approach to design. We believe that payments is a problem rooted in code, not finance. We obsessively seek out elegant</p>
            <p class="description_paragraph padding__size">composable abstractions that enable robust, scalable, flexible integrations. Because we eliminate needless complexity and extraneous details, you can get up and running with Stripe in just a couple of minutes</p>
        </div>
        <div class="solutions">
            <div class="solution-item">
                <div class="image-item">
                    <img src="<?php echo get_theme_file_uri('images/img.png');?>" alt="">
                </div>
                <h4 class="info-title">Product Design</h2>
                <p class="padding__size">Every product must make a statement and we’re ready to create it with holistic approach to design.</p>
            </div>
            <div class="solution-item">
                <div class="background"></div>
                <div class="image-item">
                    <img src="<?php echo get_theme_file_uri('images/moon.png'); ?>" alt="">
                </div>
                <h4 class="info-title">Creative Web Solutions</h2>
                <p class="padding__size">We translate your business goals and objectives into insightful UX, remarkable UI and distinctive </p>
            </div>
        </div>
        </div>  
    </section>
    <section class="agency">
        <div class="container-agency">
            <div class="agency-info">
                <h3 class="info-title title-color">About the Agency</h4>
                <h4 class="description__title">Insights and resources to help drive your business forward faster.</h4>
                <p class="padding__size">We build results-oriented brand strategies and continually refine your campaigns for the greatest outcome. From full-scale digital marketing and advertising strategy, right through to our precise execution and reporting...that's right, we've got you covered</p>
                <button class="btn-agency">Read Success Story</button>
            </div>
            <div class="agency-image">
                <div class="agency__img">
                    <img class="img" src="<?php echo get_theme_file_uri('images/agency.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="results">
        <div class="container-results">
            <div class="container-layer">
                <img class="img-layer" src="<?php echo get_theme_file_uri('/images/layer-gray.png');?>" alt="">
            </div>
            <div class="white-circle">
                <div class="wrapper-item">
                 <h5 class="wrapper__title">Total inwest</h5>
                 <h6 class="wrapper__info">15 milions</h6>
                </div>
            </div>
            <div class="white-circle">
                <div class="wrapper-item">
                  <h5 class="wrapper__title">Project Done </h5>
                  <h6 class="wrapper__info">25 K+</h6>
                </div>
            </div>
            <div class="white-circle">
                <div class="wrapper-item">
                  <h5 class="wrapper__title">Offices</h5>
                  <h6 class="wrapper__info">04</h6>
                </div>
            </div>
            <div class="white-circle">
            <div class="wrapper-item">
                  <h5 class="wrapper__title">Happy Client</h5>
                  <h6 class="wrapper__info">90k+</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="service">
        <div class="container-service">
            <div class="info-service">
                <h5 class="info-title title-color">Our services</h5>
                <p class="description__title">Build lasting relationships with customers</p>
            </div>
            <div class="items-service">
                <div class="single-item">
                     <div class="image-item">
                         <i class="fas fa-podcast margin-up"></i>
                     </div>
                        <h4 class="info-title color-item">Interface design</h4>
                        <p class="padding__size">Every product must make a statement and we’re ready to create it with holistic approach to design.</p>
                </div>
                <div class="single-item">
                     <div class="image-item">
                       <i class="fas fa-robot margin-up"></i>
                     </div>
                        <h4 class="info-title color-item">Creative Web Solution</h4>
                        <p class="padding__size">We translate your business goals and objectives into insightful UX, remarkable UI and distinctive </p>
                </div>
                <div class="single-item">
                     <div class="image-item">
                      <i class="fas fa-chart-area margin-up"></i>
                     </div>
                        <h5 class="info-title color-item">Business Analysis</h5>
                        <p class="padding__size">Every product must make a statement and we’re ready to create it with holistic approach to design.</p>
                </div>
                <div class="single-item">
                     <div class="image-item">
                      <i class="fas fa-atom margin-up"></i>
                     </div>
                        <h6 class="info-title color-item">Design & Development</h6>
                        <p class="padding__size">Business Analysis is the practice of enabling change in an organizational context, by defining needs </p>
                </div>
            </div>
        </div>
    </section>
    <section class="team">  
        <div class="container-team">
            <div class="single-person">
                <div class="image-person">
                <img src="<?php echo get_theme_file_uri('/images/person1.png');?>" class="face-img" alt="" srcset="">
                </div>
                <h5 class="title-person">Mateusz Dudziec</h5>
                <strong class="title-job">Full Stack Developer</strong>
            </div>
            <div class="single-person">
                <div class="image-person">
                <img src="<?php echo get_theme_file_uri('/images/person2.png');?>" class="face-img" alt="" srcset="">
                </div>
                <h5 class="title-person">Bartek Cylwik</h5>
                <strong class="title-job">Python Developer AI Enginner</strong>
            </div>
            <div class="single-person">
                <div class="image-person">
                <img src="<?php echo get_theme_file_uri('/images/person3.png');?>" class="face-img" alt="" srcset="">
                </div>
                <h5 class="title-person">Marcin Bancerz</h5>
                <strong class="title-job">Junior Java Developer</strong>
            </div>
            <div class="single-person">
                <div class="image-person">
                <img src="<?php echo get_theme_file_uri('/images/person4.png');?>" class="face-img" alt="" srcset="">
                </div>
                <h5 class="title-person">Andrzej z Bydgoszczy</h5>
                <strong class="title-job">CEO firmy</strong>
            </div>
        </div>
    </section>
<?php get_footer();
?>