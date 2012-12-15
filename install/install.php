<?php 
$config['name'] = 'Blog Module';
$config['version'] = BLOG_VERSION;
$config['author'] = 'David McReynolds';
$config['company'] = 'Daylight Studio';
$config['license'] = 'Apache 2';
$config['copyright'] = '2012';
$config['author_url'] = 'http://www.thedaylightstudio.com';
$config['description'] = 'The FUEL Blog Module can be used to create posts and allow comments in an organized manner on your site.';
$config['compatibility'] = '1.0';
$config['instructions'] = '';
$config['permissions'] = array('blog/posts', 'blog/comments', 'blog/categories', 'blog/links', 'blog/users');
$config['migration_version'] = 0;
$config['install_sql'] = 'fuel_blog_install.sql';
$config['uninstall_sql'] = 'fuel_blog_uninstall.sql';
$config['repo'] = 'git://github.com/daylightstudio/FUEL-CMS-Blog-Module.git';