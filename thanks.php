<?php 
	include_once('config.php'); 
	include_once('inc/inc_logo.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php include_once('inc/inc_meta.php'); ?>
        <title>
            特別感謝 | WirForce 2018 - 4Gamers
        </title>
        
        <!-- style start -->
        <link href="css/plugins.css" media="all" rel="stylesheet" type="text/css">
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
        <link href="css/wirforce.css?s=<?php echo time();?>" media="all" rel="stylesheet" type="text/css">
        <!-- google fonts start -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7CDosis:200,300,400,500,600,700,800%7CMontserrat:400,700" rel="stylesheet" type="text/css">
        <!-- google fonts end -->
		<link href="css/thank.css" media="all" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php include_once('inc/inc_header.php'); ?>
        <!-- padding start -->
        <div class="page-padding">
            
        </div><!-- padding end -->
        <!-- about start -->
        <section id="about">
            <!-- container start -->
            <div class="container sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">
                            特別感謝
                        </h2>
                    </div><!-- col end -->
                </div><!-- row end -->
                <!-- row start -->
                <div class="row">
                    
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12">
					    <div class="thank_group">	
	                         <h3 class="title after_block">主辦單位</h3>
	                         
							 <div class="thank_img">
								 <?php foreach($logo_main as $logo) {?>
						        <img src="/img/thank/<?php echo $logo['logo'];?>" alt="<?php echo $logo['name'];?>" title="<?php echo $logo['name'];?>">	
						     <?php } ?>
							</div>
						</div>
				        <img src="img/line_item.png" class="line-item">
						
						 <div class="thank_group">	
	                         <h3 class="title after_block">合作夥伴</h3>
						     <div class="thank_img">
							    <?php foreach($logo_partner as $logo) {?>
						        <img src="/img/thank/<?php echo $logo['logo'];?>" alt="<?php echo $logo['name'];?>" title="<?php echo $logo['name'];?>">	
						     <?php } ?>
						     </div>
				        </div> 
				        <img src="img/line_item.png" class="line-item">
						
						<div class="thank_group">	
	                         <h3 class="title after_block">合辦單位</h3>
						     <div class="thank_img">
						        <?php foreach($logo_co as $logo) {?>
						        <img src="/img/thank/<?php echo $logo['logo'];?>" alt="<?php echo $logo['name'];?>" title="<?php echo $logo['name'];?>">	
						     <?php } ?>	
						     </div>
				        </div>
				        <img src="img/line_item.png" class="line-item">
				        <?php /* 隱藏協力夥伴區塊
				        <div class="thank_group">	
	                         <h3 class="title after_block">協力夥伴</h3>
						     <div class="thank_img">
						        <?php foreach($logo_support as $logo) {?>
						        <img src="/img/thank/<?php echo $logo['logo'];?>" alt="<?php echo $logo['name'];?>" title="<?php echo $logo['name'];?>">	
						     <?php } ?>
						     </div>
				        </div>
				        <img src="img/line_item.png" class="line-item">
				        
				        */?>
						
						 <div class="thank_group ">	
	                         <h3 class="title after_block">參與單位</h3>
						    <div class="thank_img">
						        <?php foreach($logo_other as $logo) {?>
						        <img src="/img/thank/<?php echo $logo['logo'];?>" alt="<?php echo $logo['name'];?>" title="<?php echo $logo['name'];?>">	
						     <?php } ?>
						     </div>
				        </div>
				        <img src="img/line_item.png" class="line-item">
						
						 
						
						
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- container end -->
        </section><!-- about end -->
        
        
        
       

        
        
        

        
        
        
        <?php include_once('inc/inc_footer.php'); ?>
        
        
    </body>
</html>