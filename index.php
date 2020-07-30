<html>

	<head>
		<meta charshet="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="sass/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
			integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>

	<body>

		<div id="bg-header-login">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">Chào Mừng bạn Đến với ReVo!</div>
					<div class="col-md-6 col-sm-6 col-xs-6 ">
						<div class ="row flex-container">
							<div>
								<span>
									<a href="">Đăng nhập</a> 
								</span>
							</div>
							<div>
								<span>
									<a href="">Đăng kí</a> 
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="bg-mg-logo">
			<div class="container">
				<div class="row">
					<div class="col-xs-3 col-md-3">
						<img src="img/logo.png">
					</div>
					<div class="col-xs-6 col-md-6" id="txt-seach">
						<input type="text" value placeholder = "Bạn muốn tìm gì...">
						<span id="ico-search">
							<span class="fa fa-search">

							</span>
						</span>
					</div>
					<div class="col-xs-3 col-md-3" id="info-contact">
						<div id="img-phone">
							<img src="img/icon-contact.png">
						</div>
						<div>
							<span class="row">
								Hỗ Trợ: <span>1900900</span>
							</span>
							<span class="row">
								Email: <span>email@email.com</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>


	<!-- code side bar-->
		<div id="menu-side-bar">
			<div class="container">
				<div class="container-menu-side">
					<div id="side-bar" class="nav-side-bar">
						
						<header>
							<i class="fas fa-bars"></i>
							<span>DANH MỤC SẢN PHẨM</span>
							<i class="fas fa-caret-down"></i>
						</header>
						
						<div id="display-side-bar">
							<ul>
								<li class="chil-open">
									<a href=""><i class="fas fa-mobile "></i><p> Điện Thoại </p> <i class="fas fa-chevron-right"></i></a>	
									<ul class="menu-chil">
										<span>
											Apple
										</span>
										<li>
											<a href="">Iphone 5</a>
										</li>
										<li>
											<a href="">Iphone 6</a>
										</li>
										<li>
											<a href="">Iphone 7</a> 
										</li>
										<span>
											Samsung
										</span>
										<li>
											<a href="">Samsung S1s</a> 
										</li>
										<li>
											<a href="">Samsung S4s</a> 
										</li>
										<li>
											<a href="">Samsung S7s</a> 
										</li>
										<span>
											Oppo 
										</span>
										<li>
											<a href="">Oppo F1 Plus</a> 
										</li>
									</ul>
								</li>
								<li>
									<a href=""> <i class="fas fa-tshirt"></i> <p> Thời Trang </p> </a>
								</li>
								<li>
									<a href=""><i class="fas fa-laptop"></i><p> Máy Tinh - Laptop </p></a>
								</li>
								<li>
									<a href=""><i class="far fa-clock"></i><p> Đồng Hồ </p></a>
								</li>
								<li>
									<a href=""><i class="far fa-heart"></i><p> Sức Khỏe </p></a>
								</li>
							</ul>
						</div>		
					</div>
					<div id="menu-home">
						<ul>
							<li class="static-position">
								<a href="#" id="home" class="static-position-a">TRANG CHỦ</a>
							</li>
							<li class ="static-position">
								<a href="#" id="produce" class="static-position-a">SẢN PHẨM</a>
								<div class="ico-position">
									<img src="img\ico-hot.png">
								</div>
								<div class="drop-menu-produce">
									<div class="drop-menu-detail">
										<ul>
											<li class="menu-field">
												<span><a href="">ĐIỆN THOẠI</a></span>
											</li>
											<li class="menu-field">
												<span> <a href=""> ĐỒ THỂ THAO </a></span> 
											</li>
											<li class="menu-field">
												<span> <a href=""> BALO </a> </span> 
											</li>											
											<li class="menu-field">
												<span> <a href="">THIẾT BỊ ÂM THANH</a> </span> 
											</li>
											<li class="menu-field">
												<span> <a href="">ĐỒNG HỒ NỮ</a> </span> 
											</li>
											<li class="menu-field">
												<span> <a href="">SON MÔI</a> </span> 
											</li>
											<li class="menu-field">
												<span> <a href=""> TV - THIẾT BỊ SỐ </a> </span> 
											</li>											
											<li class="menu-field">
												<span> <a href="">VEST NAM</a> </span> 
											</li>
											<li class="menu-field">
												<span>  <a href=""> TÚI XÁCH</a> </span> 
											</li>
										</ul>
									</div>
									<div class="baner-menu-produce">
										<div class="col-xs-6 col-md-6">
											<img src="img\img-thum-1.jpg">
										</div>
										<div class="col-xs-6 col-md-6">
											<img src="img\img-thum-2.jpg" alt="">
										</div>
									</div>
								</div>
							</li>
							<li class="static-position">
								<a href="#" id="trademark" class="static-position-a">THƯƠNG HIỆU</a>
								<div class="ico-position">
									<img src="img\ico-new.png">
								</div>
								<div class="drop-menu-trademark row">
									<div class="col-xs-3 col-md-3">
										<div class="trademark-feild">
											<span class="header-ul">
												<a href="">VALI, TÚI DU LỊCH</a> 
											</span>
											<ul>
												<li>
													<a href="">Vali</a>
												</li>
												<li>
													<a href="">Túi laptop</a>
												</li>
												<li>
													<a href="">Balo</a>
												</li>
												<li>
													<a href="">Túi du lịch</a>
												</li>
												<li>
													<a href="">Túi xếp hành lí</a>
												</li>
												<li>
													<a href="">Balo trẻ em</a>
												</li>
												<li>
													<a href="">Vali du lịch</a>
												</li>
											</ul>
										</div>
										<div class="trademark-feild">
											<span class="header-ul">
												<a href="">THỜI TRANG NAM</a> 
											</span>
											<ul>
												<li>
													<a href="">Vest nam</a> 
												</li>
												<li>
													<a href="">Giày da</a> 
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xs-3 col-md-3">
										<div class="trademark-feild">
											<span class="header-ul">
												<a href="">THỂ THAO</a>
											</span>
											<ul>
												<li>
													<a href="">Quần áo thể thao</a>
												</li>
												<li>
													<a href="">Giày thể thao</a>
												</li>
												<li>
													<a href="">Vợt</a>
												</li>
												<li>
													<a href="">Thể thao đồng đội</a>
												</li>
												<li>
													<a href="">Xe đạp thể thao</a>
												</li>
												<li>
													<a href="">Thể thao dã ngoại</a>
												</li>
												<li>
													<a href="">Đồ chơi ngoài trời</a>
												</li>
											</ul>
										</div>
										<div class="trademark-feild">
											<span class="header-ul">
												<a href="">LÀM ĐẸP</a>
											</span>
											<ul>
												<li>
													<a href="">Chăm sóc da mặt</a>
												</li>
												<li>
													<a href="">Chăm sóc tóc</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xs-3 col-md-3">
										<div class="trademark-feild">
											<span class="header-ul">
												<a href="">THỜI TRANG NỮ</a>
											</span>
											<ul>
												<li>
													<a href="">Sơ mi</a>
												</li>
												<li>
													<a href="">Công sở</a>
												</li>
												<li>
													<a href="">Du lịch</a>
												</li>
												<li>
													<a href="">Thể thao</a>
												</li>
												<li>
													<a href="">Túi xách</a>
												</li>
												<li>
													<a href="">Kính mắt</a>
												</li>
												<li>
													<a href="">Trang sức</a>
												</li>
											</ul>
										</div>
										<div class="trademark-feild">
											<span class="header-ul">
												<a href="">TRẺ EM</a>
											</span>
											<ul>
												<li>
													<a href="">Thời trang bé gái</a>
												</li>
												<li>
													<a href="">Thời trang bé trai</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xs-3 col-md-3">
										<div class="trademark-feild">
											<span class="header-ul">
												<a href="" class="hot-produce">SẢN PHẨM HOT</a>
											</span>
											<div style="text-align: center; border: 1px solid #afafaf">
												<img src="img\img-trademark-paner.jpg" alt="">
												<p style="margin-bottom: 0px">
													Áo phông nữ
												</p>
												<p style="color: #f55c00; font-size: 20px">
													150.000
													<u style="color: #f55c00">
														đ
													</u>
												</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="static-position">
								<a href="" class="static-position-a">CÔNG NGHỆ</a>
								<div class="drop-menu-tech">
									<ul>
										<li>
											<a href="">Máy quay an ninh</a>
										</li>
										<li>
											<a href="">Thiết bị điều khiển</a>
										</li>
										<li>
											<a href="">Thiết bị âm thanh</a>
										</li>
										<li>
											<a href="">Thiết bị chơi game</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="static-position">
								<a href="" class="static-position-a">TIN TỨC</a> 
							</li>
							<li class="static-position">
								<a href="" class="static-position-a">GIỚI THIỆU</a> 
							</li>
							<li class="static-position">
								<a href="" class="static-position-a">LIÊN HỆ</a> 
							</li>
						</ul>
					</div>
				</div>
				<div id="ico-shopping">
					<a href="" id="ico-sync"><i class="fas fa-sync"></i></a>
					<a href="" id="shopping-cart"><i class="fas fa-shopping-cart"></i></a>
					<p class="choise-number">0</p>
				</div>
			</div>
		</div>

	<!-- END code side bar-->

	<!-- beign code wrapper slider -->

		<div class ="wrapper-slider">
			<div class="item active">
				<a href="">
					<img src="img\slide-img-1.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="">
					<img src="img\slide-img-2.jpg" alt="">
				</a>
			</div>
			<div class="item">
				<a href="">
					<img src="img\slide-img-3.jpg" alt="">
				</a>
			</div>
			<div id="btn-sliders">
				<div class="btn-slider btn-active">

				</div>
				<div class="btn-slider">

				</div>
				<div class="btn-slider">

				</div>
			</div>
		</div>

	<!-- END code wrapper-->
		<div class="body-footer">
			<div id="page-home">

			</div>
			
			<div class="container">
				<div class="carousel">
					<div id="item-1" class="item-carousel">
						<img src="img\carousel-item-1.png" alt="">
					</div>
					<div id="item-2" class="item-carousel">
						<img src="img\carousel-item-2.png" alt="">
					</div>
					<div id="item-3" class="item-carousel">
						<img src="img\carousel-item-3.png" alt="">
					</div>
					<div id="item-4" class="item-carousel">
						<img src="img\carousel-item-4.png" alt="">
					</div>
					<div id="item-5" class="item-carousel">
						<img src="img\carousel-item-1.png" alt="">
					</div>
					<div id="item-6" class="item-carousel">
						<img src="img\carousel-item-2.png" alt="">
					</div>
					<div id="item-7" class="item-carousel" style="display: none">
						<img src="img\carousel-item-3.png" alt="">
					</div>
					<div id="item-8" class="item-carousel" style="display: none">
						<img src="img\carousel-item-4.png" alt="">
					</div>
					<div id="item-9" class="item-carousel" style="display: none">
						<img src="img\carousel-item-1.png" alt="">
					</div>
				</div>
				
				<i id="btn-pre"  class="btn-carousel fas fa-chevron-left"></i>

				<i id="btn-next" class="btn-carousel fas fa-chevron-right"></i>
				
			</div>
			<div class="sign-up-email">
				<div class="container">
					<div class="lb-sign-up">
						<p>
							ĐĂNG KÝ ĐỂ NHẬN KHUYẾN MẠI
						</p>
					</div>
					<div class="textbox-button">
						<input class="textbox-email" type="text" placeholder="Email">
						<button class="button-email" > ĐĂNG KÝ </button>
					</div>
					<div class="ico-soft">
						<p> MẠNG XÃ HỘI </p>
						<img src="img\ico-fb.png" alt="">
						<img src="img\ico-gg.png" alt="">
						<img src="img\ico-ytb.png" alt="">
					</div>
				</div>
			</div>
			<div class="menu-support">
				<div class="container">
					<div class="row">
						<div class="col-xs-2 col-md-2">
							<header>
								HƯỚNG DẪN
							</header>
							<div class="item-support">
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Mua hàng
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Thanh toán
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Đổi trả
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Tích điểm
									</a>
								</div>
							</div>
						</div>
						<div class="col-xs-2 col-md-2">
							<header>
								CHĂM SÓC
							</header>
							<div class="item-support">
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Kiểm tra đơn hàng
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Chính sách bảo hành
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Gửi trả hàng
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Câu hỏi thường gặp
									</a>
								</div>
							</div>
						</div>
						<div class="col-xs-2 col-md-2">
							<header>
								CHÍNH SÁCH
							</header>
							<div class="item-support">
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Chính sách bảo hành
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Khách VIP
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Vận chuyển
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Đổi trả hàng
									</a>
								</div>
							</div>
						</div>
						<div class="col-xs-2 col-md-2">
							<header>
								VỀ CHÚNG TÔI
							</header>
							<div class="item-support">
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Hệ thống cửa hàng
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Tư vấn sử dụng
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Đánh giá sản phẩm
									</a>
								</div>
								<div>
									<i class="fas fa-chevron-right"></i>
									<a href="">
										Liên hệ
									</a>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-md-4">
							<header>
								LIÊN HỆ
							</header>
							<div class="item-support">
								<div>
									<i class="fas fa-map-marker-alt"></i>
									<span>
										111 tòa nhà ABC thành phố xyz tỉnh thành Việt Nam
									</span>
								</div>
								<div>
									<i class="fas fa-phone-alt"></i>
									<span>
										09452xxxxxx-08343xxxxxx
									</span>
								</div>
								<div>
									<i class="fas fa-envelope"></i>
									<span>
										email@email.com
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-menu">
				<div class="container">
					<span>
						<a href="">TRANG CHỦ</a>
					</span>
					<span>
						<a href="">DANH MỤC SẢN PHẨM</a>
					</span>
					<span>
						<a href="">ĐIỆN THOẠI</a>
					</span>
					<span>
						<a href="">THIẾT BỊ CÔNG NGHỆ</a>
					</span>
					<span>
						<a href="">PHỤ KIỆN</a>
					</span>
					<span>
						<a href="">LAPTOP</a>
					</span>
					<span>
						<a href="">VỀ CHÚNG TÔI</a>
					</span>
					<span>
						<a href="">TRỢ GIÚP</a>
					</span>
				</div>
			</div>
		</div>




	</body>
</html>