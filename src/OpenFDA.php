<?php

namespace MeisamMulla\OpenFDA;

use stdClass;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class OpenFDA implements Endpoints
{
    protected $endpoint = self::DRUG_FDA;

    protected $query = [
        'search' => '',
        'sort' => '',
        'limit' => 10,
        'skip' => 0,
    ];

    /**
     * Set the API endpoint to be used.
     *
     * @param string $endpoint
     * @return OpenFDA
     */
    public function use(string $endpoint): OpenFDA
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Set the search query.
     *
     * @param string $query
     * @return OpenFDA
     */
    public function search(string $query): OpenFDA
    {
        $this->query['search'] = $query;
        return $this;
    }

    /**
     * Set the sorting criteria.
     *
     * @param string $sort
     * @return OpenFDA
     */
    public function sort(string $sort): OpenFDA
    {
        $this->query['sort'] = $sort;
        return $this;
    }

    /**
     * Set the number of results to be counted.
     *
     * @param int $count
     * @return OpenFDA
     */
    public function count(int $count): OpenFDA
    {
        $this->query['count'] = $count;
        return $this;
    }

    /**
     * Set the maximum number of results to be returned.
     *
     * @param int $limit
     * @return OpenFDA
     */
    public function limit(int $limit): OpenFDA
    {
        $this->query['limit'] = $limit;
        return $this;
    }

    /**
     * Set the number of results to skip.
     *
     * @param int $skip
     * @return OpenFDA
     */
    public function skip(int $skip): OpenFDA
    {
        $this->query['skip'] = $skip;
        return $this;
    }

    /**
     * Send the API request and retrieve the response.
     *
     * @return stdClass
     */
    public function get(): stdClass
    {
        try {
            $client = new Client(['base_uri' => self::API_URL]);
            $headers = getenv('OPENFDA_APIKEY') ? ['Authorization' => 'Basic ' . getenv('OPENFDA_APIKEY')] : '';

            $response = $client->request('GET', $this->endpoint, [
                'query' => $this->query,
                'Accept' => 'application/json',
                'headers' => $headers,
            ]);
        } catch (ClientException $e) {
            $response = $e->getResponse();
        }

        $this->resetQuery();
        return json_decode($response->getBody()->getContents());
    }

    /**
     * Reset the query parameters to their default values.
     *
     * @return void
     */
    private function resetQuery()
    {
        $this->query = [
            'search' => '',
            'sort' => '',
            'count' => 1000,
            'limit' => 10,
            'skip' => 0,
        ];
    }
}
