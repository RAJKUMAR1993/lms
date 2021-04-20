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
                                    <a href="mail_compose.html">
										<button type="button" class="btn btn-danger waves-effect btn-compose m-b-15">COMPOSE</button>
									</a>
                                    <ul class="" id="mail-folders">
                                       <li class="active">
                                          <a href="" title="Inbox">
											  <i data-feather="mail"></i>&nbsp;Inbox (10)
                                          </a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Sent">
											  <i data-feather="package"></i>&nbsp;Sent
										  </a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Draft">
											  <i data-feather="pocket"></i>&nbsp;Draft
										  </a>
                                       </li>
                                       <li>
                                          <a href="javascript:;" title="Bin">
											  <i data-feather="trash-2"></i>&nbsp;Trash
										  </a>
                                       </li>
                                    </ul>
                                    <h5 class="b-b p-10 text-strong">Labels</h5>
                                    <ul class="" id="mail-labels">
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-red"></i>Label</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-blue"></i>Label</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-orange"></i>Label</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-cyan"></i>Label</a>
                                       </li>
                                       <li>
                                          <a href="javascript:;">
                                          <i data-feather="tag" class="col-blue-grey"></i>Label</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                           <div class="card">
                              <div class="boxs mail_listing">
                                 <div class="inbox-center table-responsive">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th class="text-center">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </th>
                                             <th colspan="3">
                                                <div class="inbox-header">
                                                   <div class="mail-option">
                                                      <div class="email-btn-group m-l-15">
                                                         <a href="#" class="col-dark-gray waves-effect m-r-20" title="back" data-toggle="tooltip">
                                                         <i data-feather="corner-down-left"></i>
                                                         </a>
                                                         <a href="#" class="col-dark-gray waves-effect m-r-20" title="Archive" data-toggle="tooltip">
                                                         <i data-feather="download"></i>
                                                         </a>
                                                         <div class="p-r-20">|</div>
                                                         <a href="#" class="col-dark-gray waves-effect m-r-20" title="Error" data-toggle="tooltip">
                                                         <i data-feather="alert-circle"></i>
                                                         </a>
                                                         <a href="#" class="col-dark-gray waves-effect m-r-20" title="Delete" data-toggle="tooltip">
                                                         <i data-feather="trash-2"></i>
                                                         </a>
                                                         <a href="#" class="col-dark-gray waves-effect m-r-20" title="Folders" data-toggle="tooltip">
                                                         <i data-feather="folder"></i>
                                                         </a>
                                                         <a href="#" class="col-dark-gray waves-effect m-r-20" title="Tag" data-toggle="tooltip">
                                                         <i data-feather="tag"></i>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </th>
											 <th>
												 <i data-feather="paperclip"></i>
											 </th> 
                                             <th class="hidden-xs" colspan="2">
                                                <div class="pull-right">
                                                   <div class="email-btn-group m-l-15">
                                                      <a href="#" class="col-dark-gray waves-effect m-r-20" title="previous" data-toggle="tooltip">
                                                      <i data-feather="chevron-left"></i>
                                                      </a>
                                                      <a href="#" class="col-dark-gray waves-effect m-r-20" title="next" data-toggle="tooltip">
                                                      <i data-feather="chevron-right"></i>
                                                      </a>
                                                   </div>
                                                </div>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="unread">
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
													<input type="checkbox">
													<span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs">User Name </td>
											 <td>
												 <span class="badge badge-primary">Label</span>
											 </td> 
                                             <td class="max-texts">
                                                <a href="mail_read.html">
													Lorem ipsum perspiciatis unde omnis iste natus
												</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> 12:30 PM </td>
                                          </tr>
                                          <tr class="unread">
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td></td> 
                                             <td class="max-texts">
                                                <a href="#">Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 13 </td>
                                          </tr>
                                          <tr class="unread">
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td>
												 <span class="badge badge-secondary">Label</span>
											 </td>
                                             <td class="max-texts">
                                                <a href="#">
                                                
                                                Lorem ipsum perspiciatis unde omnis</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 12 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td>
												 <span class="badge badge-success">Label</span>
											 </td>
                                             <td class="max-texts">
                                                <a href="#">
                                                
                                                Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 12 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td></td>
                                             <td class="max-texts">
                                                <a href="#">
                                                Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 12 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td></td>
                                             <td class="max-texts">
                                                <a href="#">Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 11 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td>
												 <span class="badge badge-info">Label</span>
											 </td>
                                             <td class="max-texts">
                                                <a href="#">
                                                
                                                Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 11 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td></td>
                                             <td class="max-texts">
                                                <a href="#">
                                                Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 11 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs">User Name </td>
											 <td>
												 <span class="badge badge-danger">Label</span>
											 </td>
                                             <td class="max-texts">
                                                <a href="#">
                                                
                                                Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 10 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td></td>
                                             <td class="max-texts">
                                                <a href="#">Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 10 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td>
												 <span class="badge badge-secondary">Label</span>
											 </td>
                                             <td class="max-texts">
                                                <a href="#">
                                                
                                                Lorem ipsum perspiciatis unde omnis</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 10 </td>
                                          </tr>
                                          <tr>
                                             <td class="tbl-checkbox">
                                                <label class="form-check-label">
                                                <input type="checkbox">
                                                <span class="form-check-sign"></span>
                                                </label>
                                             </td>
                                             <td class="hidden-xs"> User Name</td>
											 <td></td>
                                             <td class="max-texts">
                                                <a href="#">
                                                Lorem ipsum perspiciatis unde omnis iste natus</a>
                                             </td>
                                             <td class="hidden-xs">
                                                <i data-feather="paperclip"></i>
                                             </td>
                                             <td class="text-right"> May 09 </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-7 ">
                                       <p class="p-15">Showing 1 - 15 of 200</p>
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
      <!-- Page Specific JS File -->
      <!-- Template JS File -->
      <script src="assets/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="assets/js/custom.js"></script>
   </body>
   
</html>