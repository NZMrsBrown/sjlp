<?php 
include('header.php'); 
?>

<body>
	<div id="content-wrapper">
<h1>School Journal Listening Post</h1>
<p class="version"> - version <?php echo $version; ?></p>

<ul class="categories">
	<li>
		<h3>Ready to Read</h3>
		<p>Tracks for Ready to Read books from Magenta through to Gold (2000-2008)</p>
		<img src="/sjlp/images/colourwheel.jpg" alt="Ready to Read" />
		<ul class="child-categories">
			<?php 
			$dir="SchoolJournal-ReadytoRead/";
			$files = array_diff(scandir($dir, 0), array('..', '.')); 
			foreach($files as $file) {
				$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $file);
				
				echo "<li>";
				echo "<a href=\"directory.php?dir=" . $dir . $file . "/&cat=Ready to Read\">" . $title . "</a>";
					
				echo "</li>";
			}
			?>
		</ul>
	</li>
	<li>
		<h3>Junior Journal</h3>
		<p>Tracks for Junior Journals (Curriculum Level 2) 26-41 / 44-49</p>
		<img src="/sjlp/images/JJ-26.jpg" width="150" height="200" alt="Junior Journals" />
		<ul class="child-categories">
			<?php 
			$dir="SchoolJournal-JuniorJournal/";
			$files = array_diff(scandir($dir, 0), array('..', '.')); 
			foreach($files as $file) {
				$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $file);
				echo "<li>";
				echo "<a href=\"directory.php?dir=" . $dir . $file . "/&cat=Junior Journal\">" . $title . "</a>";
					
				echo "</li>";
			}
			?>
		</ul>
	</li>	
	<li>
		<h3>School Journal - Parts 1 &amp; 2</h3>	
		<p>Tracks for Parts 1 and 2 (Curriculum Level 2) 2001-2009</p>
		<img src="/sjlp/images/SJ-Part1 - 09-1-2.jpg" width="150" height="200" alt="School Journal Part 1 and 2" />
		<ul class="child-categories">
			<?php 
			$dir="SchoolJournal-Parts1-2/";
			$files = array_diff(scandir($dir, 0), array('..', '.')); 
			foreach($files as $file) {
				$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $file);
				echo "<li>";
				echo "<a href=\"directory.php?dir=" . $dir . $file . "/&cat=School Journal\">" . $title . "</a>";
					
				echo "</li>";
			}
			?>
		</ul>
	</li>
	<li>
		<h3>School Journal - Level 2</h3>
		<p>Tracks for Level 2 Journals (Curriculum Level 2) from 2011 onwards</p>
		<img src="/sjlp/images/SJ-L2-12-02.jpg" width="150" height="200" alt="School Journal Level 2" />
		<ul class="child-categories">
			<?php 
			$dir="SchoolJournal-Level2/";
			$files = array_diff(scandir($dir, 0), array('..', '.')); 
			foreach($files as $file) {
				$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $file);
				echo "<li>";
				echo "<a href=\"directory.php?dir=" . $dir . $file . "/&cat=School Journal Level 2\">" . $title . "</a>";
					
				echo "</li>";
			}
			?>
		</ul>
	</li>
	<li>
		<h3>School Journal - Parts 3 &amp; 4</h3>
		<p>Tracks for Parts 3 and 4 (Curriculum Level 3) 2001-2009</p>
		<img src="/sjlp/images/SJ-Part3 - 05-3-2.jpg" width="150" height="200" alt="School Journal Part 3 and 4" />
		<ul class="child-categories">
			<?php 
			$dir="SchoolJournal-Parts3-4/";
			$files = array_diff(scandir($dir, 0), array('..', '.')); 
			foreach($files as $file) {
				$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $file);
				echo "<li>";
				echo "<a href=\"directory.php?dir=" . $dir . $file . "/&cat=School Journal\">" . $title . "</a>";
					
				echo "</li>";
			}
			?>
		</ul>
	</li>
	<li>
		<h3>Story Library</h3>
		<p>Stories suitable for upper primary</p>
		<img src="/sjlp/images/SJSL-5 - Tagged.jpg" width="150" height="200" alt="School Journal Story Library" />
		<ul class="child-categories">
			<?php 
			$dir="SchoolJournal-StoryLibrary/";
			$files = array_diff(scandir($dir, 0), array('..', '.')); 
			foreach($files as $file) {
				$title = preg_replace('/(?<!\ )[A-Z]/', ' $0', $file);
				echo "<li>";
				echo "<a href=\"directory.php?dir=" . $dir . $file . "&cat=Story Library\">" . $title . "</a>";
					
				echo "</li>";
			}
			?>
		</ul>
	</li>
</ul>

<?php 
include('footer.php'); 
?>