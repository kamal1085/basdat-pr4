<div id="header">
			<h1><a href="./dashboard.html">Jasaku Admin</a></h1>
		</div>

<div id="user-nav" class="navbar">
            <ul class="nav btn-group">
                <li class="btn btn-inverse" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
                <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">new message</a></li>
                        <li><a class="sInbox" title="" href="#">inbox</a></li>
                        <li><a class="sOutbox" title="" href="#">outbox</a></li>
                        <li><a class="sTrash" title="" href="#">trash</a></li>
                    </ul>
                </li>
                <li class="btn btn-mini btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
                <?php if ($islogin != NULL) {
     if ($backend_admin == 1) {
         ?>
                <li class="btn btn-mini btn-inverse"><a title="" href="<?php echo base_url()?>index.php/admin/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
                 <?php }
     else {
         ?>
<li class="btn btn-mini btn-inverse"><a title="" href="<?php echo base_url()?>index.php/vms/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
<?php }} ?>
            </ul>
        </div>
<?php if ($islogin != NULL) {
     if ($backend_admin == 1) {
         ?>
<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul>
				<li class="active"><a href="<?php echo base_url()?>index.php/admin"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
				<li>
                                    <a href="<?php echo base_url()?>index.php/user_admin"><i class="icon icon-tint"></i> <span>Admin Management</span></a></li>
				<li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>Vendor Management</span></a>
					<ul>
						<li><a href="<?php echo base_url()?>index.php/vendor/input">Create New Vendor</a></li>
						<li><a href="<?php echo base_url()?>index.php/vendor/">List</a></li>
					</ul>
				</li>
                                <li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>Service Management</span></a>
					<ul>
						<li><a href="<?php echo base_url() . "index.php/service/category_list"; ?>">Service Category</a></li>
                        <li><a href="<?php echo base_url() . "index.php/service/service_item"; ?>">Service Item</a></li>
						<li><a href="<?php echo base_url() . "index.php/service/vendor_service"; ?>">Service Vendor</a></li>
					</ul>
				</li>
                                <li>
                                    <a href="./user_admin"><i class="icon icon-tint"></i> <span>Transaction List</span></a></li>
                                <li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>Promo List</span></a>
					<ul>
						<li><a href="<?php echo base_url() . "index.php/promo"; ?>">Banner Promo</a></li>
					</ul>
				</li>

                                <li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>Area Management</span></a>
					<ul>
                                            <li>
                                                <a href="<?php echo base_url()?>index.php/propinsi"><i class="icon icon-tint"></i> <span>Propinsi</span></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url()?>index.php/kota"><i class="icon icon-tint"></i> <span>Kota</span></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url()?>index.php/kecamatan"><i class="icon icon-tint"></i> <span>Kecamatan</span></a>
                                            </li>
					</ul>
				</li>
                                <li>
                                    </li>

			</ul>

		</div>
 <?php
     }
     else {

         ?>

<style>
.sidebar-userinfo{
    text-align: center;
    color: #fff;
}
</style>
<div id="sidebar">

            <?php
                /*-------- Account Login Info --------*/
                $this->load->library('module');
                $this->CI =& get_instance();

                echo $this->CI->module->mod_sidebar();
            ?>

			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul>
				<li class="active"><a href="<?php echo base_url()?>index.php/vms"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
				<li>
                                    <a href="<?php echo base_url()?>index.php/worker"><i class="icon icon-tint"></i> <span>Worker Management</span></a></li>

                                <li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>Service Management</span></a>
					<ul>
						<li><a href="<?php echo base_url() . "index.php/vms/vendor_service"; ?>">Price Management</a></li>
					</ul>
				</li>
                  <li><a href="<?php echo base_url() . "index.php/vms_promo"; ?>"><i class="icon icon-tint"></i> <span>Promo</span></a></li>
				  <li><a href="./user_admin"><i class="icon icon-tint"></i> <span>Transaction List</span></a></li>
			</ul>

		</div>
<?php }} ?>

<div id="style-switcher">
			<i class="icon-arrow-left icon-white"></i>
			<span>Style:</span>
			<a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
			<a href="#blue" style="background-color: #2D2F57;"></a>
			<a href="#red" style="background-color: #673232;"></a>
		</div>
