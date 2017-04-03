" CodeIgniter comes with an awesome, full-featured and very fast abstracted database class that supports both traditional structures and Query Builder patterns.

If you intend to use that library seperately in your project, you are in the right place. First you need to copy system/database folder and paste it into your project. Then use it like the next script. (index.php) "

Above description come from https://gist.github.com/codethics/cbdbf163c0f82142a812 repository. 
Below is what i changed in that repository.

Because I changed that repository for my needs, I advise to copy "config" folder to root of Your project.
Next You sholud change :

    $db['default'] = array(
        'dsn'	=> '',
        'hostname' => 'DB_HOST',
        'username' => 'DB_USER',
        'password' => 'DB_PASS',
        'database' => 'DB_NAME',
        'dbdriver' => 'mysqli',
        'dbprefix' => '',
        'pconnect' => FALSE,
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    );
to customize it to Your database connection type.

The way in which You can initialize and use database, was described in index.php file.

If You want to have most recent Codeigniter's Query Builder You can place system/database folder from it's package.
But remember to add all necessary function's described in index.php.
 
 Have fun ;)