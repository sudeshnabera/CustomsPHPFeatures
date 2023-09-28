<?php

class Request
{
    protected $method;
    protected $uri;
    protected $server;
    protected $cookies;
    protected $input;
    protected $files;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->server = $_SERVER;
        $this->cookies = $_COOKIE;
        $this->input = $_REQUEST;
        $this->files = $_FILES;
    }

    public function method()
    {
        return $this->method;
    }

    public function uri()
    {
        return $this->uri;
    }

    public function server()
    {
        return $this->server;
    }

    public function cookies()
    {
        return $this->cookies;
    }

    public function get($key, $default = null)
    {
        return $this->input[$key] ?? $default;
    }

    public function all()
    {
        return array_merge($this->input, $this->files);
    }

    public function has($key)
    {
        return isset($this->input[$key]);
    }

    public function only($keys)
    {
        $values = [];
        foreach ((array)$keys as $key) {
            if (isset($this->input[$key])) {
                $values[$key] = $this->input[$key];
            }
        }
        return $values;
    }

    public function except($keys)
    {
        $values = $this->input;
        foreach ((array)$keys as $key) {
            unset($values[$key]);
        }
        return $values;
    }

    public function isAjax()
    {
        return $this->server['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    public function isSecure()
    {
        return $this->server['HTTPS'] === 'on';
    }

    // ...
}