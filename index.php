<?php 
    //Post the form, get the data and mount the URL with the HTTP code of the post.
    $url = "";
    if(isset($_POST['cat-error-type']) && !empty($_POST['cat-error-type'])){
        $url = "https://http.cat/" . $_POST['cat-error-type'] . '.jpg'; 
        $imgUrl = dirname(__FILE__).'\\img\\cat-img.jpg'; // This is from a future commit to save the img in the folder.

        file_put_contents($imgUrl, file_get_contents($url));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<style>
    .background-image{
        z-index: -999;
        position: absolute;
        width: 100%;
        height: auto;
    }
</style>
<body>
    <div class="header">
        <nav class="navbar navbar-light bg-light">
            <div class="container" style="justify-content: center;">
                <h1 class="text-center">Cat-Api</h1>
            </div>
        </nav>
    </div>
    <div class="container h-100 d-flex align-items-center justify-content-center" style="margin-top: 2vh">  
    <img src="img/stupid-cat.gif" class="opacity-50 background-image">
        <div class="row">
            <div class="col-md-12 text-center">
                <form method="post">
                    <div class="form-group">
                        <label for="cat-post">PHP Response:</label>
                        <input type="error-php" class="form-control" name="cat-error-type" id="php-error-input" placeholder="...">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Search Cat.</button>
                </form>
            </div>
        </div>  
    </div>
    <div class="container">
        <img style="margin-top: 4vh; width: 50%" class="rounded mx-auto d-block" src="img/cat-img.jpg" alt="">
    </div>
</body>
</html>