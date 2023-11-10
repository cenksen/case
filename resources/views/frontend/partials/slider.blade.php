<section class="banner-section">
    <div class="banner-slider">
        @forelse($sliders as $slider)
            <div class="banner-slide">

                {{$slider->getFirstMedia('slider')->img('slider',['alt'=>$slider->title])}}

                <div class="outer-box">
                    <div class="auto-container">
                        <div class="content-box">
                            <h1 data-animation-in="fadeInLeft" data-delay-in="0.2">{{$slider->title}}</h1>
                            <h2 class="text-white" data-animation-in="fadeInLeft"
                                data-delay-in="0.4">{{$slider->description}}</h2>
                            <a href="{{url($slider->primary_button_url)}}" data-animation-in="fadeInUp"
                               data-delay-in="0.4" class="theme-btn">Daha Fazlasını Keşfet</a>
                        </div>

                    </div>
                </div>
            </div>
        @empty
            <strong>Slider Bulunamadı!</strong>
        @endforelse
    </div>
</section>
