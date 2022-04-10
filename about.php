<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>BLACKghost</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container">
<h3> Контактная форма </h3>
<form action="check.php" method="post">
<input type="email" name="email" placeholder="Ведите Емаил" class="form-control"><br>
<textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
<button type="subnit" name="send" class="bth btn-success">Отправить</button>
</form>
</div>
<div class="col-full s-content__main">

                <div class="row">
                    <div class="col-six tab-full">
                        <h3>Контакты</h3>
                        <p>
                        +8 800 535 3535<br>
                        </p>
                    </div>
                    <div class="col-six tab-full">
                        <h3>Соц. сети</h3>
                        <p><a target="_blank"  href="https://vk.com/chill_1">МОЙ VK</a></p>
    
                        </p>
                    </div>
                </div> 
            </div> 
<?php require "blocks/footer.php" ?>
</body>
</html>