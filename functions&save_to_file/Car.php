<?php
class Car{
	private $model;
	private $color;
	private $horsepower;
	private $production_year;

	public function __construct($model, $color, $horsepower, $production_year){
		$this->model=$model;
		$this->color=$color;
		$this->horsepower=$horsepower;
		$this->production_year=$production_year;
	}
	public function show (){
		echo"
		<div style='margin:30px;padding:30px; background:$this->color;font-family: Montserrat';>
			<h1>модель машины: $this->model</h2>
			<h>цвет машины:$this->color</h5>
			<h5>кол-во лошадиных сил:$this->horsepower</h5>
			<h5>год производства:$this->production_year </h5>
		</div>	

		";

	}
	public function save (){
		$file_name ="reports/model_production_year.txt";

	$cont="модель машины: $this->model\nцвет машины: $this->color\nкол-во лошадиных сил: $this->horsepower\nгод производства: $this->production_year";
	
	$fp = fopen($file_name, "w");
	fwrite($fp, $cont);
	fclose($fp);
	if (!$file_name) {
		echo "не удалось создать fайл";
	
	}else{
		echo "файл успешно создан!";
	}
		
    }
}
