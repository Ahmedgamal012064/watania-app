@extends('layouts.admin')
@section('title',"تعديل مستخدم")

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.users')}}">  المستخدمين </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل مستخدم - {{$user->name}}
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل  مستخدم </h4>
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
                                        <form class="form" action="{{route('admin.users.update',$user -> id)}}"
                                            method="POST">
                                            @csrf
                                            <input name="id" value="{{$user -> id}}" type="hidden">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المستخدم </h4>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> اسم المستخدم </label>
                                                                    <input type="text" value="{{$user->name}}" id="name"
                                                                        class="form-control"
                                                                        placeholder="اسم المستخدم"
                                                                        name="name" required>
                                                                    @error("name")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> رقم الهاتف </label>
                                                                    <input type="tel" value="{{$user->phone}}" id="phone"
                                                                        class="form-control"
                                                                        placeholder=" رقم الهاتف"
                                                                        name="phone" required dir="ltr">
                                                                    @error("phone")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> البريد الالكتروني</label>
                                                                    <input type="email" value="{{$user->email}}" id="email"
                                                                        class="form-control"
                                                                        placeholder=" البريد الالكتروني"
                                                                        name="email" required>
                                                                    @error("email")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">كلمة السر</label>
                                                                    <input type="password" value="" id="password"
                                                                        class="form-control"
                                                                        placeholder="اذا اردت كلمة السر القديم اترك الحقل فارغ"
                                                                        name="password" required>
                                                                    @error("password")
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
                                                    <i class="la la-check-square-o"></i> تحديث
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
