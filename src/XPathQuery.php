<?php
/**
 * Created by PhpStorm.
 * User: Вова Ревчук
 * Date: 08.05.2018
 * Time: 17:56
 */
namespace XPathQueries;

class XPathQuery
{
    /**
     *
     */
    public $xml_url = null;

    /**
     *
     */
    private $xml_simple = null;

    /**
     *
     */
    private $xml_dom = null;

    /**
     *
     */
    public function __construct( $xml_url )
    {
        $this->xml_url = $xml_url;
    }

    /**
     *
     */
    private function _init_xml_simple () {
        if (!empty($this->xml_simple)) return true;
        $this->xml_simple = @simplexml_load_file($this->xml_url);
        if ($this->xml_simple === false) return false;
        return true;
    }

    /**
     *
     */
    public function getXml()
    {
        if ($this->_init_xml_simple()!=true) return false;
        return $this->xml_simple;

    }
}