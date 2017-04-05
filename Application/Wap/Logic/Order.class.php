<?php
namespace Wap\Logic;
//�������߼�
class Order{
	public function __construct($openid,$oid){
		$this->order_id = $oid;
		$this->openid = $openid;
		if(empty($this->order_id)||!is_valid_openid($this->openid)){
			$this->data = null;
		}
		else{
			$model = new  \Wap\Model\OrderModel();
			$this->data = $model->where(array('orderid'=>$this->order_id,'wechat_id'=>$this->openid))->find();
		}
	}
	
	/**
	 *@��鶩���Ƿ�Ϸ�
	 *@retun 0:�Ϸ�,1:����������
	 */
	public function checkOrder(){
		if(empty($this->data)){
			return 1;
		}
		return 0;
	}
	
	//��������
	public function pay(){
		\Think\Log::record("order paid,oid={$this->order_id}",'INFO');
		if($this->checkOrder()==0){
			$model = new  \Wap\Model\OrderModel();
			//���Ķ���״̬
			$data['supportmetho'] = 1;
			$data['status'] = 2;
			$data['support_time'] = time();
			$ret = $model->where(array('orderid'=>$this->order_id))->save($data);
			
			return 0;
		}
		return -1;
	}
	
	//��ȡ����״̬
	public function getStatus(){
		return 0;
	}
	
	public function get($name){
		if($this->data != null){
			return $this->data[$name];
		}
	}
}
?>