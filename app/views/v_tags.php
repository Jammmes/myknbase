<?php include 'v_header.php' ;?>

<div class ="row m-2 ">
    <div class="col border">
        <div class="d-flex justify-content-center">
            <form class="form-inline m-2" action="/Tags/add/" method="post">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputTag" class="sr-only">Добавить категорию</label>
                    <input type="text" name="tagName" class="form-control" id="inputTag" placeholder="Категория">
                </div>
                <button type="submit" class="btn btn-warning mb-2">Добавить</button>
            </form>
        </div>
        <!--Шапка-->
        <div class="row border bg-dark text-light text-center">
            <div class="col-md-7 col-xs-7 col-sm-7">Имя метки</div>
            <div class="col-md-1 col-xs-1 col-sm-1">Кол-во</div>
            <div class="col-md-1 col-xs-1 col-sm-1">Просмотр</div>
            <div class="col-md-1 col-xs-1 col-sm-1">Изменить</div>
            <div class="col-md-1 col-xs-1 col-sm-1">Удалить</div>
        </div>
        <!--ДАнные-->
        <?php foreach ($content_data as $row):?>
        <?php echo Template::getInstance()->render('v_tagRow',$row) ;?>
        <?php endforeach;?>
    </div>   
</div>

<?php include 'v_footer.php';?>
