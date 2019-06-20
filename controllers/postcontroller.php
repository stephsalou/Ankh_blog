<?php
 namespace App\Controller;


 class postcontroller{
     private $model;
     public function showArticle($id){

         $this->model=new \Model\postmodel();
         return $this->model->getArticle($id);
     }

     public function listing($id)
     {
         $render=new \GuzzleHttp\Client();
         $res=$render->get('localhost:1998/Ankh_blog/views/categoryList.php?id='.$id);
         $content=$res->getBody()->getContents();
         echo $content;
     }

     public function getPost($id)
     {
         $render=new \GuzzleHttp\Client();
         $res=$render->get('localhost:1998/Ankh_blog/views/post.php?id='.$id);
         $content=$res->getBody()->getContents();
         echo $content;
     }
     public function showAllArticle(){
         $this->model=new \Model\postmodel();
         return $this->model->getAllArticle();
     }

     public function articleByCategory($id,$without=false,$pastId=0)
     {
         $this->model=new \Model\postmodel();
         return $this->model->getArticleByCategory($id,$without,$pastId);
     }
     public function render(){
         $render=new \GuzzleHttp\Client();
         $res=$render->get('localhost:1998/Ankh_blog/views/postsList.php');
         $content=$res->getBody()->getContents();
         echo $content;
     }
 }
