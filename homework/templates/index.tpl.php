<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagetitle['title'] . ( (isset($pagetitle['motto'])) ? ('|' . $pagetitle['motto']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/style.css" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script type="text/javascript" src="js/contact.js"></script>
	<?php if(file_exists('./styles/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $find['file']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<header>
		<img src="./images/<?=$header['imagesource']?>" alt="<?=$header['imagealt']?>">
		<h1><?= $header['title'] ?></h1>
		<?php if (isset($header['motto'])) { ?><h2><?= $header['motto'] ?></h2><?php } ?>
	</header>
    <div id="wrapper">
        <aside id="nav">
            <nav>
                <ul>
					<?php foreach ($pages as $url => $page) { ?>
						<li<?= (($page == $find) ? ' class="active"' : '') ?>>
						<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
						<?= $page['text'] ?></a>
						</li>
					<?php } ?>
                </ul>
            </nav>
        </aside>
        <div id="content">
            <?php include("./templates/pages/{$find['file']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($footer['firm'])) { ?><?= $footer['firm']; ?><?php } ?>
    </footer>
</body>
</html>
