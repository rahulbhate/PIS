<div class="container-fluid">
	<footer class="page-footer">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle footer-navbar-toggle" data-toggle="collapse" data-target="#footerNavbar" style="background:#FFFFFF;margin-right: 160px;">
					<span class="icon-bar" style="background:#000000;"></span>
					<span class="icon-bar" style="background:#000000;"></span>
					<span class="icon-bar" style="background:#000000;"></span>
				</button>
			</div>
			<div class="col-md-7 left-padding">
				<div class="collapse navbar-collapse" id="footerNavbar">
					<ul class="footer-menu">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Solutions</a></li>
						<li><a href="#">Project Cases</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact</a></li>
					</ul><br><br>
				</div>	
				<p class="footer-copyright text-left">Copyright © 2018 Priority Industrial Solution all rights reserved.</p>
			</div>
			
			<div class="col-md-3">
				<ul class="list">
					<li><a href="#!">Phone: 1300 765 875</a></li>
					<li><a href="#!"> Fax: (03) 8339 0806</a></li>
					<li><a href="#!">Email: info@priority-is.com.au</a></li>
				</ul>
			</div>
			
			<div class="col-md-2 right-padding">
				<ul class="list">
					<li><a href="#!">Address:
						13 Lara Way,
						Campbellfield VIC 3016 </a>
					</li>
				</ul>
			</div>
		</div>
	</footer>	
</div>
	
<script type="text/javascript">

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () { scrollFunction() };

	function scrollFunction() 
	{
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
		{
			document.getElementById("myBtn").style.display = "block";
		}
		else
		{
			document.getElementById("myBtn").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() 
	{
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>

<script type="text/javascript">
	$(document).ready(function() 
	{
		$(window).scroll(function() 
		{
			if ($(this).scrollTop() > 100) 
			{
				$('.scrollup').fadeIn();
			}
			else 
			{
				$('.scrollup').fadeOut();
			}
		});

		$('.scrollup').click(function() 
		{
			$("html, body").animate({ scrollTop: 0 }, 600);
			return false;
		});
	});
</script>
</body>
</html>