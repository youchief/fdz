<header>
    <div class="container clearfix">
        <div class="row-fluid">
            <div class="span12">
                <h1 class="brandlogo">
                    <?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => 'Fiduciaire FDZ', 'width' => '80%')), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape' => false)) ?>

                </h1>

                <div class="text-right birthday hidden-phone"><?php echo $this->Html->image('65ansFDZ_BIS.png') ?></div>
                <div class="clearfix">
                </div>

                <div class="row-nav navbar">
                    <div class="navbar-inner">
                        <ul id="nav" class="nav">
                            <li class="main_nav home_menu <?php if ($this->here == '/') {
                                echo "selected";
                            } ?>"><?php echo $this->Html->link('Accueil', array('controller' => 'pages', 'action' => 'display', 'home')) ?></li>
                            <li class="main_nav about_menu <?php if ($this->here == '/a-propos') {
                                echo "selected";
                            } ?>"><?php echo $this->Html->link('FDZ en bref', array('controller' => 'pages', 'action' => 'display', 'about')) ?></li>
                            <li class="dropdown" class="main_nav prestations_menu"><a href="#" class="dropdown-toggle"
                                                                                      data-toggle="dropdown">Nos
                                    compétences</a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li <?php if ($this->here == '/gestion_patrimoines_familiaux') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('Patrimoines familiaux', array('controller' => 'pages', 'action' => 'display', 'gestion_patrimoines_familiaux')) ?></li>
                                    <li <?php if ($this->here == '/conseil-fiscal-et-comptable') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('Conseil fiscal et prévoyance', array('controller' => 'pages', 'action' => 'display', 'conseil_fiscal_et_comptable')) ?></li>
                                    <li <?php if ($this->here == '/conseil-d-entreprise') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('Conseil d’entreprise', array('controller' => 'pages', 'action' => 'display', 'conseil_d_entreprise')) ?></li>
                                    <li <?php if ($this->here == '/expertise') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('Expertise et évaluation', array('controller' => 'pages', 'action' => 'display', 'expertise')) ?></li>
                                    <li <?php if ($this->here == '/comptabilite-salaire') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('Comptabilité et salaires', array('controller' => 'pages', 'action' => 'display', 'comptabilite_salaire')) ?></li>
                                </ul>
                            </li>
                            <li class="dropdown soutiens_menu" class="main_nav"><a href="#" class="dropdown-toggle"
                                                                                   data-toggle="dropdown">Nos
                                    engagements</a>
                                <ul class="dropdown-menu js-activated" style="display: none;">
                                    <li <?php if ($this->here == '/fondation-theodora') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('La Fondation Theodora', array('controller' => 'pages', 'action' => 'display', 'fondation_theodora')) ?></li>
                                    <li <?php if ($this->here == '/fondation-theodora') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('La Fondation Solyna', array('controller' => 'pages', 'action' => 'display', 'fondation_solyna')) ?></li>
                                    <li <?php if ($this->here == '/fondation-theodora') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('La Fondation Ashah Orphanage', array('controller' => 'pages', 'action' => 'display', 'ashah_orphanage')) ?></li>
                                    <li <?php if ($this->here == '/theatre-jorat') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('Le Théâtre du Jorat', array('controller' => 'pages', 'action' => 'display', 'theatre_jorat')) ?></li>
                                    <li <?php if ($this->here == '/conseil-d-entreprise') {
                                        echo "selected";
                                    } ?>><?php echo $this->Html->link('La Fondation Georges Dreyfus', array('controller' => 'pages', 'action' => 'display', 'georges_dreyfus')) ?></li>
                                </ul>
                            </li>
                            <li class="main_nav collaborateur_menu <?php if ($this->here == '/collaborateur') {
                                echo "selected";
                            } ?>"><?php echo $this->Html->link('Collaborateurs', array('controller' => 'pages', 'action' => 'display', 'collaborateurs')) ?></li>

                            <li class="main_nav contact_menu <?php if ($this->here == '/contact') {
                                echo "selected";
                            } ?>"><?php echo $this->Html->link('Contact', array('controller' => 'contacts', 'action' => 'index')) ?></li>
                        </ul>
                        <div id="search" class="hidden-phone hidden-tablet">
                            <a href="mailto:info@fdzsa.ch"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>