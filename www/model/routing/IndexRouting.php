<?php

class IndexRouting {

    public string  $uri;

    public function pageDisplay () :void {

        $this->uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

        if ($this->uri === '/blog' || $this->uri === '/'){
            require "/var/www/view/blog/blog.php";
        } elseif ($this->uri === '/create_topic' || $this->uri === '/createtopic'){
            require "/var/www/view/create_topic/create_topic.php";
        } elseif ($this->uri === '/my_topics' || $this->uri === '/mytopics'){
            require "/var/www/view/my_topics/my_topics.php";
        } else {
            require "/var/www/view/404.php";
        }
    }
}