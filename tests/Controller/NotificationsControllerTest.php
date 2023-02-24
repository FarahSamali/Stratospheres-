<?php

namespace App\Test\Controller;

use App\Entity\Notifications;
use App\Repository\NotificationsRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NotificationsControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private NotificationsRepository $repository;
    private string $path = '/notifications/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Notifications::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Notification index');

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
            'notification[title]' => 'Testing',
            'notification[message]' => 'Testing',
            'notification[recipient]' => 'Testing',
            'notification[sender]' => 'Testing',
            'notification[timestamp]' => 'Testing',
        ]);

        self::assertResponseRedirects('/notifications/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Notifications();
        $fixture->setTitle('My Title');
        $fixture->setMessage('My Title');
        $fixture->setRecipient('My Title');
        $fixture->setSender('My Title');
        $fixture->setTimestamp('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Notification');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Notifications();
        $fixture->setTitle('My Title');
        $fixture->setMessage('My Title');
        $fixture->setRecipient('My Title');
        $fixture->setSender('My Title');
        $fixture->setTimestamp('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'notification[title]' => 'Something New',
            'notification[message]' => 'Something New',
            'notification[recipient]' => 'Something New',
            'notification[sender]' => 'Something New',
            'notification[timestamp]' => 'Something New',
        ]);

        self::assertResponseRedirects('/notifications/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getTitle());
        self::assertSame('Something New', $fixture[0]->getMessage());
        self::assertSame('Something New', $fixture[0]->getRecipient());
        self::assertSame('Something New', $fixture[0]->getSender());
        self::assertSame('Something New', $fixture[0]->getTimestamp());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Notifications();
        $fixture->setTitle('My Title');
        $fixture->setMessage('My Title');
        $fixture->setRecipient('My Title');
        $fixture->setSender('My Title');
        $fixture->setTimestamp('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/notifications/');
    }
}
