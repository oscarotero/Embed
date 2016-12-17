<?php

namespace Embed;

/**
 * Class to store and access to data.
 */
class Bag
{
    private $parameters = [];

    /**
     * Set the initial parameters.
     *
     * @param array $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->set($parameters);
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
     * @param bool   $isHtml
     *
     * @return string|null
     */
    public function get($name, $isHtml = false)
    {
        $name = self::normalizeName($name);

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

            return $isHtml ? $item : self::toPlainValue($item);
        }

        if (isset($this->parameters[$name])) {
            return $isHtml ? $this->parameters[$name] : self::toPlainValue($this->parameters[$name]);
        }
    }

    /**
     * Return all stored values keys.
     *
     * @return array
     */
    public function getKeys()
    {
        return array_keys($this->parameters);
    }

    /**
     * Return the raw stored values.
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

        return !empty($this->parameters[$name]);
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
     * If it's a string, removes spaces and normalize some utf-8 chars.
     *
     * @param mixed $value
     *
     * @return mixed
     */
    private static function normalizeValue($value)
    {
        if (is_string($value)) {
            $value = str_ireplace(['&nbsp;', '&#160;'], ' ', $value);
            $value = trim($value);

            return ($value === '') ? null : $value;
        }

        return $value;
    }

    /**
     * Remove the html code and entities in a value
     *
     * @param mixed $value
     *
     * @return mixed
     */
    private static function toPlainValue($value)
    {
        if (is_string($value)) {
            $value = strip_tags($value);
            $value = html_entity_decode($value, ENT_QUOTES | ENT_XML1, 'UTF-8');
            $value = trim($value);

            return ($value === '') ? null : $value;
        }

        return $value;
    }
}
