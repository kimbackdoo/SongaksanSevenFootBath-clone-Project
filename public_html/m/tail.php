<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$call = sql_fetch("SELECT COUNT(*) cnt FROM g4_call_log");
?>

<?if($bo_table){?>
	</div>
<?}?>

<style>
#right_q { width:70px; height:151px; position:fixed; right:20px; bottom:30px; z-index:999; }
#right_q > img { position: absolute; cursor: pointer; z-index: 999; }
.rq_chat { bottom:80px; }
.rq_gotop { bottom:0px; }
</style>

<div id="right_q">
	<img src="/m/images/bottom/chat_on.png" class="rq_chat" onclick="<?=$talk_link?>" />
	<img src="/m/images/bottom/top.png" class="rq_gotop" onclick="gotoTop()" />
</div>

<script type="text/javascript">
    $(function(){
		 check_chat();

        $(window).scroll(function () {
            check_chat();
        });
        $(window).resize(function(){
            check_chat();
        });
    });

	var scrollact=false;

    function check_chat(){
		var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
		var scrollTop = $(document).scrollTop();
        var footerHeight = $("footer.copy").height();

        if(scrollBottom < 300)
			$("#right_q").css({"position":"absolute", "bottom":(footerHeight-92)+"px"});
        else
			$("#right_q").css({"position":"fixed", "bottom":"80px"});

		if (scrollTop > 200 && scrollact == false) {
			$(".rq_gotop").show();
			$(".rq_gotop").stop().animate({"left" : "0px", "opacity" : "1"});
			
			$(".rq_chat").stop().animate({ "bottom":"80px" },"easeOutBack");
			
			scrollact = true;
		} 
		else if (scrollTop < 200) {
			$(".rq_gotop").stop().animate({"left" : "45px", "opacity" : "0"},function(){
				$(".rq_gotop").hide();
			});
			$(".rq_chat").stop().animate({ "bottom":"0px" },"easeOutBack");
			scrollact = false;
		}
    }
</script>

<style>
.copy { background: url('/m/images/bottom/bg.jpg') no-repeat center top; text-align: center; }

.copy > ul { width: 100%; display: inline-block; font-size: 20px; line-height: 60px; color: #fff; opacity: 0.8; }
.copy > ul > li { width: 213px; height: 60px; box-sizing: border-box; float: left; border-right: 1px solid rgba(255,255,255,0.3); border-bottom: 1px solid rgba(255,255,255,0.4); }
.copy > ul > li:nth-child(3n+3) { border-right: 0; }

.copy > img { padding: 53px 0; }

.copy > p { color: #fff; font-size: 20px; font-weight: 100; line-height: 35px; }

.bottomBtn { width: 310px; margin: 0 auto; display: inline-block; padding: 32px 0; }
.bottomBtn > div { float: left; margin-left: 10px; padding: 9px 10px; color: #fff; opacity: 0.5; background: #324641; }

.quick_menu { width: 70px; height: 151px; position: fixed; bottom: 80px; right: 20px; z-index: 10; }
.quick_menu > img { position: absolute; cursor: pointer; }
.quick_top { top: 81px; }

.count { position:relative; width:640px; height:40px; font-size:18px; background:#4f6561; color:#fff; text-align:center; z-index:20; margin-top:-2px; border-top: 1px solid rgba(255,255,255,0.4); }
.count > div { margin:6px 0 0;display:inline-block; }
.count > div:last-child { margin-left: 30px; }
.count > div > span { opacity: 0.5; font-weight: 200; }
.count > div > span:last-child { opacity: 1; font-weight: 400; margin-left:8px; }

.footer2 { width: 100%; height: 60px; line-height: 60px; background: #324541; color: #fff; text-align: center; padding-bottom: 69px; }
.footer2 > span { opacity: 0.7; font-size: 20px; font-weight: 200; }

.footer3 { width: 640px; height: 69px; margin: 0 auto; position: fixed; bottom: 0; left: 0; right: 0; line-height: 69px; font-size: 26px; background: #324541; text-align: center; color: #fff; font-weight: bold; border-top: 1px solid #475854; z-index: 9999; }
</style>

<footer class="copy">
	<ul>
		<?foreach($menu["pageNum"] as $pn=>$pnStr) {?>
			<li onclick="menum('menu<?=sprintf("%02d", $pn)?>-1')"><?=$pnStr?></li>
		<?}?>
	</ul>

	<img src="/m/images/bottom/logo.png" alt="로고" onclick="home()" />

	<p>
		제주특별자치도 서귀포시 대정읍 형제해안로 322-1 (상모리 133-8)<br/>
		사업자등록번호 : 251-11-01374&nbsp;&nbsp;&nbsp;대표자 : 김연희<br/>
		T : 064-792-3112&nbsp;&nbsp;&nbsp;M : 010-7124-3111
	</p>

	<div class="bottomBtn">
		<div onclick="info2()">개인정보처리방침</div>
		<div onclick="login()">관리자 페이지</div>
	</div>
</footer>

<?preg_match("/오늘:(.*),어제:(.*),최대:(.*),전체:(.*)/", $config['cf_visit'], $visit);settype($visit[0], "integer");settype($visit[1], "integer");settype($visit[2], "integer");settype($visit[3], "integer");?>
<div class="count">
	<div>
		<span>Today</span>
		<span><?=$visit[1]?></span>
	</div>
	<div>
		<span>Total</span>
		<span><?=$visit[4]?></span>
	</div>
</div>

<div class="footer2">
	<span>&copy 2019 <?=$g4['title']?>. All Rights Reserved.</span>
	<img src="/m/images/bottom/it9.png" alt="아이티나인 로고" onclick="m_it9()" />
</div>

<div class="footer3" onclick="callNumber('064-792-3112')" >
	<img src="/m/images/bottom/call.png" alt="전화기 모양" />&nbsp;&nbsp;
	<span>064&nbsp;&nbsp;792&nbsp;&nbsp;3112&nbsp;&nbsp;</span>
	/&nbsp;&nbsp;
	<span onclick="callNumber('010-4125-6464')">010&nbsp;&nbsp;4125&nbsp;&nbsp;6464</span>
</div>


</div><!-- #menu_cover_area -->

</div><!-- #wrap -->

<?
include_once($g4[mpath]."/tail.sub.php");
?>