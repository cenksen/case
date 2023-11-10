<section class="marquee-section">
    <div class="inner-container">
        <div class="marquee">
            <div class="marquee-block">
                @foreach($latestService as $service)
                    <div class="content-box">
                        <h6 class="title"><a href="{{route('service.show',['slug'=>$service->slug])}}"># {{$service->title}}</a></h6>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
