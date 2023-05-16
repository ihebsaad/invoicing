@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<!--datepicker-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

@endsection


@section('content')
<div class="row pl-3">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Ajouter une facture</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Retour</a>
        </div>
    </div>
</div>


<form action="{{ route('invoices.store') }}" method="POST">
    @csrf
    <input type="hidden" name="par"  value="{{$User->id}}" />
     <div class="row pl-3">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Client*:</strong>
                <select class="form-control select2" name="customer" required>
                    <option></option>
                    @foreach($customers as $customer)
                        <option @if($customer_id==$customer->id) selected="selected" @endif value="{{$customer->id}}">{{$customer->civility}} {{$customer->name}} {{$customer->lastname}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2">
            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#add-customer" title="Ajouter un client"  ><i class="fa fa-user-plus"></i> Nouveau Client</a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Date de visite technique préalable:</strong>
                <input type="text" class="form-control datepicker" autocomplete="off"  name="date" placeholder="jj/mm/aaaa"  value="{{date('d/m/Y')}}"/>
            </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Type de devis*:</strong>
                <select   name="menuiserie" id="menuiserie" class="form-control"  onchange="update_required()" style="width:300px" required >
                    <option value=""></option>
                    <option value="-1">PAC AIR EAU</option>
                    <option value="-2">PAC AIR AIR</option>
                    <option value="-3">PANNEAU PHOTOVOLTAÏQUE</option>
                    <option value="-4">CESI</option>
                    <option value="-5">POELE GRANULÉS OU BOIS</option>
                    <option value="-6">ISOLATION</option>
                    <option value="-7">BTD</option>
                    <option value="1">MENUISERIE</option>
                    <option value="2">VOLET ROULANT</option>
                </select>
            </div>
        </div>

    </div>
    <div class="row pl-3">
        <div class="col-xs-12 col-sm-12 col-md-4" id="div-chaudiere" >
			<div class="form-group">
				<strong>Chaudière à :</strong>
				<select  class="form-control" required  id="chaudiere"  name="chaudiere"   style="max-width:180px" >
					<option  value=""></option>
					<option  value="Gaz">Gaz</option>
					<option  value="Fioul">Fioul</option>
					<option  value="Charbon">Charbon</option>
				</select>
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-4" id="div-chauffage"  >
			<div class="form-group">
				<strong>Type de chauffage :</strong>
				<select  class="form-control"  name="chauffage"  id="chauffage"   style="max-width:180px;" >
					<option  value=""></option>
                    <option  value="Electrique">Electrique</option>
					<option  value="Combustible">Combustible </option>
				</select>
			</div>
		</div>

        <div class="col-xs-12 col-sm-12 col-md-4"  id="div-surface">
			<div class="form-group">
            <strong>Surface <span id="chauff">chauffée</span><span style="display:none" id="isol">à isoler</span> (m²):</strong>
            <input type="number" class="form-control" required  id="surface"  name="surface"   style="max-width:180px"/>

            </div>
		</div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Note:</strong>
                <textarea class="form-control summernote" style="height:150px" name="description" placeholder="Description">{{old('description')}}</textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

</form>






<div class="modal fade" id="add-customer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title text-center text-primary"> Ajouter un client </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding:10px 10px 1" >

                <form action="{{ route('customers.store') }}" method="POST">
                    <input type="hidden" name="source" value="invoice" />
                    @csrf

                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Commercial:</strong>
                                <select class="form-control select2" name="commercial"  >
                                    <option></option>
                                    @foreach($commercials as $commercial)
                                        <option  value="{{$commercial->id}}">{{$commercial->id}} : {{$commercial->name}} {{$commercial->lastname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <div class="form-group">
                                <strong>Civilité:</strong>
                                <select   name="civility" class="form-control" placeholder="civility" >
                                    <option value="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                    <option value="Mlle">Mlle</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-5">
                            <div class="form-group">
                                <strong>Nom:</strong>
                                <input type="text" name="lastname" class="form-control" placeholder="Nom" value="{{old('lastname')}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <strong>Prénom:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Prénom" value="{{old('name')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <div class="form-group">
                                <strong>Civilité:</strong>
                                <select   name="civility2" class="form-control" placeholder="civility2" >
                                    <option value="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                    <option value="Mlle">Mlle</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-5">
                            <div class="form-group">
                                <strong>Nom:</strong>
                                <input type="text" name="lastname2" class="form-control" placeholder="Nom" value="{{old('lastname2')}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <strong>Prénom:</strong>
                                <input type="text" name="name2" class="form-control" placeholder="Prénom" value="{{old('name2')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <strong>Tél:</strong>
                                <input type="text" name="phone" class="form-control" placeholder="N° de téléphone" value="{{old('phone')}}">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="email" name="email" class="form-control" placeholder="adresse email" value="{{old('email')}}">
                            </div>
                        </div>
                    </div>

                    <div class="row  mt-2">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Adresse:</strong>
                                <input type="text"   name="address" id="address" class="form-control" placeholder="Adresse" value="{{old('address')}}" onchange="copy('address')"  />
                            </div>
                        </div>
                    </div>


                    <div class="row ">

                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" name="city" id="city" class="form-control" placeholder="Ville" value="{{old('city')}}"  onchange="copy('city')">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <select type="text" name="country" id="country" class="form-control" onchange="copy('country')" >
                                    <option></option>
                                    @foreach($countries as $key =>$value)
                                        <option value="{{$value}}"  @if($value=='France') selected="selected" @endif >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" name="postal" id="postal"  class="form-control" placeholder="Code postal" value="{{old('postal')}}"  onchange="copy('postal')">
                            </div>
                        </div>

                    </div>


                    <div class="row   mt-2">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Adresse du chantier:</strong>
                                <input type="text"   name="delivery_address" id="delivery_address" class="form-control" placeholder="Adresse" value="{{old('delivery_address')}}" />
                            </div>
                        </div>
                    </div>


                    <div class="row pb-2">

                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" name="delivery_city" id="delivery_city" class="form-control" placeholder="Ville" value="{{old('delivery_city')}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <select type="text" name="delivery_country" id="delivery_country" class="form-control"  >
                                    <option></option>
                                    @foreach($countries as $key =>$value)
                                        <option value="{{$value}}"  @if($value=='France') selected="selected" @endif >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="form-group">
                                <input type="text" name="delivery_postal" id="delivery_postal"  class="form-control" placeholder="Code postal" value="{{old('delivery_postal')}}">
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>



@endsection


@section('footer-scripts')
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}" ></script>

<script>

    function copy(champ){
      val= $('#'+champ).val();
      if( $('#delivery_'+champ).val()==''||$('#delivery_'+champ).val()=='France' ){
        $('#delivery_'+champ).val(val);
      }
    }

    function update_required(){
        var menuiserie =$('#menuiserie').val()   ;
        if(menuiserie!=''){
            // chauffage
            if(menuiserie==1){
                $('#chauffage').prop('required',true);
                $('#div-chauffage').show('slow');
            }else{
                $('#chauffage').prop('required',false);
                $('#div-chauffage').hide('slow');
            }
            // surface
            if(menuiserie==-1 || menuiserie==-2 || menuiserie==-5 ||  menuiserie==-6   ){
                $('#surface').prop('required',true);
                $('#div-surface').show('slow');

                if(menuiserie==-6){
                    $('#isol').show('slow');
                    $('#chauff').hide('slow');
                }else{
                    $('#isol').hide('slow');
                    $('#chauff').show('slow');
                }

            }else{
                $('#surface').prop('required',false);
                $('#div-surface').hide('slow');
            }
            //chaudiere
            if(menuiserie==-1){
                $('#div-chaudiere').show('slow');
                $('#chaudiere').prop('required',true);
            }else{
                $('#div-chaudiere').hide('slow');
                $('#chaudiere').prop('required',false);
            }
        }
    }

  $(function () {
    // Summernote
    $('.summernote').summernote();


    $('.select2').select2();

    $('.datepicker').datepicker({ changeMonth: true,
      //changeYear: true,
      dateFormat: 'dd-mm-yy' }).val();

  });

</script>

@endsection