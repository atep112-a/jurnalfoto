<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/dashboard');
        echo view('template/footer');
    }
    public function order()
    {
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/order');
        echo view('template/footer');
    }
    public function produk()
    {
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/produk');
        echo view('template/footer');
    }
    public function team()
    {
        echo view('template/navbar');
        echo view('template/sidebar');
        echo view('admin/team');
        echo view('template/footer');
    }
    public function produk1()
    {

        echo view('user/produk');
    }
}
