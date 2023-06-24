<?php

namespace App\Domain\Services;

use App\Domain\Repositories\AboutRepositoryInterface;

class AboutService
{
    protected $aboutRepository;

    public function __construct(AboutRepositoryInterface $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    public function getActiveAbout()
    {
        return $this->aboutRepository->getActive();
    }
}
