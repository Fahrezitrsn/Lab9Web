<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function beranda()
    {
    return view('layout', [
        'title' => 'PHP Framework',
        'content' => 'Ini adalah halaman utama yang menjelaskan tentang isi
    halaman ini.',]);

    }
    public function about()
    {
    return view('layout', [
        'title' => 'About Page',
        'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
    halaman ini.']);
    }
    public function contact()
    {
    return view('layout', [
        'title' => 'Contact',
        'content' => 'Ini adalah halaman contact']);
    }
      public function artikel()
    {
    return view('layout', [
        'title' => 'Artikel',
        'content' => 'Ini adalah halaman Artikel']);
    }
}