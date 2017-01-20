<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$data = Array();
		$data['title'] = 'Home';
		$data['posts'] = Array();
		$data['posts'][] = Array('id'=>1,'titulo'=>'Filme 01','tipo'=>'Desenho Animado','descricao'=>'Lorem Ipsum is simply dummy text of the printing & typesetting industry.','estrelas'=>2,'imagem'=>'img1.jpg');
		$data['posts'][] = Array('id'=>2,'titulo'=>'Filme 02','tipo'=>'Desenho Animado','descricao'=>'Lorem Ipsum is simply dummy text of the printing & typesetting industry.','estrelas'=>3,'imagem'=>'img2.jpg');
		$data['posts'][] = Array('id'=>3,'titulo'=>'Filme 03','tipo'=>'Desenho Animado','descricao'=>'Lorem Ipsum is simply dummy text of the printing & typesetting industry.','estrelas'=>3,'imagem'=>'img3.jpg');
		$data['posts'][] = Array('id'=>4,'titulo'=>'Filme 04','tipo'=>'Desenho Animado','descricao'=>'Lorem Ipsum is simply dummy text of the printing & typesetting industry.','estrelas'=>4,'imagem'=>'img4.jpg');
		$data['posts'][] = Array('id'=>5,'titulo'=>'Filme 05','tipo'=>'Desenho Animado','descricao'=>'Lorem Ipsum is simply dummy text of the printing & typesetting industry.','estrelas'=>2,'imagem'=>'img3.jpg');
		return view('home',['data'=>$data]);
	}
}
