<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FtpController extends Controller
{
    public function index()
    {
        if (Storage::disk('connect_ftp')->path('/')) {
            echo Storage::disk('connect_ftp')->path('/categories');
        } else {
            echo "Bağlantı Başarısız";
        }
    }
}
