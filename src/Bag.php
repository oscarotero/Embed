<?php

namespace Embed;

/**
 * Class to store and access to data.
 */
class Bag
{
    private $parameters;

    /**
     * Set the initial parameters
     *
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    /**
     * Save a value.
     *
     * @param string|array $name
     * @param mixed        $value
     */
    public function set($name, $value = null)
    {
        if (is_array($name)) {
            $this->parameters = array_replace($this->parameters, $name);
        } else {
            $this->parameters[trim(strtolower($name))] = is_string($value) ? trim($value) : $value;
        }
    }

    /**
     * Adds a subvalue.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function add($name, $value = null)
    {
        $name = trim($name);

        if (!isset($this->parameters[$name])) {
            $this->parameters[$name] = [];
        } elseif (!is_array($this->parameters[$name])) {
            $this->parameters[$name] = (array) $this->parameters[$name];
        }

        $this->parameters[$name][] = $value;
    }

    /**
     * Get a value.
     *
     * @param string $name
     * @param mixed $default
     *
     * @return string|null
     */
    public function get($name, $default = null)
    {
        if (strpos($name, '[') !== false) {
            $names = explode('[', str_replace(']', '', $name));
            $key = array_shift($names);
            $item = isset($this->parameters[$key]) ? $this->parameters[$key] : [];

            foreach ($names as $key) {
                if (!isset($item[$key])) {
                    return $default;
                }

                $item = $item[$key];
            }

            return $item;
        }

        return isset($this->parameters[$name]) ? $this->parameters[$name] : $default;
    }

    /**
     * Return all stored values.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->parameters;
    }

    /**
     * Check if a value exists.
     *
     * @param string $name
     *
     * @return bool
     */
    public function has($name)
    {
        if (strpos($name, '[') !== false) {
            $names = explode('[', str_replace(']', '', $name));
            $key = array_shift($names);
            $item = isset($this->parameters[$key]) ? $this->parameters[$key] : [];

            foreach ($names as $key) {
                if (!isset($item[$key])) {
                    return false;
                }

                $item = $item[$key];
            }

            return isset($item);
        }

        return isset($this->parameters[$name]);
    }
}
