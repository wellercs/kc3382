<div id="maincontent">
	<div id="kc-officers-tabs">
		<ul>
			<li>
				<a href="#kc-officers-present-tab" id="kc-officers-present-link">
					Present
				</a>
			</li>
			<li>
				<a href="#kc-officers-2008-2009-tab" id="kc-officers-2008-2009-link">
					2008-2009
				</a>
			</li>
		</ul>
		<div id="kc-officers-present-tab">
			<?php
				require ("app/officers/officers-present.php");
			?>
		</div>
		<div id="kc-officers-2008-2009-tab">
			<?php
				require ("app/officers/officers-2008-2009.php");
			?>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#kc-officers-tabs').tabs({
				selected: 0
			});
		});
	</script>
</div>