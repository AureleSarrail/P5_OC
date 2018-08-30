<?php $viewTitle = "Creation Post";

ob_start();

?>
<div class="row">
	<div class="col-lg-offset-3 col-lg-6">
		<div class="form-group">
			<form action="index.php?action=postCreated" method="POST">
				<label for="Title">Le titre : </label>
				<input type="text"  name="title" id="Title" maxlength="255" size="100"><br>
				<label for="Head">Le chapeau : </label>
				<input type="text" name="head" id="Head" maxlength="255" size="100"><br>
				<label for="Image">L'URL de l'image : </label>
				<input type="text" name="image" id="Image" maxlength="255" size="100"><br>
				<label for="Content">Le contenu : </label>
				<textarea name="content" id="Content" rows="10" cols="100"></textarea><br>
				<div class="row">
					<input type="submit" class="col-lg-offset-5 col-lg-2 text-center">
				</div>
			</form>
		</div>
	</div>
</div>
<?php

$viewContent = ob_get_clean();

require_once('Views/template.php');