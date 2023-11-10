@extends('frontend.layouts.master')
@section('content')
    <section class="services-section-five">
        <div class="auto-container">
            <div class="row">
                @forelse($services as $service)
                    <div class="service-block-five col-lg-3 col-sm-6">
                        <a href="{{route('service.show',['slug'=>$service->slug])}}">
                            <div class="inner-box">
                                <div class="icon-box">
                                    @if($service->getFirstMedia('service'))
                                        {{$service->getFirstMedia('service')->img('service',['alt'=>$service->title])}}
                                    @else
                                        <img src="{{asset('ui/images/resource/404.jpg')}}">
                                    @endif
                                </div>
                                <div class="content-box">
                                    <h4 class="title">{{$service->title}}</h4>
                                    <div class="text">{{Str::limit($service->description,90)}}</div>
                                    <a href="{{route('service.show',['slug'=>$service->slug])}}"
                                       class="view-more">
                                        <i class="fa fa-arrow-right"></i>
                                        Detayı Görüntüle
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>

                @empty
                    <strong>İçerik Bulunamadı!</strong>
                @endforelse

                {{$services->links()}}
            </div>
        </div>
    </section>
@endsection

