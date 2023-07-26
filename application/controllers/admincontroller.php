<?php

namespace application\controllers;

use application\core\controller;
use application\lib\pagination;
use application\models\main;


class AdminController extends Controller
{
    public function __construct($route) {
       parent::__construct($route);
       $this->view->layout = 'admin'; 
    }

    public function loginAction() {
		if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin/add');
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
			
			header("Content-type: application/json; charset=utf-8");
            $requestJSON = file_get_contents('php://input');
            $requestData = json_decode($requestJSON);
			
			if (!$this->model->loginValidate($requestData)) {
				$this->view->message('Ошибка', $this->model->error);
			}
            $_SESSION['admin'] = true;
			$this->view->location('admin/add');
		}
		$this->view->render('Вход');
	}
	//здесь у fetch - FormData
    public function addAction() {
        
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if (!$this->model->watchValidate($_POST, 'add')) { 
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->watchAdd($_POST);
			if (!$id) {
				$this->view->message('Mistake', 'Ошибка добавления данных');
			}
			$this->model->watchUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Товар добавлен');
		}
		$this->view->render('Добавить товар');
    }
	
	public function editAction() {
		if (!$this->model->isWatchExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if (!$this->model->watchValidate($_POST, 'edit')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->watchDataEdit($_POST, $this->route['id']);
			if ($_FILES['img']['tmp_name']) {
				$this->model->watchUploadImage($_FILES['img']['tmp_name'], $this->route['id']);
			}
			$this->view->message('success', 'Данные сохранены');
		}
		$vars = [
			'data' => $this->model->watchEdit($this->route['id'])[0],
		];
		$this->view->render('Редактировать сведения о товаре', $vars);
    }

	public function deleteAction() {
		if (!$this->model->isWatchExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$this->model->watchDelete($this->route['id']);
		$this->view->redirect('admin/watch');
    }
    
	public function logoutAction() {
        unset($_SESSION['admin']);
		$this->view->redirect('admin/login');
    }

    public function watchAction() {
        $mainmodel = new Main;
		$pagination = new Pagination($this->route, $mainmodel->watchCount(), 6); //6 - кол-во записей на странице
        $vars = [
			'pagination' => $pagination->get(),
            'list' => $mainmodel->watchList($this->route),
		];
		$this->view->render('Список часов', $vars);
    }
}