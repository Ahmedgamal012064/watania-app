@extends('layouts.app')
@section('title',"اضافة سائق")

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">الرئيسية </a>
                                </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.drivers')}}">  السائقين </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة سائق
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> إضافة  سائق </h4>
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
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.drivers.store')}}"
                                            enctype="multipart/form-data"
                                            method="POST">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات سائق </h4>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">صورة  شخصية </label>
                                                                    <input type="file" id="personal_photo" class="form-control"
                                                                        name="personal_photo" required>
                                                                    @error("personal_photo")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">صورة الرخصة الامامية </label>
                                                                <input type="file" id="front_licence_photo" class="form-control"
                                                                    name="front_licence_photo">
                                                                @error("front_licence_photo")
                                                            <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">صورة الرخصة الخلفية </label>
                                                                <input type="file" id="back_licence_photo" class="form-control"
                                                                    name="back_licence_photo">
                                                                @error("back_licence_photo")
                                                            <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">صورة البطاقة الامامية </label>
                                                                <input type="file"  id="front_id_photo" class="form-control"
                                                                    name="front_id_photo">
                                                                @error("front_id_photo")
                                                            <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">صورة البطاقة الخلفية </label>
                                                                <input type="file" id="back_id_photo" class="form-control"
                                                                    name="back_id_photo">
                                                                @error("back_id_photo")
                                                            <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> اسم سائق </label>
                                                                    <input type="text" id="name"
                                                                        class="form-control"
                                                                        placeholder="اسم سائق"
                                                                        name="name" required>
                                                                    @error("name")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">رقم الهاتف</label>
                                                                    <input type="tel" value="" id="phone"
                                                                        class="form-control"
                                                                        placeholder="رقم الهاتف"
                                                                        name="phone" required>
                                                                    @error("phone")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">رقم الهاتف اخر</label>
                                                                    <input type="tel" value="" id="another_phone"
                                                                        class="form-control"
                                                                        placeholder="رقم الهاتف اخر"
                                                                        name="another_phone">
                                                                    @error("another_phone")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> الانصراف</label>
                                                                    <input type="datetime-local" id="goes"
                                                                        class="form-control"
                                                                        placeholder="الانصراف"
                                                                        name="goes">
                                                                    @error("goes")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> الحضور</label>
                                                                    <input type="datetime-local" id="attend"
                                                                        class="form-control"
                                                                        placeholder="الحضور"
                                                                        name="attend">
                                                                    @error("attend")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> سعر اليومية</label>
                                                                    <input type="number" id="day_price"
                                                                        class="form-control"
                                                                        placeholder=" سعر اليومية"
                                                                        name="day_price" required step="000.01">
                                                                    @error("day_price")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">محل الاقامة</label>
                                                                    <input type="text" id="country_set"
                                                                        class="form-control"
                                                                        placeholder="محل الاقامة"
                                                                        name="country_set">
                                                                    @error("country_set")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
