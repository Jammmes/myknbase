<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body class="container-fluid">
    <ul class="nav nav-pills justify-content-center bg-secondary d-flex align-items-center">
        <li class="nav-item ">
            <a class="nav-link text-light" href="# ">Новая запись</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link text-light" href="/tags/ ">Категории</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link text-light" href="/articles/ ">Статьи</a>    
        </li>
        <li class="nav-item ">
            <a class="nav-link text-light" href="# ">Вход</a>
        </li>
    </ul>
    <div class="bg-secondary text-center " id="mainHeader">       
        <form class ="pb-3" action="/search/" method="post">
            <div class ="form-row d-flex justify-content-center">
                <div class="col-xs-10 col-sm-10 col-md-6">
                <input type="text" class ="form-control " name = "search_str"/>
                </div>
                <div class="col-xs-1 col-sm-1 col-md-2">
                    <div class="input-group">
                        <select name = "where" class="custom-select" id="inputGroupSelect04">
                            <option value="0">Везде</option>
                            <option value="1">В категориях</option>
                            <option value="2">В статьях</option>
                        </select>
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Искать</button>
                        </div>
                    </div>               
                </div>
            </div>
        </form> 
    </div>
    