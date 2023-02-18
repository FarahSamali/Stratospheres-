<?php

namespace App\Test\Controller;

use App\Entity\BanqueDeSang;
use App\Repository\BanqueDeSangRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BanqueDeSangControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private BanqueDeSangRepository $repository;
    private string $path = '/banque/de/sang/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(BanqueDeSang::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('BanqueDeSang index');

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
            'banque_de_sang[nom]' => 'Testing',
            'banque_de_sang[adresse]' => 'Testing',
            'banque_de_sang[tel]' => 'Testing',
        ]);

        self::assertResponseRedirects('/banque/de/sang/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new BanqueDeSang();
        $fixture->setNom('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setTel('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('BanqueDeSang');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new BanqueDeSang();
        $fixture->setNom('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setTel('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'banque_de_sang[nom]' => 'Something New',
            'banque_de_sang[adresse]' => 'Something New',
            'banque_de_sang[tel]' => 'Something New',
        ]);

        self::assertResponseRedirects('/banque/de/sang/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getAdresse());
        self::assertSame('Something New', $fixture[0]->getTel());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new BanqueDeSang();
        $fixture->setNom('My Title');
        $fixture->setAdresse('My Title');
        $fixture->setTel('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/banque/de/sang/');
    }
}
