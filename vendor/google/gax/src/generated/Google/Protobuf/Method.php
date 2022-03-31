<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/api.proto

namespace Google\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Method represents a method of an api.
 *
 * Protobuf type <code>Google\Protobuf\Method</code>
 */
class Method extends \Google\Protobuf\Internal\Message
{
    /**
     * The simple name of this method.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A URL of the input message type.
     *
     * Generated from protobuf field <code>string request_type_url = 2;</code>
     */
    private $request_type_url = '';
    /**
     * If true, the request is streamed.
     *
     * Generated from protobuf field <code>bool request_streaming = 3;</code>
     */
    private $request_streaming = false;
    /**
     * The URL of the output message type.
     *
     * Generated from protobuf field <code>string response_type_url = 4;</code>
     */
    private $response_type_url = '';
    /**
     * If true, the response is streamed.
     *
     * Generated from protobuf field <code>bool response_streaming = 5;</code>
     */
    private $response_streaming = false;
    /**
     * Any metadata attached to the method.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 6;</code>
     */
    private $options;
    /**
     * The source syntax of this method.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 7;</code>
     */
    private $syntax = 0;

    public function __construct() {
        \GPBMetadata\Google\Protobuf\Api::initOnce();
        parent::__construct();
    }

    /**
     * The simple name of this method.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The simple name of this method.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * A URL of the input message type.
     *
     * Generated from protobuf field <code>string request_type_url = 2;</code>
     * @return string
     */
    public function getRequestTypeUrl()
    {
        return $this->request_type_url;
    }

    /**
     * A URL of the input message type.
     *
     * Generated from protobuf field <code>string request_type_url = 2;</code>
     * @param string $var
     */
    public function setRequestTypeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_type_url = $var;
    }

    /**
     * If true, the request is streamed.
     *
     * Generated from protobuf field <code>bool request_streaming = 3;</code>
     * @return bool
     */
    public function getRequestStreaming()
    {
        return $this->request_streaming;
    }

    /**
     * If true, the request is streamed.
     *
     * Generated from protobuf field <code>bool request_streaming = 3;</code>
     * @param bool $var
     */
    public function setRequestStreaming($var)
    {
        GPBUtil::checkBool($var);
        $this->request_streaming = $var;
    }

    /**
     * The URL of the output message type.
     *
     * Generated from protobuf field <code>string response_type_url = 4;</code>
     * @return string
     */
    public function getResponseTypeUrl()
    {
        return $this->response_type_url;
    }

    /**
     * The URL of the output message type.
     *
     * Generated from protobuf field <code>string response_type_url = 4;</code>
     * @param string $var
     */
    public function setResponseTypeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->response_type_url = $var;
    }

    /**
     * If true, the response is streamed.
     *
     * Generated from protobuf field <code>bool response_streaming = 5;</code>
     * @return bool
     */
    public function getResponseStreaming()
    {
        return $this->response_streaming;
    }

    /**
     * If true, the response is streamed.
     *
     * Generated from protobuf field <code>bool response_streaming = 5;</code>
     * @param bool $var
     */
    public function setResponseStreaming($var)
    {
        GPBUtil::checkBool($var);
        $this->response_streaming = $var;
    }

    /**
     * Any metadata attached to the method.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Any metadata attached to the method.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 6;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setOptions(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Option::class);
        $this->options = $arr;
    }

    /**
     * The source syntax of this method.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 7;</code>
     * @return int
     */
    public function getSyntax()
    {
        return $this->syntax;
    }

    /**
     * The source syntax of this method.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 7;</code>
     * @param int $var
     */
    public function setSyntax($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\Syntax::class);
        $this->syntax = $var;
    }

}

