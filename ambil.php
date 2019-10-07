<?php
include "koneksi.php";
$ambil=$koneksi->prepare("select * from pesan order by id");
$ambil->execute();
while($ulangi=$ambil->fetch()){
	// this is emoticon's operation bro
	if (strpos($ulangi['pesan'],'http://') !== false){
		$text_awal="<a href=".$ulangi['pesan']." target='_blank'>".$ulangi['pesan']."</a>";
	}else if (strpos($ulangi['pesan'],'https://') !== false){
		$text_awal="<a href=".$ulangi['pesan']." target='_blank'>".$ulangi['pesan']."</a>";
	}else{
		$text_awal=$ulangi['pesan'];
	}
	$symbol=array("[kasmaran]","[kedip]","[ketawa]","[marah]","[melet]","[nangis]",
				"[sakit]","[bye]","[maki-maki]","[cmarah]","[cmurung]","[cnangis]",
				"[csedih]","[csenyum]","[bonus]");

	$icon=array("<img src='../emot/akasmaran.gif' title='handup'>",
			"<img src='../emot/akedip.gif' title='bingung'>",
			"<img src='../emot/aketawa.gif' title='capek'>",
			"<img src='../emot/amarah.gif' title='cemen'>",
			"<img src='../emot/amelet.gif' title='cool'>",
			"<img src='../emot/anangis.gif' title='galau'>",
			"<img src='../emot/asakit.gif' title='hay'>",
			"<img src='../emot/bye.gif' title='kedip'>",
			"<img src='../emot/maki-maki.gif' title='kesetrum'>",
			"<img src='../emot/marah.gif' title='lol'>",
			"<img src='../emot/murung.gif' title='mewek'>",
			"<img src='../emot/nangis.gif' title='nangis'>",
			"<img src='../emot/sedih.gif' title='nyengir'>",
			"<img src='../emot/smile.gif' title='psimis'>",
			"<img src='../emot/bonus.png' title='rokok'>");
	$pesan=str_replace($symbol,$icon,$text_awal);
	
	
	// this is emoticon's operation bro 
	echo "<p><span class='label label-info text-center'><i class='icon-user icon-white'></i> ".$ulangi['nick']." </span><small>&nbsp;".$pesan."</small>
	<small class='muted'>(".$ulangi['waktu'].")</small></p>";
}
?>
