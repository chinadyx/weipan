<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no" />
<link type="text/css" rel="stylesheet" href="/Public/Common/bootstrap/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/Public/Common/bootstrap/css/bootstrap-flatly.min.css" />
<title>在线支付</title>
<style type="text/css">
	.media{
		padding: 10px 0;
		border-bottom: 1px solid #ccc;
	}
	.media img{
		max-width:120px;
	}
	.total-price{
		font-size: 30px;
	}
	.order-sum{
		margin:20px 0;
	}
	.text-gray{
		color: gray;
	}
	.price-tag{
		font-weight: bold;
		font-size: 18px;
		text-align: right;
	}
</style>
</head>
<script type="text/javascript">
function redirect(url,time){
	time = time || 2000;
	setTimeout(function(){
        location.href = url;
	},time);
}
</script>
<body>
	<div class="container-fluid">
		<div class="alert alert-success">
			<h3>订单<?php echo ($ret); ?>！</h3>
		</div>
	</div>
</body>
<script>
	redirect("http://weipan.rakefx.com/Wap/User/private_person");
</script>
</html>