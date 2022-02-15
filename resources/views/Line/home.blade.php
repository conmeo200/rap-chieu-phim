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
                        @foreach ($data as $HD)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="source/img/IMG/{{$HD->image}}">
                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                </div>
                                <div class="product__item__text">
                                    <h5><a href="{{$HD->ID}}">{{$HD->TenPhim}}</a></h5>
                                    <a href="/film_type/{{$HD->ID}}"><button type="button" class="btn btn-outline-warning">ĐặtVé</button></a>
                                    <a href="/film_type/{{$HD->ID}}"><button type="button" class="btn btn-outline-warning">Xem Chi Tiết</button></a>                                    
                                </div>
                            </div>
                           
                        </div>
                        @endforeach 
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Popular Shows</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($data1 as $HH)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="source/img/IMG/{{$HH->image}}">
                                </div>
                                <div class="product__item__text">
                                    <h5><a href="{{$HH->ID}}">{{$HH->TenPhim}}</a></h5>
                                    <a href="/film_type/{{$HH->ID}}"><button type="button" class="btn btn-outline-warning">ĐặtVé</button></a>
                                    <a href="/film_type/{{$HH->ID}}"><button type="button" class="btn btn-outline-warning">Xem Chi Tiết</button></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Recently Added Shows</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($data2 as $LM)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="source/img/IMG/{{$LM->image}}">
                                </div>
                                <div class="product__item__text">
                                    <h5><a href="{{$LM->ID}}">{{$LM->TenPhim}}</a></h5>
                                    <a href="/film_type/{{$LM->ID}}"><button type="button" class="btn btn-outline-warning">ĐặtVé</button></a>
                                    <a href="/film_type/{{$LM->ID}}"><button type="button" class="btn btn-outline-warning">Xem Chi Tiết</button></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="wrap-search-dd">
                    <form action="" method="get" id="search" class="search active">
                        <input type="text" class="input-search-dd" name="keyword" placeholder="Bạn đang muốn đi đâu?" autocomplete="off">
                        
                        <div class="tt-menu">
                            <div class="tt-dataset tt-dataset-1">

                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <div class="product__sidebar">
                    <br>
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

<script> 
    $('form.search input[name="keyword"]').on('keyup', function() {
        let query = $(this).val();
        if (query.length) {
            $.ajax({
                url:"/getSearch-ajax",
                method:'get',
                data:{
                    data:query
                },
                success: function(data){
                    var table='';
                    for (var key in data) {
                        if((data[key].TenPhim).includes(query))
                            $(".khighlight").add('color','red');
                        table+=`<li class="khighlight tt-suggestion" ">
                                    <img src="source/img/IMG/${data[key].image }" alt="" width="50px">
                                    <a href="/film_type/${data[key].ID }" >
                                        ${data[key].TenPhim } 
                                    </a>
                                </li>`;
                    }
                    $('.tt-dataset').html(table);
                }
            });
            $(this).parents('form').addClass('active');
            return ;
        } else {
            $(this).parents('form').removeClass('active');
            return;
        } 
    });                       
</script>
@endsection
