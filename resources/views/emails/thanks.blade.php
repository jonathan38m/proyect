@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection

@section('content-interna')

 <h2 style="text-align: center;">{{ $thanks }}</h2>

  	<h2  style="text-align: center;">
		Meanwhile we invite you to follow our Social Networks:
	</h2>
	<div class="row" style="
    font-size: 70px;
    text-align:  center;"><div class="col-xs-6 col-sm-3">
    <a href="https://www.facebook.com/institutosuperiordeespanol1/" target="_blank">
        <i class="demo-icon icon-facebook-official"></i>
    </a>
    </div><div class="col-xs-6 col-sm-3">
    <a href="https://www.tripadvisor.com/Attraction_Review-g294308-d10085877-Reviews-ISE_Instituto_Superior_de_Espanol-Quito_Pichincha_Province.html" target="_blank">
        <i class="demo-icon icon-tripadvisor"></i>
    </a>
</div><div class="col-xs-6 col-sm-3">
    <a href="https://www.instagram.com/institutosuperiordeespanol/" target="_blank">
        <i class="demo-icon icon-instagram"></i>
    </a>
</div> 
</div>



@endsection