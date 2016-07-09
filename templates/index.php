<html>
<head>
    <title><?=$title?></title>
</head>
<body>
<header>
    <nav>
        <ul>
            <?php foreach ($menu as $item):?>
            <li><?php echo $item->title ?></li>
            <?php endforeach;?>
        </ul>
    </nav>

</header>
<main>
    <?php foreach ($news as $i):?>
    <div>
        <h3>
        <?php echo $i->title ?>
        </h3>
        <p>
            <?php echo $i->text ?>
        </p>
    </div>
    <?php endforeach; ?>
    <div>Info</div>
</main>
<footer>
    <div>
        Copyright
    </div>
</footer>
</body>
</html>
