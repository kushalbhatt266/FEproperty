@extends('layouts.app')
@section('title', 'Mortgage Rates')
@section('page-heading','Mortgage Rates')
@push('styles')

@endpush
@section('content')
<main> 
    <div class="header-image-wrapper">
        <div class="bg" style="background-image: url('assets/images/carousel/slide-3.jpg');"></div>
        <div class="mask"></div>            
        <div class="header-image-content mh-200"> 
            <p class="desc">Mortgage Rates</p> 
        </div>
    </div>  
    <div class="px-3">  
        <div class="theme-container">  
            <div class="page-drawer-container mt-3">
                @include('templates.components.search')
                <div class="mdc-drawer-scrim page-sidenav-scrim"></div>
                <div class="page-sidenav-content">
                    <div class="properties-wrapper row mt-0" style="display: block;">
                        <div class="section mt-3" style="padding-top: 0px;">
                            <h1 class="section-title" style="text-align: center;">Mortgage Rates</h1>
                            <h2  style="margin-top: 4%;">Current Rates</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                           <table class="wp-table">
                              <tr>
                                 <th>National</th>
                                  <th>Average Rate*</th>
                                  <th>Points</th>
                              </tr>
                              <tr>
                                  <td>30-Year Fixed</td>
                                  <td>3.01%  </td>
                                  <td>0.7</td>
                              </tr>
                              <tr>
                                  <td>15-Year Fixed</td>
                                  <td>2.28%</td>
                                  <td>0.6</td>
                              </tr>
                              <tr>
                                  <td>ARM</td>
                                  <td>2.48%</td>
                                  <td>0.3</td>
                              </tr>
                           </table> 
                           <br>  
                           <h3>* Conforming FNMA Loan Amount. Rates last updated Oct 7, 2021</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @include('templates.components.call_us')
</main> 
@endsection
@push('scripts')
<script>

</script>
@endpush