<div class="body_padded">
	<h1>帮助 - 跨站请求伪造(CSRF)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>简介</h3>
		<p>CSRF是一种攻击，它迫使终端用户在他们目前已认证的网络应用程序上执行不需要的行动。
		在社会工程的帮助下（如通过电子邮件/聊天工具发送链接），攻击者可以迫使网络应用程序的用户执行攻击者选择的行动。</p>

		<p>如果是普通用户，一个成功的CSRF漏洞可以破坏终端用户的数据和操作。如果目标终端用户是管理员账户，这可能会危及整个网络应用。</p>

		<p>这种攻击也可被称为 “XSRF”，类似于 “跨站脚本（XSS）”，它们经常被一起使用。</p>

		<br /><hr /><br />

		<h3>目标</h3>
		<p>使用CSRF攻击使当前用户改变自己的密码，而他们并不知道自己的行为。</p>

		<br /><hr /><br />

		<h3>低安全级别</h3>
		<p>目前没有任何措施来防止这种攻击。这意味着可以制作一个链接来实现某种行动（在这种情况下，改变当前用户的密码）。
		然后通过一些基本的社会工程，让目标点击该链接（或只是访问某个页面）触发该行动。</p>
		<pre>剧透：<span class="spoiler">?password_new=password&password_conf=password&Change=Change</span>.</pre>

		<br />

		<h3>中安全级别</h3>
		<p>对于中安全级别的挑战，有一个检查，看看最后请求的页面来自哪里。开发者认为，如果它与当前的域相匹配，它一定是来自网络应用程序，所以它可以被信任。</p>
		<p>可能需要链接多个漏洞来利用这个载体，如反射性XSS</p>

		<br />

		<h3>高安全级别</h3>
		<p>在高安全级别，开发者添加了一个 "反跨站请求伪造（CSRF）令牌"。为了绕过这种保护方法，将需要另一个漏洞。</p>
		<pre>剧透：<span class="spoiler">例如，Javascript是在客户端执行的，在浏览器中。</span>.</pre>

		<h4>奖励挑战</h4>
		<p>在这一级别，网站也会接受以下列格式的JSON对象的更改密码请求。</p>
		<pre><code>{"password_new":"a","password_conf":"a","Change":1}</code></pre>
		<p>当这样做的时候，CSRF令牌必须作为一个名为 <code>user-token</code> 的header来传递。。</p>

		<p>下面是一个示例请求：</p>
		<pre><code><span class="spoiler">POST /vulnerabilities/csrf/ HTTP/1.1
Host: dvwa.test
Content-Length: 51
Content-Type: application/json
Cookie: PHPSESSID=0hr9ikmo07thlcvjv3u3pkfeni; security=high
user-token: 026d0caed93471b507ed460ebddbd096

{"password_new":"a","password_conf":"a","Change":1}</span></pre></code>

		<br />

		<h3>不可能级别</h3>
		<p>在这一级别，网站要求用户提供他们的当前密码和新密码。由于攻击者不知道这一点，该网站可以防止CSRF式攻击。</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://owasp.org/www-community/attacks/csrf' ); ?></p>
</div>
