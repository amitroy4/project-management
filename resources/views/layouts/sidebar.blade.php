<aside class="codex-sidebar">
    <div class="logo-gridwrap"><a class="codexbrand-logo" href="#"><img class="img-fluid" src="{{asset('admin')}}/assets/images/logo/logo.png" alt="theeme-logo"></a><a class="codex-darklogo" href="index.html"><img class="img-fluid" src="{{asset('admin')}}/assets/images/logo/dark-logo.png" alt="theeme-logo"></a>
      <div class="sidebar-action"><i data-feather="menu"></i></div>
    </div>
    <div class="icon-logo"><a href="#"><img class="img-fluid" src="{{asset('admin')}}/assets/images/logo/icon-logo.png" alt="theeme-logo"></a></div>
    <div class="codex-menuwrapper">
      <ul class="codex-menu custom-scroll" data-simplebar>
        <li class="cdxmenu-title">
          <h5>Dashboards</h5>
        </li>
        <li class="menu-item"><a href="{{route('dashboard')}}">
            <div class="icon-item"><i data-feather="home"></i></div><span>default</span></a></li>
        <li class="cdxmenu-title">
          <h5>Components</h5>
        </li>
        <li class="menu-item"><a href="javascript:void(0);">
            <div class="icon-item"> <i data-feather="book"></i></div><span>Client</span><i class="fa fa-angle-down"></i></a>
          <ul class="submenu-list">
            <li><a href="{{route('client.index')}}">Add Client</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
