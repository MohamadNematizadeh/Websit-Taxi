
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Taxi Press</title>
    <meta name="description" content="HTML framework description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="css/general.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rufina' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

    <!-- Modernizr -->
    <script type='text/javascript' src='../../js/libs/modernizr-2.8.3.min.js'></script>

    <!-- Semantic HTML5 Support on old IE -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="contact all">


<!-- Orange & Black -->
<div class="background">
    <div class="col-6"></div>
    <div class="col-6"></div>
</div>

<div id="call-us" class="call-us">
    <div class="selected">
        <span>Berlin</span>

        <ul>
            <li data-num="#790">Berlin</li>
            <li data-num="#780">London</li>
            <li data-num="#740">Chisinau</li>
        </ul>
    </div>
    <div class="number">#790</div>
    <p>Call us any time</p>
</div>

<!-- Nav -->
<nav class="main">
    <a class="logo" href="index.html"></a>

    <div class="col-6 left">
        <ul class="first cf">

            <li><a href="/taxi">رزرو تاکسی</a></li>
            <li class="dot">•</li>
            <li class="active"><a href="/">خانه</a></li>
        </ul>
    </div>
    <div class="col-6 right">
        <ul class="first cf">
            <li class="dot show-tablet">•</li>
            <li>
                <a href="/login">ورد به حساب کاربری</a>
            </li>
            <li class="dot">•</li>
            <li><a href="/logout">خروج از حساب کاربری</a></li>
        </ul>
    </div>

    <!-- -->
    <a href="#" class="mobile-button">Menu</a>
    <ul class="mobile-menu">
        <li><a href="index.html">Home</a></li>
        <li>
            <a>Services</a>
            <ul class="second">
                <li><a href="services.html">Services</a></li>
                <li><a href="services.html">VIP taxi</a></li>
                <li>
                    <a href="services.html">Regular</a>
                    <ul class="third">
                        <li><a href="services.html">Reto Cab</a></li>
                        <li><a href="services.html">VIP axi</a></li>
                        <li><a href="services.html">Regular</a></li>
                        <li><a href="services.html">Airport meeting</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="booking.html">Booking</a></li>
        <li>
            <a>Blog</a>
            <ul class="second">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog.html">News</a></li>
                <li><a href="blog.html">Sport</a></li>
                <li><a href="blog-inside.html">Single</a></li>
            </ul>
        </li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>

    <!-- Search -->
    <div class="search-button"></div>
    <form class="search" action="#">
        <input type="text" placeholder="Search"/>
        <input type="submit" value=" "/>
    </form>

</nav>


<!-- Content -->
<div class="inner">

    <!-- Back -->
    <div class="back-left"></div>
    <div class="back-right"></div>

    <!-- Content -->
    <div class="wrap cf">
        <div class="col-6 left">
            <h2>Taxi <span>Mashhad</span></h2>
            <p> با خیال راحت در وبسابت ما عضو شوید</p>

            <div class="line"></div>

            <span>ادرس:</span>
            <p>جاده 20 کیلومتر مشهد فریمان تاکسی مشهد</p>
            <br/>
            <span>تلفن :</span>
            <p class="phone">0912212233</p>
            <br/>
        </div>
        <div class="col-6 right">
            <h3>ورود به حساب کاربری</h3>

            <div class="form">
                <form method="post" action="<?php echo e(url("/login")); ?>">
                    <label >ایمیل</label>
                    <input type="email"  name="email">
                    <label > گزرواژه</label>
                    <input  type="password" name="password">
                    <?php echo csrf_field(); ?>
                    <input type="submit" value="ثبت"/>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH E:\آموزش های استاد سجاد اعمی\طراحی وبسایت\php\text\resources\views/client/login.blade.php ENDPATH**/ ?>