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
                    <li><a href="#">Home</a></li>
                    <li><a href="{{route('products')}}">Product</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </nav>
        </header>

	</body>
</html>
