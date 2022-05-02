<?php

class IndexRouting
{
    public string $uri;
    public array $uriExplode;

    public function pageDisplay () :void {

        $this->uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $this->uriExplode = explode("/", $this->uri);

        if ($this->uriExplode[1] === 'blog') {
            if (count($this->uriExplode) == 2){
                require "/var/www/view/blog/blog.php";
            } elseif ($this->uriExplode[2]) {
                $id = $this->uriExplode[2];
                require "/var/www/model/data_detail_topic/DetailTopicController.php";
                $showTopic = new DetailTopicController();
                $showTopic->getTopic($id);
            }
        } elseif ($this->uri === '/createtopic'){
            require "/var/www/view/create_topic/create_topic.php";
        } elseif ($this->uri === '/mytopics'){
            require "/var/www/view/my_topics/my_topics.php";
        } else {
            require "/var/www/view/404.php";
        }
    }
}