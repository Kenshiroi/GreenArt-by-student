<?php
namespace App\Security;

use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UtilisateurChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if ($user->getBanUser()) {
            throw new CustomUserMessageAccountStatusException('ton compte est banni mec');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {

    }
}