<?php 
/* Template Name: Product Template */
get_header();

$pro_name = '';
$pro_current_price = '';
$pro_description_sort = '';
$pro_description_long = '';
$score = '';

if(isset($_GET['r_url']) && $_GET['r_url'] != '') {
	//print_r(file_get_contents("http://myratingbud.herokuapp.com/?url=".$_GET['r_url']));
	$data = get_product_data("http://myratingbud.herokuapp.com/?url=".$_GET['r_url']);
	$pro_name = $data['name'];
	$pro_current_price = $data['current_price'];
	$pro_description_sort = $data['descr'];
	$pro_description_long = $data['description']['text'];
	$score = $data['score'];
}

?>
<div class="clearfix"></div>
<div class="product-template">
	<div class="row">
		<div class="product-section col-12">
			<div class="col-12 row">
				<?php
				
				?>
				<div class="col-2">

					<div id="slider" class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<!-- items mirrored twice, total of 12 -->
						</ul>
						<div class="product-component">
							<ul>
								<li>
									<a href="javascript:void(0)" class="search_product">
										<img src="<?php echo get_stylesheet_directory_uri().'/images/search-product.png'; ?>">
									</a>
								</li>

								<li>
									<a href="javascript:void(0)" id="myBtn" class="compare_product">
										<img src="<?php echo get_stylesheet_directory_uri().'/images/compare-product.png'; ?>">	
									</a>
								</li>
								
							</ul>
						</div>
					</div>
					<div id="carousel" class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<li>
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/toppng.com-macbook-png-pic-imagenes-de-macbook-745x401-1.png" />
							</li>
							<!-- items mirrored twice, total of 12 -->
						</ul>
					</div>

				</div>
				<div class="col-2">
					<h2 class="mb-10 page-title"><?php echo $pro_name; ?></h2>
					<div class="product-detail">
						<table class="table">
							<tbody>
								<tr>
									<td><h4>Condition</h4><h3>SecondHand</h3></td>
									<td><h4>Timeleft</h4><h3>3D 3H Friday</h3></td>
								</tr>
								<tr>
									<td><h4>Price Without Discount</h4><h3>$1355</h3></td>
									<?php 
										if($pro_current_price == '') {
											$pro_current_price = 0;
										}
									?>
									<td><h4>Total Price</h4><h3><?php echo str_replace('US', '', $pro_current_price); ?></h3></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-12 button-section">
					<div class="btn-wrapper">
						<div class="btn-title">MyratingBud Review</div>
						<div class="btn-content"><?php echo ($score != '')?$score:'0'; ?>/100 (Out Of 200 Reviews)<span class="inner-btn"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/Icon-awesome-fire.png">CHALLENGE RATING</span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-section col-12">
			<div class="col-12 row">
				<div class="container">
					<div class="section-title">
						<h2>Have Any Question?</h2>
					</div>
					<div class="tab">
						<button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">GENERAL</button>
						<button class="tablinks" onclick="openCity(event, 'tab2')">POSTER</button>
						<button class="tablinks" onclick="openCity(event, 'tab3')">PAYMENTS</button>
						<button class="tablinks" onclick="openCity(event, 'tab4')">SHIPPING</button>
						<button class="tablinks" onclick="openCity(event, 'tab5')">RETURNS</button>
						<button class="tablinks" onclick="openCity(event, 'tab6')">REFUNDS</button>
					</div>

					<div id="tab1" class="tabcontent">
						<div class="que-ans">
							<!-- <h3>What is your job guarantee of objective assessment?</h3> -->
							<p><?php echo $pro_description_long; ?></p>
						</div>
						
					</div>
					<div id="tab2" class="tabcontent">
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
					</div>
					<div id="tab3" class="tabcontent">
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
					</div>
					<div id="tab4" class="tabcontent">
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
					</div>
					<div id="tab5" class="tabcontent">
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
					</div>
					<div id="tab6" class="tabcontent">
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
						<div class="que-ans">
							<h3>What is your job guarantee of objective assessment?</h3>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd</p>
						</div>
					</div>

				</div>

			</div>
		</div>


	</div>
