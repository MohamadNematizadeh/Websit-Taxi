@extends('templade')
@section('title')
    مشهد تاکسی/ ورود
@endsection
@section('content')

<!-- Orange & Black -->
<div class="background">
    <div class="col-6"></div>
    <div class="col-6"></div>
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

    <!-- Search -->
    <div class="search-button"></div>
    <form class="search" action="#">
        <input type="text" placeholder="Search"/>
        <input type="submit" value=" "/>
    </form>

</nav>



<!-- Header only for HomePage -->
<header class="wrap cf">
    <div class="col-6 left">
        <div class="text">
            <h2>
               تاکسی شخصی تون رزرو کنید
            </h2>
            <p>

            </p>

            <img class="car" src="css/images/car.png" alt=""/>
        </div>

    </div>
    <div class="col-6 right">

        <div class="text">



            <!-- Form -->
            <form action="#" class="book-a-cab">

                <!-- -->
                <div class="cf">
                    <div class="col-2">
                        <label for="name"> نام:</label>
                        <label for="phone">تلفن همراه:</label>
                    </div>
                    <div class="col-10">
                        <input id="name" type="text"/>
                        <input id="phone" type="text"/>
                    </div>
                </div>

                <div class="cf adress">
                    <div class="col-2">
                        <p>ادرس:</p>
                    </div>
                    <div class="col-10">
                        <a href="#" class="map">googl map</a>
                        <p>London, 8417 Parker Rd</p>
                    </div>
                </div>

                <!-- -->
                <div class="cf type">
                    <div class="col-2">
                        <p>Type:</p>
                    </div>
                    <div class="col-10">
                        <div id="form-type">
                            <a class="personal" href="#">شخصی</a>
                            <a class="airport" href="#">فرودگاه</a>
                        </div>

                        <input type="submit" id="submit" value="ثبت"/>
                    </div>
                </div>
            </form>

        </div>

    </div>
</header>

<!-- Our Services -->
<section class="our-services">
    <div class="wrap">
        <h2>خدمات ما</h2>
    </div>

    <div class="columns cf">
        <div class="col-5">
            <div class="item">

                    <div class="d-flex justify-content-center">
                </a>
                </div>
                <a href="/taxi">
                <div class="title">
                    <h3>رزور تاکسی</h3>
                    <p>بهترین تاکسی ما داریم</p>
                </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile -->
    <div class="mobile">
        <div class="wrap cf">
            <div class="col-6">
                <h3>مشهد<span>تاکسی</span> برنامه</h3>

                <p>
                  بهترین برنامه برای تاکسی انلاین برنامه مشهد تاکسی برنامه
                </p>

                <div class="store">
                    <a class="google" href=""></a>
                    <a class="apple" href=""></a>
                </div>

            </div>
            <div class="col-6">
                <ul>
                    <li>
                        <h3>سریع و راحت </h3>
                        <p>با این نرمفزار سریع راحت تاکسی بکیر</p>
                    </li>

    </div>

</section>


<!-- Suggestions-->
<section class="suggestions">
    <div class="wrap cf">
        <div class="col-6 left">
            <form method="post" action="{{url("/login")}}">
                <label >ایمیل</label>
                <input type="email"  name="email">
                <label > گزرواژه</label>
                <input  type="password" name="password">
                @csrf
                <input type="submit" value="ثبت"/>
        </div>
        <div class="col-6 right">
            <h2>Taxi <span>Mashhad</span></h2>
            <p> با خیال راحت در وبسابت ما عضو شوید</p>
        </div>
    </div>

</section>


<!-- Our cars -->
<section class="our-cars">
    <div class="wrap">
        <h2>تاکسی های ما</h2>
    </div>

    <div class="wrap">
        <div class="gallery cf">
            <div class="col-3">
                <div class="slider left">
                    <div class="img">
                        <img src="img/1.jpg" alt=""/>
                    </div>
                    <div class="img">
                        <img src="img/34.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="slider" id="slider">
                    <ul class="slides">
                        <li>
                            <img src="" alt=""/>
                            <h4>Wolksvagen <br/>
                                Jumpy Multispace
                            </h4>
                            <p>2015, $15 / km</p>
                        </li>
                        <li>
                            <img src="http://placehold.it/370x176/fcf8eb/" alt=""/>
                            <h4>Wolksvagen <br/>
                                Jumpy Multispace
                            </h4>
                            <p>2015, $15 / km</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="slider right">
                    <div class="img">
                        <img src="img/35.jpeg" alt=""/>
                    </div>
                    <div class="img">
                        <img src="img/transport.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

