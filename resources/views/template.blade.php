<!doctype html>
<html lang="en">

	<!-- include header -->
	@include('head')

	<!-- START body -->
	<body style="background-color: #4d4d4d !important">

		<!-- include navigation -->
		@include('nav')
		
		<main role="main" class="container">
		    @yield('body')
		</main>

		<!-- include footer -->
		@include('footer')

	</body> <!-- END Body -->
	
</html>