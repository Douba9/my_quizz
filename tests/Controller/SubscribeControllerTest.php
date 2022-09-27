<?php

namespace App\Test\Controller;

use App\Entity\Subscribe;
use App\Repository\SubscribeRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubscribeControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private SubscribeRepository $repository;
    private string $path = '/admin/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = (static::getContainer()->get('doctrine'))->getRepository(Subscribe::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Subscribe index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'subscribe[username]' => 'Testing',
            'subscribe[password]' => 'Testing',
            'subscribe[email]' => 'Testing',
            'subscribe[isActive]' => 'Testing',
            'subscribe[isVerified]' => 'Testing',
            'subscribe[roles]' => 'Testing',
        ]);

        self::assertResponseRedirects('/admin/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Subscribe();
        $fixture->setUsername('My Title');
        $fixture->setPassword('My Title');
        $fixture->setEmail('My Title');
        $fixture->setIsActive('My Title');
        $fixture->setIsVerified('My Title');
        $fixture->setRoles('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Subscribe');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Subscribe();
        $fixture->setUsername('My Title');
        $fixture->setPassword('My Title');
        $fixture->setEmail('My Title');
        $fixture->setIsActive('My Title');
        $fixture->setIsVerified('My Title');
        $fixture->setRoles('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'subscribe[username]' => 'Something New',
            'subscribe[password]' => 'Something New',
            'subscribe[email]' => 'Something New',
            'subscribe[isActive]' => 'Something New',
            'subscribe[isVerified]' => 'Something New',
            'subscribe[roles]' => 'Something New',
        ]);

        self::assertResponseRedirects('/admin/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getUsername());
        self::assertSame('Something New', $fixture[0]->getPassword());
        self::assertSame('Something New', $fixture[0]->getEmail());
        self::assertSame('Something New', $fixture[0]->getIsActive());
        self::assertSame('Something New', $fixture[0]->getIsVerified());
        self::assertSame('Something New', $fixture[0]->getRoles());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Subscribe();
        $fixture->setUsername('My Title');
        $fixture->setPassword('My Title');
        $fixture->setEmail('My Title');
        $fixture->setIsActive('My Title');
        $fixture->setIsVerified('My Title');
        $fixture->setRoles('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/admin/');
    }
}
