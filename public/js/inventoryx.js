
jQuery(document).ready( function($) {
    fct_datatale($);
});

function fct_datatale($) {
	$('#report-table').DataTable({
        "pagingType": "full_numbers",
		"language":{
			"sEmptyTable":     "Aucune donnée disponible dans le tableau",
			"sInfo":           "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
			"sInfoEmpty":      "Affichage de l'élément 0 à 0 sur 0 élément",
			"sInfoFiltered":   "(filtré à partir de _MAX_ éléments au total)",
			"sInfoPostFix":    "",
			"sInfoThousands":  ",",
			"sLengthMenu":     "Afficher _MENU_ éléments",
			"sLoadingRecords": "Chargement...",
			"sProcessing":     "Traitement...",
			"sSearch":         "Rechercher :",
			"sZeroRecords":    "Aucun élément correspondant trouvé",
			"oPaginate": {
				"sFirst":    "Premier",
				"sLast":     "Dernier",
				"sNext":     "Suivant",
				"sPrevious": "Précédent"
			},
			"oAria": {
				"sSortAscending":  ": activer pour trier la colonne par ordre croissant",
				"sSortDescending": ": activer pour trier la colonne par ordre décroissant"
			},
			"select": {
					"rows": {
						"_": "%d lignes sélectionnées",
						"0": "Aucune ligne sélectionnée",
						"1": "1 ligne sélectionnée"
					}
			}
		},
		dom: 'Bfrtip',
        buttons: [
			{
				extend:'copy',
				text:'Copier',
			},
			{
				extend:'csv',
				text:'CSV',
			},
			{
				extend:'excel',
				text:'Excel',
			},
			{
				extend:'pdf',
				text:'PDF',
			},
			{
				extend:'print',
				text:'Imprimer',
			},
			{
                extend: 'print',
                text: 'Imprimer Tout',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
			},
		],
        select: true
	});

}
