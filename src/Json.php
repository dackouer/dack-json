<?php
	namespace Dack;

	use support\Response;
	use Dack\Lang;

	class Json{
		public static function show($code = 1,$msg = ''){
			if(!empty($msg)){
				if(is_object($msg)){
					return self::json(['code' => $code, 'msg' => 'success', 'data' => $msg]);
				}
				if(is_array($msg)){
					if(!$msg){
						return self::json(['code' => $code,'msg' => 'success','data' => []]);
					}
					return self::json(['code' => $code, 'msg' => 'success', 'data' => $msg]);
				}
				return self::json(['code' => $code, 'msg' => $msg]);
			}else{
				if(is_object($code)){
					return self::json(['code' => 0, 'msg' => 'success', 'data' => $code]);
				}
				if(is_array($code)){
					if(!$code){
						return self::json(['code' => 0,'msg' => 'success','data' => []]);
					}
					if(isset($code['code'])){
						return self::json($code);
					}
					return self::json(['code' => 0, 'msg' => 'success', 'data' => $code]);
				}

				if(is_bool($code)){
					return self::json($code ? ['code' => 0,'msg' => 'success'] : ['code' => 1,'msg' => 'fail']);
				}

				if(is_numeric($code)){
					return self::json(['code' => $code,'msg' => Lang::get($code)]);
				}

				if(is_string($code)){
					return self::json(['code' => 1,'msg' => $code]);
				}

				if(is_null($code) || empty($code) || $code === 0){
					return self::json(['code' => 0,'msg' => 'success']);
				}

				return self::json(['code' => 1,'msg' => $code]);
			}
		}

		private static function json($data, $options = JSON_UNESCAPED_UNICODE)
		{
		    return new Response(200, ['Content-Type' => 'application/json'], json_encode($data, $options));
		}
	}
?>