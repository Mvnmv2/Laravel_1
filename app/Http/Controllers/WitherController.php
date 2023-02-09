<?php

    namespace App\Http\Controllers;

    use App\Models\Wither;
    use Illuminate\Http\Request;

    class WitherController extends Controller {
        public function index() {
            $withers = Wither::all();
            return view('wither.index', compact('withers'));
        }

        public function create() {
            /*$withersList = [
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
            ];*/
            return view('wither.create');
        }

        public function store() {
            $data = request()->validate([
                'name' => 'string',
                'city_of_birth' => 'string',
                'year_of_birth' => 'Numeric',
                'school' => 'string',
                'girl' => ''
            ]);
            Wither::create($data);
            return redirect()->route('wither.index');
        }

        public function show(Wither $wither) {
            return view('wither.show', compact('wither'));
        }

        public function edit(Wither $wither) {
            return view('wither.edit', compact('wither'));
        }

        public function update(Wither $wither) {
            $data = request()->validate([
                'name' => 'string',
                'city_of_birth' => 'string',
                'year_of_birth' => 'Numeric',
                'school' => 'string',
                'girl' => ''
            ]);
            $wither->update($data);
            return redirect()->route('wither.show', $wither->id);
        }

        public function destroy(Wither $wither) {
            $wither->delete();
            return redirect()->route('wither.index');
        }


    }
