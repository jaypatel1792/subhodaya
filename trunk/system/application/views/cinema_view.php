
<script language="javascript">
//<!--
function detectBrowser()
{
var browser = navigator.appName;
var b_version=navigator.appVersion;
var version=parseFloat(b_version);

}
function getFlexApp(appName) {
	  if (navigator.appName.indexOf ("Microsoft") !=-1) {
	    return window[appName];
	  } else {
	    return document[appName];
	  }
	}

function display_text(sample) {
	var browser = navigator.appName;
	if(browser == 'Microsoft Internet Explorer')
	{
	getFlexApp("FlashID").display_text(sample);	
	}
	if(browser == 'Netscape')
	{
    getFlexApp("sample123").display_text(sample);
	}
	
}
var limit_time = 4000;
function display_text_1(){
	detectBrowser();
	display_text(1);
		window.setTimeout("display_text_2(2)",limit_time);
}
function display_text_2(ss){
	display_text(ss);
	window.setTimeout("display_text_3(3)",limit_time);
}
function display_text_3(ss){
	display_text(ss);
	window.setTimeout("display_text_4(4)",limit_time);
}
function display_text_4(ss){
	display_text(ss);
	window.setTimeout("display_text_5(5)",limit_time);
}
function display_text_5(ss){
	display_text(ss);
	window.setTimeout("display_text_34(1)",limit_time);
}
function display_text_34(ss){
	display_text(ss);
	window.setTimeout("display_text_1()",limit_time);
}
function display(value)
{
	var content = document.getElementById('flash_'+value).innerHTML;
  document.getElementById('flash-content').innerHTML = content;
}

//-->
</script> 
<div style="width:100%; height:100%px; float:left">
	<div id="new" style="width:100%; height:100%;">
		<div>
			<div style="float:left;">
				                   <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="486" height="341">
  <param name="movie" value="<?=base_url();?>assets/subh.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="9.0.45.0" /><!--
   This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. 
  --><param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" /><!--
   Next object tag is for non-IE browsers. So hide it from IE using IECC. 
  [if !IE]>
  --><object id="sample123" type="application/x-shockwave-flash" data="<?=base_url();?>assets/subh.swf" width="486" height="341">
    <!--<![endif]
    --><param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="9.0.45.0" />
    <param name="expressinstall" value="<?=base_url();?>assets/Scripts/expressInstall.swf" /><!--
     The browser displays the following alternative content for users with Flash Player 6.0 and older. 
    --><div><!--
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      --><p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
    [if !IE]>
  </object>
  <![endif]
</object>
<script type="text/javascript">
var browser = navigator.appName;
if(browser == 'Microsoft Internet Explorer')
{
	swfobject.registerObject("FlashID");
}
else
	swfobject.registerObject("sample123");

</script>
<div id="flash-content" style="position:absolute; width:464px; top: 361px; color:white; padding:5px 5px 5px 5px; vertical-align:top; left:38px; height: 40px;text-align: left;"> 
<?=$img['0']->title?>
</div>

<?php 
 foreach ($img as $img)
 { 
 	?>
 
<div id="flash_<?=$img->id?>"  style="display: none" > 
<?=$img->title?>
</div>
<?php 
 }
?>                                 	
</div>
			<div>
				<img src="<?=base_url()?>assets/home_images/ads/ad1.jpg"/>
				<img src="<?=base_url()?>assets/home_images/ads/ad2.jpg"/>
			</div>
		</div>
	 </div>
	<div style="width:100%; height:100%;">
	<div style="float:right; width:230px; height:100%; border-left:0px solid #b3d3e2; padding-top:5px;text-align: left;">
		<div style="height: 218px;width: 212px;">
			<span>mee abhipram</span>
			<div>cinema poll question</div>
			<form>
			<div><input type="radio" name="yes"/> YES</div>
			<div><input type="radio" name="yes"/> YES</div>
			<div><input type="radio" name="yes"/> YES</div>
			</form>
		</div>
		<div><img src="<?=base_url()?>assets/home_images/ads/ads.jpg" width="204" height="531" /></div>
	</div>
	<div id="hr"><hr style="border: 1px solid #cee2ed;width: 98%" /></div>
	<div id="mahila_main">
						 <?= (isset($cine_news)) ? $cine_news : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_pukarlu)) ? $cin_pukarlu : '' ?>
						  <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>	  
	</div>
					  <div id="hr"><hr style="border: 1px solid #cee2ed;width: 98%;" /></div>
					  <div id="mahila_main">
					   <?= (isset($cin_riviews)) ? $cin_riviews : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_shedule)) ? $cin_shedule : '' ?>
						  <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
				  	</div>
					  <div id="hr"><hr style="border: 1px solid #cee2ed;width: 98%;" /></div>
					  <div id="mahila_main">
					   <?= (isset($cin_interviews)) ? $cin_interviews : '' ?>
						   <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						 <?= (isset($cin_therachatu)) ? $cin_therachatu : '' ?>
						  <div style="float:left;width:2px; height:200px;"><img src="<?=base_url()?>assets/image/line.gif" /></div>
						  </div>
	</div>
</div>