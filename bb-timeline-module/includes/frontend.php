<?php if( $settings->timeline_layout != 'both' ) { ?> 
<!-- If Left Or Right -->
<div class="bb-tmtimeline-container bb-timeline-<?php echo $settings->timeline_layout; ?>">
	<ul class="bb-tmtimeline">
		<?php 
		for($i=0; $i < count($settings->timeline1); $i++) :
			if(!is_object($settings->timeline1[$i])) {
				continue;
			}
			$timeline1 = $settings->timeline1[$i];
		?>
		<li class="tm-timeline-li-<?php echo $i; ?>">
			<!--date-->
			<div class="bb-tmtime bb-tmtime-<?php echo $timeline1->date_show_hide; ?>">
				<?php $current_date = $timeline1->year .'-'. $timeline1->month .'-'. $timeline1->day; ?>
				<span class="feed-date">
					<?php echo date($timeline1->date_format, strtotime($current_date)); ?>
				</span> 
			</div>
			<!--/.date-->

			<!--Timline-Content-->
			<div class="bb-tmlabel <?php echo ( $settings->tm_animation_repeat == '0' ) ? 'infinite' : ''; ?>">

			<!--icon-->
			<?php if( $timeline1->timeline_img_icon_type == 'icon' ){ ?>  
			<div class="bb-tmicon">
				<i class="<?php echo $timeline1->timeline_icon_style; ?>"></i>
			</div>
			<!--/.icon-->
		    <?php } else if($timeline1->timeline_img_icon_type == 'photo'){ ?>
		    <!--image-->
			<div class="bb-tmicon">
			    <?php if( $timeline1->photo != '' && isset( $timeline1->photo_src) ){ ?> 
				   <img src="<?php echo $timeline1->photo_src; ?>"/>
				<?php } ?>
			</div>
			<!--/.image-->
			<?php } ?>
			

			<!--Timline-Title-->
			<<?php echo $settings->tmtitle_tag; ?> class="bb-timline-title bb-tm-title-<?php echo $settings->timeline_title_align; ?>">
				<?php echo $timeline1->timeline_title; ?>
			</<?php echo $settings->tmtitle_tag; ?>>
			<!--/.Timline-Title-->
			<div class="tm-title-border-bottom">
				<span class="bb-tmlabel-border-bottom"></span>
			</div>
			<!--Timline-description-->
			<div class="bb-timline-dec"><?php echo $timeline1->timeline_editor; ?></div>
			<!--/.Timline-description-->

			</div>
			<!--/.Timline-Content-->
		</li>
		<?php endfor; ?>
	</ul>
</div>

<?php } else { ?> 
<!-- If both -->
<div class="bb-tmtimeline-container bb-timeline-<?php echo $settings->timeline_layout; ?>">
	<ul class="bb-tmtimeline">
		<?php 
		for($i=0; $i < count($settings->timeline1); $i++) :
			if(!is_object($settings->timeline1[$i])) {
				continue;
			}
			$timeline1 = $settings->timeline1[$i];
		?>
		<li class="tm-timeline-li-<?php echo $i; ?>">
			<!--date-->
			<div class="bb-tmtime bb-tmtime-<?php echo $timeline1->date_show_hide; ?>">
				<?php $current_date = $timeline1->year .'-'. $timeline1->month .'-'. $timeline1->day; ?>
				<span class="feed-date">
					<?php echo date($timeline1->date_format, strtotime($current_date)); ?>
				</span> 
			</div>
			<!--/.date-->

			<!--icon-->
			<?php if( $timeline1->timeline_img_icon_type == 'icon' ){ ?>  
			<div class="bb-tmicon">
				<i class="<?php echo $timeline1->timeline_icon_style; ?>"></i>
			</div>
			<!--/.icon-->
		    <?php } else if($timeline1->timeline_img_icon_type == 'photo'){ ?>
		    <!--image-->
			<div class="bb-tmicon">
			    <?php if( $timeline1->photo != '' && isset( $timeline1->photo_src) ){ ?> 
				   <img src="<?php echo $timeline1->photo_src; ?>"/>
				<?php } ?>
			</div>
			<!--/.image-->
			<?php } ?>

			<!--Timline-Content-->
			<div class="bb-tmlabel <?php echo ( $settings->tm_animation_repeat == '0' ) ? 'infinite' : ''; ?>">

			<!--Timline-Title-->
			<<?php echo $settings->tmtitle_tag; ?> class="bb-timline-title bb-tm-title-<?php echo $settings->timeline_title_align; ?>">
				<?php echo $timeline1->timeline_title; ?>
			</<?php echo $settings->tmtitle_tag; ?>>
			<!--/.Timline-Title-->
			<div class="tm-title-border-bottom">
				<span class="bb-tmlabel-border-bottom"></span>
			</div>
			<!--Timline-description-->
			<div class="bb-timline-dec"><?php echo $timeline1->timeline_editor; ?></div>
			<!--/.Timline-description-->

			</div>
			<!--/.Timline-Content-->
		</li>
		<?php endfor; ?>
	</ul>
</div>

<?php } ?>