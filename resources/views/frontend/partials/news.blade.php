@if(isset($latestBlog) && $latestBlog->count() > 0)
    <section class="news-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Bilgi Bankası</h2>
            </div>

            <div class="row">
                @foreach($latestBlog as $blog)
                    <div class="news-block-three col-lg-4 col-md-6 wow fadeInLeft animated"
                         style="visibility: visible; animation-name: fadeInLeft;">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image overlay-anim">
                                    <a href="{{route('blog.show',['category'=>$blog->category->slug,'slug'=>$blog->slug])}}">
                                        @if($blog->getFirstMedia())
                                            {{$blog->getFirstMedia()->img('blog',['alt'=>$blog->title])}}
                                        @else
                                            <img src="{{asset('ui/images/resource/404.jpg')}}">
                                        @endif
                                    </a>
                                </figure>
                                <div class="outer-box">
                                    <div class="date">
                                        <h4 class="title">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</h4>
                                        <span>{{ \Carbon\Carbon::parse($blog->created_at)->translatedFormat('F, Y') }}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="content-box">
                                <h4 class="title">
                                    <a href="{{route('blog.show',['category'=>$blog->category->slug,'slug'=>$blog->slug])}}">{{$blog->title}}</a>
                                </h4>
                                <a href="{{route('blog.show',['category'=>$blog->category->slug,'slug'=>$blog->slug])}}"
                                   class="btn">
                                    <span class="btn-title">Devamını Oku!
                                        <i class="fa fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
@endif
