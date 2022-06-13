<?php echo 'autoload';

function autoLoad($className)
{
    $pathToFile = '../classes/' . $className . '.php';
    if (file_exists($pathToFile))
    {
        require($pathToFile);
    }
}

spl_autoload_register('autoLoad');