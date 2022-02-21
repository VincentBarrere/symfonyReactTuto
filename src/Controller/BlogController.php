<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog', name: 'blog')]
class BlogController extends AbstractController
{
    private const POSTS = [
        [
            'id' => 1,
            "slug" => "hello-world",
            "title" => "Hello World"
        ],
        [
            'id' => 2,
            "slug" => "another-post",
            "title" => "This is another post"
        ],
        [
            'id' => 3,
            "slug" => "last-post",
            "title" => "This is last post"
        ]
    ];

    #[Route("/{page}", name: "blog_list", defaults: ["page" => 5])]
    public function list($page)
    {
        return $this->json(
            [
                'page' => $page,
                'data' => self::POSTS
            ]
        );
    }
    #[Route("/post/{id}", name: "blog_by_id")]
    public function post($id)
    {
        return $this->json(
            self::POSTS[array_search($id, array_column(self::POSTS, 'id'))]
        );
    }
    #[Route("/post/{slug}", name: "blog_by_slug")]
    public function postBySlug($slug)
    {
        return $this->json(
            self::POSTS[array_search($slug, array_column(self::POSTS, 'slug'))]
        );
    }
}
