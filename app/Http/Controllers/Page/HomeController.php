<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Libraries\Template;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'testimoni' => config('global.testimoni'),
            'layanan'   => config('global.layanan')
        ];

        return Template::page('Home', 'home', 'view', $data);
    }

    public function tentang()
    {
        return Template::page('Tentang Kami', 'tentang', 'view');
    }

    public function kontak()
    {
        return Template::page('Kontak', 'kontak', 'view');
    }

    public function layanan($slug)
    {
        $get_layanan = collect(config('global.layanan'))->where('slug', $slug)->first();

        $data = [
            'layanan' => $get_layanan
        ];

        return Template::page('Layanan', 'layanan', 'view', $data);
    }
}
