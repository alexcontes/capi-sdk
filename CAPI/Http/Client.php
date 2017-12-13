<?php


namespace CAPI\Http;


interface Client {
    public function request($method, $url, $params = array(), $data = array(),
                            $headers = array(), $api_key = null,
                            $timeout = null);
}