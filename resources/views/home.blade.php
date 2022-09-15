@extends('layouts.app')
@section('title','Admin Home')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="crypto-stats-3" class="row">
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="danger">{{App\Models\Car::whereDate('created_at', date('Y-m-d'))->count()}}</h3>
                              <h6>العربيات المسجلة اليوم</h6>
                            </div>
                            <div>
                              <i class="la la-car  danger font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: {{App\Models\Car::whereDate('created_at', date('Y-m-d'))->count()}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="info">{{App\Models\Car::where('has_driver', 0)->count()}}</h3>
                              <h6>العربيات بدون سائق</h6>
                            </div>
                            <div>
                              <i class="la la-car  info font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: {{App\Models\Car::where('has_driver', 0)->count()}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="success">{{App\Models\Car::where('has_driver', 1)->count()}}</h3>
                              <h6>العربيات ب سائق</h6>
                            </div>
                            <div>
                              <i class="la la-car   success font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: {{App\Models\Car::where('has_driver', 1)->count()}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="warning">{{App\Models\Driver::whereDate('created_at', date('Y-m-d'))->count()}}</h3>
                              <h6>السائقين المسجلين اليوم</h6>
                            </div>
                            <div>
                              <i class="la la-users  warning font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: {{App\Models\Driver::whereDate('created_at', date('Y-m-d'))->count()}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="info">{{App\Models\Driver::where('car_id', 0)->count()}}</h3>
                              <h6>السائقين بدون عربية</h6>
                            </div>
                            <div>
                              <i class="la la-users  info font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: {{App\Models\Driver::where('car_id', 0)->count()}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card pull-up">
                      <div class="card-content">
                        <div class="card-body">
                          <div class="media d-flex">
                            <div class="media-body text-left">
                              <h3 class="danger">{{App\Models\Driver::where('car_id','!=', 0)->count()}}</h3>
                              <h6>السائقين بعربية</h6>
                            </div>
                            <div>
                              <i class="icon-users  danger font-large-2 float-right"></i>
                            </div>
                          </div>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: {{App\Models\Driver::where('car_id','!=', 0)->count()}}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- Candlestick Multi Level Control Chart -->
            </div>
        </div>
    </div>
</div>


@endsection

