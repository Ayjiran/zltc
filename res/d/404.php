<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="icon" href="https://www.cloud.tencent.com/favicon.ico" type="image/x-icon">
	<style>
		.domian-block-box {
			width: 468px;
			margin: 128px auto;
			font-size: 16px;
			color: #222;
			line-height: 24px
		}
		/* .domian-block-icon {background-image:url('img/domian-block-icon.svg');width:70px;height:72px;background-size:70px 72px;margin-bottom:40px} */

		.domian-block-box h1 {
			font-weight: 400;
			font-size: 24px;
			color: #333;
			margin-bottom: 10px;
			line-height: 36px
		}

		.domian-block-text {
			color: #2B2B2B
		}

		.domian-block-box a {
			color: #3367D6
		}

		.domian-block-dl dt {
			color: #222;
			margin-bottom: 10px
		}

		.domian-block-dl {
			margin-top: 60px
		}

		.domian-block-dl dd {
			margin-bottom: 10px;
			position: relative;
			padding-left: 10px
		}

		.domian-block-dl dd:before {
			content: '';
			width: 5px;
			height: 5px;
			border-radius: 4px;
			background-color: #333;
			position: absolute;
			vertical-align: middle;
			top: 7px;
			left: 0
		}

		.domian-block-service {
			margin-top: 60px
		}

		.domian-block-btn,
		.domian-block-reason-info {
			display: none
		}

		.domian-block-reason-text {
			color: #666
		}

		@media screen and (max-width:768px) {
			body {
				margin: 0 25px
			}
			.domian-block-dl dd:before,
			.domian-block-dl dt,
			.domian-block-dl-span,
			.domian-block-reason,
			.domian-block-service {
				display: none
			}
			.domian-block-reason-info {
				display: block;
				font-size: 16px;
				color: #3367D6;
				line-height: 24px;
				margin-top: 40px
			}
			.domian-block-box {
				width: auto;
				margin: 80px auto;
				max-width: 310px
			}
			.domian-block-hidden {
				display: none !important
			}
			.domian-block-show {
				display: block !important
			}
			.domian-block-dl dd {
				padding-left: 0;
				padding-bottom: 40px
			}
			.domian-block-reason-text {
				margin-top: 10px;
				margin-bottom: 10px
			}
			.domian-block-btn {
				background-color: #1E88E5;
				border-radius: 4px;
				width: 310px;
				height: 54px;
				display: block;
				color: #fff !important;
				line-height: 54px;
				text-align: center;
				font-size: 14px;
				margin: 0 auto
			}
			.domian-block-text {
				color: #666
			}
		}
	</style>
	<link rel="stylesheet" href="https://imgcache.qq.com/open_proj/proj_qcloud_v2/gateway/portal/css/global-201811090948.css?max_age=31536000">
</head>

<body>
	<div class="domian-block-box" id="noBeian">
		<div class="domian-block-hd domian-block-show">
			<h1>网站暂时无法访问</h1>
			<div class="domian-block-text">该网站处于<a href="#" target="_blank">无网络</a>状态<div>
		</div>
		<div class="domian-block-reason-info domian-block-show">请检查网络或者文件链接正确！</div>
		<div class="domian-block-reason domian-block-hidden">
			<dl class="domian-block-dl">
	</div>



	<script type="text/JavaScript" src="//imgcache.qq.com/open/qcloud/js/version/201408/jquery.201408191328.js"></script>
	<script type="text/JavaScript" src="//imgcache.qq.com/qcloud/main/scripts/release/common/login/api.js"></script>
	<script>
		$(function () {
			function init() {
				$('.domian-block-reason-info').on('click', function () {
					$('.domian-block-reason-info').removeClass('domian-block-show').addClass('domian-block-hidden');
					$('.domian-block-hd').removeClass('domian-block-show').addClass('domian-block-hidden');
					$('.domian-block-reason').removeClass('domian-block-hidden').addClass('domian-block-show');
				});
				$('.domian-block-btn').on('click', function () {
					$('.domian-block-reason-info').removeClass('domian-block-hidden').addClass('domian-block-show');
					$('.domian-block-hd').removeClass('domian-block-hidden').addClass('domian-block-show');
					$('.domian-block-reason').removeClass('domian-block-show').addClass('domian-block-hidden');
				});
			}
			init();
		})
	</script>
</body>

</html>
<!--[if !IE]>|xGv00|8f85bc5ee2a463e0e5c16c474a6dd271<![endif]-->