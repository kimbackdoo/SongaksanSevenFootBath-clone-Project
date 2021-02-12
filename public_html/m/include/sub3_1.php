<style>
.sub3_div1 { background: url('/m/images/sub3_1/sub3_1.jpg') no-repeat center top; width: 100%; height: 1041px; position: relative; }

.sub3BtnArea { width: 251px; height: 45px; position: absolute; right: 50px; top: 136px; z-index: 5; }
.sub3BtnArea::before { content:""; display: block; width: 1px; height: 14px; background: #d8dad5; position: absolute; right: 124px; top: 16px; opacity: 0.4; }
.sub3BtnArea > div { position: absolute; width: 98px; height: 100%; cursor: pointer; outline: none; }
.sub3BtnArea > div > img { position: absolute; top: 17px; }

.sub3LeftBtn { left: 0; }
.sub3LeftBtn > img { right: 0; }

.sub3RightBtn { right: 0; }
.sub3RightBtn > img { left: 0; }

.swiper-sub3 { width:100%; height:500px; padding-top: 440px !important; position:relative; margin:0 auto; z-index:1; }
.swiper-sub3 .swiper-slide { width:586px; height:480px; position:relative; margin:0 auto; box-shadow: 5px 10px 10px 0px rgba(0,0,0,0.3); }

.swiper-pagination-sub3 { width:480px; height:3px; background:#d5d7d2; position:relative; top: 20px; margin:0 auto; }
.swiper-pagination-sub3 .swiper-pagination-bullet { border-radius: 0; float: left; width: 30px; height: 3px; outline: none; }
.swiper-pagination-sub3 .swiper-pagination-bullet-active { background: #3f5651; }
</style>

<div class="sub3_div1">
	<div class="sub3BtnArea">
		<div class="sub3LeftBtn"><img src="/res/images/sub3_1/left.png" alt="이전버튼" /></div>
		<div class="sub3RightBtn"><img src="/res/images/sub3_1/right.png" alt="다음버튼" /></div>
	</div>

	<div class="swiper-container swiper-sub3">
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=16; $i++){?>
				<div style="background:url('/m/images/sub3_1/visual/<?=$i?>.jpg');background-position:center center;" class="swiper-slide" >
				</div>
			<?}?>
		</div>
	</div>

	<div class="swiper-pagination-sub3"></div>
</div>

<script>
	var swiper_sub3 = null;

	$(function() {
		swiper_sub3 = new Swiper('.swiper-sub3', {
						spaceBetween: 70,
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
							nextEl: '.sub3RightBtn',
							prevEl: '.sub3LeftBtn',
						},
						pagination: {
							el: '.swiper-pagination-sub3',
							type: 'bullets',
							bulletElement: 'span',
							clickable: 'false',
						},
		});
	});
</script>