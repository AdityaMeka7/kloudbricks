<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl">
            <div
              class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
              <div>
                Copyright ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                | IGien. | All Right Reserved
              </div>
              <!-- <div class="d-none d-lg-inline-block">
                  <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                    target="_blank">License</a>
                  <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More
                    Themes</a>

                  <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank"
                    class="footer-link me-4">Documentation</a>

                  <a href="https://pixinvent.ticksy.com/" target="_blank"
                    class="footer-link d-none d-sm-inline-block">Support</a>
                </div> -->
            </div>
          </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>

  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js admin_assets/vendor/js/core.js -->



  <!-- //Data Table -->
 <!-- <script>
    new DataTable('#example', {
      scrollX: true
    });
  </script>
  
  <script>
    new DataTable('#example1', {
      scrollX: true
    });
  </script>-->


  <!-- PDF Generator  -->
  <!--<script type="text/javascript">
    function generate() {
      var doc = new jsPDF('p', 'pt', 'letter');
      var htmlstring = '';
      var tempVarToCheckPageHeight = 0;
      var pageHeight = 0;
      pageHeight = doc.internal.pageSize.height;
      specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function (element, renderer) {
          // true = "handled elsewhere, bypass text extraction"  
          return true
        }
      };
      margins = {
        top: 150,
        bottom: 60,
        left: 20,
        right: 20,
        width: 900
      };
      var y = 20;

      doc.setLineWidth(2);
      doc.text(250, y = y + 30, "User Data");
      doc.autoTable({
        html: '#example',
        startY: 70,
        theme: 'grid',
        columnStyles: {
          0: {
            cellWidth: 20,
          },

        },
        styles: {
          minCellHeight: 30
        }
      })
      doc.save('User Data');
    }  
  </script>-->



  <!-- Csv file download  -->
  <!--<script>
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
      var rows = document.querySelectorAll("#example tr");

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
      var html = document.querySelector("#example").outerHTML;
      export_table_to_csv(html, "UserData.csv");
    });
  </script>-->

  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/js/bootstrap.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/node-waves/node-waves.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/hammer/hammer.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/i18n/i18n.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/moment/moment.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/select2/select2.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/cleavejs/cleave.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/cleavejs/cleave-phone.js"></script>

<script src="<?php echo base_url();?>admin_assets/admin/main/js/extended-ui-sweetalert2.js"></script>
<script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/sweetalert2/sweetalert2.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> -->


  <!-- Main JS -->
  <script src="<?php echo base_url();?>admin_assets/admin/main/vendor/libs/select2/select2.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/js/main.js"></script>

  <!-- Page JS -->
  <script src="<?php echo base_url();?>admin_assets/admin/main/js/app-user-list.js"></script>
  <!--<script src="<?php echo base_url();?>admin_assets/admin/main/js/forms-selects.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/js/forms-tagify.js"></script>
  <script src="<?php echo base_url();?>admin_assets/admin/main/js/forms-typeahead.js"></script>-->
  
</body>

</html>