<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Yeni proje ekle</h1>
	<form action="<?php echo base_url('New_Record/yeni_proje_ekle_post')?>" method='post'>
		<input type="text" name="header" id="header" placeholder="Başlık"><br>
		<input type="text" name="body" id="body" placeholder="İçerik"><br>
		<input type="text" name="image" id="image" placeholder="Resim"><br>
		<input type="submit" value="Kaydet">
	</form>
</body>
</html>