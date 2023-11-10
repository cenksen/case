@extends('frontend.layouts.master') @section('content')
    <section class="services-details">
        <div class="container">
            <div class="row">


                @include('frontend.partials.service-sidebar')

                <div class="col-xl-8 col-lg-8">
                    <div class="services-details__content">
                        @if($service->getFirstMedia('service'))
                            {{$service->getFirstMedia('service')->img('service',['alt'=>$service->title, 'class'=>'service-custom-img'])}}
                        @else
                            <img src="{{asset('ui/images/resource/404.jpg')}}">
                        @endif
                        <h3 class="mt-4">{{$service->title}}</h3>
                        <p>{!! $service->body !!} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
