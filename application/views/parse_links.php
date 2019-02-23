<script type="text/javascript">

	function senddata() {

		$.post('parselinks', $('textarea').serialize(), function(data) {
			$('.dis pre').html(data);
		});

	}

</script>

<div class="wrapper">


	<section class="container">


		<article class="card">
			<div>
				Add Links here
			</div>

			<div class="dis">
				<textarea name="links" value="" placeholder="Links" onblur="senddata()"></textarea>
				<pre></pre>
			</div>

			<div class="picture">

			</div>

		</article>


	</section>

</div>
