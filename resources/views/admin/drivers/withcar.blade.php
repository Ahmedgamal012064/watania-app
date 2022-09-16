@extends('layouts.app')
@section('title',"السائقين بالسيارة")
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">  السائقين  بالسيارة</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> السائقين بالسيارة
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">السائقين بالسيارة</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">{{--scroll-horizontal--}}
                                            <thead class="">
                                            <tr>
                                                <th>#id</th>
                                                <th>الاسم</th>
                                                <th>رقم الهاتف</th>
                                                <th>سعر اليومية</th>
                                                <th>الحضور</th>
                                                <th>الانصراف</th>
                                                <th>محل الاقامة</th>
                                                <th>الاكشن</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($drivers )
                                                @foreach($drivers  as $driver )
                                                    <tr>
                                                        <td>{{$driver-> id}}</td>
                                                        <td>{{$driver-> name}}</td>
                                                        <td>{{$driver-> phone}}</td>
                                                        <td>{{$driver-> day_price}} جنية</td>
                                                        <td>{{ date("F j, Y, g:i a", strtotime( $driver-> attend))}}</td>
                                                        <td>{{ date("F j, Y, g:i a", strtotime( $driver-> goes))}}</td>
                                                        <td>{{$driver-> country_set}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="{{route('admin.drivers.edit',$driver -> id)}}"
                                                                    class="btn btn-outline-primary btn-sm box-shadow-3 mr-1 mb-1">تعديل</a>

                                                                    <a data-toggle="modal" data-target="#exampleModal{{$driver -> id}}"
                                                                        class="btn btn-outline-warning btn-sm box-shadow-3 mr-1 mb-1">تفاصيل</a>

                                                            {{-- <a href="{{route('admin.services.delete',$service -> id)}}"
                                                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a> --}}
                                                            </div>

                                                            <!-- Start Modal -->
                                                            <div class="modal fade" id="exampleModal{{$driver -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">تفاصيل</h5>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="list-group">
                                                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                      <h5 class="mb-1">صورة الشخصية</h5>
                                                                                    </div>
                                                                                    <p class="mb-1">
                                                                                        <img src="{{asset($driver ->personal_photo)}}" style="width: 100px;height: 100px;">
                                                                                    </p>
                                                                                  </a>
                                                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                  <div class="d-flex w-100 justify-content-between">
                                                                                    <h5 class="mb-1">صورة الرخصة الامامية</h5>
                                                                                  </div>
                                                                                  <p class="mb-1">
                                                                                    <img src="{{asset($driver ->front_licence_photo)}}" style="width: 100px;height: 100px;">
                                                                                  </p>
                                                                                </a>
                                                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                      <h5 class="mb-1">صورة الرخصة الخلفية</h5>
                                                                                    </div>
                                                                                    <p class="mb-1">
                                                                                        <img src="{{asset($driver ->back_licence_photo)}}" style="width: 100px;height: 100px;">
                                                                                      </p>                                                                                  </a>
                                                                                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                      <h5 class="mb-1">صورة البطاقة الخلفية</h5>
                                                                                    </div>
                                                                                    <p class="mb-1">
                                                                                        <img src="{{asset($driver ->back_id_photo)}}" style="width: 100px;height: 100px;">
                                                                                      </p>                                                                                    </a>

                                                                                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                      <h5 class="mb-1">صورة البطاقة الامامية</h5>
                                                                                    </div>
                                                                                    <p class="mb-1">
                                                                                        <img src="{{asset($driver ->front_id_photo)}}" style="width: 100px;height: 100px;">
                                                                                      </p>                                                                                    </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">اغلاق</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
