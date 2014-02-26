<div class="container">
        <div class="page-header">
                <h1>Nous contacter</h1>
        </div>
        <div class="row-fluid top30">
                <div class="span6">

                        <?php echo $this->Form->create('Contact'); ?>
                        <?php echo $this->Form->input('lastname', array('label' => '', 'placeholder' => 'Nom', 'class' => 'span12')); ?>
                        <?php echo $this->Form->input('firstname', array('label' => '', 'placeholder' => 'Prénom', 'class' => 'span12')); ?>
                        <?php echo $this->Form->input('email', array('label' => '', 'placeholder' => 'E-mail', 'class' => 'span12')); ?>
                        <?php echo $this->Form->input('subject', array('label' => '', 'placeholder' => 'Sujet', 'class' => 'span12')); ?>
                        <?php echo $this->Form->input('message', array('type' => 'textarea', 'label' => '', 'placeholder' => 'Message', 'class' => 'span12')); ?>
                        <?php echo $this->Form->submit('ENVOYER', array('class' => 'btn btn-primary top10')); ?>
                        <?php echo $this->Form->end(); ?>

                </div>
                <div class="span6">
                        <div class="box3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2745.6085001772753!2d6.6351268!3d46.5158595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c2fcb5da5f31f%3A0xbd88a8b8c09aa750!2sAvenue+de+Rosemont+5!5e0!3m2!1sfr!2s!4v1393410350486" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                <br>
                                <i class="icon-map-marker"></i> &nbsp;&nbsp;Adresse: Av. de Rosemont 5, case postale 579, 1001 Lausanne 
                                <p>
                                </p>
                                <i class="icon-reorder"></i> &nbsp;Heures d'ouverture:  <ul><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lundi – Jeudi : 08h00-12h00  13h30-18h00</li> <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendredi : 8h00-12h00 13h30-17h30</li></ul>
                                <p>
                                </p>
                                <i class="icon-phone"></i> &nbsp;Téléphone: +41 (0)21 321 65 65
                                <p>
                                </p>
                        </div>
                </div>
        </div>
</div>
