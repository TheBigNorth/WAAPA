<?php namespace App\Query;

use \GuzzleHttp\Client;
use \App\DTO\PostDTO;

class GetPostQuery
{
    public $id;
    public $dto;

    public function __construct(PostDTO $dto, $id)
    {
        $this->dto = $dto;
        $this->id = $id;
    }

    public function data() {

        $data = get_posts([
            'p' => $this->id
        ])[0];

        $this->dto->setTitle($data->post_title);
        $this->dto->setContent($data->post_content);

        return $this->dto;

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