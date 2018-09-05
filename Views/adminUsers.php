<?php
$viewTitle = 'Gestion Utilisateurs';

ob_start();
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Firstname</th>
      <th scope="col">Username</th>
      <th scope="col">Mail</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	$i = 0;
  	foreach ($users as $user) {
  		?>
  		<tr>
	    	<th scope="row"><?= ++$i ?></th>
	    	<td><?= $user->getName() ?></td>
	    	<td><?= $user->getFirstname() ?></td>
	    	<td><?= $user->getUsername() ?></td>
	    	<td><?= $user->getMail() ?></td>
	    	<td>
	      		<a href="index.php?action=deleteUser&amp;userId=<?= $user->getUserId() ?>">
					<button>Supprimer</button>
				</a>
			</td>
    	</tr>
    	<?php
    	$i = $i++ ;
  	}

$viewContent = ob_get_clean();

require_once('Views/template.php');