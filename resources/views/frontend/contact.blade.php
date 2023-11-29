@extends('frontend.layouts.app')

@section('content')

<section class="contect-us py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="contect-title mb-4">
						<h2 class="text-center text-uppercase">contact us</h2>
						<p class="text-center"> আপনার কোন সমস্যা বা পরামর্শের জন্য  </p>
					</div>
				</div>
				<div class="col-12 col-md-8">
					<div class="contect-form">
						<div class="form">
							<div class="row">
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<lable for="name">Name : </lable>
										<input type="text" name="name" class="form-control" placeholder="Enter Name">
									</div>
								</div>
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<lable for="email">Email : </lable>
										<input type="email" name="email" class="form-control" placeholder="Enter Email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-sm-6">
									<div class="form-group">
										<lable for="pnone">Phone : </lable>
										<input type="text" name="phone" class="form-control" placeholder="Enter phone sumber">
									</div>
								</div>
									<div class="col-12 col-sm-6">
									<div class="form-group">
										<lable for="location">Age : </lable>
										<input type="text" name="location" class="form-control" placeholder="Your Age">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<textarea name="text" id="" cols="50" rows="5" class="form-control" placeholder="Details"></textarea>
								</div>
								<div class="col-12 py-4 text-center">
									<button class="btn btn-primary">submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 py-4">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th scope="col" class="text-center"><i class="fa fa-map-marker line-center"></i></th>
								<td scope="col">
									<p class="m-0">Dhaka International University<br>
										Satarkul, Badda, Dhaka</p>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row" class="text-center"><i class="fa fa-mobile line-center"></i></th>
								<td>
									<p class="m-0">16475<br>
										01723019475</p>
								</td>

							</tr>
							<tr>
								<th scope="row" class="text-center"><i class="fa fa-facebook line-center"></i></th>
								<td colspan="2">
									<p class="m-0">Facebook : </p>
									<a href="">www.facebook.com/sohag.475</a>
								</td>

							</tr>
							<tr>
								<th scope="row" class="text-center"><i class="fa fa-twitter line-center"></i></th>
								<td colspan="2">
									<p class="m-0">Twtter : </p>
									<a href="">www.twtter.com/.....</a>
								</td>

							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</section>
@endsection
