<?php
/**
 * Generated from descriptor.proto by the protocol buffer compiler. DO NOT EDIT!
 */

namespace Google\Protobuf\GeneratedCodeInfo;

/**
 * Annotation message embedded in GeneratedCodeInfo message
 */
class Annotation extends \Allegro\Protobuf\Internal\Message
{
    /* Field index constants */
    const PATH = 1;
    const SOURCE_FILE = 2;
    const BEGIN = 3;
    const END = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PATH => array(
            'name' => 'path',
            'repeated' => true,
            'type' => \Allegro\Protobuf\Internal\Message::PB_TYPE_INT,
            'packed' => true
        ),
        self::SOURCE_FILE => array(
            'name' => 'source_file',
            'required' => false,
            'type' => \Allegro\Protobuf\Internal\Message::PB_TYPE_STRING,
        ),
        self::BEGIN => array(
            'name' => 'begin',
            'required' => false,
            'type' => \Allegro\Protobuf\Internal\Message::PB_TYPE_INT,
        ),
        self::END => array(
            'name' => 'end',
            'required' => false,
            'type' => \Allegro\Protobuf\Internal\Message::PB_TYPE_INT,
        ),
    );

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'path' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendPath($value)
    {
        return $this->append(self::PATH, $value);
    }

    /**
     * Clears 'path' list
     *
     * @return null
     */
    public function clearPath()
    {
        return $this->clear(self::PATH);
    }

    /**
     * Returns 'path' list
     *
     * @return integer[]
     */
    public function getPath()
    {
        return $this->get(self::PATH);
    }

    /**
     * Returns true if 'path' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPath()
    {
        return count($this->get(self::PATH)) !== 0;
    }

    /**
     * Returns 'path' iterator
     *
     * @return \ArrayIterator
     */
    public function getPathIterator()
    {
        return new \ArrayIterator($this->get(self::PATH));
    }

    /**
     * Returns element from 'path' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getPathAt($offset)
    {
        return $this->get(self::PATH, $offset);
    }

    /**
     * Returns count of 'path' list
     *
     * @return int
     */
    public function getPathCount()
    {
        return $this->count(self::PATH);
    }

    /**
     * Sets value of 'source_file' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceFile($value)
    {
        return $this->set(self::SOURCE_FILE, $value);
    }

    /**
     * Returns value of 'source_file' property
     *
     * @return string
     */
    public function getSourceFile()
    {
        $value = $this->get(self::SOURCE_FILE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'source_file' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceFile()
    {
        return $this->get(self::SOURCE_FILE) !== null;
    }

    /**
     * Sets value of 'begin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBegin($value)
    {
        return $this->set(self::BEGIN, $value);
    }

    /**
     * Returns value of 'begin' property
     *
     * @return integer
     */
    public function getBegin()
    {
        $value = $this->get(self::BEGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'begin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBegin()
    {
        return $this->get(self::BEGIN) !== null;
    }

    /**
     * Sets value of 'end' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnd($value)
    {
        return $this->set(self::END, $value);
    }

    /**
     * Returns value of 'end' property
     *
     * @return integer
     */
    public function getEnd()
    {
        $value = $this->get(self::END);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'end' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnd()
    {
        return $this->get(self::END) !== null;
    }
}