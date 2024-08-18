<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
      <div class="sidebar-brand">
        <img class="sidebar-brand-full" src="{{ Vite::asset('resources/img/icon/HIDUPI.png') }}" width="88" height="32" alt="Hidupi Logo">
        <img class="sidebar-brand-narrow" src="{{ Vite::asset('resources/img/icon/hero-logo.png') }}" width="32" height="32" alt="Hidupi Logo">
      </div>
      <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        {{ $sidebar }}
    </ul>
    <div class="sidebar-footer border-top d-none d-md-flex">
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
  </div>
