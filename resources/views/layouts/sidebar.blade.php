<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- <img src="/assets/images/gssg_logo.jpg" style="width: 50px;" alt=""> --}}
                <i class='bx bxs-building-house ' style="font-size: 2em"></i>
            </span>
            <span class="app-brand-text demo menu-text text-primary text-uppercase text-center fw-bold ms-2">
                {{-- <img src="/assets/images/gssg_sm.jpg" style="width: 150px" alt=""> --}}
                CAFM
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ ($page['name'] == "Dashboard") ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                <div class="text-truncate" data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ ($page['name'] == "Reports") ? 'active' : '' }}">
            <a href="/reports" class="menu-link">
                <i class="menu-icon tf-icons bx bx-pie-chart-alt-2"></i>
                <div class="text-truncate" data-i18n="Reports">Reports</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Hierarchy</span>
        </li>
        <li class="menu-item {{ ($page['name'] == "Locations") ? 'active' : '' }}">
            <a href="/locations" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map"></i>
                <div class="text-truncate" data-i18n="Location">Location</div>
            </a>
        </li>
        <li class="menu-item {{ ($page['name'] == "Properties") ? 'active' : '' }}">
            <a href="/properties" class="menu-link">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div class="text-truncate" data-i18n="Properties">Properties</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Management</span>
        </li>
        <li class="menu-item {{ ($page['name'] == "Work Orders") ? 'active' : '' }}">
            <a href="/workorders" class="menu-link">
                <i class="menu-icon tf-icons bx bx-briefcase"></i>
                <div class="text-truncate" data-i18n="Work Orders">Work Orders</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">LIBRARIES</span>
        </li>
        <li class="menu-item {{ ($page['name'] == "Assets") ? 'active' : '' }}">
            <a href="/assets" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div class="text-truncate" data-i18n="Assets">Assets</div>
            </a>
        </li>
        <li class="menu-item {{ ($page['name'] == "Service Providers") ? 'active' : '' }}">
            <a href="/service-providers" class="menu-link">
                <i class="menu-icon tf-icons bx bx-hard-hat"></i>
                <div class="text-truncate" data-i18n="Service Providers">Service Providers</div>
            </a>
        </li>
        <li class="menu-item {{ ($page['name'] == "Technicians") ? 'active' : '' }}">
            <a href="/technicians" class="menu-link">
                <i class="menu-icon tf-icons bx bx-wrench"></i>
                <div class="text-truncate" data-i18n="Technicians">Technicians</div>
            </a>
        </li>

        <li class="menu-item {{ ($page['name'] == "Inventories" || $page['name'] == "Inventory Categories" || $page['name'] == "Inventory Types" || $page['name'] == "Inventory Suppliers") ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div class="text-truncate" data-i18n="Inventories">Inventories</div>
            </a>
            <ul class="menu-sub">   
                <li class="menu-item {{ ($page['name'] == "Inventory Suppliers") ? 'active' : '' }}">
                    <a href="/inventory-suppliers" class="menu-link">
                        <div class="text-truncate" data-i18n="Suppliers">Suppliers</div>
                    </a>
                </li>

                <li class="menu-item {{ ($page['name'] == "Inventory Categories") ? 'active' : '' }}">
                    <a href="/inventory-categories" class="menu-link">
                        <div class="text-truncate" data-i18n="Categories">Categories</div>
                    </a>
                </li>

                <li class="menu-item {{ ($page['name'] == "Inventory Types" || $page['name'] == "Inventories") ? 'active' : '' }}">
                    <a href="/inventory-types" class="menu-link">
                        <div class="text-truncate" data-i18n="Types">Types</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ ($page['name'] == "Requirements") ? 'active' : '' }}">
            <a href="/requirements" class="menu-link">
                <i class="menu-icon tf-icons bx bx-notepad"></i>
                <div class="text-truncate" data-i18n="Requirements">Requirements</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
