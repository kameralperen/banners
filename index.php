<?php
require_once("baglan.php");
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
        $BannerSorgusu      =   $db->prepare("SELECT * FROM bannerlar ORDER BY gosterimsayisi ASC LIMIT 1");
        $BannerSorgusu->execute();
        $BannerDegerleri    =   $BannerSorgusu->fetch(PDO::FETCH_ASSOC);
    ?>
    <table width=1000 border=0 align=center cellpading=0 cellspacing=0>
        <tr>
            <td><img src="dosyalar/<?php echo $BannerDegerleri["bannerismi"]; ?>" ></td>
        </tr>
    </table>
</body>
</html>
<?php
$BannerGuncelle     =   $db->prepare("UPDATE bannerlar SET gosterimsayisi=gosterimsayisi+1 WHERE id = ?");
$BannerGuncelle->execute([$BannerDegerleri["id"]]);

$db =   null;
?>