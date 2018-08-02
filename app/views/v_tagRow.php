
    <div class="row border m-1">
        <div class="col-md-7 col-xs-7 col-sm-7"><?= $title ;?></div>
        <div class="col-md-1 col-xs-1 col-sm-1">0</div>
        <div class="col-md-1 col-xs-1 col-sm-1">
            <form action="/Articles/getArticlesByTag/" method="post">
                <input type = "hidden" name="id" value="<?=$id;?>"/>
                <button type="submit" class="btn btn-primary btn-sm">Просмотр</button>
            </form>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-1">
            <form action="/Tags/edit/"  method="post">
                <input type = "hidden" name="id" value="<?=$id;?>"/>
                <input type = "hidden" name="tagName" value="<?=$title;?>"/>
                <button type="submit" class="btn btn-success btn-sm">Изменить</button>
            </form>   
        </div>
        <div class="col-md-1 col-xs-1 col-sm-1">
            <form action="/Tags/delete/"  method="post">
                <input type = "hidden" name="id" value="<?=$id;?>"/>
                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
            </form> 
        </div>
    </div>


