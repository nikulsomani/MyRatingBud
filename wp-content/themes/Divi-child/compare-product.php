<?php 
/* Template Name: Compare Product Template */
get_header();

$pro_name = [];
$pro_current_price = [];
$pro_description_sort = [];
$pro_description_long = [];
$score = [];
$urls = [];
if(isset($_GET['pro_url']) && $_GET['pro_url'] != '') {
	foreach ($_GET['pro_url'] as $key => $value) {
		$urls[] = $value;
		
	}
	//print_r(file_get_contents("http://myratingbud.herokuapp.com/?url=".$_GET['r_url']));
	//$data = get_product_data($_GET['r_url']);
	foreach ($urls as $key => $val) {
		$data = get_product_data("http://myratingbud.herokuapp.com/?url=".$val);
		$pro_name[$key] = $data['name'];
		$pro_current_price[$key] = $data['current_price'];
		$pro_description_sort[$key] = $data['descr'];
		$pro_description_long[$key] = $data['description']['text'];
		$score[$key] = $data['score'];
		
	}	
}

?>
<div class="clearfix"></div>

<div class="col-12 compare-product">
	<div class="row">
		<div class="container">
			<div class="product-table">
				<h1 class="mb-10 page-title">Compare Product</h1>
				<div class="product-detail">
					<table class="table">
						<thead>
							<tr>
								<td></td>
								<?php $counter = count($urls); ?>
								<?php for($i = 0; $i<=$counter; $i++) { ?>
								<td>
									<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/Group-1441.png">
									<img class="close-icon remove_col_<?php echo $i; ?>" id="remove_product" data-id="<?php echo $i; ?>"  onclick="return theFunction();" src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/Group-1443.png">
								</td>
								<?php } ?>
							</tr>
						</thead>
						<tbody>
							<tr class="row even">
								<td class="heading"><h3>Name</h3></td>
								<?php 
								foreach ($pro_name as $key => $name) {
									echo '<td class="info pro_td_'.$key.'"><h3>'.$name.'</h3></td>';
								}
								?>
							</tr>
							<tr class="row odd">
								<td class="heading"><h3>Model</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row even">
								<td class="heading"><h3>Processor</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row odd">
								<td class="heading"><h3>RAM</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row even">
								<td class="heading"><h3>Camera</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row odd">
								<td class="heading"><h3>Condition</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row even">
								<td class="heading"><h3>ROM</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row odd">
								<td class="heading"><h3>System</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row even">
								<td class="heading"><h3>Price</h3></td>
								<td class="info"><h3>Iphone</h3></td>
								<td class="info"><h3>Oneplus</h3></td>
							</tr>
							<tr class="row footer">
								<td class="heading"></td>
								<td class="info"><div class="box"><div class="rating">3.9/5<p>From 100 Reviews</p></div><div class="copyright">MyratingBud rating</div></div></td>
								<td class="info"><div class="box"><div class="rating">3.9/5<p>From 100 Reviews</p></div><div class="copyright">MyratingBud rating</div></div></td>

							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clearfix"></div>

<style type="text/css">
	.clearfix{
		clear:both;
	}
	.page-title{
		margin-bottom: 20px;
		text-align: center;
		padding: 90px 0px;
		font-weight: 600;
		color: #063457;
	}
	.col-12{
		width:100%;
		float: left;
	}
	.col-2{
		width:50%;
		float: left;
	}
	table.table{
		position: relative;
	}
	table.table .close-icon{
		position: absolute;
		right: 10px;
		top: 10px;
		max-width: 30px;
		cursor: pointer;
	}
	.compare-product{
		padding:30px;
	}
	tr.row.footer .box {
		border: 1px solid #373D94;
		border-radius: 10px;
		width: fit-content;
		margin: auto;
		overflow: hidden;
	}
	tr.row.footer td {
		padding-top: 30px;
	}
	.footer .copyright {
		background: #373D94;
		color: white;
		padding: 5px 10px;
		font-weight: 600;
		letter-spacing: 1px;
	}
	table.table h3 {
		padding-bottom: 0;
	}
	tbody tr.even {
		background: #f3f3f3;
	}
	td.heading {
		padding: 20px 50px;
	}
	table.table {
		width: 100%;
	}
	.rating {
		font-size: 22px;
		padding: 5px 20px;
		line-height: 1.5;
		color: #373D94;
		font-weight: 600;
		letter-spacing: 1px;
	}
	.rating p {
		font-size: 18px;
	}
	tr td:first-child {
		width: 40%;
	}
	tr td:nth-child(2), tr td:nth-child(3) {
		width: 30%;
		text-align:center;
		position: relative;
	}
	@media screen and (max-width:767px){
		.compare-product {
			padding: 30px 0;
		}
		table.table {
			width: 100%;
			display: block;
			overflow-x: scroll;
		}
	}
</style>
<script>
	jQuery(document).ready(function(){
		jQuery(document).on("click", "#remove_product", function(){
			var id = jQuery(this).data("id");
			jQuery(document).find(".remove_col_"+id).remove();
			jQuery(document).find(".pro_td_"+id).remove();
		});
	});
</script>	
<?php get_footer(); ?>