<?php

namespace App\Http\Controllers;

use Dymantic\MultilingualPosts\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NextArticleController extends Controller
{
    public function show(Post $post, $lang)
    {
        app()->setLocale($lang);
        $category = config('blog.category_id');


        $next = Post::live()
                    ->whereHas('categories', function ($query) use ($category) {
                        $query->where('multilingual_categories.id', $category);
                    })
                    ->where('publish_date', '<', $post->publish_date)
                    ->latest('publish_date')
                    ->first();


        if ($next) {
            $next = $next->asDataArrayFor($lang);

            return [
                'has_next'   => !!$next,
                'next_id'    => $next['id'],
                'next_url'   => "/{$lang}/journal/{$next['slug']}",
                'next_title' => $next['title'],
                'html'       => View::make('front.posts.article', ['post' => $next])->render(),
            ];
        }

        return [
            'has_next'   => false,
            'next_id'    => null,
            'next_url'   => "",
            'next_title' => '',
            'html'       => '',
        ];
    }
}
