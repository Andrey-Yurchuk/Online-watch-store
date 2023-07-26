<?php

namespace application\controllers;

use application\core\controller;
use application\lib\pagination;
use application\models\admin;


class MainController extends Controller
{
    public function indexAction() {
        $pagination = new Pagination($this->route, $this->model->watchCount(), 6); //6 - кол-во записей на странице
        $vars = [
			'pagination' => $pagination->get(),
            'list' => $this->model->watchList($this->route),
		];
        $this->view->render('Главная страница', $vars);
    }

    public function aboutAction() {
        $this->view->render('О нашем магазине');
    }
    
    public function contactAction() {
    
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
			
            header("Content-type: application/json; charset=utf-8");
            $requestJSON = file_get_contents('php://input');
            $requestData = json_decode($requestJSON);
                
            if (!$this->model->contactValidate($requestData)) {
			    $this->view->message('error', $this->model->error);
			}
            //отправляем админу сообщение
			mail('r1430@tut.by', 'Сообщение от клиента', $requestData->name.'|'.$requestData->email.'|'.$requestData->text);
			$this->view->message('success', 'Сообщение отправлено Администратору');
		    }
        $this->view->render('Контакты'); 
    }

    public function watchAction() {
        $adminmodel = new Admin;
		if (!$adminmodel->isWatchExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminmodel->watchEdit($this->route['id'])[0],
		];
		$this->view->render('Часы', $vars);
    }
    ##поиск на сайте
    public function searchAction() { 
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!$this->model->searchValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
            if (!$this->model->isBrendExists($_POST)) {
                $this->view->message('Сообщение', 'По Вашему запросу ничего не найдено');
            }
            $pagination = new Pagination($this->route, $this->model->watchCount());
			$vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->watchList($this->route),
		];
        $this->view->render('Результаты поиска', $vars);
        } 
    }
}