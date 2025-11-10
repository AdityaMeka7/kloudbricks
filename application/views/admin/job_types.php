<?php
$uri = $this->uri->segment(3);
$page = 'job_types';
//echo $uri;exit;
?>


<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
	<!-- Users List Table -->

	<div class="card">
	  <div class="card-header border-bottom">
		<!-- <h5 class="card-title mb-3">Search Filter</h5> -->
		<!-- Button trigger modal -->
		<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;"
		  id="rightMenu">
		  <button style="margin: auto; margin-right:0;" onclick="closeRightMenu()"
			class="w3-bar-item w3-button w3-large">
			<span>&times;</span></button>
		</div>

		<div
		  style="display: flex;justify-content: space-between; align-items: center; gap: 10px; flex-wrap: wrap; ">

		  <h3>Job Types</h3>
		  
		  <div
			style="display: flex;justify-content: flex-end; align-items: flex-end; gap: 10px; flex-wrap: wrap; ">
			<div style="display: flex; justify-content: center;align-items: center; gap: 10px;">
			<button id="button" class="w3-button btn-primary" style="width: 140px; border-radius: 5px;  ">Export
			  CSV</button>
			  <a href="<?=base_url('dashboard/admin/add_job_type')?>"><button id="button" class="w3-button btn-primary" style="width: 140px; border-radius: 5px;  "><i class="fa fa-plus" aria-hidden="true"></i>Add</button></a>
		  </div>
		  </div>

		</div>
		<style>
		  option {
			background-color: #fff !important;
			color: #000 !important;
			text-align: left !important;
		  }

		  .w3-sidebar {
			height: 100%;
			width: 400px;
			background-color: #fff;
			position: fixed !important;
			top: 0px;
			z-index: 2076 !important;
			overflow: auto;
		  }

		  .w3-bar-block .w3-bar-item {
			width: auto;
			display: block;
			border: none;
			white-space: normal;
			float: none;
			outline: 0;
		  }

		  @media(max-width:500px) {
			.btn-primary {
			  width: 100%;

			}
		  }
		</style>

	  </div>


	  <div class=" card-datatable table-responsive TABLE1">

		<table id="Example" class="Table display nowrap" style="width:100%">
		  <thead>
			<tr>
			  <th></th>
			  <th>ID</th>
			  <th>Name</th>
			  <th>Status</th>
			</tr>
		  </thead>
		</table>
	  </div>

	<style>
	  .Options {
		display: flex;
		justify-content: space-between;
		align-items: center;
		flex-wrap: wrap;
	  }

	  .btn .btn-primary {
		width: 10% !important;
	  }

	  .TABLE2 {
		display: none;
	  }

	  .TABLE1 {
		display: block;
	  }

	  @media(max-width:600px) {

		/* .MODAL1,
		  .MODAL {
			display: block;
			padding-bottom: 10px!important;
		  } */

		.select.btn {
		  width: 100% !important;
		}

		.TABLE1 {
		  display: none;
		}

		.TABLE2 {
		  display: block;
		}
	  }
	</style>
	
	
	<script>
    $(document).ready(function () {
        // Format the child row
        function format(details) {
            var baseURL = "<?php echo base_url(); ?>";
            return `
                <div class="p-3">
                <strong>Actions: </strong> 
                    <a href="${baseURL}dashboard/admin/edit_job_type/${btoa(details.id)}">
                    <button class="btn btn-primary btn-sm edit-btn" data-id="${details.id}">
                        <i class="fa fa-edit"></i>
                    </button>
                </a>
                <button class="btn btn-danger btn-sm delete-btn" data-id="${details.id}"><i class="fa fa-trash"></i></button>
                </button>
                 <br>
                <strong>Created on: </strong> ${details.created_on} <br>
                <strong>Modified on: </strong> ${details.modified_on ? details.modified_on : ''}
                </div>
            `;
        }

        // Initialize DataTable
        const table = $('#Example').DataTable({
            serverSide: true,
            processing: true,
            scrollX: true,
            scrollY: '400px',
            scrollCollapse: true,
            ajax: {
                url: '<?= base_url("dashboard/admin/get_job_types") ?>',
                type: 'POST',
                dataSrc: 'data'
            },
            columns: [
                {
                    className: 'dt-control',
                    orderable: false,
                    data: null,
                    defaultContent: '<i class="fas fa-plus-circle"></i>', // Icon for toggling
                },
                { data: 'id' },
                { data: 'name' },
                {
                data: 'status',
                    render: function (data, type, row) {
                        // Render the toggle switch
                        return `
                            <label class="switch">
                                <input 
                                    type="checkbox" 
                                    class="toggle-status" 
                                    data-id="${row.id}" 
                                    ${data == 1 ? 'checked' : ''}>
                                <span class="slider round"></span>
                            </label>
                        `;
                    },
                },
            ],
            order: [[1, 'asc']],
            pageLength: 10
        });
        
        // Adjust column widths after init
        setTimeout(() => {
          table.columns.adjust().draw(false);
        }, 500);
        
        // Handle expand/collapse details
        $('#Example tbody').on('click', 'td.dt-control', function () {
            const tr = $(this).closest('tr');
            const row = table.row(tr);

            if (row.child.isShown()) {
                row.child.hide();
                tr.removeClass('shown');
                $(this).html('<i class="fas fa-plus-circle"></i>');
            } else {
                row.child(format(row.data())).show();
                tr.addClass('shown');
                $(this).html('<i class="fas fa-minus-circle"></i>');
            }
        });
        
        // Handle Status Toggle
        $('#Example').on('change', '.toggle-status', function () {
            const id = $(this).data('id');
            const status = $(this).is(':checked') ? 1 : 0;
    
            $.ajax({
                url: '<?=base_url('dashboard/admin/change_job_type_status')?>',
                type: 'POST',
                data: { id: id, status: status },
                success: function (response) {
                    const res = JSON.parse(response);
                    if (res.success) {
                        // Refresh the table without resetting pagination
                        table.ajax.reload(null, false);
                        alert('data updated successfully');
                    } else {
                        alert('Failed to update status');
                    }
                },
            });
        });
        
        // Handle Delete Button
        $('#Example').on('click', '.delete-btn', function () {
            const id = $(this).data('id');

            // Show confirmation alert
            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    url: '<?=base_url('dashboard/admin/delete_job_type')?>',
                    type: 'POST',
                    data: { id: id },
                    success: function (response) {
                        const res = JSON.parse(response);
                        if (res.success) {
                            // Refresh the table without resetting pagination
                            table.ajax.reload(null, false);
                            alert('data deleted successfully');
                        } else {
                            alert('Failed to delete record');
                        }
                    },
                });
            }
        });
        
    });
