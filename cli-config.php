<?php
require_once 'options.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);