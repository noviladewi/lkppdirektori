  </div><!--container-->
      		</div><!--wrap-->
	
	<div class="quote">
      		  <h1>Pengadaan yang kredibel sejahterakan bangsa</h1>
	</div>
     

      <footer>
        <div class="row">
        	<div class="span5">
        	<h5>Link LKPP</h5>
            		<hr>
                <p>
                    <ul>
                    	<li><a href="#">LKPP</a></li>
                    	<li><a href="#">INAPROC</a></li>
						<li><a href="#">LPSE LKPP</a></li>
						<li><a href="#">SPP</a></li>
                    </ul>
     			</p>
            </div>
            <div class="span5">
            	<h5>Ujian Pengadaan</h5>
            		<hr>
                    <p>
                    	<ul>
                    	<li><a href="#">LKPP</a></li>
                    	<li><a href="#">INAPROC</a></li>
						<li><a href="#">Log Book Surveillance</a></li>
						</ul>
                    </p>
            </div>
            <div class="span4">
            		<h5>Copyright</h5>
            		<hr>
                    <p>© 2013 — LKPP <br/>Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah<br/> Republik Indonesia</p>
            </div>	
        </div>
      </footer>
	<script src="<?php echo base_url();?>application/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		  $(document).ready(function(){
          var idPage = $(".container");
          if (idPage.children("#landing-page").length > 0) {
              $(".landing-page").addClass("active");
          };
          if (idPage.children("#information").length > 0) {
              $(".information").addClass("active");
          };
          if (idPage.children("#directory").length > 0) {
              $(".vendor").addClass("active");
          };
          if (idPage.children("#contact").length > 0) {
              $(".contact").addClass("active");
          };
      });
	</script>
  </body>
</html>