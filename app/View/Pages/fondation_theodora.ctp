<div class="container">
        <div class="page-header">
                <h1>La Fondation Théodora</h1>
                
        </div>
        <div class="row-fluid">
               
                <div class="row-fluid">
                        <div class="span6">

                                <p>
                                        La Fondation Théodora a été créée en 1993 autour d’une mission: soulager par le rire le quotidien des enfants hospitalisés ou en institutions spécialisées. Pour cela, la Fondation Théodora peut compter sur le talent d’artistes professionnels, les docteurs Rêves. 
                                </p>
                                <p>
                                        Les docteurs Rêves  sont des artistes professionnels issus de formations très diverses (théâtre, musique, magie, cirque...) Ils reçoivent une formation  auprès de «La Source » Haute Ecole de la Santé afin de pouvoir exercer leur art en tenant compte des spécificités du milieu hospitalier.
                                </p>
                                <p>
                                        Ils sont par ailleurs tenus à une formation continue qui englobe les aspects artistiques, psychologiques et hospitaliers de leur activité. Cette formation pluridisciplinaire garantit une collaboration optimale avec le corps médical, étant entendu que le docteur Rêves n’exerce en aucun cas un rôle de thérapeute.
                                </p>
                        </div>
                        <!-- end description area -->
                        <!-- begin slider area -->
                        <div class="span6 top10">
                                <div class="flexslider">
                                        <ul class="slides">
                                                <li>
                                                        <?php echo $this->Html->image('theodora_1.jpg'); ?>
                                                </li>
                                                <li>
                                                        <?php echo $this->Html->image('theodora_2.jpg'); ?>
                                                </li>		
                                                <li>
                                                        <?php echo $this->Html->image('theodora_3.jpeg'); ?>
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