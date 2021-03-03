<div class="hero inner-page overlay bg-list">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-5 text-center">
				<h1 class="heading text-white mb-3" data-aos="fade-up">List Page</h1>
				<p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
	</div>
</div>
<div class="section sec-services">
	<div class="container">
		<div class="row" id="content">

		</div>
		<div class="row">
			<div class="col-12 mt-4 text-center" data-aos="fade-up" data-aos-delay="700">
				<a href="#" class="btn btn-primary py-2 px-5">Load More</a>				
			</div>
		</div>
	</div>
</div>

<script>
	var arrContent = [{},{},{},{},{},{},]

	function showContent() {
	 let htmlContent = '';

	 arrContent.forEach((item, index) => {
	    htmlContent += `
			<div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="${index+1}00">
				<div class="card post-entry">
					<img src="<?= THEMES_SITE ?>/images/img_${index+1}.jpg" class="card-img-top" alt="Image">
					<a href="#">
						<div class="body-post">
							<div class="card-body p-3">
								<div><span class="text-uppercase font-weight-bold date">Jan 20, 2021</span></div>
								<h5 class="card-title">Behind the word mountains</h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</a>
				</div>
			</div>
	    `;
	 });

	 $('#content').prepend(htmlContent);
	};

	showContent();
</script>