<div class="col-xl-4 col-lg-5">
    <div class="sidebar">
        <div class="sidebar__single sidebar__search">
            <form action="{{route('blog.search')}}" method="GET" class="sidebar__search-form">
                <input type="search" placeholder="İçerik Ara!">
                <button type="submit">
                    <i class="lnr-icon-search"></i>
                </button>
            </form>
        </div>
        <div class="sidebar__single sidebar__post">
            <h3 class="sidebar__title">Son Eklenen Yazılar</h3>
            <ul class="sidebar__post-list list-unstyled">
                @forelse($latestBlog as $blog)
                    <li>
                        <div class="sidebar__post-image">
                            <a href="{{route('blog.show',['category'=>$blog->category->slug,'slug'=>$blog->slug])}}">
                                @if($blog->getFirstMedia())
                                    {{$blog->getFirstMedia()->img('blog',['alt'=>$blog->title])}}
                                @else
                                    <img src="{{asset('ui/images/resource/404.jpg')}}">
                                @endif
                            </a>
                        </div>
                        <div class="sidebar__post-content">
                            <h3>
                                <a href="{{route('blog.show',['category'=>$blog->category->slug,'slug'=>$blog->slug])}}">{{$blog->title}}</a>
                            </h3>
                        </div>
                    </li>
                @empty
                    <strong>İçerik Bulunamadı!</strong>
                @endforelse

            </ul>
        </div>
        <div class="sidebar__single sidebar__category">
            <h3 class="sidebar__title">Kategoriler</h3>
            <ul class="sidebar__category-list list-unstyled">
                @forelse($categories as $category)
                    <li>
                        <a href="{{route('blog.category',['category'=>$category->slug])}}">{{$category->title}} <span
                                class="icon-right-arrow"></span>
                        </a>
                    </li>
                @empty
                    <strong>Kategori Bulunamadı!</strong>
                @endforelse
            </ul>
        </div>
    </div>
</div>
