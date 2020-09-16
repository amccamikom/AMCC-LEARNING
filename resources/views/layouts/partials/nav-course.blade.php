<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    @foreach ($menu as $key => $value)
                    @if (request()->segment(4) == $value['slug'] || (is_null(request()->segment(4)) && $key == 0))
                    <li class="nav-item py-1">
                        <a class="nav-link btn btn-primary mx-3" href="{{ route('product.course.show', ['product' => $product, 'course' => $value['slug']]) }}">
                            <span class="text-white text-uppercase"><b>{{ $value['title'] }}</b></span>
                        </a>
                    </li>
                    @else
                    <li class="nav-item py-1">
                        <a class="nav-link btn bg-secondary btn-primary mx-3" href="{{ route('product.course.show', ['product' => $product, 'course' => $value['slug']]) }}">
                            <span class="text-primary text-uppercase"><b>{{ $value['title'] }}</b></span>
                        </a>
                    </li>
                    @endif
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link mx-3 active active-pro" href="{{ route('index') }}">
                            <span class="text-default text-uppercase"><b> <i class="ni ni-bold-left"></i> Dashboard</b></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
