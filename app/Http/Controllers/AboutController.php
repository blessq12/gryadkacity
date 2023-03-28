<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CliParser\RequiredOptionArgumentMissingException;

class AboutController extends Controller
{
    public function __construct(){
        $this->linkgroup = [
            [
                'title' => 'О нас',
                'url' => 'about.index'
            ],[
                'title' => 'Детям',
                'url' => 'about.kids'
            ],[
                'title' => 'Родителям',
                'url' => 'about.parent'
            ],[
                'title' => 'Команда',
                'url' => 'about.team'
            ]
        ];
    }
    public function index(){
        $breadcrumb = [['title' => 'О нас','url' => 'about.index']];
        $page = [
          'layout' => 'default-layout',
          'title' => 'О нас',
          'description' => 'Описание страницы о нас',
          'breadcrumb' => $breadcrumb,
          'linkgroup' => $this->linkgroup
        ];
        return view('about',$page);
    }
    public function kids(){
        $breadcrumb = [
            ['title' => 'О нас','url' => 'about.index'],['title' => 'Детям','url' => 'about.kids']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Детям',
            'description' => 'Описание страницы Детям',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
          ];
          return view('about-kids',$page);
    }
    public function parent(){
        $breadcrumb = [
            ['title' => 'О нас','url' => 'about.index'],['title' => 'Родителям','url' => 'about.parent']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Родителям',
            'description' => 'Описание страницы Родителям',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
          ];
          return view('about-parent',$page);
    }
    public function team(){
        $breadcrumb = [
            ['title' => 'О нас','url' => 'about.index'],['title' => 'Команда','url' => 'about.team']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Команда',
            'description' => 'Описание страницы Команда',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
          ];
          return view('about-team',$page);
    }
}
