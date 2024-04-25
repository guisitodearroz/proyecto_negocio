<?php
class caja{
    private $saldo;
    //constructor
    public function __constructor($saldo){
        $this->saldo=$saldo;
    }
    //getter y setter
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo=$saldo;
    }
    //metodos para ingresar dinero a la caja
    public function ingresoDinero($cantidad){
        $this->saldo +=$cantidad;
    }
    //metodo para sacar dinero de caja
    public function retiroDinero($cantidad){
        if ($this->saldo >= $cantidad)) {
            $this->saldo -= $cantidad;
            return true;
        }else {
            return false; //con el booleano despues hare que aparezca un aviso si es que se pudo
        }
    }
    //metodo para el cierre de caja
    public function cierreCaja(){
        $this->saldo=0;
    }
}
?>