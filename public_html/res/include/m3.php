<style>
.m3_div { background: url('/res/images/m3/m3.jpg') no-repeat center top; width: 100%; height: 790px; position: relative; }

.m3_div1 { width: 1200px; margin:0 auto; text-align: center; padding-top: 128px; }
.m3_div1 > p { color: #fff; font-size: 25px; }
.m3_div1 > p:last-child { font-size: 40px; }

.m3_div2 { width: 1200px; height: 180px; margin: 0 auto; padding: 60px 0; }
.m3_div2 > img { float: left; margin-left: 47px; }
.m3_div2 > img:first-child { margin-left: 82px; }

.m3_div3 { width: 1200px; margin: 0 auto; }
.m3_div3 > a { width: 230px; height: 60px; margin-left: 486px; padding: 18px 70px; line-height: 60px; color: #fff; font-size: 18px; border: 2px solid #fff; font-weight: 500; transition: .3s all ease-out; }
.m3_div3 > a:hover { color: #384d48; background: #fff; }

.m4_div1 { position: relative; top: 72px; width: 1280px; height: 133px; margin: 0 auto; background: #faf7f2; border-radius: 15px 15px 0 0; }
.m4_div1 > p { color: #455d58; font-size: 17px; line-height: 65px; padding-left: 41px; }
.m4_div1 > p:first-child { font-size: 50px; padding-top: 20px; }
.m4_div1-div { color: #455d58; position: absolute; top: 47px; left: 245px; border-bottom: 1px solid #455d58; cursor: pointer; font-weight: 700; padding-bottom: 9px; }

.m4BtnArea { width: 251px; height: 45px; position: absolute; right: 11px; top: 77px; }
.m4BtnArea::before { content:""; display: block; width: 1px; height: 14px; background: #d8dad5; position: absolute; right: 124px; top: 16px; }
.m4BtnArea > div { position: absolute; width: 98px; height: 100%; cursor: pointer; outline: none; }
.m4BtnArea > div > img { position: absolute; top: 17px; transition: .2s all ease-out; }
.m4BtnArea > div > div { opacity: 0; width: 40px; height: 40px; border-radius: 100%; border: 2px solid #455d58; transition: .2s all ease-out; }
.m4BtnArea > div:hover > div { opacity: 1; }

.m4LeftBtn { left: 0; }
.m4LeftBtn > div { float: left; }
.m4LeftBtn > img { right: 0; }
.m4LeftBtn:hover > img { right:10px; }

.m4RightBtn { right: 0; }
.m4RightBtn > div { float: right; }
.m4RightBtn > img { left: 0; }
.m4RightBtn:hover > img { left: 10px; }
</style>

<div class="m3_div">
	<div class="m3_div1">
		<p>제2의 심장이라고 말하는 우리의 발!</p>
		<p>이런 증상으로 고생하는 분들게 추천드립니다.</p>
	</div>

	<div class="m3_div2">
		<?for($i=1; $i<=6; $i++){
			$m3_delay = 0.4 + $i/10*2;
		?>
			<img src="/res/images/m3/<?=$i?>.png" alt="아이콘" class="wow fadeInUp" data-wow-delay="<?=$m3_delay?>s" />
		<?}?>
	</div>

	<div class="m3_div3 wow fadeInUp" data-wow-delay="0.3s"><a href="#menulink" onclick="menulink('menu02-1')">Read More</a></div>

	<div class="m4_div1 wow fadeIn" data-wow-delay="0.1s">
		<p>Gallery</p>
		<p>좋은 사람과 좋은 추억 건강한 추억을 남기세요.</p>

		<div onclick="menulink('menu05-2')" class="m4_div1-div">READ MORE</div>

		<div class="m4BtnArea">
			<div class="m4LeftBtn"><img src="/res/images/m4/left.png" alt="이전버튼" /><div></div></div>
			<div class="m4RightBtn"><img src="/res/images/m4/right.png" alt="다음버튼" /><div></div></div>
		</div>
	</div>
</div>