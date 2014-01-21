<?php foreach($files as $file): ?>  
  
<div class="section">  
    <span><?php echo $file->name?></span>  
    <div style="float: right;">  
        <span><a href="<?php echo base_url();?>files/<?php echo $file->name?>">View</a></span>  
        <span><a href="<?php echo site_url("profile/delete/".$file->id);?>">Delete</a></span>  

    </div>      
</div>  
 
<?php endforeach; ?>   


