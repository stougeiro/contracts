<?php declare(strict_types=1);

    namespace STDW\Contract\Container;

    use Psr\Container\ContainerInterface as PsrContainerInterface;


    interface ContainerInterface extends PsrContainerInterface
    {
        public function set(string $id, callable|string|null $implementation  = null, bool $shareable = false): void;

        public function bind(string $id, callable|string|null $implementation  = null): void;

        public function singleton(string $id, callable|string|null $implementation  = null): void;
    }
