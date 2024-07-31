<!-- Admin Logo Part End -->
<section class="sidebar">

    <div id="left_menu_to_scroll">
        <ul class="sidebar-menu ps ps--active-x ps--active-y tree" data-widget="tree">

            <li class="parent-menu menu_assign_class menu__cidirp_1{{ request()->is('profile') ? ' active_sub_menu' : '' }}"
                data-menu__cid="irp_1">
                <a href="{{ route('profile') }}">
                    <i data-feather="home"></i>
                    <span class="match_bold">@lang('index.home')</span>
                </a>
            </li>
            @if (menuPermission('Dashboard'))
                <li class="parent-menu menu_assign_class menu__cidirp_1{{ request()->is('dashboard') ? ' active_sub_menu' : '' }}"
                    data-menu__cid="irp_1">
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="monitor"></i>
                        <span class="match_bold">@lang('index.dashboard')</span>
                    </a>
                </li>
            @endif
            @if (menuPermission('Setting'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('settings') || request()->is('white-label') || request()->is('taxes') || request()->is('units*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="settings"></i>
                        <span class="match_bold">@lang('index.settings')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('settings'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a href="{{ route('settings') }}">
                                    <i data-feather="file"></i> <span>@lang('index.company_profile')</span>
                                </a>
                            </li>
                        @endif
                        @if (routePermission('taxes'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a href="{{ route('taxes') }}"><i
                                        data-feather="file"></i><span>@lang('index.tax_settings')</span></a>
                            </li>
                        @endif
                        @if (routePermission('units.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('units.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_unit')</span></a></li>
                        @endif
                        @if (routePermission('units.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('units.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_unit')</span></a></li>
                        @endif
                        @if (routePermission('white-label'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('white-label') }}"><i
                                        data-feather="file"></i><span>@lang('index.white_label')</span></a></li>
                        @endif
                        @if (routePermission('mail-settings'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('settings.mail.index') }}"><i
                                        data-feather="file"></i><span>@lang('index.mail_settings')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Accounts'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('accounts*') || request()->is('deposit*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="credit-card"></i>
                        <span class="match_bold">@lang('index.accounts')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('account.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('accounts.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_account')</span></a></li>
                        @endif
                        @if (routePermission('account.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('accounts.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_account')</span></a></li>
                        @endif
                        @if (routePermission('deposit.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('deposit.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_deposit_or_withdraw')</span></a></li>
                        @endif
                        @if (routePermission('deposit.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('deposit.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_deposit_or_withdraw')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Role'))
                <li class="parent-menu treeview menu__cidirp_10{{ request()->is('role*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-lock">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                        </svg>
                        <span class="match_bold">@lang('index.role')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('role.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('role.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_role')</span></a></li>
                        @endif
                        @if (routePermission('role.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('role.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_role')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('User'))
                <li class="parent-menu treeview menu__cidirp_10{{ request()->is('user*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="users"></i>
                        <span class="match_bold">@lang('index.user')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('user.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('user.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_user')</span></a></li>
                        @endif
                        @if (routePermission('user.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('user.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_user')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Raw Materials'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('rmcategories*') || request()->is('rawmaterials*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="box"></i>
                        <span class="match_bold">@lang('index.raw_materials')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('rmcategory.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rmcategories.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_rm_category')</span></a></li>
                        @endif
                        @if (routePermission('rmcategory.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rmcategories.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.rm_category')</span></a></li>
                        @endif
                        @if (routePermission('rmcategory.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rawmaterials.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_raw_material')</span></a></li>
                        @endif
                        @if (routePermission('rmcategory.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rawmaterials.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_raw_material')</span></a></li>
                        @endif
                        @if (routePermission('price-history'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('price-history') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.price_history')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Non Inventory Items'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('noninventoryitems*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="list"></i>
                        <span class="match_bold">@lang('index.non_inventory_items')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('noi.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('noninventoryitems.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_non_inventory_item')</span></a></li>
                        @endif
                        @if (routePermission('noi.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('noninventoryitems.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_non_inventory_item')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Purchase'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('suppliers*') || request()->is('rawmaterialpurchases*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="shopping-cart"></i>
                        <span class="match_bold">@lang('index.purchase')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('supplier.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('suppliers.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_supplier')</span></a></li>
                        @endif
                        @if (routePermission('supplier.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('suppliers.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_supplier')</span></a></li>
                        @endif
                        @if (routePermission('purchase.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rawmaterialpurchases.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_purchase')</span></a></li>
                        @endif
                        @if (routePermission('purchase.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rawmaterialpurchases.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_purchase')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('RM Stocks'))
                <li class="parent-menu treeview menu_assign_class menu__cidirp_1{{ request()->is('getRMStock*') || request()->is('stockAdjust*') ? ' active_sub_menu' : '' }}"
                    data-menu__cid="irp_1">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-server">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                        <span class="match_bold">@lang('index.rm_stocks')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('rm.stock'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('getRMStock') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.rm_stocks')</span></a></li>
                        @endif
                        @if (routePermission('stock-adjustment'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('stockAdjust') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.stock_adjustment')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('RM Wastes'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('rmwastes*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                        <span class="match_bold">@lang('index.rm_waste')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('rmwaste.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rmwastes.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_rm_waste')</span></a></li>
                        @endif
                        @if (routePermission('rmwaste.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rmwastes.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_rm_waste')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Product'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('fpcategories*') || request()->is('productionstages*') || request()->is('finishedproducts*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="shopping-bag"></i>
                        <span class="match_bold">@lang('index.products')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('productcategory.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('fpcategories.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_product_category')</span></a></li>
                        @endif
                        @if (routePermission('productcategory.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('fpcategories.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_product_category')</span></a></li>
                        @endif
                        @if (routePermission('productionstage.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('productionstages.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_production_stage')</span></a></li>
                        @endif
                        @if (routePermission('productionstage.list'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('productionstages.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_production_stage')</span></a></li>
                        @endif
                        @if (routePermission('product.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('finishedproducts.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_product')</span></a></li>
                        @endif
                        @if (routePermission('product.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('finishedproducts.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_product')</span></a></li>
                        @endif
                        @if (routePermission('price-history'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('product.price.history') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.price_history')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Product Stock'))
                <li class="parent-menu menu_assign_class menu__cidirp_1{{ request()->is('product-stock*') ? ' active_sub_menu' : '' }}"
                    data-menu__cid="irp_1">
                    <a href="{{ route('product-stock') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-server">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                        <span class="match_bold">@lang('index.product_stocks')</span>
                    </a>
                </li>
            @endif
            @if (menuPermission('Product Wastes'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('product-wastes*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                        <span class="match_bold">@lang('index.product_waste')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('productwaste.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('product-wastes.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_product_waste')</span></a></li>
                        @endif
                        @if (routePermission('productwaste.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('product-wastes.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_product_waste')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Manufacture'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('manufactures*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <i data-feather="bar-chart"></i>
                        <span class="match_bold">@lang('index.manufacture')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('manufacture.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('manufactures.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_manufacture')</span></a></li>
                        @endif
                        @if (routePermission('manufacture.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('manufactures.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.manufacture_list')</span></a></li>
                        @endif
                        @if (routePermission('production-loss.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('production-loss') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_production_loss')</span></a></li>
                        @endif
                        @if (routePermission('production-loss.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('production-loss') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.production_loss')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Customers'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('customers*') || request()->is('customer-orders*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-truck">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                        <span class="match_bold">@lang('index.customer')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('customer.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customers.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_customer')</span></a></li>
                        @endif
                        @if (routePermission('customer.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customers.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_customer')</span></a></li>
                        @endif
                        @if (routePermission('order.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customer-orders.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.order_list')</span></a></li>
                        @endif
                        @if (routePermission('order.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customer-orders.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_order')</span></a></li>
                        @endif
                        @if (routePermission('order-status'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customer-order-status') }}"><i
                                        data-feather="file"></i><span>@lang('index.order_status')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Sales'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('sales*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span class="match_bold">@lang('index.sale')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('sale.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('sales.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_sale')</span></a></li>
                        @endif
                        @if (routePermission('sale.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('sales.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.sale_list')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Quotations'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('quotation*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span class="match_bold">@lang('index.quotions')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('quotations.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('quotation.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_quotion')</span></a></li>
                        @endif
                        @if (routePermission('quotations.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('quotation.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.quotion_list')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Attendance'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('attendance*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-clock">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span class="match_bold">@lang('index.attendance')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('attendance.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('attendance.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_attendance')</span></a></li>
                        @endif
                        @if (routePermission('attendance.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('attendance.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.attendance_list')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Expenses'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('expense*') || request()->is('expense-category*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span class="match_bold">@lang('index.expense')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('expensecategory.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('expense-category.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_expense_category')</span></a></li>
                        @endif
                        @if (routePermission('expensecategory.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('expense-category.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.expense_category_list')</span></a></li>
                        @endif
                        @if (routePermission('expense.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('expense.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_expense')</span></a></li>
                        @endif
                        @if (routePermission('expense.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('expense.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.expense_list')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Supplier Payments'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('supplier-payment*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span class="match_bold">@lang('index.supplier_payment')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('sp.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('supplier-payment.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_supplier_payment')</span></a></li>
                        @endif
                        @if (routePermission('sp.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('supplier-payment.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.supplier_payment_list')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Customer Receives'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('customer-payment*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span class="match_bold">@lang('index.customer_receive')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('cd.create'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customer-payment.create') }}"><i
                                        data-feather="file-plus"></i><span>@lang('index.add_customer_receive')</span></a></li>
                        @endif
                        @if (routePermission('cd.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customer-payment.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.customer_receive_list')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Payroll'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('payroll*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span class="match_bold">@lang('index.payroll')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('payroll.index'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('payroll.index') }}"><i
                                        data-feather="file-text"></i><span>@lang('index.list_payroll')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            @if (menuPermission('Reports'))
                <li
                    class="parent-menu treeview menu__cidirp_10{{ request()->is('rm-purchase-report*') || request()->is('rm-item-purchase-report*') || request()->is('rm-stock-report*') || request()->is('supplier-due-report*') || request()->is('supplier-ledger*') || request()->is('production-report*') || request()->is('fp-production-report*') || request()->is('balance-sheet*') || request()->is('trial-balance*') || request()->is('fp-sale-report*') || request()->is('fp-item-sale-report*') || request()->is('customer-due-report*') || request()->is('customer-ledger*') || request()->is('profit-loss-report*') || request()->is('product-profit-report*') || request()->is('attendance-report*') || request()->is('expense-report*') || request()->is('salary-report*') || request()->is('rmwaste-report*') || request()->is('fpwaste-report*') ? ' active_sub_menu' : '' }}">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span class="match_bold">@lang('index.report')</span>
                    </a>
                    <div class="triangle"></div>
                    <ul class="treeview-menu">
                        @if (routePermission('rmpurchase.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rm-purchase-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.rm_purchase_report')</span></a></li>
                        @endif
                        @if (routePermission('rmpurchaseitem.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rm-item-purchase-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.rm_item_purchase_report')</span></a></li>
                        @endif
                        @if (routePermission('rmstock.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rm-stock-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.rm_stock_report')</span></a></li>
                        @endif
                        @if (routePermission('supplierdue.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('supplier-due-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.supplier_due_report')</span></a></li>
                        @endif
                        @if (routePermission('supplierledger.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('supplier-ledger') }}"><i
                                        data-feather="file"></i><span>@lang('index.supplier_ledger')</span></a></li>
                        @endif
                        @if (routePermission('production.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('production-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.production_report')</span></a></li>
                        @endif
                        @if (routePermission('fpp.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('fp-production-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.fp_production_report')</span></a></li>
                        @endif
                        @if (routePermission('balancesheet'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('balance-sheet') }}"><i
                                        data-feather="file"></i><span>@lang('index.balance_sheet')</span></a></li>
                        @endif
                        @if (routePermission('trialbalance'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('trial-balance') }}"><i
                                        data-feather="file"></i><span>@lang('index.trial_balance')</span></a></li>
                        @endif
                        @if (routePermission('fpsale.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('fp-sale-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.fp_sale_report')</span></a></li>
                        @endif
                        @if (routePermission('fpitemsale.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('fp-item-sale-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.fp_item_sale_report')</span></a></li>
                        @endif
                        @if (routePermission('customerdue.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customer-due-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.customer_due_report')</span></a></li>
                        @endif
                        @if (routePermission('customerledger'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('customer-ledger') }}"><i
                                        data-feather="file"></i><span>@lang('index.customer_ledger')</span></a></li>
                        @endif
                        @if (routePermission('profit-loss'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('profit-loss-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.profit_loss_report')</span></a></li>
                        @endif
                        @if (routePermission('production-profit.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('product-profit-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.product_profit_report')</span></a></li>
                        @endif
                        @if (routePermission('attandance.report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('attendance-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.attendance_report')</span></a></li>
                        @endif
                        @if (routePermission('expense-report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('expense-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.expense_report')</span></a></li>
                        @endif
                        @if (routePermission('salary-report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('salary-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.salary_report')</span></a></li>
                        @endif
                        @if (routePermission('rmwaste-report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('rmwaste-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.rmwaste_report')</span></a></li>
                        @endif
                        @if (routePermission('productwaste-report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('fpwaste-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.product_waste_report')</span></a></li>
                        @endif
                        @if (routePermission('abcanalysis-report'))
                            <li class="menu_assign_class" data-menu__cid="irp_10"><a
                                    href="{{ route('abc-analysis-report') }}"><i
                                        data-feather="file"></i><span>@lang('index.abc_analysis_report')</span></a></li>
                        @endif
                    </ul>
                </li>
            @endif
            <div class="ps__rail-x">
                <div class="ps__thumb-x" tabindex="0"></div>
            </div>
            <div class="ps__rail-y">
                <div class="ps__thumb-y" tabindex="0"></div>
            </div>
        </ul>
    </div>
</section>
