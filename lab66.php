<?php
final class ClaseBase{
    public function test(){
        echo "ClaseBase::test() llamada \n";
    }
    // Aqui da Igual si se declara el metodo como final o no
    final public function moreTesting(){
        echo "ClaseBase::moreTesting() llamada \n";
    }
}
class ClaseHijo extends ClaseBase{
    
        
}
?>

/**La salida de  la clase ClaseHijo puede no heredar de la clase final (ClaseBase) puesto
    que no se copio ningun codigo en la clase hijo.
 */