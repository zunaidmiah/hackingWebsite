<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main Menu</span>
                </li>
                <li class="active"> 
                    <a href="#"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-address-card"></i> <span> Card-Details</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ url('card-list') }}">Card List</a></li>
                        <li><a href="{{ url('addcards') }}">Card Add</a></li>
                        
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Bank Account</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ url('bank-list') }}">Bank Account List</a></li>
                        <li><a href="{{ url('add-bank-details') }}">Add Bank Account </a></li>
                        
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"> <i class="fab fa-paypal"></i> <span> Paypal</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ url('paypal-list') }}">Paypal List</a></li>
                        <li><a href="{{ url('add-paypal-details') }}">Paypal Add</a></li>
                     
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"> <i class="fab fa-cc-diners-club"></i>s <span> Exploit</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ url('exploit-list') }}">Explit List</a></li>
                        <li><a href="{{ url('add-exploit-details') }}">Exploit Add</a></li>
                       
                    </ul>
                </li>
                <li  class="submenu">
                    <a href="#"> <i class="fab fa-cc-diners-club"></i>s <span> See Orders</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <a href="{{ url('show-orders-list') }}"><i class="fas fa-sign-out-alt"></i> <span> See New Orders</span></a>
                        <a href="{{ url('show-orders') }}"><i class="fas fa-sign-out-alt"></i> <span> Success Orders</span></a>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('show-spam-card-list') }}"><i class="fas fa-sign-out-alt"></i> <span> See Spam card</span></a>
                </li>
                <li>
                    <a href="/adminLogout"><i class="fas fa-sign-out-alt"></i> <span> Logout</span></a>
                </li>
                  </ul>
                </li>
               
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->



