<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           <img src="../../dist/img/user4-128x128.jpg" onerror="this.src='../../dist/img/user4-128x128.jpg'" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->username}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{url('data-capture')}}"><i class="fa fa-pencil"></i> <span>Data Capture</span></a></li>
             <li><a href="{{url('data-view')}}"><i class="fa fa-map"></i> <span>Tracking</span></a></li>
        {{--      <li><a href="{{url('')}}"><i class="fa fa-dashboard"></i> <span>Invoicing</span></a></li> --}}

        <li class="treeview">
          <a href="#">
            <i class="fa fa-flag"></i> <span>Data Module </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{url('pump_report')}}"><i class=" fa fa-gears text-orange"></i> Capturer Queue</a></li> 
            
        
              
             {{--   <li><a href="{{url('prices')}}"><i class=" fa fa-gears text-green"></i> Fuel Prices</a></li>  --}}
          </ul>
        </li> 

         <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Invoice Module </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{url('pump_report')}}"><i class=" fa fa-gears text-orange"></i> Report</a></li> 
        
              
             {{--   <li><a href="{{url('prices')}}"><i class=" fa fa-gears text-green"></i> Fuel Prices</a></li>  --}}
          </ul>
        </li> 
       

         <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Reports </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
           <!--  <li><a href="{{url('pump_report')}}"><i class=" fa fa-gears text-orange"></i> Pump Report</a></li>  -->
        
              
             {{--   <li><a href="{{url('prices')}}"><i class=" fa fa-gears text-green"></i> Fuel Prices</a></li>  --}}
          </ul>
        </li> 
       
          <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
           
               <li><a href="{{url('admin')}}"><i class=" fa fa-gears text-orange"></i> Staff Management</a></li> 
               <li><a href="{{url('customers')}}"><i class=" fa fa-gears text-green"></i> Customers</a></li> 
          </ul>
        </li>

         
        
          </ul>
         </section>
    <!-- /.sidebar -->
  </aside>
