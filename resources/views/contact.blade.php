@extends('layout')
@section('title','Gaming')
@section('content')
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
		.ic{
			width: 50px;
			text-align: center;
		}
		.container input,textarea{
			border:1px solid var(--accent) !important;
			padding-left: 10px !important;
			border-radius: 5px !important;
			box-sizing: border-box !important;
			outline:none;
		}
		.container input:focus,textarea:focus{
			box-shadow: 0 0 2px 2px var(--accent) !important;
		}
		.validate{
			box-shadow: none !important;
		}
		.container .input-field .active{
			color: var(--accent) !important;
			background:#e8eaf6 !important;
			padding: 5px !important;
			margin-left:10px !important;
		}
		.container label{
			padding-left: 10px !important;
			width:auto !important;
		}
</style>
<div class="container">
	<div class="p2 row d-flex">
		<div class="col m5 s12 accent accent-text text-lighten-5">
			<h5>Contact Us</h5>
			<table class="">
				<tr class="valign-wrapper waves-effect">
					<td class="ic"><i class=" fa fa-map-marker fa-2x"></i></td>
					<td>shoppers.street11</td>
				</tr>
				<tr class="valign-wrapper">
					<td class="ic"><i class=" fa fa-envelope fa-2x"></i></td>
					<td>help@shopperstreet.ecom</td>
				</tr>
				<tr class="valign-wrapper">
					<td class="ic"><i class=" fa fa-mobile fa-3x"></i></td>
					<td>+91-0000880055</td>
				</tr>
				<tr class="center">
					<td colspan="2" class="ic center">
						<button class="waves-effect center btn btn-floating btn-large indigo darken-3">
							<i class="fa fa-facebook-official fa-4x"></i>
						</button>
						<button class="waves-effect center btn btn-floating btn-large blue lighten-1">
							<i class="fa fa-skype fa-4x"></i>
						</button>
						<button class="waves-effect center btn btn-floating btn-large purple darken-1">
							<i class="fa fa-instagram fa-4x"></i>
						</button>
					</td>
				</tr>
			</table>
		</div>
		<div class="col m7 s12 indigo lighten-5">
			<h5 style="line-height: 5px;padding-top: 10px;">Get in touch with us</h5>
			<p class="grey-text">Feel free to drop us a line below</p>
			<div class="row">
				<div class="container p2">
					<div class='input-field'>
	                <input class='validate' type='text' name='name' id='name' />
	                <label for='name'>Enter your Name</label>
              		</div>
              		<div class='input-field'>
	                <input class='validate' type='email' name='email' id='email' />
	                <label for='email'>Enter your email</label>
              		</div>
              		<div class='input-field'>
	                <textarea class='validate materialize-textarea' style="height: 200px" type='textarea' name='message' id='message' ></textarea>
	                <label for='message'>Enter your message</label>
              		</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection