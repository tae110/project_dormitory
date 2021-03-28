	<header class="header">

	    <!-- Top Bar -->
	    <div class="top_bar">
	        <div class="top_bar_container">
	            <div class="container">
	                <div class="row">
	                    <div class="col">
	                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
	                            <ul class="top_bar_contact_list">
	                                <li>
	                                    <div class="question">ติดต่อสอบถามรายละเอียดเพิ่มเติม</div>
	                                </li>
	                                <li>
	                                    <i class="fa fa-phone" aria-hidden="true"></i>
	                                    <div>094-258-2221</div>
	                                </li>
	                                <li>
	                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
	                                    <div>60010912530@msu.ac.th</div>
	                                </li>
	                            </ul>
	                            <?php
if (empty($_SESSION['u_id'])) {
    ?>
	                            <div class="top_bar_login ml-auto">
	                                <div class="login_button">
	                                    <a href="./login.php">ลงทะเบียน / เข้าสู่ระบบ</a>
	                                </div>
	                            </div>
	                            <?php
}
?>

	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- Header Content -->
	    <div class="header_container">
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
	                        <div class="logo_container">
	                            <a href="#">
	                                <div class="logo_text">Dormitory<span> MSU</span></div>
	                            </a>
	                        </div>
	                        <nav class="main_nav_contaner ml-auto">
	                            <ul class="main_nav">
	                                <li class="active"><a href="index.php">หน้าหลัก</a></li>
	                                <li><a href="./bookingList.php">รายการจอง</a></li>
	                                <li><a href="./login.php">ออกจากระบบ</a></li>
	                                <!--  <li><a href="blog.html">Blog</a></li>
	                                <li><a href="#">Page</a></li>
	                                <li><a href="contact.html">Contact</a></li> -->
	                            </ul>
	                            <!-- <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div> -->

	                            <!-- Hamburger -->

	                            <!-- <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
	                            <div class="hamburger menu_mm">
	                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
	                            </div> -->
	                        </nav>

	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- Header Search Panel -->
	    <div class="header_search_container">
	        <div class="container">
	            <div class="row">
	                <div class="col">
	                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
	                        <form action="#" class="header_search_form">
	                            <input type="search" class="search_input" placeholder="Search" required="required">
	                            <button
	                                class="header_search_button d-flex flex-column align-items-center justify-content-center">
	                                <i class="fa fa-search" aria-hidden="true"></i>
	                            </button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>