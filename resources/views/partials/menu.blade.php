admin<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs("admin.home") ? "active" : "" }}" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{
                    request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" :
                    "" }}">
                    <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/permissions*") ? "active" : "" }} {{
                        request()->is("admin/roles*") ? "active" : "" }} {{ request()->is("admin/users*") ? "active" :
                        "" }}" href="#">
                        <i class="fa-fw nav-icon fas fa-users">

                        </i>
                        <p>
                            {{ trans('cruds.userManagement.title') }}
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('permission_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("
                               admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <i class="fa-fw nav-icon fas fa-unlock-alt">

                                </i>
                                <p>
                                    {{ trans('cruds.permission.title') }}
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles")
                                || request()->is("admin/roles/*") ? "active" : "" }}">
                                <i class="fa-fw nav-icon fas fa-briefcase">

                                </i>
                                <p>
                                    {{ trans('cruds.role.title') }}
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('user_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users")
                                || request()->is("admin/users/*") ? "active" : "" }}">
                                <i class="fa-fw nav-icon fas fa-user">

                                </i>
                                <p>
                                    {{ trans('cruds.user.title') }}
                                </p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('content_management_access')
                <li class="nav-item has-treeview {{ request()->is("admin/content-categories*") ? "menu-open" : "" }} {{
                    request()->is("admin/content-tags*") ? "menu-open" : "" }} {{ request()->is("admin/content-pages*")
                    ? "menu-open" : "" }}">
                    <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/content-categories*") ? "active"
                        : "" }} {{ request()->is("admin/content-tags*") ? "active" : "" }} {{
                        request()->is("admin/content-pages*") ? "active" : "" }}" href="#">
                        <i class="fa-fw nav-icon fas fa-book">

                        </i>
                        <p>
                            {{ trans('cruds.contentManagement.title') }}
                            <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can('content_category_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.content-categories.index") }}" class="nav-link {{ request()->is("
                               admin/content-categories") || request()->is("admin/content-categories/*") ? "active" :
                                "" }}">
                                <i class="fa-fw nav-icon fas fa-folder">

                                </i>
                                <p>
                                    {{ trans('cruds.contentCategory.title') }}
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('content_tag_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.content-tags.index") }}" class="nav-link {{ request()->is("
                               admin/content-tags") || request()->is("admin/content-tags/*") ? "active" : "" }}">
                                <i class="fa-fw nav-icon fas fa-tags">

                                </i>
                                <p>
                                    {{ trans('cruds.contentTag.title') }}
                                </p>
                            </a>
                        </li>
                        @endcan
                        @can('content_page_access')
                        <li class="nav-item">
                            <a href="{{ route("admin.content-pages.index") }}" class="nav-link {{ request()->is("
                               admin/content-pages") || request()->is("admin/content-pages/*") ? "active" : "" }}">
                                <i class="fa-fw nav-icon fas fa-file">

                                </i>
                                <p>
                                    {{ trans('cruds.contentPage.title') }}
                                </p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('hero_access')
                <li class="nav-item">
                    <a href="/admin/heroes/1/edit" class="nav-link {{ request()->is("admin/heroes") ||
                        request()->is("admin/heroes/*") ? "active" : "" }}">
                        <i class="fa-fw nav-icon fab fa-slideshare">

                        </i>
                        <p>
                            {{ trans('cruds.hero.title') }}
                        </p>
                    </a>
                </li>
                @endcan
                @can('about_access')
                    <li class="nav-item">
                        <a href="/admin/abouts/1/edit" class="nav-link {{ request()->is("admin/abouts") || request()->is("admin/abouts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-building">

                            </i>
                            <p>
                                {{ trans('cruds.about.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('box_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.boxes.index") }}" class="nav-link {{ request()->is("admin/boxes") || request()->is("admin/boxes/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-boxes">

                            </i>
                            <p>
                                {{ trans('cruds.box.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('client_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.clients.index") }}" class="nav-link {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.client.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('feature_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.features.index") }}" class="nav-link {{ request()->is("admin/features") || request()->is("admin/features/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-check-double">

                            </i>
                            <p>
                                {{ trans('cruds.feature.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('service_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.services.index") }}" class="nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-tasks">

                            </i>
                            <p>
                                {{ trans('cruds.service.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('testimonial_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.testimonials.index") }}" class="nav-link {{ request()->is("admin/testimonials") || request()->is("admin/testimonials/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-comment-alt">

                            </i>
                            <p>
                                {{ trans('cruds.testimonial.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('team_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.teams.index") }}" class="nav-link {{ request()->is("admin/teams") || request()->is("admin/teams/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fab fa-teamspeak">

                            </i>
                            <p>
                                {{ trans('cruds.team.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('contact_access')
                    <li class="nav-item">
                        <a href="/admin/contacts/1/edit" class="nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-phone">

                            </i>
                            <p>
                                {{ trans('cruds.contact.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('message_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.messages.index") }}" class="nav-link {{ request()->is("admin/messages") || request()->is("admin/messages/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-comment">

                            </i>
                            <p>
                                {{ trans('cruds.message.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('nesletter_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.nesletters.index") }}" class="nav-link {{ request()->is("admin/nesletters") || request()->is("admin/nesletters/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-newspaper">

                            </i>
                            <p>
                                {{ trans('cruds.nesletter.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}"
                        href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key nav-icon">
                        </i>
                        <p>
                            {{ trans('global.change_password') }}
                        </p>
                    </a>
                </li>
                @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>