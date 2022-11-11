<?php
class ClaseBase{
    public function test(){
        echo "ClaseBase::test() llamada \n";
    }
    final public function masTests(){
        echo "ClaseBase::masTests() llamada \n";
    }
}
class ClaseHijo extends ClaseBase{
    public function masTests(){
        echo "ClaseHijo::masTests() llamada \n";
    }
}
?>

/**  no se puede anular el método final ClaseBase::masTests(), esto se debe a que la funcion masTests se llama a 
    si mismo
 */