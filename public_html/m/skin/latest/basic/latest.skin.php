<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
?>

<style>
.swiper-m2 { position: absolute; margin:0 auto; width:319px; height:390px; position:absolute; bottom: 105px; right:0; z-index:1; }
.swiper-m2 .swiper-slide { width:270px; height: 100%; position: relative; left: -24px; overflow:hidden; }

.notice { position: relative; width: 100%; height: 100%; background: #fff; border: 1px solid #e4ded4; cursor: pointer; color: #000; box-sizing: border-box; }

.notice_point { width: 9px; height: 9px; border-radius: 2px; background: #e5e5e5; margin: 30px 0 0 30px; }

.notice > div { overflow:hidden; text-overflow:ellipsis; white-space:normal; word-wrap:break-word; display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; word-break:break-all; }

.notice_title { line-height: 29px; height: 58px; padding: 0 30px; font-size: 22px; font-weight: 400; margin-top: 23px; }
.notice_content { height: 50px; padding: 0 30px; font-weight: 300; margin-top: 19px; color: #777777; font-size: 17px; line-height: 25px;  }

.notice_date { width: 100%; position: absolute; left:0; bottom: 0; height: 50px; border-top: 1px solid #e4ded4; }
.notice_date > p { color: #777777; font-size: 15px; font-weight: 300; padding-left: 30px; line-height: 50px; }
</style>

<div class="swiper-container swiper-m2">
	 <div class="swiper-wrapper">
		<? for ($i=0; $i<count($list); $i++) { ?>
			<div class="swiper-slide" >
				<div class="notice" onclick="location.href='<?=$list[$i][href]?>'">
					<div class="notice_point "></div>

					<div class="notice_title">
						<?=cut_str($list[$i][wr_subject], 58, '..');?>
					</div>

					<div class="notice_content">
						<?=strip_tags(cut_str($list[$i][wr_content], 300, '..'));?>
					</div>

					<div class="notice_date">
						<p><?=date("Y.m.d",strtotime($list[$i][wr_datetime]));?></p>
					</div>

					<? if (count($list) == 0) { ?><font color=#6A6A6A>게시물이 없습니다. <? } ?>
				</div>
			</div>
		<? } ?>
	</div>
</div>

<script>
	var swiper_m2 = null;
	$(function(){
		swiper_m2 = new Swiper('.swiper-m2', {
						spaceBetween: 18,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'slide',
						speed: 1000,
						loop:true,
						loopAdditionalSlides:1,
						loopedSlides:1,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: true,
						on:{
						transitionEnd:function(){
							this.autoplay.stop();
							this.autoplay.start();
							}
						},
						touchRatio:1,
			});
	});
</script>