<?php

namespace application\models;

use application\core\model;


class Admin extends Model
{
    public $error;

	public function loginValidate($requestData) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $requestData->login || $config['password'] != $requestData->password) {
			$this->error = 'Логин или пароль указаны неверно';
			return false;
		}
		return true;
	}

	public function watchValidate($post, $type) {
		
		$brend = trim($post['brend']);
		$name = trim($post['name']);
		$guarantee = trim($post['guarantee']);
		$price = trim($post['price']);

		if (empty($brend && $name && $guarantee && $price)) {
			$this->error = 'Должны быть заполнены все поля!';
			return false;
		} 

		if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
			$this->error = 'Не добавлено изображение';
			return false;
		}
		return true;	
	}

	public function watchAdd($post) {
		$params = [
			'brend' => $post['brend'],
			'nazvanie_chasov' => $post['name'],
			'gender' => $post['gender'],
			'garantia' => $post['guarantee'],
			'cena' => $post['price'], 
		];
		$this->db->query('INSERT INTO chasi (brend, nazvanie_chasov, gender, garantia, cena) VALUES (:brend, :nazvanie_chasov, :gender, :garantia, :cena)', $params);
		return $this->db->lastInsertId();
	}

	public function watchUploadImage($path, $id) {
		move_uploaded_file($path, 'public/watch/' . $id . '.jpg');
	}

	public function isWatchExists($id) {
		$params = [
			'articul_chasov' => $id,
		];
		return $this->db->column('SELECT articul_chasov FROM chasi WHERE articul_chasov = :articul_chasov', $params);
	}

	public function watchDelete($id) {
		$params = [
			'articul_chasov' => $id,
		];
		$this->db->query('DELETE FROM chasi WHERE articul_chasov = :articul_chasov', $params);
		unlink('public/watch/' . $id . '.jpg');
	}

	public function watchEdit($id) {
		$params = [
			'articul_chasov' => $id,
		];
		return $this->db->row('SELECT * FROM chasi WHERE articul_chasov = :articul_chasov', $params);
	}

	public function watchDataEdit($post, $id) {
		$params = [
			'articul_chasov' => $id,
			'brend' => $post['brend'],
			'nazvanie_chasov' => $post['name'],
			'gender' => $post['gender'],
			'garantia' => $post['guarantee'],
			'cena' => $post['price'],
		];
		$this->db->query('UPDATE chasi SET brend = :brend, nazvanie_chasov = :nazvanie_chasov, gender = :gender, garantia = :garantia, cena = :cena WHERE articul_chasov = :articul_chasov', $params);
	}	
}