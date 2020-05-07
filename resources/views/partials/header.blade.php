<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<header>
            <div id="logo">
                <img src="{{asset('images/marchio-sito-test.png')}}" alt="logo">
            </div>
            <nav>
                <ul>
                    <li class="{{(url()->current() == route('home')) ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
					@if ((url()->current() == route('products')))
						<li class="active"><a href="{{route('products')}}">Product</a></li>
					@elseif ((url()->current() == route('product.view',$id)))
						<li class="active"><a href="{{route('products')}}">Product</a></li>
					@else
						<li class=""><a href="{{route('products')}}">Product</a></li>
					@endif
                    <li><a href="#">News</a></li>
                </ul>
            </nav>
        </header>

	</body>
</html>
