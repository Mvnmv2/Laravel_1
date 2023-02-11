<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\Category;
    use App\Models\Post;
    use App\Models\Tag;

    class PostController extends Controller {

         public function index() {
 //            $post = Post::find(1);
 //            $tag = Tag::find(1);
             //$category = Category::find(1);
             // dd($category->posts);

             $posts = Post::all();
             return view('post.index', compact('posts'));
 //            dd($tag->posts);
 //
 //            dd($post->tags);

         }

         public function create() {
             $tags = Tag::all();
             $categories = Category::all();
             return view('post.create', compact('categories', 'tags'));
         }

         public function store() {
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

         public function show(Post $post) {
             return view('post.show', compact('post'));
         }

         public function edit(Post $post) {
             $tags = Tag::all();
             $categories = Category::all();
             return view('post.edit', compact('post', 'categories', 'tags'));
         }

         public function update(Post $post) {
             $data = request()->validate([
                 'title' => 'string',
                 'content' => 'string',
                 'image' => 'string',
                 'category_id' => '',
                 'tags' => ''
             ]);

             $tags = $data['tags'];
             unset($data['tags']);

             $post->update($data);
             $post->tags()->sync($tags);

             return redirect()->route('post.show', $post->id);
         }

         public function destroy(Post $post) {
             $post->delete();
             return redirect()->route('post.index');
         }


    }
