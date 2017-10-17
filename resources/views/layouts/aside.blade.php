<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="{{asset(Auth::user()->profile->avatar)}}" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{Auth::user()->name}}<i class="mdi-navigation-arrow-drop-down right"></i></a>

                    <ul id="profile-dropdown" class="dropdown-content">
                        <li>
                            <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="mdi-hardware-keyboard-tab"></i> {{ trans('app.index') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
            <li class="bold {{ isActiveURL('/admin/index') }}">             <a href="{{route('index')}}"                class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>             {{ trans('app.dashboard') }}</a></li>
            <li class="bold {{ isActiveURL('/admin/post/index') }}">        <a href="{{route('post.index')}}"           class="waves-effect waves-cyan"><i class="mdi-action-view-list"></i>             {{ trans('app.allPosts') }}</a>
            <li class="bold {{ isActiveURL('/admin/post/create') }}">       <a href="{{route('post.create')}}"          class="waves-effect waves-cyan"><i class="mdi-action-note-add"></i>              {{ trans('app.newPost') }}</a></li>
            <li class="bold {{ isActiveURL('/admin/post/trashed') }}">      <a href="{{route('post.trashed')}}"         class="waves-effect waves-cyan"><i class="mdi-action-delete"></i>                {{ trans('app.trashedPosts') }}</a></li>
            <li class="bold {{ isActiveURL('/admin/categories') }}">        <a href="{{route('category.index')}}"       class="waves-effect waves-cyan"><i class="mdi-editor-format-list-bulleted"></i>  {{ trans('app.categories') }}</a></li>
            <li class="bold {{ isActiveURL('/admin/tags') }}">              <a href="{{route('tags.index')}}"           class="waves-effect waves-cyan"><i class="mdi-maps-local-offer"></i>             {{ trans('app.tags') }}</a></li>
        @if(Auth::user()->admin)
            <li class="bold {{ isActiveURL('/admin/users') }}">             <a href="{{route('users.index')}}"          class="waves-effect waves-cyan"><i class="mdi-action-account-circle prefix"></i> {{ trans('app.users') }}</a></li>
            <li class="bold {{ isActiveURL('/admin/settings') }}">          <a href="{{route('settings.index')}}"       class="waves-effect waves-cyan"><i class="mdi-action-settings"></i>              {{ trans('app.settings') }}</a></li>
        @endif
            <li class="bold {{ isActiveURL('/admin/user/my-profile') }}">   <a href="{{route('users.my.profile')}}"     class="waves-effect waves-cyan"><i class="mdi-action-face-unlock"></i>           {{ trans('app.myProfile') }}</a></li>
    </ul>
</aside>
<!-- END LEFT SIDEBAR NAV-->