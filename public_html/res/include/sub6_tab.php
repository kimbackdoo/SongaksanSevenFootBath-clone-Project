<?
	$imgNumber = glob("$g4[path]/res/images/sub6_2/sub6_2_$ssNum/*.jpg");
?>

<style>
.sub6_div2 > img { box-shadow: 5px 10px 10px 0px rgba(0,0,0,0.4); }

.swiper-sub6 { width:100%; height:600px; position:relative; margin:0 auto; z-index:1; box-shadow: 5px 10px 10px 0px rgba(0,0,0,0.4); }
</style>

<? if($subNum==2 && ($ssNum==1 || $ssNum==7)) {?>
	<div class="swiper-container swiper-sub6">
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=count($imgNumber); $i++){?>
				<div style="background:url('/res/images/sub6_2/sub6_2_<?=$ssNum?>/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" ></div>
			<?}?>
		</div>
	</div>
<?} else {?>
	<img src="/res/images/sub6_<?=$subNum?>/<?=$ssNum?>.jpg" alt="test" />
<? } ?>

<script>
	var swiper_sub6 = null;

	$(function() {
		swiper_sub6 = new Swiper('.swiper-sub6', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 3000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
							transitionStart:function(){ },
							transitionEnd:function(){
								this.autoplay.stop();
								this.autoplay.start();
							}
						},
		});
	});
</script>