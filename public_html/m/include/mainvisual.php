<style>
.swiper-mainm {margin:0 auto; width:100%; height:1020px; position:relative; left:0; top:0; right:0; z-index:1; overflow:hidden; }

.swiper-slide { margin: 0 auto; width: 100%; height: 1020px; position: relative; }
.swiper-slide > img { position: absolute; top: 362px; left: 25px; }
.readmore { position: absolute; bottom: 400px; left: 205px; padding: 21px 68px; color: #fff; font-size: 21px; border: 2px solid #fff; cursor: pointer; }

.swiper-pagination { width:100px !important; height:50px; bottom:72px !important; left:540px !important; background:rgba(0,0,0,0.4); border-radius:25px 0 0 25px; font-size: 22px; line-height: 50px; padding-left: 30px; box-sizing: border-box; }
.swiper-pagination .swiper-pagination-bullet { display: none; background:none; outline:none; cursor: default; }
.swiper-pagination .swiper-pagination-bullet-active { display: block; color:#fff; opacity: 0.8; }

.test { color: #fff; font-size: 40px; }
</style>

<div class="swiper-container swiper-mainm" >
	 <div class="swiper-wrapper">
		<?for($i=1; $i<=4; $i++){?>
			<div style="background:url('/m/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
				<img src="/m/images/mainvisual/catch/<?=$i?>.png" alt="캐치" />
				<div class="readmore" onclick="menum('menu01-1')">Read More</div>
			</div>
		<?}?>
	</div>

	<div class="swiper-pagination swiper-pagination-m swiper-pagination-bullets"></div>
</div>

<script>
	var swiper_mainm = null;
	$(function(){
		swiper_mainm = new Swiper('.swiper-mainm', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 4000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 1000,
						loop:true,
						loopAdditionalSlides:1,
						loopedSlides:1,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
						transitionEnd:function(){
							this.autoplay.stop();
							this.autoplay.start();
							}
						},
						touchRatio:1,
						pagination: {
							el: '.swiper-pagination',
							type: 'bullets',
							bulletElement: 'span',
							clickable: 'false',
							renderBullet: function (index, className) {
								return '<span class="' + className + '">' + (index + 1) + '&nbsp;/&nbsp;4</span>';
							 },
						 },
			});
	});
</script>