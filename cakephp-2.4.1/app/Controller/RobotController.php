<?php
App::uses('AppController', 'Controller');

App::import('Vendor', 'pretty_json');

class RobotController extends AppController {

	public $uses = array();

	public function index() {
		if ($this->data) {

			$params = $this->data['Robot']['params'];

			$this->set('params', $params);
			$this->set('url', $this->data['Robot']['inputURL']);
			$this->set('requestType', $this->data['Robot']['requestType']);

			$ch = curl_init();
			$url = $this->data['Robot']['inputURL'];
			
			if ($this->data['Robot']['requestType'] == 'POST') {
				curl_setopt($ch, CURLOPT_POST, true);
				$postFileds = array();
				foreach ($params as $param) {
					$postFileds[$param['name']] = $param['value'];
				}
				curl_setopt($ch, CURLOPT_POSTFIELDS, $postFileds);
			} elseif ($this->data['Robot']['requestType'] == 'GET') {
				$url = $this->data['Robot']['inputURL'] . '?';
				foreach ($params as $param) {
					$url .= $param['name'] . '=' . $param['value'] . '&';
				}
				$url = rtrim($url, "&");
			}

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$result = curl_exec($ch);

			$info = curl_getinfo($ch);
			$this->set('http_code', $info['http_code']);
			if ($info['http_code'] == 200) {
				// $this->set('result', json_encode(json_decode($result), JSON_PRETTY_PRINT));
				$this->set('result', pretty_json($result));
			}

			curl_close($ch);
		}
	}
}
