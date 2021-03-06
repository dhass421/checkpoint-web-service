@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row mt-4">
    <div class="col-12">
      <h1>Welcome</h1>
    </div>
    <div class="col-12 mt-3">
      <h4 class="text-muted">Dashboard</h4>        
      <hr />

    </div>
  </div>

    <div class="row mt-2">
        <div class="col-12 col-md-6">
            <a href="/createcoupon" class="text-dark">
                <div class="card mb-4 box-shadow">
                  
                  <div class="card-body text-center">
                    <h2 class="card-title mb-3">Add New Coupon</h2>
                          <svg class="bi bi-plus-circle" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                          </svg>

                  </div>
                </a>
                </div>
          </div>

          <div class="col-12 col-md-6">
            <a href="/createbusiness" class="text-dark">
            <div class="card mb-4 box-shadow">

              <div class="card-body text-center">
                <h2 class="card-title mb-3">Add New Business</h2>
                      <svg class="bi bi-plus-circle" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                      </svg>
              </div>
            </div>
          </a>
      </div>

      </div>
      <div class="row mt-4">
        <div class="col-12 mt-3">
          <h4 class="text-muted">Data</h4>
        </div>
      </div>

      @yield('coupon_table')
      @yield('business_table')


  </div>
@endsection

