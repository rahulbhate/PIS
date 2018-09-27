	
	<div class="container-fluid">
	<footer class="page-footer">

			<div class="row">

				<div class="col-md-7">

					<ul class="list-unstyled">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Solutions</a></li>
						<li><a href="#">Project Cases</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact</a></li>
					</ul>

				</div>
				<div class="col-md-3">
					<ul class="list">
						<li>
							<a href="#!">Phone: 1300 765 875</a>
						</li>
						<li>
							<a href="#!"> Fax: (03) 8339 0806</a>
						</li>
						<li>
							<a href="#!">Email: info@priority-is.com.au</a>
						</li>
					</ul>

				</div>
			
				<div class="col-md-2">

					<ul class="list">
						<li>
							<a href="#!">Address:
								13 Lara Way,
								Campbellfield VIC 3016 </a>
						</li>
					</ul>

				</div>
	

			</div>

		</div>
		
		<div class="footer-copyright text-left">Copyright © 2018 Priority Industrial Solution all rights reserved

		</div>
	

	</footer>
</div>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () { scrollFunction() };

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			});

			$('.scrollup').click(function () {
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
		});
	</script>
</body>

</html>