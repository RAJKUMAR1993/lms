<?php
$d = &get_instance();
$uri = $d->uri->segment(2); ?>

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo base_url() ?>dashboard">
                <img alt="image" src="<?php echo base_url() ?>adminasstes/images/logo/logo@2x.png" class="header-logo" />
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown <?php //echo ($uri == "dashboard") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>dashboard" class="nav-link">
                    <i data-feather="monitor"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown <?php //echo ($uri == "slider") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>admin/slider" class="menu-toggle nav-link">
                    <i data-feather="briefcase"></i>
                    <span>Slider</span>
                </a>
            </li>
            <li class="dropdown<?php //echo ($uri == "resources") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>admin/resources" class="menu-toggle nav-link">
                    <i data-feather="command"></i>
                    <span>Resources</span>
                </a>
            </li>
            <li class="dropdown<?php //echo ($uri == "course") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>admin/course" class="menu-toggle nav-link">
                    <i data-feather="award"></i>
                    <span>Courses</span>
                </a>
            </li>
            <li class="dropdown<?php //echo ($uri == "summit") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>admin/summit" class="menu-toggle nav-link">
                    <i data-feather="copy"></i>
                    <span>Summit</span>
                </a>
            </li>
            <li class="dropdown<?php //echo ($uri == "blog") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>admin/blog" class="menu-toggle nav-link">
                    <i data-feather="shopping-bag"></i>
                    <span>Blogs</span>
                </a>
            </li>
            <li class="dropdown <?php //echo ($uri == "faculty") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>admin/faculty" class="menu-toggle nav-link">
                    <i data-feather="layout"></i>
                    <span>Faculty</span>
                </a>
            </li>
            <li class="dropdown <?php //echo ($uri == "slider") ? 'active' : ''; ?>">
                <a href="<?php echo base_url() ?>admin/accessrole" class="menu-toggle nav-link">
                    <i data-feather="grid"></i>
                    <span>Access Control</span>
                </a>
            </li>
             <li class="dropdown <?php //echo ($uri == "slider") ? 'active' : ''; ?>">
                <a href="#" class="menu-toggle nav-link">
                    <i data-feather="pie-chart"></i>
                    <span>Message Center</span>
                </a>
            </li>
           <!-- <li class="dropdown">
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
            </li> -->
        </ul>
    </aside>
</div>