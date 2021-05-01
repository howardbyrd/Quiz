<!DOCTYPE html>
<html>
<head>
	<title>QUiz: Result</title>
</head>
<body>
	<?php if ($_POST['year']=='1929'): ?>
		<p>1. Yes, that is correct!</p>
		<?php else: ?>
			<p>1. You answered <?php echo $_POST['year'] ?>. The correct answer is 1929.</p>
		<?php endif; ?>
		<?php if (strtolower($_POST['town'])=='hamden'): ?>
			<p>2. Yes, that is correct!</p>
			<?php else: ?>
				<p>2. You answered <?php echo $_POST['town'] ?>/ The correct answer is Hamden.</p>
			<?php endif; ?>
			<?php if ($_POST['medicalschool']=='Frank Netter'): ?>
				<p>3. Yes, that is correct!</p>
				<?php else: ?>
				<p>3. You answered <?php echo $_POST['medicalschool'] ?>.
				The correct answer is Frank Netter.</p>
			<?php endif; ?>
			<?php if ($_POST['library']=='no'): ?>
				<p>4. Yes, that is correct!</p>
				<?php else: ?>
					<p>4. You answered <?php echo $_POST['library'] ?>. The correct answer is no.</p>
				<?php endif; ?>
				<?php if (isset($_POST['finance']) && !isset($_POST['psychology']) && isset($_POST['cis'])
			): ?>
			<p>5. Yes, that is correct!</p>
			<?php else: ?>
				<p>5. The correct answer is Finance and CIS.</p>
			<?php endif; ?>
			<?php if (strtolower($_POST['crescent'])=='york hill'): ?>
				<p>6. Yes, that is correct!</p>
				<?php else: ?>
				<p>6. You answered <?php echo $_POST['crescent'] ?>/ The correct answer is York Hill.</p>
			<?php endif; ?>
			<?php if ($_POST['compscience']=='School of Engineering'): ?>
				<p>7. Yes, that is correct!</p>
				<?php else: ?>
				<p>7. You answered <?php echo $_POST['compscience'] ?>.
				The correct answer is School of Engineering.</p>
			<?php endif; ?>
			<?php if ($_POST['masters']=='yes'): ?>
				<p>8. Yes, that is correct!</p>
				<?php else: ?>
					<p>8. You answered <?php echo $_POST['masters'] ?>. The correct answer is yes.</p>
				<?php endif; ?>
				<?php if (isset($_POST['BA CS']) && !isset($_POST['BS CS']) && isset($_POST['BS CIS']) && !isset($_POST['BS SE'])
			): ?>
			<p>9. Yes, that is correct!</p>
			<?php else: ?>
				<p>9. The correct answer is Bachelor's of Arts Computer Science and Bachelor's of Science Computer Information Systems.</p>
			<?php endif; ?>
</body>
</html>