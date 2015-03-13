function doSearch(value) {
	$('#dg').datagrid('reload', {
		string : value
	});
}

$(function() {
	$('#git').click(function() {
        $('#git').toggleClass('disabled');
		$.ajax({
			url : "./libKeePHPass/git.php",
			type : "GET",
			cache : "false",
			success : function(data) {
				$.messager.show({
					width : 300,
					height : 80,
					title : 'Git Results',
					timeout : 0,
					msg : data,
					showType : 'slide',
					iconCls : "icon-tip"
				});
                $('#git').toggleClass('disabled');
                $('#tt').tree('reload');
                $('#dg').datagrid('reload');
			}
		});
	});

	$('#tt').tree({
		url : 'libKeePHPass/get_tree.php',
		onClick : function(node) {
			console.log(node.id);
			$('#dg').datagrid('reload', {
				gid : node.id
			});
		}
	});

	$('#dg').datagrid({
		onClickRow : function(index, row) {
			$("a#password").zclip({
				path : "ZeroClipboard.swf",
				copy : function() {
					return row.password;
				}
			});
			$("a#username").zclip({
				path : "ZeroClipboard.swf",
				copy : function() {
					return row.username;
				}
			});
			$("a#uuid").zclip({
				path : "ZeroClipboard.swf",
				copy : function() {
					return row.guid;
				}
			});
		}
	});
});

