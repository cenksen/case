@if(isset($latestService) && $latestService->count() > 0)
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title-two text-center">
                <h2>Hizmetlerimiz</h2>
            </div>
            <div class="row">
                @foreach($latestService as $service)
                    <div class="service-block col-lg-4 col-sm-6 wow fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image overlay-anim">
                                    @if($service->getFirstMedia('service'))
                                        {{$service->getFirstMedia('service')->img('service',['alt'=>$service->title])}}
                                    @else
                                        <img src="{{asset('ui/images/resource/404.jpg')}}">
                                    @endif
                                </figure>

                            </div>
                            <div class="content-box">
                                <h4 class="title"><a href="{{route('service.show',['slug'=>$service->slug])}}">{{$service->title}}</a></h4>
                                <div class="text">
                                    {{Str::limit($service->description, 80)}}
                                </div>
                                <a href="{{route('service.show',['slug'=>$service->slug])}}" class="view-more">Devamını Oku<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
