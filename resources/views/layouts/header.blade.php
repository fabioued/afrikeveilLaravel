
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">{{ app()->getLocale() }}</a><ul id="translation-dropdown" class="dropdown-content" style="white-space: nowrap; position: absolute; top: 64px; left: 1052px; opacity: 1; display: none;">
                            @foreach(config('translatable.locales') as $lang => $language)
                                @if ($lang != app()->getLocale())
                                    <li><a href="{{route('lang.switch', $lang)}}">{{ $language }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="/" class="waves-effect waves-block waves-light chat-collapse">Go To Website</a></li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>