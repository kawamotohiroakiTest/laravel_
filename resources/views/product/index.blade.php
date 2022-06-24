@extends('layouts.app')
@section('content')
<body>
  <div id="wrapper">
    <section>
        <ul class="slick01">
            <li class="slick-slide"><a href=""><img alt="画像1" src="{{ asset('storage/testimage.jpeg') }}" style="width: 600px;" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像2" src="{{ asset('storage/testimage.jpeg') }}" style="width: 600px;" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="width: 600px;" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="width: 600px;" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="width: 600px;" /></a></li>
            <li class="slick-slide"><a href=""><img alt="画像3" src="{{ asset('storage/testimage.jpeg') }}" style="width: 600px;" /></a></li>
        </ul>
    </section>
    <section id="top_category">
          <h1>カテゴリから探す</h1>
          <ul class="top_category flex">
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href="/category"><h2>ベッド</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href="/product"><h2>Tシャツ</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href="/category"><h2>Tシャツ</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
            <li>
              <div>
                <div class="top_category_title flex">
                  <div>
                    <img src="{{ asset('storage/testimage.jpeg') }}">
                  </div>
                  <a class="top_category_link" href=""><h2>Tシャツ</h2></a>
                </div>
                <ul class="top_category_detail">
                  <a class="top_category_link" href=""><li>半袖Tシャツ</li></a>
                  <a class="top_category_link" href=""><li>長袖Tシャツ</li></a>
                </ul>
                <div class="top_category_more">
                  <a href=""><p>もっと見る</p></a>
                </div>
              </div>
            </li>
          </ul>
    </section>
  </div>
</body>
@endsection
<style>
  ul {
    list-style: none;
    padding: 0;
  }
  h1 {
    font-size: 2.0em;
  }
  h2 {
    font-size: 1.0em;
  }
  #wrapper {
    max-width: 1200px;
    padding: 0 20px;
    margin: 0 auto;
    border: 1px solid #000000;
  }
  #top_category {
    width: 100%;
    margin: 20px 0 0;
    padding: 0;
  }
  .top_category {
    padding: 0;
  }
  .top_category_link {
    text-decoration: none;
    color: #000000;
  }  
  .top_category_link:active {
    color: #000000; 
    opacity: 0.5;
  }
  .flex {
    display: flex;
    flex-wrap: wrap;
  }
  .top_category > li {
    width: 33.3%;
    padding: 20px;
    background-clip: padding-box;
    border: 1px solid gray;
  }
  .top_category_more > a  {
    color: green;
    text-decoration: none;
  }
  .top_category_more > a > p {
    text-align: right;
  }
  .top_category_title {
    gap: 20px;
    position: relative;
    align-items: center;
  }
  .top_category_title > div > img {
    width: 100px;
  }
  .top_category_detail {
    position: relative;
    padding: 30px 0 0;
  }
  .top_category_title::before{
    content: "";
    position: absolute;
    top: 15px;
    right: 3px;
    width: 28px;
    height: 24px;
    border-top: 7px solid #7a0;
    border-right: 7px solid #7a0;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  .top_category_detail > li::before {
    content: "＞";
  }
  @media screen and (max-width: 760px) {
    .top_category > li {
      width: 100%;
    }
  }
  .slick-dotted.slick-slider {
    height: 360px;
  }
  .slick-list.draggable {
    padding: 0;
  }
  .slick01.slick-initialized.slick-slider.slick-dotted {
    padding: 0;
  }
  .slick-prev:before, .slick-next:before {
    color: #1214bf !important;
  }
  .slick-slide{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
  }
  .slick-initialized .slick-slide{
    display: block;
  }
</style>
<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="{{ asset('/js/slick-1.8.1/slick/slick.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/slick-1.8.1/slick/slick.css') }}"/>
<script>  
$(document).ready(function() {
  $('.slick01').slick({
    autoplay: true,
    dots: true,
    slidesToShow: 2,
    centerPadding: "50px",
    arrows: true,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        centerPadding: "0",
      }
    },
  ]
  });
});
</script>
