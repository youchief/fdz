<div>
        <div class="row-fluid">
                <div class="page-header">
                        <h1> Théâtre du Jorat</h1>

                </div>

                <div class="row-fluid">
                        <div class="span6">

                                <p>
                                        Le Théâtre du Jorat, inauguré voici 100 ans à Mézières, bourgade située à une vingtaine de kilomètres de Lausanne, est un bâtiment entièrement construit en bois.
                                       </p>
                                       <p>
                                               Vu de l'extérieur, il ressemble à une vaste grange, parfaitement intégrée aux fermes du village; les Vaudois le surnomment d'ailleurs la "Grange Sublime".
                                       </p>
                                       <p>
                                               De l'intérieur, il fait penser à un théâtre grec, rompant avec la tradition des théâtres à l'italienne - qui prévalait encore au début du siècle - ses gradins offrent à un peu moins de 1'000 spectateurs une vision parfaite de la scène. Ses parois de bois lui garantissent une si bonne acoustique que d'aucuns le comparent à un "petit Bayreuth" ou encore à un violon.
                                       </p>
                                       <p>
                                              Mais si le Théâtre du Jorat est cher aux Vaudois, ce n'est pas seulement en raison de ses qualités esthétiques et acoustiques. C'est aussi parce qu'il est un théâtre à part. Alors que les autres théâtres sont en ville, il est perdu à la campagne. Tandis qu'ailleurs on joue en hiver, le Théâtre du Jorat est un théâtre d'été. 
                                       </p>
                                       <p>
                                               Le Théâtre du Jorat présente chaque été une saison populaire complète mêlant à la production d'un spectacle (en principe dramatique et musical) des spectacles de théâtre, de danse, de musique et de nouveau cirque.
                                       </p>
                        </div>
                        <!-- end description area -->
                        <!-- begin slider area -->
                        <div class="span6 top10">
                                <div class="flexslider">
                                        <ul class="slides">
                                                <li>
                                                        <?php echo $this->Html->image('theatre_jorat1.jpg'); ?>
                                                </li>
                                                <li>
                                                        <?php echo $this->Html->image('theatre_jorat2.jpg'); ?>
                                                </li>		
                                                <li>
                                                        <?php echo $this->Html->image('theatre_jorat3.jpg'); ?>
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