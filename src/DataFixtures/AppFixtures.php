<?php

namespace App\DataFixtures;

use App\Entity\NewsCategory;
use App\Entity\User;
use App\Factory\NewsCategoryFactory;
use App\Factory\NewsFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    public function __construct(
        Private UserPasswordHasherInterface $passwordHasher,
    )
    {
        $this->faker = Factory::create('pt_BR');
    }

    public function load(ObjectManager $manager): void
    {

        NewsCategoryFactory::createMany(7);
        NewsFactory::createMany(1000,function(){
        return[
            'category' => NewsCategoryFactory::random()
        ];
        });



        $user = new User();
        $user->setEmail('jonaspoli@gmail.com');
        $user->setRoles(['ROLE_USER','ROLE_ADMIN']);
        $manager->persist($user);

        $plaintextPassword = 'password';

        // hash the password (based on the security.yaml config for the $user class)
        $hashedPassword = $this->passwordHasher->hashPassword(
            $user,
            $plaintextPassword
        );
        $user->setPassword($hashedPassword);


        for ($i=0;$i<10;$i++){
            $user = new User();
            $user->setEmail($this->faker->email());
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);

            $plaintextPassword = uniqid();

            // hash the password (based on the security.yaml config for the $user class)
            $hashedPassword = $this->passwordHasher->hashPassword(
                $user,
                $plaintextPassword
            );
            $user->setPassword($hashedPassword);
        }

        $manager->flush();
    }
}
