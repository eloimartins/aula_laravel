@extends('templates.principal')
@section('content')
	<div class="wrap">
	 <div id="main" role="main">
	      <ul id="tiles">
	      	@foreach($data['posts'] as $post) 
		        <li onclick="location.href='posts/{{$post['id']}}';">
		        	<img src="images/{{$post['imagem']}}" width="282">
		        	<div class="post-info">
		        		<div class="post-basic-info">
			        		<h3><a href="#">{{$post['titulo']}}</a></h3>
			        		<span><a href="#"><label> </label>{{$post['tipo']}}</a></span>
			        		<p>{{$post['descricao']}}</p>
		        		</div>
		        		<div class="post-info-rate-share">
		        			<div class="rateit">
		        				<span> </span>
		        			</div>
		        			<div class="post-share">
		        				<span> </span>
		        			</div>
		        			<div class="clear"> </div>
		        		</div>
		        	</div>
		        </li>
	        @endforeach
	      </ul>
	    </div>
	</div>
@endsection