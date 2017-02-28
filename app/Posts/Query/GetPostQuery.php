<?php namespace App\Posts\Query;

use \GuzzleHttp\Client;
use \App\Posts\DTO\PostDTO;

class GetPostQuery
{
    public $id;
    public $dto;

    public function __construct()
    {}

    public function data($id) {

        $dto = new PostDTO();

        $data = get_posts([
            'p' => $id
        ])[0];

        $dto->setTitle($data->post_title);
        $dto->setContent($data->post_content);

        return $dto;

        /*$client = new Client();

        $res = $client->request(
            'GET',
            'http://local.test.com/wp-json/wp/v2/posts/' . $this->id
        );

        $json = json_decode($res->getBody()->getContents());

        $this->dto->setTitle($json->title->rendered);
        $this->dto->setContent($json->content->rendered);*/

        return $this->dto;
    }
}