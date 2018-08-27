<?php
	include_once('config.php'); 
	include_once('inc/inc_logo.php'); 
	require_once "inc/Mobile_Detect.php";
	$detect = new Mobile_Detect;
	
	function time2string($second){
    $day = floor($second/(3600*24));
    $second = $second%(3600*24);//除去整天之后剩余的时间
    $hour = floor($second/3600);
    $second = $second%3600;//除去整小时之后剩余的时间 
    $minute = floor($second/60);
    $second = $second%60;//除去整分钟之后剩余的时间 
    
    $array_day = preg_split('//', (string)$day, -1, PREG_SPLIT_NO_EMPTY); 
    $array_hour = preg_split('//', (string)$hour, -1, PREG_SPLIT_NO_EMPTY); 
    $array_minute = preg_split('//', (string)$minute, -1, PREG_SPLIT_NO_EMPTY); 
    $array_second = preg_split('//', (string)$second, -1, PREG_SPLIT_NO_EMPTY); 
    if($day >= 100) {
	    $day1 = $array_day[0];
	    $day2 = $array_day[1];
	    $day3 = $array_day[2];
    } else {
	    $day1 = '0';
	    $day2 = $array_day[0];
	    $day3 = $array_day[1];
    }
    
    if($hour >= 10) {
    $hour1 = $array_hour[0];
	$hour2 = $array_hour[1];
	} else {
	$hour1 = '0';
	$hour2 = $array_hour[0];	
	}
	
	if($minute >= 10) {
    $minute1 = $array_minute[0];
	$minute2 = $array_minute[1];
	} else {
	$minute1 = '0';
	$minute2 = $array_minute[0];	
	}
	
	if($second >= 10) {
    $second1 = $array_second[0];
	$second2 = $array_second[1];
	} else {
	$second1 = '0';
	$second2 = $array_second[0];	
	}
    
    $date = array(
	    "day"=>$day,
	    "day1"=>$day1,
	    "day2"=>$day2,
	    "day3"=>$day3,
	    "hour"=>$hour,
	    "hour1"=>$hour1,
	    "hour2"=>$hour2,
	    "minute"=>$minute,
	    "minute1"=>$minute1,
	    "minute2"=>$minute2,
	    "second"=>$second,
	    "second1"=>$second1,
	    "second2"=>$second2,
    );
    //返回字符串
    return $date;
}



$time1 = strtotime('2018-12-06 11:00:00');
$time2 = time();
//相减得到相差的 秒 数
$time3 = $time1 - $time2;
//输出
$start_date = time2string($time3);
//print_r($start_date);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php include_once('inc/inc_meta.php'); ?>
        <title>
            首頁 | WirForce 2018 - 4Gamers
        </title>
        
        <!-- style start -->
        <link href="css/plugins.css" media="all" rel="stylesheet" type="text/css">
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->
        <link href="css/wirforce.css?s=<?php echo time();?>" media="all" rel="stylesheet" type="text/css">
        <!-- google fonts start -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7CDosis:200,300,400,500,600,700,800%7CMontserrat:400,700" rel="stylesheet" type="text/css">
        <!-- google fonts end -->
        <!--[if lt IE 9]>
            <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php include_once('inc/inc_header.php'); ?>
        
        <!-- home start -->
        <div class="upper-page" id="home">
            <!-- hero bg start -->
            <div class="hero-fullscreen">
                <!-- shadow start -->
                <div class="top-shadow"></div><!-- shadow end -->
                <!-- single image start -->
                <div class="hero-fullscreen-FIX">
                    <div class="hero-bg bg-img-wirforce"></div>
                </div><!-- single image end -->
            </div><!-- hero bg end -->
            <!-- center container start -->
            <div class="center-container">
                <!-- center block start -->
                <div class="center-block fadeIn-element">
                    <h1 class="home-page-title">
                        <div class="count_wrap">  
