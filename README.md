# web-chatku
web chating sederhana

# Description
web-chatku adalah applikasi web chating sederhana yang dibuat dengan php dan mysql sebagai database-nya, btw ini bukan buatan saya asli ini adalah rebuild dari <a href="http://jagocoding.com/tutorial/1042/Membuat_Web_Chatting_dengan_Ajax_Jquery_PHP_dan_Bootstrap_2_3_2_Part_1">original script</a> yang dibuat tahun 2015-an jadi saya hanya memperbaruinya sedikit serta menambahkan beberapa fiturnya, dan btw walaupun sudah saya rebuild sc ini masih banyak bugnya yang mau ngembangi lagi silahkan atau yang hanya ingin coba" silahkan hehe.

# Note
sebelum menggunakannya buat dahulu sebuat database di mysql dengan nama 'nge_chat'.<br>
lalu ketikan perintah dibawah ini.
```
use nge_chat;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";

CREATE TABLE `online` (
  `id` int(10) NOT NULL,
  `nick` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `waktu` time NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `pesan` (
  `id` int(10) NOT NULL,
  `nick` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pesan` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `waktu` time NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=216 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `online`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;

ALTER TABLE `pesan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=216;

ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
```
