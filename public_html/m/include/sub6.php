<style>
.sub6_div1 { position: relative; width: 100%; margin: 0 auto; display: inline-block; overflow-x: auto; overflow-y: hidden; }

.sub6_tab { width: 1000px; height: 117px; margin: 0 auto; padding: 254px 0 50px 0; text-align: center; }
.sub6_tab > ul { margin-left: 27px; }
.sub6_tab > ul > li { float: left; margin-left: 10px; width: 110px; height: 110px; border-radius: 100%; cursor: pointer; background: #fff; transition: all .3s ease-out; color: #000; }
.sub6_tab > ul > li:first-child { margin-left: 0; }
.sub6_tab > ul > li.on { background: #000; color: #fff; }

.tab_cir { padding-top: 20px; text-align: center; font-weight: 500; }
.tab_cir > span { font-size: 22px; line-height: 25px; }
.tab_cir > span:first-child { font-size: 17px; line-height: 15px; }
.sub6_tab > ul > li:nth-last-child(-n+3) .tab_cir > span { line-height: 20px; }
</style>

<div style="background:url('/m/images/sub6/sub6_<?=$subNum?>.jpg') no-repeat center top; text-align:center;">
	<div class="sub6_div1">
		<div class="sub6_tab">
			<ul>
				<?foreach($menu["tott"][$pageNum][$subNum] as $ssn=>$ssnStr) { 
					$ssnStr = str_replace(" ", "<br/>", $ssnStr);
				?>	
					<li onclick="menum('menu<?=sprintf("%02d", $pageNum)?>-<?=$subNum?>-<?=$ssn?>')" class="<?=$tott == $pageNum."_".$subNum."_".$ssn ? "on" : ""?> wow fadeInUp" data-wow-delay="<?=0.1*$ssn?>s">
						<div class="tab_cir">
							<span>#<?=$ssn?></span><br/>
							<span><?=$ssnStr?></span>
						</div>
					</li>
				<?}?>
			</ul>
		</div>
	</div>

	<img src="/m/images/sub6/test/<?=$subNum.'_'.$ssNum?>.jpg" alt="test" />
</div>