<?php
/**
 * @author Jonathan Oddy <jonathan@woaf.net>
 * @copyright 2012 Jonathan Oddy
 * @license ISC
 */
namespace Weasel\XmlMarshaller\Config\Annotations;

use Weasel\Annotation\Config\Annotations\Annotation;
use Weasel\Annotation\Config\Annotations\AnnotationCreator;
use Weasel\Annotation\Config\Annotations\Parameter;

/**
 * @Annotation(on={"class"})
 */
class XmlDiscriminatorValue
{

    /**
     * @var string
     */
    protected $value;

    /**
     * @param string $value;
     * @AnnotationCreator({@Parameter(name="value", type="string", required=true)})
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


}

