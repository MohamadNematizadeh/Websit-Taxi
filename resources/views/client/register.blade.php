
    <div class="container ">
        <div class="row">
            <div class="col">
                <style>
                    form {
                        text-align: right;
                    }
                </style>
                <form method="post" action="{{url("/register")}}">
                    <div class="mb-3 mt-4">
                        <label class="form-label">نام </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder=" نام کاربری"  name="user_name" >
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">شماره تماس </label>
                        <input type="text" class="form-control" name="mobile_number">
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">ایمیل </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">شهر محل سکونت </label>
                    <select class="form-select" name="city">
                        @foreach($citirs as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">گذرواژه </label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">تکرار گذرواژه</label>
                        <input type="password" class="form-control" name="password2">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">آدرس محل کار</label>
                        <textarea class="form-control"  rows="3" name="address"></textarea>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Taxi Press</title>
        <meta name="description" content="HTML framework description">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="css/bootstrap.css">


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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form method="post" action="{{url("/register")}}">
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">نام </label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" class="form-control" placeholder=" نام کاربری"  name="user_name" >
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">شماره تماس </label>
                                            <input type="text" class="form-control" name="mobile_number">
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">ایمیل </label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">شهر محل سکونت </label>
                                            <select class="form-select" name="city">
                                                @foreach($citirs as $city)
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">گذرواژه </label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <label class="form-label">تکرار گذرواژه</label>
                                            <input type="password" class="form-control" name="password2">
                                        </div>
                                        <div class="mb-3">
                                            <label  class="form-label">آدرس محل کار</label>
                                            <textarea class="form-control"  rows="3" name="address"></textarea>
                                        </div>
                                        @csrf
                                        <button type="submit" class="btn btn-primary">ثبت نام</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

                </div>
            </div>
        </div>
    </div>
    @include('footer')
    <script src="js/bootstrap.js"></script>



