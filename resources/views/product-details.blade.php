@extends("master._master")


<!-- @section("css")
    <link rel="stylesheet" href="{{asset("assets/css/fontawesome.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/templatemo-lugx-gaming.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
    <link rel="stylesheet" href='{{asset("assets/css/fonts.css")}}'>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/_custom.css') }}">
@endsection -->

@section("main-banner")
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>{{$product->title}}</h3>
                    <span class="breadcrumb"><a href={{route("home")}}>خانه</a>  >  <a href="#">فروشگاه</a>  > بازی</span>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("features")
    <div class="single-product section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src={{asset("assets/images/$product->src.jpg")}} alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <h4>{{$product->title}}</h4>
                    <span class="price"><em>{{$product->price}}</em> {{$product->price * 25/100}}</span>
                  <p>{{$product->descrioption}}</p>
                    <form id="qty" action="#">
                        <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
                        <button type="submit"><i class="fa fa-shopping-bag"></i> افزودن به سبد</button>
                    </form>
                    <ul>
                        <li><span>شناسه بازی:</span> {{$product->title}}</li>
                        <li><span>ژانر:</span> <a href="#">اکشن</a>, <a href="#">{{$product->category->categort}}</a></li>
                        <li><span>تگ ها:</span> <a href="#">جنگ</a>, <a href="#">{{$product->category->categort}}</a>, <a href="#"> {{$product->title}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="sep"></div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("trending")
    <div class="more-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper ">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">توضیحات</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">نظرات (3)</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                 <p>
                                    <p>{{$product->descrioption}}</p>

                                 </p>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
<p>
    درد، ذاتاً درد است و آدمی آن را دنبال می‌کند؛ و همین ماهیتِ دردناک است که باعث می‌شود درد، درد تلقی شود. آیا کسی که از آن درد رهایی یافته، به جای آنکه در بندِ آن بماند، خواهان لذت نیست؟ با انتخابِ رنجی شدیدتر، وضعیتی پدید می‌آید که باید آن را رد کرد؛ و از همین رو، انتخابِ کارهای دشوار اغلب با درد همراه است. انسان از آنچه باید پس زده شود، می‌گریزد.
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("most-played")
    <div class="section categories related-games">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>{{$product->category->category}}</h6>
                        <h2>بازی های مرتبط</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="{{route("shop")}}">مشاهده همه</a>
                    </div>
                </div>

                @foreach($similars as $similar)
                    <div class="col-lg col-sm-6 col-xs-12">
                        <div class="item singel-similar-item">
                            <h4>{{$similar->category->category}}</h4>
                            <div class="thumb singel-similar">
                                <a href='{{route("productDetails",["slug"=>$similar->slug])}}'><img src={{asset("assets/images/$similar->src.jpg")}} alt=""></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection








@section("script")
    <script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("assets/js/isotope.min.js")}}"></script>
    <script src="{{asset("assets/js/owl-carousel.js")}}"></script>
    <script src="{{asset("assets/js/counter.js")}}"></script>
    <script src="{{asset("assets/js/custom.js")}}"></script>
@endsection


