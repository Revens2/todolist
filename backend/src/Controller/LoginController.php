<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\cbdd;


class LoginController extends AbstractController
{
    #[Route('/api/login', name: 'api_login', methods: ['POST'])]
    public function login(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;
        $password = $data['password'] ?? null;

        if (!$email || !$password) {
            return new JsonResponse(['error' => 'Email et mot de passe requis'], 400);
        }

        $user = cbdd::executequery('SELECT * FROM utilisateur WHERE email = ?', [$email]);

        if (!$user || !password_verify($password, $user['password'])) {
            return new JsonResponse(['error' => 'Identifiants invalides'], 401);
        }

        return new JsonResponse([
            'message' => 'Connexion réussie',
            'user_id' => $user['userid'],
            'email' => $user['email']
        ]);
    }
}
?>