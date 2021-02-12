<style>
.swiper-mainvisual { width:100%; min-width:1200px; max-width:1919px; height:1000px; position:relative; margin:0 auto; z-index:1; }
.swiper-mainvisual .swiper-slide { width:100%; min-width:1200px; max-width:1919px; height:100%; position:relative; margin:0 auto; }

.catchArea { position: absolute; top: 40%; left: 25%; }

.rmArea { position: absolute; left: 845px; bottom: 300px; border: 2px solid #fff; padding: 22px 72px; z-index: 2; color: #fff; font-weight: 500; cursor: pointer; transition: .3s all ease-out; }
.rmArea:hover { background: #fff; color: #455d58 }

.miribogi { width: 575px; height: 70px; position: absolute; right: 46px; bottom: 125px; z-index: 3; }
.miribogi > div { width: 110px; height: 70px; float: left; margin-left: 5px; position: relative; }
.miribogi > div:first-child { margin-left: 0; }
.miribogi > div > img { width: 100%; height: 100%; cursor: pointer; box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.3); }
.miribogi > div > p { font-size: 17px; color: #fff; text-align: center; position: absolute; width: 100%; margin-top: 26px; transition: .2s all ease-out; opacity: 0.5; }

.miribogi_bar { width: 575px; height: 2px; position: absolute; right: 46px; bottom: 103px; background: rgba(255,255,255,0.5); z-index: 4; }
.miribogi_bar > div { width: 0%; height: 100%; background: #fff; }

.infoArea { width: 842px; height: 105px; position: absolute; bottom: 0; left: 0; color: #3f5651; z-index: 2; background: #fff; }

.infoArea > div { float: left; margin-left: 225px; margin-top: 25px; }
.infoArea > div:first-child { margin-left: 80px; font-size: 17px; font-weight: 300; }
.infoArea > div:first-child > span { font-weight: bold; font-size: 20px; }
.infoArea > div:first-child > span:last-child { font-size: 15px; }

.infoArea > div:last-child { border-radius: 30px; border: 2px solid #3f5651; padding: 13px 26px; font-weight: 500; cursor: pointer; transition: .3s all ease-out; }
.infoArea_div2:hover { background: #3f5651; color: #fff; }
</style>

<div class="resize">
	<div class="swiper-container swiper-mainvisual wow fadeIn" data-wow-delay="0s" >

		 <div class="swiper-wrapper">
			<?for($i=1; $i<=5; $i++){?>
				<div style="background:url('/res/images/mainvisual/<?=$i?>.jpg');width:100%;background-position:center center;" class="swiper-slide" >
					<div class="catchArea">
						<img src="/res/images/mainvisual/catch/<?=$i?>.png" alt="캐치" />
					</div>
				</div>
			<?}?>
		</div>

		<div onclick="menulink('menu01-1')" class="rmArea">Read More</div>
		
		<div class="miribogi wow fadeInRight" data-wow-delay="0.5s">
			<?for($i=1; $i<=5; $i++){?>
				<div>
					<img src="/res/images/mainvisual/<?=$i?>.jpg" alt="메인 비쥬얼" />
					<p>0<?=$i?></p>	
				</div>
			<?}?>
		</div>

		<div class="miribogi_bar wow fadeInRight" data-wow-delay="0.5s">
			<div></div>
		</div>

		<div class="infoArea wow fadeInLeft" data-wow-delay="1s">
			<div class="infoArea_div1">
				대표번호 <span>064.792.3112 / 010.7124.3111</span><br />
				영업시간 <span>09:00 A.M ~ 05:00 P.M</span>
			</div>

			<div onclick="menulink('menu04-1')" class="infoArea_div2">Read More</div>
		</div>

	</div>
</div>

<script>
	$(function(){
		mainmove();
	});

	window.onload = function() {
		set_mainvisual();
	}

	function mainmove() {
		$(".miribogi_bar > div").stop().animate({"width" : "+=100px"}, 5000, "linear");
	}

	var swiper_mainvisual = null;
	var slideIndex = 0;

	function set_mainvisual() {
		swiper_mainvisual = new Swiper('.swiper-mainvisual', {
						spaceBetween: 0,
						centeredSlides: true,
						autoplay: {
							delay: 5000,
						},
						disableOnInteraction: false,
						effect:'fade',
						speed: 2000,
						loop:true,
						slidesPerView:'auto',
						observer:true,
						simulateTouch: false,
						on:{
							transitionStart:function(){
								var index = this.realIndex;
								
								$(".miribogi > div > p").css("opacity","0.5");
								$(".miribogi > div").eq(index).find("p").css("opacity","1");

								if(slideIndex != 0) {
									$(".miribogi_bar > div").stop().animate({"width" : (115*index)+"px"}, 2000, function(){
										mainmove();	
									});
								}

								slideIndex++;
							},
							transitionEnd:function(){
								this.autoplay.stop();
								this.autoplay.start();
							}
						},
						navigation: {
							nextEl: '.navigation_next',
							prevEl: '.navigation_prev',
						}
		});
	}

	$(".miribogi > div > img").click(function(){
		var miriIndex = $(this).parent().index();
		swiper_mainvisual.slideTo(miriIndex+1, 2000, false);
	});
</script>