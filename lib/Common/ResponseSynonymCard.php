<?php


namespace YooKassaPayout\Common;

/**
 * Класс объекта ответа, возвращаемого API при запросе синонима карты
 *
 * @package YooKassaPayout
 */
class ResponseSynonymCard
{
    /**
     * Результат обработки данных
     * @var string
     */
    protected $reason;
    /**
     * Код карточного продукта
     * @var string
     */
    protected $skrDestinationCardProductCode;
    /**
     * Синоним банковской карты
     * @var string
     */
    protected $skrDestinationCardSynonim;
    /**
     * Тип банковской системы карты
     * @var string
     */
    protected $skrDestinationCardType;
    /**
     * Первые 6 цифр карты
     * @var string
     */
    protected $skrCardBin;
    /**
     * Последние 4 цифры карты
     * @var string
     */
    protected $skrCardLast4;
    /**
     * Цифровой код страны выпуска карты
     * @var string
     */
    protected $skrDestinationCardCountryCode;
    /**
     * Маска банковской карты
     * @var string
     */
    protected $skrDestinationCardPanmask;

    /**
     * ResponseSynonymCard constructor.
     * @param string $body Строка JSON
     */
    public function __construct($body)
    {
        $properties = json_decode($body, true);
        $this->buildByPropertiesArray($properties['storeCard']);
    }

    /**
     * Заполняет свойства объекта из массива
     * @param array $properties Массив параметров карты
     */
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
     * Возвращает результат обработки данных
     * @return string Результат обработки данных
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Возвращает первые 6 цифр карты
     * @return string Первые 6 цифр карты
     */
    public function getSkrCardBin()
    {
        return $this->skrCardBin;
    }

    /**
     * Возвращает последние 4 цифры карты
     * @return string Последние 4 цифры карты
     */
    public function getSkrCardLast4()
    {
        return $this->skrCardLast4;
    }

    /**
     * Возвращает цифровой код страны выпуска карты
     * @return string Цифровой код страны выпуска карты
     */
    public function getSkrDestinationCardCountryCode()
    {
        return $this->skrDestinationCardCountryCode;
    }

    /**
     * Возвращает маску банковской карты
     * @return string Маска банковской карты
     */
    public function getSkrDestinationCardPanmask()
    {
        return $this->skrDestinationCardPanmask;
    }

    /**
     * Возвращает код карточного продукта
     * @return string Код карточного продукта
     */
    public function getSkrDestinationCardProductCode()
    {
        return $this->skrDestinationCardProductCode;
    }

    /**
     * Возвращает синоним банковской карты
     * @return string Синоним банковской карты
     */
    public function getSkrDestinationCardSynonim()
    {
        return $this->skrDestinationCardSynonim;
    }

    /**
     * Возвращает тип банковской системы карты
     * @return string Тип банковской системы карты
     */
    public function getSkrDestinationCardType()
    {
        return $this->skrDestinationCardType;
    }
}