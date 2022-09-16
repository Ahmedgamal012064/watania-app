<div class="main-menu menu-fixed menu-light menu-accordion  menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item"><a href="{{route('home')}}"><i class="la la-home"></i><span
            class="menu-title" data-i18n="nav.add_on_drag_drop.main"> الرئيسية </span></a>
        </li>
        @if (str_contains(Auth::user()->roles, 'view-car-type') || str_contains(Auth::user()->roles, 'add-car-type') )
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> انواع العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">{{ App\Models\CarType::count() }}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-car-type'))
                     <li><a class="menu-item" href="{{route('admin.cars.types')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-car-type'))
                        <li><a class="menu-item" href="{{route('admin.cars.types.create')}}"
                            data-i18n="nav.dash.ecommerce">اضافة نوع</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-car-brand') || str_contains(Auth::user()->roles, 'add-car-brand') )
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> ماركات العربيات </span>
                        <span
                            class="badge badge badge-success  badge-pill float-right mr-2">{{App\Models\CarBrand::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-car-brand'))
                        <li><a class="menu-item" href="{{route('admin.cars.brands')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-car-brand'))
                        <li><a class="menu-item" href="{{route('admin.cars.brands.create')}}"
                            data-i18n="nav.dash.ecommerce">ماركة اضافة</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-car-model') || str_contains(Auth::user()->roles, 'add-car-model') )
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> موديل العربيات </span>
                        <span
                            class="badge badge badge-danger  badge-pill float-right mr-2">{{App\Models\CarModel::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-car-model'))
                        <li><a class="menu-item" href="{{route('admin.cars.models')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-car-model'))
                        <li><a class="menu-item" href="{{route('admin.cars.models.create')}}"
                            data-i18n="nav.dash.ecommerce">موديل اضافة</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-car-color') || str_contains(Auth::user()->roles, 'add-car-color') )
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> الوان العربيات </span>
                        <span
                            class="badge badge badge-warning  badge-pill float-right mr-2">{{App\Models\CarColor::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-car-color'))
                        <li><a class="menu-item" href="{{route('admin.cars.colors')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-car-color'))
                        <li><a class="menu-item" href="{{route('admin.cars.colors.create')}}"
                            data-i18n="nav.dash.ecommerce">لون اضافة</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-car-kind') || str_contains(Auth::user()->roles, 'add-car-kind') )
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> فئات العربيات </span>
                        <span
                            class="badge badge badge-success  badge-pill float-right mr-2">{{App\Models\CarKind::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-car-kind'))
                        <li><a class="menu-item" href="{{route('admin.cars.kinds')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-car-kind'))
                        <li><a class="menu-item" href="{{route('admin.cars.kinds.create')}}"
                            data-i18n="nav.dash.ecommerce"> اضافة فئة</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-car') || str_contains(Auth::user()->roles, 'add-car') )
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">{{App\Models\Car::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-car'))
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> بدون سائق  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> بسائق </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-car'))
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> اضافة عربية</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-driver') || str_contains(Auth::user()->roles, 'add-driver') )
            <li class="nav-item">
                <a href=""><i class="la la-users"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> السائقين </span>
                        <span
                            class="badge badge badge-primary  badge-pill float-right mr-2">{{App\Models\Driver::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-driver'))
                        <li><a class="menu-item" href="{{route('admin.drivers')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href="{{route('admin.drivers.withoutcar')}}"
                            data-i18n="nav.dash.ecommerce"> السائقين بدون عربية  </a>
                        </li>
                        <li><a class="menu-item" href="{{route('admin.drivers.withcar')}}"
                            data-i18n="nav.dash.ecommerce"> السائقين بعربية  </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-driver'))
                        <li><a class="menu-item" href="{{route('admin.drivers.create')}}"
                            data-i18n="nav.dash.ecommerce"> اضافة سائق</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-user') || str_contains(Auth::user()->roles, 'add-user') )
            <li class="nav-item">
                <a href=""><i class="la la-users"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">الموظفين  </span>
                        <span
                            class="badge badge badge-warning  badge-pill float-right mr-2">{{App\Models\User::where('type','!=','admin')->count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-user'))
                        <li><a class="menu-item" href="{{route('admin.users')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل   </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-user'))
                        <li><a class="menu-item" href="{{route('admin.users.create')}}"
                            data-i18n="nav.dash.ecommerce">  اضافة موظف   </a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'view-complain') || str_contains(Auth::user()->roles, 'add-complain') )
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> الشكاوي </span>
                        <span
                            class="badge badge badge-success  badge-pill float-right mr-2">{{App\Models\Complain::count()}}</span>
                    </a>
                    <ul class="menu-content">
                        @if (str_contains(Auth::user()->roles, 'view-complain'))
                        <li><a class="menu-item" href="{{route('admin.complains')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        @endif
                        @if (str_contains(Auth::user()->roles, 'add-complain'))
                        <li><a class="menu-item" href="{{route('admin.complains.create')}}"
                            data-i18n="nav.dash.ecommerce"> اضافة شكوي</a>
                        </li>
                        @endif
                    </ul>
            </li>
            @endif
            @if (str_contains(Auth::user()->roles, 'add-report'))
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">التقارير  </span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> تقارير العربيات اليومية  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> تقارير في فترة معينة  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">  تقارير السائقين اليومية  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">  تقارير السائقين في فترة معينة  </a>
                        </li>
                    </ul>
            </li>
            @endif
        </ul>
    </div>
</div>
