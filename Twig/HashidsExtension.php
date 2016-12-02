<?php

namespace cayetanosoriano\HashidsBundle\Twig;

use Hashids\Hashids;

/**
 * Twig extension to allow encoding and decoding Hashids
 *
 * @author Jaik Dean <jaik@fluoresce.co>
 */
class HashidsExtension extends \Twig_Extension
{
    /**
     * @var Hashids\Hashids;
     */
    private $hashids;

    public function __construct(Hashids $hashids)
    {
        $this->hashids = $hashids;
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('hashid_encode', [$this, 'encode']),
            new \Twig_SimpleFilter('hashid_decode', [$this, 'decode']),
        ];
    }

    public function encode($number)
    {
        return $this->hashids->encode($number);
    }

    public function decode($hash)
    {
        return $this->hashids->decode($hash);
    }

    public function getName()
    {
        return 'hashids_extension';
    }
}
