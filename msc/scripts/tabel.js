$(function () {
        // Initialize Example 1
        $('#example1').dataTable( {
            "ajax": 'api/datatables.json'
        });

        // Initialize Example 2
		$('#example2').dataTable();
		
		$('#foo_penjualan').footable();

		$('#foo_penjualan2').footable();

    });