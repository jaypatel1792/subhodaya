<style type="text/css">
ul{
list-style-image:url(<?=base_url()?>assets/imgs/pandagalu-cru.jpg);
padding-left: 20px;
}
li{
padding-bottom:5px;

}
</style>
<table width="99%"  border="0" cellpadding="0" cellspacing="0">
<tr>
    <td width="430" valign="top"  align="left">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   	<tr>
       	<td valign="top">
       	<table width="0"  border="0" cellpadding="0" cellspacing="0">
    		<tr>
       		<td  valign="top">
	       		<table width="100%"  border="0" cellpadding="0" cellspacing="0">
	     			<tr><td height="4" valign="bottom"><img src="<?=base_url();?>assets/imgs/top-cor-line.jpg" width="460" height="4" /></td></tr>
	            </table>
                 <table width="100%"  border="0" style="border-left:1px solid #0872BC; border-right:1px solid #0872BC;"cellpadding="0" cellspacing="0">
                    <tr><td width="100%" height="310" valign="top" align="left" class=" yui-skin-sam" >
                          <div id="demo" class="yui-navset" style="color: #EDF5FF;">
	    					<ul class="yui-nav">
							        <li class="selected"><a href="#tab1"><em><?=$details['0']->cat_name?></em></a></li>
							        <li><a href="#tab2"><em><?=$details['1']->cat_name?></em></a></li>
							        <li><a href="#tab3"><em><?=$details['2']->cat_name?></em></a></li>
									<li><a href="#tab3"><em><?=$details['3']->cat_name?></em></a></li>
	    					</ul>            
    						<div class="yui-content">
    						<?for($i=1;$i<=4;$i++){?>
							 <div id="tab<?=$i?>">
							    <div style="padding-top: 5px;" id="telugufont1">
							    <?if(!empty($details_more[$i]['0'])){ 
						 if(file_exists("./assets/".$type."/news_img".$details_more[$i]['0']->id."_thumb.jpg")){ ?>	        
	              	<a href="<?=base_url();?><?=$type?>/<?=$type?>details/<?=$details_more[$i]['0']->id?>"><img src="<?=base_url();?>assets/<?=$type?>/news_img<?php if(isset($details_more[$i]['0'])){echo $details_more[$i]['0']->id;}?>_thumb.jpg" style="float:left;padding:4px 20px 4px 4px;text-align: justify;" align="top" border="0"/></a>
	            	<? }} ?>
	             <?if(!empty($details_more[$i])){?>
	             <font id="telugufont"><a href="<?=base_url();?><?=$type?>/<?=$type?>details/<?=$details_more[$i]['0']->id?>"><?php echo $details_more[$i]['0']->heading?></a></font><br>
	              <?=$details_more[$i]['0']->summary; }?>
	              <div style="height: 120px;" id="telugufont">
	            
	                 <ul id="mainnews">
	              <?if(!empty($details_more[$i])){
	              	$j=1;
	              foreach($details_more[$i] as $item) {
                   if($j==9) break;?>
	             <li id="telugufont"><a href="<?=base_url();?><?=$type?>/<?=$type?>details/<?=$item->id?>"><?=$item->heading ?></a></li>
	                <?$j++;}} ?>
	                 </ul>
	                 </div>
	                 </div>
					 </div>
					 	<?} ?>
						</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('demo');

    YAHOO.log("The example has finished loading; as you interact with it, you'll see log messages appearing here.", "info", "example");
})();
</script>
							</table>
                      <img src="<?=base_url();?>assets/imgs/top-crow-botom.jpg" width="460"/></td>
                  </tr>
                </table></td>
            </tr>
          </table></td>
          <td width="245" valign="top"><img src="<?=base_url();?>assets/ads/Inner.jpg"></img></td>
          <td width="185" align="center" valign="top" rowspan="3">
			<div width="100%" style="border:1px solid #FF0000;height:830px;background-color:#808080;">Google Adds
			<!--<tr>
				<td style="border:1px solid #3789C3;height: 25px;" id="news_heading">Latest Gallery</td>
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
			--></div>
			<!--<div style="padding-top: 5px">
			<table style="border:1px solid #3789C3;" bgcolor="#9CD8FC" width="100%">
				<tr>
					<td align="center">
					<div><img src="<?=base_url();?>assets/imgs/add-img1.jpg"></div>
					</td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/add-img2.jpg"></div></td>
				</tr>
				<tr>
					<td align="center"><div><img src="<?=base_url();?>assets/imgs/2.jpg"></div></td>
				</tr>
			</table>
			</div>
			--><div style=""></div>
          </td>
          </tr>
          <tr>
          	<td valign="top" align="left"  colspan="2">
        
          		<table width="100%" cellspacing="10" height="520px" >
          			<tr>
          				<td width="450" style="border: 1px solid #3789C3;"  valign="top">
          				 <div style="width:100%"id="news_heading"><div id="newsheading" style="width:250px;float: left; "><? if (isset($news['0']->cat_name)){ echo $news['0']->cat_name;}?></div>
          				 <? $count=1; foreach($news as $row): ?>
          				Change View:<img src="<?=base_url();?>assets/imgs/LIN.png" style="cursor: pointer"onclick="loadNews('content','<?=base_url()?><?=$type?>list/listview/<?=$row->cat_id?>')" />
          				 <img style="cursor: pointer; " src="<?=base_url();?>assets/imgs/FUL.png" onclick="loadNews('content','<?=base_url()?><?=$type?>list/thumbview/<?=$row->cat_id ?>')" />
          				 <? if($count==1){
          				 	break;
          				 } 
          				 endforeach;	 
          				 	?>
          				 </div>
          				 <div id="divcontent">
          				 <img src="<?=base_url();?>assets/imgs/loadingAnimation.gif" align="middle" style="padding: 200px 0px 0px 80px;"></img>
    					
    						<!--<ul>
    						<? foreach ($news as $row): ?>
    						<li><a href="<?=base_url();?>news/newsdetails/<?=$row->id?>"><? echo $row->heading;?></a></li>
    						<? endforeach; ?>
    						<div style="padding-top: 400px;padding-left: 250px"><? echo $pagination; ?></div>
    						</ul>
          				 --></div>
          				</td>
          				<td style="border: 1px solid #3789C3;" valign="top">
          				 <div style="width:100%" id="news_heading"><span id="newsheading" style="padding-right:30px"><?=$more['29']->matter;?></span></div>
          				  <div id="mainnews">
          				 	<ul>
          				 	<?foreach($details_more as $item){
          				 		$i=1;
          				         foreach($item as $article){?>
          				         <li style="padding-left:6px;"><a href="<?=base_url();?><?=$type?>/<?=$type?>details/<?=$article->id?>"><? echo $article->heading;?></a></li>
          				         <?if($i==1)break; $i++;}?>
          				 		   <?}?>
	
          				 </ul>
          				 </div>

          				</td>
          			</tr>
          		</table>
          	</td>
          </tr>
          <table width="99%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="5" valign="top" id="botomtop"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" style="float:left;margin:4px 4px 0px 0px;"></img><div style="padding-top:5px;" id="newsheading"><?php {echo $more['29']->matter;}?></div></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" style="float:left;margin:4px 4px 0px 0px;"></img><div style="padding-top:5px;" id="newsheading"><?php {echo $more['31']->matter;}?></div></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
          <td width="8">&nbsp; </td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter-1.jpg" width="5" height="31" /></td>
          <td width="295" valign="top" id="botomtop" align="left"><img src="<?=base_url();?>assets/imgs/001.png" style="float:left;margin:4px 4px 0px 0px;"></img><div style="padding-top:5px;" id="newsheading"><?php {echo $details_sahithi['2']->cat_name;}?></div></td>
          <td width="5" valign="top"><img src="<?=base_url();?>assets/imgs/senter2.jpg" width="5" height="31" /></td>
        </tr>
        <tr>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="150" /></td>
          <td valign="top" id="botom-ser" style="padding-top: 3px;"><ul id="mainnews"><?for($i=5;$i<=7;$i++)
          {?>
         <li><a href="<?=base_url();?><?=$type;?>/details/<?=$details[$i]->id?>"><? echo $details[$i]->cat_name;?></li>
         <?}?>
         </ul>
          </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="150" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="150" /></td>
          <td valign="top" id="botom-ser">
          <div id="home_poll" style="height: 65px;">
                 	<div><? if(!empty($cinemapoll['0']->question)){
						echo   $cinemapoll['0']->question;               		
                 	     ?></div>

     				<table width="100%">
              			<tr>
              				<td align="right">
              					<input type="hidden" name="poll_id" value="<?=$cinemapoll['0']->id?>">
              					<? $attributes = 'onClick= "loadPoll(\''.base_url().'poll/index/'.$cinemapoll[0]->id.'\',this.value,\''.base_url().'assets/imgs/bigrotation2.gif\')";' ?>
              					<?=form_radio('answer','a',True,$attributes) ?>
              				</td>
              				<td align="left"><?=$more['18']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','b',FALSE,$attributes) ?></td><td align="left"><?=$more['19']->matter ?></td></tr>
              			<tr><td align="right"><?=form_radio('answer','c',FALSE,$attributes) ?></td><td align="left"><?=$more['20']->matter ?></td></tr>
     				</table>
     				<? }else echo 'To day no poll.'; ?></div>
     			<br><span style="font-weight: bold;font-size: 14px;color:maroon;">yesterday poll</span>
                <div><?if(!empty($yes_poll['0']->question)){
                	echo $yes_poll['0']->question;
                	?></div>
		                <div align="right" id="result"><A HREF="javascript:void(0)"
					onclick="window.open('<?=base_url();?>poll/yes_result/<?=$yes_poll['0']->id?>',
						'welcome','width=300,height=200')">
						Result</A></div>
              
                <?} else echo 'Yesterday no no poll.';?>
                </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="150" /></td>
          <td width="8">&nbsp;</td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-lef.jpg" width="5" height="150" /></td>
          <td valign="top" id="botom-ser" style="font-size: 13px;">
          <?php 
          if(!empty($sahithi_details)){ 
			if(file_exists("./assets/sahithi/news_img".$sahithi_details['0']->id."_thumb.jpg")){ ?>	        
	              	<a href="<?=base_url();?>sahithi/sahithidetails/<?=$sahithi_details['0']->id?>"><img src="<?=base_url();?>assets/sahithi/news_img<?php if(isset($sahithi_details['0'])){echo $sahithi_details['0']->id;}?>_thumb.jpg" style="float:left;margin:4px 20px 4px 4px;text-align: justify;border: 1px solid gray;" align="top" border="0"/></a>
	            	<? } ?>
          <a href="<?=base_url();?>sahithi/sahithidetails/<?=$sahithi_details[0]->id?>"><?=$sahithi_details[0]->heading?></a><br>
          <?=$sahithi_details[0]->summary?>
          <ul id="mainnews">
		<?php
		$count=0;foreach ($sahithi_details as $row):
		if($count==0){
			$count++;
			continue;
		}
		?>
		<li style="padding: 1px;"><a href="<?=base_url();?>sahithi/sahithidetails/<?=$row->id?>"><?=$row->heading?></a></li>
		<? if($count==4){
		break;
		}else{
		$count++;
		}
		endforeach; 
		if($count==0){
			echo 'No data found';
		}}
		?>
          
                </td>
          <td valign="top"><img src="<?=base_url();?>assets/imgs/botom-righ.jpg" width="5" height="150" /></td>
        </tr>
    </table>