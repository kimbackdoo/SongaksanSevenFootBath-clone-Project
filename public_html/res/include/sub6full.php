<style>
.sub6_div1 { width: 100%; height: 1000px; position: relative; }

.sub6_title { width: 1200px; height: 100%; margin: 0 auto; position: relative; }
.sub6_title > img { position: absolute; left: 272px; top: 50%; margin-top: -233px; }

.sub6_tab { width: 100%; height: 100px; margin: 0 auto; position: absolute; bottom: 0; }
.sub6_tab > ul { width: 100%; height: 100%; display: inline-block; }
.sub6_tab > ul > li { position: relative; width: 50%; height: 100%; float: left; text-align: center; background: #000; }

.sub6_tab > ul > li.on { height: 115px; bottom: 15px; }
.sub6_tab > ul > li.on > a { line-height: 115px; }
.sub6_tab > ul > li:first-child.on { background: #1b98db; }
.sub6_tab > ul > li:last-child.on { background: #f6494f;  }

.sub6_tab > ul > li > img { display: none; position: absolute; top: 0; }
.sub6_tab > ul > li:first-child > img { right: -13px; }
.sub6_tab > ul > li:last-child > img { left: -13px; }
.sub6_tab > ul > li.on > img { display: block; }

.sub6_tab > ul > li > a { position: relative; display: block; width: 601px; height: 100%; margin: 0 auto 0 0; color: #fff; font-size: 22px; line-height: 100px; }
.sub6_tab > ul > li:first-child > a { margin: 0 0 0 auto; }

.sub6_tab > ul > li > a > img { display: none; position: absolute; bottom: 16px; left: 50%; transform: translateX(-50%); }
.sub6_tab > ul > li.on > a > img { display: block; }

.sub6_div2 { position: relative; padding-top: 186px; width: 1200px; margin: 0 auto; }

.sub6_tab2 { width: 1200px; height: 117px; margin: 0 auto; padding-bottom: 58px; text-align: center; }
.sub6_tab2 > ul { display: inline-block; }
.sub6_tab2 > ul > li { float: left; margin-left: 30px; width: 118px; height: 118px; border-radius: 59px; cursor: pointer; background: #fff; transition: all .3s ease-out; color: #000; }
.sub6_tab2 > ul > li:first-child { margin-left: 0; }
.sub6_tab2 > ul > li.on { background: #000; color: #fff; }

.tab2_cir { padding-top: 20px; text-align: center; font-weight: 500; }
.tab2_cir > span { font-size: 22px; line-height: 25px; }
.tab2_cir > span:first-child { font-size: 17px; line-height: 15px; }
.sub6_tab2 > ul > li:nth-last-child(-n+3) .tab2_cir > span { line-height: 20px; }
</style>

<div class="resize">
	<div class="sub6_div1 parallax-window" data-parallax="scroll" data-image-src="/res/images/sub6_<?=$subNum?>/sub6_<?=$subNum?>_1.jpg">
		<div class="sub6_title">
			<img src="/res/images/sub6_<?=$subNum?>/title.png" alt="타이틀" />
		</div>

		<div class="sub6_tab">
			<ul>
				<?foreach($menu["tot"][$pageNum] as $sn=>$snStr) {?>
					<li <?=$tot == $pageNum."_".$sn ? "class='on'" : ""?>>
						<a href="#menulink" onclick="menulink('menu<?=sprintf("%02d", $pageNum)?>-<?=$sn?>-1')">
							<?=$snStr?>
							<img src="/res/images/sub6_1/up.png" alt="업 모양" />	
						</a>

						<img src="/res/images/sub6_<?=$sn?>/tab.png" alt="탭 모양" />
					</li>
				<?}?>
			</ul>
		</div>
	</div>
</div>

<div style="background: url('/res/images/sub6_<?=$subNum?>/sub6_<?=$subNum?>_2.jpg') no-repeat center top; height: 1200px;">
	<div class="sub6_div2">
		<div class="sub6_tab2">
			<ul>
				<?foreach($menu["tott"][$pageNum][$subNum] as $ssn=>$ssnStr) { 
					$ssnStr = str_replace(" ", "<br/>", $ssnStr);
				?>	
					<li onclick="menulink('menu<?=sprintf("%02d", $pageNum)?>-<?=$subNum?>-<?=$ssn?>')" class="<?=$tott == $pageNum."_".$subNum."_".$ssn ? "on" : ""?> wow fadeInUp" data-wow-delay="<?=0.1*$ssn?>s">
						<div class="tab2_cir">
							<span>#<?=$ssn?></span><br/>
							<span><?=$ssnStr?></span>
						</div>
					</li>
				<?}?>
			</ul>
		</div>

		<? include_once("$g4[path]/res/include/sub6_tab.php"); ?>
	</div>
</div>