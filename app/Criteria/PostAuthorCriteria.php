<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class PostAuthorCriteria.
 *
 * @package namespace App\Criteria;
 */
class PostAuthorCriteria implements CriteriaInterface
{
    protected $author;

    public function __construct($author)
    {
        $this->author = $author;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where('author', 'like', "%{$this->author}%");
    }
}
