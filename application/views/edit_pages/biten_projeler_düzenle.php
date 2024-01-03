<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Devam eden projeler düzenle</h1>
	<form action="<?php echo base_url('edit/biten_projeler_edit_post')?>" method="post">
		<input type="text" name="header" id="header" value="<?php echo $header?>" required><br>
		<input type="text" name="body" id="body" value="<?php echo $body?>" required><br>
		<input type="hidden" name="id" value="<?php echo $id?>">
		<input type="submit" value="Kaydet">
	</form>
</body>
</html>