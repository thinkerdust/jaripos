<div class="main-nav">
     <!-- Sidebar Logo -->
     <div class="logo-box">
          <a href="{{ route('dashboard') }}" class="logo-dark">
               <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-dark.png" class="logo-lg" alt="logo dark">
          </a>

          <a href="{{ route('dashboard') }}" class="logo-light">
               <img src="/images/logo-sm.png" class="logo-sm" alt="logo sm">
               <img src="/images/logo-white.png" class="logo-lg" alt="logo light">
          </a>
     </div>

     <div class="h-100" data-simplebar>

          <ul class="navbar-nav" id="navbar-nav">

               <!-- <li class="menu-title">Menu</li> -->

               <li class="menu-item pt-2">
                    <a class="menu-link" href="{{ route('dashboard') }}">
                         <span class="nav-icon">
                              <i class="ri-dashboard-2-line"></i>
                         </span>
                         <span class="nav-text"> Dashboard </span>
                         <span class="badge bg-success badge-pill text-end">9+</span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'orders']) }}">
                         <span class="nav-icon">
                              <i class="ri-shopping-cart-line"></i>
                         </span>
                         <span class="nav-text"> Orders </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link menu-arrow" href="#sidebarProduct" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProduct">
                         <span class="nav-icon">
                              <i class="ri-shopping-basket-2-line"></i>
                         </span>
                         <span class="nav-text"> Products </span>
                    </a>
                    <div class="collapse" id="sidebarProduct">
                         <ul class="sub-menu-nav">
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['product', 'listing']) }}">Listing</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['product', 'add-edit']) }}">Add/Edit Product</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="menu-item">
                    <a class="menu-link menu-arrow" href="#sidebarCategories" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategories">
                         <span class="nav-icon">
                              <i class="ri-equalizer-2-line"></i>
                         </span>
                         <span class="nav-text"> Categories </span>
                    </a>
                    <div class="collapse" id="sidebarCategories">
                         <ul class="sub-menu-nav">
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['categories', 'listing']) }}">Listing</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['categories', 'add-edit']) }}">Add/Edit Categories</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'customers']) }}">
                         <span class="nav-icon">
                              <i class="ri-group-2-line"></i>
                         </span>
                         <span class="nav-text"> Customers </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'menu-cards']) }}">
                         <span class="nav-icon">
                              <i class="ri-restaurant-line"></i>
                         </span>
                         <span class="nav-text"> Menu Cards </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'pos']) }}">
                         <span class="nav-icon">
                              <i class="ri-mac-line"></i>
                         </span>
                         <span class="nav-text"> POS </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'reports']) }}">
                         <span class="nav-icon">
                              <i class="ri-bar-chart-box-ai-line"></i>
                         </span>
                         <span class="nav-text"> Reports </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'riders']) }}">
                         <span class="nav-icon">
                              <i class="ri-motorbike-line"></i>
                         </span>
                         <span class="nav-text"> Riders </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'offers']) }}">
                         <span class="nav-icon">
                              <i class="ri-discount-percent-line"></i>
                         </span>
                         <span class="nav-text"> Offers </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'locations']) }}">
                         <span class="nav-icon">
                              <i class="ri-map-pin-range-line"></i>
                         </span>
                         <span class="nav-text"> Locations </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'media']) }}">
                         <span class="nav-icon">
                              <i class="ri-image-circle-ai-line"></i>
                         </span>
                         <span class="nav-text"> Media </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'settings']) }}">
                         <span class="nav-icon">
                              <i class="ri-store-3-line"></i>
                         </span>
                         <span class="nav-text"> Store Settings </span>
                    </a>
               </li>

                <li class="menu-item">
                     <a class="menu-link menu-arrow" href="#sidebarUserManagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUserManagement">
                          <span class="nav-icon">
                               <i class="ri-user-settings-line"></i>
                          </span>
                          <span class="nav-text"> User Management </span>
                     </a>
                     <div class="collapse" id="sidebarUserManagement">
                          <ul class="sub-menu-nav">
                               <li class="sub-menu-item">
                                    <a class="sub-menu-link" href="{{ route('user-management.roles.index') }}">Roles</a>
                               </li>
                               <li class="sub-menu-item">
                                    <a class="sub-menu-link" href="{{ route('user-management.menus.index') }}">Menus</a>
                               </li>
                               <li class="sub-menu-item">
                                    <a class="sub-menu-link" href="{{ route('user-management.users.index') }}">Users</a>
                               </li>
                          </ul>
                     </div>
                </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'todo']) }}">
                         <span class="nav-icon">
                              <i class="ri-task-line"></i>
                         </span>
                         <span class="nav-text"> Todo </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('second', ['apps', 'manage-apps']) }}">
                         <span class="nav-icon">
                              <i class="ri-apps-2-ai-line"></i>
                         </span>
                         <span class="nav-text"> Manage Apps </span>
                    </a>
               </li>

               <li class="menu-item">
                    <a class="menu-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                         <span class="nav-icon">
                              <i class="ri-file-list-3-line"></i>
                         </span>
                         <span class="nav-text"> Invoices </span>
                    </a>
                    <div class="collapse" id="sidebarInvoice">
                         <ul class="sub-menu-nav">
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['invoice', 'invoices']) }}">Invoices</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['invoice', 'details']) }}">Invoice Details</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="menu-item">
                    <a class="menu-link menu-arrow" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                         <span class="nav-icon">
                              <i class="ri-pages-line"></i>
                         </span>
                         <span class="nav-text"> Pages </span>
                    </a>
                    <div class="collapse" id="sidebarPages">
                         <ul class="sub-menu-nav">
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'starter']) }}">Welcome</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'profile']) }}">Profile</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'faqs']) }}">FAQs</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'gallery']) }}">Gallery</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'comingsoon']) }}">Coming Soon</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'timeline']) }}">Timeline</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'pricing']) }}">Pricing</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', 'maintenance']) }}">Maintenance</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['pages', '404']) }}">404 Error</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="menu-item">
                    <a class="menu-link menu-arrow" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                         <span class="nav-icon">
                              <i class="ri-shield-user-line"></i>
                         </span>
                         <span class="nav-text"> Authentication </span>
                    </a>
                    <div class="collapse" id="sidebarAuthentication">
                         <ul class="sub-menu-nav">
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['auth', 'signin']) }}">Sign In</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['auth', 'signup']) }}">Sign Up</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['auth', 'password']) }}">Reset Password</a>
                              </li>
                              <li class="sub-menu-item">
                                   <a class="sub-menu-link" href="{{ route('second', ['auth', 'lock-screen']) }}">Lock Screen</a>
                              </li>
                         </ul>
                    </div>
               </li>

               <li class="menu-title">❋ UI Components ❋</li>

               <li class="menu-item">
                    <a class="menu-link" href="{{ route('third', ['components', 'base-ui', 'accordion']) }}">
                         <span class="nav-icon">
                              <i class="ri-shapes-line"></i>
                         </span>
                         <span class="nav-text"> Components </span>
                    </a>
               </li>
          </ul>
     </div>
</div>