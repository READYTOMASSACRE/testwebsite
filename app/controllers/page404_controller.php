<?php
class Page404Controller extends BaseController
{
  function action_index()
  {
    $this->view->generate('404_view.php', 'template_view.php');
  }
}
