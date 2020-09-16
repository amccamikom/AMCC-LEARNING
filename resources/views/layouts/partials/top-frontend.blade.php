<li class="nav-item dropdown">
    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{ asset('img/theme/team-4.jpg') }}">
            </span>
            <div class="media-body  ml-2  d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">{{ auth('member')->user()->name }}</span>
            </div>
        </div>
    </a>
    <div class="dropdown-menu  dropdown-menu-right ">
        <div class="dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome!</h6>
        </div>
        <a href="{{ route('member.profile') }}" class="dropdown-item">
            <i class="ni ni-single-02"></i>
            <span>My profile</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('member.logout') }}" class="dropdown-item"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>{{ __('Logout') }}</span>
            <form id="logout-form" class="d-none" action="{{ route('member.logout') }}" method="POST">
                @csrf
            </form>
        </a>
    </div>
</li>
