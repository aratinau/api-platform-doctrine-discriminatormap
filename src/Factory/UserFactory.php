<?php

namespace App\Factory;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<User>
 */
final class UserFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     */
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {
    }

    public static function class(): string
    {
        return User::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     */
    protected function defaults(): array|callable
    {
        $sex = $this->getRandomGender();
        $createdAt = self::faker()->dateTimeBetween('-100 days', '-1 days');

        return [
            'email' => self::faker()->unique()->safeEmail(),
            'password' => '1234',
            'firstname' => $this->getFirstnameBySex($sex),
            'lastname' => self::faker()->lastName(),
            //'createdAt' => $createdAt,
        ];
    }

    private function getFirstnameBySex($sex)
    {
        if ($sex === 'men') {
            return self::faker()->firstNameMale();
        }

        if ($sex === 'women') {
            return self::faker()->firstNameFemale();
        }
    }

    private function getProfilePictureBySex($sex)
    {
        return "https://randomuser.me/portraits/$sex/" . self::faker()->numberBetween(1, 99) . ".jpg";
    }

    private function getRandomGender() {
        $genders = ['men', 'women'];

        return $genders[array_rand($genders)];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            ->afterInstantiate(function(User $user): void {
                $user->setPassword($this->passwordHasher->hashPassword(
                    $user,
                    $user->getPassword()
                ));
            })
        ;
    }
}
