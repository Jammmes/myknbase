<?php include 'v_header.php' ;?>

<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3"></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <form class="text-center mt-4" action="/catalog/edit/" method="post">
            <div class="row">
                <div class="col">
                    <div class="card-subtitle mb-2 text-muted border rounded">Создана: <?= $content_data[0]['created_at'];?></div>
                </div>
                <div class="col">
                    <div class="card-subtitle mb-2 text-muted border rounded">Изменена: <?= $content_data[0]['changed_at'];?></div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <input type="text" name="title" class="form-control mb-2 text-light bg-dark text-center " value="<?= $content_data[0]['title'];?>"/>                    
                </div>
                <div class="col-md-1">
                    <input type="text" name="status" class="form-control mb-2 text-center text-warning bg-dark" value="<?= $content_data[0]['status'];?>" />                    
                </div>
            </div>
            <textarea name = "text" class="form-control mb-2 "><?= $content_data[0]['text'];?></textarea>
            <input type="text" name="tags" class="form-control mb-2 text-light bg-dark" value="<?= $content_data[0]['tags'];?>" />
            <input type="hidden" name="id" value="<?= $content_data[0]['id'];?>"/>
            <button class="btn btn-sm btn-success" type="submit">Сохранить</button>
            <a class="btn btn-sm btn-success" href="/catalog/">Вернуться в каталог</a>
        </form>            
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3"></div>
</div>
            




<?php include 'v_footer.php';?>
