<?php

    namespace App\Http\Controllers;

    use App\Models\Wither;
    use Illuminate\Http\Request;

    class PostController extends Controller {
        public function index() {
            return view('posts');
        }
    }
