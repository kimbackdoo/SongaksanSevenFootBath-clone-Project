<?
/*
 * author	: 김재훈
 * date		: 2021-01-22
 * desc	    : 모바일사이트
 */
include_once("./_common.php");
include_once("{$g4["path"]}/lib/thumb.lib.php");
define("__INDEX",TRUE);
include_once("./head.php");
?>

<section>
	<?include_once("{$g4["path"]}/m/include/mainvisual.php");?>

	<?include_once("{$g4["path"]}/m/include/m2.php");?>
	<?include_once("{$g4["path"]}/m/include/m3.php");?>
	<?include_once("{$g4["path"]}/m/include/m4.php");?>
</section>

<?
include_once("./tail.php");
?>