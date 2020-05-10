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
                    <li class="{{(strpos(url()->current(), '/products') == true) ? 'active' : ''}}"><a href="{{route('products')}}">Product</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </nav>
        </header>

	</body>
</html>
