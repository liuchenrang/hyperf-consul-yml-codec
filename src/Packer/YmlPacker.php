<?php
namespace Chen\Hyperf\ConsulYmlCodec\Packer;
use Hyperf\Contract\PackerInterface;
class YmlPacker implements PackerInterface
{
    public function pack($data): string
    {
       return yaml_emit($data);
    }
    
    public function unpack(string $data)
    {
        return yaml_parse($data);
    }
    
}