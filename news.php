<?php 
	include_once('config.php'); 
	include_once('inc/data.news.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php include_once('inc/inc_meta.php'); ?>
	<title>
		媒體報導 | WirForce 2018 - 4Gamers
	</title>

	<!-- style start -->
	<link href="css/plugins.css" media="all" rel="stylesheet" type="text/css">
	<link href="css/style.css" media="all" rel="stylesheet" type="text/css">
	<!-- style end -->
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
	<!-- padding start -->
	<div class="page-padding">

	</div>
	<!-- padding end -->

	<section id="about">
		<!-- container start -->
		<div class="container sections">
			<!-- row start -->
			<div class="row">
				<!-- col start -->
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">媒體報導</h2>
				</div>
				<!-- col end -->
			</div>
			<!-- row end -->
			<!-- row start -->
			<div class="row">

				<!-- col start -->
				<div class="col-md-12 col-sm-12">

					<ul class="nav nav-tabs" id="shoppingTabs" role="tablist">
						<li role="presentation"><a href="#news2015" id="news2015-tab" role="tab" data-toggle="tab" aria-controls="news2015" aria-expanded="true">2015</a></li>
						<li role="presentation"><a href="#news2016" role="tab" id="news2016-tab" data-toggle="tab" aria-controls="news2016">2016</a></li>
						<li role="presentation"><a href="#news2017" role="tab" id="news2017-tab" data-toggle="tab" aria-controls="news2017">2017</a></li>
						<li role="presentation" class="active"><a href="#4gamers" role="tab" id="4gamers-tab" data-toggle="tab" aria-controls="4gamers">4Gamers 站內新聞</a></li>
					</ul>
					<div class="tab-content" id="TabContent">
						<!-- tab news2015 start -->
						<div class="tab-pane fade in" role="tabpanel" id="news2015" aria-labelledby="news2015-tab">
							<h3 class="title">2015</h3>
							<?php foreach($news2015 as $news) {?>
							<a class="news-item" target="_blank" href="<?php echo $news['url'];?>">
								<div class="left">
								<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjAuMiwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IuWcluWxpF8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB2aWV3Qm94PSIwIDAgNTcwIDMwMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTcwIDMwMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJLnN0MHtmaWxsOiNFMDI1M0U7fQo8L3N0eWxlPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNDAxLjUsMTg0LjljMS43LDAsMjIuNC00Mi41LDIyLjgtNDMuNWMtMTAuNCwwLTgwLjIsMC05MC42LDBjNC4zLTguOSw4LjMtMTcuMiwxMi40LTI1LjYKCWMxLjIsMCw4NS4zLDAsMTAwLjIsMGMxLjUsMCwyMi4yLTQyLjgsMjIuNC00My40SDMxNC41Yy0xMS4zLDI0LjEtMjIuNyw0OC4zLTM0LDcyLjVjLTExLjQsMjQuMi0yMi43LDQ4LjUtMzQsNzIuNUg0MS43CgljLTAuNS00LjMtMC4zLTE3Mi4xLDAuMi0xNzQuMmgxNzFjNS0xMC40LDEwLTIwLjYsMTUtMzFjLTQuMi0wLjYtMjE2LjEtMC40LTIxOC4xLDAuMmMwLjEsNzguNywwLjMsMTU3LjQsMC40LDIzNi40aDIyMS40CgljLTEuOCwzLjgtMTguMSwzOC40LTE5LjYsNDIuM2MxLjQsMCw0Ni4yLTAuMSw0OC43LDBjMS42LDAuMSw1Mi41LTEwNS41LDUyLjktMTA2LjNDMzE0LjgsMTg0LjksMzczLjMsMTg0LjksNDAxLjUsMTg0Ljl6CgkgTTI2My42LDEyLjFjLTQuOCwxMC4xLTkuNSwyMC0xNC4yLDI5LjlzLTkuNCwxOS45LTE0LjEsMjkuOGMtNC43LDkuOS05LjQsMTkuOS0xNC4xLDI5LjhjLTQuNyw5LjktOS4zLDE5LjgtMTQsMjkuNgoJYy0wLjIsMC0wLjMtMC4xLTAuNS0wLjFjLTIuNy0xOS4yLTUuNC0zOC40LTgtNTcuNmgtNDcuOGMtOS4xLDE5LjEtMTguMiwzOC4yLTI3LjMsNTcuMmMwLDAuMS0wLjEsMC4xLTAuMiwwLjFzLTAuMiwwLTAuNC0wLjFWNzMKCUg3OS42djExMS40aDY3LjFjOC4zLTE3LjgsMTYuNS0zNS40LDI0LjctNTNjMC4xLTAuMiwwLjItMC4zLDAuMy0wLjRjMC4xLTAuMSwwLjEtMC4xLDAuMi0wLjFjMC4xLDAsMC4yLDAsMC40LDAuMQoJYzEuOCwxNy44LDMuNiwzNS41LDUuNSw1My41aDUxLjljMjIuMS00Ny4xLDQ0LjItOTQuMiw2Ni4yLTE0MS4xYzExLjgtMC42LDIxMC42LTAuMywyMTMuMSwwLjRjLTI3LjYsNTgtNTUuMiwxMTYtODIuNywxNzMuOUgzMzQKCWMtNSwxMC4zLTkuOSwyMC42LTE0LjksMzFoMTI5LjJDNDU1LjksMjM0LDU1OS4xLDE0LjMsNTU5LjQsMTIuMUgyNjMuNnoiLz4KPC9zdmc+Cg==">
								</div>
								<div class="right">
								<div class="title"><?php echo $news['title'];?></div>
								<div class="source"><?php echo $news['date'];?> <?php echo $news['source'];?></div>
								</div>
								<div class="clearfix"></div>
							</a>
							<?php } ?>
						</div>
						<!-- tab news2015 end -->
						
						
						<!-- tab news2016 start -->
						<div class="tab-pane fade in" role="tabpanel" id="news2016" aria-labelledby="news2016-tab">
							<h3 class="title">2016</h3>
							<?php foreach($news2016 as $news) {?>
							<a class="news-item" target="_blank" href="<?php echo $news['url'];?>">
								<div class="left">
								<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjAuMiwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IuWcluWxpF8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB2aWV3Qm94PSIwIDAgNTcwIDMwMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTcwIDMwMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJLnN0MHtmaWxsOiNFMDI1M0U7fQo8L3N0eWxlPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNDAxLjUsMTg0LjljMS43LDAsMjIuNC00Mi41LDIyLjgtNDMuNWMtMTAuNCwwLTgwLjIsMC05MC42LDBjNC4zLTguOSw4LjMtMTcuMiwxMi40LTI1LjYKCWMxLjIsMCw4NS4zLDAsMTAwLjIsMGMxLjUsMCwyMi4yLTQyLjgsMjIuNC00My40SDMxNC41Yy0xMS4zLDI0LjEtMjIuNyw0OC4zLTM0LDcyLjVjLTExLjQsMjQuMi0yMi43LDQ4LjUtMzQsNzIuNUg0MS43CgljLTAuNS00LjMtMC4zLTE3Mi4xLDAuMi0xNzQuMmgxNzFjNS0xMC40LDEwLTIwLjYsMTUtMzFjLTQuMi0wLjYtMjE2LjEtMC40LTIxOC4xLDAuMmMwLjEsNzguNywwLjMsMTU3LjQsMC40LDIzNi40aDIyMS40CgljLTEuOCwzLjgtMTguMSwzOC40LTE5LjYsNDIuM2MxLjQsMCw0Ni4yLTAuMSw0OC43LDBjMS42LDAuMSw1Mi41LTEwNS41LDUyLjktMTA2LjNDMzE0LjgsMTg0LjksMzczLjMsMTg0LjksNDAxLjUsMTg0Ljl6CgkgTTI2My42LDEyLjFjLTQuOCwxMC4xLTkuNSwyMC0xNC4yLDI5LjlzLTkuNCwxOS45LTE0LjEsMjkuOGMtNC43LDkuOS05LjQsMTkuOS0xNC4xLDI5LjhjLTQuNyw5LjktOS4zLDE5LjgtMTQsMjkuNgoJYy0wLjIsMC0wLjMtMC4xLTAuNS0wLjFjLTIuNy0xOS4yLTUuNC0zOC40LTgtNTcuNmgtNDcuOGMtOS4xLDE5LjEtMTguMiwzOC4yLTI3LjMsNTcuMmMwLDAuMS0wLjEsMC4xLTAuMiwwLjFzLTAuMiwwLTAuNC0wLjFWNzMKCUg3OS42djExMS40aDY3LjFjOC4zLTE3LjgsMTYuNS0zNS40LDI0LjctNTNjMC4xLTAuMiwwLjItMC4zLDAuMy0wLjRjMC4xLTAuMSwwLjEtMC4xLDAuMi0wLjFjMC4xLDAsMC4yLDAsMC40LDAuMQoJYzEuOCwxNy44LDMuNiwzNS41LDUuNSw1My41aDUxLjljMjIuMS00Ny4xLDQ0LjItOTQuMiw2Ni4yLTE0MS4xYzExLjgtMC42LDIxMC42LTAuMywyMTMuMSwwLjRjLTI3LjYsNTgtNTUuMiwxMTYtODIuNywxNzMuOUgzMzQKCWMtNSwxMC4zLTkuOSwyMC42LTE0LjksMzFoMTI5LjJDNDU1LjksMjM0LDU1OS4xLDE0LjMsNTU5LjQsMTIuMUgyNjMuNnoiLz4KPC9zdmc+Cg==">
								</div>
								<div class="right">
								<div class="title"><?php echo $news['title'];?></div>
								<div class="source"><?php echo $news['date'];?> <?php echo $news['source'];?></div>
								</div>
								<div class="clearfix"></div>
							</a>
							<?php } ?>
						</div>
						<!-- tab news2016 end -->
						
						
						<!-- tab news2017 start -->
						<div class="tab-pane fade in" role="tabpanel" id="news2017" aria-labelledby="news2017-tab">
							<h3 class="title">2017</h3>
						</div>
						<!-- tab news2017 start -->
						
						<!-- tab 4gamers start -->
						<div class="tab-pane fade in active" role="tabpanel" id="4gamers" aria-labelledby="4gamers-tab">
						<h3 class="title">4Gamers 站內新聞</h3>
						<div class="4gamers-all"></div>
						
						<div class="pagination">
							<div onclick="" class="prev-page c-btn1 ghost-btn pull-left disabled">上一頁</div>
							<div class="currentPage">
								<span class="now"></span>
								<span  class="last"></span>
							</div>
							<div onclick="" class="next-page c-btn1 pull-right ghost-btn">下一頁</div>
						</div>
						
						
						
						</div>
						<!-- tab 4gamers end -->
					</div>
				</div>
				<!-- col end -->


			</div>
			<!-- row end -->
		</div>
		<!-- container end -->
	</section>
	<!-- about end -->










	<?php include_once('inc/inc_footer.php'); ?>



<script>
	
	jQuery(document).ready(function($) {
		load_news('https://api.4gamers.com.tw/v1/news/tag/WirForce?page=1');
		
		
		});
	
	
	function timeConverter(UNIX_timestamp){
	  //var a = new Date(UNIX_timestamp * 1000);
	  var a = new Date(UNIX_timestamp);
	  var months = ['1','2','3','4','5','6','7','8','9','10','11','12'];
	  var year = a.getFullYear();
	  var month = months[a.getMonth()];
	  var date = a.getDate();
	  var hour = a.getHours();
	  var min = a.getMinutes();
	  var sec = a.getSeconds();
	  var time = year + '/' + month + '/' + date;
	  return time;
	}

	
		
	function load_news(url) {
		$.ajax({
        url: url,
        type: "GET",
        dataType: 'json',
        success: function(Jdata) {
	        var html = "";
            if (Jdata.data.length > 0) {
	            $.each(Jdata.data,function(index,data){
		        if (data.published_at == 0) {
			        data.published_at = data.created_at;
			        }
                html +='<a class="news-item" target="_blank" href="https://www.4gamers.com.tw/news/detail/' + data.news_id + '/'+ data.url_string+'">';
				html +='<div class="left">';
				html +='<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjAuMiwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IuWcluWxpF8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB2aWV3Qm94PSIwIDAgNTcwIDMwMCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTcwIDMwMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJLnN0MHtmaWxsOiNFMDI1M0U7fQo8L3N0eWxlPgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNDAxLjUsMTg0LjljMS43LDAsMjIuNC00Mi41LDIyLjgtNDMuNWMtMTAuNCwwLTgwLjIsMC05MC42LDBjNC4zLTguOSw4LjMtMTcuMiwxMi40LTI1LjYKCWMxLjIsMCw4NS4zLDAsMTAwLjIsMGMxLjUsMCwyMi4yLTQyLjgsMjIuNC00My40SDMxNC41Yy0xMS4zLDI0LjEtMjIuNyw0OC4zLTM0LDcyLjVjLTExLjQsMjQuMi0yMi43LDQ4LjUtMzQsNzIuNUg0MS43CgljLTAuNS00LjMtMC4zLTE3Mi4xLDAuMi0xNzQuMmgxNzFjNS0xMC40LDEwLTIwLjYsMTUtMzFjLTQuMi0wLjYtMjE2LjEtMC40LTIxOC4xLDAuMmMwLjEsNzguNywwLjMsMTU3LjQsMC40LDIzNi40aDIyMS40CgljLTEuOCwzLjgtMTguMSwzOC40LTE5LjYsNDIuM2MxLjQsMCw0Ni4yLTAuMSw0OC43LDBjMS42LDAuMSw1Mi41LTEwNS41LDUyLjktMTA2LjNDMzE0LjgsMTg0LjksMzczLjMsMTg0LjksNDAxLjUsMTg0Ljl6CgkgTTI2My42LDEyLjFjLTQuOCwxMC4xLTkuNSwyMC0xNC4yLDI5LjlzLTkuNCwxOS45LTE0LjEsMjkuOGMtNC43LDkuOS05LjQsMTkuOS0xNC4xLDI5LjhjLTQuNyw5LjktOS4zLDE5LjgtMTQsMjkuNgoJYy0wLjIsMC0wLjMtMC4xLTAuNS0wLjFjLTIuNy0xOS4yLTUuNC0zOC40LTgtNTcuNmgtNDcuOGMtOS4xLDE5LjEtMTguMiwzOC4yLTI3LjMsNTcuMmMwLDAuMS0wLjEsMC4xLTAuMiwwLjFzLTAuMiwwLTAuNC0wLjFWNzMKCUg3OS42djExMS40aDY3LjFjOC4zLTE3LjgsMTYuNS0zNS40LDI0LjctNTNjMC4xLTAuMiwwLjItMC4zLDAuMy0wLjRjMC4xLTAuMSwwLjEtMC4xLDAuMi0wLjFjMC4xLDAsMC4yLDAsMC40LDAuMQoJYzEuOCwxNy44LDMuNiwzNS41LDUuNSw1My41aDUxLjljMjIuMS00Ny4xLDQ0LjItOTQuMiw2Ni4yLTE0MS4xYzExLjgtMC42LDIxMC42LTAuMywyMTMuMSwwLjRjLTI3LjYsNTgtNTUuMiwxMTYtODIuNywxNzMuOUgzMzQKCWMtNSwxMC4zLTkuOSwyMC42LTE0LjksMzFoMTI5LjJDNDU1LjksMjM0LDU1OS4xLDE0LjMsNTU5LjQsMTIuMUgyNjMuNnoiLz4KPC9zdmc+Cg==">';
				html +='</div>';
				html +='<div class="right">';
				html +='<div class="title">' + data.title + '</div>';
				html +='<div class="source">' + timeConverter(data.published_at) + ' 4Gamers</div>';
				html +='</div>';
				html +='<div class="clearfix"></div>';
				html +='</a>';
							
				});
				
				$(".4gamers-all").html(html);
				
				$(".pagination .now").html(Jdata.meta._paginator.current_page);
				$(".pagination .last").html('/ '+Jdata.meta._paginator.last_page);
				if(Jdata.meta._paginator.prev_page_url!==null) {
					$(".pagination .prev-page").attr("onClick", "load_news('" +Jdata.meta._paginator.prev_page_url + "')").removeClass("disabled");
				} else {
					$(".pagination .prev-page").addClass("disabled");
				}
				
				if(Jdata.meta._paginator.next_page_url!==null) {
					$(".pagination .next-page").attr("onClick", "load_news('"+Jdata.meta._paginator.next_page_url + "')").removeClass("disabled");
				} else {
					$(".pagination .next-page").addClass("disabled");
				}
            }
        },
        error: function() {
            console.log("ERROR!!!");
        }
    	});
	}
</script>
</body>
</html>