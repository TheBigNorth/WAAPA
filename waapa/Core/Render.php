<?php namespace Waapa\Core;

class Render
{
    public static function view($viewName, array $data)
    {
        return self::getView($viewName, $data);
    }

    public static function partial($viewName, array $data)
    {
        return self::getView('partials/' . $viewName, $data);
    }

    private static function getView($viewName, array $data)
    {
        $render = Render::getInstance();

        extract($data, EXTR_OVERWRITE);
        ob_start();
        include('/../../../view/' . self::getPath($viewName) . '.php');
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }

    private function getPath($path)
    {
        return str_replace('.', '/', $path);
    }

    public static function getInstance()
    {
        return new self();
    }
}