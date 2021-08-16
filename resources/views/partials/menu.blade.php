<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('area_professor_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-chalkboard-teacher">

                        </i>
                        <span>{{ trans('cruds.areaProfessor.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('event_access')
                            <li class="{{ request()->is("admin/events") || request()->is("admin/events/*") ? "active" : "" }}">
                                <a href="{{ route("admin.events.index") }}">
                                    <i class="fa-fw fas fa-bullhorn">

                                    </i>
                                    <span>{{ trans('cruds.event.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('post_access')
                            <li class="{{ request()->is("admin/posts") || request()->is("admin/posts/*") ? "active" : "" }}">
                                <a href="{{ route("admin.posts.index") }}">
                                    <i class="fa-fw fas fa-comment">

                                    </i>
                                    <span>{{ trans('cruds.post.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('speaker_access')
                            <li class="{{ request()->is("admin/speakers") || request()->is("admin/speakers/*") ? "active" : "" }}">
                                <a href="{{ route("admin.speakers.index") }}">
                                    <i class="fa-fw fas fa-user-alt">

                                    </i>
                                    <span>{{ trans('cruds.speaker.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('promotion_access')
                            <li class="{{ request()->is("admin/promotions") || request()->is("admin/promotions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.promotions.index") }}">
                                    <i class="fa-fw far fa-address-card">

                                    </i>
                                    <span>{{ trans('cruds.promotion.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('publish_call_access')
                            <li class="{{ request()->is("admin/publish-calls") || request()->is("admin/publish-calls/*") ? "active" : "" }}">
                                <a href="{{ route("admin.publish-calls.index") }}">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>Chamadas de Publicações</span>

                                </a>
                            </li>
                        @endcan
                        @can('event_call_access')
                            <li class="{{ request()->is("admin/event-calls") || request()->is("admin/event-calls/*") ? "active" : "" }}">
                                <a href="{{ route("admin.event-calls.index") }}">
                                    <i class="fa-fw fas fa-bullhorn">

                                    </i>
                                    <span>Chamadas de Evento</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('area_estudante_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-graduation-cap">

                        </i>
                        <span>{{ trans('cruds.areaEstudante.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('student_profile_access')
                            <li class="{{ request()->is("admin/student-profiles") || request()->is("admin/student-profiles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.student-profiles.index") }}">
                                    <i class="fa-fw fas fa-user-circle">

                                    </i>
                                    <span>{{ trans('cruds.studentProfile.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('area_empresa_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-industry">

                        </i>
                        <span>{{ trans('cruds.areaEmpresa.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('company_access')
                            <li class="{{ request()->is("admin/companies") || request()->is("admin/companies/*") ? "active" : "" }}">
                                <a href="{{ route("admin.companies.index") }}">
                                    <i class="fa-fw fas fa-building">

                                    </i>
                                    <span>{{ trans('cruds.company.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('job_access')
                            <li class="{{ request()->is("admin/jobs") || request()->is("admin/jobs/*") ? "active" : "" }}">
                                <a href="{{ route("admin.jobs.index") }}">
                                    <i class="fa-fw fas fa-cogs">

                                    </i>
                                    <span>{{ trans('cruds.job.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('cadastros_base_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-edit">

                        </i>
                        <span>{{ trans('cruds.cadastrosBase.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('segment_access')
                            <li class="{{ request()->is("admin/segments") || request()->is("admin/segments/*") ? "active" : "" }}">
                                <a href="{{ route("admin.segments.index") }}">
                                    <i class="fa-fw fab fa-audible">

                                    </i>
                                    <span>{{ trans('cruds.segment.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('category_access')
                            <li class="{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.categories.index") }}">
                                    <i class="fa-fw fas fa-list">

                                    </i>
                                    <span>{{ trans('cruds.category.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('country_access')
                            <li class="{{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "active" : "" }}">
                                <a href="{{ route("admin.countries.index") }}">
                                    <i class="fa-fw fas fa-flag">

                                    </i>
                                    <span>{{ trans('cruds.country.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('external_lik_access')
                            <li class="{{ request()->is("admin/external-liks") || request()->is("admin/external-liks/*") ? "active" : "" }}">
                                <a href="{{ route("admin.external-liks.index") }}">
                                    <i class="fa-fw fas fa-external-link-alt">

                                    </i>
                                    <span>{{ trans('cruds.externalLik.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('local_advertisement_access')
                            <li class="{{ request()->is("admin/local-advertisements") || request()->is("admin/local-advertisements/*") ? "active" : "" }}">
                                <a href="{{ route("admin.local-advertisements.index") }}">
                                    <i class="fa-fw fab fa-adversal">

                                    </i>
                                    <span>Locais de Anuncios</span>

                                </a>
                            </li>
                        @endcan
                        @can('contest_access')
                            <li class="{{ request()->is("admin/contests") || request()->is("admin/contests/*") ? "active" : "" }}">
                                <a href="{{ route("admin.contests.index") }}">
                                    <i class="fa-fw fas fa-marker">

                                    </i>
                                    <span>{{ trans('cruds.contest.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('home_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-home">

                        </i>
                        <span>Home</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('headline_access')
                            <li class="{{ request()->is("admin/headlines") || request()->is("admin/headlines/*") ? "active" : "" }}">
                                <a href="{{ route("admin.headlines.index") }}">                                    
                                    <span>{{ trans('cruds.headline.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('advert_access')
                            <li class="{{ request()->is("admin/adverts") || request()->is("admin/adverts/*") ? "active" : "" }}">
                                <a href="{{ route("admin.adverts.index") }}">                                    
                                    <span>Anúncios</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                        <a href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>