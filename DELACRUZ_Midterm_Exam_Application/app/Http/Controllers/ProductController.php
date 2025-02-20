<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda',
                'price' => 9.99,
                'genre' => 'Shonen',
                'description' => 'Follow Monkey D. Luffy and his pirate crew in their search for the greatest treasure ever left by the legendary Pirate, Gold Roger.',
                'release_year' => 1997,
                'image' => 'one_piece.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Attack on Titan',
                'author' => 'Hajime Isayama',
                'price' => 12.99,
                'genre' => 'Dark Fantasy',
                'description' => 'In a world where humanity lives inside cities surrounded by enormous walls due to the Titans, gigantic humanoid creatures who devour humans seemingly without reason.',
                'release_year' => 2009,
                'image' => 'aot.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Demon Slayer',
                'author' => 'Koyoharu Gotouge',
                'price' => 11.99,
                'genre' => 'Dark Fantasy',
                'description' => 'Tanjiro Kamado sets out to become a demon slayer after his family is slaughtered and his younger sister turned into a demon.',
                'release_year' => 2016,
                'image' => 'demon_slayer.jpg'
            ],
            [
                'id' => 4,
                'title' => 'My Hero Academia',
                'author' => 'Kohei Horikoshi',
                'price' => 10.99,
                'genre' => 'Superhero',
                'description' => 'In a world where 80% of the population has superpowers, a boy born without them aims to become the greatest hero.',
                'release_year' => 2014,
                'image' => 'mha.jpg'
            ],
            [
                'id' => 5,
                'title' => 'Jujutsu Kaisen',
                'author' => 'Gege Akutami',
                'price' => 13.99,
                'genre' => 'Supernatural',
                'description' => 'Yuji Itadori joins a secret organization of Jujutsu Sorcerers to eliminate a powerful Curse that he has become host to.',
                'release_year' => 2018,
                'image' => 'jjk.jpg'
            ]
        ];

        return view('products.index', compact('products'));
    }
}