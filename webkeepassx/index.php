<html>
	<head>
		<link rel="stylesheet" href="../include/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../easyui/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="../easyui/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="../include/common.css">
        <script type="text/javascript" src="../easyui/jquery.min.js"></script>
        <script type="text/javascript" src="../easyui/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="./webkeepassx.js"></script>
		<script type="text/javascript" src="./jquery.zclip.js"></script>

	</head>

	<body>

		<div class="easyui-layout" data-options="fit:true">
			<div data-options="region:'north',split:true" style="height:33px;border:0px;">
				<a style="float:right;margin:2px;" href="#copy" id="username" class="btn btn-primary btn-xs active" role="button">Get Username</a>
				<a style="float:right;margin:2px;" href="#copy" id="password" class="btn btn-primary btn-xs active" role="button">Get Password</a>
				<div id="search" style="float: right;margin:2px;">
					<input class="easyui-searchbox" data-options="prompt:'search area',searcher:doSearch" style="width:150px;height: 23px;">
					</input>
				</div>
			</div>
			<div data-options="region:'west',split:true" style="padding:10px;border:0px;width:333px;background:#F0F8FF">
				<ul id="tt"></ul>
			</div>

			<div data-options="region:'center'" style="border:0px;background:#FAFAFA">
				<table id="dg" class="easyui-datagrid" data-options="striped:true,singleSelect:true,collapsible:true,url:'libKeePHPass/get_entry.php',method:'get'">
					<thead>
						<tr>
							<th field="item" width="20%">Item</th>
							<th field="username" width="20%">Username</th>
							<th field="password" hidden="true">Password</th>
							<th field="url" width="20%">URL</th>
							<th field="notes" width="40%">Comment</th>
							<th field="guid" hidden="true">guid</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</body>
</html>
