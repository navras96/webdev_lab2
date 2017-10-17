<?php

class Menu
{
    private static $items = [1 => ['Start',    'index.php?page=1', 'start.html'],
                             2 => ['About',    'index.php?page=2', 'about.html'],
                             3 => ['Top List', 'index.php?page=3', 'top_list.html']];

    private static function getLine($page, $active)
    {
        if ($active)
        {
            $active_line = '<li class="menu__item menu__item_active">%s</li>';
            return sprintf($active_line, $page[0]);
        }
        $line = '<li class="menu__item"><a href=%s>%s</a></li>';
        return sprintf($line, $page[1], $page[0]);
    }

    public static function renderMenu($active_menu = 1)
    {
        echo
        '<header class="header">
		<div class="logo">
			<span class="logo__icon"></span>
			<a class="logo__text" href="index.php"><b>Game Name</b></a>
		</div>
		<ul class="menu">';
        foreach (self::$items as $key=>$page)
        {
            if ($active_menu == $key) { echo self::getLine($page, true); }
            else { echo self::getLine($page, false); }
        }
		echo '</ul>
	    </header>';
    }

    public static function getPage($page = 1)
    {
        echo file_get_contents(self::$items[$page][2]);
    }
}

