<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <?php 
        $title = "Kids";
        include('../src/functions.php'); 
    ?>
</head>
<body>
    <!--Header-->
    <?php include('../src/header.php'); ?>

    
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

    <!--Category Shopping-->
    
    <div class="category-shopping">
        <h3>تسوقوا حسب الفئة</h3>
        <div class="right-angle"><i class="fas fa-angle-right"></i></div>
        <div class="left-angle"><i class="fas fa-angle-left"></i></div>

        <div class="category-slider">
            <?php for($i=1;$i<=10;$i++){ ?>
            <a href="#">
                <div class="category-item">
                    <img src="/src/img/cat_img.jpg" alt="category">
                    <div></div>
                    <p>اكسسوارات</p>
                </div>
            </a>
            <?php }; ?>
        </div>
    </div>


    <!--Age Shopping-->

    <div class="age-shopping">

        <h3>تسوقوا حسب العمر</h3>
        <div class="age-links">
            <a href="#" class="age-link">0-6 أشهر</a>
            <a href="#" class="age-link">6-12 شهر</a>
            <a href="#" class="age-link">1-2 سنة</a>
            <a href="#" class="age-link">2-3 سنة</a>
            <a href="#" class="age-link">3-5 سنة</a>
            <a href="#" class="age-link">5-7 سنة</a>
            <a href="#" class="age-link">7-10 سنة</a>
            <a href="#" class="age-link">+10 سنة</a>
        </div>
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

    <!--products grid--->

    <div class="products-grid">
        <?php for($i=1;$i<=3;$i++){ ?>
        <div class="product">
            <p style="color: #2ecc71">- ماركة تحت الصوء -</p>
            <h4>العودة الي المدارس</h4>
            <div><img src="/src/img/sub-img1.webp" alt="product"></div>
            <h5>كل احتياجاتهم المدرسية هنا</h5>
            <a href="/subcategory">تسوق من هنا</a>
        </div>
        <div class="product">
            <p style="color: #9b59b6">- أساسيات -</p>
            <h4>اديداس</h4>
            <div><div class="discount">خصم 30%</div><img src="/src/img/sub-img2.webp" alt="product"></div>
            <h5>الماركة التي تتغني بخطوطها</h5>
            <a href="/subcategory">تسوق من هنا</a>
        </div>
        <div class="product">
            <p style="color: #e74c3c">- من اتجاهات الموسم -</p>
            <h4>ستايل الشتاء</h4>
            <div><img src="/src/img/sub-img3.webp" alt="product"></div>
            <h5>استقبل الموسم الجديد بكل أناقا</h5>
            <a href="/subcategory">تسوق من هنا</a>
        </div>
        <div class="product">
            <p style="color: #f1c40f">- جديدنا -</p>
            <h4>تصاميم رياضية</h4>
            <div><img src="/src/img/product4.gif" alt="product"></div>
            <h5>لتلك الأوقات الحماسية</h5>
            <a href="/subcategory">تسوق من هنا</a>
        </div>
        <?php } ?>
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

    <!--brand shopping-->

    <div class="category-shopping brand-shopping">
        <h3>تسوقوا حسب الماركة</h3>
        <div class="right-angle"><i class="fas fa-angle-right"></i></div>
        <div class="left-angle"><i class="fas fa-angle-left"></i></div>
            <div class="category-slider">
                <?php for($i=1;$i<=10;$i++){ ?>
                <a href="#">                                
                    <div class="category-item">
                        <img class="brand-img" src="/src/img/brand1.jpg" alt="category">
                        <!-- <div></div> -->
                    </div>
                </a>                            
            <?php }; ?>
        </div>
    </div>



    <?php include('../src/footer.php'); ?>
</body>
</html>