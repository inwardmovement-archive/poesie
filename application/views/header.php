<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// echo $this->uri->segment(1);
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand">Elegia<sub class="slogan">poèmes</sub></span>
			<img src="<?php echo img_url('pen.png'); ?>" class="navbar-brand-img" alt="logo">
			<div class="navbar-brand-img-circle"></div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="<?php echo ($this->uri->segment(1) == '') ? 'active' : ''; ?>"><a href="<?php echo base_url(); ?>">Poèmes <span class="sr-only">(current)</span></a></li>
				<li class="<?php echo ($this->uri->segment(1) == 'auteurs') ? 'active' : ''; ?>"><a href="<?php echo base_url('auteurs'); ?>">Auteur(e)s</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown <?php echo ($this->uri->segment(2) == 'identifiant') ? 'active' : ''; ?>">
					<a href="<?php echo base_url('auteur/identifiant'); ?>" data-hover="dropdown" aria-haspopup="true" aria-expanded="false">Identifiant</a>
						<ul class="dropdown-menu dropdown-menu-left" aria-labelledby="compte">
							<li><a href="<?php echo base_url('poeme/ajouter'); ?>">Ajouter un poème</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo base_url('compte'); ?>">Compte</a></li>
							<li><a href="#">Déconnexion</a></li>
						</ul>
				</li>
				<li class="<?php echo ($this->uri->segment(1) == 'messagerie') ? 'active' : ''; ?>"><a href="<?php echo base_url('messagerie'); ?>" class="unread" data-toggle="tooltip" data-placement="bottom" title="1 message(s)"><i class="fa fa-fw fa-envelope" ></i></a></li>
				<li><a href="#" class="unread" data-toggle="tooltip" data-placement="bottom" title="1 commentaire(s)"><i class="fa fa-fw fa-comment" ></i></a></li>
				<!-- <a type="button" href="https://discord.gg/0YJObolObDLK9cKI" target="_blank" class="btn btn-info navbar-btn">Chatroom</a> -->
				<div class="btn-group" role="group" aria-label="compte">
					<a type="button" href="<?php echo base_url('register'); ?>" class="btn btn-success navbar-btn">Inscription</a>
					<a type="button" href="<?php echo base_url('login'); ?>" class="btn btn-primary navbar-btn">Connexion</a>
				</div>
		  </ul>
		</div>

			<!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- <div id="header" class="jumbotron">
	<div class="container">
	  <h1>Bienvenue sur Elegia</h1>
	  <p>poésie originale contemporaine</p>
	  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
	</div>
</div> -->