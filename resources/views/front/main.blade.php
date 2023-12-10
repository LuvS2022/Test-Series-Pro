<!doctype html>
<html lang="en">
    <head>
        @include('front.head')
    </head>
  <body>
      @include('front.header')
      @yield('content')
      @include('front.footer')
      @include('front.script')
  </body>

    @yield('scripts')
</html>

{{-- <!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags
         //--------  head ko include kiya -->
		@include('layout.head')
    </head>

    <body>
		@include('layout.header')

		@yield('content')
        @include('layout.footer')



       @include('layout.script')
    </body>
    @yield('script')
</html> --}}
