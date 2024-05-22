<?php

namespace Chen\Hyperf\ConsulYmlCodec\Config;


use Chen\Hyperf\ConsulYmlCodec\Packer\YmlPacker;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                YmlPacker::class => YmlPacker::class,
                
            ],
        ];
    }
}