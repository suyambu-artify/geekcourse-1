<?php

namespace App\Repositories;

interface CourseRepositoryInterface
{
    public function popular();

    public function recommended();
}
