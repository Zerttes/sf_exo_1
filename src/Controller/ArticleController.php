<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
    public $articles = [
        1 => [
            "title" => "La vaccination c'est trop géniale",
            "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Libero ipsa ipsum sunt modi nesciunt officia, 
                iste repellat quidem quae voluptatem quas animi, 
                facilis voluptatibus quaerat eveniet, repellendus aut ullam delectus.",
            "id" => 1
        ],
        2 => [
            "title" => "La vaccination c'est pas trop géniale",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Repudiandae asperiores officiis corporis modi minima odio temporibus! 
               Dicta dolorum eaque minima, suscipit et voluptates cumque 
               veritatis recusandae corrupti ipsa blanditiis minus.",
            "id" => 2
        ],
        3 => [
            "title" => "Balkany c'est trop génial",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
               Porro eligendi asperiores doloremque aspernatur eum iure debitis commodi esse corporis tenetur? 
               Ratione iste error veniam numquam. Esse totam sunt earum non?",
            "id" => 3
        ],
        4 => [
            "title" => "Balkany c'est pas trop génial",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Voluptas, error amet suscipit dolore accusantium possimus tempore, 
               ipsa deserunt voluptatem totam dolor explicabo placeat fugiat dolorum necessitatibus beatae neque velit adipisci.",
            "id" => 4
        ]
    ];

    /**
     * @Route("/articles", name="articleList")
     */
    public function articleList()
    {
        return new Response("Liste d'articles");
    }

    // Système des wildcards
    /**
     * @Route("/article/{id}", name = "ArticleShow")
     */
    public function articleShow($id)
    {
        $article = $this->articles[$id];
        //return new Response("Titre de l'article : ".$article['title']);
        return $this->render('article.html.twig', ['article' => $article]);
    }



}