<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>

<div>
	<?php echo __d('webzash', 'Application version : %s', Configure::read('Webzash.AppVersion')); ?>
</div>
<div>
	<?php echo __d('webzash', 'Application database version : %s', Configure::read('Webzash.AppDatabaseVersion')) ; ?>
</div>
<div>
	<?php echo __d('webzash', 'PHP version : %s', phpversion()) ; ?>
</div>
<div>
	<?php
		if (extension_loaded('bcmath')) {
			echo __d('webzash', 'PHP BC Math library : Yes');
		} else {
			echo '<span class="error-text">';
			echo __d('webzash', 'PHP BC Math library : No');
			echo '</span>';
		}
	?>
</div>
<div>
	<?php
		if (method_exists('SQLite3', 'version')) {
			echo __d('webzash', 'PHP Sqlite3 library : %s', SQLite3::version());
		}
	?>
</div>
<div>
	<?php
		echo __d('webzash', 'CakePHP version : %s', Configure::version());
	?>
</div>
