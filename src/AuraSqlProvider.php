<?php
/**
 * This file is part of the BEAR.AuraSqlModule package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\AuraSqlModule;

use Aura\Sql\ExtendedPdo;
use Ray\Di\ProviderInterface;

class AuraSqlProvider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD)
     */
    public function get()
    {
        $pdo = new ExtendedPdo(
            $_ENV['PDO_DSN'],
            $_ENV['PDO_USER'],
            $_ENV['PDO_PASSWORD']
        );

        return $pdo;
    }
}