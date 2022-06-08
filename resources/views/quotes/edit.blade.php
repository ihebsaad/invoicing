@extends('layouts.admin')
@section('styles')

<!--datepicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<!-- signature -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>       
 <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
 <style>
        .kbw-signature { width: 100%; height: 200px;}
     /*   #sigpad canvas{ width: 100% !important; height: auto;}*/
		#signature{cursor:pointer;}
		.th-products{
			background-color:#ff6633;color:white;padding:10px 20px;
			letter-spacing:2px;
			text-align:center;
		}
		.tab-content{
			min-height:400px;
		}
		.number{
			border:none;text-align:center;
		}
		.product td{
			padding-top:8px;
			padding-bottom:8px;
		}
 </style> 

@endsection

 

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Devis {{$quote->id}} </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('quotes.index') }}"> Retour</a>
            </div>
        </div>
    </div>
     
    <div class="card card-primary card-outline card-tabs" style="width:100%">
        <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-details-tab" data-toggle="pill" href="#custom-tabs-three-details" role="tab" aria-controls="custom-tabs-three-details" aria-selected="true">Détails</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-prods-tab" data-toggle="pill" href="#custom-tabs-three-prods" role="tab" aria-controls="custom-tabs-three-prods" aria-selected="false">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-signature-tab" data-toggle="pill" href="#custom-tabs-three-signature" role="tab" aria-controls="custom-tabs-three-signature" aria-selected="false">Signature</a>
                </li>
                </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade active show" id="custom-tabs-three-details" role="tabpanel" aria-labelledby="custom-tabs-three-details-tab">

 
					<form action="{{ route('quotes.update',$quote->id) }}" method="POST">
						@csrf
						@method('PUT')

						<div class="row pl-5">
							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<i class="fas fa-address-card"></i> 
									<?php $customer= \App\Models\Customer::find($quote->customer);?>
									{{$customer->civility}} {{$customer->name}} {{$customer->lastname}} <br>
									<i class="fas fa-phone mr-2"></i>{{$customer->phone}} <i class="fas fa-envelope mr-2 ml-4"></i> {{$customer->email}} <br>
									<i class="fas fa-map-marker mr-2"></i> {{$customer->address}} - {{$customer->city}} 
								</div>
							</div>

							
							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Date:</strong>
									<input type="text" class="form-control datepicker"  autocomplete="off" name="date" placeholder="jj/mm/aaaa" value="{{ date('d/m/Y', strtotime($quote->date)) }}"/>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-7">
								<div class="form-group">
									<strong>Description:</strong>
									<textarea class="form-control summernote" style="height:150px" name="description" placeholder="Description">{{$quote->description}}</textarea>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-7">
									<button type="submit" class="btn btn-primary">Enregistrer</button>
							</div>
						</div>

					</form>

				</div>

 
				<!-- PRODUITS --->
            	<div class="tab-pane fade" id="custom-tabs-three-prods" role="tabpanel" aria-labelledby="custom-tabs-three-prods-tab"  style="width:100%">

					<div class="">
						<table class="tab-products">
							<thead class="th-products">
								<tr>
									<th style="width:60%">Produit</th><th style="width:8%">Qté</th><th style="width:8%">TVA</th><th style="width:14%">Total</th><th style="width:10%">+/-</th>
								</tr>
							</thead>
							<tbody>
								<tr class="product">
									<td>POMPE A CHALEUR AIR/EAU TOSHIBA - ESTIA 8 MONO</td><td><input type="number" step="1" min="1" class="number"/></td><td><input type="number" step="0.5" min="5.5" class="number" value="5.5" /></td><td><input type="number"   class="number" value="" readonly /></td><td></td>
								</tr>
							</tbody>

						</table>
					</div>

				</div>

				
            	<div class="tab-pane fade" id="custom-tabs-three-signature" role="tabpanel" aria-labelledby="custom-tabs-three-signature-tab"   >
					@if(\App\Models\Signature::where('quote',$quote->id)->exists())
						@php $url_img=\App\Models\Signature::where('quote',$quote->id)->first()->user_image;
						@endphp
						<img src="{{$url_img}}" width= '300'     height= ''/>
					@else
						<div class="row">
							<div class="col-md-6 offset-md-3 mt-5">
								<div class=" ">
									<div class="card-body">
										<div class="col-md-12">
											<label class="" for="">Dessinez votre Signature:</label>
											<br/>
											<form method="POST" action="{{ route('signpad.save') }}">
												@csrf
												<input type="hidden" name="quote_id" value="{{$quote->id}}" />
												<div id="sigpad" style="width:300px!important"></div>
												<br><br>
												<button id="clear" class="btn btn-danger">Vider</button>
												<textarea id="signature" name="signed" style="display: none"></textarea>
												<button class="btn btn-primary">Confirmer
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endif
			
				</div>

			</div>

		</div>
	</div>

@endsection


@section('footer-scripts')
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>

<script>
  
  $(function () {
    // Summernote
    $('.summernote').summernote();


    $('.select2').select2();

    $('.datepicker').datepicker({ changeMonth: true,
      //changeYear: true,
      dateFormat: 'dd/mm/yy' }).val();

  });
  
</script>
 <!-- signature -->

<!-- jQuery signature plugin js -->
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<script type="text/javascript">
  var sigpad = $('#sigpad').signature({syncField: '#signature', syncFormat: 'PNG'});
  $('#clear').click(function(e) {
   e.preventDefault();
   sigpad.signature('clear');
   $("#signature").val('');
  });
</script>

@endsection

