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
    <ul class="nav nav-pills justify-content-center border border-primary rounded m-1 d-flex align-items-center">
        <li class="nav-item ">
            <a class="nav-link " href="/tags/ ">Категории</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="/articles/ ">Статьи</a>    
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="/login/ ">Вход</a>
        </li>
    </ul>
    <div class="alert alert-primary text-center m-o" id="mainHeader">       
        <form action="/search/" method="post">
            <div class ="form-row d-flex justify-content-center">
                <div class="col-xs-10 col-sm-10 col-md-6">
                <input type="text" class ="form-control m-0" name = "search_str"/>
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1 m-0">
                <button type="submit" class="btn btn-success">Искать</button>                
                </div>
            </div>
        </form> 

</form>
    </div>
    