<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>

<style>
.notice { position: relative; width: 270px; height: 290px; background: #fff; float: left; border: 1px solid #e4ded4; transition: all  .3s ease-out; cursor: pointer; color: #000; margin-left: 20px; box-sizing: border-box; }
.notice:hover { border-color: #4e7169; box-shadow: 5px 10px 10px 0px rgba(0,0,0,0.3); }

.notice_point { width: 9px; height: 9px; border-radius: 2px; background: #e5e5e5; margin: 30px 0 0 30px; transition: all .3s ease-out; }
.notice:hover .notice_point { background: #384d48; }

.notice > div { overflow:hidden; text-overflow:ellipsis; white-space:normal; word-wrap:break-word; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; word-break:break-all; }

.notice_title { line-height: 29px; height: 58px; padding: 0 30px; font-size: 22px; font-weight: 400; margin-top: 23px; }
.notice_content { height: 50px; padding: 0 30px; font-weight: 300; margin-top: 19px; color: #777777; font-size: 17px; line-height: 25px;  }

.notice_date { width: 100%; position: absolute; left:0; bottom: 0; height: 50px; border-top: 1px solid #e4ded4; }
.notice_date > p { color: #777777; font-size: 15px; font-weight: 300; padding-left: 30px; line-height: 50px; }
</style>

<? for ($i=0; $i<3; $i++) { 
	$m2_delay1 = 0.3 + $i/10*3;
	$m2_delay2 = 0.36 + $i/10*3;
	$cnt = 0;
?>
	<div class="notice wow fadeInUp" data-wow-delay="<?=$m2_delay1?>s" onclick="location.href='<?=$list[$i][href]?>'" <?=$i==0 ? "style='margin-left: 0px'" : ""?>>
		<div class="notice_point wow fadeInUp" data-wow-delay="<?=$m2_delay2?>s"></div>

		<div class="notice_title wow fadeInUp" data-wow-delay="<?=$m2_delay2+0.06*(++$cnt)?>s">
			<?=cut_str($list[$i][wr_subject], 58, '..');?>
		</div>

		<div class="notice_content wow fadeInUp" data-wow-delay="<?=$m2_delay2+0.06*(++$cnt)?>s">
			<?=strip_tags(cut_str($list[$i][wr_content], 300, '..'));?>
		</div>

		<div class="notice_date wow fadeInUp" data-wow-delay="<?=$m2_delay2+0.06*(++$cnt)?>s">
			<p><?=date("Y.m.d",strtotime($list[$i][wr_datetime]));?></p>
		</div>

		<? if (count($list) == 0) { ?><font color=#6A6A6A>게시물이 없습니다. <? } ?>
	</div>
<?}?>