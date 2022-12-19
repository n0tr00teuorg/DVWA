<div class="body_padded">
	<h1>帮助 - 不安全的验证码</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>简介</h3>
		<p><?php echo dvwaExternalLinkUrlGet( 'https://zh.wikipedia.org/wiki/验证码', '验证码' ); ?> 是一种区分用户是机器还是人类的程序。
		你可能已经看到了它--在网页注册表格的下面有彩色的图像或扭曲的文字。验证码被许多网站用来防止“机器人”滥用，或通常为产生垃圾邮件而编写的自动化程序。
		没有计算机程序能像人类一样读懂扭曲的文本，所以机器人不能浏览受验证码保护的网站。</p>

		<p>CAPTCHAs are often used to protect sensitive functionality from automated bots. Such functionality typically includes user registration and changes,
			password changes, and posting content. In this example, the CAPTCHA is guarding the change password functionality for the user account. This provides
			limited protection from CSRF attacks as well as automated bot guessing.</p>

		<br /><hr /><br />

		<h3>目标</h3>
		<p>你的目标，由于验证码系统不完善，以自动化的方式改变当前用户的密码。</p>

		<br /><hr /><br />

		<h3>Low Level</h3>
		<p>The issue with this CAPTCHA is that it is easily bypassed. The developer has made the assumption that all users will progress through screen 1, complete the CAPTCHA, and then
			move on to the next screen where the password is actually updated. By submitting the new password directly to the change page, the user may bypass the CAPTCHA system.</p>

		<p>The parameters required to complete this challenge in low security would be similar to the following:</p>
		<pre>Spoiler: <span class="spoiler">?step=2&password_new=password&password_conf=password&Change=Change</span>.</pre>

		<br />

		<h3>Medium Level</h3>
		<p>The developer has attempted to place state around the session and keep track of whether the user successfully completed the
			CAPTCHA prior to submitting data. Because the state variable (Spoiler: <span class="spoiler">passed_captcha</span>) is on the client side,
			it can also be manipulated by the attacker like so:</p>
		<pre>Spoiler: <span class="spoiler">?step=2&password_new=password&password_conf=password&passed_captcha=true&Change=Change</span>.</pre>

		<br />

		<h3>High Level</h3>
		<p>There has been development code left in, which was never removed in production. It is possible to mimic the development values, to allow
			invalid values in be placed into the CAPTCHA field.</p>
		<p>You will need to spoof your user-agent (Spoiler: <span class="spoiler">reCAPTCHA</span>) as well as use the CAPTCHA value of
			(Spoiler: <span class="spoiler">hidd3n_valu3</span>) to skip the check.</p>

		<br />

		<h3>Impossible Level</h3>
		<p>In the impossible level, the developer has removed all avenues of attack. The process has been simplified so that data and CAPTCHA verification occurs in one
			single step. Alternatively, the developer could have moved the state variable server side (from the medium level), so the user cannot alter it.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/CAPTCHA' ); ?></p>
</div>
