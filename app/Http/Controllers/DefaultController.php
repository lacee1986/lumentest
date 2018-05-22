<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use BlizzardApi\BlizzardClient;
use BlizzardApi\Service\WorldOfWarcraft;

class DefaultController extends Controller
{

	protected $viewData;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        
    }

    public function getData($region, $server, $character)
    {

        // Create a new Blizzard client with Blizzard API key and secret
        $client = new BlizzardClient('j2jx4sk6aj53hn9j36t7mht97767cas5', 'pSccFzbqUcaKceFUSeAHdKNpupJ6RmB8');
        $region = strtoupper($region);
        $client->setRegion($region);
        // Create a new World Of Warcraft service with configured Blizzard client
        $wow = new WorldOfWarcraft($client);
        // Use API method for getting specific data
//        $response = $wow->getGuild('bloodscalp', 'hardcore casual', [
//            'fields' => 'achievements,challenge',
//        ]);
        $response = $wow->getCharacter($server, $character);
        //$response = $wow->getDataCharacterAchievements();
        // Accessing response status code
        $response->getStatusCode();
        // Accessing response headers
        $response->getHeaders();
        // Show response body
        return json_decode($response->getBody());

    }

    public function getCharacter($region, $server, $character)
    {
        $stuff = $this->getData($region, $server, $character);
        $this->viewData = [
            'test' => 'test',
            'api'  => $stuff
        ];

        return view('pages.api', $this->viewData);
    }

}
