<?php

	class templateEngine {

		/* Variáveis privadas */
		private $path = "view/";


		/* Getters e Setters */
		public function getPath() {
			return $this->path;
		}
		public function setPath($path) {
			$this->path = $path;
		}


		public function carregarArquivos($file) {
			if(is_array($file)) {
				foreach ($file as $key) {
					if(file_exists($this->path . $key . '.php'))
						require_once ($this->path . $key . '.php');
				}

			} else {
				if(file_exists($this->path . $file . '.php'))
					require_once ($this->path . $file . '.php');
				else
					return false;
			}
		}



	}