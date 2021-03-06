<?php declare(strict_types=1);

namespace Kiwi\Ibexabla\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContentControllerTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = $this->createClient();

        parent::setUp();
    }

    public function testMissingDadRequest()
    {

     $response =    $this->client->request('post', '/api/ezp/v2/user/sessions', [], [], [
            'CONTENT_TYPE' => 'application/vnd.ez.api.SessionInput+json',
            'ACCEPT' => 'application/vnd.ez.api.Session+json',
        ], \json_encode(['SessionInput' => [
            'login' => 'admin',
            'password' => 'publish',
        ]]));

     dump($response);die;
    }

}
