<?php 
    require_once("../crudDT/php/component.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
            <div class="d-flex justify-content-center">
                <form action="" method="post" class="w-50">
                    <div class="pt-2">
                        <?php inputElement("<i class='fas fa-id-badge'></i>", "ID", "book_id",""); ?>
                    </div>
                    <div class="pt-2">
                        <?php inputElement("<i class='fas fa-book'></i>", "Book Name", "book_name",""); ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php inputElement("<i class='fas fa-people-carry'></i>", "Publisher", "book_publisher",""); ?>
                        </div>
                        <div class="col">
                            <?php inputElement("<i class='fas fa-dollar-sign'></i>", "Price", "book_price",""); ?>
                        </div>
                    </div>
                    <div class="d-flex pt-2 justify-content-center">
                        <?php buttonElement("btn-create","btn btn-success", "<i class='fas fa-plus'></i>", "create", "data-toggle='tooltip' data-placement='bottom' title='Create'"); ?>
                        <?php buttonElement("btn-read","btn btn-primary", "<i class='fas fa-sync'></i>", "read", "data-toggle='tooltip' data-placement='bottom' title='Read'"); ?>
                        <?php buttonElement("btn-update","btn btn-light border", "<i class='fas fa-pen-alt'></i>", "update", "data-toggle='tooltip' data-placement='bottom' title='Update'"); ?>
                        <?php buttonElement("btn-delete","btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "data-toggle='tooltip' data-placement='bottom' title='Delete'"); ?>
                    </div>
                </form>
            </div>
            <div class="d-flex table-data">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Book Name</th>
                        <th>Publisher</th>
                        <th>Book Price</th>
                        <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Book Name</td>
                        <td>Daily Tution</td>
                        <td>44.99</td>
                        <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>