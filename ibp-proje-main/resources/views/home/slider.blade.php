<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hs-slider owl-carousel">
        @foreach($sliderdata as $rs)
            <div class="hs-item set-bg"
                 data-setbg="{{Storage::url($rs->image)}}"
                 style="object-fit: cover;"> {{--Görsel boyutlandırmada sorun var--}}
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>{{$rs->title}}</span>
                                <h1>G <strong>Y</strong> M</h1>
                                <a href="{{route('product',['id'=> $rs->id])}}" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- Hero Section End -->
