<?php

namespace System;

class Cookie
{
    /**
     * Application Object
     *
     * @var \System\Application
     */
    private $app;

    /**
     * Constructor
     *
     * @property object $request
     * @param \System\Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Set new value to cookie
     *
     * @param string $key
     * @param mixed $value
     * @param int $hours
     * @return void
     */
    public function set(string $key, $value, int $hours = 1800, $path = '/')
    {
        $expireTime = $hours == -1 ? -1 : time() + $hours * 3600;

        setcookie($key, $value, $expireTime, $path, '', false, true);
    }

    /**
     * Get value from cookies by the given key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function get(string $key, $default = null)
    {
        return array_get($_COOKIE, $key, $default);
    }

    /**
     * Determine if the cookies has the given key
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key)
    {
        return array_key_exists($key, $_COOKIE);
    }

    /**
     * Remove the given key from cookie
     *
     * @param string $key
     * @return void
     */
    public function remove(string $key)
    {
        $this->set($key, null, -1);

        unset($_COOKIE[$key]);
    }

    /**
     * Get all cookies data
     *
     * @return array
     */
    public function all()
    {
        return $_COOKIE;
    }

    /**
     * Destroy cookie
     *
     * @return void
     */
    public function destroy()
    {
        foreach (array_keys($this->all()) as $key) {
            $this->remove($key);
        }
        unset($_COOKIE);
    }
}
