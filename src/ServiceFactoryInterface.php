<?php declare(strict_types=1);

    namespace STDW\Contract\Container;


    interface ServiceFactoryInterface
    {
        public static function factory(ContainerInterface $container): static;
    }
