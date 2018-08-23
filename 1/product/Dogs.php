<?php

/**
 * Class Dogs
 */
class Dogs extends ProductLoadTemplate implements IProduct {

    public function getChild($args) {
        return parent::loadData($args[0], 'Dogs'); // TODO: Change the autogenerated stub
    }

    public function getList() {
        return [
            ['dog_id'=>'20001','dog_name'=>'泰迪','dog_price'=>1000],
            ['dog_id'=>'20002','dog_name'=>'金毛','dog_price'=>1200],
            ['dog_id'=>'20003','dog_name'=>'哈士奇','dog_price'=>1100],
        ];
    }

    // 实现抽象类中的抽象方法，即不同的对象的具体实现细节。

    public function setClick()
    {
        // TODO: Implement setClick() method.
    }

    public function setLog()
    {
        // TODO: Implement setLog() method.
    }
}