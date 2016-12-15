<?php

namespace Embed;

/**
 * Class to store and access to data.
 */
class Bag
{
    private $parameters;

    /**
     * Set the initial parameters.
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
        if (!is_array($name)) {
            $name = [$name => $value];
        }

        foreach ($name as $name => $value) {
            $name = self::normalizeName($name);
            $value = self::normalizeValue($value);

            $this->parameters[$name] = $value;
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
        $name = self::normalizeName($name);
        $value = self::normalizeValue($value);

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
     * @param mixed  $default
     *
     * @return string|null
     */
    public function get($name, $default = null)
    {
        $name = self::normalizeName($name);

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
     * Check if a value exists and is not empty.
     *
     * @param string $name
     *
     * @return bool
     */
    public function has($name)
    {
        $name = self::normalizeName($name);

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

            return !empty($item);
        }

        return isset($this->parameters[$name]) && strlen($this->parameters[$name]) > 0;
    }

    /**
     * Normalize a variable name.
     *
     * @param string $name
     *
     * @return string
     */
    private static function normalizeName($name)
    {
        return strtolower(trim($name));
    }

    /**
     * Normalize a value.
     * If it's a string, removes spaces and html entities.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    private static function normalizeValue($value)
    {
        if (is_string($value)) {
            $value = html_entity_decode(trim($value));

            return ($value === '') ? null : $value;
        }

        return $value;
    }
}
