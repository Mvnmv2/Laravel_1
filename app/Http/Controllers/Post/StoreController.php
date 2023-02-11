<?php

    namespace App\Http\Controllers\Post;

    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use App\Models\Post;
    use App\Models\Tag;

    class StoreController extends Controller {

        public function __invoke() {
            $data = request()->validate([
                'title' => 'required|string',
                'content' => 'required|string',
                'image' => 'required|string',
                'category_id' => '',
                'tags' => ''
            ]);

            $tags = $data['tags'];
            unset($data['tags']);
            $post = Post::create($data);

            // Первый вариант добавления тэгов в PostTag
            //            foreach ($tags as $tag){
            //                PostTag::firstOrCreate([
            //                    'tag_id'=>$tag,
            //                    'post_id'=>$post->id
            //                ]);
            //            }
            // Второй вариант добавления тэгов в PostTag
            $post->tags()->attach($tags);

            return redirect()->route('post.index');
        }
    }
