<?php
/**
 * @author Jonathan Oddy <jonathan@moo.com>
 * @copyright Copyright (c) 2012, Moo Print Ltd.
 * @license ISC
 */
namespace Weasel\XmlMarshaller\Config;

use Weasel\XmlMarshaller\Config\Annotations as Annotations;
use Weasel\Annotation\AnnotationReader;

class AnnotationDriver implements ConfigProvider
{

    protected $classPaths = array();
    protected $configurator;

    public function __construct($logger = null)
    {
        $this->configurator = new \Weasel\Annotation\ArrayCachingAnnotationConfigurator($logger);
    }

    /**
     * @param string $class
     * @return \Weasel\XmlMarshaller\Config\ClassMarshaller
     */
    public function getConfig($class)
    {
        $rClass = new \ReflectionClass($class);

        $classDriver = new ClassAnnotationDriver($rClass, $this->configurator);

        return $classDriver->getConfig();

    }

}
