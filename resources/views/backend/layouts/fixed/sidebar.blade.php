<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('category.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('item.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Assets</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('stock.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Stocks</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('employee.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Employees</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('distribute.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Distributes</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('vendor.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Vendors</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('purchase.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Purchaes</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{ route('purchase-detail.list') }}">
          <i class="bi bi-menu-button-wide"></i><span>Purchaes Details</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{route('report')}}">
          <i class="bi bi-menu-button-wide"></i><span>Reports</span>
        </a>
      </li>

      </ul>
</aside>