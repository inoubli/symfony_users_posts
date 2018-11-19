<?php
namespace AppBundle\Service;
class UsersApi
{
    public function getUsers(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET','https://jsonplaceholder.typicode.com/users');// https://jsonplaceholder.typicode.com/users
        $data = json_decode($response->getBody()->getContents(), true);
        
        
        //var_dump($data);Die();
        return $data;
    }


    public function getUser($id){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET','https://jsonplaceholder.typicode.com/users/'.$id);// https://jsonplaceholder.typicode.com/users
        $data = json_decode($response->getBody()->getContents(), true);
         //var_dump($data);Die();
        return $data;
    }
}
?>