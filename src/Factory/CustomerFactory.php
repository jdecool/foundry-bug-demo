<?php

namespace App\Factory;

use App\Entity\Customer;
use libphonenumber\PhoneNumberUtil;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Customer>
 */
final class CustomerFactory extends PersistentProxyObjectFactory
{
    public function __construct(
        private readonly PhoneNumberUtil $phoneNumberUtil,
    ) {
        parent::__construct();
    }

    public static function class(): string
    {
        return Customer::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     */
    protected function defaults(): array|callable
    {
        return [
            'name' => self::faker()->text(255),
            'phone' => $this->phoneNumberUtil->parse(self::faker()->phoneNumber(), 'FR_fr'),
        ];
    }
}
