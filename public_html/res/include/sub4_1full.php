<style>
.sub4_div1 { width: 100%; height: 1000px; }
.sub4_div1 > div { width: 1200px; height: 100%; margin: 0 auto; position: relative; }
.sub4_div1 > div > img { position: absolute; left: 320px; top: 50%; margin-top: -65px; }

.sub4_div2 { background: url('/res/images/sub4_1/sub4_2.jpg') no-repeat center top; height: 1812px; }

.sub4_div3{ width: 100%; height: 1040px; background: #faf7f2; position: relative; }

.sub4_div3 > img:not(:first-child) { outline: none; position: absolute; top: 89px; }

.sub4_bgTitle { display: block; margin: 0 auto; padding: 106px 0 54px 0; }

.sub4LeftBtn { left: 359px; }
.sub4RightBtn { right: 359px; }

.swiper-sub4 { width:1200px; height:650px; position:relative; margin:0 auto; z-index:1; box-shadow: 5px 10px 10px 0px rgba(0,0,0,0.4); }
.swiper-sub4 .swiper-slide { width:100%; height:100%; position:relative; margin:0 auto; }
</style>

<div class="resize">
	<div class="sub4_div1 parallax-window" data-parallax="scroll" data-image-src="/res/images/sub4_1/sub4_1.jpg">
		<div>
			<img src="/res/images/sub4_1/title.png" alt="타이틀" />
		</div>
	</div>
</div>

<div class="sub4_div2"></div>

<div class="sub4_div3">
	<img src="/res/images/sub4_1/bg_title.png" alt="백그라운드 타이틀" class="sub4_bgTitle" />

	<img src="/res/images/sub4_1/left_off.png" alt="이전버튼" onmouseover="this.src='/res/images/sub4_1/left.png'" onmouseout="this.src='/res/images/sub4_1/left_off.png'" class="sub4LeftBtn" />
	<img src="/res/images/sub4_1/right_off.png" alt="다음버튼" onmouseover="this.src='/res/images/sub4_1/right.png'" onmouseout="this.src='/res/images/sub4_1/right_off.png'" class="sub4RightBtn" />

	<div class="swiper-container swiper-sub4">
		<div class="swiper-wrapper">
			<?for($i=1; $i<=13; $i++){?>
				<div style="background:url('/res/images/sub4_1/visual/<?=$i?>.jpg');background-position:center center;" class="swiper-slide" >
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