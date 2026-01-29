<?php
    $menu = array(
        array('text' => 'Home', 'href' => 'index.php'),
        array('text' => 'Dylan Verbunt', 'href' => 'dylan-verbunt.php'),
        array('text' => 'Joshua Goertzen', 'href' => 'joshua-goertzen.html'),
        array('text' => 'Jur Jansen', 'href' => 'jur-jansen.html'),
        array('text' => 'Mylan Rossel', 'href' => 'mylan-rossel.html'),
        array('text' => 'Contact', 'href' => 'contact.html')
    );

    foreach ($menu as $menuItem) {
        echo '<li><a href="'.$menuItem['href'].'">'.$menuItem['text'].'</a></li>';
    }