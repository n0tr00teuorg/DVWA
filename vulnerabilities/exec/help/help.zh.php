<div class="body_padded">
	<h1>帮助 - 命令注入</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>简介</h3>
		<p>命令注入攻击的目的是在脆弱的应用程序中注入和执行攻击者指定的命令。
			在这样的情况下，执行不需要的系统命令的应用程序，就像一个伪系统外壳，攻击者可以作为任何授权的系统用户使用它。然而，命令的执行具有与网络服务相同的权限和环境。</p>

		<p>由于缺乏正确的输入数据验证，在大多数情况下，命令注入攻击是可能的，这可以被攻击者所操纵 (表单, cookies, HTTP头 等)。</p>

		<p>语法和命令在操作系统（OS）之间可能有所不同，如Linux和Windows，这取决于它们所需的行动。</p>

		<p>这种攻击也可能被称为 “远程命令执行（RCE）”。</p>

		<br /><hr /><br />

		<h3>目标</h3>
		<p>通过远程命令执行，远程找出操作系统上网络服务的用户，以及机器的主机名。</p>

		<br /><hr /><br />

		<h3>低安全级别</h3>
		<p>这允许直接输入一个或 <u>多个PHP功能</u>中，在操作系统上执行命令。有可能逃出所设计的命令并执行无意的行动。</p>
		<p>这可以通过在请求中加入 “一旦命令成功执行，请运行此命令 ”来实现。
		<pre>剧透：<span class="spoiler">要添加 “&&”</span>。 例如： <span class="spoiler">127.0.0.1 && dir</span>。</pre>

		<br />

		<h3>中安全级别</h3>
		<p>开发者已经阅读了一些关于命令注入的问题，并放置了各种模式补丁来过滤输入。然而，这还不够。</p>
		<p>其他各种系统语法可以用来突破所需的命令。</p>
		<pre>剧透：<span class="spoiler">例如，后端是ping命令</span>。</pre>

		<br />

		<h3>高安全级别</h3>
		<p>在高安全级别中，开发人员回到绘图板上，放入更多的模式来匹配。但即使这样也是不够的。</p>
		<p>开发者要么是在过滤器上犯了一个小小的错误，并认为某条PHP命令可以把他们从这个错误中解救出来。</p>
		<pre>剧透：<span class="spoiler"><?php echo dvwaExternalLinkUrlGet( 'https://secure.php.net/manual/zh/function.trim.php', 'trim()' ); ?>
			删除所有前导和尾部的空格，真的吗？</span></pre>

		<br />

		<h3>不可能级别</h3>
		<p>在不可能级别中，挑战被重新编写，只允许一个非常严格的输入。如果这不符合要求，没有产生某种结果，
			将不被允许执行。这不是 "黑名单 "过滤（允许任何输入并删除不需要的），而是使用 "白名单"（只允许某些值）。</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/attacks/Command_Injection' ); ?></p>
</div>
