<?php

namespace application\models;

use application\core\model;


class Main extends Model
{
    public $error;

	public function contactValidate($requestData) {

        $nameLen = iconv_strlen($requestData->name);
        $textLen = iconv_strlen($requestData->text);

        if ($nameLen <= 2 or $nameLen >= 20) {
                $this->error = 'Имя должно содержать от 2 до 20 символов';
                return false;
        } elseif (!preg_match("/^[A-Za-zА-яЁё]+$/u", $requestData->name)) {
                $this->error = 'Имя должно содержать только буквы';
                return false;
        } elseif (!filter_var($requestData->email, FILTER_VALIDATE_EMAIL)) {
                $this->error = 'E-mail указан некорректно';
                return false;
        } elseif ($textLen <= 5 || $textLen >= 500) {
                $this->error = 'Сообщение должно содержать от 5 до 500 символов';
                return false;
        }
        return true;
	}

        public function watchCount() {
		return $this->db->column('SELECT COUNT(articul_chasov) FROM chasi');
	}

	public function watchList($route) {
		$max = 6;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM chasi ORDER BY articul_chasov DESC LIMIT :start, :max', $params);
	}
        ##поиск на сайте
        public function searchValidate($post) { 

                $query = trim($post['word']);
                $word = htmlspecialchars($query);

                if (empty($word)) {
			$this->error = 'Заполните поле!';
			return false;
		}
                return true;
        }

        public function isBrendExists($post) {
		$params = [
			'brend' => $post['word'],
		];
		return $this->db->column('SELECT brend FROM chasi WHERE brend = :brend', $params);
	}

}