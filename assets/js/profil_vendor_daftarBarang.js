$(".select-all").change(function(){$(this).siblings().prop("checked",$(this).prop("checked"))}),$(".checkboxlistitem").change(function(){var e=$(this).parent().find(".checkboxlistitem"),c=e.filter(":checked");e.length===c.length?$(this).parent().find(".select-all").prop("checked",!0):$(this).parent().find(".select-all").prop("checked",!1)});