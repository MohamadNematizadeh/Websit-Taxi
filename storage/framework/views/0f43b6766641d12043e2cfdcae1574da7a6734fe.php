<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>mashad TAXI</title>
    <meta name="description" content="HTML framework description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/images/logo.png" rel="icon">

    <!-- Styles -->
    <link rel="stylesheet" href="css/general.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rufina' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

    <!-- Modernizr -->
    <script type='text/javascript' src='js/libs/modernizr-2.8.3.min.js'></script>

    <!-- Semantic HTML5 Support on old IE -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body class="home">

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Libs -->
<script src="js/libs/jquery-1.11.3.min.js"></script>
<script src="js/libs/jquery.flexslider-min.js"></script>

<!-- Custom -->
<script src="js/scripts.js"></script>
<script src="js/all.js"></script>
<script src="js/bootstrap.js"></script>



<script>
    initHome();
</script>

</body>
</html>
<?php /**PATH E:\آموزش های استاد سجاد اعمی\طراحی وبسایت\php\text\resources\views/templade.blade.php ENDPATH**/ ?>