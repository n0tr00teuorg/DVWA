<div class="body_padded">
	<h1>帮助--SQL注入</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>简介</h3>
		<p>SQL注入攻击包括通过从客户端到应用程序的输入数据插入或 “注入” 一个SQL查询。
			一个成功的SQL注入漏洞可以从数据库中读取敏感数据，修改数据库数据（插入/更新/删除），在数据库上执行管理操作（如关闭DBMS），恢复DBMS文件系统上存在的特定文件的内容（load_file），并在某些情况下向操作系统发布命令。</p>

		<p>SQL注入攻击是一种注入式攻击，在这种攻击中，SQL命令被注入数据平面输入，以实现预定义SQL命令的执行。</p>

		<p>这种攻击也可能被称为 “SQLi”。</p>

		<br /><hr /><br />

		<h3>目标</h3>
		<p>数据库里有5个用户，ID从1到5。你的任务是......通过SQLi窃取他们的密码。</p>

		<br /><hr /><br />

		<h3>低安全级别</h3>
		<p>该SQL查询使用由攻击者直接控制的RAW输入。他们所需要做的就是转义查询，然后他们就能执行他们希望的任何SQL查询。</p>
		<pre>剧透：<span class="spoiler">?id=a' UNION SELECT "text1","text2";-- -&Submit=Submit</span>。</pre>

		<br />

		<h3>中安全级别</h3>
		<p>中安全级别使用一种SQL注入保护，其功能是
			“<?php echo dvwaExternalLinkUrlGet( 'https://secure.php.net/manual/zh/function.mysql-real-escape-string.php', 'mysql_real_escape_string()' ); ?>”。
			然而，由于SQL查询的参数周围没有引号，这并不能完全保护查询不被更改。</p>

		<p>文本框已被替换为一个预定义的下拉列表，并使用POST提交表单。</p>
		<pre>剧透：<span class="spoiler">?id=a UNION SELECT 1,2;-- -&Submit=Submit</span>。</pre>

		<br />

		<h3>高安全级别</h3>
		<p>这与低级别的非常相似，然而这一次攻击者是以不同的方式输入数值的。
			输入值是通过会话变量使用另一个页面转移到脆弱的查询，而不是直接的GET请求。</p>
		<pre>剧透：<span class="spoiler">ID: a' UNION SELECT "text1","text2";-- -&Submit=Submit</span>。</pre>

		<br />

		<h3>不可能级别</h3>
		<p>现在的查询是参数化的查询（而不是动态的）。这意味着查询是由开发者定义的，并区分了哪些部分是代码，其余部分是数据。</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>参考：<?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/SQL_Injection' ); ?></p>
</div>
