<?php

namespace Embed;

/**
 * Class to store and access to data.
 */
class Bag
{
    protected $parameters = [];

    /**
     * Save a value.
     *
     * @param string|array $name  Name of the value
     * @param mixed        $value The value to save
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
     * @param string $name  Name of the value
     * @param mixed  $value The value to add
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
     * @param string $name Value name
     *
     * @return string|null
     */
    public function get($name)
    {
        if (strpos($name, '[') !== false) {
            $names = explode('[', str_replace(']', '', $name));
            $key = array_shift($names);
            $item = isset($this->parameters[$key]) ? $this->parameters[$key] : [];

            foreach ($names as $key) {
                if (!isset($item[$key])) {
                    return;
                }

                $item = $item[$key];
            }

            return $item;
        }

        return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
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
     * @param string $name Value name
     *
     * @return bool True if exists, false if not
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
