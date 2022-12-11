<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include './partials/connect.php';?>
<?php include './partials/header.php';?>


<?php
$id=$_GET['story_id'];
$sql="Select * from `topic` where topic_id=$id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
  $topic_name=$row['topic_name'];
  $topic_desc=$row['topic_desc'];
  $topic_image=$row['topic_image'];
}
?>

<!-- Jumbotron-->
<div class="container">
<div class="jumbotron jumbotron-fluid bg-warning rounded">
<div class="container">
  <h1 class="display-4"><?php echo $topic_name;    ?></h1>
  <p class="lead"><?php echo $topic_desc ?></p>
 
  <p class="lead">
    <button class="btn btn-dark">
    <a class="text-light" href="#" role="button">Continue Reading</a>
    </button>
    
  </p>
</div>
</div>

</div>


<div class="container-fluid slider">
 


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/img1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <!--Reading-->
      <div class="container-fluid mb-0">

<div class="jumbotron jumbotron-fluid bg-warning rounded p-0 mb-0">
<div class="container">
  <h1 class="display-4 text-center">Enjoy Reading</h1>
  <img src="<?php echo $topic_image;?>" class="img-fluid" alt="">
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos non autem possimus blanditiis? Est nesciunt vitae perferendis, nam optio maiores ipsa voluptas facere deserunt, corporis eum, repellendus incidunt cumque earum. Aliquid tempore nostrum nobis saepe hic cupiditate debitis. Fugit asperiores debitis iusto animi quis explicabo eum pariatur nesciunt nulla cum. Necessitatibus aliquam eaque hic rem, impedit optio obcaecati accusantium minus molestiae praesentium dignissimos iste temporibus doloremque dolorum? Repellat, totam vitae optio libero numquam, ad ipsum explicabo quo pariatur exercitationem animi voluptas, vero aperiam. Quod soluta autem repudiandae nulla sint quaerat nesciunt voluptatem obcaecati fugit, fugiat perspiciatis maiores reiciendis, ea aliquam error libero voluptatibus distinctio animi nostrum neque! Natus culpa repellat eius repellendus aliquam voluptates odit officiis fuga, maxime quas neque quaerat obcaecati repudiandae provident, at optio quia id illum molestias est consectetur explicabo aperiam cum ipsa. Nam harum enim repellat saepe itaque laborum, nobis quasi eius voluptas consequatur praesentium! Facilis voluptas quis temporibus nobis voluptatum, optio eveniet sed facere fuga libero, adipisci itaque porro laborum explicabo est eum sunt tenetur aut iste, laboriosam saepe tempora recusandae. Eaque voluptatem deleniti quo qui totam. Cum ipsa neque magnam id laudantium quibusdam aut nesciunt rerum! Consequatur ad impedit aliquid provident recusandae aut amet?
  </p>
 
 
</div>
</div>

</div>

<div class="container-fluid mb-4">
  <h2 class="text-center diplay-4">Thank You for Your Time 😊</h2>
</div>


<?php include './partials/footer.php';?>

</body>
</html>