<?php

    namespace App\Http\Controllers;

    use App\Models\Wither;
    use Illuminate\Http\Request;

    class WitherController extends Controller {
        public function index() {
            $withers = Wither::all();
            return view('wither', compact('withers'));
        }

        public function create() {
            $withersList = [
                [
                    'name' => 'Геральт',
                    'city_of_birth' => 'Ривия',
                    'year_of_birth' => 1215,
                    'school' => 'Волк',
                    'girl' => 'Йеннифэр из Венгерберга'
                ],
                [
                    'name' => 'Ламберт',
                    'city_of_birth' => 'Северные королевства',
                    'year_of_birth' => 1225,
                    'school' => 'Волк',
                    'girl' => 'Кейра Метц'
                ],
                [
                    'name' => 'Весемир',
                    'city_of_birth' => 'Каэр Морхен',
                    'year_of_birth' => 993,
                    'school' => 'Волк',
                    'girl' => 'Миньоль'
                ],
                [
                    'name' => 'Эскель',
                    'city_of_birth' => 'Голубые горы',
                    'year_of_birth' => 1199,
                    'school' => 'Волк',
                    'girl' => ''
                ],
            ];

            foreach ($withersList as $item) {
                Wither::create($item);
            }
            dump('Successful');

        }

    }
