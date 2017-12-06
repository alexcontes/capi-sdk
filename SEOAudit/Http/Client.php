<?php


namespace SEOAudit\Http;


interface Client {
    public function request($method, $url, $params = array(), $data = array(),
                            $headers = array(), $api_key = null,
                            $timeout = null);
}