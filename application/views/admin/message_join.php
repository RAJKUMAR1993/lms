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
				   <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                           <div class="card">
                              <div class="body">
                                 <div id="plist" class="people-list">
                                    <div class="chat-search">
                                       <input type="text" class="form-control" placeholder="Search..." />
                                    </div>
                                    <div class="m-b-20">
                                       <div id="chat-scroll">
                                          <ul class="chat-list list-unstyled m-b-0">
                                             <li class="clearfix active">
                                                <div class="about">
                                                   <div class="name">William Smith</div>
                                                   <div class="status">
                                                      <i class="material-icons offline">fiber_manual_record</i>
                                                      left 7 mins ago 
                                                   </div>
                                                </div>
												<div class="float-left dropdown">
												  <a href="#" data-toggle="dropdown">
													  <i class="fas fa-ellipsis-h"></i>
												  </a>
												  <div class="dropdown-menu">
													<div class="dropdown-title">Options</div>
													<a href="#" class="dropdown-item has-icon text-danger" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC">
														<i class="fas fa-trash-alt"></i> Remove
													</a>
												  </div>
												</div> 
                                             </li>
                                             <li class="clearfix ">
                                                <div class="about">
                                                   <div class="name">Martha Williams</div>
                                                   <div class="status">
                                                      <i class="material-icons offline">fiber_manual_record</i>
                                                      online 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="clearfix">
                                                <div class="about">
                                                   <div class="name">Joseph Clark</div>
                                                   <div class="status">
                                                      <i class="material-icons online">fiber_manual_record</i>
                                                      online 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="clearfix">
                                                <div class="about">
                                                   <div class="name">Nancy Taylor</div>
                                                   <div class="status">
                                                      <i class="material-icons online">fiber_manual_record</i>
                                                      online 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="clearfix">
                                                <div class="about">
                                                   <div class="name">Margaret Wilson</div>
                                                   <div class="status">
                                                      <i class="material-icons online">fiber_manual_record</i>
                                                      online 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="clearfix">
                                                <div class="about">
                                                   <div class="name">Joseph Jones</div>
                                                   <div class="status">
                                                      <i class="material-icons offline">fiber_manual_record</i>
                                                      left 30 mins ago 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="clearfix">
                                                <div class="about">
                                                   <div class="name">Jane Brown</div>
                                                   <div class="status">
                                                      <i class="material-icons offline">fiber_manual_record</i>
                                                      left 10 hours ago 
                                                   </div>
                                                </div>
                                             </li>
                                             <li class="clearfix">
                                                <div class="about">
                                                   <div class="name">Eliza Johnson</div>
                                                   <div class="status">
                                                      <i class="material-icons online">fiber_manual_record</i>
                                                      online 
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                           <div class="card">
                              <div class="chat">
                                 <div class="chat-header clearfix">
                                    <div class="chat-about">
                                       <div class="chat-with">Maria Smith</div>
                                       <div class="chat-num-messages">2 new messages</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="chat-box" id="mychatbox">
                                 <div class="card-body chat-content">
                                 </div>
                                 <div class="card-footer chat-form">
                                    <form id="chat-form">
                                       <input type="text" class="form-control" placeholder="Type a message">
									   <input type="file" class="form-control" placeholder="Type a message">
										   <button class="btn btn-primary">
											   <i class="far fa-paper-plane"></i>
										   </button>
                                    </form>
                                 </div>
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
	  <script src="assets/js/page/chat.js"></script> 
      <!-- Page Specific JS File -->
      <script src="assets/js/page/index.js"></script>
      <!-- Template JS File -->
      <script src="assets/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="assets/js/custom.js"></script>
   </body>
   
</html>