<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Fiduciaire Dreyfus et Zurbuchen');
?>
<!DOCTYPE html>
<html>
        <head>
                <?php echo $this->Html->charset(); ?>
                <title>
                        <?php echo $cakeDescription ?>:
                        <?php echo $title_for_layout; ?>
                </title>
                
                <?php 
                
                echo $this->Html->meta('description', 'La Fiduciaire Dreyfus et Zurbuchen a été fondée en 1947 à Lausanne par Georges Dreyfus, expert-comptable diplômé et précurseur dans la formation des collaborateurs qui allaient lui succéder.');
                
                echo $this->Html->meta('keywords', 'Fiduciaire Lausanne, Gestion globale de patrimoines familiaux, Conseil fiscal et de prévoyance, Conseil 
d’entreprise, Expertise et 
évaluation');
              
                echo $this->Html->meta('icon');

                echo $this->Html->css(array('bootstrap', 'style', 'camera', 'icons', 'skin-blue', 'bootstrap-responsive', 'custom'));

                echo $this->Html->script(array('jquery', 'bootstrap', 'plugins', 'custom'));
                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->fetch('script');
                ?>
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        </head>
        <body>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44952673-6', 'fdzsa.ch');
  ga('send', 'pageview');

</script>

                <div class="boxed">
                        <div class="body">
                                <?php echo $this->element('menu') ?>
                                <div class="container main" >
                                        <?php echo $this->Session->flash(); ?>
                                        <?php echo $this->fetch('content'); ?>
                                </div>
                                <?php echo $this->element('footer') ?>
                        </div>
                </div>


                <?php echo $this->element('sql_dump'); ?>



        </body>
</html>
