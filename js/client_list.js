// onSelectRow
function getViewClient(id){
	window.location.href = './client_panel_view.php?id='+id;	
}

 // Retrive the client list and load datatable
$(document).ready(function(){
 
	var url = './services/client/read.php';	
	var clientListData = [];
	
	function getRowTable(id){
		var data = clientListData.filter(function(value){
			return value.id === id;
		});
		return data && data[0] ? data[0] : {};
	}

    var $datatable = $('#client-list').DataTable({
        'ajax': {
            'type': 'GET',
            'url': './services/client/read.php',
            'data': function(data) {
                return data;
            }
        },
		'select': true,
		'keys': true,
		'columns': [
			{
				'data': 'name'
			},
			{
				'data': 'last_name'
			},
			{
				'data': 'age',
				'render': function(data) {
					return data || '-';
				},
				'width': '10%'
			},
			{
				'data': null,
				'render': function(data) {
					var view_button = '<button type="button" class="btn btn-success btn-xs btn-view" onclick="getViewClient('+data.id+')" id="'+data.id+'"> <i class="fa fa-user"></i> Ver </button>';
					var edit_button = '<button type="button" class="btn btn-primary btn-xs btn-edit" id="'+data.id+'"> <i class="fa fa-edit"></i> Editar </button>';
					return view_button + edit_button;
				},
				 'width': '15%'
			}
        ],
        'processing': true,
        'language': {
            'loadingRecords': '&nbsp;',
            'processing': 'Cargando...',
			'url': 'resources/data-tables/spanish.lang'
        },
		'initComplete':function( settings, response){
			clientListData = response.data;
        }
    });
	
	// when draw new buttons on the page
	$datatable.on('draw.dt', function() {
		$('#client-list .btn-edit').on('click', function(){
			var id = this.attributes.id ? this.attributes.id.value : '';
			var data = getRowTable(id);
			
			$.post('./client_panel.php', function(template){
				var rendered = Mustache.render(template, data);
				$('#client-panel-content').html(rendered);
			});
			
		});
		
		$('#client-list .btn-view').on('click',function(){
			var id = this.attributes.id ? this.attributes.id.value : '',
			   url = './services/client/read-one.php';
			
			$.post(url, { 'id' : id } , function(response){
				$.get('./client_panel.php', function(template){
					var rendered = Mustache.render(template, response.data);
					$('#client-panel-content').html(rendered);
				});
			});
		});
	});
    
   $('#reload-table').on('click', function(){
    	table.ajax.reload();
   });
   
});