<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<?if(!defined("__INDEX")){?>
	<?if($bo_table){?>
	</div>
	<?}?>
	</section>
</section>
</div>
<?}?>

<? 
if(file_exists("{$g4[path]}/res/include/sub{$tott}full.php")) {
	include_once("$g4[path]/res/include/sub{$tott}full.php");
}else if(file_exists("{$g4[path]}/res/include/sub{$tot}full.php")) {
	include_once("$g4[path]/res/include/sub{$tot}full.php");
}else if(file_exists("{$g4[path]}/res/include/sub{$pageNum}full.php")) {
	include_once("$g4[path]/res/include/sub{$pageNum}full.php");
}?>

<style>
.position { display: inline-block; width: 100%; color: #fff; font-size: 15px; line-height: 30px; font-weight: 300; padding: 98px 0 83px 0; }
.position > div { float: left; margin-left: 164px; }
.position > div:first-child { margin-left: 0; }

.position_div3 > ul > li > a { color: #fff; }
.position_div4 > ul > li > a { color: #fff; }

.quick_menu { width: 70px; height: 151px; position: fixed; bottom: 80px; right: 20px; z-index: 10; }
.quick_menu > img { position: absolute; cursor: pointer; }
.quick_top { top: 81px; }

.footer2 { background: #3f5651; height: 59px; }
.position2 { width: 1200px; margin: 0 auto; color: #fff; font-size: 13px; font-weight: 300; padding-top: 20px; }
.position2 > div { float: left; margin-left: 773px; }
.position2 > div:first-child { margin-left: 0; opacity: 0.4; }
.position2 > div:first-child > span { font-weight: 500; }
.position2 > div:last-child > span { opacity: 0.4; }
</style>

<div class="wrap-footer">
	<footer class="layout">
		<div class="position">
			<div class="position_div1"><img src="/res/images/bottom/logo.png" alt="로고" /></div>
			<div class="position_div2">제주특별자치도 서귀포시<br/>대정읍 형제해안로 322-1<br/>(상모리 133-8)</div>
			
			<div class="position_div3">
				<ul>
					<?foreach($menu["pageNum"] as $pn=>$pnStr) {
						if($pn == 100) continue;
						?>
						<li <?=$pageNum == $pn ? "class='on'" : ""?> >
							<a href="#menulink" onclick="menulink('menu<?=sprintf("%02d", $pn)?>-1')" ><?=$pnStr?></a>
						</li>
					<?}?>
				</ul>
			</div>

			<div class="position_div4">
				<ul>
					<li>사업자등록번호 : 251-11-01374</li>
					<li>대표자 : 김연희</li>
					<li>T : 064-792-3112</li>
					<li>M : 010-7124-3111</li>
					<li><a href="javascript:info2()">개인정보처리방침</a></li>
					<li><a href="javascript:adm()">관리자 페이지</a></li>
				</ul>
			</div>
		</div>

		<div class="quick_menu">
			<img src="/res/images/bottom/chat.png" alt="채팅 버튼" onmouseover="this.src='/res/images/bottom/chat_on.png'" onmouseout="this.src='/res/images/bottom/chat.png'" onclick="ninetalk_open()" class="quick_chat" />
			<img src="/res/images/bottom/top.png" alt="위로가기 버튼" onclick="gotoTop()" class="quick_top" />
		</div>
	</footer>

	<div class="footer2">
		<div class="position2">
			<div>&copy; 2019 <span><?=$g4['title']?>.</span> All Rights Reserved</div>
			<div><span>Design By</span>&nbsp;&nbsp;<a href="javascript:it9()"><img src="/res/images/bottom/it9.png" alt="아이티나인 로고" /></a></div>
		</div>
	</div>
</div>

</div>
<?
include_once("$g4[path]/tail.sub.php");
?>