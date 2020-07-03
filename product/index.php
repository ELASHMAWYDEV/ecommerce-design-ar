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

    <div class="contianer">
        <div class="product-container">

            <div class="small-images">
                <img src="/websites/store/src/img/small1.webp" alt="">
                <img src="/websites/store/src/img/small1.webp" alt="">
                <img src="/websites/store/src/img/small1.webp" alt="">
                <img src="/websites/store/src/img/small1.webp" alt="">
            </div>
            <div class="big-prod-img">
                <div class="discount">خصم 30%</div>
                <div class="heart-prod-img"><i class="far fa-heart"></i></div>
                <img src="/websites/store/src/img/big1.webp" alt="">
            </div>
            <div class="product-text">
                <div class="prod-name">
                    <h3>ثردز</h3>
                </div>
                <div class="product-desc">
                    <h5>فستان بتداخلات شفافة وأزرار</h5>
                </div>
                <div class="prod-desc-price">
                    <h1>$140</h1>
                </div>
                <p>توصيل سريع</p>
                <div class="product-size">
                    <h4>القياس</h4>
                    <div>
                        <span>S</span>
                        <span>M</span>
                        <span>L</span>
                        <span>XL</span>
                    </div>
                </div>
                <div class="prod-btn">
                    <p>اضف الي حقيبة التسوق</p>
                </div>
                <div class="more-choices">
                    <h4>المزيد من الخيارات</h4>
                    <img src="/websites/store/src/img/small1.webp" alt="">
                    <img src="/websites/store/src/img/small1.webp" alt="">
                </div>
                <div class="addons">
                    <div><i class="fas fa-bahai"></i> <p>ماركات أصلية 100%</p></div>
                    <div><i class="fas fa-money-bill-wave"></i> <p>الدفع نقدا عند الاستلام</p></div>
                    <div><i class="fas fa-truck"></i> <p>التوصيل السريع</p></div>
                </div>
                <div class="prod-full-desc">
                    <div class="full-desc-title">
                        وصف المنتج
                    </div>
                    <p>التفاصيل</p>
                    <ul>
                        <li>نسيج قطن بوردريه بفتحات مع بطانة </li>
                        <li>ياقة مرتفعة مع ازرار في الامام للاغلاق </li>
                    </ul>
                    <div class="full-desc-more">
                        <h5>تفاصيل ومعلومات العناية بالمنتج</h5>
                    </div>
                    <div class="desc-table">
                        <div class="right-items-table">
                            <ul>
                                <li>SKU</li>
                                <li>اللون</li>
                                <li> نوع الياقة</li>
                                <li> نوع الملابس</li>
                                <li> طول العارض/العارضة</li>
                                <li> المواد المستخدمة</li>
                                <li> المقاس المعروض في الصورة</li>
                                <li> رقم الموديل من المورد</li>
                                <li> قياسات العارض/العارضة</li>
                                <li> ارشادات الغسيل</li>
                            </ul>
                        </div>
                        <div class="left-items-table">
                            <ul>
                                <li>14448AT87VKP</li>
                                <li>ابيض</li>
                                <li>عالية الرقبة</li>
                                <li>فستان</li>
                                <li>171 cm</li>
                                <li>Cotton</li>
                                <li>S</li>
                                <li>8268</li>
                                <li>Bust: 80 cm - Waist: 61 cm - Hips: 90 cm</li>
                                <li>Wash instructions according to care label</li>
                            </ul>
                        </div>
                    </div>
                 
                        
                </div>
            </div>

            
        
        </div>
        <div class="container">
            <h2 class="simi-h">منتجات مشابهة</h2>
            <div class="simi-slider">
                <div class="right-angle"><i class="fas fa-angle-right"></i></div>
                <div class="left-angle"><i class="fas fa-angle-left"></i></div>
                <div class="slides">
                    <?php for($i = 1;$i <= 10;$i++){ ?>
                    <div>

                        <img src="/websites/store/src/img/big1.webp" alt="">

                        <div>
                            <h4>ثردز</h4>
                            <p>فستان مزين بفتحات صغيرة</p>
                            <div class="prod-price"><a href="#">$140</a></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>











    
    <?php include('../src/footer.php'); ?>
</body>
</html>