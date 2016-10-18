<?php
/**
 * Template Name: Style Guide
 */

?>
<?php get_header(); ?>

<?php
	$ns = "namespace-";
	$sentence = "The quick brown fox jumps over the lazy dog.";
	$paragraph = "The quick brown fox <strong>jumps over the lazy dog</strong> is an English-language pangram—a phrase that contains all of the letters of the alphabet. It is <em>commonly used for touch-typing</em> practice. It is also used to test typewriters and computer keyboards, show fonts, and other applications involving all of the letters in the English alphabet. Owing to its brevity and coherence, it has become widely known.";
	
?>

<style>
	
	.<?php echo $ns; ?>-uikit {
		max-width: 1000px;
		margin: 20px auto;
		overflow: hidden;
		border: 4px solid #eee;
		border-radius: 4px;
		padding: 20px 10px;
	}
	
	[class*="<?php echo $ns; ?>-uikit__text"] {
		font-family: sans-serif;
		font-weight: 400;
	}
	
	.<?php echo $ns; ?>-uikit__text--page-title {
		font-size: 36px;
		padding: 0 0 20px;
		font-weight: bold;
	}
	
	.<?php echo $ns; ?>-uikit__text--large {
		font-size: 28px;
	}
	
	.<?php echo $ns; ?>-uikit__text--mid {
		font-size: 20px;
	}
	
	.<?php echo $ns; ?>-uikit__text--small {
		font-size: 14px;
	}
	
	.<?php echo $ns; ?>-uikit__col {
		min-height: 100px;
		box-sizing: border-box;
		padding: 10px;
		width: 100%;
	}
	
	.<?php echo $ns; ?>-uikit__section {
		margin-bottom: 40px;
	}
	
	.<?php echo $ns; ?>-uikit__component {
		padding-top: 10px;
	}
	
	.<?php echo $ns; ?>-uikit__component + .<?php echo $ns; ?>-uikit__component {
		padding-top: 30px;
		margin-top: 30px;
		border-top: 1px dashed #ddd;
	}
	
	.<?php echo $ns; ?>-uikit__colors {
		padding: 0;
		margin: 0 0 1em;
		list-style: none;
		overflow: hidden;
	}
	
	.<?php echo $ns; ?>-uikit__color {
		float: left;
		width: 50%;
		box-sizing: border-box;
		padding: 72px 0 0;
		margin-top: 10px;
		margin-bottom: 10px;
		line-height: 20px;
	}
	
	.<?php echo $ns; ?>-uikit__color--label {
		color: #333;
		background: #fff;
		background: rgba(255, 255, 255, .95);
		margin: 0;
		padding: 5px 10px;
		line-height: 16px;
	}
	
	.<?php echo $ns; ?>-uikit__label {
		margin: 0;
		color: #B53234;
		font-weight: 600;
	}
	
	@media screen and ( min-width: 850px ) {
		
		.<?php echo $ns; ?>-uikit__text--large {
		    font-size: 50px;
		    text-align: center;
		    font-weight: 600;
		    padding: 100px 0;
		    background: #454545;
		    color: #fff;
		}
		
		.<?php echo $ns; ?>-uikit__col {
			float: left;
			padding: 0 20px;
		}
		
		.<?php echo $ns; ?>-uikit__w--lg-33 {
			width: 33.333333%;
		}
		
		.<?php echo $ns; ?>-uikit__w--lg-66 {
			width: 66.666666%;
		}
		
		.<?php echo $ns; ?>-uikit__color {
			width: 144px;
			margin-right: 20px;
			border: 1px solid #ddd;
		}
	}
	
</style>


