<?php
class BaseView
{
  function generate($content_view, $template_view, $data = null)
  {
    include 'app/views/'.$template_view;
  }
}