</div>
<div class="clearfix"></div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class=""><h3>Add product URL for compare</h3></div>
    <div class="input_sec">
    	<form name="compare_product" action="<?php echo site_url('/compare-product'); ?>" method="get">
    		<p><label>URL 1</label><br><input type="text" name="pro_url[]" class="input_cls"></p>
    		<p><label>URL 2</label><br><input type="text" name="pro_url[]" class="input_cls"></p>
    		<p><input type="submit" class="compare_btn" name="submit_compare" value="Compare"></p>
    	</form>	
    </div>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<style type="text/css">

	.btn-wrapper{
		display: flex;
		align-items: stretch;
		justify-content: center;
		max-width: 1200px;
		margin: auto;
	}
	.clearfix{
		clear:both;
	}
	.section-title {
		padding: 60px 0;
		text-align: center;
	}
	.section-title h2 {
		color: #373d94;
	}
	.page-title{
		margin-bottom: 20px;
	}
	.col-12{
		width:100%;
		float: left;
	}
	.col-2{
		width:50%;
		float: left;
		padding: 30px;
	}
	.flexslider {
		background: transparent;
		border: 0;
	}
	#carousel .slides img {
		background: white;
		padding: 15px;
		border-radius: 10px;
	}
	#slider .flex-direction-nav a:before{
		font-size: 24px;
		line-height: 2.3;
	}
	.product-section{
		padding:120px 30px;
		background: #EEEEF0;
	}
	.product-detail h3{
		color: #373D94;
		font-weight: 600;
		letter-spacing: 1px;
		font-size: 1.7em !important;
		padding-bottom:0px;
	}
	.tab-section{
		padding:80px 30px;
	}
	.col-12.button-section {
		padding: 60px 0;
		text-align: center;
	}
	.btn-title {
		background: white;
		width: 35%;
		color: #373d94;
		padding: 25px 40px 25px	30px;
		border-radius: 50px 0 0 50px;
		font-size: 22px;
		line-height: 1.2;
		float: left;
		font-weight: 600;
		letter-spacing: 1px;
		display: flex;
		align-items: center;
		justify-content: space-evenly;
	}
	.btn-content {
		background: #373D94;
		color: white;
		width: 65%;
		padding: 25px 30px;
		border-radius: 50px;
		font-size: 22px;
		float: left;
		line-height: 1.2;
		font-weight: 600;
		letter-spacing: 1px;
		margin-left: -5%;
		display: flex;
		justify-content: space-around;
		align-items: center;
	}
	span.inner-btn {
		border: 2px solid white;
		padding: 15px 15px;
		margin-left: 15px;
		border-radius: 50px;
		font-size: 14px;
		display: flex;
		width: max-content;
		float: right;
		align-items: center;
	}
	span.inner-btn img {
		max-height: 20px;
		margin-right: 10px;
	}
	tbody {
		border: 1px solid #373D94 !important;
		border-radius: 9px !important;
	}
	td {
		border: 1px solid #373D94;
		padding: 20px 25px;
	}
	table.table h4 {
		font-weight: 600;
		letter-spacing: 1px;
		font-size: 1em;
	}
	table.table {
		border-radius: 10px	!important;
		border: 2px	solid #373d94;
	}
	input.input_cls {
	    height: 35px;
	    border: 1px solid #dfdfdf;
	    border-radius: 3px;
	    width: 100%;
	}

	input.compare_btn {
	    border: 1px solid #000;
	    border-radius: 3px;
	    padding: 10px 20px;
	    background: #373d94;
	    color: #fff;
	}
	.product-component img {
	    width: 50px;
	}

	.product-component ul {
	    position: absolute;
	    right: 0;
	    z-index: 9999;
	}
	
	@media screen and (max-width:767px){
		.col-2{
			width:100%;
			padding-left: 0;
			padding-right:0;
		}
		.button-section .btn-wrapper {
		    display: block;
		    width: 100%;
		}

		.button-section .btn-wrapper div {
		    width: 100%;
		    display: flex;
		    justify-content: center;
		    margin-bottom: 10px;
		    border-radius: 50px;
		    margin-left: 0;
		}
	}
</style>

<!-- For Tab Start -->
<script>
	function openCity(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

jQuery(document).ready(function(){

	jQuery(window).on("scroll",function() {

		if(jQuery(this).scrollTop() > 500) {

			jQ("#pop").removeClass("normal").addClass("active");
		}
		else {

			jQ("#pop").removeClass("active").addClass("normal");
		}

	})
})

</script>
<style>
	/* Style the tab */
	.tab {
		overflow: hidden;
		border-bottom: 1px solid #ccc;
	}
	.tabcontent h3,
	.tabcontent p{
		position: relative;
		padding-left: 80px;
		color: #4f4f4f;
	}
	.tabcontent h3 {
		font-weight: 600;
		margin-bottom: 20px;
		line-height: 1.3;
	}
	.tabcontent p {
		font-size: 22px;
		opacity: 0.6;
		line-height: 1.3;
	}
	.tabcontent h3:before {
		content: "";
		display: block;
		width: 50px;
		height: 1px;
		background: #ccc;
		left: 0;
		top: 40%;
		position: absolute;
	}
	@media screen and (max-width:767px){
		.tabcontent h3, .tabcontent p{
			padding-left: 40px;
		}
		.tabcontent h3:before {
			content: "";
			display: block;
			width: 15px;
		}
		.tab-section{
			padding:0px;
		}
	}
	@media screen and (min-width:900px){
		.tab {
			display: flex;
			justify-content: space-between;
		}
	}
	@media screen and (max-width:549px){
		.tab button{
			width: 50%;
		}
	}
	@media screen and (min-width:550px) and (max-width:899px){
		.tab button{
			width: 33%;
		}
	}
	/* Style the buttons inside the tab */
	.tab button {
		background-color: inherit;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 17px;
		border-bottom: 3px solid transparent;
		color: #4F4F4F;
		font-weight: 600;
		letter-spacing: 1px;
	}


	/* Create an active/current tablink class */
	.tab button.active {
		border-bottom: 3px solid #373d94;
		color: #373d94;
	}

	/* Style the tab content */
	.tabcontent {
		display: none;
		padding: 60px 12px 30px;
		border-top: none;
	}
	.que-ans {
		margin-bottom: 50px;
	}
</style>
<!-- For Tab Start -->


<!-- For Accordian Start -->
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		});
	}
</script>
<style>
	.accordion {
		background-color: #eee;
		color: #444;
		cursor: pointer;
		padding: 18px;
		width: 100%;
		border: none;
		text-align: left;
		outline: none;
		font-size: 15px;
		transition: 0.4s;
	}

	.active, .accordion:hover {
		background-color: #ccc;
	}

	.accordion:after {
		content: '\002B';
		color: #777;
		font-weight: bold;
		float: right;
		margin-left: 5px;
	}

	.active:after {
		/*content: "\2212";*/
	}

	.panel {
		padding: 0 18px;
		background-color: white;
		max-height: 0;
		overflow: hidden;
		transition: max-height 0.2s ease-out;
	}
</style>
<!-- For Accordian end -->
<?php get_footer(); ?>