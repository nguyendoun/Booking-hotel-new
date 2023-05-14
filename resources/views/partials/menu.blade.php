
<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
           
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
           
             @can('user_management_access') 
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                         @can('permission_access')  
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan 
                       @can('role_access') 
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                         @endcan 
                         @can('user_access')  
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                         @endcan  
                    </ul>
                </li>
           @endcan
            @can('hotel_access') 
                <li class="nav-item">
                    <a href="{{ route("admin.hotels.index") }}" class="nav-link {{ request()->is('admin/hotels') || request()->is('admin/hotels/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-hotel nav-icon">

                        </i>
                        {{ trans('cruds.hotel.title') }}
                    </a>
                </li>
             @endcan
            @can('room_type_access') 
                <li class="nav-item">
                    <a href="{{ route("admin.room-types.index") }}" class="nav-link {{ request()->is('admin/roomTypes') || request()->is('admin/roomTypes/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.roomType.title')}}
                    </a>
                </li>
             @endcan
            @can('room_access') 
                <li class="nav-item">
                    <a href="{{ route("admin.rooms.index") }}" class="nav-link {{ request()->is('admin/rooms') || request()->is('admin/rooms/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-hotel nav-icon">

                        </i>
                        {{ trans('cruds.room.title') }}
                    </a>
                </li>
            @endcan
            @can('booking_access')
                <li class="nav-item">
                    <a href="{{ route("admin.bookings.index") }}" class="nav-link {{ request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-user-tag nav-icon">

                        </i>
                        {{ trans('cruds.booking.title') }}
                    </a>
                </li>
             @endcan 
             @can('coupon_access')
                <li class="nav-item">
                    <a href="{{ route("admin.coupons.index") }}" class="nav-link {{ request()->is('admin/coupons') || request()->is('admin/coupons/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa fa-gift nav-icon"></i>
                        {{ trans('cruds.coupon.title') }}
                    </a>
                </li>
             @endcan 
             @can('image_access')
                <li class="nav-item">
                    <a href="{{ route("admin.images.index") }}" class="nav-link {{ request()->is('admin/images') || request()->is('admin/images/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa fa-file-image-o nav-icon"></i>
                        {{ trans('cruds.image.title') }}
                    </a>
                </li>
             @endcan 
             @can('advise_access')
                <li class="nav-item">
                    <a href="{{ route("admin.advise.index") }}" class="nav-link {{ request()->is('admin/advises') || request()->is('admin/advises/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa fa-phone-square nav-icon"></i>
                        Quick advice
                    </a>
                </li>
             @endcan 
            @can('searchRoom')
                <li class="nav-item">
                    <a href="{{ route("admin.searchRoom") }}" class="nav-link {{ request()->is('admin/coupons') || request()->is('admin/coupons/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa fa-search nav-icon"></i>
                        Search Room
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{trans('global.logout')}}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>