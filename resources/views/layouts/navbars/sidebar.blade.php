<div class="sidebar" data-color="orange" data-background-color="white">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="https://creative-tim.com/" class="simple-text logo-normal">
            <i class="material-icons">dashboard</i>
            {{ __('Dashboard') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a aria-disabled="true" class="nav-link">
                    <i class="material-icons">dashboard</i>
                    <b style="color: black">{{ __('Dashboard') }}</b>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'product' ? ' active' : '' }}">
                <a aria-disabled="true" class="nav-link">
                    <i class="material-icons">content_paste</i>
                    <b style="color: black">{{ __('Product') }}</b>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'customers' ? ' active' : '' }}">
                <a class="nav-link" href="/customers">
                    <i class="material-icons">library_books</i>
                    <b style="color: black">{{ __('Customers') }}</b>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'incomes' ? ' active' : '' }}">
                <a aria-disabled="true" class="nav-link">
                    <i class="material-icons">bubble_chart</i>
                    <b style="color: black">{{ __('Incomes') }}</b>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'promote' ? ' active' : '' }}">
                <a aria-disabled="true" class="nav-link">
                    <i class="material-icons">location_ons</i>
                    <b style="color: black">{{ __('Promote') }}</b>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'help' ? ' active' : '' }}">
                <a aria-disabled="true" class="nav-link">
                    <i class="material-icons">help</i>
                    <b style="color: black">{{ __('Help') }}</b>
                </a>
            </li>
        </ul>
    </div>
</div>
