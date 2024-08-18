<div class="wrapper d-flex flex-column min-vh-100">
    <header class="header header-sticky p-0 mb-4">
      <div class="container-fluid border-bottom px-4">
        <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
          <i class="cil-menu icon icon-lg"></i>
        </button>
        <ul class="header-nav d-none d-lg-flex">
          <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="header-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">
              <i class="cil-bell icon icon-lg"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="#">
              <i class="cil-list-rich icon icon-lg"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="#">
              <i class="cil-envelope-open icon icon-lg"></i></a></li>
        </ul>
        <ul class="header-nav">
          <li class="nav-item py-1">
            <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
          </li>
          <li class="nav-item dropdown">
            <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
              <i class="cil-contrast icon icon-lg theme-icon-active"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
              <li>
                <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                  <i class="cil-sun icon icon-lg me-3"></i>Light
                </button>
              </li>
              <li>
                <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                  <i class="cil-moon icon icon-lg me-3"></i>Dark
                </button>
              </li>
              <li>
                <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                  <i class="cil-contrast icon icon-lg me-3"></i>Auto
                </button>
              </li>
            </ul>
          </li>
          <li class="nav-item py-1">
            <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div></a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
              <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div><a class="dropdown-item" href="#">
                  <i class="cil-bell icon icon-lg me-2"></i>
                   Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">

                  <i class="cil-envelope-open icon icon-lg me-2"></i> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">

                  <i class="cil-task icon icon-lg me-2"></i>
                      Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">

                  <i class="cil-comment-square icon icon-lg me-2"></i>Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
              <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">
                <div class="fw-semibold">Settings</div>
              </div><a class="dropdown-item" href="#">
                  <i class="cil-user icon icon-lg me-2"></i>Profile</a><a class="dropdown-item" href="#">
                  <i class="cil-settings icon icon-lg me-2"></i>Settings</a><a class="dropdown-item" href="#">
                  <i class="cil-credit-card icon icon-lg me-2"></i>Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <i class="cil-file icon icon-lg me-2"></i>Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <i class="cil-lock-locked icon icon-lg me-2"></i>Lock Account</a>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="dropdown-item" href="logout"
                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class="cil-account-logout icon icon-lg me-2"></i>Logout</a>

                </form>

            </div>
          </li>
        </ul>
      </div>
      <div class="container-fluid px-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb my-0">
            <li class="breadcrumb-item active"><span>Home</span>
            </li>
          </ol>
        </nav>
      </div>
    </header>
    <div class="body flex-grow-1">
      <div class="container-lg px-4">
        <div class="row mb-4">
          <div class="col-xl-5 col-xxl-4 mb-4 mb-xl-0">
            <script id="_carbonads_js" async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CEAICKJY&amp;placement=coreuiio"></script>
          </div>

      </div>
    </div>
    <footer class="footer px-4">
      <div><a href="#">HIDUPI</a> &copy; 2024 </div>
    </footer>
  </div>
