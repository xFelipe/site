<?php
	$place = $GLOBALS["commerce-page"];
	$apiKey = "AIzaSyABhA43LVgvAgPjrwWgTsXehbb9UHQImm4";

	getPageHeader(
		array(
			"description" => substr($place->getDescription(), 30),
			"page-title" => $place->getName() . " - Eu Quero"
		)
	);
?>
	<body>
		<?php getNavbar() ?>

		<!--content area start-->
		<div id="content" class="pmd-content inner-page" style="margin-left: 0">

			<!--tab start-->
			<div class="container-fluid full-width-container contact">
				<div class="row map-location">
					<div class="section col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contact">
						<section class="contact-page">
		   					<div class="row contact-map">
		      					<div class="iframe-overlay" style="max-width:100%;overflow:hidden;height:500px;">
		      						<div style="height:100%; width:100%;max-width:100%;" id="google-maps-display">
										<iframe
											src="https://maps.google.com/maps?q=<?php echo $place->getLatitude() ?>,<?php echo $place->getLongitude() ?>&language=pt-BR;z=14&amp;output=embed"
											width="100%"
											height="100%"
											frameborder="0"
											style="border:0"
											allowfullscreen>
										</iframe>
									</div>
		      					</div>
		      					<div class="contact-form">
		      						<div class="container">
		        						<div class="row">
		          							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                						<div class="contact-details pmd-card pmd-z-depth fill">
		                    						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 feedback-form">
		                    							<div class="col-sm-3">
			                    							<div class="thumbnail img-circle img-responsive">
																<img src="<?php echo $place->getLogo() ?>">
															</div>
														</div>
		                    							<div class="col-sm-9">
	                    									<h1 class="pmd-display1"><?php echo $place->getName() ?></h1>
		                        							<p class="sub-title"><?php echo $place->getDescription() ?></p>
														</div>

		                    							<div class="col-sm-12">
	                    									<h2 class="pmd-display2">Informações</h2>

		                        							<div class="pmd-chip"><?php echo $place->getProducts_count() ?> produtos cadastrados</div>
		                        							<div class="pmd-chip"><?php echo $place->getTotal_views() ?> visualizações</div>
		                        							<div class="pmd-chip">0 vendas com sucesso</div>
		                        						</div>
		                    						</div>
													<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 adress-col">
														<h2 class="content-title">Contato</h2>
														<div class="contact-info location">
															<span><b>Endereço</b><br>
															<?php echo $place->getAddress() ?></span>
														</div>
														<div class="contact-info customer-care">
															<span><b>Telefone</b><br>
															<?php echo $place->getPhone() ?></span>
														</div>
														<div class="contact-info mail-us">
															<span><b>Email</b><br>
															<a href="mailto:<?php echo $place->getEmail() ?>"><?php echo $place->getEmail() ?></a></span>
														</div>
													</div>
		           								</div>
		            						</div>
		         						</div>
		       						</div>
		     					</div>
		  					</div>
		 				</section> <!-- section content end -->
					</div>
				</div>
			</div>

			<div class="container">
				<div class="pmd-z-depth" style="padding: 20px; margin: 10px 0px; background-color: #FFF">
					<div class="col-sm-12" style="padding: 0; margin-bottom: 20px">
						<h1 class="pmd-display3 category-title">Produtos</h1>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="product-card">
							    <div class="front">
							    	<div class="image">
							    		<img src="https://produtos.fotos-riachuelo.com.br/media/catalog/product/cache/image/1098x1370/e9c3970ab036de70892d86c6d221abfe/t/e/tenis-all-star-converse--12373397_foto1_frontal.jpg" class="card-image">
							    		<div class="image-overlay">
							    			<span>Mais sobre o produto</span>
							    		</div>
							    	</div>

							    	<div class="content">
							    		<span class="title">All Star Preto Clássico</span>
							    		<span class="price">R$ 110</span>
							    	</div>
							    </div>
							    <div class="back">
							    	<div class="content">
						    			<div class="description">
						    				<span class="title">All Star Preto Clássico</span>

						    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu urna vitae lorem varius aliquam vitae ac augue. Nulla nec malesuada est. Maecenas quis nibh finibus massa laoreet mattis. Nam tempus blandit placerat. Duis vehicula ligula mauris. Aliquam accumsan consequat ultrices. Curabitur elementum orci a arcu aliquam mollis</p>
						    			</div>
						    			<div class="footer">
						    				<span>Ainda existe em estoque</span>
						    				<div class="simple-row">
						    					<span class="view-counter">22</span>
						    					<i class="material-icons" style="font-size: 20px; color: #616161">remove_red_eye</i>
						    				</div>
						    			</div>
									    <div class="social-icons">
									    	<a href="#" class="share-icon fab fa-facebook-f"></a>
									    	<a href="#" class="share-icon fab fa-twitter"></a>
									    	<a href="#" class="share-icon fab fa-whatsapp"></a>
									    	<a href="#" class="share-icon fab fa-google"></a>
									    </div>
								    </div>
								</div>
						  	</div>
						</div>

						<div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="product-card">
							    <div class="front">
							    	<div class="image">
							    		<img src="https://produtos.fotos-riachuelo.com.br/media/catalog/product/cache/image/1098x1370/e9c3970ab036de70892d86c6d221abfe/t/e/tenis-all-star-converse--12373397_foto1_frontal.jpg" class="card-image">
							    		<div class="image-overlay">
							    			<span>Mais sobre o produto</span>
							    		</div>
							    	</div>

							    	<div class="content">
							    		<span class="title">All Star Preto Clássico</span>
							    		<span class="price">R$ 110</span>
							    	</div>
							    </div>
							    <div class="back">
							    	<div class="content">
						    			<div class="description">
						    				<span class="title">All Star Preto Clássico</span>

						    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu urna vitae lorem varius aliquam vitae ac augue. Nulla nec malesuada est. Maecenas quis nibh finibus massa laoreet mattis. Nam tempus blandit placerat. Duis vehicula ligula mauris. Aliquam accumsan consequat ultrices. Curabitur elementum orci a arcu aliquam mollis</p>
						    			</div>
						    			<div class="footer">
						    				<span>Ainda existe em estoque</span>
						    				<div class="simple-row">
						    					<span class="view-counter">22</span>
						    					<i class="material-icons" style="font-size: 20px; color: #616161">remove_red_eye</i>
						    				</div>
						    			</div>
									    <div class="social-icons">
									    	<a href="#" class="share-icon fab fa-facebook-f"></a>
									    	<a href="#" class="share-icon fab fa-twitter"></a>
									    	<a href="#" class="share-icon fab fa-whatsapp"></a>
									    	<a href="#" class="share-icon fab fa-google"></a>
									    </div>
								    </div>
								</div>
						  	</div>
						</div>

						<div class=" col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="product-card">
							    <div class="front">
							    	<div class="image">
							    		<img src="https://produtos.fotos-riachuelo.com.br/media/catalog/product/cache/image/1098x1370/e9c3970ab036de70892d86c6d221abfe/t/e/tenis-all-star-converse--12373397_foto1_frontal.jpg" class="card-image">
							    		<div class="image-overlay">
							    			<span>Mais sobre o produto</span>
							    		</div>
							    	</div>

							    	<div class="content">
							    		<span class="title">All Star Preto Clássico</span>
							    		<span class="price">R$ 110</span>
							    	</div>
							    </div>
							    <div class="back">
							    	<div class="content">
						    			<div class="description">
						    				<span class="title">All Star Preto Clássico</span>

						    				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu urna vitae lorem varius aliquam vitae ac augue. Nulla nec malesuada est. Maecenas quis nibh finibus massa laoreet mattis. Nam tempus blandit placerat. Duis vehicula ligula mauris. Aliquam accumsan consequat ultrices. Curabitur elementum orci a arcu aliquam mollis</p>
						    			</div>
						    			<div class="footer">
						    				<span>Ainda existe em estoque</span>
						    				<div class="simple-row">
						    					<span class="view-counter">22</span>
						    					<i class="material-icons" style="font-size: 20px; color: #616161">remove_red_eye</i>
						    				</div>
						    			</div>
									    <div class="social-icons">
									    	<a href="#" class="share-icon fab fa-facebook-f"></a>
									    	<a href="#" class="share-icon fab fa-twitter"></a>
									    	<a href="#" class="share-icon fab fa-whatsapp"></a>
									    	<a href="#" class="share-icon fab fa-google"></a>
									    </div>
								    </div>
								</div>
						  	</div>
						</div>

					</div>
				</div>
			</div>

		</div><!-- content area end -->

		<style type="text/css">
			body {
				margin-bottom: 100px;
			}
			#content {
				padding-bottom: 100px
			}
			.logout {
				margin-left: 30px;
				margin-top: 25px;
			}
			.pmd-chip {
				padding-right: 15px;
				margin: 5px 10px;
			}
			.pmd-display2 {
				margin-bottom: 20px
			}
			.category-title {
				font-size: 2.5em;
				color: #000;
				opacity: 0.8
			}
		</style>


		<script src="/js/jquery-1.12.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/propeller.min.js"></script>
		<script src="/js/card.js"></script>
		<script>
			$(document).ready(function() {
				var sPath=window.location.pathname;
				var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
				$(".pmd-sidebar-nav").each(function(){
					$(this).find("a[href='"+sPage+"']").parents(".dropdown").addClass("open");
					$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
					$(this).find("a[href='"+sPage+"']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
					$(this).find("a[href='"+sPage+"']").addClass("active");
				});
				$(".auto-update-year").html(new Date().getFullYear());
			});
		</script>

		<!-- Scripts Ends -->

	</body>
</html>
