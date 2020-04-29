<?php
namespace Think;
class ElasticsearchService {
	private $host;
	private $port;
	private $indexName; //索引名，类似于数据库中的数据库名
	private $tableName; //索引的表名，类似于数据库中的数据库的表名
	function __construct($host = "", $port = "", $indexName = "", $tableName = "") {
		$config = C ( "DB_CONFIG_ELASTICSEARCH" );
		$this->host = $host ? $host : $config ['ES_HOST'];
		$this->port = $port ? $port : $config ['ES_PORT'];
		$this->indexName = $indexName ? $indexName : $config ['ES_INDEX'];
		$this->tableName = $tableName ? $tableName : $config ['ES_TABLE'];
	}
	/**
	 * 创建索引
	 */
	public function createIndex() {
		$indexUrl = 'http://' . $this->host . ':' . $this->port . '/' . $this->indexName;
		return $this->curl ( $indexUrl );
	}
	
	/**
	 * 创建字段
	 * @param array $mapping
	 */
	public function createMapping($mapping) {
		$url = 'http://' . $this->host . ':' . $this->port . '/' . $this->indexName . '/' . $this->tableName . '/_mapping';
		print_r ( $mapping );
		$json_mapping = json_encode ( $mapping );
		return $this->curl ( $url, $json_mapping );
	}
	/**
	 * 添加数据
	 * @param array $data
	 */
	
	public function add($id, $data) {
		$url = 'http://' . $this->host . ':' . $this->port . '/' . $this->indexName . '/' . $this->tableName . '/' . $id;
		$json_data = json_encode ( $data );
		return $this->curl ( $url, $json_data );
	}
	/**
	 * 查找数据
	 * @param array $data
	 */
	public function search($data) {
		$url = 'http://' . $this->host . ':' . $this->port . '/' . $this->indexName . '/' . $this->tableName . '/_search';
		$json_data = json_encode ( $data );
		return $this->curl ( $url, $json_data, "GET" );
	}
    /**
	 * 删除
	 *数据
	 * @param array $data
	 */
	public function delete($data) {
		$url = 'http://' . $this->host . ':' . $this->port . '/' . $this->indexName . '/' . $this->tableName .'/'. $data;
		return $this->curl ( $url, " ", "DELETE" );
	}
   /**
	 查看
	 * @param array $data
	 */
	public function view($id) {
		$url = 'http://' . $this->host . ':' . $this->port . '/' . $this->indexName . '/' . $this->tableName .'/'. $id;
		return $this->curl ( $url, " ", "GET" );
	}
  /**
	 跟新数据
	 * @param array $data
	 */
	public function update($id,$data) {
		$url = 'http://' . $this->host . ':' . $this->port . '/' . $this->indexName . '/' . $this->tableName . '/'.$id.'/_update';
		$json_data = json_encode ( $data );
		return $this->curl ( $url, $json_data, "POST" );
	}
	/**
	 * @param string $url
	 * @param string $postDate json格式
	 */
	private function curl($url, $postDate = "", $method = "PUT") {
		$ci = curl_init ();
		curl_setopt ( $ci, CURLOPT_URL, $url );
		curl_setopt ( $ci, CURLOPT_PORT, $this->port );
		curl_setopt ( $ci, CURLOPT_TIMEOUT, 200 );
		curl_setopt ( $ci, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ci, CURLOPT_FORBID_REUSE, 0 );
		curl_setopt ( $ci, CURLOPT_CUSTOMREQUEST, $method );
		if ($postDate) {
			curl_setopt ( $ci, CURLOPT_POSTFIELDS, $postDate );
		}
		$response = curl_exec ( $ci );
		return $response;
	}

}