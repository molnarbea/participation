<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Registration;

final readonly class RegistrationMutation
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        // TODO implement the resolver
    }

    public function restore(null $_, array $args): Registration
    {
        $registration = Registration::withTrashed()->findOrFail($args['id']);
        $registration->restore();

        return $registration;
    }

    public function forceDelete(null $_, array $args): Registration
    {
        $registration = Registration::withTrashed()->findOrFail($args['id']);
        $registration->forceDelete();

        return $registration;
    }
}
