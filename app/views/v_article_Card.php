<?php include 'v_header.php' ;?>

<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3"></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <form class="text-center mt-4 border border-dark rounded p-3" action="/catalog/edit/" method="post">
            <div class="row">
                <div class="col">
                    <div class="card-subtitle mb-2 text-muted border rounded">Создана: <?= $content_data[0]['created_at'];?></div>
                </div>
                <div class="col">
                    <div class="card-subtitle mb-2 text-muted border rounded">Изменена: <?= $content_data[0]['changed_at'];?></div> 
                </div>
            </div>
            <div class="row">
                <input type="text" name="title" placeholder = "Тема" class="form-control m-3  text-warning bg-dark text-center" id="inpArticleTitle" value="<?= $content_data[0]['title'];?>"/>            
                <div class="col-md-10">
                    <input type="text" name="tags" list="tagList" placeholder = "Категории" class="form-control mb-2 text-warning bg-dark" id="inpArticleTags" value="<?= $content_data[0]['tags'];?>" />
                    <datalist id="tagList"></datalist>                 
                </div>
                <div class="col-md-1">
                    <input type="text" name="id" class="form-control mb-2 text-center " id="inpArticleID" readonly value="<?= $content_data[0]['id'];?>" />                    
                </div>
                <div class="col-md-1">
                    <input type="text" name="status" placeholder = "!?" class="form-control mb-2 text-center text-light bg-dark" id="inpArticleStatus" value="<?= $content_data[0]['status'];?>" />                    
                </div>
            </div>
            <textarea name = "text" class="form-control mb-2 " rows="22"><?= $content_data[0]['text'];?></textarea>

            <button class="btn btn-sm btn-success" type="submit">Сохранить</button>
            <a class="btn btn-sm btn-success" href="/catalog/">Вернуться в каталог</a>
        </form>            
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3"></div>
</div>
            




<?php include 'v_footer.php';?>
