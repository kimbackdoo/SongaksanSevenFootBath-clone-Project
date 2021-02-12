<style>
.sub3_div1 { width: 100%; height: 1000px; }
.sub3_div1 > div { width: 1200px; height: 100%; margin: 0 auto; position: relative; }
.sub3_div1 > div > img { position: absolute; left: 485px; top: 50%; margin-top: -65px; }

.sub3_div2 { background: url('/res/images/sub3_1/sub3_2.jpg') no-repeat center top; width: 100%; height: 1050px; position: relative; }

.sub3BtnArea { width: 251px; height: 45px; position: absolute; right: 329px; top: 302px; z-index: 5; }
.sub3BtnArea::before { content:""; display: block; width: 1px; height: 14px; background: #d8dad5; position: absolute; right: 124px; top: 16px; opacity: 0.4; }
.sub3BtnArea > div { position: absolute; width: 98px; height: 100%; cursor: pointer; outline: none; }
.sub3BtnArea > div > img { position: absolute; top: 17px; transition: .2s all ease-out; }
.sub3BtnArea > div > div { opacity: 0; width: 40px; height: 40px; border-radius: 100%; border: 2px solid #fff; transition: .2s all ease-out; }
.sub3BtnArea > div:hover > div { opacity: 0.6; }

.sub3LeftBtn { left: 0; }
.sub3LeftBtn > div { float: left; }
.sub3LeftBtn > img { right: 0; }
.sub3LeftBtn:hover > img { right:10px; }

.sub3RightBtn { right: 0; }
.sub3RightBtn > div { float: right; }
.sub3RightBtn > img { left: 0; }
.sub3RightBtn:hover > img { left: 10px; }

.swiper-sub3 { width:100%; min-width:1200px; max-width:1919px; height:500px; position:relative; margin:0 auto; z-index:1; padding-top: 376px; }
.swiper-sub3 .swiper-slide { width:900px; height:480px; position:relative; margin:0 auto; }
.swiper-sub3 .swiper-slide.swiper-slide-active { box-shadow: 5px 10px 10px 0px rgba(0,0,0,0.3); }

.black_cover { width: 100%; height: 100%; background: rgba(0,0,0,0.6); }
.swiper-sub3 .swiper-slide.swiper-slide-active .black_cover { display: none; }

.swiper-pagination-sub3 { width:450px; height:3px; background:#d5d7d2; position:relative; top: 40px; margin:0 auto; }
.swiper-pagination-sub3 .swiper-pagination-bullet { border-radius: 0; float: left; width: 30px; height: 3px; outline: none; transition: .3s all ease-out; }
.swiper-pagination-sub3 .swiper-pagination-bullet-active { background: #3f5651; }
</style>

<div class="resize">
	<div class="sub3_div1 parallax-window" data-parallax="scroll" data-image-src="/res/images/sub3_1/sub3_1.jpg">
		<div>
			<img src="/res/images/sub3_1/title.png" alt="타이틀" />
		</div>
	</div>
</div>

<div class="sub3_div2">
	<div class="sub3BtnArea">
		<div class="sub3LeftBtn"><img src="/res/images/sub3_1/left.png" alt="이전버튼" /><div></div></div>
		<div class="sub3RightBtn"><img src="/res/images/sub3_1/right.png" alt="다음버튼" /><div></div></div>
	</div>

	<div class="swiper-container swiper-sub3">
		 <div class="swiper-wrapper">
			<?for($i=1; $i<=15; $i++){?>
				<div style="background:url('/res/images/sub3_1/visual/<?=$i?>.jpg');background-position:center center;" class="swiper-slide" >
					<div class="black_cover"></div>
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