<!-- 計時器 start -->
  <div class="countdown">
    <div class="bloc-time days" data-init-value="<?php echo $start_date['day'];?>">
      <span class="count-title">天</span>

      <div class="figure days days-1">
        <span class="top"><?php echo $start_date['day1'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['day1'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['day1'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['day1'];?></span>
        </span>
      </div>

      <div class="figure days days-2">
        <span class="top"><?php echo $start_date['day2'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['day2'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['day2'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['day2'];?></span>
        </span>
      </div>
      
      <div class="figure days days-3">
        <span class="top"><?php echo $start_date['day3'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['day3'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['day3'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['day3'];?></span>
        </span>
      </div>
    </div>
    
    
    <div class="bloc-time hours" data-init-value="<?php echo $start_date['hour'];?>">
      <span class="count-title">小時</span>

      <div class="figure hours hours-1">
        <span class="top"><?php echo $start_date['hour1'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['hour1'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['hour1'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['hour1'];?></span>
        </span>
      </div>

      <div class="figure hours hours-2">
        <span class="top"><?php echo $start_date['hour2'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['hour2'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['hour2'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['hour2'];?></span>
        </span>
      </div>
    </div>

    <div class="bloc-time min" data-init-value="<?php echo $start_date['minute'];?>">
      <span class="count-title">分鐘</span>

      <div class="figure min min-1">
        <span class="top"><?php echo $start_date['minute1'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['minute1'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['minute1'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['minute1'];?></span>
        </span>        
      </div>

      <div class="figure min min-2">
       <span class="top"><?php echo $start_date['minute2'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['minute2'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['minute2'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['minute2'];?></span>
        </span>
      </div>
    </div>

    <div class="bloc-time sec" data-init-value="<?php echo $start_date['second'];?>">
      <span class="count-title">秒</span>

        <div class="figure sec sec-1">
        <span class="top"><?php echo $start_date['second1'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['second1'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['second1'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['second1'];?></span>
        </span>          
      </div>

      <div class="figure sec sec-2">
        <span class="top"><?php echo $start_date['second2'];?></span>
        <span class="top-back">
          <span><?php echo $start_date['second2'];?></span>
        </span>
        <span class="bottom"><?php echo $start_date['second2'];?></span>
        <span class="bottom-back">
          <span><?php echo $start_date['second2'];?></span>
        </span>
      </div>
    </div>
    
    
  </div>
  
  <div class="bg-main-title"><img src="img/main_title1.png"></div>
</div>
<!-- 計時器 end -->

                    </h1>
                    
                </div><!-- center block end -->
            </div><!-- center container end -->
        </div><!-- home end -->
        
        <!-- logo_wall start -->
        <section id="logo_wall">
            <!-- container start -->
            <div class="container sections">
                <!-- row start -->
                <div class="row">
                    
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12  text-center">
	                    <div class="thank_img">
								 <?php foreach($all_logo as $logo) {?>
						        <img src="/img/thank/<?php echo $logo['logo'];?>" alt="<?php echo $logo['name'];?>" title="<?php echo $logo['name'];?>">	
						     <?php } ?>
							</div>
                    </div>
                    <!-- col start -->
                </div>
            </div>
        </section>
	    <!-- logo_wall end -->          
	                    
        <!-- about start -->
        <section id="about">
            <!-- container start -->
            <div class="container sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">
                            什麼是 WirForce？
                        </h2>
                    </div><!-- col end -->
                </div><!-- row end -->
                <!-- row start -->
                <div class="row">
                    
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12  text-center">
	                    <?php if($detect->isMobile()) { ?>
                        <p>臺灣也有自己的 Lan Party！歡迎來到 WirForce 2018！本次 BYOC 座位將會擴增超過 1,200 席，同時各大知名品牌與相關活動將齊聚一堂。讓我們再次攜手創造亞洲有史以來最空前的電競盛會。</p>
                        <?php } else {?>
                        <p>臺灣也有自己的 Lan Party！歡迎來到 WirForce 2018！<br>本次 BYOC 座位將會擴增超過 1,200 席，同時各大知名品牌與相關活動將齊聚一堂。<br>讓我們再次攜手創造亞洲有史以來最空前的電競盛會。</p>
                        <?php } ?>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- container end -->
        </section><!-- about end -->
        
        
        <!-- about2 start -->
        <section id="about2">
            <!-- container start -->
            <div class="container sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">
                            什麼是Born to Game?
                        </h2>
                    </div><!-- col end -->
                </div><!-- row end -->
                <!-- row start -->
                <div class="row">
                    
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 text-center">
	                    <?php if($detect->isMobile()) { ?>
	                    <p>WirForce 2018年度主軸「Born to Game」，代表「玩家為遊戲而生」。「遊戲」是每個人與生俱來的能力， 不用刻意學習，亦不用效仿別人。我們「天生會玩」，因為我們正在用遊戲寫下新的人生。</p>
	                    <?php } else {?>
	                    <p>WirForce 2018年度主軸「Born to Game」，代表「玩家為遊戲而生」。<br>「遊戲」是每個人與生俱來的能力， 不用刻意學習，亦不用效仿別人。<br>我們「天生會玩」，因為我們正在用遊戲寫下新的人生。</p>
	                    <?php }?>
                        
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- container end -->
        </section><!-- about2 end -->
        
        
        <!-- about3 start -->
        <section id="about3">
            <!-- container start -->
            <div class="container sections">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">
                            活動時間、地點
                        </h2>
                    </div><!-- col end -->
                </div><!-- row end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12 text-center">
                        <img src="/img/wf2018_map.jpg" style="max-width: 100%">
                    </div><!-- col end -->
                    <!-- col start -->
                    <div class="col-md-12 col-sm-12">
                    <h2 class="title text-center">時間：2018 年 12 月 6 日（四）11:00 – 12 月 9 日（日）17:30</h3>
                    <h2 class="title text-center">地點：花博爭艷館</h3>
                    <p class="text-center">
	                    <a target="_blank" href="https://calendar.google.com/calendar/r/eventedit?text=2018+Wirforce&dates=20181206T030000Z/20181210T093000Z&details=2018+Wirforce+%E6%AD%A3%E5%BC%8F%E5%95%9F%E5%8B%95+%E6%9B%B4%E5%A4%9A%E8%B3%87%E8%A8%8A:+http://www.wirforce.com.tw&location=%E8%8A%B1%E5%8D%9A%E5%85%AC%E5%9C%92%E7%88%AD%E8%89%B7%E9%A4%A8&sf=true&output=xml" class="c-btn1">加到 Google 行事曆</a>
                    </p>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- container end -->
        </section><!-- about3 end -->
        
        
        
        
        <?php include_once('inc/inc_footer.php'); ?>
        
        
        
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
	    <script src="js/countdown.js"></script>
    </body>
</html>