<?php

    namespace App\Http\Controllers\Admin\Post;

    use App\Http\Controllers\Controller;
    use App\Http\Controllers\Post\BaseController;
    use App\Http\Requests\Post\FilterRequest;
    use App\Http\Filters\PostFilter;
    use App\Models\Category;
    use App\Models\Post;
    use App\Models\Tag;

    class CrateController extends BaseController {

        public function __invoke(FilterRequest $request) {

            $data = $request->validated();
            $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
            $posts = Post::filter($filter)->paginate(10);


            $tags = Tag::all();
            $categories = Category::all();



            return view('admin.post.create', compact('categories', 'tags', 'posts'));
        }

    }
