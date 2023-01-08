<div class="body_padded">
	<h1>帮助 - 客户端JavaScript</h1>

	<div id="code" style="padding: 3px; border: 2px #C0C0C0 solid;>">
		<h3>简介</h3>
		<p>本节中的攻击旨在帮助你了解JavaScript在浏览器中的使用情况，以及它是如何被操纵的。这些攻击可以通过分析网络流量来进行，但这并不是重点，而且可能会更难。</p>

		<hr />
		
		<h3>目标</h3>
		<p>只需提交 “success” 就能赢得这一关。显然，这并不容易，每个关卡都实施了不同的保护机制，必须对页面中的JavaScript进行分析，然后进行操作以绕过保护措施。</p>

		<hr />
		<h3>低安全级别</h3>
		<p>所有的JavaScript都包含在页面中。阅读源代码，找出用于生成与短语匹配的标记的函数，然后手动调用该函数。</p>
		<pre>剧透：<span class="spoiler">将 phrase 值改为 uccess，然后使用函数generate_token()来更新令牌.</span></pre>

		<p><br /></p>

		<h3>中安全级别</h3>
		<p>
			JavaScript已经被分割成自己的文件，然后被最小化。你需要查看所含文件的源代码，然后弄清楚它在做什么。Firefox和Chrome都有一个漂亮的打印功能，它试图扭转压缩，并以可读的方式显示代码。
		</p>
		<pre>剧透：<span class="spoiler">该文件使用setTimeout函数来运行生成令牌的do_elsesomething函数。</span></pre>

		<p><br /></p>

		<h3>高安全级别</h3>
		<p>
			这些JavaScript已经被至少一个引擎混淆了。你需要仔细研究这些代码，找出哪些是有用的，哪些是垃圾，哪些是完成任务所需的。
		</p>
		<pre>剧透：<span class="spoiler">如果需要帮助的话，我们使用了两个打包器，第一个是来自于<a href="https://www.danstools.com/javascript-obfuscate/index.php">Dan's Tools</a> 和第二个是 <a href="https://javascriptobfuscator.herokuapp.com/">JavaScript Obfuscator Tool</a>。/span></pre>
		<pre>剧透2: <span class="spoiler">这个 <a href="http://deobfuscatejavascript.com/">deobfuscate javascript</a>去混淆工具对这段代码似乎效果最好。/span></pre>
		<pre>剧透3: <span class="spoiler">这是一种方法......通过一个去混淆的应用程序运行被混淆的JS，拦截被混淆的JS的响应，然后换入可读版本。梳理一下流程，你会发现有三个函数需要依次调用。在正确的时间用正确的参数调用这些函数。</pre>

		<p><br /></p>

		<h3>不可能级别</h3>
		<p>你永远不能相信用户，必须假设任何发给用户的代码都可以被操纵或绕过，因此没有不可能级别。</p>

	</div>

	<br />

	<p>参考：/p>
	<ul>
		<li><?php echo dvwaExternalLinkUrlGet( 'https://www.youtube.com/watch?v=8UqHCrGdxOM' )?></li>
		<li><?php echo dvwaExternalLinkUrlGet( 'https://www.w3schools.com/js/' )?></li>
		<li><?php echo dvwaExternalLinkUrlGet( 'https://www.youtube.com/watch?v=cs7EQdWO5o0&index=17&list=WL' )?></li>
		<li><?php echo dvwaExternalLinkUrlGet( 'https://www.youtube.com/playlist?list=PLC9K7uaDMdAUNktlDTxsmj6rJBf4Q9TR5' )?></li>
	</ul>
</div>
