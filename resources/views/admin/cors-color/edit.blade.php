@extends('layouts.admin')
@section('title',"Edit Service")

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home </a>
                                </li>
                            <li class="breadcrumb-item"><a href="{{route('admin.services')}}">  Service </a>
                                </li>
                                <li class="breadcrumb-item active">Edit Service -  {{$service->name_en}}
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
                                    <h4 class="card-title" id="basic-layout-form"> Edit Service </h4>
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
                                        <form class="form" action="{{route('admin.services.update',$service -> id)}}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{$service -> id}}" type="hidden">



                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img
                                                src="@if(!empty($service->photo)){{asset($service->photo)}} @else {{asset('Adminlook/images/logo/logo.png')}} @endif"
                                                        class="rounded-circle  height-150" alt="service  Photo">
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label> Photo  </label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="photo"  />
                                                        <span class="file-custom"></span>
                                                    </label>
                                                    @error('photo')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <h4 class="form-section"><i class="ft-home"></i> Service Details </h4>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> Name English </label>
                                                                    <input type="text" value="{{$service ->name_en }}" id="name"
                                                                        class="form-control"
                                                                        placeholder="Name English"
                                                                        name="name_en" required>
                                                                    @error("name_en")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> Name French </label>
                                                                    <input type="text" value="{{$service ->name_fr }}" id="name"
                                                                        class="form-control"
                                                                        placeholder="Name French"
                                                                        name="name_fr" required>
                                                                    @error("name_fr")
                                                                <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> Back
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Update
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
