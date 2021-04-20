<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
      <title>LMS - Admin Dashboard</title>
      <!-- General CSS Files -->
      <link rel="stylesheet" href="assets/css/app.min.css">
	  <link href="assets/bundles/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
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
                     <li class="dropdown active">
                        <a href="course.html" class="menu-toggle nav-link">
							<i data-feather="award"></i>
							<span>Courses</span>
						</a>
                     </li>
					 <li class="dropdown">
                        <a href="assesment.html" class="menu-toggle nav-link">
							<i data-feather="book-open"></i>
							<span>Take Assessments</span>
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
                     <li class="dropdown">
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
                  <div class="section-body">
                     <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-4">
                           <div class="card author-box">
                              <div class="card-body">
                                 <div class="author-box-center">
                                    <img alt="image" src="assets/images/icons/pdf.svg" class="author-box-picture">
                                    <div class="clearfix"></div>
                                    <div class="author-box-name">
                                       <a href="#">Blog Name</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header">
                                 <h4>Author Details</h4>
                              </div>
                              <div class="card-body">
                                 <div class="py-4">
                                    <p class="clearfix">
                                       <span class="float-left">
										   Date
                                       </span>
                                       <span class="float-right text-muted">
										   30-05-1998
                                       </span>
                                    </p>
									<p class="clearfix">
                                       <span class="float-left">
										   Author Name
                                       </span>
                                       <span class="float-right text-muted">
										   Faridah Bawani
                                       </span>
                                    </p> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                           <div class="card">
                              <div class="padding-20">
                                 <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                                          aria-selected="true">About</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
									   <div class="section-title">Blog Info</div>	
                                       <p class="m-t-30">Completed my graduation in Arts from the well known and
                                          renowned institution
                                          of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                                          affiliated
                                          to M.S. University. I ranker in University exams from the same
                                          university
                                          from 1996-01.
                                       </p>
                                       <p>Worked as Professor and Head of the department at Sarda Collage, Rajkot,
                                          Gujarat
                                          from 2003-2015 
                                       </p>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                          industry. Lorem
                                          Ipsum has been the industry's standard dummy text ever since the 1500s,
                                          when
                                          an unknown printer took a galley of type and scrambled it to make a
                                          type
                                          specimen book. It has survived not only five centuries, but also the
                                          leap
                                          into electronic typesetting, remaining essentially unchanged.
                                       </p>
									   <div class="section-title">About Author</div>	
                                       <p class="m-t-30">Completed my graduation in Arts from the well known and
                                          renowned institution
                                          of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                                          affiliated
                                          to M.S. University. I ranker in University exams from the same
                                          university
                                          from 1996-01.
                                       </p>	
                                       <div class="section-title">Assets / Images</div>
                                       <ul id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											  <a href="assets/images/image-gallery/1.png" data-sub-html="Demo Description">
												  <img class="img-responsive thumbnail" src="assets/images/image-gallery/thumb/thumb-1.png" alt="">
											  </a>
                                    	  </div>
										  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											  <a href="assets/images/image-gallery/1.png" data-sub-html="Demo Description">
												  <img class="img-responsive thumbnail" src="assets/images/image-gallery/thumb/thumb-1.png" alt="">
											  </a>
                                    	  </div>
										  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											  <a href="assets/images/image-gallery/1.png" data-sub-html="Demo Description">
												  <img class="img-responsive thumbnail" src="assets/images/image-gallery/thumb/thumb-1.png" alt="">
											  </a>
                                    	  </div>
										  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											  <a href="assets/images/image-gallery/1.png" data-sub-html="Demo Description">
												  <img class="img-responsive thumbnail" src="assets/images/image-gallery/thumb/thumb-1.png" alt="">
											  </a>
                                    	  </div>
										  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
											  <a href="assets/images/image-gallery/1.png" data-sub-html="Demo Description">
												  <img class="img-responsive thumbnail" src="assets/images/image-gallery/thumb/thumb-1.png" alt="">
											  </a>
                                    	  </div> 
                                       </ul>
                                    </div>
                                 </div>
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
	 <script src="assets/bundles/lightgallery/dist/js/lightgallery-all.js"></script>
	  <script src="assets/js/page/light-gallery.js"></script> 
      <!-- Page Specific JS File -->
      <script src="assets/js/page/index.js"></script>
      <!-- Template JS File -->
      <script src="assets/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="assets/js/custom.js"></script>
   </body>
   
</html>