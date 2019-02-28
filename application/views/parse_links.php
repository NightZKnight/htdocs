<script type="text/javascript">

	function senddata() {

		$.post('parselinks', $('textarea').serialize(), function(data) {
			$('.dis div').html(data);
		});

	}

</script>

<div class="wrapper" style="width:50em">


	<section class="container">


		<article class="card">
			<div>
				Add Links separated by new lines
			</div>

			<div class="dis">
				<textarea name="links" value="" placeholder="Links" onblur="senddata()"></textarea>
				<a class="button" href="#">Submit</a>
				<div></div>
			</div>

			<div class="picture">

			</div>
		</article>


	</section>

</div>
