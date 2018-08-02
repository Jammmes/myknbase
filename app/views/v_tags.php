<?php include 'v_header.php' ;?>

<div class ="row m-2 ">
    <div class="col-md-9 col-sm-10 col-xs-10 border">
    
    <div class="row border bg-dark text-light">
        <div class="col-md-7 col-xs-7 col-sm-7">Имя метки</div>
        <div class="col-md-1 col-xs-1 col-sm-1">Кол-во</div>
        <div class="col-md-1 col-xs-1 col-sm-1">Просмотр</div>
        <div class="col-md-1 col-xs-1 col-sm-1">Изменить</div>
        <div class="col-md-1 col-xs-1 col-sm-1">Удалить</div>
    </div>

        <?php foreach ($content_data as $row):?>
        <?php echo Template::getInstance()->render('v_tagRow',$row) ;?>
        <?php endforeach;?>

    </div>
     
     <div class="col-md-3 col-sm-2 col-xs-2">
        <form class="form-inline" action="/Tags/add/" method="post">
          <div class="form-group mx-sm-3 mb-2">
            <label for="inputTag" class="sr-only">Добавить категорию</label>
            <input type="text" name="tagName" class="form-control" id="inputTag" placeholder="Категория">
          </div>
          <button type="submit" class="btn btn-warning mb-2">Добавить</button>
        </form>
    </div>

</div>


<?php include 'v_footer.php';?>
