<div class="wrap container" role="document">
  	<div class="content row">
		<?php if (have_rows('boards')): ?>
			<table class="boards-table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Specs</th>
						<th>Link</th>
						<th>With</th>
					</tr>
				</thead>
				<tbody>
					<?php while(have_rows('boards')) : the_row(); ?>
						<tr>
							<td><?php echo get_sub_field('name'); ?></td>
							<td><p><?php echo get_sub_field('specs'); ?></p></td>
							<td><a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('link'); ?></a></td>
							<td><?php echo get_sub_field('with'); ?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
			
		<?php endif; ?>
	</div>
</div>