<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">

                </div>
                <!--end user image section-->
            </li>

            <li class="{{ (Route::currentRouteName() == 'home') ? 'active selected' : '' }}">
                <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>

            <li class="{{ (Route::currentRouteName() === 'tour.index') ? 'selected' : '' }}" >
                <a href="{{route('tour.index')}}"><i class="fa fa-flask fa-fw"></i>Tour</a>
            </li>
            <li class="{{ (Route::currentRouteName() === 'clothing.index') ? 'selected' : '' }}">
                <a href="{{ route('clothing.index') }}"><i class="fa fa-table fa-fw"></i>Cloting</a>
            </li>
            <li class="{{ (Route::currentRouteName() === 'gallery.index') ? 'selected' : '' }}">
                <a href="{{ route('gallery.index') }}"><i class="fa fa-table fa-fw"></i>Gallery</a>
            </li>

        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>