<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Add Job Type</h4>
              
  <div class="row"><div class="col-md-6">
      <div class="card mb-4">
          <form method="post" action="#" id="inputform" enctype="multipart/form-data">
        <div class="card-body">
            
            
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name *</label>
            <input
              type="text"
              class="form-control"
              id="exampleFormControlInput1"
              placeholder="Name" name="name" required/>
          </div>

          
        </div>
      </div>
       <button type="button" name="sub" value="sub" class="btn btn-success" id="saveBtn">Submit</button>
      </form>
      <a href="<?=base_url('dashboard/admin/job_types')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div></div>
</div>



<script>
$(document).ready(function () {
    $('#saveBtn').on('click', function () {
        let isValid = true;

        // Validate required fields
        $('#inputform [required]').each(function () {
            let value = $(this).val();
            if (Array.isArray(value)) {
                value = value.join('');
            }
            value = value ? value.toString().trim() : '';
            const fieldName = $(this).attr('name');

            if (value === '') {
                isValid = false;
                $(this).addClass('is-invalid');
                showToast('Error', `${$(this).attr('placeholder')} is required`, 'error');
                return;
            }

            // Name validation
            if (fieldName === 'name') {
                const namePattern = /^[A-Za-z0-9][A-Za-z0-9\s'.-]{2,}$/;
                if (!namePattern.test(value)) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                    showToast('Error', 'Name must not start with a special character and must be at least 3 characters. Allowed: letters, numbers, spaces, apostrophes, hyphens, dots.', 'error');
                    return;
                }
            }
            

            $(this).removeClass('is-invalid').addClass('is-valid');
        });
        

        if (isValid) {
            const form = $('#inputform')[0];
            const formData = new FormData(form);

            $.ajax({
                url: '<?= base_url("dashboard/admin/insert_job_type"); ?>',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    const res = JSON.parse(response);
                    if (res.success) {
                        showToast('Success', res.message, 'success');
                        $('#inputform')[0].reset();
                        $('.form-control').removeClass('is-valid');
                        window.location.href = '<?= base_url("dashboard/admin/job_types") ?>';
                    } else {
                        showToast('Error', res.message, 'error');
                    }
                },
                error: function () {
                    showToast('Error', 'An unexpected error occurred.', 'error');
                },
            });
        } else {
            $('html, body').animate({
                scrollTop: $('.is-invalid:first').offset().top - 100,
            }, 500);
        }
    });

    // Real-time validation feedback
    $('#inputform .form-control').on('input change', function () {
        const value = $(this).val().trim();
        const fieldName = $(this).attr('name');
        const consultType = $('#consult_type').val();
        let isFieldValid = true;
    
        switch (fieldName) {
            case 'name':
                // Must start with alphanumeric, min 3 chars
                isFieldValid = /^[A-Za-z0-9][A-Za-z0-9\s'.-]{2,}$/.test(value);
                break;
    
            default:
                // By default → must not be empty
                isFieldValid = value !== '';
        }
    
        // Add classes
        if (isFieldValid) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        } else {
            $(this).removeClass('is-valid').addClass('is-invalid');
        }
    });

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
            