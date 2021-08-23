</body>
</html>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>

<script>
    $(document).ready(function() {
        <?php if($this->session->userdata('role') == 2){ ?>
            $('.hide-class').hide();
        <?php }?>
    });
    
</script>