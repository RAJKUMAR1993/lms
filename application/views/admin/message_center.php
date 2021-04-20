<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
      <title>LMS - Admin Dashboard</title>
      <!-- General CSS Files -->
      <link rel="stylesheet" href="assets/css/app.min.css">
	  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
	  <link rel="stylesheet" href="assets/bundles/dropzonejs/dropzone.css">
	  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
      <!-- Template CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/components.css">
      <!-- Custom style CSS -->
      <link rel="stylesheet" href="assets/css/custom.css">
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
   </head>
   <body>
      <div class="loader"></div>
      <div id="app">
         <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
               <div class="form-inline mr-auto">
                  <ul class="navbar-nav mr-3">
                     <li>
						 <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
							 <i data-feather="align-justify"></i>
						 </a>
					 </li>
                  </ul>
               </div>
               <ul class="navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
						 <img alt="image" src="assets/images/logo/logo.png" class="user-img-radious-style">
						 <span class="d-sm-none d-lg-inline-block"></span>
					  </a>
                     <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello LMS</div>
                        <a href="#" class="dropdown-item has-icon"> 
							<i class="far fa-user"></i> Profile
                        </a>
						<a href="#" class="dropdown-item has-icon"> 
							<i class="fas fa-cog"></i>Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="index.html" class="dropdown-item has-icon text-danger"> 
							<i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                     </div>
                  </li>
               </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
               <aside id="sidebar-wrapper">
                  <div class="sidebar-brand">
                     <a href="dashboard.html"> 
						 <img alt="image" src="assets/images/logo/logo@2x.png" class="header-logo" />
                     </a>
                  </div>
                  <ul class="sidebar-menu">
                     <li class="dropdown">
                        <a href="dashboard.html" class="nav-link">
							<i data-feather="monitor"></i>
							<span>Dashboard</span>
						</a>
                     </li>
                     <li class="dropdown">
                        <a href="slider.html" class="menu-toggle nav-link">
							<i data-feather="briefcase"></i>
							<span>Slider</span>
						</a>
                     </li>
                     <li class="dropdown">
                        <a href="resources.html" class="menu-toggle nav-link">
							<i data-feather="command"></i>
							<span>Resources</span>
						</a>
                     </li>
                     <li class="dropdown">
                        <a href="course.html" class="menu-toggle nav-link">
							<i data-feather="award"></i>
							<span>Courses</span>
						</a>
                     </li>
                     <li class="dropdown">
                        <a href="summit.html" class="menu-toggle nav-link">
							<i data-feather="copy"></i>
							<span>Summit</span>
						</a>
                     </li>
                     <li class="dropdown">
                        <a href="blog.html" class="menu-toggle nav-link">
							<i data-feather="shopping-bag"></i>
							<span>Blogs</span>
						</a>

                     </li>
                     <li class="dropdown">
                        <a href="faculty.html" class="menu-toggle nav-link">
							<i data-feather="layout"></i>
							<span>Faculty</span>
						 </a>
                     </li>
                     <li class="dropdown">
                        <a href="access_control.html" class="menu-toggle nav-link">
							<i data-feather="grid"></i>
							<span>Access Control</span>
						</a>
                     </li>
                     <li class="dropdown active">
                        <a href="message_center.html" class="menu-toggle nav-link">
							<i data-feather="pie-chart"></i>
							<span>Message Center</span>
						</a>
                     </li>
                     <li class="dropdown">
                        <a href="e_certificate.html" class="menu-toggle nav-link">
							<i data-feather="feather"></i>
							<span>e-Certificate</span>
						</a>
                     </li>
					 <li class="dropdown">
                        <a href="mail.html" class="menu-toggle nav-link">
							<i data-feather="mail"></i>
							<span>Mail</span>
						</a>
                     </li>
                  </ul>
               </aside>
            </div>
            <!-- Main Content -->
            <div class="main-content">
               <section class="section">
                  <div class="row ">
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card l-bg-green">
                           <div class="card-statistic-3">
                              <div class="align-items-center justify-content-between">
                                 <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                       <div class="card-content">
                                          <h5 class="font-15">User Registry</h5>
                                          <h2 class="mb-3 font-18">258</h2>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="assets/images/banner/3.png" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card l-bg-orange">
                           <div class="card-statistic-3">
                              <div class="align-items-center justify-content-between">
                                 <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                       <div class="card-content">
                                          <h5 class="font-15">User Online</h5>
                                          <h2 class="mb-3 font-18">1,287</h2>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="assets/images/banner/1.png" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card l-bg-purple">
                           <div class="card-statistic-3">
                              <div class="align-items-center justify-content-between">
                                 <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                       <div class="card-content">
                                          <h5 class="font-15">Instructor Online</h5>
                                          <h2 class="mb-3 font-18">128</h2>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="assets/images/banner/4.png" alt="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
				  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-header">
                              <h4>Message Center</h4>
                           </div>
                           <div class="card-body p-0">
                              <div class="table-responsive">
                                 <table class="table table-striped">
                                    <tr>
                                       <th class="text-center">
                                          <div class="custom-checkbox custom-checkbox-table custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                             <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </th>
                                       <th>Name</th>
                                       <th>Categories</th>
									   <th>Date Created</th>
                                       <th>Actions</th>
                                    </tr>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                             <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td>Topic Name</td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="message-square"></i>
											  </a>
										  </div>
                                       </td>
                                       <td>2019-05-28</td>
                                       <td>
										 <a href="message_join.html" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-comment-alt"></i>&nbsp;&nbsp; Join
										 </a>
									  </td>
                                    </tr>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                             <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td>Topic Name </td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="message-square"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-comment-alt"></i>&nbsp;&nbsp; Join
										 </a>
									  </td>
                                    </tr>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                             <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td> Topic Name</td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="message-square"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-comment-alt"></i>&nbsp;&nbsp; Join
										 </a>
									  </td>
                                    </tr>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-4">
                                             <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td> Topic Name</td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="message-square"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-comment-alt"></i>&nbsp;&nbsp; Join
										 </a>
									  </td>
                                    </tr>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-5">
                                             <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td> Topic Name</td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="message-square"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-comment-alt"></i>&nbsp;&nbsp; Join
										 </a>
									  </td>
                                    </tr>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                                             <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td> Topic Name</td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="message-square"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-comment-alt"></i>&nbsp;&nbsp; Join
										 </a>
									  </td>
                                    </tr>
                                 </table>
                              </div>
                           </div>
						   <div class="card-footer text-center">
							<nav class="d-inline-block">
							  <ul class="pagination mb-0">
								<li class="page-item disabled">
								  <a class="page-link" href="#" tabindex="-1">
									  <i class="fas fa-chevron-left"></i>
								  </a>
								</li>
								<li class="page-item active">
									<a class="page-link" href="#">
										1 <span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="page-item">
								  <a class="page-link" href="#">2</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
								  <a class="page-link" href="#">
									  <i class="fas fa-chevron-right"></i>
								  </a>
								</li>
							  </ul>
							</nav>
						  </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <footer class="main-footer">
               <div class="footer-left">
                  <a href="5thdt.com">Crafted by 5TH Dimension Technologies</a>
               </div>
               <div class="footer-right">
               </div>
            </footer>
         </div>
      </div>
      <!-- General JS Scripts -->
      <script src="assets/js/app.min.js"></script>
      <!-- JS Libraies -->
	  <script src="assets/bundles/summernote/summernote-bs4.js"></script>
	  <script src="assets/bundles/dropzonejs/min/dropzone.min.js"></script>
	  <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
	  <script src="assets/js/page/multiple-upload.js"></script>
	  <script src="assets/js/page/widget-data.js"></script> 
      <!-- Page Specific JS File -->
      <script src="assets/js/page/index.js"></script>
      <!-- Template JS File -->
      <script src="assets/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="assets/js/custom.js"></script>
   </body>
   
</html>