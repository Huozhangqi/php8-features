<?php

class UnionType
{
    public int|float $value;

    public bool|null $status;

    public array $arr;

    /**
     * UnionType constructor.
     * @param  float|int  $value
     * @param  bool|null  $status
     */
    public function __construct(int|float $value, bool|null $status = null)
    {
        $this->value = $value;
        $this->status = $status;
    }

    /**
     * @return float|int
     */
    public function getValue() :int|float
    {
        return $this->value;
    }

    /**
     * @param  float|int  $value
     */
    public function setValue(int|float $value): void
    {
        $this->value = $value;
    }

    /**
     * @return bool|null
     */
    public function getStatus(): bool|null
    {
        return $this->status;
    }

    /**
     * @param  bool|null  $status
     */
    public function setStatus(?bool $status): void
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getArr(): array
    {
        return $this->arr;
    }

    /**
     * @param  array  $arr
     */
    public function setArr(array $arr): void
    {
        $this->arr = $arr;
    }
}

$object = new UnionType(48, true);

echo $object->getValue() . PHP_EOL;
echo $object->getStatus() . PHP_EOL;

$object->setArr([1,2,3]);
$object->setValue(23.54);
$object->setStatus(null);

echo $object->getValue() . PHP_EOL;
echo $object->getStatus() . PHP_EOL;
print_r($object->getArr());