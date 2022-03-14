<?php
    require __DIR__ . '/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-top d-flex justify-content-between align-items-center">
            <img src="img/logo.svg" alt="">
            <div class="ms_select">
                <select >
                    <option value="">Seleziona il genere</option>
                    <option value="">Rock</option>
                    <option value="">Pop</option> 
                    <option value="">Jazz</option> 
                    <option value="">Metal</option> 
                </select> 
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 justify-content-center "> 
                <?php
                    foreach($database['albums'] as $key){
                        echo '<div class="text-center">';
                            echo '<div class="ms_box">';
                                echo "<img src=".$key['poster']." "."class="."ms_img-fluid".">";
                                echo "<h3>".$key['title']."</h3>";
                                echo "<h5>".$key['author']."</h5>";
                                echo "<h5>".$key['year']."</h5>";
                            echo'</div>';
                        echo'</div>';
                    };
                ?> 
            </div>
        </div>
    </main>
</body>
</html>