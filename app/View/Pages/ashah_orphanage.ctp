<div>
        <div class="row-fluid">
                <div class="page-header">
                        <h1>La Fondation Ashah Orphanage</h1>

                </div>

                <div class="row-fluid">
                        <div class="span6">

                                <p>
                                        Fondée en 1999 par une femme, Lakhputi Sherpa, Ashah Orphanage est un toit qui redonne à quelques orphelins ou démunis leur droit à l’enfance, à l’éducation et à l’amour.                                       </p>
                                <p>
                                        Constituée en Fondation de droit suisse sous l’impulsion de Brigitte et Patrick Susse, Ashah Orphanage s’est engagée vis-à-vis des autorités de Kathmandu au Népal à inscrire son action dans la durée. Car on ne délaisse pas deux fois un enfant dans la vie.                                       </p>
                                <p>
                                        Un petit nombre de garçons et jeunes filles bénéficie d’une ambiance familiale, d’une éducation et d’un enseignement scolaire bilingue népalais-anglais. Orphelins, répudiés ou abandonnés, parfois simplement parce qu’un de leur parent est en prison, ces enfants ont onze ans de moyenne d’âge. La plus jeune, Drolma-Dekyi, est née en 2005 et fut accueillie au deuxième jour de sa vie. Jusqu’à la fin de leurs études et leur entrée dans la vie professionnelle, ils doivent pouvoir compter sur nous.
                                </p>

                        </div>
                        <!-- end description area -->
                        <!-- begin slider area -->
                        <div class="span6 top10">
                                <div class="flexslider">
                                        <ul class="slides">
                                                <li>
                                                        <?php echo $this->Html->image('ashah/slide1.png'); ?>
                                                </li>
                                                <li>
                                                        <?php echo $this->Html->image('ashah/slide2.png'); ?>
                                                </li>		
                                                <li>
                                                        <?php echo $this->Html->image('ashah/slide3.png'); ?>
                                                </li>	
                                        </ul>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                </div>
                <!-- end slider area -->
        </div>
</div>

<script type="text/javascript">
        $(window).load(function() {
                $('.flexslider').flexslider({
                        pauseOnHover: false,
                        slideshow: false, //Boolean: Animate slider automatically
                        slideshowSpeed: 4000, //Integer: Set the speed of the slideshow cycling, in milliseconds
                        animationSpeed: 1300,
                        animation: "slide", //String: Select your animation type, "fade" or "slide"
                        easing: "swing", //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
                        direction: "horizontal",
                        controlNav: false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
                        directionNav: true
                });
        });

</script>