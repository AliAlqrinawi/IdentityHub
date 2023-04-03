<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href=""><img src="https://swordchampion.com/logo/logo-light.png"
                class="main-logo" alt="logo" style="width: 150px;"></a>
        <a class="desktop-logo logo-dark active" href=""><img src="https://swordchampion.com/logo/logo-light.png"
                class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href=""><img
                src="https://swordchampion.com/logo/logo-mine.png" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href=""><img
                src="https://swordchampion.com/assets/img/brand/favicon-white.png" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{  asset('assets/logo.png') ?? ''}}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0"> {{ Auth::user()->first_name ?? ""}}</h4>
                    <span class="mb-0 text-muted">{{ Auth::user()->email ?? ""}}</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">Main</li>
            <li class="slide">
                <a class="side-menu__item" href="">
                    <img class="side-menu__icon"
                        src="{{url('https://img.icons8.com/fluency/48/000000/dashboard-layout.png')}}"
                        style=" width: 30px; height: 30px;" />
                    <span class="side-menu__label" style=" font-weight: bold;">{{trans('menu.dashboard')}}</span>
                </a>
            </li>
            <li class="side-item side-item-category">General</li>
            @can('region-view')
            <li class="slide">
                <a class="side-menu__item" href="{{ route('countries') }}">
                    <img class="side-menu__icon" src="{{url('https://img.icons8.com/nolan/344/region-code.png')}}"
                        style=" width: 30px; height: 30px;" />
                    <span class="side-menu__label" style=" font-weight: bold;">{{trans('menu.regions')}}</span>
                </a>
            </li>
            @endcan



        </ul>
    </div>
</aside>
<!-- main-sidebar -->
