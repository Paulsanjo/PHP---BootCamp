<?php


class Route
{
    private $_url;
    private $_callback;
    private $_name;

    public function __construct($_url, $callback)
    {
        $this->_url = '/^' . str_replace('/', '\\/', $_url) . '$/';

        if (is_callable($callback)) {
            $this->_callback = $callback;
            return;
        }

        if (is_string($callback)
            && substr_count($callback, '@') == 1
            && file_exists('Controller' . '/' . explode('@', $callback)[0] . '.php')) {
            $this->_callback = explode('@', $callback);
            require_once 'Controller' . '/' . $this->_callback[0] . '.php';
            $this->_callback[0] = new $this->_callback[0];
            return;
        }

        exit('Error!');
    }

    public function getURL()
    {
        return $this->_url;
    }

    public function getCallback()
    {
        return $this->_callback;
    }
}