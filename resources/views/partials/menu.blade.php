<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
{{--                        {{ trans('cruds.userManagement.title') }}--}}
                        User manager
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
{{--                                    {{ trans('cruds.permission.title') }}--}}
                                    Ruxsatlar
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
{{--                                    {{ trans('cruds.role.title') }}--}}
                                    Rollar
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
{{--                                    {{ trans('cruds.user.title') }}--}}
                                    Foydalanuvchilar
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('expense_category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.expense-categories.index") }}" class="nav-link {{ request()->is('admin/expense-categories') || request()->is('admin/expense-categories/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-list nav-icon">

                        </i>
{{--                        {{ trans('cruds.expenseCategory.title') }}--}}
                        Xarajat toifalari
                    </a>
                </li>
            @endcan
            @can('income_category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.income-categories.index") }}" class="nav-link {{ request()->is('admin/income-categories') || request()->is('admin/income-categories/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-list nav-icon">

                        </i>
{{--                        {{ trans('cruds.incomeCategory.title') }}--}}
                        Daromad toifalari
                    </a>
                </li>
            @endcan
            @can('expense_access')
                <li class="nav-item">
                    <a href="{{ route("admin.expenses.index") }}" class="nav-link {{ request()->is('admin/expenses') || request()->is('admin/expenses/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-arrow-circle-right nav-icon">

                        </i>
{{--                        {{ trans('cruds.expense.title') }}--}}
                        Xarajatlar
                    </a>
                </li>
            @endcan
            @can('income_access')
                <li class="nav-item">
                    <a href="{{ route("admin.incomes.index") }}" class="nav-link {{ request()->is('admin/incomes') || request()->is('admin/incomes/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-arrow-circle-right nav-icon">

                        </i>
{{--                        {{ trans('cruds.income.title') }}--}}
                        Daromadlar
                    </a>
                </li>
            @endcan
            @can('expense_report_access')
                <li class="nav-item">
                    <a href="{{ route("admin.expense-reports.index") }}" class="nav-link {{ request()->is('admin/expense-reports') || request()->is('admin/expense-reports/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-chart-line nav-icon">

                        </i>
{{--                        {{ trans('cruds.expenseReport.title') }}--}}
                        Oylik hisobot
                    </a>
                </li>
            @endcan

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
