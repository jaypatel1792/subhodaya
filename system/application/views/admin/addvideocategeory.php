<?=form_open_multipart('admin/videos/addcategeory') ?>

 <table>
  <tr>
   <th colspan="2" align="center" style="font-size:16px;" >Add Video Categeory</th>
  </tr>
 
    <tr>
      <td>Creat Categeory</td>
      
       <td><?echo form_input('name') ?></td>
</tr>
 <tr>
  <td></td>
 <td><?echo form_submit('submit','submit')?></td>
 </tr>
</table>
 <?=form_close();?> 
  
  