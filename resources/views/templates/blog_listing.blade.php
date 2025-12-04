@extends('layouts.app')
@section('title', 'Home')
@section('page-heading','Home')
@push('styles')
<style>
   .disabled {
   pointer-events: none;
   cursor: default;
   opacity: 0.6;
   }
</style>
@endpush
@section('content')
<main>
   <div class="header-image-wrapper">
      <div class="bg" style="background-image: url('/assets/images/carousel/slide-3.jpg');"></div>
      <div class="mask"></div>
      <div class="header-image-content mh-200">
         <p class="desc">{{request()->get('tag')?request()->get('tag'):'Industry News'}}</p>
      </div>
   </div>
   <div class="px-3">
   <div class="theme-container">
      <div class="page-drawer-container mt-3">
         @include('templates.components.search')
         <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
         <div class="page-sidenav-content">
            <div class="properties-wrapper row mt-0">
               <div class="page-sidenav-content">
                  <div class="mdc-card middle-xs p-3">
                     <div>
                        <h2 class="uppercase" style="text-align:center">{{request()->get('tag')?request()->get('tag'):'Industry News'}}</h2>
                     </div>
                  </div>
                  <?php
                     $blog_array = [];
                     foreach($tag_mapping as $data){
                     array_push($blog_array,$data->tag_id);  
                     }
                     ?>
                  @foreach($blog as $data)
                  <?php
                     $name = preg_replace('/[?\@\.\;\" "]+/', '-', $data->title);
                     ?>
                  <article class="blog-post">
                     <a href="{{url('/blog/'.$name.'/'.$data->id)}}" class="tdh"><img src="assets/images/props/flat-2/1-big.jpg" class="img-b"></a>
                     <header>
                        <a href="{{url('/blog/'.$name.'/'.$data->id)}}" class="tdh">
                           <h2>{{$data->title}}</h2>
                        </a>
                     </header>
                     <figure class="meta">
                        <a href="{{url('/blog/'.$name.'/'.$data->id)}}" class="link-icon tdh"><i class="fa fa-user"></i>{{$data->publish}}</a>
                        <!--  <a href="{{url('/blog/'.$name.'/'.$data->id)}}" class="link-icon tdh"><i class="fa fa-calendar"></i>Posted On : {{date('d F Y - H:i', strtotime($data->created_at))}}</a> --><br>
                        <div class="tags">
                           @foreach($data->mapping as $data1)
                           @foreach($tags as $tag_data)
                           @if($data1->tag_id==$tag_data->id)
                           <?php
                              $tag_name = preg_replace('/[?\@\.\;\" "]+/', '-', $tag_data->name);
                              ?>
                           <a href="{{route('-.blog.tags',[$tag_data->id, 'tag' => $tag_name])}}" class="tag article tdh">{{$tag_data->name}}</a>
                           @endif
                           @endforeach
                           @endforeach
                        </div>
                     </figure>
                     <p>{!! substr($data->description,0,257) !!}
                     </p>
                     <a href="{{url('/blog/'.$name.'/'.$data->id)}}" class="tdh" style="color:#000">Read More <i class="fas fa-chevron-right"></i></a>
                  </article>
                  @endforeach
               </div>
            </div>
            @if ($blog->lastPage() > 1)
            <div class="row center-xs middle-xs p-2 w-100">
               <div class="mdc-card w-100">
                  <ul class="theme-pagination">
                     <li class="pagination-previous">
                        <a class="{{ ($blog->currentPage() == 1) ? 'disabled' : '' }}" href="{{ $blog->url(1) }}" style="text-decoration:none;"><span>Previous</span>
                        </a>
                     </li>
                     @for ($i = 1; $i <= $blog->lastPage(); $i++)
                     <li class="{{ ($blog->currentPage() == $i) ? ' current' : '' }}">
                        @if($blog->currentPage() == $i)
                        <span>{{ $i }}</span>
                        @else
                        <a href="{{ $blog->url($i) }}" style="text-decoration:none;"><span>{{ $i }}</span>
                        </a>
                        @endif
                     </li>
                     @endfor
                     <li class="pagination-next">
                        <a class="{{ ($blog->currentPage() == $blog->lastPage()) ? ' disabled' : '' }}" href="{{ $blog->url($blog->currentPage()+1) }}" style="text-decoration:none;"><span>Next</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            @endif
         </div>
      </div>
   </div>
   @include('templates.components.call_us') 
</main>
@endsection