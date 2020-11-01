<?php


class controller
{
    public static function view($HTMLPAGE , $data = []){
        require_once str_replace('App/Controllers','',trim(__DIR__,'\\'))."Resourses/Views/".$HTMLPAGE.".php";
    }
    public static function model($model){
        require_once str_replace('Controllers','',trim(__DIR__,'\\'))."Models/".$model.".php";
        return new $model();
    }

}