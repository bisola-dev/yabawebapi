<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from thememinister.com/crm/view-tsaction.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:46 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Develop department profile</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}"rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="{{asset('assets/plugins/lobipanel/lobipanel.min.css')}}"rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="{{asset('assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="{{asset('assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="{{asset('assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
      <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="{{asset('assets/dist/css/stylecrm.css')}}"rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
           
    <!--preloader-->
      
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index-2.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="assets/dist/img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                  <button type="button" class="close">×</button>
                  <form>
                     <input type="search" value="" placeholder="type keyword(s) here" />
                     <button type="submit" class="btn btn-add">Search...</button>
                  </form>
               </div>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                        <i class="pe-7s-cart"></i>
                        <span class="label label-primary">5</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li >
                                    <!-- start Orders -->
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/basketball-jersey.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>polo shirt</h4>
                                       <p><strong>total item:</strong> 21
                                       </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shirt.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Kits</h4>
                                       <p><strong>total item:</strong> 11
                                       </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/football.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Football</h4>
                                       <p><strong>total item:</strong> 16
                                       </p>
                                    </a>
                                 </li>
                                 <li class="nav-list">
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shoe.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Sports sheos</h4>
                                       <p><strong>total item:</strong> 10
                                       </p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Messages -->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- start message -->
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Ronaldo</h4>
                                       <p>Please oreder 10 pices of kits..</p>
                                       <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Leo messi</h4>
                                       <p>Please oreder 10 pices of Sheos..</p>
                                       <span class="badge badge-info badge-massege"><small>6 days ago</small>
                                       </span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left" >
                                          <img src="assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Modric</h4>
                                       <p>Please oreder 6 pices of bats..</p>
                                       <span class="badge badge-info badge-massege"><small>1 hour ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar4.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Salman</h4>
                                       <p>Hello i want 4 uefa footballs</p>
                                       <span class="badge badge-danger badge-massege">
                                       <small>6 days ago</small>
                                       </span>  
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Sergio Ramos</h4>
                                       <p>Hello i want 9 uefa footballs</p>
                                       <span class="badge badge-info badge-massege"><small>5 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Notifications -->
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-bell"></i>
                        <span class="label label-warning">7</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    check the system ststus..</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Tasks -->
                     <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-note2"></i>
                        <span class="label label-danger">6</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-success pull-right">50%</span>
                                       <h3><i class="fa fa-check-circle"></i> Theme color should be change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-warning pull-right">90%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix Error and bugs</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-danger pull-right">80%</span>
                                       <h3><i class="fa fa-check-circle"></i> Sidebar color change</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                                 <li>
                                    <!-- Task item -->
                                    <a href="#" class="border-gray">
                                       <span class="label label-info pull-right">30%</span>   
                                       <h3><i class="fa fa-check-circle"></i> font-family should be change</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-success pull-right">60%</span>
                                       <h3><i class="fa fa-check-circle"></i> Fix the database Error</h3>
                                    </a>
                                 </li>
                                 <li>
                                    <!-- Task item -->
                                    <a href="#"  class="border-gray">
                                       <span class="label label-info pull-right">20%</span>
                                       <h3><i class="fa fa-check-circle"></i> data table data missing</h3>
                                    </a>
                                 </li>
                                 <!-- end task item -->
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Help -->
                     <li class="dropdown dropdown-help hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-settings"></i></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-line-chart"></i> Networking</a>
                           </li>
                           <li><a href="#"><i class="fa fa fa-bullhorn"></i> Lan settings</a></li>
                           <li><a href="#"><i class="fa fa-bar-chart"></i> Settings</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-wifi"></i> wifi</a>
                           </li>
                        </ul>
                     </li>
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-user"></i> User Profile</a>
                           </li>
                           <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>

         </header>
         <!-- =============================================== -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            @include('yabab.adminsidebar')
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-money"></i>
               </div>
               <div class="header-title">
               <h1> @foreach($skooldeet  as $data)
                <b> <h4> See Images  of  "{{$data->skolssn}}"</h4><b>
             @endforeach
               </div>
               <div>
               <h1> @foreach($skooldeet  as $data)
               <button class="btn btn-warning btn-sm"> <a href="{{url('/skolprofile/'.$data->id)}}">Back </a></button> 
               @endforeach
            </div>
            </section>
          
         	<!-- Page Wrapper -->
            <div class="page-wrapper">
            <div class="column-md-8">
                <div class="card-body">
                 @if($errors->any())
            <ul class="list-group">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
         <li class="list-group-item">
         {{session()->get('error')}}
               {{$error}}
                </li>
              @endforeach
              </ul>
              </div>
               @endif

        <div class="account-content">
       @if(session()->has('success'))
         <div class="alert alert-success">
         {{session()->get('success')}}
                   </div>
                    @endif
			

                
            
                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                           <?php $counter=0;?>
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                        <th>Id</th>
                                        <th>Full Name</th>
                                       <th>Delete</th> 
                                    </tr>
                                 </thead>
                                 <tbody>                             
                            
                                    <tr>
                                    @forelse($schhis as $datda)
                                    <td>{{$counter+=1}}</td>
                                    <td><img src="/storage/abtimg/{{($datda->image)}}" width="100px", height="100px"></td>
                                       <td style="display: none;">{{$datda->id}}</td>
                                        <td> <form method="GET" action='/schimgdel/{id}'>  
                                        {{method_field('DELETE')}}
                                             @csrf
                              <input type="hidden" name="id" value="{{$datda->id}}"> 
                           
                        <button type ="submit" name="delete" class="btn btn-danger btn-sm" onclick="return confirm( 'Are you sure you want to DELETE?');"><i class="fa fa-trash-o"></i></button>
            
                        </form>  
                                 
                                                </td>  
                                                 </div>
                                             </div> 
                                          </div>
                                        </tr>
                                        <div>
                                        @empty
                         <p><b>No records yet for school image</b></p>
                   
                                        @endforelse   
                     </div>
                  </div>
               </div>


              </div>
            </div>
          </div>
        </div>
	  </div>



     <div class="table-responsive">
                           <?php $counter=0;?>
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                        <th>Id</th>
                                        <th>Hstory of  School Image</th>    
                                       <th>Delete</th>
                                    </tr>
                                 </thead>
                                 <tbody>                             
                            
                                    <tr>
                                          @forelse($schhis2 as $da)
                                          <td>{{$counter+=1}}</td>
                                       <td><img src="/storage/hisimg/{{($da->image)}}" width="100px", height="100px"></td>
                                       <td style="display: none;">{{$datda->id}}</td>
                                        <td> <form method="GET" action='/hisimgdel/{id}'>  
                                        {{method_field('DELETE')}}
                                             @csrf
                              <input type="hidden" name="id" value="{{$datda->id}}"> 
                           
                        <button type ="submit" name="delete" class="btn btn-danger btn-sm" onclick="return confirm( 'Are you sure you want to DELETE?');"><i class="fa fa-trash-o"></i></button>
              </form>    

              </div>
                                                   </div>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                         <p><b>No records yet for school image</b></p>
                           @endforelse 
                      

                              </table>            
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

              
     <!-- /.content -->
</div>
         <!-- /.content-wrapper -->
        
      <!-- ./wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
               
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
      <script src="{{asset('assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}"type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="{{asset('assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
      <!-- table-export js -->
      <script src="{{asset('assets/plugins/table-export/tableExport.js')}}"type="text/javascript"></script>
      <script src="{{asset('assets/plugins/table-export/jquery.base64.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/plugins/table-export/html2canvas.js')}}"type="text/javascript"></script>
      <script src="{{asset('assets/plugins/table-export/sprintf.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/plugins/table-export/jspdf.js')}}"type="text/javascript"></script>
      <script src="{{asset('assets/plugins/table-export/base64.js')}}" type="text/javascript"></script>
      <!-- dataTables js -->
      <script src="{{asset('assets/plugins/datatables/dataTables.min.js')}}" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="{{asset('assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="{{asset('assets/dist/js/custom.js')}}" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
   <script src="{{asset('js/app.js')}}"></script>
  


  
      <!-- End Theme label Script
         =====================================================================-->

   </body>

<!-- Mirrored from thememinister.com/crm/view-tsaction.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 13:28:46 GMT -->
</html>
