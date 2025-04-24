<?php


$title = 'My Blog :: About';

$post = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur tempora animi esse nulla laudantium perspiciatis maxime similique iure vero deserunt sapiente quo, quidem libero reprehenderit quae repudiandae labore, consequuntur veniam.</p>
        <p>Consequatur omnis autem facilis reiciendis nostrum iusto odit numquam consequuntur? Sint nostrum cumque perspiciatis facere repudiandae expedita molestias labore nisi, distinctio magnam ab dolore, possimus maxime minus. Quas, soluta voluptate.</p>
        <p>Ab est eligendi neque, veritatis asperiores quasi facilis. Voluptates provident consequatur voluptatibus repellat reiciendis dolorem iusto vero dolorum ratione molestias velit blanditiis quae, suscipit ab esse ut! Voluptatem, voluptas modi.</p>';

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once VIEWS . '/about.tpl.php';
