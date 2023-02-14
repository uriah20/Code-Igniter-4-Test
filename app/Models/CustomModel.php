<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel
{
    protected $db;

    public function __construct(ConnectionInterface & $db)
    {
        $this->db =& $db;
    }

    function all()
    {
        //"SELECT * FROM posts"
        return $this->db->table('posts')->get( )->getResult();

    }

    function where()
    {
        //"SELECT * FROM posts"
        return $this->db->table('posts')
                        ->where(['post_id >' =>  50])
                        ->where(['post_id <' =>  55])
                        ->where(['post_id !=' =>  51])
                        ->orderBy('post_id', 'ASC')
                        ->get()
                        ->getResult();

    }
    
    function join()
    {
        //"SELECT * FROM posts"
        return $this->db->table('posts')
                        ->where('post_id >', 25)
                        ->where('post_id <', 35)
                        ->join('users', 'posts.post_author = users.user_id')
                        ->get()
                        ->getResult();

    }
    
    function like()
    {
        //"SELECT * FROM posts"
        return $this->db->table('posts')
                        ->like('post_content', 'Alice')
                        ->join('users', 'posts.post_author = users.user_id')
                        ->get()
                        ->getResult();

    }
    
    function grouping()
    {
        //"SELECT * FROM posts WHERE post_id = 25 AND post_created_at < 1990 01 01 OR post_author = 10
        return $this->db->table('posts')
                        ->groupStart()
                            ->where(['post_id >' => 25, 'post_created_at <' => '1990-01-01'])
                        ->groupEnd()
                        ->orwhere(['post_author' => 10])
                        ->join('users', 'posts.post_author = users.user_id')
                        ->get()
                        ->getResult();
    }
    
    function wherein()
    {
        $email = ['lcormier@example.org', 'rosamond.crona@example.net' , 'amiya.kuhlman@example.com'];
        return $this->db->table('posts')
                        ->groupStart()
                            ->where(['post_id >' => 25, 'post_created_at <' => '1990-01-01'])
                        ->groupEnd()
                        ->orWhereIn('email', $email)
                        ->join('users', 'posts.post_author = users.user_id')
                        ->limit(5, 4)
                        ->get()
                        ->getResult();
    }

    function getPosts()
    {
        $builder = $this->db->table('posts');
        $builder->join('users', 'posts.post_author = users.user_id');
        $posts = $builder->get()->getResult();
        return $posts;

    }

    function getUsers($limit = false)
    {
        $builder = $this->db->table('users');

        if ($limit)
            $builder->limit($limit);

        $posts = $builder->get()->getResult();
        return $posts;
    }

    function getAnotherUsers($limit = false)
    {
        $builder = $this->db->table('users');

        if ($limit)
            $builder->limit($limit);
        
        $posts = $builder->get()->getResult();
        return $posts;
    }
    
}