<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsumeController extends Controller
{
    public function index(){
        $data = [
          'pageSize' => 4
        ];

        return view('index', [
            'all' => [
                'books' => $this->fetchData('books', $data),
                'characters' => $this->fetchData('characters', $data),
                'Houses' => $this->fetchData('houses', $data),
            ],
            'title' => ['title' => 'All Things Fire And Ice']
        ]);
    }

    public function getBook($id){
        $books = $this->fetchData('books/'.$id);
        return view('book',[
            'book' => $books,
            'title' => ['title' => $books['name']]
        ]);
    }

    public function getBooks(){
        $data = [
            'pageSize' => 12
        ];

        return view('books', [
            'books' => $this->fetchData('books', $data),
            'title' => ['title' => 'All Books']
        ]);
    }

    public function getHouse($id){
        $house = $this->fetchData('houses/'.$id);
        return view('house/house',[
            'house' => $house,
            'title' => ['title' => $house['name']]
        ]);
    }

    public function getHouses(){
        $data = [
            'pageSize' => 100
        ];

        return view('houses', [
            'houses' => $this->fetchData('houses', $data),
            'title' => ['title' => 'All Houses']
        ]);
    }

    public function getCharacter($id){
        $character = $this->fetchData('characters/'.$id);
        return view('characters/character',[
            'character' => $character,
            'title' => ['title' => $character['name']]
        ]);
    }

    public function getCharacters(){
        $data = [
            'pageSize' => 100
        ];

        return view('characters', [
            'characters' => $this->fetchData('characters', $data),
            'title' => ['title' => 'All Characters']
        ]);
    }

    public function sendComment(Request $request){
        $category = 'books/'.$request->input('id').'/comment';
        $query = [
            'id'=> $request->input('id'),
            'body'=> $request->input('body')
        ];
        $this->sendData($category, $query);
        return back();
    }
}
