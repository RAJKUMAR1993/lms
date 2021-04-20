<?php include 'includes/header.php'; ?>
<?php include 'includes/sidemenu.php'; ?>
            <!-- Main Content -->
            <div class="main-content">
               <section class="section">
				   <div class="section-body">
                     <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                           <div class="card">
                              <div class="card-header">
                                 <h4>Slider</h4>
                              </div>
                              <div class="card-body">
								  <div class="bootstrap snippet">
                      			  <section id="portfolio" class="gray-bg padding-top-bottom">
									  <div class="categories">
										  <ul>
											<li class="active">
											  <a href="#" data-filter="*">All Categories</a>
											</li>
											<li>
											  <a href="#" data-filter=".home">Home</a>
											</li>
											<li>
											  <a href="#" data-filter=".resources">Resources</a>
											</li>
											<li>
											  <a href="#" data-filter=".courses">Courses</a>
											</li>
											<li>
											  <a href="#" data-filter=".summit">Summit</a>
											</li>
											<li>
											  <a href="#" data-filter=".blog">Blog</a>
											</li>
											<li>
											  <a href="#" data-filter=".faculty">Faculty</a>
											</li>  
										 </ul>
									 </div>
									<div class="projects-container scrollimation in">
											 <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <div class="card-header">
                                 <h4>Upload</h4>
                              </div>	 <form  method="post"  enctype="multipart/form-data">
                              <div class="card-body">
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                       <input type="text" name="title"  class="form-control">
                                    </div>
                                 </div>

                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                       <select class="form-control selectric" id="category" name="category" required onchange="pay()" >

                                          <option value="home">Home</option>
                                          <option value="resources">Resources</option>
										  <option value="courses">Courses</option>
                                          <option value="summit">Summit</option>
										  <option value="blogs">Blogs</option>
                                          <option value="faculty">Faculty</option>
                                       </select>
                                    </div>
                                 </div>
<input type="hidden" id="az" name="az">

                                  <div class="form-group row mb-4" required id="homec">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slider</label>
                                        <div class="col-sm-12 col-md-7">
                                           <select class="form-control selectric" name="hc" id="hc">

                                              <option value="home1">slider1</option>
                                              <option value="home2">slider2</option>
    										  <option value="home3">slider3</option>
                                              <option value="home4">slider4</option>
    										  <option value="home5">slider5</option>

                                           </select>
                                        </div>
                                     </div>

								 <div class="form-group row mb-4">
									 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Add</label>
									 <div class="col-sm-12 col-md-7">
										 <div class="custom-file">
											<input type="file" name="image" required  onchange="return fileValidation()" class="custom-file-input" id="customFile">
											<label class="custom-file-label form-control" for="customFile" id="l1">Choose file</label>
										 </div>
									 </div>
								 </div>

								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Coupon</label>
                                    <div class="col-sm-12 col-md-7">
                                       <input type="text" name="coupon" value=" "  class="form-control">
                                    </div>
                                 </div>
                               
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                    
                                       <button class="btn btn-primary" name="submit" formaction="" id="b2">ADD</button>
                                    </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
									</div>
								  </section>
								</div>
                              </div>
                           </div>
                        </div>
                     </div>
					 <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <div class="card-header">
                                 <h4>Upload</h4>
                              </div>
                              <div class="card-body">
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
								 <div class="form-group row mb-4">
									 <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Add</label>
									 <div class="col-sm-12 col-md-7">
										 <div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile">
											<label class="custom-file-label form-control" for="customFile">Choose file</label>
										 </div>
									 </div>
								 </div>
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                       <select class="form-control selectric">
                                          <option>*Select Category*</option>
                                          <option>Home</option>
                                          <option>Resources</option>
										  <option>Courses</option>
                                          <option>Summit</option>
										  <option>Blogs</option>
                                          <option>Faculty</option>
                                       </select>
                                    </div>
                                 </div>
								 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Coupon</label>
                                    <div class="col-sm-12 col-md-7">
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Captions</label>
                                    <div class="col-sm-12 col-md-7">
                                       <textarea class="summernote-simple"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                       <button class="btn btn-primary">ADD</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <?php include 'includes/footer.php'; ?>