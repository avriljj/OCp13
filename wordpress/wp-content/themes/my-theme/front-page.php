<?php get_header(); ?>

<div class="content-front-page">

<div id="scroll-to-top" title="Scroll to Top">
    <i class="fas fa-arrow-up"></i>
</div>

<div class="info-intro" id="home">
    <img class="profile-photo" src="http://localhost:8888/OCWPformation/p13/wordpress/wp-content/uploads/2024/01/cropped-profile-scaled-1.jpeg" alt="photo profile">
    <h1>Jin ZHAO</h1>
    <br>
    <p>Je suis <span id="dynamicSpan">Développeuse Wordpress</span></p>
    <div class="icons-social">
    <ul>
        <a href="https://www.instagram.com/"><li class="fab fa-instagram"></li></a>
        <a href="https://twitter.com/home?lang=en"><li class="fab fa-twitter"></li></a>
        <a href="https://www.pinterest.fr/homefeed/"><li class="fab fa-pinterest-p"></li></a>
    </ul>
    </div>
    <button class="intro-button" id="openEmailButton">Recrutez moi</button>
    <div class="scroll-down"><a href="#about" id="scroll-down-link"><span>Scroll down</span></a></div>
</div>
    
<div id="parallax" data-relative-input="true">

    <div data-depth="0.6"><svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg" style="transform: translate3d(-15.1px, -4.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block;"><path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none" fill-rule="evenodd"></path></svg></div>
        
</div>

<div id="parallax-2" data-relative-input="true">

    <div data-depth="0.6"><svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg" style="transform: translate3d(-45.3px, -13.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block;"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C" fill-rule="evenodd"></rect></svg></div>
        
</div>


<div class="about-container" id="about">   
    <h1>About me</h1>
    <div class="about" id="about">
    
    <div class="horizontal">
        <img class="profile-photo" src="http://localhost:8888/OCWPformation/p13/wordpress/wp-content/uploads/2024/01/cropped-profile-scaled-1.jpeg" alt="photo profile">

        <div class="about-skills horizontal">
            <div class="about-desciption">
                <p>Bonjour, je suis Jin, une passionnée du développement web spécialisé dans WordPress, HTML, CSS, JavaScript et PHP. Fort d'une expérience variée, je crée des sites web dynamiques et esthétiques, combinant design créatif et technologies avancées pour offrir des expériences utilisateur agrébles.</p>
                <button id="openPdfButton">Télécharger CV</button>
            </div>
            <div class="about-skills-progress-bar-container">
            <div class="skill">
            <div class="skill-label">Wordpress</div>
            <div class="skill-bar">
            <div class="skill-level" data-percent="50" style="width: 50%; background-color: yellow;"></div>
            </div>
            </div>

            <div class="skill">
            <div class="skill-label">HTML/CSS</div>
            <div class="skill-bar">
            <div class="skill-level" style="width: 60%; background-color: pink;"></div>
            </div>
            </div>

            <div class="skill">
            <div class="skill-label">Javascript</div>
            <div class="skill-bar">
            <div class="skill-level" style="width: 50%; background-color: aquamarine;"></div>
            </div>
            </div>

            <div class="skill">
            <div class="skill-label">PHP</div>
            <div class="skill-bar">
            <div class="skill-level" style="width: 50%; background-color: purple;"></div>
            </div>
            </div>
            </div>
        </div>
    </div>
 </div>
</div>

<div class="experiences-container" id="experiences">
    <h1>Expériences</h1>
    <div class="experiences">
        <div class="card">
            <div class="divider-vertical"></div>
            <div>
                <h3>2023-2024</h3>
                <div>
                    <h2>Openclassroom - Wordpress</h2>
                    <p>Formation en ligne dans le développement web avec Wordpress.</p>
                </div>
            </div>
            <div>
                <h3>2018-2019</h3>
                <div>
                    <h2>Licence 1 - MIASHS</h2>
                    <p>Une première année de licence en Informatique appliqué à la science humaine et sociale.</p>
                </div>
            </div>
            <div>
                <h3>2014-2016</h3>
                <div>
                    <h2>Bac - Scientifique</h2>
                    <p>Deux ans et demi à Londres qui m'as permis de pratiquer mon anglais.</p>
                </div>
            </div>
        </div>
    
    </div>

</div>

<div class="projets-container" id="projets">
    <h1>Projets</h1>
    <div>
    <div name="filter-categorie" id="category-filter" data-ajaxurl="<?php echo admin_url( 'admin-ajax.php' ); ?>">
    <a id="all-category" data-category="all">Tout</a>
    <?php
    // Get a list of unique post categories
    $unique_categories = get_unique_post_categories();
    
    foreach ($unique_categories as $cat) {
        echo '<a data-category="' . esc_attr($cat) . '">' . esc_html($cat) . '</a>';
    }
    $unique_cms = get_unique_post_cms();
    
    foreach ($unique_cms as $cat) {
        echo '<a data-category="' . esc_attr($cat) . '">' . esc_html($cat) . '</a>';
    }
    ?>
    </div>
    <div class="projets-content">
    </div>
    
    </div>

</div>

<div class="contact-container" id="contact">
    <h1>Contact</h1>
    <div class="contact">
    <?php echo do_shortcode('[contact-form-7 id="a1e1685" title="Contact form"]'); ?>
    </div>
</div>
<div class="footer">

    <p>TOUS DROITS RESERVES</p>

</div>

</div>
<script>
    // Initialize Parallax.js
    var scene = document.getElementById('parallax');
    var parallax = new Parallax(scene);
    var scene = document.getElementById('parallax-2');
    var parallax = new Parallax(scene);

    //animation filters//
    


</script>

<?php get_footer();