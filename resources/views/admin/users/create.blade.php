@extends('layouts.app')
@section('title',"اضافة مستخدم")

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
                            <li class="breadcrumb-item"><a href="{{route('admin.users')}}">  المستخدمين </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة مستخدم
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة  مستخدم </h4>
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
                                        <form class="form" action="{{route('admin.users.store')}}"
                                            method="POST">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات المستخدم </h4>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> اسم المستخدم </label>
                                                                    <input type="text" value="" id="name"
                                                                        class="form-control"
                                                                        value="{{old('name')}}"
                                                                        placeholder="اسم المستخدم"
                                                                        name="name" required>
                                                                    @error("name")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> البريد الالكتروني</label>
                                                                    <input type="email" value="" id="email"
                                                                        class="form-control"
                                                                        value="{{old('email')}}"
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
                                                                        placeholder="كلمة السر"
                                                                        name="password" required>
                                                                    @error("password")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <h4 class="form-section"><i class="ft-lock"></i> الصلاحيات </h4>
                                                    <div class="row match-height">
                                                        <div class="col-xl-3">
                                                                <fieldset class="checkboxsas">
                                                                  <label>
                                                                    <input type="checkbox" value="add-car-type" name="roles[]"> اضافة انواع عربيات
                                                                  </label>
                                                                </fieldset>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                              <label>
                                                                <input type="checkbox" value="view-car-type" name="roles[]"> عرض انواع عربيات
                                                              </label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-car-brand" name="roles[]"> اضافة ماركات عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-car-brand" name="roles[]"> عرض ماركات عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-car-model" name="roles[]"> اضافة موديل عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-car-model" name="roles[]"> عرض موديل عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-car-color" name="roles[]"> اضافة الوان عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-car-color" name="roles[]"> عرض الوان عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-car-kind" name="roles[]"> اضافة فئات عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox"value="view-car-kind" name="roles[]"> عرض فئات عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-car" name="roles[]"> اضافة عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-car" name="roles[]"> عرض عربيات
                                                            </label>
                                                            </fieldset>
                                                        </div>


                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-driver" name="roles[]"> اضافة سائقين
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-driver" name="roles[]"> عرض سائقين
                                                            </label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-driver" name="roles[]"> اضافة الموظفين
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-driver" name="roles[]"> عرض الموظفين
                                                            </label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="add-complain" name="roles[]"> اضافة الشكاوي
                                                            </label>
                                                            </fieldset>
                                                    </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-complain" name="roles[]"> عرض الشكاوي
                                                            </label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-3">
                                                            <fieldset class="checkboxsas">
                                                            <label>
                                                                <input type="checkbox" value="view-report" name="roles[]"> عرض التقارير
                                                            </label>
                                                            </fieldset>
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
