<div class="body_padded">
	<h1>帮助 - 内容安全策略（CSP）绕过</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>简介</h3>
		<p>内容安全策略（CSP）是用来定义脚本和其他资源可以从哪里加载或执行。本模块将指导你如何根据开发人员的常见错误绕过该策略。</p>
		<p>这些漏洞都不是CSP的实际漏洞，而是其实现方式的漏洞。</p>

		<br /><hr /><br />

		<h3>目标</h3>
		<p>绕过内容安全策略（CSP）并页面中执行JavaScript。</p>

		<br /><hr /><br />

		<h3>低级别</h3>
		<p>检查策略，找到所有可用于托管外部脚本文件的来源。</p>
		<pre>剧透：<span class="spoiler">脚本可以从Pastebin或Toptal（以前是Hastebin）中包含，尝试在那里存储一些JavaScript，然后将其加载进去。</span></pre>

		<br />

		<h3>中级别</h3>
		<p>CSP策略试图使用nonce来防止攻击者添加内联脚本。</p>
		<pre>剧透：<span class="spoiler">检查nonce，看看它是如何变化（或不变化）的。</span></pre>

		<br />

		<h3>高级别</h3>
		<p>页面对source/jsonp.php进行JSONP调用，传递回调函数的名称，你需要修改jsonp.php脚本来改变回调函数。</p>
		<pre>剧透：<span class="spoiler">页面上的JavaScript将执行页面返回的任何内容，将此改为你自己的代码并执行该代码。</span></pre>

		<br />

		<h3>不可能级别</h3>
		<p>这一级别是上一级别的更新，JSONP调用的回调函数是硬编码的，CSP策略被锁定为只允许外部脚本。</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://content-security-policy.com/', "Content Security Policy Reference" ); ?></p>
	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://developer.mozilla.org/zh-CN/docs/Web/HTTP/CSP', "Mozilla Developer Network - 内容安全策略: script-src"); ?></p>
	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://blog.mozilla.org/security/2014/10/04/csp-for-the-web-we-have/', "Mozilla Security Blog - CSP for the web we have" ); ?></p>
</div>
