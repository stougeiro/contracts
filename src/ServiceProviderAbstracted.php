<?php declare(strict_types=1);

    namespace STDW\Contract\Container;


    abstract class ServiceProviderAbstracted implements ServiceProviderInterface
    {
        final public function __construct(
            protected ContainerInterface $container
        ) { }


        abstract public function register(): void;


        public function boot(): void
        { }

        public function terminate(): void
        { }
    }