<div class="<?php echo $ns; ?>-uikit">

	
	<div class="<?php echo $ns; ?>-uikit__col">
		
		<h1 class="<?php echo $ns; ?>-uikit__text--page-title"><?php echo the_title(); ?></h1>
		
		<section class="<?php echo $ns; ?>-uikit__section">
			<h2 class="<?php echo $ns; ?>-uikit__text--large">Colors</h2>
			
			<h2 class="<?php echo $ns; ?>-uikit__text--mid">Grays</h2>
			
			<ul class="<?php echo $ns; ?>-uikit__colors">
				
				<li class="<?php echo $ns; ?>-uikit__color" style="background: #595959;">
					<p class="<?php echo $ns; ?>-uikit__color--label <?php echo $ns; ?>-uikit__text--small">#595959</p>
				</li>
				
				<li class="<?php echo $ns; ?>-uikit__color" style="background: #808080;">
					<p class="<?php echo $ns; ?>-uikit__color--label <?php echo $ns; ?>-uikit__text--small">#808080</p>
				</li>
				
				<li class="<?php echo $ns; ?>-uikit__color" style="background: #b2b2b2;">
					<p class="<?php echo $ns; ?>-uikit__color--label <?php echo $ns; ?>-uikit__text--small">#b2b2b2</p>
				</li>
				
				<li class="<?php echo $ns; ?>-uikit__color" style="background: #d6d6d6;">
					<p class="<?php echo $ns; ?>-uikit__color--label <?php echo $ns; ?>-uikit__text--small">#d6d6d6</p>
				</li>
				
				<li class="<?php echo $ns; ?>-uikit__color" style="background: #f7f7f7;">
					<p class="<?php echo $ns; ?>-uikit__color--label <?php echo $ns; ?>-uikit__text--small">#f7f7f7</p>
				</li>
				
			</ul>
			
			<h2 class="<?php echo $ns; ?>-uikit__text--mid">Primary Colors</h2>
			
			<ul class="<?php echo $ns; ?>-uikit__colors">
				<li class="<?php echo $ns; ?>-uikit__color" style="background: #B53234;">
					<p class="<?php echo $ns; ?>-uikit__color--label <?php echo $ns; ?>-uikit__text--small">#B53234</p>
				</li>
				<li class="<?php echo $ns; ?>-uikit__color" style="background: #36b8b8;">
					<p class="<?php echo $ns; ?>-uikit__color--label <?php echo $ns; ?>-uikit__text--small">#36b8b8</p>
				</li>
			</ul>
			
		</section><!--/.<?php echo $ns; ?>-uikit__section-->
		
		
	</div><!--/.<?php echo $ns; ?>-uikit__col-->
	
	<div class="<?php echo $ns; ?>-uikit__col">
		
		<section class="<?php echo $ns; ?>-uikit__section">
			
			<h2 class="<?php echo $ns; ?>-uikit__text--large">Typography</h2>
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">h1</p>
				<h1><?php echo $sentence; ?></h1>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">h2</p>
				<h2><?php echo $sentence; ?></h2>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">h3</p>
				<h3><?php echo $sentence; ?></h3>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">h4</p>
				<h4><?php echo $sentence; ?></h4>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">h5</p>
				<h5><?php echo $sentence; ?></h5>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">h6</p>
				<h6><?php echo $sentence; ?></h6>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">p</p>
				<p><?php echo $paragraph; ?></p>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">ul</p>
				<ul>
					<li>The quick brown</li>
					<li>Fox jumps over</li>
					<li>The lazy</li>
					<li>Dog</li>
				</ul>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">ol</p>
				<ol>
					<li>The quick brown</li>
					<li>Fox jumps over</li>
					<li>The lazy</li>
					<li>Dog</li>
				</ol>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
		</section><!--/.<?php echo $ns; ?>-uikit__section-->


		<section class="<?php echo $ns; ?>-uikit__section">
			
			<h2 class="<?php echo $ns; ?>-uikit__text--large">Base HTML</h2>
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">table</p>
				<table>
					<thead>
						<tr>
							<td>&nbsp;</td>
							<th scope="col">The</th>
							<th scope="col">Quick</th>
							<th scope="col">Brown</th>
							<th scope="col">Fox</th>
						</tr>
					</thead>
					<tbody>
						<th scope="row">Jumps</th>
						<td>Over</td>
						<td>The</td>
						<td>Lazy</td>
						<td>Dog</td>
					</tbody>
				</table>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
			<div class="<?php echo $ns; ?>-uikit__component">
				<p class="<?php echo $ns; ?>-uikit__label <?php echo $ns; ?>-uikit__text--small">figure</p>
				<figure>
					<img src="http://placehold.it/400x200" alt="A square, gray image with 400x200 on it." />
					<figcaption>A placeholder image with a caption.</figcaption>
				</figure>
			</div><!--/.<?php echo $ns; ?>-uikit__component-->
			
		</section><!--/.<?php echo $ns; ?>-uikit__section-->


	</div><!--/.<?php echo $ns; ?>-uikit__col-->
	
</div><!--/.<?php echo $ns; ?>-uikit-->

<?php get_footer(); ?>
