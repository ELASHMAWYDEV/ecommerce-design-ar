<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <?php 
    $title = "الأقسام والبحث";
    include('../src/functions.php'); 
    ?>
    
</head>
<body>
    <?php include('../src/header.php'); ?>
    <div class="filter-icon">
        <h4>فلترة</h4><i class="fas fa-filter"></i>
    </div>
    <div class="banners-con">
        <h3>اخترنا هذه التشكيلة لك</h3>
        <div class="banners">
            <div class="banner">
                <div class="banner-img"><img src="/src/img/banner1.jpg" alt=""></div>
            </div>
            <div class="banner">
                <div class="banner-img"><img src="/src/img/banner2.jpg" alt=""></div>
            </div>
            <div class="banner">
                <div class="banner-img"><img src="/src/img/banner3.jpg" alt=""></div>
            </div>
            <div class="banner">
                <div class="banner-img"><img src="/src/img/banner4.jpg" alt=""></div>
            </div>
        </div>
    </div>
    <div class="sub-title"><?php echo $title; ?></div>

    <?php include('../src/sub.php'); ?>

    <?php include('../src/footer.php'); ?>

</body>
</html>