<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,height=device-height"/>
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="<?php echo RES;?>/jinrong/Mobile/Public/css/ucenter.css">
<script src="<?php echo RES;?>/jinrong/Mobile/Public/js/jquery-1.11.3.min.js"></script>
<style>body {padding-bottom: 60px; }</style>
</head>
<title>个人中心</title>
<body>
<script type="text/javascript">
var ROOT = '';
</script>
<!--页面主体内容区域编辑开始-->
<section class="jz-wrapper jz-null-bottom">
<div class="jz-head">
<a href="###" id="account_icon_btn" class="pos-left head-show jz-my_head">
<img src="<?php echo ($user['headimgurl']); ?>" width="33" height="33" alt="">
</a>
<span><?php echo ($user['wechat_name']); ?></span>
<a href="<?php echo U('User/recharge');?>" id="screen" class="font-sm pos-right">充值</a>
</div>
    <div class="account-top-view text-center">
        <p class="font-sm">余额(元)</p>
        <p class="account-total"><?php echo ($user['money']); ?><b style="font-size: 12px;">(冻结：<?php echo ($user['dongjie']); ?>)</b></p>
        <p class="font-sm">模拟盘余额(元)</p>
        <p class="acount-profit font-xl"><?php echo ($user['coin']); ?></p>
    </div>
<div class="water">
<div class="water-1"></div>
<div class="water-2"></div>
</div>
<div class="jz-btn-view bg-00 padding-top12" id="jz-btn-fixed">
    <div class="container jz-flex-row">
<a href="<?php echo U('User/recharge');?>" class="button margin-bottom12 jz-flex-col">充&nbsp;&nbsp;值</a>
        <div class="jz-null-row"></div>
 <a href="<?php echo U('User/cashOut');?>" class="button button-gray button-f7 jz-flex-col">提&nbsp;&nbsp;现</a>
    </div>
</div>
    <div class="collect-wrap">
        <ul class="list-view collect-view margin-top5">

            <li>
                <a href="<?php echo U('User/my_friends');?>" class="list-jump" >
                <div class="list-wrap list-wrap1 jz-flex-row jz-flex-vh">
                    <div class="list-left jz-flex-col font-sb">
                       <i class="icon-cash-s03 record-sty record-sty1"></i>邀好友，赚佣金
                    </div>
                </div>
                </a>
            </li>
            <li>
                <a href="<?php echo U('User/bank_water');?>" class="list-jump" >
                <div class="list-wrap list-wrap1 jz-flex-row jz-flex-vh">
                    <div class="list-left jz-flex-col font-sb">
                        <i class="icon-dollar record-sty record-sty1"></i>资金流水
                    </div>
                </div>
                </a>
            </li>
                        <li>
                <a href="<?php echo U('User/history');?>" class="list-jump" >
                <div class="list-wrap list-wrap1 jz-flex-row jz-flex-vh">
                    <div class="list-left jz-flex-col font-sb">
                        <i class="icon-business2 record-sty record-sty1"></i>交易记录
                    </div>
                </div>
                </a>
            </li>



 <li>
                <a href="<?php echo U('User/pay_water');?>" class="list-jump" >
                <div class="list-wrap list-wrap1 jz-flex-row jz-flex-vh">
                    <div class="list-left jz-flex-col font-sb">
                        <i class="icon-dollar record-sty record-sty1"></i>我的收益
                    </div>
                </div>
                </a>
            </li>


            <!-- <li>
                <a href="<?php echo U('User/recharge');?>" class="list-jump" >
                    <div class="list-wrap list-wrap1 jz-flex-row jz-flex-vh">
                        <div class="list-left jz-flex-col font-sb">
                            <i class="icon-cash-s03 record-sty record-sty1"></i><font color="red">充返100%</font>
                        </div>
                                    <span class="collect-con c-92">余额:<?php echo ($user['money']); ?>元</span>
                                            </div>
                </a>
            </li>
                        <li>
            
                            <a href="<?php echo U('User/invite');?>" class="list-jump" id="to_coupon">
                    <div class="list-wrap list-wrap1 jz-flex-row jz-flex-vh">
                        <div class="list-left jz-flex-col font-sb">
                            <i class="icon-gift01 record-sty record-sty2"></i>
                            <span class="jz-reddot-s jz-reddot-my">邀好友，得奖励</span>
                        </div>
                                    <span class="collect-con c-92"><font color="red">成为全民经纪人</font></span>
                    </div>
                </a>
            </li> -->
            

                        <li>
						
                <a href="<?php echo U('User/setting');?>" class="list-jump border-no" >
                <div class="list-wrap list-wrap1 jz-flex-row jz-flex-vh">
                    <div class="list-left jz-flex-col font-sb">
                        <i class="icon-settings record-sty record-sty1"></i>设置
                    </div>
                </div> 
                </a>
            </li>
        </ul>
    </div>
</section>

<script type="text/javascript">
$(function(){
    $('.jz-footer ul a').removeClass('active');
    $('.jz-footer ul li').eq(3).find('a').addClass('active');
})</script>
<link rel="stylesheet" href="<?php echo RES;?>/jinrong/Mobile/Public/images/iconfont/iconfont.css">
<style>

    .jz-footer {
        height: 56px;
        bottom: 0;
         border-top: 0;
        box-shadow: 0 -3px 3px rgba(5,5,5,0.05);
        background: #3c3b3b!important;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fafafa), to(#fafafa));
    }
    .foot_nav li a{
        color:#fff;
    }
</style>
<footer class="jz-footer">

    <ul class="foot_nav jz-flex-row font-lg">
        <li class="jz-flex-col"> <a class="bd active" href="<?php echo U('Trading/index');?>"><i class="jz-icon icon-conduct-null"></i><span>交易</span></a></li>
        <!--<li class="jz-flex-col"> <a class="bd " href="<?php echo U('Trading/dice');?>"><i class="jz-icon iconfont icone-21466"></i><span>玩色子</span></a></li>-->
        <li class="jz-flex-col"><a class="bd " href="<?php echo U('User/insurance');?>"><i class="jz-icon new_icon-zhibo2"></i><span>新手教程</span></a> </li>
        <!--<li class="jz-flex-col"><a class="bd " href="<?php echo U('Trading/jueshengquan');?>"><i class="jz-icon icon-friends01"></i><span>决胜圈</span></a> </li>-->
        <li class="jz-flex-col"><a class="bd " href="<?php echo U('User/invite');?>"><i class="jz-icon icon-vip04"></i><span>全民经纪人</span></a> </li>
		<li class="jz-flex-col"><a class="bd " href="<?php echo U('User/private_person');?>"><i class="jz-icon icon-accounts-null "></i><span>账户</span></a> </li> 

    </ul>

</footer>