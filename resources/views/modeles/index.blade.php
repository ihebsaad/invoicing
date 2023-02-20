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
                <h2>Liste des produits</h2>
            </div>
            <div class="float-right mb-3"  >
                <a class="btn btn-success" href="{{ route('modeles.create') }}"><i class="fas fa-plus"></i> Ajouter un produit de menuiserie</a>
            </div>
        </div>
    </div>

   <style>
		.small-img{width:150px;}
   </style>
   @php
   $types = array(
        '1' => 'Fenêtre à souflet',
        '2' => 'Fenêtre / Porte Fenêtre - 1VOB',
        '3'=> 'Fenêtre / Porte Fenêtre - 2V',
        '4'=> 'Fenêtre fixe',
        '5'=> 'Porte fenêtre ouverture extérieur - PF1V',
        '6'=> 'Porte 2 ventaux Battement central ouverture extérieur PF2V'
    );
    $couleurs=array(
        '1' => 'Extérieur et intérieur blanc',
        '2' => 'Extérieur couleur et intérieur blanc',
        '3'=> 'Extérieur et intérieur couleur',
    );
    $matieres=array(
        '1' => 'PVC',
        '2' => 'Aluminium',
    );

   @endphp
    <table class="table table-bordered table-striped" id='mytable'>
        <thead>
            <tr>
                <th  style="width:4%">No</th>
                <th  style="width:10%">Matière</th>
                <th  style="width:20%">Type</th>
                <th  style="width:25%">Couleur</th>
                <th  style="width:7%">Hauteur</th>
                <th  style="width:7%">Largeur</th>
                <th  style="width:7%">Prix</th>
                <th class="no-sort"   style="width:14%"  >Action</th>
            </tr>
            <tr style="text-align:center">
                <th class="th no-sort" >No</th>
                <th class="th no-sort" >Matière</th>
                <th class="th no-sort" >Type</th>
                <th class="th no-sort" >Couleur</th>
                <th class="th no-sort" >Hauteur</th>
                <th class="th no-sort" >Largeur</th>
                <th class="th no-sort" >Prix</th>
                <th class="no-sort"   ></th>
            </tr>
        </thead>
        @foreach ($modeles as $modele)
		<tr>
            <td>{!! sprintf('%04d',$modele->id) !!}</td>
            <td>{{ $matieres[$modele->genre] }}</td>
            <td>{{ $types[$modele->type] }}</td>
            <td style="font-size:14px">{{ $couleurs[$modele->couleur] }}</td>
            <td>{{ sprintf('%04d',$modele->hauteur) }}</td>
            <td>{{ sprintf('%04d',$modele->largeur) }}</td>
            <td>{{ number_format($modele->prix,0,'',' ') }} €</td>
            <td>
			    <a class="btn btn-primary mb-3" href="{{ route('modeles.edit',$modele->id) }}" style="float:left" title="Modifier"><i class="fas fa-edit"></i></a>
                <form action="{{ route('products.destroy',$modele->id) }}" method="POST" style="float:left" class="mr-2 ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mb-3" title="Supprimer" onclick="return ConfirmDelete();"><i class="fas fa-trash"></i> </button>
                </form>
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

    $('#mytable thead .th').each(function () {
        var title = $(this).text();
        $(this).html('<input style="max-width:100px" type="text" placeholder=" ' + title + '" />');
    });


    $("#mytable").DataTable({
        initComplete: function () {
            // Apply the search
            this.api()
                .columns()
                .every(function () {
                    var that = this;

                    $('input', this.header()).on('keyup change clear', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
        },
      "responsive": true, "lengthChange": false, "autoWidth": false,
      order: [[ 0, 'desc' ]],
      buttons: [
                    {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>  Imprimer',
                    exportOptions: {
                 //   columns: [0,1,2,3,4,5,6  ],
                	}
                    },
                    {
                    extend: 'csv',
                    text: '<i class="fa fa-file-csv"></i>  Csv',
                    exportOptions: {
                //    columns: [ 0,1,2,3,4,5,6]
                	}
                    },
				 {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel"></i>  Excel',
                    exportOptions: {
                    columns: [0,1,2,3,4,5,6]
               	}
                    },
				{
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf"></i>  Pdf',
                    exportOptions: {
                //    columns: [ 0,1,2,3,4,5,6 ]
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
