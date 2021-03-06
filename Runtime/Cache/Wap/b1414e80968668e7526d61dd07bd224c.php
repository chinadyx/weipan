<?php if (!defined('THINK_PATH')) exit();?>

<!doctype html>

<html lang="zh">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

    <title>找回密码</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="format-detection" content="telephone=no">

    <meta name="wap-font-scale" content="no">

    <link rel="stylesheet" href="<?php echo RES;?>/jinrong/Mobile/Public/css/style.css">

    <link rel="stylesheet" href="<?php echo RES;?>/jinrong/Mobile/Public/css/common.css">


</head>

<body class="page-mobile ">

<div class="wrapper findregpsw-wrapper">

    <!-- 找回登录密码第一步 S -->

    <div id="step1">

        <div class="com-prompt">

            <h2>请输入你需要找回密码的账户</h2>

        </div>

        <ul class="com-columns span3">

            <li class="comc-item">

                <div class="com-formbox">

                    <label class="formbox-hd" for="mobile">账户</label>

                    <span class="formbox-bd"><input type="tel" id="username" name="tel"  onkeyup="this.value=this.value.replace(/ /g,'')" maxlength="11" class="input-txt" placeholder="请输入手机号" /></span>

                </div>

            </li>

        </ul>



        <!-- 通用按钮 S -->

        <div class="def-p com-btnbox mt30">

            <a href="javascript:void(0);" class="btn btn-1 btn-dis" id="btn_1">下一步</a>

        </div>

        <!-- 通用按钮 E -->

    </div>

    <!-- 找回登录密码第一步 E -->



    <!-- 找回登录密码第二步 S -->

    <div id="step2" class="hide">

        <div class="com-prompt">

            <h2>请输入手机 <span class="fcblue" id="sendMobile"></span> 收到的短信验证码</h2>

        </div>

        <ul class="com-columns">



            <li class="comc-item">

                <div class="com-formbox">

                    <span class="formbox-bd"><input  type="tel"  id="SMSCode" name="SMSCode" maxlength="6" placeholder="输入短信验证码" class="input-txt"/></span>

                    <span class="captchabtn"><a href="javascript:void(0);" class="btn" id="send">发送验证码</a><span class="txt hide" id="wait">60秒后重发</span></span>

                </div>

            </li>

        </ul>

        <!-- 通用按钮 S -->

        <div class="def-p com-btnbox mt30">

            <a href="javascript:void(0);" class="btn btn-1 btn-dis" id="btn_2">提交</a>

        </div>

        <!-- 通用按钮 E -->



        <!-- 收不到验证码 S -->

        <div class="def-p txtr mt10">

            <a href="javascript:void(0);" class="fcblue" id="smsCodeError">收不到验证码？</a>

        </div>

        <!-- 收不到验证码 E -->

    </div>

    <!-- 找回登录密码第二步 E -->



    <!-- 找回登录密码第三步 S -->

    <div id="step3" class="hide">

        <div class="com-prompt">

            <h2>请设置新登录密码</h2>

        </div>

        <ul class="com-columns span6">

            <li class="comc-item">

                <div class="com-formbox">

                    <span class="formbox-hd">新密码</span>

                    <span class="formbox-bd nomar"><input type="password" maxlength="16" class="input-txt" placeholder="设置新登录密码，6-16位字符" id="password"/>

					</span>

                </div>

            </li>

            <li class="comc-item">

                <div class="com-formbox">

                    <span class="formbox-hd">确认新密码</span>

                    <span class="formbox-bd"><input type="password" maxlength="16" class="input-txt" placeholder="请再次输入新密码" id="confirmPassword"/></span>

                </div>

            </li>

        </ul>



        <!-- 通用按钮 S -->

        <div class="def-p com-btnbox mt30">

            <a href="javascript:void(0);" class="btn btn-1" id="btn_3">立即修改</a>

        </div>

        <!-- 通用按钮 E -->

    </div>

    <!-- 找回登录密码第三步 E -->

    <div class="diy-dialog hide" id="tips">              <div class="dia-in">                <div class="dia-hd"><h2>收不到验证码</h2></div>                <div class="dia-bd"><p>1.请确认手机号是否正确</p><p>2.请查看验证短信是否被手机安全软件拦截</p><p>3.获取更多帮助，可联系掘金60秒客服 <a href="tel:400-">400-</a>&nbsp;(工作日09:00-18:00)</p></div>              <div class="dia-btm"><a href="javascript:void(0);" id="isok"><span>我知道了</span></a></div></div>            </div>

    <div class="geetest" id="codebox">

        <div class="bg"></div>

        <div class="wrap">

            <div class="top">

                <a class="exit" id="close" href="javascript:;"></a>

                <div class="title">

                    请通过验证

                </div>

            </div>



        </div>

    </div>

</div>
<script>

    var ROOT = "";

</script>





<div class="loading-wrapper" style="display: none;">

    <div class="loading-area">

        <div id="floatingBarsG1" class="floatingBarsG"></div>

        <p id="msg">登录中...</p>

    </div>

    <div class="mask" style="opacity: 0.3;"></div>

</div>
<script src="<?php echo RES;?>/jinrong//Mobile/Public/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/jinrong//Mobile/Public/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/jinrong/Mobile/Public/js/forget.js"></script>
</body>

</html>