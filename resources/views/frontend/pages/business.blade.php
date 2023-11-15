@extends('frontend.layouts.master')
@section('content')
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    @if($page->getFirstMedia('page'))
                        {{$page->getFirstMedia('page')->img('page',['alt'=>$page->title])}}
                    @else
                        <img src="{{asset('ui/images/resource/404.jpg')}}">
                    @endif
                </div>
                <div class="col-xl-12 col-lg-12">
                    {!!   $page->body!!}
                </div>
            </div>
        </div>
    </section>
@endsection

