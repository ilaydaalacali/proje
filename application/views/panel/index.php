<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Panel sayfası</h1>
	<a href="<?php echo base_url("edit/hakkimizda")?>">Hakkımızda düzenle</a><br>
	<a href="<?php echo base_url("show/yeni_projeler")?>">Yeni Projeler düzenle</a><br>
	<a href="<?php echo base_url("show/devam_eden_projeler")?>">Devam eden projeler düzenle</a><br>
	<a href="<?php echo base_url("show/biten_projeler")?>">Biten projeler düzenle</a><br>
	<hr>
	<a href="<?php echo base_url("new/yeni_proje")?>">Yeni projeler ekle</a><br>
	<a href="<?php echo base_url("new/devam_eden_proje")?>">Devam eden projeler ekle</a><br>
	<a href="<?php echo base_url("new/biten_proje")?>">Biten projeler ekle</a><br>
</body>
</html>