<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $primaryKey = 'post_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['author', 'post_title', 'post_title_seo', 'post_status', 'post_type', 'post_thumbnail', 'post_link', 'post_content', 'post_time'];

    function getNews()
    {
        return $this->db->table('news')
            ->where('post_type', 'article')
            ->orderBy('post_id', 'DESC');
    }
}
