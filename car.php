<?php
interface Machine{
    public function gudok();
    public function dvornik();
}

abstract class car implements Machine
{
    public function vpered(){
        echo ("Вперед\n");
    }
    public function nazad(){
        echo ("Назад\n");
    }
    public function nalevo(){
        echo ("Налево\n");
    }
    public function napravo(){
        echo ("Направо\n");
    }
}

class tank extends car {
    protected $zvukgudka = "Пииииип!\n";
	public function gudok(){
        echo($this->zvukgudka);
    }
    public function dvornik(){
		echo "Включить дворники\n";
    }
    public function povorotbashni(){
        echo ("Поворот башни\n");
    }
}

class legkovoeavto extends car {
    protected $zvukgudka = "Бип-Бип\n";
	public function gudok(){
        echo($this->zvukgudka);
    }
    public function dvornik(){
		echo "Включить дворники\n";
    }
	public function podsvetka(){
		echo "Включить подсветку салона\n";
    }
    public function nitro(){
		echo "Запуск нитро\n";
    }
}

$tank = new tank;
$legkovoeavto = new legkovoeavto;
    
echo "Действие танка:\n";
    $tank->vpered();
    $tank->nalevo();
	$tank->povorotbashni();

echo "Действие легкового автомобиля:\n";
    $legkovoeavto->vpered();
    $legkovoeavto->dvornik();
	$legkovoeavto->podsvetka();
    $legkovoeavto->napravo();
    $legkovoeavto->nitro();
    $legkovoeavto->gudok();

?>