<?php
$pagetitle = array(
    'title' => 'Cegléd Railway Sports Association',
);

$header = array(
    'imagesource' => 'logo.png',
	'title' => 'Cegléd Railway Sports Association',
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'Cegléd Railway Sports Association'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home'),
	'introduction' => array('file' => 'introduction', 'text' => 'Introduction'),
	'contact' => array('file' => 'contact', 'text' => 'Contact'),
	'divisions' => array('file' => 'divisions', 'text' => 'Divisions'),
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery'),
    'upload' => array('file' => 'upload', 'text' => 'Upload'),
    'validation' => array('file' => 'validation', 'text' => '')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>
<?php
 $FOLDER = './gallery/';
 $TYPES = array ('.jpg', '.png', '.gif');
 $MEDIATYPES = array('image/jpeg', 'image/png', 'image/gif');
 $DATEFORMAT = "m/d/Y H:i";
 $MAXSIZE = 1920*1080;
?>
