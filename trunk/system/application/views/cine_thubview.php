<div style="height:480px">

<? if(!empty($details)){ 
$count=0; foreach($details as $row):?>
<div style="height: 105px" id="telugufont1">
<a href="<?=base_url()?>cinema/inner/<?=$row->id?>"><img src="<?=base_url();?>assets/cinema/ceni_img<?=$row->id ?>_thumb.jpg" border="0" style="float: left;padding: 2px 4px 2px 2px;" ></img></a>
<font id="mainnews"><a href="<?=base_url()?>cinema/inner/<?=$row->id?>"><? echo $row->heading; ?></a></font><br>
<? echo $row->summary; ?>
</div><hr/>
<?if($count==3){
	break;
}else{
	$count++;
}
endforeach; }
else{
echo 'No data found';
}
?>

</div>
<div align="right" style="width: 100%"><? echo $paginate;?></div>