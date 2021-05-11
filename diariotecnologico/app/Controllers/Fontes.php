<?php

namespace App\Controllers;

class Fontes extends BaseController
{
	public function read()
	{
		$model = new \App\Models\ModelFontes();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();


		foreach ($data["tabela"] as $key => $value) {
			$data["tabela"][$key]["btnEditar"] = "<a href='updateInit/".
																						$data["tabela"][$key]["id"]."'>Editar Registro</a>";
			$data["tabela"][$key]["btnDelete"] = "<a href='delete/".
																						$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
		}

		// echo '<pre>';var_dump($data); exit; // DEBUG

		echo view('fontesView', $data); // Só para fazer o teste

	}

	public function createInit() {
		//https://codeigniter4.github.io/userguide/outgoing/views.html#displaying-a-view
		echo view('fontes/createForm');

	}

	public function createBE() {
		$model = new \App\Models\ModelFontes();

		$data = $this->request->getPost();

		$model->insert($data);
	}


	public function updateInit($id) {

		// Para fazer o update precisamos primeiro selecionar o dado que se quer alterar
		// Pois precisaremos preencher o form, para que não fique vazio.
		// O código abaixo descreve este processo, enviamos tudo para a view
		// Lá preenchemos os Value do input utilizando estes dados e enviamos para o update()



		// https://codeigniter4.github.io/userguide/models/model.html#finding-data
		$model = new \App\Models\ModelFontes();
		$dadosFontes = $model->find($id);

		// var_dump($dadosFontes); // Só para ver

		//https://codeigniter4.github.io/userguide/outgoing/views.html#displaying-a-view
		echo view('fontes/updateForm', $dadosFontes);

	}

	public function update() {
		$model = new \App\Models\ModelFontes();

		// https://codeigniter4.github.io/userguide/models/model.html#saving-data

		$data = $this->request->getPost();
		// var_dump($data); exit; // PARA DEBUG


		$retorno = $model->update($data["id"], $data );

		// var_dump($retorno);

	}

	public function delete($fontesId) {
		// https://codeigniter4.github.io/userguide/models/model.html#deleting-data

		$model = new \App\Models\ModelFontes();

		$retorno = $model->delete($fontesId);

		// var_dump($retorno);
	}

}


?>
