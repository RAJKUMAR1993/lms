<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
      <title>LMS - Admin Dashboard</title>
      <!-- General CSS Files -->
      <link rel="stylesheet" href="assets/css/app.min.css">
      <!-- Template CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/components.css">
	  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css"> 
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
					 <li class="dropdown active">
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
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                           <div class="card">
                              <div class="body">
                                 <div id="mail-nav">
                                    <button type="button" class="btn btn-danger waves-effect btn-compose m-b-15">COMPOSE</button>
                                    <ul class="" id="mail-folders">
                                       <li class="active">
                                          <a href="mail-inbox.html" title="Inbox">Inbox (10)
                                          </a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Sent">Sent</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Draft">Draft</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Bin">Bin</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Important">Important</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Starred">Starred</a>
                                       </li>
                                    </ul>
                                    <h5 class="b-b p-10 text-strong">Labels</h5>
                                    <ul class="" id="mail-labels">
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-red"></i>Family</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-blue"></i>Work</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-orange"></i>Shop</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-cyan"></i>Themeforest</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-blue-grey"></i>Google</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                           <div class="card">
                              <div class="boxs mail_listing">
                                 <div class="inbox-body no-pad">
                                    <section class="mail-list">
                                       <div class="mail-sender">
                                          <div class="mail-heading">
                                             <h4 class="vew-mail-header">
                                                <b>Hi Dear, How are you?</b>
                                             </h4>
                                          </div>
                                          <hr>
                                          <div class="media">
                                             <div class="media-body">
                                                <span class="date pull-right">4:15AM 04 April 2017</span>
                                                <h5 class="text-black-50">Sarah Smith</h5>
                                                <small class="text-muted">From: sarah@example.com</small>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="view-mail p-t-20">
                                          <p>Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel
                                             accumsan augue
                                             egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus.
                                             Mauris
                                             sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales
                                             vulputate urna,
                                             vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu
                                             consequat
                                             risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus
                                             sodales
                                             vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem
                                             lobortis porttitor
                                             eu consequat risus. Mauris sed congue orci.
                                          </p>
                                          <p>
                                             Porttitor eu consequat risus.
                                             <a href="#">Mauris sed congue orci. Donec ultrices faucibus rutrum</a>.
                                             Phasellus sodales vulputate
                                             urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis
                                             porttitor eu
                                             consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum.
                                             Phasellus
                                             sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at
                                             sem lobortis
                                             porttitor eu consequat risus. Mauris sed congue orci.
                                          </p>
                                          <p>
                                             Sodales
                                             <a href="#">vulputate urna, vel accumsan augue egestas ac</a>. Donec vitae
                                             leo at sem lobortis
                                             porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices
                                             faucibus rutrum.
                                             Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec
                                             vitae leo
                                             at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.
                                          </p>
                                       </div>
                                       <div class="attachment-mail">
                                          <p>
                                             <span>
                                             <i class="fa fa-paperclip"></i> 3 attachments — </span>
                                             <a href="#">Download all attachments</a> |
                                             <a href="#">View all images</a>
                                          </p>
                                          <div class="row">
                                             <div class="col-md-2">
                                                <a href="assets/images/icons/file_pdf.png" download="File">
                                                <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/icons/file_pdf.png">
                                                </a>
                                                <a class="name" href="#"> IMG_001.png
                                                <span>20KB</span>
                                                </a>
                                             </div>
                                             <div class="col-md-2">
                                                <a href="assets/images/icons/file_word.png" download="File">
                                                <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/icons/file_word.png">
                                                </a>
                                                <a class="name" href="#"> IMG_002.png
                                                <span>22KB</span>
                                                </a>
                                             </div>
                                             <div class="col-md-2">
                                                <a href="assets/images/icons/file_ppt.png" download="File">
                                                <img class="img-thumbnail img-responsive" alt="attachment" src="assets/images/icons/file_ppt.png">
                                                </a>
                                                <a class="name" href="#"> IMG_003.png
                                                <span>28KB</span>
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="replyBox m-t-20">
                                          <p class="p-b-20">
                                             <textarea id="ckeditor" class="summernote"></textarea>
                                          </p>
										  <a href="#">
											  <button type="button" class="btn btn-cyan waves-effect btn-compose m-b-15">
												  <i data-feather="corner-down-left"></i>&nbsp;REPLY
											  </button>
										  </a>
                                       </div>
                                    </section>
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
	  <script src="assets/bundles/summernote/summernote-bs4.js"></script> 
      <!-- Page Specific JS File -->
      <!-- Template JS File -->
      <script src="assets/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="assets/js/custom.js"></script>
   </body>
   
</html>