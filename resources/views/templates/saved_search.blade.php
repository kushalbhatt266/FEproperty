@extends('layouts.app')
@section('title', 'Saved Search')
@section('page-heading','Saved Search')
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
        <div class="px-3">  
            <div class="theme-container">   
                <div class="page-drawer-container mt-3">
                    <aside class="mdc-drawer mdc-drawer--modal page-sidenav">
                        <a href="#" class="h-0"></a>
                        <div class="mdc-card"> 
                            <div class="row start-xs middle-xs p-3">
                                <img src="assets/images/others/user.jpg" alt="user-image" class="avatar">
                                <h2 class="text-muted fw-500 mx-3">{{Auth::user()->name}}</h2> 
                            </div>
                            <hr class="mdc-list-divider m-0">
                            <ul class="mdc-list">
                                <!-- <li>
                                    <a href="profile.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">person</span>
                                        <span class="mdc-list-item__text">Profile</span>
                                    </a>
                                </li> -->
                               <!--  <li>
                                    <a href="my-properties.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">view_list</span>
                                        <span class="mdc-list-item__text">My Properties</span>
                                    </a>
                                </li> -->
                                <!-- <li>
                                    <a href="favorites.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">favorite</span>
                                        <span class="mdc-list-item__text">Favorites</span>
                                    </a> 
                                </li> -->
                                <li>
                                    <a href="{{ route('saved-search') }}" class="mdc-list-item py-1">
                                         <span class="mdc-list-item__graphic material-icons text-muted mx-3">search</span>
                                        <span class="mdc-list-item__text">Saved Searches</span>
                                    </a>
                                </li>
                               <!--  <li>
                                    <a href="submit-property.html" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">add_circle</span>
                                        <span class="mdc-list-item__text">Submit Property</span>
                                    </a>
                                </li> -->
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="mdc-list-item py-1">
                                        <span class="mdc-list-item__graphic material-icons text-muted mx-3">power_settings_new</span>
                                        <span class="mdc-list-item__text">Logout</span>
                                    </a>
                                    </form>
                                </li>
                            </ul>  
                        </div>
                    </aside>
                    <div class="mdc-drawer-scrim page-sidenav-scrim"></div>  
                    <div class="page-sidenav-content"> 
                        <div class="row mdc-card between-xs middle-xs w-100 p-2 mdc-elevation--z1 text-muted d-md-none d-lg-none d-xl-none mb-3">
                            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons">more_vert</button> 
                            <h3 class="fw-500">My Account</h3>
                        </div> 
                        <div class="mdc-card p-3">
                            <!-- <div class="mdc-text-field mdc-text-field--outlined custom-field w-100">
                                <input class="mdc-text-field__input" placeholder="Type for filter properties">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Filter properties</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>  --> 
                            <div class="col-xs-12 p-3">
                                <h1 class="fw-500 text-center">Saved Search</h1>
                            </div>
                            <div class="mdc-data-table border-0 w-100 mt-3">
                                <table class="mdc-data-table__table" aria-label="Dessert calories">
                                    
                                    <tbody class="mdc-data-table__content">
                                        @if(count($searches)>0)
                                        @foreach($searches as $search)
                                        @php
                                            $filter = json_decode($search->filters);
                                            $location = '';
                                            $bedrooms = '';
                                            $bathrooms = '';
                                            $min_price = '';
                                            $max_price = '';
                                            if($filter->location != null){
                                                $location = $filter->location;
                                            }
                                            if($filter->bedrooms != null){
                                                $bedrooms = $filter->bedrooms;
                                            }
                                            if($filter->bathrooms != null){
                                                $bathrooms = $filter->bathrooms;
                                            }
                                            if($filter->min_price != null){
                                                $min_price = $filter->min_price;
                                            }
                                            if($filter->max_price != null){
                                                $max_price = $filter->max_price;
                                            }
                                        @endphp
                                        <tr class="mdc-data-table__row">
                                            <td class="mdc-data-table__cell"><a href="{{ route('list-search',['location' => $location, 'bedrooms' => $bedrooms, 'bathrooms' => $bathrooms, 'min_price' => $min_price, 'max_price' => $max_price]) }}" class="mdc-button mdc-ripple-surface mdc-ripple-surface--primary normal">{{$search->name}}</a><p style="font-size: 10px;">location: {{$location}}, bedrooms: {{$bedrooms}}, bathrooms: {{$bathrooms}}, min_price: {{$min_price}}, max_price: {{$max_price}}</p></td>
                                            <td class="mdc-data-table__cell"><button class="mdc-icon-button material-icons warn-color" data-name="search-{{$search->id}}" onclick="removeSavedSearch(this,{{$search->id}})">delete</button></td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        
                                    </tbody>
                                </table>
                            </div> 
                        </div> 
                        <!-- <div class="row center-xs middle-xs my-3 w-100">                
                            <div class="mdc-card w-100"> 
                                <ul class="theme-pagination">
                                    <li class="pagination-previous disabled"><span>Previous</span></li>
                                    <li class="current"><span>1</span></li>
                                    <li><a><span>2</span></a></li>
                                    <li><a><span>3</span></a></li>
                                    <li><a><span>4</span></a></li>
                                    <li class="pagination-next"><a><span>Next</span></a></li>
                                </ul> 
                            </div>
                        </div> --> 
                    </div> 
                </div>  
            </div>  
        </div> 
    </main> 
@endsection
@push('scripts')
@endpush