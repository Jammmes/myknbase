<div class="col">
    <div class="card m-1 p-1 rounded border border-secondary" style="width: 18rem;">
        <div class="card-body">
            <textarea class="form-control mb-3 bg-dark text-warning" rows="2" readonly><?= $title;?></textarea>
            <div class="card-subtitle mb-2 text-muted">Статус: <strong><?= $status;?></strong> </div>
            <div class="card-subtitle mb-2 text-muted">Создана: <small><?= $created_at;?></small> </div>
            <div class="card-subtitle mb-2 text-muted">Изменена: <small><?= $changed_at;?></small> </div>
            <textarea class="form-control mb-0 " rows="1" readonly><?= $tags;?></textarea>
            <form class="text-center mt-4" action="/article/open/" method="post">
                <input type="hidden" name="id" value="<?= $id;?>"/>
                <button class="btn btn-sm btn-success" type="submit">Открыть</button>
            </form>
        </div>
    </div>
</div>    
