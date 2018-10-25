<?php
    require('./model/model.php');

    function index()
    {
        $req = getPostsIndex();
        require('./view/viewIndex.php');
    }

    function post()
    {
        $posts = getPost($_GET['post']);
        $comments = getComment($_GET['post']);
        require('./view/viewPost.php');
    }

    function posts()
    {
        $req = getPosts();
        require('./view/viewPosts.php');
    }

    function connect()
    {
        require('./view/viewConnect.php');
    }