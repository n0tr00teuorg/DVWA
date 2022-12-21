<div class="body_padded">
	<h1>帮助 - 不安全的验证流程</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>简介</h3>
		<p><?php echo dvwaExternalLinkUrlGet( 'https://zh.wikipedia.org/wiki/验证码', '验证码' ); ?> 是一种区分用户是机器还是人类的程序。
		你可能已经看到了它--在网页注册表格的下面有彩色的图像或扭曲的文字。验证码被许多网站用来防止“机器人”滥用，或通常为产生垃圾邮件而编写的自动化程序。
		没有计算机程序能像人类一样读懂扭曲的文本，所以机器人不能浏览受验证码保护的网站。</p>

		<p>验证码经常被用来保护敏感功能不受自动机器人的影响。敏感功能通常包括账户注册、更改信息、更改密码和发布内容。
		在本例中，验证码保护用户帐户的更改密码功能，这对CSRF和爆破等攻击提供了有限的保护。</p>

		<br /><hr /><br />

		<h3>目标</h3>
		<p>你的目标，由于验证流程不完善，以自动化的方式改变当前用户的密码。</p>

		<br /><hr /><br />

		<h3>低级别</h3>
		<p>这个验证码的问题是，它很容易被绕过。开发者假设所有的用户都会通过第一个页面输入验证码，然后进入下一个用于更新密码的页面。
		通过直接向更改页面提交新密码，用户可以绕过验证码系统。</p>

		<p>The parameters required to complete this challenge in low security would be similar to the following:</p>
		<pre>剧透：<span class="spoiler">?step=2&password_new=password&password_conf=password&Change=Change</span>.</pre>

		<br />

		<h3>中级别</h3>
		<p>The developer has attempted to place state around the session and keep track of whether the user successfully completed the
			CAPTCHA prior to submitting data. Because the state variable (剧透：<span class="spoiler">passed_captcha</span>) is on the client side,
			it can also be manipulated by the attacker like so:</p>
		<pre>剧透：<span class="spoiler">?step=2&password_new=password&password_conf=password&passed_captcha=true&Change=Change</span>.</pre>

		<br />

		<h3>高级别</h3>
		<p>There has been development code left in, which was never removed in production. It is possible to mimic the development values, to allow
			invalid values in be placed into the CAPTCHA field.</p>
		<p>You will need to spoof your user-agent (剧透：<span class="spoiler">reCAPTCHA</span>) as well as use the CAPTCHA value of
			(剧透：<span class="spoiler">hidd3n_valu3</span>) to skip the check.</p>

		<br />

		<h3>不可能级别</h3>
		<p>In the impossible level, the developer has removed all avenues of attack. The process has been simplified so that data and CAPTCHA verification occurs in one
			single step. Alternatively, the developer could have moved the state variable server side (from the medium level), so the user cannot alter it.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://zh.wikipedia.org/wiki/验证码' ); ?></p>
</div>
