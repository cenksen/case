@extends('frontend.layouts.master')
@section('content')
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            @if($blog->getFirstMedia())
                                {{$blog->getFirstMedia()->img('blog',['alt'=>$blog->title])}}
                            @else
                                <img src="{{asset('ui/images/resource/404.jpg')}}">
                            @endif

                            <div class="blog-details__date">
                                <span class="day">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</span>
                                <span
                                    class="month">{{ \Carbon\Carbon::parse($blog->created_at)->translatedFormat('F, Y') }}</span>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <h3 class="blog-details__title">{{$blog->title}}</h3>
                            <p class="blog-details__text-2">
                                {!! $blog->body !!}
                            </p>
                        </div>

                    </div>
                </div>
                @include('frontend.partials.blog-sidebar')
            </div>
        </div>
    </section>
@endsection

