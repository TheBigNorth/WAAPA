<?php namespace Waapa\Core;

class Render
{
    public static function View($viewName, array $data)
    {
        extract($data, EXTR_OVERWRITE);
        ob_start();
        include('/../../view/' . $this->getPath($view) . '.php');
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }

    private function getPath($path)
    {
        return str_replace('.', '/', $path);
    }
}