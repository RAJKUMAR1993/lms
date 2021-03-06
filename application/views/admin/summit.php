<?php include 'includes/header.php'; ?>
<?php include 'includes/sidemenu.php'; ?>
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
                                          <h5 class="font-15">Summit Registry</h5>
                                          <h2 class="mb-3 font-18">258</h2>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="<?php echo base_url() ?>adminasstes/images/banner/1.png" alt="">
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
                                          <h5 class="font-15">Free Registries</h5>
                                          <h2 class="mb-3 font-18">1,287</h2>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="<?php echo base_url() ?>adminasstes/images/banner/2.png" alt="">
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
                                          <h5 class="font-15">Paid Registries</h5>
                                          <h2 class="mb-3 font-18">128</h2>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                       <div class="banner-img">
                                          <img src="<?php echo base_url() ?>adminasstes/images/banner/4.png" alt="">
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
                              <h4>Summit Registry</h4>
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
                                       <th>Type</th>
                                       <th>Categories</th>
									   <th>Start Date</th>
									   <th>End Date</th>
                                       <th>Amount (all in INR)</th>
                                       <th>Actions</th>
                                    </tr>
                                    <tr>
                                       <td class="p-0 text-center">
                                          <div class="custom-checkbox custom-control">
                                             <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                             <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                          </div>
                                       </td>
                                       <td>Summit Name</td>
                                       <td class="text-truncate">
                                          <div class="badge badge-success">Free</div>
                                       </td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="video"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>2019-05-28</td>
                                       <td>2500</td>
                                       <td>
										 <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="View">
											 <i class="far fa-eye"></i>
										 </a>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-pencil-alt"></i>
										 </a>  
										 <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
											data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
											data-confirm-yes="alert('Deleted')">
											 <i class="fas fa-trash"></i>
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
                                       <td> Summit Name</td>
                                       <td class="text-truncate">
                                          <div class="badge badge-danger">Paid</div>
                                       </td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="video"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>2019-05-28</td>
                                       <td>485</td>
                                       <td>
										 <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="View">
											 <i class="far fa-eye"></i>
										 </a>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-pencil-alt"></i>
										 </a>  
										 <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
											data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
											data-confirm-yes="alert('Deleted')">
											 <i class="fas fa-trash"></i>
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
                                       <td>Summit Name </td>
                                       <td class="text-truncate">
                                          <div class="badge badge-danger">Paid</div>
                                       </td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="video"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>2019-05-28</td>
                                       <td>752</td>
                                       <td>
										 <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="View">
											 <i class="far fa-eye"></i>
										 </a>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-pencil-alt"></i>
										 </a>  
										 <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
											data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
											data-confirm-yes="alert('Deleted')">
											 <i class="fas fa-trash"></i>
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
                                       <td> Summit Name</td>
                                       <td class="text-truncate">
                                          <div class="badge badge-success">Free</div>
                                       </td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="video"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>2019-05-28</td>
                                       <td>954</td>
                                       <td>
										 <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="View">
											 <i class="far fa-eye"></i>
										 </a>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-pencil-alt"></i>
										 </a>  
										 <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
											data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
											data-confirm-yes="alert('Deleted')">
											 <i class="fas fa-trash"></i>
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
                                       <td> Summit Name</td>
                                       <td class="text-truncate">
                                          <div class="badge badge-danger">Paid</div>
                                       </td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="video"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>2019-05-28</td>
                                       <td>1500</td>
                                       <td>
										 <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="View">
											 <i class="far fa-eye"></i>
										 </a>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-pencil-alt"></i>
										 </a>  
										 <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
											data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
											data-confirm-yes="alert('Deleted')">
											 <i class="fas fa-trash"></i>
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
                                       <td> Summit Name</td>
                                       <td class="text-truncate">
                                          <div class="badge badge-success">Free</div>
                                       </td>
                                       <td>
                                          <div class="text-left">
											  <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
												  <i class="text-black-50" data-feather="video"></i>
											  </a>
										  </div>
                                       </td>
									   <td>2018-01-20</td>
                                       <td>2019-05-28</td>
                                       <td>485</td>
                                       <td>
										 <a class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="View">
											 <i class="far fa-eye"></i>
										 </a>
										 <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit">
											 <i class="fas fa-pencil-alt"></i>
										 </a>  
										 <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
											data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
											data-confirm-yes="alert('Deleted')">
											 <i class="fas fa-trash"></i>
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
				  <div class="row">
					<div class="col-12">
					   <div class="card">
						  <div class="card-header">
							 <h4>Create Summit</h4>
						  </div>
						  <div class="card-body">
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
								<div class="col-sm-12 col-md-4">
								   <input type="text" class="form-control">
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Free or Paid</label>
								<div class="col-sm-12 col-md-2">
									<select class="form-control">
									   <option>*Select Type*</option>
									   <option>Free</option>
									   <option>Paid</option>
									</select>
								</div>
								<div class="col-sm-4 col-md-3">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-rupee-sign"></i>
											</span>
										</div>
										<input type="text" class="form-control" aria-label="Amount (to the nearest ruppee)">
									</div>
								</div> 
							 </div>
							 <div class="form-group row mb-4">
								 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Add Thumbnail Image</label>
								 <div class="col-sm-12 col-md-7">
									 <div id="image-preview" class="image-preview">
									  <label for="image-upload" id="image-label">Choose File</label>
									  <input type="file" name="image" id="image-upload" />
									 </div>
								 </div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">About Course</label>
								<div class="col-sm-12 col-md-7">
								   <textarea class="summernote-simple"></textarea>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Add Resources</label>
								 <div class="col-sm-4 col-md-4">
									<select class="form-control selectric" multiple="">
									   <option>*Select Type*</option>
									   <option>Resources 1</option>
									   <option>Resources 2</option>
									   <option>Resources 3</option>
									   <option>Resources 4</option>
									</select>
								 </div>
								 <div class="col-sm-12 col-md-2">
									 <button class="btn btn-primary">ADD MORE RESOURCES</button>
								 </div>
							 </div>
						
							 <div class="form-group row mb-4">
								 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Add Keywords</label>
								 <div class="col-sm-12 col-md-2">
									 <input type="text" class="form-control inputtags">
								 </div>
								 <div class="col-sm-12 col-md-2">
									 <input type="text" class="form-control inputtags">
								 </div>
								 <div class="col-sm-12 col-md-2">
									 <input type="text" class="form-control inputtags">
								 </div>
								 <div class="col-sm-12 col-md-2">
									 <button class="btn btn-primary">ADD MORE KEYWORDS</button>
								 </div>
							 </div>
							 <div class="form-group row mb-4">
								 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
								 <div class="col-sm-12 col-md-2">
									 <input type="text" class="form-control inputtags">
								 </div>
								 <div class="col-sm-12 col-md-2">
									 <input type="text" class="form-control inputtags">
								 </div>
								 <div class="col-sm-12 col-md-2">
									 <input type="text" class="form-control inputtags">
								 </div>
								 <div class="col-sm-12 col-md-2">
									 <input type="text" class="form-control inputtags">
								 </div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
								<div class="col-sm-12 col-md-7">
								   <button class="btn btn-primary">CREATE COURSE</button>
								</div>
							 </div>
						  </div>
					   </div>
					</div>
				</div> 
               </section>
            </div>
            <?php include 'includes/footer.php'; ?>