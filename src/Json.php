<?php
	namespace Dack;

	class Json{
		public static function show($code = 1,$msg = ''){
			if(!empty($msg)){
				if(is_object($msg)){
					return json_encode(['code' => $code, 'msg' => 'success', 'data' => $msg]);
				}
				if(is_array($msg)){
					if(!$msg){
						return json_encode(['code' => $code,'msg' => 'success','data' => []]);
					}
					return json_encode(['code' => $code, 'msg' => 'success', 'data' => $msg]);
				}
				return json_encode(['code' => $code, 'msg' => $msg]);
			}else{
				if(is_object($code)){
					return json_encode(['code' => 0, 'msg' => 'success', 'data' => $code]);
				}
				if(is_array($code)){
					if(!$code){
						return json_encode(['code' => 0,'msg' => 'success','data' => []]);
					}
					if(isset($code['code'])){
						return json_encode($code);
					}
					return json_encode(['code' => 0, 'msg' => 'success', 'data' => $code]);
				}

				if(is_bool($code)){
					return json_encode($code ? ['code' => 0,'msg' => 'success'] : ['code' => 1,'msg' => 'fail']);
				}

				if(is_numeric($code)){
					return json_encode(['code' => $code,'msg' => Lang::get($code)]);
				}

				if(is_string($code)){
					return json_encode(['code' => 1,'msg' => $code]);
				}

				if(is_null($code) || empty($code) || $code === 0){
					return json_encode(['code' => 0,'msg' => 'success']);
				}

				return json_encode(['code' => 1,'msg' => $code]);
			}
		}
	}
?>