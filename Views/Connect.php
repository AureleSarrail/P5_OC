<?php

$viewTitle = "Connection";

ob_start();

?>

<div class="row">
	<form action="index.php?action=testConnect" method="POST" class='text-center'>
		<label>Votre Pseudo : <input type="text"></label><br>
		<label>Votre mot de passe : <input type="password"></label><br>
		<input type="submit">
	</form>
</div>

<?php

$viewContent = ob_get_clean();

require_once('Views/template.php');