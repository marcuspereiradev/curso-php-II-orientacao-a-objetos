<?php 

class Conta {

    // private $numero;
    private $saldo;

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function saca($valor) {
        $this->setSaldo($this->getSaldo() - $valor);
    }

    public function deposita($valor) {
        $this->setSaldo($this->getSaldo() + $valor);
    }

}

class ContaPoupanca extends Conta {

    public function saca($valor) {
        $this->setSaldo($this->getSaldo() - ($valor + 0.10));
    }
}

$conta1 = new ContaPoupanca();
$conta1->deposita(100.0);
$conta1->saca(50.0);
echo $conta1->setSaldo($saldo);
echo "Conta Poupança = ".$conta1->getSaldo();

$conta2 = new Conta();
$conta2->deposita(100.0);
$conta2->saca(50.0);
echo "Conta = ".$conta2->getSaldo();