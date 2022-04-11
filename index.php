<?php
session_start();
require "./vendor/db.php";
$getposts = mysqli_query($link,"SELECT * FROM `post` ORDER BY `id` DESC ");

?>


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
<?php require "blocks/header.php"; 
if($_SESSION['users']['admin'] > 1){
require "blocks/admin.php";
}
else {}
?>
    
    <div class="container mt-5 ">
        <h3> Здравстуйте </h3>
        <div class="container mt-5">    
    <div class="d-flex flex-wrap">
    <?php while ($post = mysqli_fetch_assoc($getposts)){ ?>
   
    <div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal">
          <ya-tr-span data-index="7-0" data-translated="true" data-source-lang="en" data-target-lang="ru" 
          data-value="Free" data-translation="Бесплатно" data-type="trSpan"></ya-tr-span></h4>
      </div>
      <div class="card-body">
        <img src="./content/<?= $post['img']; ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="image">
        </ul>
        <a class="w-100 btn btn-lg btn-outline-primary" href='info.php?id=<?= $post['id'] ?>'>Читать</a>
      </div>
    </div>
  </div>
  </div>
  <?php } ?>
  <?php require "blocks/footer.php" ?>
</body>
</html>