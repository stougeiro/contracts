<?php declare(strict_types=1);

    namespace STDW\Contract\Container;


    interface ServiceProviderManagerInterface
    {
        public function add(ServiceProviderInterface $provider): void;

        public function register(): void;

        public function boot(): void;

        public function terminate(): void;
    }
