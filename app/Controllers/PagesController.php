<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function billing()
    {

        echo view('pages/billing');
    }
    public function customer()
    {
        echo view('pages/pelanggan');
    }
    public function photo()
    {
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('pages/photographer');
        echo view('template/footer');
    }
}
