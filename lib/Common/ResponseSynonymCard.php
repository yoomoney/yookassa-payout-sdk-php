<?php


namespace YooKassaPayout\Common;

/**
 * Класс объекта ответа, возвращаемого API при запросе синонима карты
 *
 * @package YooKassaPayout\Common
 */
class ResponseSynonymCard
{
    protected $reason;
    protected $skrDestinationCardProductCode;
    protected $skrDestinationCardSynonim;
    protected $skrDestinationCardType;
    protected $skrCardBin;
    protected $skrCardLast4;
    protected $skrDestinationCardCountryCode;
    protected $skrDestinationCardPanmask;

    public function __construct($body)
    {
        $properties = json_decode($body, true);
        $this->buildByPropertiesArray($properties['storeCard']);
    }

    protected function buildByPropertiesArray($properties)
    {
        foreach ($properties as $propertyName => $value) {
            $parts = array_map(
                function($part) {
                    return ucfirst($part);
                },
                explode('_', $propertyName)
            );

            $propertyKey = lcfirst(implode('', $parts));
            $this->{$propertyKey} = $value;
        }
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return string
     */
    public function getSkrCardBin()
    {
        return $this->skrCardBin;
    }

    /**
     * @return string
     */
    public function getSkrCardLast4()
    {
        return $this->skrCardLast4;
    }

    /**
     * @return string
     */
    public function getSkrDestinationCardCountryCode()
    {
        return $this->skrDestinationCardCountryCode;
    }

    /**
     * @return string
     */
    public function getSkrDestinationCardPanmask()
    {
        return $this->skrDestinationCardPanmask;
    }

    /**
     * @return string
     */
    public function getSkrDestinationCardProductCode()
    {
        return $this->skrDestinationCardProductCode;
    }

    /**
     * @return string
     */
    public function getSkrDestinationCardSynonim()
    {
        return $this->skrDestinationCardSynonim;
    }

    /**
     * @return string
     */
    public function getSkrDestinationCardType()
    {
        return $this->skrDestinationCardType;
    }
}