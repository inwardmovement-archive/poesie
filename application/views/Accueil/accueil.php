<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head'); 
?>

	<title>Accueil - Elegia</title>
	
</head>
<body>

<?php $this->load->view('header'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9">
			<div id="liste-poemes" class="panel panel-default">
			  <div class="panel-heading">Derniers poèmes</div>
				  <div class="list-group">
					  <a href="#" class="list-group-item liste-titre-poeme"><div class="liste-titre-poeme">Titre</div></a><a href="#" class="list-group-item liste-auteur-poeme"><div class="liste-auteur-poeme">Auteur</div></a>
					   <a href="#" class="list-group-item liste-titre-poeme"><div class="liste-titre-poeme">Titre</div></a><a href="#" class="list-group-item liste-auteur-poeme"><div class="liste-auteur-poeme">Auteur</div></a>
					   <a href="#" class="list-group-item liste-titre-poeme"><div class="liste-titre-poeme">Titre</div></a><a href="#" class="list-group-item liste-auteur-poeme"><div class="liste-auteur-poeme">Auteur</div></a>
					   <a href="#" class="list-group-item liste-titre-poeme"><div class="liste-titre-poeme">Titre</div></a><a href="#" class="list-group-item liste-auteur-poeme"><div class="liste-auteur-poeme">Auteur</div></a>
					</div>
			</div>
		</div>
		
		<?php $this->load->view('sidebar'); ?>
	</div>
</div>

<?php $this->load->view('footer'); ?>
</body>
</html>