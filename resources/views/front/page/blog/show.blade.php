@extends('front.layout.app2')
@section('meta')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="author" content="John Doe">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection
@section('content')
<section class="page-header mb-0 page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{$blog->banner_blog_image}}'); background-position:center;">
   <div class="container">
      <div class="row mt-5">
         <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-9 font-weight-bold">Blog Detail</h1>

         </div>
         <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
               <li><a href="">Home</a></li>
               <li class="active">Blog</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="container py-4">
   <div class="row">
      <div class="col-12">
         <div class="blog-posts single-post">
            <article class="post post-large blog-single-post border-0 m-0 p-0">
               <div class="post-image ml-0">

                  <img src="img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                  </a>
               </div>
               <div class="post-date ml-0">
                  <span class="day">10</span>
                  <span class="month">Jan</span>
               </div>
               <div class="post-content ml-0">
                  <h2 class="font-weight-semi-bold"><a href="#">{{$blog->title}}</a></h2>
                  <div class="post-meta">
                     <span><i class="far fa-user"></i> By <a href="#">{{$blog->author_name}}</a> </span>
                     <span>
                        <i class="far fa-folder"></i>
                        <a href="#">{{implode(', ', $blog->meta_keyword)}}</a>
                     </span>
                  </div>
                  <div>
                     {!!$blog->body!!}
                  </div>
               </div>
            </article>
         </div>
      </div>
      {{-- <div class="col-12">
         <div class="post-block mt-5 post-leave-comment">
            <h4 class="mb-3">Leave a comment</h4>
            <form class="contact-form p-4 rounded" action="php/contact-form.php" method="POST">
               <div class="p-2">
                  <div class="form-row">
                     <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark">Full Name</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                     </div>
                     <div class="form-group col-lg-6">
                        <label class="required font-weight-bold text-dark">Email Address</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col">
                        <label class="required font-weight-bold text-dark">Comment</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col mb-0">
                        <input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div> --}}
   </div>
</div>
@endsection
