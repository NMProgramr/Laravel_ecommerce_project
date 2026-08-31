@extends("master._master")


@section("css")
    <link rel="stylesheet" href="{{asset("assets/css/fontawesome.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/templatemo-lugx-gaming.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
    <link rel="stylesheet" href='{{asset("assets/css/fonts.css")}}'>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/_custom.css') }}">
@endsection



@section("main-banner")
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>فروشگاه</h3>
                    <span class="breadcrumb"><a href="#">خانه</a> > فروشگاه</span>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("trending")
    <div class="section trending">
        <div class="container">
            <ul class="trending-filter">
                <li>
                    <a class="is_active" href='{{route("shop")}}' data-filter="*">مشاهده همه</a>
                </li>

              @foreach($categorys as $category)

                    <li>
                        <a  href="{{route("category",["slug"=>$category->slug])}}">{{$category->category}}</a>
                    </li>
              @endforeach

            </ul>
            <div class="row trending-box">
              @foreach($products as $product)
                    <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 ">
                        <div class="item item-custom-thumb-shop">
                            <div class="thumb custom-thumb-shop">
                                <a href="{{route("productDetails",["slug"=>$product->slug])}}"><img src={{asset("assets/images/$product->src.jpg")}} alt=""></a>
                                <span class="price"><em>{{$product->price}}</em>{{$product->price * 25/100}}</span>
                            </div>
                            <div class="down-content">
                                <span class="category"> {{$product->category->category}} </span>
                                <h4> {{$product->title}}</h4>
                                <a href="{{route("productDetails",["slug"=>$product->slug])}}"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li><a href="#"> &lt; </a></li>
                        <li><a href="#">1</a></li>
                        <li><a class="is_active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"> &gt; </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection



<!-- 
@section("script")
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
{{--    <script src="assets/js/custom.js"></script>--}}
@endsection

 -->


@section("script")
    @vite(['resources/js/app.js'])
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
{{--    <script src="assets/js/custom.js"></script>--}}
@endsection
