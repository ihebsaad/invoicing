@extends('layouts.admin')

@section('styles')

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4 margin-tb">
        <h2>Liste des devis</h2>
    </div>

    <div class="col-lg-4 margin-tb">
    </div>

    <div class="col-lg-4 margin-tb">
        <div class="float-right mb-3">
            <a class="btn btn-success" href="{{ route('quotes.create') }}"><i class="fas fa-plus"></i> Créer un devis</a>
            @if(request()->is('quotes'))
            <a class="btn btn-primary ml-2" href="{{ route('quotes.all') }}"><i class="fas fa-list"></i> Liste complète</a>
            @endif
        </div>
    </div>

</div>
</div>

<style>
    .small-img {
        width: 150px;
    }
</style>
<div class="row pt-2">
    <div class="col-md-6">
    </div>
    <div class="col-md-3">
        <button id="deleteSelected" class="btn btn-danger">Supprimer la sélection</button>
    </div>
    <div class="col-md-3">
        <select id="filter_type_devis" class="form-control" style="width:300px; ;margin-bottom:20px;float:right">
            <option value="">Tous les types</option>
            <option value="1">MENUISERIE</option>
            <option value="2">VOLET ROULANT</option>
            <option value="-1">PAC AIR EAU</option>
            <option value="-2">PAC AIR AIR</option>
            <option value="-3">PANNEAU PHOTOVOLTAIQUE </option>
            <option value="-4">CESI / SSC</option>
            <option value="-5">POELE GRANULÉS OU BOIS</option>
            <option value="-6">ISOLATION  DU PLANCHER BAS</option>
            <option value="-60">ISOLATION SOUFFLEE</option>
            <option value="-61">ISOLATION SOUS RAMPANT</option>
            <option value="-62">ISOLATION extérieur</option>
            <option value="-63">ISOLATION intérieur</option>
            <option value="-7">BTD</option>
            <option value="-9">VMC</option>
            <option value="-8">AUTRES</option>
        </select>
        <label class="mt-2 mr-2" style="float:right">Type</label>
    </div>

</div>
<table class="table table-bordered table-striped" id="quotes-table">
    <thead>
        <tr>
            <th><input type="checkbox" id="selectAll"></th> <!-- Case pour sélectionner tout -->
            <th>No</th>
            <th>Référence</th>
            <th>Client</th>
            <th>Créé le</th>
            <th>Conseillé</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
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
    /*
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
*/

    $(document).ready(function() {
        var table = $('#quotes-table').DataTable({
            // Votre configuration DataTables
            processing: true,
            serverSide: true,
            dom: 'lBfrtip',
            pageLength: 10, // Affiche 10 lignes par défaut
            lengthMenu: [[10, 25, 50,100, -1], [10, 25, 50,100, "Tout"]],
            ajax: {
                url: "{{ route('quotes.list') }}",
                data: function(d) {
                    d.type_devis = $('#filter_type_devis').val(); // Filtre ajouté
                }
            },
            columns: [{
                    data: 'id',
                    render: function(data) {
                        return `<input type="checkbox" class="rowCheckbox" value="${data}">`;
                    },
                    orderable: false,
                    searchable: false,
                },
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'reference',
                    name: 'reference'
                },
                {
                    data: 'customer',
                    name: 'customer',
                    orderable: false,
                    searchable: true
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'par',
                    name: 'par'
                },
                {
                    data: 'total_ttc',
                    name: 'total_ttc'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],
            "responsive": true,
            //"lengthChange": false,
            "autoWidth": false,
            order: [
                [1, 'desc']
            ],
            buttons: [{
                    extend: 'csv',
                    text: '<i class="fa fa-file-csv"></i>  CSV',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 6, 7, 8, 9, 10],
                        modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'all' // Export toutes les lignes, pas seulement celles affichées
                        }
                    }
                },
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel"></i>  Excel',
                    exportOptions: {
                        columns: [ 1,2,3,4,5,6],
                        modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'all' // Export toutes les lignes, pas seulement celles affichées
                        }
                    }
                },
                {
                    extend: 'pdf',
                    text: '<i class="fa fa-file-pdf"></i>  PDF',
                    exportOptions: {
                        columns: [ 1,2,3,4,5,6],
                        modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'all' // Export toutes les lignes, pas seulement celles affichées
                        }
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>  Imprimer',
                    exportOptions: {
                        columns: [ 1,2,3,4,5,6],
                        modifier: {
                            search: 'applied',
                            order: 'applied',
                            page: 'all' // Export toutes les lignes, pas seulement celles affichées
                        }
                    }
                }
            ],
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json" // Fichier de traduction pour le français
            },
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
        });

        // Recharger la table lorsque le type de devis est changé
        $('#filter_type_devis').change(function() {
            table.draw();
        });

        // Gestion de la sélection/désélection globale
        $('#selectAll').on('click', function() {
            $('.rowCheckbox').prop('checked', this.checked);
        });

        // Bouton de suppression
        $('#deleteSelected').on('click', function() {
            const selectedIds = $('.rowCheckbox:checked').map(function() {
                return $(this).val();
            }).get();

            if (selectedIds.length === 0) {
                alert('Veuillez sélectionner au moins une ligne.');
                return;
            }

            if (confirm('Êtes-vous sûr de vouloir supprimer les lignes sélectionnées ('+selectedIds.length+')?')) {
                $.ajax({
                    url: '/delete-selected', // Route de suppression
                    method: 'POST',
                    data: {
                        ids: selectedIds,
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response) {
                        alert(response.message);
                        table.ajax.reload(); // Recharger le tableau
                    },
                    error: function(xhr) {
                        alert('Une erreur s\'est produite.');
                    },
                });
            }
        });

    });
</script>

@endsection