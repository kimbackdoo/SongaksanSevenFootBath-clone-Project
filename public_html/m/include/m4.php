<style>
.m4_div1 { width: 100%; height: 520px; background: #faf7f2; position: relative; }

.m4_div1-div1 { width: 600px; height: 123px; position: absolute; left: 0; right: 0; top: -123px; margin: 0 auto; border-radius: 15px 15px 0 0; background: #faf7f2; }
.m4_div1-div1 > p { color: #455d58; font-size: 22px; line-height: 65px; padding-left: 41px; }
.m4_div1-div1 > p:first-child { font-family: "Lora"; font-size: 50px; padding-top: 20px; }
.m4_div1-div1 > p:last-child { letter-spacing: -0.055em; }

.m4_div1-div2 { color: #455d58; font-size: 18px; position: absolute; top: -70px; left: 245px; border-bottom: 1px solid #455d58; cursor: pointer; font-weight: 700; padding-bottom: 5px; }

.m4BtnArea { width: 91px; height: 12px; position: absolute; right: 60px; top: -13px; display: inline-block; }
.m4BtnArea > div { outline: none; cursor: pointer; }
.m4LeftBtn { float: left; }
.m4RightBtn { float: right; }
</style>

<div class="m4_div1">
	<div class="m4_div1-div1">
		<p>Gallery</p>
		<p>좋은 사람과 좋은 추억 건강한 추억을 남기세요.</p>
	</div>

	<div onclick="menum('menu05-2')" class="m4_div1-div2">READ MORE</div>

	<div class="m4BtnArea">
		<div class="m4LeftBtn"><img src="/m/images/m4/left.png" alt="이전버튼" /></div>
		<div class="m4RightBtn"><img src="/m/images/m4/right.png" alt="다음버튼" /></div>
	</div>

	<?=latestm("gallery", "5_2_1_1", 12, 35); ?>
</div>