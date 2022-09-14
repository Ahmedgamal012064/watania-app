<div class="main-menu menu-fixed menu-light menu-accordion  menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item"><a href="{{route('home')}}"><i class="la la-home"></i><span
            class="menu-title" data-i18n="nav.add_on_drag_drop.main"> الرئيسية </span></a>
        </li>

            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> انواع العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">{{ App\Models\CarType::count() }}</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{route('admin.cars.types')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href="{{route('admin.cars.types.create')}}"
                            data-i18n="nav.dash.ecommerce">اضافة نوع</a>
                        </li>
                    </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> ماركات العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">ماركة اضافة</a>
                        </li>
                    </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> موديل العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">موديل اضافة</a>
                        </li>
                    </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> الوان العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">لون اضافة</a>
                        </li>
                    </ul>
            </li>


            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> فئات العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">فئة اضافة</a>
                        </li>
                    </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> العربيات </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> بدون سائق  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> بسائق </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">عربية اضافة</a>
                        </li>
                    </ul>
            </li>


            <li class="nav-item">
                <a href=""><i class="la la-users"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> السائقين </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> السائقين بدون عربية  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> السائقين بعربية  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">سائق اضافة</a>
                        </li>
                    </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-users"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">الموظفين  </span>
                        <span
                            class="badge badge badge-warning  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل   </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">  اضافة موظف   </a>
                        </li>
                    </ul>
            </li>
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> الشكاوي </span>
                        <span
                            class="badge badge badge-info  badge-pill float-right mr-2">0</span>
                    </a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce"> عرض الكل  </a>
                        </li>
                        <li><a class="menu-item" href=""
                            data-i18n="nav.dash.ecommerce">شكوي اضافة</a>
                        </li>
                    </ul>
            </li>
            <li class="nav-item">
                <a href=""><i class="la la-tasks"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">التقارير  </span>
                        <span
                            class="badge badge badge-warning  badge-pill float-right mr-2">0</span>
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
        </ul>
    </div>
</div>
