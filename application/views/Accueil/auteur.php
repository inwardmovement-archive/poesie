<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('head');
?>

	<title>Auteur - Elegia</title>
	
</head>
<body>
	
	<?php $this->load->view('header'); ?>
	
	<h4>Auteur</h4>
	<p>poèmes</p>
	<br>
	<?php echo ($this->uri->segment(2) == 'identifiant') ? '<p>ajouter un poème</p>' : ''; ?>

	<?php $this->load->view('footer'); ?>
</body>
</html>