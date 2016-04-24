<?php

/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2016-04-24
 * Time: 오전 11:16
 */
class MemcacheAdapter extends Singleton implements CacheAdapter
{
    private $config = null;
    private $_instance = null;

    public function __construct($config) {
    }
    
    public function connect($config) {
        if( is_null($this->_instance) && is_null($this->_instance) )
            if( extension_loaded('memcache') )
                $this->_instance = new Memcache();
            else
                throw new Exception(__CLASS__ . 'memcache extension not loaded...');
        if( is_array($config->host) )
        {
            foreach($config->host as $key => $host)
            {
                $this->_instance->addserver($host, $config->port,$config->persistent,null, $config->timeout);
            }
        }else
            $this->_instance->addserver($config->host, $config->port, $config->persistent, null, $config->timeout);

    }
    public function get($key) {
        return $this->_instance->get($key);
    }
    public function set($key, $val, $ttl=0) {
        return $this->_instance->set($key, $val, 0, $ttl);
    }
    public function delete($key){
        return $this->_instance->delete($key);
    }
    public function stats() {
        return $this->_instance->getStats();
    }

    public function flush() {
        $this->_instance->flush();
    }
    public function close() {
        $this->_instance->close();
    }
}