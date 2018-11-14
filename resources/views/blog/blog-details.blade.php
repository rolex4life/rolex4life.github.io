@extends('layouts.masterblog')
@section('blogdetail')

    <!-- .blog-details.html-area start -->
    <div class="blog-details-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-wrapper">
                        <div class="blog-images">
                            <img src="/uploads/articles/{{ $blogdetail->featured_image}}" alt="">
                        </div>
                        <div class="blog-meta">
                            <ul>
                                <li>{{date("d F Y h:i:s A", strtotime($blogdetail->created_at))}}</li>
                                <li>/</li>
                                <li><a href="#">By Thomas Albernd</a></li>
                            </ul>
                        </div>
                        <h3>{!! $blogdetail->title !!}</h3>
                        <p>{!! $blogdetail->description !!}</p>
                        
                       
                        <ul class="socil-media">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div class="comment-main">
                            <h3 class="blog-title">Comments<span>(12)</span></h3>
                            <ol class="comments">
                            @foreach($comments as $comment)
                                <li class="comment even thread-even depth-1" id="comment-1">
                                    <div id="div-comment-1" class="comment-wrap">
                                        <div class="comment-theme">
                                            <div class="comment-image">
                                                <img src="/assets/images/comment/1.jpg" alt="Jhon">
                                            </div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="sewl-comments-meta">
                                                    <h4>{{$comment->first_name }} {{$comment->last_name}}</h4>
                                                    <span>{{date("d F Y ", strtotime($comment->created_at))}}</span>
                                                </div>
                                                <div class="comment-area">
                                                    <p>{{ $comment->comment }}</p>
                                                    <div class="comments-reply">
                                                        <a rel="nofollow" class="comment-reply-link" href="#0" onclick="return addComment.moveForm( &quot;comment-1&quot;, &quot;1&quot;, &quot;respond&quot;, &quot;1&quot; )" aria-label="Reply to Mr WordPress"><span class="comment-reply-link"><i class="fa fa-reply"></i> Reply</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <ul class="children">
                                        <li class="comment odd alt" id="comment-44">
                                            <div id="div-comment-44" class="comment-wrap comment-wrap1">
                                                <div class="comment-theme">
                                                    <div class="comment-image">
                                                        <img src="/assets/images/comment/2.jpg" alt="Jhon">
                                                    </div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="sewl-comments-meta">
                                                            <h4>Michele Anderson</h4>
                                                            <span>01 months ago</span>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>However venture pursuit he am mr cordial. Forming musical ame hearing studied mo ding how led gentleman sincerity. Valley afford uneasy joy she thrown though bed set country carried. Behaved an or suppose</p>
                                                            <div class="comments-reply">
                                                                <a rel="nofollow" class="comment-reply-link" href="#0" onclick="return addComment.moveForm( &quot;comment-1&quot;, &quot;1&quot;, &quot;respond&quot;, &quot;1&quot; )" aria-label="Reply to Mr WordPress"><span class="comment-reply-link"><i class="fa fa-reply"></i> Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> -->
                                </li>
                                @endforeach
                            </ol>
                        </div>
                        @if(Auth::check())
                        <div id="respond" class="sewl-comment-form comment-respond">
                            <h3 id="reply-title" class="blog-title">Leave a comment</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="sewl-form-textarea no-padding-right">
                                            <textarea id="comment" name="comment" tabindex="4" rows="3" cols="30" placeholder="Write Your Comments..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-submit">
                                            <input name="submit" id="submit" value="Post Comment" type="submit">
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        @else
                        <div class="row align-items-center">
                        <div class="col-6">

                         <button class="btn btn-block btn-primary" type="button">Login For Comment</button>
                        </div>
                    </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .blog-details.html-area end -->
   
   @endsection

   @section('script')
    <script>
       $(document).ready(function(){
           $('#submit').click(function(){
               var current = $(this);
               var comment = $('#comment').val();
               if(comment != "")
               {
               var id = "{{ $blogdetail->id }}";
                   $.ajax({
                   datatype:'json',
                   url:'/new_comment',
                   data:{'comment': comment ,'id':id ,'_token': $('meta[name="csrf-token"]').attr('content')},
                   type:'post',
                   success:function(e){
               $('#comment').val("");

                   }
               });
               }
               else
               {
                  alert('empty');
               }
       });
   });
   </script>
   @endsection