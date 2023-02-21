<?php

namespace App\Test\Controller;

use App\Entity\NotifyAlert;
use App\Repository\NotifyAlertRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NotifyAlertControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private NotifyAlertRepository $repository;
    private string $path = '/notify/alert/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(NotifyAlert::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('NotifyAlert index');

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
            'notify_alert[title]' => 'Testing',
            'notify_alert[message]' => 'Testing',
            'notify_alert[recipient]' => 'Testing',
            'notify_alert[sender]' => 'Testing',
            'notify_alert[timestamp]' => 'Testing',
        ]);

        self::assertResponseRedirects('/notify/alert/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new NotifyAlert();
        $fixture->setTitle('My Title');
        $fixture->setMessage('My Title');
        $fixture->setRecipient('My Title');
        $fixture->setSender('My Title');
        $fixture->setTimestamp('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('NotifyAlert');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new NotifyAlert();
        $fixture->setTitle('My Title');
        $fixture->setMessage('My Title');
        $fixture->setRecipient('My Title');
        $fixture->setSender('My Title');
        $fixture->setTimestamp('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'notify_alert[title]' => 'Something New',
            'notify_alert[message]' => 'Something New',
            'notify_alert[recipient]' => 'Something New',
            'notify_alert[sender]' => 'Something New',
            'notify_alert[timestamp]' => 'Something New',
        ]);

        self::assertResponseRedirects('/notify/alert/');

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

        $fixture = new NotifyAlert();
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
        self::assertResponseRedirects('/notify/alert/');
    }
}
