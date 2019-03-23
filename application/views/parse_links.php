<script type="text/javascript">

	function senddata() {

		$.post('parselinks', $('textarea').serialize(), function(data) {
			$('.dis div').html(data);
		});

	}

	function doo () {
		$("div.notification").toggleClass('next');

		// wait 2500 and disable notification
		setTimeout(function () {
          $("div.notification").toggleClass('next');
      },2500)
	}

</script>

<div class="wrapper" style="width:50em">


	<section class="container">

		<article class="card">
			<div>
				Add one link per line
			</div>

			<div class="dis">
				<textarea name="links" placeholder="Links"></textarea>
				<a class="button" href="#" onclick="senddata()">Submit</a><br>
				<div></div>
			</div>

			<div class="picture">

			</div>
		</article>

	</section>

	<div class="notification">
		<span>Insert successful!</span>
	</div>


</div>
