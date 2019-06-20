<?php
namespace Model;
class postmodel{
    private $query;
    public function __construct()
    {
        $this->query=new \steph\db_query\db_query();
    }

    public function getArticle($id)
    {
        $cond=[
            ['id',$id]
        ];
        return $this->query->select()->from('articles')->where($cond)->run_fetch()->getResult();

    }
    public function getAllArticle()
    {
        return  $this->query->select()->from('articles')->run_fetch(true)->getResult();
    }
    public function getArticleByCategory($id,$bool,$past){
        if($bool==true && (isset($past) && $past!=0)){
            $sql="SELECT * FROM `articles` WHERE `category_id`=".$id." AND `id` <> ".$past;
            $data= $this->query->setSql($sql)->run_fetch(true)->getResult();
        }else{
            $sql="SELECT * FROM `articles` WHERE `category_id`=".$id;
            $data= $this->query->setSql($sql)->run_fetch(true)->getResult();
        }
        return $data;

    }
}
