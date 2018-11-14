@extends('layouts.masterblog')
@section('index')

        <!-- .post-area start -->
    <div class="post-area pb-80 ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Recent Post</h2>
                    </div>
                </div>
            </div>
            <div class="row">
             <div class="col-md-2 d-none d-sm-block">
                        <div class="header-banner">
                            <img src="https://nnu.ng/sitefiles/ads/1532728066.jpg" alt="">
                        </div>
             </div>
                <div class="col-md-8 col-12">
                @foreach($posts as $post)
                    <div class="post-wrap">
                       <div class="col-md-12 col-12">
                        <div class="post-content">
                            <h3><a href="/blog/{{ $post->id}}/{{ str_slug($post->title)}}">{{ $post->title }}</a></h3>
                             <!-- <p>{!!str_limit($post->description, 20) !!}</p>  -->
                            
                            <span>{{date("d F Y h:i:s A", strtotime($post->created_at))}}</span>
                      
                        </div>
                        </div>
                    </div>
                @endforeach    
                </div>

                <div class="col-md-2 d-none d-sm-block">
                        <div class="header-banner">
                            <img src="https://nnu.ng/sitefiles/ads/1532728066.jpg" alt="">
                        </div>
             </div>
               
               
                <div class="col-12">
                    <div class="pagination-wrapper text-center">
                        <ul class="page-numbers">
                            <li><a class="prev page-numbers" href="#"><i class="fa fa-arrow-left"></i></a></li>
                            <li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .post-area end -->
@endsection