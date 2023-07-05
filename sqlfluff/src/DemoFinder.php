<?php

declare(strict_types=1);

namespace Demo\SqlFluff;

use Doctrine\DBAL\Connection;

final readonly class DemoFinder
{
    public function __construct(private Connection $connection) { }

    public function findStuff(): array|false
    {
        /** @var string $sql */
        $sql = file_get_contents(__DIR__.'/sql/demo.sql');

        return $this->connection->fetchAssociative(
            $sql,
            [
                'cool' => 'yes',
            ]
        );
    }
}
