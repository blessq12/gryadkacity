<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function __construct(){
        $this->linkgroup = [
            [
                'title' => 'Индивидуальные',
                'url' => 'visit.individual'
            ],[
                'title' => 'Групповые',
                'url' => 'visit.group'
            ],[
                'title' => 'День рождения',
                'url' => 'visit.happybirthday'
            ],[
                'title' => 'Каникулы',
                'url' => 'visit.holidays'
            ],[
                'title' => 'Выпускные',
                'url' => 'visit.graduation'
            ],[
                'title' => 'Новый год',
                'url' => 'visit.newyear'
            ],
        ];
    }
    public function index(){
        $breadcrumb = [['title'=>'Посещения','url'=>'visit.index']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Посещения',
            'description' => 'Описание страницы посещения',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('visit-index',$page);
    }
    public function individual(){
        $breadcrumb = [['title'=>'Посещения','url'=>'visit.index'],['title'=>'Индивидуальное посещение','url'=>'visit.individual']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Индивидуальное посещение',
            'description' => 'Описание страницы Индивидуальное посещение',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('visit-individual',$page);
    }
    public function group(){
        $breadcrumb = [['title'=>'Посещения','url'=>'visit.index'],['title'=>'Групповые посещения','url'=>'visit.group']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Групповые посещения',
            'description' => 'Описание страницы Групповые посещения',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('visit-group',$page);
    }
    public function happybirthday(){
        $breadcrumb = [['title'=>'Посещения','url'=>'visit.index'],['title'=>'День рождения','url'=>'visit.happybirthday']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'День рождения',
            'description' => 'Описание страницы День рождения',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('visit-happybirthday',$page);
    }
    public function holidays(){
        $breadcrumb = [['title'=>'Посещения','url'=>'visit.index'],['title'=>'Каникулы','url'=>'visit.holidays']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Каникулы',
            'description' => 'Описание страницы каникулы',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('visit-holidays',$page);
    }
    public function graduation(){
        $breadcrumb = [['title'=>'Посещения','url'=>'visit.index'],['title'=>'Выпускные','url'=>'visit.graduation']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Выпускные',
            'description' => 'Описание страницы Выпускные',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('visit-graduation',$page);
    }
    public function newyear(){
        $breadcrumb = [['title'=>'Посещения','url'=>'visit.index'],['title'=>'Новый год','url'=>'visit.newyear']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Новый год',
            'description' => 'Описание страницы Новый год',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('visit-newyear',$page);        
    }
}
