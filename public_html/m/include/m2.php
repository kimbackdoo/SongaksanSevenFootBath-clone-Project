<style>
.m2_div { position: relative; width: 100%; height: 688px; background: url("/m/images/m2/m2.jpg") no-repeat center top; }

.infoArea { width: 100%; height: 88px; position: absolute; color: #3f5651; z-index: 2; }

.infoArea > div { width: 550px; height: 100%; position: absolute; bottom: 0; background: #fff; }
.infoArea > div:first-child { padding: 32px 0 0 40px; font-size: 18px; font-weight: 300; box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.3); }
.infoArea > div:first-child > span { font-weight: 700; font-size: 23px; }
.infoArea > div:first-child > span:last-child { font-size: 20px; }

.infoArea > div:last-child { width: 156px; height: 45px; box-sizing: border-box; border-radius: 30px;
							text-align: center; line-height: 40px;
							position: absolute; right: 15px; bottom: 27px; border: 2px solid #3f5651;
							font-weight: 500; cursor: pointer; }

.m2_div1 { width: 1200px; margin: 0 auto; padding-top: 186px; }

.m2_div-1 { position: relative; width: 350px; height: 290px; text-align: center; color: #fff; }
.m2_div-1 > p { color: #fff; }
.m2_div-1_p1 { font-family:"Lora"; font-size: 50px; line-height: 65px; }
.m2_div-1_p2 { font-size: 16px; line-height: 25px; }
.m2_div-1_p3 { font-size: 20px; line-height: 30px; opacity: 0.5; font-weight: 100; padding: 35px 0; }

.m2_div-1_div { width: 210px; height: 60px; margin: 0 auto; line-height: 59px; font-weight: 500; border: 2px solid #fff; cursor: pointer; }
</style>

<div class="m2_div" >
	<div class="infoArea">
		<div class="infoArea_div1">
			대표번호 <span>064.792.3112 / 010.7124.3111</span><br />
			영업시간 <span>09:00 A.M ~ 05:00 P.M</span>
		</div>

		<div onclick="menum('menu04-1')" class="infoArea_div2">Read More</div>
	</div>

	<div class="m2_div1">
		<div class="m2_div-1">
			<p class="m2_div-1_p1">Notice</p>
			<p class="m2_div-1_p2">송악산 7족욕에서 알려드립니다.</p>
			<p class="m2_div-1_p3">XXX</p>

			<div onclick="menum('menu05-1')" class="m2_div-1_div">Read More</div>
		</div>
		
		<?=latestm("basic", "5_1_1_1", 12, 35); ?>
	</div>
</div>