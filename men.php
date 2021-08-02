<?php include('include/header.inc.php'); ?>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    

<style>
.product-grid{
    background-color: #fff;
    font-family: 'Lato', sans-serif;
    text-align: center;
}
.product-grid .product-image{ position: relative; }
.product-grid .product-image a.image{ display: block; }
.product-grid .product-image img{
    width: 100%;
    height: auto;
}
.product-grid:hover .product-image .pic-1{
    opacity: 0;
    transition: all 0.5s ease 0s;
}
.product-image .pic-2{
    width: 100%;
    height: 100%;
    filter: blur(10px);
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.5s ease 0s;
}
.product-grid:hover .product-image .pic-2{ filter: blur(0);opacity: 1; }
.product-grid .product-like-icon{
    color: #999;
    font-size: 16px;
    position: absolute;
    right: 13px;
    top: 10px;
    transition: all 0.3s ease 0s;
}
.product-grid .product-like-icon:hover{ text-shadow: 2px 2px 0 rgba(0,0,0,0.5); }
.product-grid .product-links{
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    transform: translateX(-50%) scale(0);
    position: absolute;
    top: calc(100% + 10px);
    left: 50%;
    z-index: 1;
    transition: all 0.3s ease;
}
.product-grid:hover .product-links{
    opacity: 1;
    transform: translateX(-50%) scale(1);
}
.product-grid .product-links li{ display: inline-block; }
.product-grid .product-links li a{
    color: #fff;
    background: #333;
    font-size: 16px;
    line-height: 38px;
    width: 40px;
    height: 40px;
    display: block;
    transition: all 0.3s ease 0s;
}
.product-grid .product-links li a:hover{
    color: #fff;
    background: #dd0059;
}
.product-grid .product-content{
    background-color: #fff;
    padding: 10px 10px 10px;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.product-grid:hover .product-content{ transform: translateY(47px); }
.product-grid .title{
    font-size: 16px;
    font-weight: 700;
    text-transform: capitalize;
    margin: 0 0 7px;
}
.product-grid .title a{
    color: #222;
    transition: all 0.3s ease 0s;
}
.product-grid .title a:hover{ color: #dd0059; }
.product-grid .price{
    color: #333;
    font-size: 16px;
    font-weight: 600;
}
@media screen and (max-width:990px){
    .product-grid{ margin: 0 0 30px; }
}

</style>




<?php

$select="SELECT * FROM `mens`";
$query = mysqli_query($conn,$select);
?>
<div class="container-fluid mt-5">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="row">
    <?php while($row = mysqli_fetch_assoc($query)){
        ?>
    <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="https://cdn.shopify.com/s/files/1/0577/8296/0304/products/3_f8392d7c-4e67-4480-8e50-dbd128beaa57_1024x1024@2x.jpg?v=1624102124">
                    <img class="pic-2" src="https://cdn.shopify.com/s/files/1/0577/8296/0304/products/2_f0e2fdae-1b30-4db2-b9a3-a901286ee8b9_1024x1024@2x.jpg?v=1624102125">
                </a>
                <a href="" class="product-like-icon"><i class="far fa-heart"></i></a>
                <ul class="product-links">
                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                    <li><a href="productdetails.php?<?php echo $row['id']?>"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#"><?php echo $row['name']; ?></a></h3>
                <div class="price">$<?php echo $row['price']; ?></div>
            </div>
        </div>
    </div>


<?php } ?>

</div>


</div>

<?php include('include/footer.inc.php'); ?>