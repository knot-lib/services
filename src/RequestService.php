<?php
declare(strict_types=1);

namespace KnotLib\Service;

use KnotLib\Kernel\Request\RequestInterface;

class RequestService extends BaseService
{
    /** @var RequestInterface */
    private $request;

    /**
     * ServerRequestService constructor.
     *
     * @param RequestInterface $request
     */
    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * Return parameters
     *
     * @param string $params_type
     *
     * @return array
     */
    public function getParams(string $params_type) : array
    {
        return $this->request->getParams($params_type);
    }

}