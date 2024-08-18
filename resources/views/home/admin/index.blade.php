
<x-app-layout>
    <x-slot:sidebar>
        <li class="nav-item"><a class="nav-link" href="index.html">
            <i class="cil-speedometer nav-icon icon-xl"></i>Dashboard</a></li>
        <li class="nav-title">{{ __('Task') }}</li>
        <li class="nav-item">
            <a class="nav-link" href="colors.html">
                <i class="cil-drop nav-icon icon-xl"></i> Task List
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="typography.html">
                <i class="cil-pencil nav-icon icon-xl"></i> Create Task
            </a>
        </li>
        <li class="nav-title">Marketplace</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="cil-puzzle nav-icon icon-xl"></i> Reward
            </a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Accordion</a></li>
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Breadcrumb</a></li>
          </ul>
        </li>
        <li class="nav-title">Profile</li>
        <li class="nav-group">
            <a class="nav-link" href="#">
                <i class="cil-star nav-icon icon-xl"></i> Settings
            </a>
        </li>
    </x-slot>
    <script>
        const header = document.querySelector('header.header');

        document.addEventListener('scroll', () => {
          if (header) {
            header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
          }
        });

      </script>
</x-app-layout>
