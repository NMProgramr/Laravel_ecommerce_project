@extends("master._master")


@section("main-banner")
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h6>به LUGX خوش آمدید</h6>
                        <h2>بهترین سایت بازی تا کنون</h2>
                        <p>
                            LUGX یک قالب وب سایت بوت استرپ 5 HTML CSS رایگان برای وب سایت های بازی شما است. شما می توانید این طرح را برای مقاصد تجاری دانلود و استفاده کنید. لطفا به دوستان خود در مورد پرشین اطلاع دهید.
                        </p>
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="چیزی تایپ کنید..." id='searchText' name="searchKeyword" onkeypress="handle" />
                                <button role="button">جستجو</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="right-image">
                        <img src="assets/images/banner-image.jpg" alt="">
                        <span class="price">30,000</span>
                        <span class="offer">-40%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("features")
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image image-in">
                                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>ذخیره سازی رایگان</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image image-in">
                                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>کاربر بیشتر</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image image-in">
                                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>پاسخ آماده</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image image-in">
                                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
                            </div>
                            <h4>طرح بندی آسان</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("trending")
    <div class="section trending">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>پرطرفدار</h6>
                        <h2>بازی های پرطرفدار</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href={{route("shop")}}>مشاهده همه</a>
                    </div>
                </div>


                @foreach($trends as $trend)
                    <div class="col-lg-3 col-md-6">
                        <div class="item item-custom-thumb-trend ">
                            <div class="thumb custom-thumb-trend">
                                <a href="{{route("productDetails",["slug"=>$trend["slug"]])}}"><img src="{{ asset("assets/images/{$trend['src']}.jpg") }}" alt=""></a>
                                <span class="price"><em>{{$trend["price"]  * 10000 }} </em>{{($trend["price"]  * 10000) * 25/100}}</span>
                            </div>
                            <div class="down-content">
                                <span class="category">{{$trend->category->category}}</span>
                                <h4>{{$trend["title"]}}</h4>
                                <a href="{{route("productDetails",["slug"=>$trend["slug"]])}}"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section("most-played")
    <div class="section most-played">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>بازی های برتر</h6>
                        <h2>بیشترین بازی شده</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href={{route("shop")}}>مشاهده همه</a>
                    </div>
                </div>


                @foreach($mostplayed as $mostPlay)

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="item">
                            <div class="thumb custom-thumb-mostplay">
                                <a href="{{route("productDetails",["slug"=>$mostPlay->slug])}}"><img src="{{ asset("assets/images/{$mostPlay['src']}.jpg") }}" alt=""></a>
                            </div>
                            <div class="down-content">
                                <span class="category">{{$mostPlay->category->category}}</span>
                                <h4>{{$mostPlay['title']}}</h4>
                                <a href="{{route("productDetails",["slug"=>$mostPlay->slug])}}">کاوش کنید</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section("cta")
    <div class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="shop">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>فروشگاه</h6>
                                    <h2>پیش خرید کنید و بهترین <em>قیمت‌ها</em> را برای خود دریافت کنید!</h2>
                                </div>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                                <div class="main-button">
                                    <a href={{route("shop")}}>خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 align-self-end">
                    <div class="subscribe">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <h6>خبرنامه</h6>
                                    <h2>تا 100 دلار تخفیف بگیرید فقط خبرنامه <em>اشتراک</em> بخرید!</h2>
                                </div>
                                <div class="search-input">
                                    <form id="subscribe" action="#">
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                                        <button type="submit">عضویت</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section("categories")

    <div class="section categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>دسته بندی ها</h6>
                        <h2>برترین دسته بندی ها</h2>
                    </div>
                </div>
                @foreach($categorys as $category)
                    <div class="col-lg col-sm-6 col-xs-12">
                        <div class="item">
                            <h4>{{$category["category"]}}</h4>
                            <div class="thumb">
                                <a href="#"><img src='{{asset("assets/images/categories-0$loop->iteration.jpg")}}' alt=""></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src= '{{asset("vendor/jquery/jquery.min.js")}}'></script>
    <script src= '{{asset("vendor/bootstrap/js/bootstrap.min.js")}}'></script>
    <script src= '{{asset("assets/js/isotope.min.js")}}'></script>
    <script src= '{{asset("assets/js/owl-carousel.js")}}'></script>
    <script src= '{{asset("assets/js/counter.js")}}'></script>
    <script src= '{{asset("assets/js/custom.js")}}'></script>
@endsection
