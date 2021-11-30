  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">


        @foreach($newsadd as $newsadds)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$newsadds->spaciality}}</a>
              </div>
              <a href="{{url('news')}}" class="post-thumb">
                <img src="doctorimage/{{$newsadds->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('news')}}">{{$newsadds->heading}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>{{$newsadds->name}}</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('news')}}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div> 