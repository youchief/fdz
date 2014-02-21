<div class="row-fluid text-center">
        <div class="span12">
                <div class="flexslider">
                        <ul class="slides">
                                <li>
                                        <div class="intro box box" id="intro">

                                                <p class="featured lead intro1">
                                                        Le respect de l’éthique et l’exigence de la qualité ont contribué à l’essor de notre société comme au développement de notre clientèle suisse et internationale.</p> 

                                        </div>
                                </li>
                                <li>
                                        <div class="intro box box" id="intro">
                                                <p class="featured lead intro2">Nous nous attachons par-dessus tout à servir nos clients comme nous souhaiterions l’être nous-mêmes.
                                                </p>
                                        </div>

                                </li>		

                        </ul>
                </div>

        </div>
</div>
<div class="row-fluid graysection">
        <div class="span3">
                <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">

                                <a href="/gestion-patrimoines-familiaux">
                                        <i class="fontawesome-icon medium circle-white center  icon-group"></i>
                                </a>
                        </div>
                        <!--icon box top -->
                        <h4>Gestion globale de patrimoines familiaux</h4>
                        <p>
                                Nous proposons aux familles détentrices d’un patrimoine un service personnalisé dans les domaines administratif, fiscal et successoral. 
                        </p>
                        <p>
                                <?php echo $this->Html->link('En savoir plus  →', array('controller' => 'pages', 'action' => 'display', 'gestion_patrimoines_familiaux')) ?>
                        </p>
                </div>
                <!--grey box -->
        </div>
        <!--/span3-->
        <div class="span3">
                <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">

                                <a href="/conseil-fiscal-et-prevoyance">
                                        <i class="fontawesome-icon medium circle-white center icon-pencil"></i>
                                </a>
                        </div>
                        <!--icon box top -->
                        <h4>Conseil fiscal et de prévoyance</h4>
                        <p>
                                Nous négocions et suivons tous les aspects fiscaux des personnes physiques et morales établies en Suisse ou désireuses de s’y installer. Notre réseau de partenaires...
                        </p>
                        <p>
                                <?php echo $this->Html->link('En savoir plus  →', '/conseil-fiscal-et-prevoyance') ?>


                        </p>
                </div>
                <!--grey box -->
        </div>
        <!--/span3-->
        <div class="span3">
                <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                                <a href="/conseil-d-entreprise">
                                        <i class="fontawesome-icon medium circle-white center icon-sitemap"></i>
                                </a>
                        </div>
                        <!--icon box top -->
                        <h4>Conseil <br>d’entreprise</h4>
                        <p>
                                Nous conseillons les entreprises dans leur développement stratégique et les assistons dans les processus de transmission, de fusions et d’acquisitions.
                        </p>
                        <p>
                                <?php echo $this->Html->link('En savoir plus  →', array('controller' => 'pages', 'action' => 'display', 'conseil_d_entreprise')) ?>

                        </p>
                </div>
                <!--grey box -->
        </div>
        <div class="span3">
                <div class="grey-box-icon">
                        <div class="icon-box-top grey-box-icon-pos">
                                <a href="/expertise">
                                        <i class="fontawesome-icon medium circle-white center icon-legal"></i>
                                </a>
                        </div>
                        <!--icon box top -->
                        <h4>Expertise et <br>évaluation</h4>
                        <p>
                                Les responsables de notre société sont régulièrement chargés de missions d’expertises judiciaires. Ils sont appelés à siéger dans diverses commissions...

                        </p>
                        <p>
                                <?php echo $this->Html->link('En savoir plus  →', array('controller' => 'pages', 'action' => 'display', 'expertise')) ?>

                        </p>
                </div>
                <!--grey box -->
        </div>
</div>

<script type="text/javascript">
        $(window).load(function() {
                $('.flexslider').flexslider({
                        pauseOnHover: false,
                        slideshow: true, //Boolean: Animate slider automatically
                        slideshowSpeed: 4000, //Integer: Set the speed of the slideshow cycling, in milliseconds
                        animationSpeed: 1300,
                        animation: "fade", //String: Select your animation type, "fade" or "slide"
                        easing: "swing", //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
                        direction: "horizontal",
                        controlNav: false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                        directionNav: false
                });
        });

</script>