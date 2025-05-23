<?php get_header(); ?>

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="#intro">Welcome</a></li>
                <li><a href="#transcriptions">Transcriptions</a></li>
                <li><a href="#one">Who we are</a></li>
                <li><a href="#two">What we do</a></li>
                <li><a href="#three">Get in touch</a></li>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>Semmson</h1>
            <p>Welcome<br/>
            Design Template by <a href="http://html5up.net">HTML5 UP</a>
            <ul class="actions">
                <li><a href="#one" class="button scrolly">Learn more</a></li>
                <li><a id="request_btn" class="button scrolly">Make AJAX Request</a></li>
            </ul>    
        </div>
    </section>


    <section id="transcriptions" class="wrapper style3 fade-up">
        <div class="inner">
            <ul class="actions difficulties">
                <li><a data-filter="all" class="active button filter_button">All</a></li>
                <?php


                $args = array(
                    'taxonomy'   => 'difficulty', 
                    /* 'hide_empty' => false, */
                    'orderby'    => 'id',
                    'order'      => 'ASC',
                );
                $difficulties = get_terms($args);
                foreach($difficulties as $difficulty) { ?>
                <li><a data-filter="<?= $difficulty->slug ?>" class="button filter_button"><?= $difficulty->name . " " . $difficulty->count ?></a></li>
                <?php } ?>
            </ul>
            <ul class="actions genres">
                <li><a data-filter="all" class="active button filter_button">All</a></li>
                <?php


                $args = array(
                    'taxonomy'   => 'genre', 
                    /* 'hide_empty' => false, */
                    'orderby'    => 'id',
                    'order'      => 'ASC',
                );
                $genres = get_terms($args);
                foreach($genres as $genre) { ?>
                <li><a data-filter="<?= $genre->slug ?>" class="button filter_button"><?= $genre->name . " " . $genre->count ?></a></li>
                <?php } ?>
            </ul>
            <div class="transcriptions">
            <?php 
                
                $args = array(
                    "post_type" => "transcription"
                );
                $query = new WP_Query($args);
                
                
                while($query->have_posts()){
                    $query->the_post();

                    $tDifficulties = get_the_terms($post->ID,'difficulty');
                    $tGenres = get_the_terms($post->ID,'genre');
                    $slugs_to_classes = ""; 
                    if($tDifficulties) {
                        foreach($tDifficulties as $difficulty) {
                            $slugs_to_classes .= $difficulty->slug . " ";
    
                        }
                    }
                    if($tGenres) {
                        foreach($tGenres as $genre) {
                            $slugs_to_classes .= $genre->slug . " ";
    
                        }
                    }
                    ?>
                    
                    
                    <div class="transcription <?= $slugs_to_classes?>">
                        <a href="<?=the_permalink()?>">
                            <img src="<?php the_post_thumbnail_url()?>">
                            <div class="post-title"><?= $post->post_title?></div>
                        </a>
                        
                            
                        <!--  <span class="icon solid major fa-code"></span> -->
                    
                    </div>
                <?php } ?>  
            </div>
            <ul class="actions">
                <li><a href="/" class="button">Learn more</a></li>
            </ul>
        </div>
    </section>


    <!-- One -->
    <section id="one" class="wrapper style2 spotlights">
        <section>
            <a href="#" class="image"><img src="<?=get_template_directory_uri()?>/images/pic01.jpg" alt="" data-position="center center" /></a>
            <div class="content">
                <div class="inner">
                    <h2>Sed ipsum dolor</h2>
                    <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                    <ul class="actions">
                        <li><a href="generic.html" class="button">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a href="#" class="image"><img src="<?=get_template_directory_uri()?>/images/pic02.jpg" alt="" data-position="top center" /></a>
            <div class="content">
                <div class="inner">
                    <h2>Feugiat consequat</h2>
                    <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                    <ul class="actions">
                        <li><a href="generic.html" class="button">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <a href="#" class="image"><img src="<?=get_template_directory_uri()?>/images/pic03.jpg" alt="" data-position="25% 25%" /></a>
            <div class="content">
                <div class="inner">
                    <h2>Ultricies aliquam</h2>
                    <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
                    <ul class="actions">
                        <li><a href="generic.html" class="button">Learn more</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style3 fade-up">
        <div class="inner">
            <h2>What we do</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
            <div class="features">
                <section>
                    <span class="icon solid major fa-code"></span>
                    <h3>Lorem ipsum amet</h3>
                    <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                </section>
                <section>
                    <span class="icon solid major fa-lock"></span>
                    <h3>Aliquam sed nullam</h3>
                    <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                </section>
                <section>
                    <span class="icon solid major fa-cog"></span>
                    <h3>Sed erat ullam corper</h3>
                    <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                </section>
                <section>
                    <span class="icon solid major fa-desktop"></span>
                    <h3>Veroeros quis lorem</h3>
                    <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                </section>
                <section>
                    <span class="icon solid major fa-link"></span>
                    <h3>Urna quis bibendum</h3>
                    <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                </section>
                <section>
                    <span class="icon major fa-gem"></span>
                    <h3>Aliquam urna dapibus</h3>
                    <p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
                </section>
            </div>
            <ul class="actions">
                <li><a href="/" class="button">Learn more</a></li>
            </ul>
        </div>
    </section>
    

    <!-- Three -->
    <section id="three" class="wrapper style1 fade-up">
        <div class="inner">
            <h2>Get in touch</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
            <div class="split style1">
                <section>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" />
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="5"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><a href="" class="button submit">Send Message</a></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <ul class="contact">
                        <li>
                            <h3>Address</h3>
                            <span>12345 Somewhere Road #654<br />
                                Nashville, TN 00000-0000<br />
                                USA</span>
                        </li>
                        <li>
                            <h3>Email</h3>
                            <a href="#">user@untitled.tld</a>
                        </li>
                        <li>
                            <h3>Phone</h3>
                            <span>(000) 000-0000</span>
                        </li>
                        <li>
                            <h3>Social</h3>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>