</script>

<!-- Include Font Awesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


<style>

/* Style for the control buttons in the table */
td.dt-control {
    text-align: center; /* Center the icon */
    cursor: pointer;    /* Make the icon clickable */
    font-size: 1.2rem;  /* Adjust icon size */
    color: #007bff;     /* Primary color (Bootstrap default) */
}

td.dt-control i {
    transition: transform 0.2s ease, color 0.2s ease;
}

/* Change color on hover */
td.dt-control:hover i {
    color: #0056b3; /* Darker blue on hover */
}

/* Animate when switching between + and - */
tr.shown td.dt-control i {
    transform: rotate(180deg); /* Flip the minus icon for a smooth effect */
    color: #dc3545; /* Change to a danger (red) color for better visibility */
}

    tr.shown {
    background-color: #f9f9f9; /* Highlight rows when expanded */
}

.dtr-hidden{
    display:block!important;
}

/* Toggle switch container */
.switch {
    position: relative;
    display: inline-block;
    width: 34px;
    height: 20px;
}

/* Hide the default checkbox */
.switch input {
    display: none;
}

/* Slider (background and knob) */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: 0.4s;
    border-radius: 34px;
}

.slider:before {
    position: absolute;
    content: '';
    height: 14px;
    width: 14px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: 0.4s;
    border-radius: 50%;
}

/* When checked */
input:checked + .slider {
    background-color: #4caf50;
}

input:checked + .slider:before {
    transform: translateX(14px);
}

/* Container for the details */
.p-3 {
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-top: 10px;
}

/* Styling for the action buttons */
button {
    margin-right: 10px; /* Space between buttons */
}

button i {
    margin-right: 5px; /* Space between icon and button text */
}

/* Button customization */
.btn {
    font-size: 14px;
    font-weight: bold;
    padding: 5px 15px;
    display: inline-flex;
    align-items: center;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

/* Image styling */
.img {
    border-radius: 50%;
    border: 2px solid #ddd;
    margin-top: 10px;
    margin-bottom: 10px;
}

/* Styling for strong labels */
strong {
    display: inline-block;
    width: 120px;
    font-weight: bold;
    color: #333;
}

/* Layout for labels and values */
.p-3 strong {
    margin-bottom: 5px;
}

.p-3 {
    line-height: 1.6;
}

/* Responsive design: Ensure it looks good on smaller screens */
@media (max-width: 768px) {
    .p-3 {
        padding: 15px;
    }

    .btn {
        font-size: 12px;
        padding: 4px 10px;
    }

    .p-3 strong {
        width: auto; /* Allow labels to adjust on smaller screens */
    }
}

  select.form-select {
    min-width: 140px;
  }
  .dataTables_wrapper .dataTables_scroll {
    overflow: auto;
  }
  
  table.dataTable tbody td {
    vertical-align: top;
  }
    table.dataTable tbody tr.shown td.dt-control:before {
        content: "\f068"; /* FontAwesome minus icon */
    }

</style>

    
  </div>
</div>
<!-- / Content -->

    
 
  <!-- Csv file download  -->
  <script>
    function download_csv(csv, filename) {
      var csvFile;
      var downloadLink;

      // CSV FILE
      csvFile = new Blob([csv], { type: "text/csv" });

      // Download link
      downloadLink = document.createElement("a");

      // File name
      downloadLink.download = filename;

      // We have to create a link to the file
      downloadLink.href = window.URL.createObjectURL(csvFile);

      // Make sure that the link is not displayed
      downloadLink.style.display = "none";

      // Add the link to your DOM
      document.body.appendChild(downloadLink);

      // Lanzamos
      downloadLink.click();
    }

    function export_table_to_csv(html, filename) {
      var csv = [];
      var rows = document.querySelectorAll("#Example tr");

      for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");

        for (var j = 0; j < cols.length; j++)
          row.push(cols[j].innerText);

        csv.push(row.join(","));
      }

      // Download CSV
      download_csv(csv.join("\n"), filename);
    }

    document.querySelector("#button").addEventListener("click", function () {
      var html = document.querySelector("#Example").outerHTML;
      export_table_to_csv(html, "UserData.csv");
    });
  </script>

<!-- Toastr CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
// Show toast using jQuery
function showToast(title, message, type) {
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-right",
        timeOut: "3000",
    };

    if (type === 'success') {
        toastr.success(message, title);
    } else if (type === 'error') {
        toastr.error(message, title);
    } else if (type === 'info') {
        toastr.info(message, title);
    } else if (type === 'warning') {
        toastr.warning(message, title);
    }
}


</script>