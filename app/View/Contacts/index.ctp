<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" />
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" />
<![endif]-->

<script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>


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
                                <div id="map"></div>
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


<script>

        var map = L.map('map').setView([46.5158595, 6.63512679999], 14);

        L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
                maxZoom: 18,
        }).addTo(map);
        var marker = L.marker([46.5158595, 6.63512679999]).addTo(map);

</script>