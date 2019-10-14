<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user=new User();
        $user->setEmail("user@gmail.com");
        $user->setPassword('$argon2id$v=19$m=65536,t=4,p=1$cjIyaUQxSVpjLmxuUWVSNA$EEuNnwqEh9coUoad7sgzJQW/HiNGIV/OvmEL9tK5li0');
        $user->setRoles(['ROLE_USER']);
        $manager->persist($user);

        $user=new User();
        $user->setEmail("admin@gmail.com");
        $user->setPassword('$argon2id$v=19$m=65536,t=4,p=1$cjIyaUQxSVpjLmxuUWVSNA$EEuNnwqEh9coUoad7sgzJQW/HiNGIV/OvmEL9tK5li0');
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $user=new User();
        $user->setEmail("superadmin@gmail.com");
        $user->setPassword('$argon2id$v=19$m=65536,t=4,p=1$cjIyaUQxSVpjLmxuUWVSNA$EEuNnwqEh9coUoad7sgzJQW/HiNGIV/OvmEL9tK5li0');
        $user->setRoles(['ROLE_SUPER_ADMIN']);
        $manager->persist($user);

        $manager->flush();
          
    }
}
