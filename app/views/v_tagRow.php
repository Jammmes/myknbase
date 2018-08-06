
    <div class="row m-1">
            <form class="col-md-7 col-xs-7 col-sm-7" action="/Tags/edit/"  method="post">
                <div class="row">
                    <div class ="col-md-10 col-xs-10 col-sm-10">                          
                    <input class="form-control" type = "text" name="tagName" value="<?=$title;?>"/>
                    </div>
                    <div class="col-md-1 col-xs-1 col-sm-1 text-center"><?=$quant;?></div>
                    <input type = "hidden" name="id" value="<?=$id;?>"/>
                    <div class="col-md-1 col-xs-1 col-sm-1 text-center">
                    <button type="submit" class="btn btn-outline-dark btn-sm">Изменить</button>
                    </div>
                </div>
            </form>   
        <div class="col-md-1 col-xs-1 col-sm-1 text-center">
            <form action="/Tags/delete/"  method="post">
                <input type = "hidden" name="id" value="<?=$id;?>"/>
                <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
            </form> 
        </div>
        <div class="col-md-1 col-xs-1 col-sm-1 text-center">
            <form action="/Catalog/getArticlesByTag/" method="post">
                <input type = "hidden" name="id" value="<?=$id;?>"/>
                <button type="submit" class="btn btn-outline-success btn-sm">Просмотр</button>
            </form>
        </div>
    </div>


