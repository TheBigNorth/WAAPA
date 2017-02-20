<?php namespace App\View;

class BaseView
{
    protected function render($data, $view)
    {
        ob_start();
        include('/../../view/' . $view . '.php');
        $return = ob_get_contents();
        ob_end_clean();
        echo $return;
    }
}