@extends('Line.master')
@section('content')
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($loai as $ls)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="source/img/IMG/{{$ls->image}}">
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                </div>
                                <div class="product__item__text">
                                    <h5><a href="{{$ls->ID}}">{{$ls->TenPhim}}</a></h5>
                                    <a href="/film_type/{{$ls->ID}}"><button type="button" class="btn btn-outline-warning">ĐặtVé</button></a>
                                    <a href="/film_type/{{$ls->ID}}"><button type="button" class="btn btn-outline-warning">Xem Chi Tiết</button></a>                                    
                                </div>
                            </div>
                           
                        </div>
                        @endforeach 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top Views</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="active" data-filter="*">Day</li>
                            <li data-filter=".week">Week</li>
                            <li data-filter=".month">Month</li>
                            <li data-filter=".years">Years</li>
                        </ul>
                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day years"
                            data-setbg="source/img/sidebar/tv-1.jpg">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Boruto: Naruto next generations</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix month week"
                        data-setbg="source/img/sidebar/tv-2.jpg">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix week years"
                    data-setbg="source/img/sidebar/tv-3.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix years month"
                data-setbg="source/img/sidebar/tv-4.jpg">
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
            </div>
            <div class="product__sidebar__view__item set-bg mix day"
            data-setbg="source/img/sidebar/tv-5.jpg">
            <div class="ep">18 / ?</div>
            <div class="view"><i class="fa fa-eye"></i> 9141</div>
            <h5><a href="#">Fate stay night unlimited blade works</a></h5>
        </div>
    </div>
</div>
<div class="product__sidebar__comment">
    <div class="section-title">
        <h5>New Comment</h5>
    </div>
    <div class="product__sidebar__comment__item">
        <div class="product__sidebar__comment__item__pic">
            <img src="source/img/sidebar/comment-1.jpg" alt="">
        </div>
        <div class="product__sidebar__comment__item__text">
            <ul>
                <li>Active</li>
                <li>Movie</li>
            </ul>
            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
            <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
        </div>
    </div>
    <div class="product__sidebar__comment__item">
        <div class="product__sidebar__comment__item__pic">
            <img src="source/img/sidebar/comment-2.jpg" alt="">
        </div>
        <div class="product__sidebar__comment__item__text">
            <ul>
                <li>Active</li>
                <li>Movie</li>
            </ul>
            <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
            <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
        </div>
    </div>
    <div class="product__sidebar__comment__item">
        <div class="product__sidebar__comment__item__pic">
            <img src="source/img/sidebar/comment-3.jpg" alt="">
        </div>
        <div class="product__sidebar__comment__item__text">
            <ul>
                <li>Active</li>
                <li>Movie</li>
            </ul>
            <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
            <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
        </div>
    </div>
    <div class="product__sidebar__comment__item">
        <div class="product__sidebar__comment__item__pic">
            <img src="source/img/sidebar/comment-4.jpg" alt="">
        </div>
        <div class="product__sidebar__comment__item__text">
            <ul>
                <li>Active</li>
                <li>Movie</li>
            </ul>
            <h5><a href="#">Monogatari Series: Second Season</a></h5>
            <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->
@endsection