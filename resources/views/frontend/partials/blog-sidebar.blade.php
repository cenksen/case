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
                <li>
                    <div class="sidebar__post-image">
                        <img src="{{asset('ui/images/resource/news1-1.jpg')}}" alt="">
                    </div>
                    <div class="sidebar__post-content">
                        <h3>
              <span class="sidebar__post-content-meta">
                <i class="fas fa-user-circle"></i>Admin </span>
                            <a href="news-details.html">Top crypto exchange influencers</a>
                        </h3>
                    </div>
                </li>
                <li>
                    <div class="sidebar__post-image">
                        <img src="{{asset('ui/images/resource/news1-2.jpg')}}" alt="">
                    </div>
                    <div class="sidebar__post-content">
                        <h3>
              <span class="sidebar__post-content-meta">
                <i class="fas fa-user-circle"></i>Admin </span>
                            <a href="news-details.html">Necessity may give us best virtual court</a>
                        </h3>
                    </div>
                </li>
                <li>
                    <div class="sidebar__post-image">
                        <img src="{{asset('ui/images/resource/news1-3.jpg')}}" alt="">
                    </div>
                    <div class="sidebar__post-content">
                        <h3>
              <span class="sidebar__post-content-meta">
                <i class="fas fa-user-circle"></i>Admin </span>
                            <a href="news-details.html">You should know about business plan</a>
                        </h3>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar__single sidebar__category">
            <h3 class="sidebar__title">Categories</h3>
            <ul class="sidebar__category-list list-unstyled">
                <li>
                    <a href="news-details.html">Business <span class="icon-right-arrow"></span>
                    </a>
                </li>
                <li class="active">
                    <a href="news-details.html">Digital Agency <span class="icon-right-arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="news-details.html">Introductions <span class="icon-right-arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="news-details.html">New Technologies <span class="icon-right-arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="news-details.html">Parallax Effects <span class="icon-right-arrow"></span>
                    </a>
                </li>
                <li>
                    <a href="news-details.html">Web Development <span class="icon-right-arrow"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
