<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UserController extends AbstractController
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route('/users/view', name: 'users_view', methods: ['GET'])]
    public function viewUsers(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER'); // Ensure the user has ROLE_USER or higher
    
        $response = $this->client->request('GET', 'http://127.0.0.1:8000/users', [
            'headers' => [
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE3MzM0ODkyNzIsImV4cCI6MTczMzQ5Mjg3Miwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImpvaG5kb2VAZXhhbXBsZS5jb20ifQ.dgIqioJ0KtWqFj68mGHFNjMJme0v635N6fgGYx7n715cfo8Hu4e2-Av7Y9lfRadrRGUj4fwmnitAB1lDBoeR3lyf2TkC13wHVZKv-rGG3AJTT6x7dk-vv7sQY3mc-IfAoLOqR07mbaoFYH1wL-2Ja1KwE5UshrCsCF_eSIAggYemG0q88eA71B3dphZ4PURsJSrgKd9lgJmp3N3JvZnvW3JkEZ5OW79fwdxegujpTXteOj7ufEgSFaWQ-v5W6EGdbSyfXGTHZpm_-6nT3wEbtK_tI7FGRZmlb__V28x42AO7cRB0nEkX_j1vaGcImcEScqIp6gFqke8Kk4lVXrtEtytEGC9KEGBiJSw4Uf5oNm1V2zpm_qeBk_cPw2KnGW1W-nVKEzLW2rgjIq2GfWs43D_AnCyujn9THvHgaNZRW6c-gwZiAO3c97ZJmP4r8_7eYgLzUD4EaUtvhmq27XBRcEDgB30ypmXWOXzobetSe7rudFd7GuBd-kw4J89A_NWoYAXAGcn_KhRU4ip3sqoTpLWNqMsXJuKKc2d85E1cH5cIJA50JtOcY5LjksZ0qxe2xnMki8ix39PkWT7fAlMk3N4GH-Ov91fnnOmW696IRNTVlUpcgX2cIbOSzgFoq5O0jaGH5s1PSJyjrHi4a1fsxZorCJWUJ8lMmgQipJpCAYI',
            ],
            'timeout' => 60, // Increase timeout to 60 seconds

        ]);
    
        $users = $response->toArray();
    
        return $this->render('user/view.html.twig', [
            'users' => $users,
        ]);
    }
    
    #[Route('/users/{id}', name: 'get_user', methods: ['GET'])]
    public function show(UserRepository $userRepository, $id): JsonResponse
    {
        $user = $userRepository->find($id);
        if (!$user) {
            return $this->json(['message' => 'User not found'], 404);
        }
        return $this->json($user);
    }
    
    #[Route('/users', name: 'get_users', methods: ['GET'])]
    public function index(UserRepository $userRepository): JsonResponse
    {
        $users = $userRepository->findAll();
        return $this->json($users);
    }


    #[Route('/users', name: 'create_user', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!isset($data['firstName'], $data['lastName'], $data['email'], $data['password'], $data['roles'])) {
            return new JsonResponse(['message' => 'Invalid data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $user = new User();
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setEmail($data['email']);
        $user->setPassword($passwordHasher->hashPassword($user, $data['password']));
        $user->setRoles($data['roles']);

        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse(['status' => 'User created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/users/{id}', name: 'update_user', methods: ['PUT'])]
    public function update(EntityManagerInterface $entityManager, Request $request, User $user, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return $this->json(['message' => 'Invalid data'], 400);
        }

        if (isset($data['firstName'])) {
            $user->setFirstName($data['firstName']);
        }
        if (isset($data['lastName'])) {
            $user->setLastName($data['lastName']);
        }
        if (isset($data['email'])) {
            $user->setEmail($data['email']);
        }
        if (isset($data['password'])) {
            $user->setPassword($passwordHasher->hashPassword($user, $data['password']));
        }
        if (isset($data['roles'])) {
            $user->setRoles($data['roles']);
        }

        $entityManager->flush();

        return $this->json($user);
    }

    #[Route('/users/{id}', name: 'delete_user', methods: ['DELETE'])]
    public function delete(EntityManagerInterface $entityManager, User $user): JsonResponse
    {
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->json(['status' => 'User deleted']);
    }

    #[Route('/login', name: 'login', methods: ['POST'])]
    public function login(): JsonResponse
    {
        throw new \Exception('The JWT authentication system should handle this request.');
    }
}
