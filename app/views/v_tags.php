<?php include 'v_header.php' ;?>

<div class ="row m-2 ">
    <div class="col-md-4"></div>
    <div class="col-md-3">
        <div class="d-flex justify-content-center">
            <form class="form-inline m-2" action="/Tags/add/" method="post">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputTag" class="sr-only">Добавить категорию</label>
                    <input type="text" name="tagName" class="form-control" id="inputTag" placeholder="Категория">
                </div>
                <button type="submit" class="btn btn-warning mb-2">Добавить</button>
            </form>
        </div>
    </div>
    <div class="col-md-4 m-3 text-danger">
        <h5><strong><?=$content_data['error'];?></strong></h5>
    </div>
</div>    
<div class ="row m-2 ">
    <div class="col border">
        <!--Шапка-->
        <div class="row border text-center bg-dark text-light">
            <div class="col-md-7 col-xs-7 col-sm-1">
                    <div class="row">
                        <div class ="col-md-10 col-xs-10 col-sm-10">  
                            Имя метки
                        </div>
                        <div class ="col-md-1 col-xs-1 col-sm-1">
                            Кол-во
                        </div>
                        <div class ="col-md-1 col-xs-1 col-sm-1">
                            Просмотр
                        </div>
                    </div>
            </div>
            <div class="col-md-1 col-xs-1 col-sm-1">Изменить</div>
            <div class="col-md-1 col-xs-1 col-sm-1">Удалить</div>
<!--            <div class="col-md-2 col-xs-2 col-sm-1"></div>-->
        </div>
        <!--ДАнные-->
        <?php foreach ($content_data['content'] as $row):?>
        <?php echo Template::getInstance()->render('v_tagRow',$row) ;?>
        <?php endforeach;?>
    </div>   
</div>

<?php include 'v_footer.php';?>
