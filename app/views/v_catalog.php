<?php include 'v_header.php' ;?>

<div class="d-flex justify-content-center">
    <div class="row">
        <?php foreach($content_data as $row) :?>
            <?php echo Template::getInstance()->render('v_article_minCard',$row);?>   
        <?php endforeach;?>
    </div>
</div>
<?php include 'v_footer.php';?>
