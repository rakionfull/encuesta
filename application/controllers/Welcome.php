<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//aqui pueden lllamar a los helper o librerias que requieran para todo el controlador

	}

	public function home()
	{
		// CANTIDAD CAMPAÑAS
		$companies_array = array();
		$query = $this->db->query('SELECT fecha_reg, count(*) as cantidad FROM campanias group by fecha_reg');
		foreach ($query->result() as $row) {
			array_push($companies_array,$row->cantidad);
		}
		// CANTIDAD PREGUNTAS
		$preguntas_array = array();
		$query = $this->db->query('SELECT fecha_reg, count(*) as cantidad FROM preguntas group by fecha_reg');
		foreach ($query->result() as $row) {
			array_push($preguntas_array,$row->cantidad);
		}
		// CANTIDAD FORMULARIOS
		$formularios_array = array();
		$query = $this->db->query('SELECT fecha_reg, count(*) as cantidad FROM formularios group by fecha_reg');
		foreach ($query->result() as $row) {
			array_push($formularios_array,$row->cantidad);
		}
		$data = [
			'companies_array' => json_encode($companies_array),
			'preguntas_array' => json_encode($preguntas_array),
			'formularios_array' => json_encode($formularios_array)
		];
		// CANTIDAD ENCUESTADOS
		$encuestados_array = array();
		$query = $this->db->query('SELECT fecha_enc, COUNT(dni_encuestado) AS cantidad FROM detalle_encuesta GROUP BY fecha_enc');
		foreach ($query->result() as $row) {
			array_push($encuestados_array,$row->cantidad);
		}
		$data = [
			'companies_array' => json_encode($companies_array),
			'preguntas_array' => json_encode($preguntas_array),
			'formularios_array' => json_encode($formularios_array),
			'encuestados_array' => json_encode($encuestados_array)
		];
		$this->layout->view('home',$data);
	}
}
