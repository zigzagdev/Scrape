<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Weidner\Goutte\GoutteFacade as GoutteFacade;

class ScrapingController extends Controller
{
  public function scrape(){
      $crawler = GoutteFacade::request('GET', 'https://www.google.com/search?q=laravel');
      $files =  $crawler->filter('div')->each(function ($node) {
          dump($node->text());
      });
      return view('index', compact('files'));
  }
}
