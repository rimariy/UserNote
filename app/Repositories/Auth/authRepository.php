<?php
namespace App\Repositories\Auth;

use Shamaseen\Repository\Utility\AbstractRepository as AbstractRepository;
use App\Models\Auth\auth;

/**
 * Class authRepository.
 *
 * @extends AbstractRepository<auth>
 */
class authRepository extends AbstractRepository
{
    public array $with = [];

    /**
     * @return string
     */
    public function getModelClass(): string
    {
        return auth::class;
    }
}
