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
                <h2>Liste des factures</h2>
            </div>
            <div class="float-right mb-3"  >
                <a class="btn btn-success" href="{{ route('invoices.create') }}"><i class="fas fa-plus"></i> Créer une facture</a>
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
            <th class="no-sort"  style="width:20%"  >Action</th>
            </tr>
        </thead>
        @foreach ($invoices as $invoice)
       <tr>
            <td>{!! sprintf('%04d',$invoice->id) !!}</td>
            <td>{!! $invoice->reference !!} @if($invoice->menuiserie==1)<br><small> Menuiserie</small> @endif @if($invoice->menuiserie==2)<br><small>volets roulants</small> @endif</td>
            <td>{{ $invoice->customer()->first()->civility  ?? ''}} {{ $invoice->customer()->first()->name  ?? '' }} {{ $invoice->customer()->first()->lastname  ?? ''}}</td>
            <td>{{date('d/m/Y', strtotime($invoice->created_at))}}</td>
            <td>{{number_format($invoice->total_ttc,0,',',' ')}} €</td>
            <td>
                @if($invoice->menuiserie>0)
			        <a class="btn btn-primary mb-3 mr-2" href="{{ route('invoices.edit_men',$invoice->id) }}" style="float:left" title="Modifier"><i class="fas fa-edit"></i></a>
                @else
			        <a class="btn btn-primary mb-3 mr-2" href="{{ route('invoices.edit',$invoice->id) }}" style="float:left" title="Modifier"><i class="fas fa-edit"></i></a>
                @endif
			    <a class="btn btn-success mb-3 mr-2 " target="_blank" href="{{ route('invoices.show_pdf',$invoice->id) }}" style="float:left" title="Ouvrir en PDF"><i class="fas fa-file-pdf"></i></a>
			    <a class="btn btn-secondary mb-3 mr-2 " href="{{ route('invoices.download_pdf',$invoice->id) }}" style="float:left" title="Télécharger"><i class="fas fa-download"></i></a>
			    <a class="btn btn-warning mb-3 mr-2 " href="{{ route('invoices.send_pdf',$invoice->id) }}" style="float:left" title="Envoyer par email"><i class="fas fa-envelope"></i></a>
                @if($User->user_type=='admin')
                <form action="{{ route('invoices.destroy',$invoice->id) }}" method="POST" style="float:left" class="mr-2  ">
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
                    columns: [  0,1,2 ]
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
                    }

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
