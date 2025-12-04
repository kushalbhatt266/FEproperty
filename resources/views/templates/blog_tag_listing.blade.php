@extends('layouts.app')
@section('title', 'Home')
@section('page-heading','Home')
@section('content')
    <main> 
        <div class="header-image-wrapper">
            <div class="bg" style="background-image: url('/assets/images/carousel/slide-3.jpg');"></div>
            <div class="mask"></div>            
            <div class="header-image-content mh-200"> 
                <p class="desc">{{request()->get('tag')?request()->get('tag'):'Blog Listing'}}</p> 
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
                                <h2 class="uppercase" style="text-align:center">{{request()->get('tag')?request()->get('tag'):'Blog Listing'}}</h2>
                                
                            </div>
                            
                            
                        </div>
                        @foreach($tagss as $data)
                        @foreach($tag_mapping as $map_data)
                        @if($data->id==$map_data->tag_id)
                        @foreach($blog as $blog_data)
                        @if($blog_data->id==$map_data->blog_id)
                        <?php
                            $name = $res = preg_replace('/[?\@\.\;\" "]+/', '-', $blog_data->title);
                        ?>
                            <article class="blog-post">
                            <a href="{{url('/blog/'.$name.'/'.$blog_data->id)}}" class="tdh"><img src="assets/images/props/flat-2/1-big.jpg" class="img-b"></a>
                            <header><a href="{{url('/blog/'.$name.'/'.$blog_data->id)}}" class="tdh"><h2>{{$blog_data->title}}</h2></a></header>
                            <figure class="meta">
                                <a href="#" class="link-icon tdh"><i class="fa fa-user"></i>{{$blog_data->publish}}</a>
                                <!-- <a href="#" class="link-icon tdh"><i class="fa fa-calendar"></i>Posted On : {{date('d F Y - H:i', strtotime($blog_data->created_at))}}</a> --><br>
                                <div class="tags">
                                    @foreach($blog_data->mapping as $data1)
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
                           <p class="ta1">{!! substr($blog_data->description,0,257) !!}
                            </p>
                            <a href="{{url('/blog/'.$name.'/'.$blog_data->id)}}" class="tdh" style="color:#000">Read More <i class="fas fa-chevron-right"></i></a>
                            </article>
                            @endif
                            @endforeach
                            @endif
                            @endforeach
                @endforeach
                        </div> 
                    </div>  
                   
            </div>  
        </div>  
         </div>
        @include('templates.components.call_us') 
    </main> 
   @endsection