drop database if exists proje

create database proje character SET utf8 COLLATE utf8_general_ci;

use proje

drop table if exists admins;
drop taple if exists hakkimizda;

CREATE TABLE IF NOT EXISTS `proje`.`admins` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`username` VARCHAR(50) NOT NULL ,
	`email` VARCHAR(75) NOT NULL ,
	`password` VARCHAR(50) NOT NULL ,
	`createdAt` TIMESTAMP NOT NULL ,
	PRIMARY KEY (`id`),
	UNIQUE (`username`),
	UNIQUE (`email`)
) ENGINE = InnoDB;

CREATE TABLE `proje`.`hakkimizda` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`header` VARCHAR(100) NOT NULL ,
	`body` VARCHAR(10000) NOT NULL ,
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Kullanıcı adı = wormer
-- email = deneme@gmail.com
-- Şifre wormer ya da d29ybWVy

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `createdAt`) VALUES (
	NULL,
	'wormer',
	'deneme@gmail.com',
	'd29ybWVy',
	current_timestamp()
);

INSERT INTO `hakkimizda` (`id`, `header`, `body`) VALUES (NULL, 'AZİZOĞULLARI İNŞAAT', '1986 yılında taşeron olarak çalışmaya başlayan Sıddık ALACALI, Necat ALACALI ve Mehmet ALACALI olmak üzere 3 erkek kardeşlerin kurduğu köklü bir aile şirketidir. 11 yıl boyunca taşeronluk tecrübesi edinmişlerdir.1997 ile 2004 yılları arasında ihale usulü ile inşaat sektöründe çalışmalarına devam etmişlerdir.2004 yılından sonraki dönemde yap-sat metoduyla bir çok kişiyi ev sahibi etmektedir.\r\n Aydın\\\'da kalite ve konforu en uygun şartlarla size sunmaktan mutluluk duyuyoruz. Firmamız çağın gereksinimlerini karşılamak ve geleceğe sağlam, kaliteli, yüksek nitelikli yapılar bırakmak hedefiyle, teknolojik donanıma, ekipmana ve insan kaynağına sürekli yatırım yapmaktadır. Kadrosunun eğitim, birikim ve deneyim sahibi olmasına, uzmanlıklarını geliştirmesine, takım çalışmasının uyumlu biçimde devam etmesine ve çalışan güvenliğinin yüksek düzeyde korunmasına büyük özen göstermektedir.')
