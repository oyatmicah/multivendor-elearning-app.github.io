<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}"><i class="fa fa-list"></i>
        <p>Course Category</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}"><i class="fa fa-book"></i>
        <p>Courses</p>
    </a>
</li>


<li class="nav-item">
      <a href="{{ route('payments.index') }}"
         class="nav-link {{ Request::is('payments*') ? 'active' : '' }}"><i class="fa">₦</i>
          <p>Payments</p>
      </a>
  </li>

<!-- Moderator 

@if(Auth::check() AND Auth::user()->role_id < 4)

  <li class="nav-item">
      <a href="{{ route('courses.index') }}"
         class="nav-link {{ Request::is('courses*') ? 'active' : '' }}"><i class="fa fa-edit"></i>
          <p>My Courses</p>
      </a>
  </li>

@endif
-->

<!-- Admin section -->

@if(Auth::check() AND Auth::user()->role_id < 3)

  

<li class="nav-item">
    <a href="{{ route('courseUsers.index') }}"
       class="nav-link {{ Request::is('courseUsers*') ? 'active' : '' }}"><i class="fa fa-thumbs-up"></i>
        <p>Subscriptions</p>
    </a>
</li>


  <li class="nav-item">
      <a href="{{ route('comments.index') }}"
         class="nav-link {{ Request::is('comments*') ? 'active' : '' }}"><i class="fa fa-edit"></i>
          <p>Comments</p>
      </a>
  </li>

  <li class="nav-item">
      <a href="{{ route('items.index') }}"
         class="nav-link {{ Request::is('items*') ? 'active' : '' }}"><i class="fa fa-list"></i>
          <p>Items</p>
      </a>
  </li>


  <li class="nav-item">
      <a href="{{ route('users.index') }}"
         class="nav-link {{ Request::is('users*') ? 'active' : '' }}"><i class="fa fa-user"></i>
          <p>Users</p>
      </a>
  </li>

    
<li class="nav-item">
    <a href="{{ route('coupons.index') }}"
       class="nav-link {{ Request::is('coupons*') ? 'active' : '' }}"><i class="fa fa-image"></i>
        <p>Coupons</p>
    </a>
</li>

  <li class="nav-item">
      <a href="{{ route('views.index') }}"
         class="nav-link {{ Request::is('views*') ? 'active' : '' }}"><i class="fa fa-eye"></i>
          <p>Views</p>
      </a>
  </li>


  <li class="nav-item">
      <a href="{{ route('roles.index') }}"
         class="nav-link {{ Request::is('roles*') ? 'active' : '' }}"><i class="fa fa-users"></i>
          <p>Roles</p>
      </a>
  </li>
@endif





