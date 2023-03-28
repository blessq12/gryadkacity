<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function __construct(){
        $this->linkgroup = [
            [
                'title' => 'Сотрудничество',
                'url' => 'cooperation.index'    
            ],[
                'title' => 'Партнерство',
                'url' => 'cooperation.partnership'
            ],[
                'title' => 'Франшиза',
                'url' => 'cooperation.franchise'
            ],[
                'title' => 'Корпоротивные клиенты',
                'url' => 'cooperation.corporate-clients'
            ]
        ];
    }

    public function index(){
        $breadcrumb = [['title' => 'Сотрудничество','url' => 'cooperation.index']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Сотрудничество',
            'description' => 'Описание для страницы Сотрудничество',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('cooperation',$page);
    }
    public function partnership(){
        $breadcrumb = [['title' => 'Сотрудничество','url' => 'cooperation.index'],['title' => 'Партнерство','url' => 'cooperation.partnership']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Партнерство',
            'description' => 'Описание для страницы партнерства',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('cooperation-partnership',$page);
    }
    public function franchise(){
        $breadcrumb = [['title' => 'Сотрудничество','url' => 'cooperation.index'],['title' => 'Франшиза','url' => 'cooperation.franchise']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Франшиза',
            'description' => 'Описание для страницы Франшиза',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('cooperation-franchise',$page);
    }
    public function corporate(){
        $breadcrumb = [['title' => 'Сотрудничество','url' => 'cooperation.index'],['title' => 'Корпоративные клиенты','url' => 'cooperation.corporate-clients']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Корпоротивные клиенты',
            'description' => 'Описание для страницы Корпоротивные клиенты',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('cooperation-corporate',$page);
    }

}
