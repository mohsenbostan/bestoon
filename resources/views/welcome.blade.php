<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>بستون</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /*
Inspired by the dribble shot http://dribbble.com/shots/1285240-Freebie-Flat-Pricing-Table?list=tags&tag=pricing_table
*/
        /*--------- Font ------------*/
        @import url(http://weloveiconfonts.com/api/?family=fontawesome);
        /* fontawesome */
        [class*="fontawesome-"]:before {
            font-family: 'FontAwesome', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            direction: rtl;
        }

        /*------ utiltity classes -----*/
        .fl {
            float: left;
        }

        .fr {
            float: right;
        }

        /*its also known as clearfix*/
        .group:before,
        .group:after {
            content: "";
            display: table;
        }

        .group:after {
            clear: both;
        }

        .group {
            zoom: 1; /*For IE 6/7 (trigger hasLayout) */
        }

        body {
            background: #F2F2F2 !important;
            font-family: 'Shabnam', 'Droid Sans', sans-serif;
            line-height: 1;
            font-size: 16px;
        }

        .wrapper {

        }

        .pricing-table {
            width: 80%;
            margin: 50px auto;
            text-align: center;
            padding: 10px;
            padding-right: 0;
        }

        .pricing-table .heading {
            color: #9C9E9F;
            text-transform: uppercase;
            font-size: 1.3rem;
            margin-bottom: 4rem;
        }

        .block {
            background-color: white;
            width: 30%;
            margin: 0 15px;
            overflow: hidden;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            /*    border: 1px solid red;*/
        }

        /*Shared properties*/
        .title, .pt-footer {
            color: #FEFEFE;
            text-transform: capitalize;
            line-height: 2.5;
            position: relative;
        }

        .content {
            position: relative;
            color: #FEFEFE;
            padding: 20px 0 10px 0;
            margin-top: -1rem;
        }

        /*arrow creation*/
        .content:after, .content:before, .pt-footer:before, .pt-footer:after {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .pt-footer:after, .pt-footer:before {
            top: 0;
        }

        .content:after, .pt-footer:after {
            border-color: rgba(136, 183, 213, 0);
            border-width: 5px;
            margin-left: -5px;
        }

        /*/arrow creation*/
        .price {
            position: relative;
            display: inline-block;
            margin-bottom: 0.625rem;
        }

        .price span {
            font-size: 6rem;
            letter-spacing: 8px;
            font-weight: bold;
        }

        .price sup {
            font-size: 1.5rem;
            position: absolute;
            top: 12px;
            left: -12px;
        }

        .hint {
            font-style: italic;
            font-size: 0.9rem;
        }

        .features {
            list-style-type: none;
            background: #FFFFFF;
            text-align: right;
            color: #9C9C9C;
            padding: 30px 22%;
            font-size: 0.9rem;
        }

        .features li {
            padding: 15px 0;
            width: 100%;
        }

        .features li span {
            padding-right: 0.4rem;
        }

        .pt-footer {
            font-size: 0.95rem;
            text-transform: capitalize;
            height: 0%;
        }

        /*PERSONAL*/
        .personal .title {
            background: #78CFBF;
        }

        .personal .content, .personal .pt-footer {
            background: #82DACA;
        }

        .personal .content:after {
            border-top-color: #82DACA;
        }

        .personal .pt-footer:after {
            border-top-color: #FFFFFF;
        }

        /*PROFESSIONAL*/
        .professional .title {
            background: #3EC6E0;
        }

        .professional .content, .professional .pt-footer {
            background: #53CFE9;
        }

        .professional .content:after {
            border-top-color: #53CFE9;
        }

        .professional .pt-footer:after {
            border-top-color: #FFFFFF;
        }

        /*BUSINESS*/
        .business .title {
            background: #E3536C;
        }

        .business .content, .business .pt-footer {
            background: #EB6379;
        }

        .business .content:after {
            border-top-color: #EB6379;
        }

        .business .pt-footer:after {
            border-top-color: #FFFFFF;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="container">
        <header class="header p-3 m-4 row">
            <div class="top-side col-md-12">
                <h1 class="text-center header-title">به بستون خوش آمدید!</h1>
                <p class="text-center text-secondary sub-header">به سادگی زندگیت رو مدیریت کن :)</p>
            </div>
            <div class="bottom-right-side p-4 col-md-6">
                <p class="text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                    گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
            </div>
            <div class="bottom-left-side p-4 col-md-6">
                <div class="text-center">
                    <a href="/register" class="btn-getstarted">همین حالا ثبت نام کنید</a>
                    <a href="/login" class="btn btn-outline-primary w-75 mt-3 ml-4 rounded-pill font-weight-bolder">وارد
                        شوید</a>
                </div>
            </div>
        </header>
    </div>
    @if(auth()->check() and auth()->user()->is_activated == false)
        <div class="wrapper">
            <!-- PRICING-TABLE CONTAINER -->
            <div class="pricing-table group">
                <h1 class="heading">
                    خرید و فعالسازی حساب کاربری
                </h1>
                <center>
                    <div class="col-md-3">
                        @if (\Session::has('fail'))
                            <div class="alert alert-danger text-center">
                                <p class="text-center">{{ \Session::get('fail') }}</p>
                            </div><br/>
                        @endif
                    </div>
                </center>
                <!-- PERSONAL -->
                <div class="block personal fr">
                    <h2 class="title">1 ماه</h2>
                    <!-- CONTENT -->
                    <div class="content">
                        <p class="price">
                            <sup>ريال</sup>
                            <span>۲۰۰۰۰</span>
                            <sub>برای یک ماه</sub>
                        </p>
                        <p class="hint">خوش حال کردن توسعه دهنده</p>
                    </div>
                    <!-- /CONTENT -->
                    <!-- FEATURES -->
                    <ul class="features">
                        <li><span class="fontawesome-cog"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-star"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-dashboard"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-cloud"></span>فعالسازی همه امکانات</li>
                    </ul>
                    <!-- /FEATURES -->
                    <!-- PT-FOOTER -->
                    <div class="pt-footer">
                        <form action="{{ route('buyPlan') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="type">
                            <button name="buy" type="submit" class="btn text-light p-2">خرید و فعالسازی</button>
                        </form>
                    </div>
                    <!-- /PT-FOOTER -->
                </div>
                <!-- /PERSONAL -->
                <!-- PROFESSIONAL -->
                <div class="block professional fr">
                    <h2 class="title">1 سال</h2>
                    <!-- CONTENT -->
                    <div class="content">
                        <p class="price">
                            <sup>ریال</sup>
                            <span>۲۲۰۰۰۰</span>
                            <sub>برای یک سال</sub>
                        </p>
                        <p class="hint">دلگرم کردن توسعه دهنده</p>
                    </div>
                    <!-- /CONTENT -->
                    <!-- FEATURES -->
                    <ul class="features">
                        <li><span class="fontawesome-cog"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-star"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-dashboard"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-cloud"></span>فعالسازی همه امکانات</li>
                    </ul>
                    <!-- /FEATURES -->
                    <!-- PT-FOOTER -->
                    <div class="pt-footer">
                        <form action="{{ route('buyPlan') }}" method="post">
                            @csrf
                            <input type="hidden" value="2" name="type">
                            <button name="buy" type="submit" class="btn text-light p-2">خرید و فعالسازی</button>
                        </form>
                    </div>
                    <!-- /PT-FOOTER -->
                </div>
                <!-- /PROFESSIONAL -->
                <!-- BUSINESS -->
                <div class="block business fr">
                    <h2 class="title">همیشگی</h2>
                    <!-- CONTENT -->
                    <div class="content">
                        <p class="price">
                            <sup>ریال</sup>
                            <span>۶۰۰۰۰۰</span>
                            <sub>برای همیشه</sub>
                        </p>
                        <p class="hint">دادن انرژی هسته ای به توسعه دهنده</p>
                    </div>
                    <!-- /CONTENT -->

                    <!-- FEATURES -->
                    <ul class="features">
                        <li><span class="fontawesome-cog"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-star"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-dashboard"></span>فعالسازی همه امکانات</li>
                        <li><span class="fontawesome-cloud"></span>فعالسازی همه امکانات</li>
                    </ul>
                    <!-- /FEATURES -->

                    <!-- PT-FOOTER -->
                    <div class="pt-footer">
                        <form action="{{ route('buyPlan') }}" method="post">
                            @csrf
                            <input type="hidden" value="3" name="type">
                            <button name="buy" type="submit" class="btn text-light p-2">خرید و فعالسازی</button>
                        </form>
                    </div>
                    <!-- /PT-FOOTER -->
                </div>
                <!-- /BUSINESS -->
            </div>
            <!-- /PRICING-TABLE -->
        </div>
    @endif
</div>

<footer class="text-center">
    <small> این پروژه به صورت متن باز بوده بوده و هرگونه تغییر در آن مجاز است!</small>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
