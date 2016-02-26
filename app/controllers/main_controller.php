<?php
class MainController extends BaseController
{
  function __construct()
  {
    $this->model = new MainModel();
    $this->view = new BaseView();
  }
  
  function action_index()
  {
    $data = $this->model->get_data();
    $this->view->generate('main_view.php', 'template_view.php', $data);
  }
}
