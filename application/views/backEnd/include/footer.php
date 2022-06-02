<!-- Main Footer -->
</div>
</div>
</div>
<footer class="main-footer">
	<!-- <div class="float-right d-none d-sm-inline">
		Anything you want
	</div> -->
	<!-- Default to the left -->
	<strong>Copyright &copy; 2022 <a href="<?= base_url('admin') ?>" class="text-secondary  ">Dhewi Lestari</a>.</strong> All rights reserved.
</footer>
</div>

<!-- Data Tables -->
<script>
	$(function() {
		$("#data_tables").DataTable({
			"responsive": true,
			"autoWidth": false,
		});
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>

<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function() {
			$(this).remove();
		});
	}, 3000)
</script>
</body>

</html>