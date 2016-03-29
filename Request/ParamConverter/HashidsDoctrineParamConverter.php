<?php

namespace cayetanosoriano\HashidsBundle\Request\ParamConverter;

use Hashids\Hashids;
use Doctrine\Common\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Jaik Dean <jaik@fluoresce.co>
 */
class HashidsDoctrineParamConverter extends DoctrineParamConverter
{
    /**
     * @var Hashids\Hashids
     */
    protected $hashids;

    public function __construct(Hashids $hashids, ManagerRegistry $registry = null)
    {
        $this->hashids = $hashids;
        parent::__construct($registry);
    }

    protected function getIdentifier(Request $request, $options, $name)
    {
        // Default to the standard DoctrineParamConverter behaviour
        $parent = parent::getIdentifier($request, $options, $name);

        if ($parent !== false) {
            return $parent;
        }

        // If an identifier wasn’t found, check for a Hashid
        if ($request->attributes->has('hashid')) {
            $id = $request->attributes->get('hashid');
            return $this->hashids->decode($id);
        }

        return false;
    }
}
