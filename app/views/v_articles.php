<?php include 'v_header.php' ;?>

<?php foreach($content_data as $row) :?>
<div><?= $row['id'];?> </div>
<div><?= $row['title'];?> </div>
<div><?= $row['text'];?> </div>
<div><?= $row['status'];?> </div>
<div><?= $row['tags'];?> </div>
<div><?= $row['created_at'];?> </div>
<div><?= $row['changed_at'];?> </div>
<div><?= $row['login'];?> </div>
    

    <?php endforeach;?>

<?php include 'v_footer.php';?>
