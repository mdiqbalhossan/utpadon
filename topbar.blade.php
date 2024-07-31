<nav class="navbar navbar-static-top" <?= isset($language) && $language == 'arabic' ? 'ms-0' : '' ?>>
    <div class="wrapper_up_wrapper">
        <div class="hh_wrapper">
            <div class="navbar-custom-menu navbar-menu-left">
                <div class="logo_Section_main_sidebar">
                    <a href="#" class="sidebar-toggle set_collapse" data-status="<?php echo isset($is_collapse) && $is_collapse == 'No' ? '2' : '1'; ?>"
                        data-toggle="push-menu" role="button"
                        <?= isset($language) && $language == 'arabic' ? 'd-none' : '' ?>>
                        <span class="sr-only">Toggle navigation</span>
                        <div></div>
                        <div></div>
                        <div></div>
                    </a>
                    <a href="{{ route('home') }}" class="logo-wrapper"
                        <?= isset($language) && $language == 'arabic' ? 'd-none' : '' ?>>
                        <span class="logo-lg">
                            <?php
                            $photo = '/frequent_changing/images/mini_logo.png';
                            ?>
                            <img src="{!! $baseURL . $photo !!}" class="img-circle" alt="Logo Image">
                        </span>
                    </a>
                </div>
            </div>
            <div class="navbar-custom-menu navbar-menu-right">
                <div class="d-inline-flex align-items-center gap-2">
                    <!-- Language And Dropdown -->
                    <div class="dropdown me-1" id="language-dropdown">
                        <button class="btn dropdown-toggle top_5px_padding" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (auth()->check() && Auth::user()->language != null)
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="2" y1="12" x2="22" y2="12" />
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                </svg>
                            @endif
                        </button>
                        <ul dir="ltr" class="dropdown-menu dropdown-menu-light">
                            <ul class="language_list">
                                @foreach (languageFolders() as $dir)
                                    <li class="lang_list">
                                        <a class="dropdown-item" href="{{ url('set-locale/' . $dir) }}">
                                            <img src="{!! $baseURL !!}/assets/flags/{{ $dir }}.png"
                                                class="flag-image" alt="">
                                            {{ lanFullName($dir) }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </ul>
                    </div>
                    <div class="dropdown me-1" id="user-dropdown">
                        <button class="btn dropdown-toggle top_5px_padding" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (Auth::user()->photo != null and file_exists('uploads/user_photos/' . Auth::user()->photo))
                                <img class="user-avatar"
                                    src="<?php echo $baseURL; ?>uploads/user_photos/{{ auth()->user()->photo }}"
                                    alt="">
                            @else
                                <img class="user-avatar" src="<?php echo $baseURL; ?>assets/iproduction/dist/img/avatar.png"
                                    alt="">
                            @endif
                        </button>
                        <ul dir="ltr" class="dropdown-menu dropdown-menu-light user-ul">
                            <ul>
                                <li>
                                    <div class="user-info">
                                        <p class="user-name"><i data-feather="user-plus"></i>{{ Auth::user()->name }}</p>
                                    </div>
                                </li>
                                <li class="user-item">
                                    <a href="{{ url('change-profile') }}">
                                        @lang('index.change_profile')
                                    </a>
                                </li>
                                <li class="user-item">
                                    <a href="{{ url('change-password') }}">
                                        @lang('index.change_password')
                                    </a>
                                </li>
                                <li class="user-item">
                                    <a href="{{ url('security-question') }}">
                                        @lang('index.security_question')
                                    </a>
                                </li>
                                <li class="user-item">
                                    <a
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        @lang('index.logout')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</nav>
