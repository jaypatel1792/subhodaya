<script language="javascript">
//<!--
function display(value)
{
  document.getElementById('flash-content').innerHTML = value;
}

//-->
</script> 
<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="420" valign="top" >
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
	       		<td  valign="top" width="486">
		       		
	                <table width="100%"  border="0"  cellpadding="0" cellspacing="0">
	                    <tr><td height="341">
	                   <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="486" height="341">
  <param name="movie" value="<?=base_url();?>assets/subh.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="9.0.45.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
  <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="<?=base_url();?>assets/subh.swf" width="486" height="341">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="9.0.45.0" />
    <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
<div id="flash-content" style=" background:transparent url(<?=base_url();?>assets/imgs/onepx.png) repeat scroll 0 0; position:absolute; width:484px; top: 416px; left:31px; height: 20px;text-align: left;"> 
sample sf dsfsd fdsf
</div>
	                    
	                    </td>
	                    </tr>
	                </table></td></tr>
         </table>
         </td>
     </tr>
     </table>
     </td>
     <td width="245" valign="top" align="center">
     	<img src="<?=base_url();?>assets/imgs/18.jpg" style="border: 1px solid #50BCFC;"></img>
     	<div align="center" style="padding-top: 8px">
     		<img src="<?=base_url();?>assets/imgs/19.jpg" style="border: 1px solid #50BCFC;"></img>
     	<div>
     </td>
     <td width="185" align="center" valign="top" rowspan="3">
		<table width="100%" style="border:1px solid #50BCFC;">
			<tr>
				<td style="border:1px solid #50BCFC;height: 25px;" id="news_heading" align="center"><span id="telugufont"><?=$more['17']->matter ?></span></td>
			</tr>
			<tr>
				<td align="center">
				<table style="padding-left: 5px" >
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					<tr><td><div><img src="<?=base_url();?>assets/imgs/cini-img.jpg"></div></td></tr>
					<tr><td>sometext sometext sometext sometext</td></tr>
					</table>
				</td>
			</tr>
			</table>
			<div style="padding-top: 10px">
			<table style="border:1px solid #50BCFC;" bgcolor="#9CD8FC" width="100%" >
				<tr>
					<td align="center">
					<div><img src="<?=base_url();?>assets/imgs/add-img1.jpg"></div>
					</td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/add-img2.jpg"></div></td>
				</tr>
				
			</table>
			<table style="border:1px solid #50BCFC;"  width="100%" >
				<tr>
					<td id="news_heading" colspan="3" align="left"><span style="font-weight: bold;font-size: 14px;"><?=$more['16']->matter ?></span></td>
				</tr>
				<tr>
					<td>
					<div id="home_poll" >
                 	<div><? if(!empty($cinemapoll['0']->question)){
						echo   $cinemapoll['0']->question;               		
                 	     ?></div>

     				<table width="100%">
              			<tr>
              				<td align="right">
              					<input type="hidden" name="poll_id" value="<?=$cinemapoll['0']->id?>">
              					<? $attributes = 'onClick= "loadPoll(\''.base_url().'poll/index/'.$cinemapoll[0]->id.'\',this.value)";' ?>
              					<?=form_radio('answer','a',True,$attributes) ?>
              				</td>
              				<td align="left"><?=$more['18']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','b',FALSE,$attributes) ?></td><td align="left"><?=$more['19']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','c',FALSE,$attributes) ?></td><td align="left"><?=$more['20']->matter ?></td></tr>
     				</table>
     				<? }else echo 'To day no poll.'; ?>
     			<br><span style="font-weight: bold;font-size: 14px;color:maroon;">yesterday poll</span>
                <div><?if(!empty($yes_poll['0']->question)){
                	echo $yes_poll['0']->question;
                	?></div>
		                <div align="right" id="result"><A HREF="javascript:void(0)"
					onclick="window.open('<?=base_url();?>poll/yes_result/<?=$yes_poll['0']->id?>',
						'welcome','width=300,height=200')">
						Result</A></div>
              
                <?} else echo 'Yesterday no no poll.';?>
                </div>
					</td>
				</tr>
			</table>
			</div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
  
          		<table width="100%" cellspacing="10" height="500">
          			<tr>
          				<td width="375" style="border: 1px solid #50BCFC;" id="newstable" valign="top" height="235">
          				<div style="width:100%;" id="news_heading"><span id="newsheading"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->cinema_type;}?></span></div>
          				<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>_thumb.jpg" style="float: left;padding:3px 20px 3px 3px; border:0px;text-align: justify;"></img></a>
          					<div style="height: 180px;">
          					<font id="telugufont"><span id="mainnews"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->id;}?>"><?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->heading;}?></a></span></font><br>
          					<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->summary;}?>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type1 as $row):
          					  if($count==0)
          							{
	          							$count++;
	          							continue;
          							} ?>
          						<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
          					<? if($count==6){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          					</ul>
          					</div>
          				<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type1['0'])){echo $cinema_type1['0']->type;}?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          				<td style="border: 1px solid #50BCFC;" valign="top" id="newstable" height="235">
          				<div style="width:100%;" id="news_heading"><span id="newsheading"><?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->cinema_type;}?></span></div>
          				<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->id;}?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;text-align: justify;"></img></a>
          					<div style="height: 180px;">
          					<font id="telugufont"><span id="mainnews"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->id;}?>"><?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->heading;}else echo 'nodatafound';?></a></span></font><br>
          					<?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->summary;}else echo 'nodatafound';?>
          					<ul id="mainnews">
          					<?
          						$count=0; foreach ($cinema_type2 as $row):
          						  if($count==0)
          							{
	          							$count++;
	          							continue;
          							} ?>
          						<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
          					<? if($count==6){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          					</ul>
          					</div>
          				<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type2['0'])){echo $cinema_type2['0']->type;}?>"><?=$more['0']->matter?></a></span></div>
          				</td>
          			</tr>
          			<tr>
          				<td width="375" style="border: 1px solid #50BCFC;" valign="top" id="newstable" height="235">
          				<div id="TabbedPanels1" class="TabbedPanels" style="padding-left: 0px;">
							  <ul class="TabbedPanelsTabGroup">
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->cinema_type;}?></span></li>
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?php if(isset($cinema_type4['0'])){echo $cinema_type4['0']->cinema_type;}?></span></li>
							  </ul>
							  <div class="TabbedPanelsContentGroup">
							    <div class="TabbedPanelsContent">	
							  <a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->id;}?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border:0px;text-align: justify;"></img></a>
          					<div style="height: 180px;">
          					<font id="telugufont"><span id="mainnews"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->id;}?>"><?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->heading;}?></a></span><br></font>
          				<?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->summary;}?>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type3 as $row): 
          					if($count==0)
          					{
          					$count++;
          					continue;
          					}
          					?>
          						<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
          					<? if($count==5){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          					</ul>
          					</div>
          					<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type3['0'])){echo $cinema_type3['0']->type;}?>"><?=$more['0']->matter?></a></span></div>
          				</div>
							    <div class="TabbedPanelsContent">
							   <a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type4['0'])){echo $cinema_type4['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type4['0'])){echo $cinema_type4['0']->id;}?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px;border: 0px;text-align: justify;"></img></a>
          					<div style="height: 180px;">
          					<font id="telugufont"><span id="mainnews"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type4['0'])){echo $cinema_type4['0']->id;}?>"><?php if(isset($cinema_type4['0'])){echo $cinema_type4['0']->heading;}?></a></span><br></font>
          					<?php if(isset($cinema_type4['0'])){echo $cinema_type4['0']->summary;}?>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type4 as $row):
          					 if($count==0)
          					{
          					$count++;
          					continue;
          					} ?>
          						<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
          					<? if($count==5){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach; 
          					if($count==0){
          						echo 'No data found';
          					}
          					?>
          					</ul>
          					</div>
          					<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type4['0'])){echo $cinema_type4['0']->type;}?>"><?=$more['0']->matter?></a></span></div>
								</div>
							  </div>
							</div>
          				</td>
          				<td style="border: 1px solid #50BCFC;" id="newstable" valign="top" height="235">
          				<div id="TabbedPanels2" class="TabbedPanels" style="padding-left: 0px;">
							  <ul class="TabbedPanelsTabGroup">
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->cinema_type;}?></span></li>
							    <li class="TabbedPanelsTab" tabindex="0"><span id="newsheading"><?php if(isset($cinema_type6['0'])){echo $cinema_type6['0']->cinema_type;}?></span></li>
							  </ul>
							  <div class="TabbedPanelsContentGroup">
							    <div class="TabbedPanelsContent">
							    <a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->id;}?>_thumb.jpg" style="float: left;padding:4px 20px 3px 3px; border: 0px;text-align: justify;"></img></a>
          					<div style="height: 180px;">
          					<font id="telugufont"><span id="mainnews"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->id;}?>"><?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->heading;}?></a></span><br></font>
          					<?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->summary;}?>
          					<ul id="mainnews">
          					<? $count=0; foreach ($cinema_type5 as $row): 
          					 if($count==0)
          						{
	          						$count++;
	          						continue;
          						}?>
          						<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
          					<? if($count==5){
          						break;
          					}else{
          						$count++;
          					}
          					endforeach;
          					if($count==0){
          					echo 'No data found';}?>
          					</ul>
          					</div>
          					<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type5['0'])){echo $cinema_type5['0']->type;}?>"><?=$more['0']->matter?></a></span></div>
          				</div>
							 <div class="TabbedPanelsContent" >
									<a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type6['0'])){echo $cinema_type6['0']->id;}?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?php if(isset($cinema_type6['0'])){echo $cinema_type6['0']->id;}?>_thumb.jpg" style="float: left;padding:3px 20px 3px 3px;border: 0px;text-align: justify;"></img></a>
									<div style="height: 180px;">
									<font id="telugufont"><span id="mainnews"><a href="<?=base_url();?>cinema/inner/<?php if(isset($cinema_type6['0'])){echo $cinema_type6['0']->id;}?>"><?php if(isset($cinema_type6['0'])){echo $cinema_type6['0']->heading;}?></a></span><br></font>
          					<?php if(isset($cinema_type6['0'])){echo $cinema_type6['0']->summary;}?>
				          					<ul id="mainnews">
				          					<? $count=0; foreach ($cinema_type6 as $row):
				          					 if($count==0)
          										{
	          										$count++;
	          										continue;
          										} ?>
				          						<li><a href="<?=base_url();?>cinema/inner/<?=$row->id?>"><?=$row->heading?></a></li>
				          					<? 
				          					if($count==5){
				          						break;
				          					}
				          					else{
				          						$count++;
				          					}
				          					endforeach; ?>
				          					<? if($count==0){
				          					echo 'No data found'; }
				          					 ?>
				          					</ul>
				          					</div>
				          				<div id="more-news-div"><span id="news-more"><a href="<?=base_url();?>cinema/details/<?php if(isset($cinema_type6['0'])){echo $cinema_type6['0']->type;}?>"><?=$more['0']->matter?></a></span></div>
							     </div>
							
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
//-->
</script>
          				</td>
          			</tr>
          		</table>
          	</td>
          </tr>
          <table width="99%"  border="0" cellpadding="0" cellspacing="0">
          <tr><td valign="bottom" align="left" width="200">
         <div class=" yui-skin-sam" style="width: 470px; border: 1px solid #50BCFC; height: 190px" >
                      	<div id="demo1" class="yui-navset" style="color: #EDF5FF;">
	    						<ul class="yui-nav">
							       <li class="selected" style="text-align: center;"><a href="#tab1"><em style="width: 80px;">Politics</em></a></li>
							        <li style="text-align: center;"><a href="#tab2"><em style="width: 80px;"><span id="telugufont"><?=$more['13']->matter ?></span></em></a></li>
							        <li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['14']->matter ?></span></em></a></li>
									<li style="text-align: center;"><a href="#tab3"><em style="width: 80px;"><span id="telugufont"><?=$more['15']->matter ?></span></em></a></li>
	    						</ul>            
    							<div class="yui-content" style="height: 150px;text-align: center;">
							        <div id="tab1"><p>Tab four Content</p></div>
							        <div id="tab2"><p>Tab Two ContentTab One ContentTab One Content</p></div>
							        <div id="tab3"><p>Tab Three Content</p></div>
									<div id="tab3"><p>Tab four Content</p></div>
    							</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo1');
    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
						</div>
						</div>
                      </td>
</table>
