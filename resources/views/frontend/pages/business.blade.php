@extends('frontend.layouts.master')
@section('content')
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    {{$page->getFirstMedia('page')->img('page',['alt'=>$page->title])}}
                </div>
                <div class="col-xl-12 col-lg-12">
                 {!!   $page->body!!}
                </div>
            </div>
        </div>
    </section>
@endsection

