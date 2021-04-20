<?php include 'includes/header.php'; ?>
<?php include 'includes/sidemenu.php'; ?>

<div class="alert alert-success" style="display:none" id="smsg"></div>
<div class="alert alert-danger" style="display:none" id="emsg"></div>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">New Courses & Resources</h5>
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
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Summit Registers</h5>
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
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Certified Courses</h5>
                                        <h2 class="mb-3 font-18">128</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="<?php echo base_url() ?>adminasstes/images/banner/3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">e-Certificates</h5>
                                        <h2 class="mb-3 font-18">48,697</h2>
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
                        <h4>Courses</h4>
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
                                    <th>Members</th>
                                    <th>Status</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Type</th>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Course Name</td>
                                    <td class="text-truncate">
                                        450
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">50%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-success" data-width="50%"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>2019-05-28</td>
                                    <td>
                                        <div class="badge badge-success">Free</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Course Name </td>
                                    <td class="text-truncate">
                                        894
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">40%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-danger" data-width="40%"></div>
                                        </div>
                                    </td>
                                    <td>2017-07-14</td>
                                    <td>2018-07-21</td>
                                    <td>
                                        <div class="badge badge-danger">Paid</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                            <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Course Name </td>
                                    <td class="text-truncate">
                                        984
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">55%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-purple" data-width="55%"></div>
                                        </div>
                                    </td>
                                    <td>2019-07-25</td>
                                    <td>2019-08-17</td>
                                    <td>
                                        <div class="badge badge-info">Top Rated</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td> Course Name</td>
                                    <td class="text-truncate">
                                        58
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">70%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar" data-width="70%"></div>
                                        </div>
                                    </td>
                                    <td>2018-04-15</td>
                                    <td>2019-07-19</td>
                                    <td>
                                        <div class="badge badge-success">Free</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
                                            <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td> Course Name</td>
                                    <td class="text-truncate">
                                        654
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">45%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-cyan" data-width="45%"></div>
                                        </div>
                                    </td>
                                    <td>2017-02-24</td>
                                    <td>2018-09-06</td>
                                    <td>
                                        <div class="badge badge-danger">Paid</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                                            <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td> Course Name</td>
                                    <td class="text-truncate">
                                        124
                                    </td>
                                    <td class="align-middle">
                                        <div class="progress-text">30%</div>
                                        <div class="progress" data-height="6">
                                            <div class="progress-bar bg-orange" data-width="30%"></div>
                                        </div>
                                    </td>
                                    <td>2018-01-20</td>
                                    <td>2019-05-28</td>
                                    <td>
                                        <div class="badge badge-info">Top Rated</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Modules</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Categories</th>
                                        <th>Amount(all in INR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>User Name </td>
                                        <td>
                                            <div class="badge badge-info">Top Rated</div>
                                        </td>
                                        <td>
                                            <div class="text-left">
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="video"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="file-text"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="command"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>258</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>User Name</td>
                                        <td>
                                            <div class="badge badge-info">Top Rated</div>
                                        </td>
                                        <td>
                                            <div class="text-left">
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="video"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="file-text"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="command"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>125</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>
                                            <div class="badge badge-info">Top Rated</div>
                                        </td>
                                        <td>
                                            <div class="text-left">
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="video"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="file-text"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="command"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>287</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>
                                            <div class="badge badge-info">Top Rated</div>
                                        </td>
                                        <td>
                                            <div class="text-left">
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="video"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="file-text"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="command"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>170</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>
                                            <div class="badge badge-info">Top Rated</div>
                                        </td>
                                        <td>
                                            <div class="text-left">
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="video"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="file-text"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="command"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>970</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>
                                            <div class="badge badge-info">Top Rated</div>
                                        </td>
                                        <td>
                                            <div class="text-left">
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="video"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="file-text"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="command"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>854</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            User Name </td>
                                        <td>
                                            <div class="badge badge-info">Top Rated</div>
                                        </td>
                                        <td>
                                            <div class="text-left">
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="video"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="file-text"></i>
                                                </a>
                                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                                    <i class="text-black-50" data-feather="command"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td>128</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Payments History</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Course Name</th>
                                        <th>Date</th>
                                        <th>Payment Method</th>
                                        <th>Amount(all in INR)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>User Name </td>
                                        <td>11-08-2018</td>
                                        <td>NEFT</td>
                                        <td>258</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>User Name
                                        </td>
                                        <td>15-07-2018</td>
                                        <td>PayPal</td>
                                        <td>125</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>25-08-2018</td>
                                        <td>RTGS</td>
                                        <td>287</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>01-05-2018</td>
                                        <td>CASH</td>
                                        <td>170</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>18-04-2018</td>
                                        <td>NEFT</td>
                                        <td>970</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>22-11-2018</td>
                                        <td>PayPal</td>
                                        <td>854</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            User Name
                                        </td>
                                        <td>07-09-2018</td>
                                        <td>Cash</td>
                                        <td>128</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php'; ?>