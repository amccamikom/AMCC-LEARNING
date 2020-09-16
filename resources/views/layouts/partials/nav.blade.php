<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                @foreach ($menu as $key => $value)
                <h6 class="navbar-heading p-0 pt-3 text-muted">
                    <span class="docs-normal">{{ $key }}</span>
                </h6>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    @foreach ($value as $key => $item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route($item['route']) }}">
                            <i class="{{ $item['icon'] }}"></i>
                            <span class="nav-link-text">{{ $key }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</nav>
