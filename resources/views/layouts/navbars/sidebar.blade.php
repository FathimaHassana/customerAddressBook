<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
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
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'product' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Product') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'customers' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Customers') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'incomes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Incomes') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'promote' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Promote') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'help' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">help</i>
          <p>{{ __('Help') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
