<?php
	class Caller
	{
		public $url = 'https://newsapi.org/v2/';
		private $api_key = '500df630606d4798a209bdafb730ccf0';

		public function news($params) {
			$url = $this->url.'top-headlines?country=us&category=business&apiKey=500df630606d4798a209bdafb730ccf0';
			$res = $this->call($url);
			return $res;
		}
		public function last($params) {
			$dt = date_create();
			$url = $this->url.'everything?q=world cup&from='.date_format($dt, 'Y-m-d').'s&apiKey=500df630606d4798a209bdafb730ccf0';
			$res = $this->call($url);
			return $res;
		}

		private function call($url) {
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_HEADER, 0);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
			curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			        'Content-Type:application/json'
			    )
			);
			$data = curl_exec($curl);
			curl_close($curl);
			return json_decode($data);
		}
	}

	
	$caller = new Caller();
	if(method_exists($caller, $route)) {
		$res = $caller->$route($_GET);
		echo json_encode(['success' => true, 'data' => $res, 'code' => '200']);
	} else {
		echo json_encode(['success' => false, 'message' => 'Route not found', 'code' => '404']);
	}
?>