<html>
<head>
    <title>Platzi Blog in PHP!</title>
</head>
<body>    
    <ul>
        <?php
        use PlatziPHP\Post;
        /** @type \PlatziPHP\Post[] $posts */    
        foreach ($posts as $post): ?>
            <li>
                <h2><?php echo $post->getTitle(); ?></h2>      
                    <?php if($post == $firstPost): ?>
                        <p><?php echo $post->getBody(); ?></p>
                    <?php else: ?>
                        <p>Sumary..</p>
                    <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

