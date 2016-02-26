<?php
class MainController extends BaseController
{
  function action_index()
  {
    $data = $this->model->get_data();
    $this->view->generate('main_view.php', 'template_view.php', $data);
  }
}
