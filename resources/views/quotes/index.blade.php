@extends('layouts.admin')

@section('styles')

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Liste des devis</h2>
            </div>
            <div class="float-right mb-3"  >
                <a class="btn btn-success" href="{{ route('quotes.create') }}"><i class="fas fa-plus"></i> Créer un devis</a>
            </div>
        </div>
    </div>
   
   <style>
		.small-img{width:150px;}
   </style>
    <table class="table table-bordered table-striped" id='mytable'>
        <thead>
            <tr>
            <th>No</th>
            <th>Référence</th>
            <th>Client</th>
            <th>Créé le</th>
            <th>Total</th>
            <th class="no-sort"  style="width:25%"  >Action</th>
            </tr>
        </thead>
        @foreach ($quotes as $quote)
		<tr>
            <td>{!! sprintf('%04d',$quote->id) !!}</td>
            <td>{!!  $quote->reference !!}</td>
            <td>{{ $quote->customer()->first()->civility }} {{ $quote->customer()->first()->name }} {{ $quote->customer()->first()->lastname }}</td>
            <td>{{date('d/m/Y', strtotime($quote->created_at))}}</td>
            <td>{{ ($quote->total_ttc ?? 0) }} €</td>
            <td>
                @if($User->user_type=='admin' || $User->id== $quote->par )
                    <a class="btn btn-primary mb-3 mr-2" href="{{ route('quotes.edit',$quote->id) }}" style="float:left" title="Modifier"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-success mb-3 mr-2 " target="_blank"  href="{{ route('quotes.show_pdf',$quote->id) }}" style="float:left" title="Ouvrir en PDF"><i class="fas fa-file-pdf"></i></a>
                    <a class="btn btn-secondary mb-3 mr-2 " href="{{ route('quotes.download_pdf',$quote->id) }}" style="float:left" title="Télécharger"><i class="fas fa-download"></i></a>
                    @if(\App\Models\Signature::where('quote',$quote->id)->exists())
                        <a class="btn btn-dark mb-3 mr-2 " href="{{ route('quotes.download_pdf_signature',$quote->id) }}" style="float:left" title="Télécharger avec signature"><i class="fas fa-signature"></i></a>
                    @endif
                    @if(\App\Models\Invoice::where('quote',$quote->id)->doesntExist() &&  $User->user_type=='admin')
                        <a class="btn btn-warning mb-3 mr-2 " href="{{ route('quotes.save_invoice',$quote->id) }}" style="float:left" title="Enregistrer en Facture"><i class="fas fa-file"></i></a>
                    @endif
                    <form action="{{ route('quotes.destroy',$quote->id) }}" method="POST" style="float:left" class="mr-2" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mb-3" title="Supprimer" onclick="return ConfirmDelete();"><i class="fas fa-trash"></i></button>
                    </form>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection
@section('footer-scripts')

<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#mytable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      order: [[ 0, 'desc' ]],
      buttons: [						 
                    {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>  Imprimer',
                    exportOptions: {
                 //   columns: [  1,2,3,4,5,6  ],
                	}
                    },
                    {
                    extend: 'csv',
                    text: '<i class="fa fa-file-csv"></i>  Csv',
                    exportOptions: {
                //    columns: [ 1,2,3,4,5,6]
                	}
                    },
				 {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel"></i>  Excel',
                    exportOptions: {
                    columns: [ 1,2,3,4,5,6]
               	}
                    },				
				{
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf"></i>  Pdf',
                    exportOptions: {
                //    columns: [  1,2,3,4,5,6 ]
                	}
                    },



                ]   ,   "language": {
					"decimal":        "",
					"emptyTable":     "Pas de données",
					"info":           "Affichage de  _START_ à _END_ de _TOTAL_ entrées",
					"infoEmpty":      "Affichage 0 à 0 of 0 entries",
					"infoFiltered":   "(filteré de _MAX_ total entrées)",
					"infoPostFix":    "",
					"thousands":      ",",
					"lengthMenu":     "afficher _MENU_ ",
					"loadingRecords": "Chargement...",
					"processing":     "Chargement...",
					"search":         "Recherche:",
					"zeroRecords":    "Pas de résultats",
						"paginate": {
						"first":      "Premier",
						"last":       "Dernier",
						"next":       "Suivant",
						"previous":   "Premier"
									},
						"aria": {
						"sortAscending":  ": Activer pour un Tri ascendant",
						"sortDescending": ": Activer pour un Tri descendant"
								}
					},
                    "columnDefs": [ {
                    "targets": 'no-sort',
                    "orderable": false,
                        } ],
    }).buttons().container().appendTo('#mytable_wrapper .col-md-6:eq(0)');


  });
</script>

@endsection
