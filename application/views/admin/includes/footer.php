<?php $d  = &get_instance();  ?>

<footer class="main-footer">
    <div class="footer-left">
        <a href="5thdt.com">Crafted by 5TH Dimension Technologies</a>
    </div>
    <div class="footer-right">
    </div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<script src="<?php echo base_url() ?>adminasstes/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<script src="<?php echo base_url() ?>adminasstes/js/page/index.js"></script>
<!-- Template JS File -->
<script src="<?php echo base_url() ?>adminasstes/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="<?php echo base_url() ?>adminasstes/js/custom.js"></script>
  <!-- JS Libraies -->
  <script src="<?php echo base_url() ?>adminasstes/bundles/summernote/summernote-bs4.js"></script>
      <script src="<?php echo base_url() ?>adminasstes/bundles/dropzonejs/min/dropzone.min.js"></script>
      <script src="<?php echo base_url() ?>adminasstes/bundles/jquery-selectric/jquery.selectric.min.js"></script>
      <script src="<?php echo base_url() ?>adminasstes/js/page/multiple-upload.js"></script>
      <script src="<?php echo base_url() ?>adminasstes/js/page/widget-data.js"></script> 
      <script src="<?php echo base_url() ?>adminasstes/bundles/lightgallery/dist/js/lightgallery-all.js"></script>
	  <script src="<?php echo base_url() ?>adminasstes/js/page/light-gallery.js"></script>
	  <script src="<?php echo base_url() ?>adminasstes/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
      <script src="<?php echo base_url() ?>adminasstes/js/page/chat.js"></script> 
      <script src="<?php echo base_url() ?>adminasstes/js/page/portfolio.js"></script>
      <script src="<?php echo base_url() ?>adminasstes/pnotify/pnotify.custom.min.js"></script>
</body>

</html>

</html>
<script type="text/javascript">

<?php    
if($d->session->flashdata("msg")){
?>
    
$(function(){

new PNotify({
    title: '<?php echo $d->session->flashdata("title");?>',
    text: '<?php echo $d->session->flashdata("msg");?>',
    type:'<?php echo $d->session->flashdata("type");?>',
    animate: {
        animate: true,
        in_class: 'bounceInDown',
        out_class: 'fadeOut'
    }
});     
});

<?php
    }
    ?>
</script>