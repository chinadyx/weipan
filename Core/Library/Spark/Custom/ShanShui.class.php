<?php
namespace Spark\Custom;
/**
 *@class ShanShui
 *@ɽˮ·�ɶ��ƴ�����
 */
class ShanShui {
	//��ȡ������֤����
	public function getWifiLink($openid){
		$nickname = $openid;
		$url_name = urlencode($nickname);
		$time = date('Y-m-d-H-i-s',time());//add by ygx 2014-3-10
		$key = "sangfor";
		$str = "n=".$url_name."&u=".$openid."&t=".$time;
		$len = strlen($str);//��Ч��Ϣ���� add by ygx 2014-3-15
		$str_str = $str ."&l=".$len;//add by ygx 2014-3-15
		$encrypt_str = $this->mc_encrypt($str_str,$key);//modify by ygx 2014-3-15
		$encrypt = bin2hex($encrypt_str);
		return 'http://2.2.2.1/wx.html?href='.$encrypt;
	}
	
	public function mc_encrypt($encrypt, $mc_key) {
		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB), MCRYPT_RAND);
		$passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $mc_key, trim($encrypt), MCRYPT_MODE_ECB, $iv);
		return $passcrypt;
	}
}