<style>
.sub4_div1 { background: url('/m/images/sub4_1/sub4_1.jpg') no-repeat center top; height: 2566px; }

.sub4_div2 { width: 100%; height: 750px; background: #faf7f2; position: relative; }

.sub4_div2 > img:not(:first-child) { outline: none; position: absolute; top: 89px; }

.sub4_bgTitle { display: block; margin: 0 auto; padding: 106px 0 54px 0; }

.sub4LeftBtn { left: 27px; }
.sub4RightBtn { right: 27px; }

.swiper-sub4 { width:100%; height:500px; position:relative; margin:0 auto; z-index:1; }
.swiper-sub4 .swiper-slide { width:100%; height:480px; position:relative; margin:0 auto; box-shadow: 5px 10px 10px 0px rgba(0,0,0,0.3); }
</style>

<div class="sub4_div1"></div>

<div class="sub4_div2">
	<img src="/m/images/sub4_1/bg_title.png" alt="백그라운드 타이틀" class="sub4_bgTitle" />

	<img src="/m/images/sub4_1/left.png" alt="이전버튼" class="sub4LeftBtn" />
	<img src="/m/images/sub4_1/right.png" alt="다음버튼" class="sub4RightBtn" />

	<div class="swiper-container swiper-sub4">
		<div class="swiper-wrapper">
			<?for($i=1; $i<=13; $i++){?>
				<div style="background:url('/m/images/sub4_1/visual/<?=$i?>.jpg');background-position:center center;" class="swiper-slide" >
				</div>
			<?}?>
		</div>
	</div>
</div>

<script>
	var swiper_sub4 = null;

	$(function() {
		swiper_sub4 = new Swiper('.swiper-sub4', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 3000,
						},
						disableOnInteraction: false,
						effect:'slide',
						speed: 700,
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
						navigation: {
							nextEl: '.sub4RightBtn',
							prevEl: '.sub4LeftBtn',
						},
		});
	});
</script>