<?php namespace App\Pages\Query;

use \App\Pages\DTO\PageDTO;

class HomePageQuery
{
    public function getContent()
    {
        global $wp_query; 
        $postId = $wp_query->post->ID;

        $data = get_posts([
            'post_type' => 'any',
            'p' => $postId
        ])[0];

        $dto = new PageDTO();
        $dto->setTitle($data->post_title);
        $dto->setContent($data->post_content);

        return $dto;
    }
}
