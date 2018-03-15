(function($) {

	var ajaxurl = 'http://'+window.location.hostname+'/wp-admin/admin-ajax.php';

	$(document).ready(function() {
		$(".paper .print").click(function() {
			if (typeof _gaq != "undefined") _gaq.push(['_trackEvent', 'Laminatrechner', 'Drucken', '']);
			window.print();
		});
		
		$("form#tl_laminatrechner").each(function() {
			var form = $(this);
			
			form.find("input").on("blur", function() {
				var value = $(this).val();
				
				value = value.replace(/[^0-9.,]+/g, "");
				if (value.length == 0) value = "0";
				if (value.indexOf(",") >= 0) {
					if (value.indexOf(".") >= value.indexOf(",")) {
						value = value.replace(",", "");
					} else {
						value = value.replace(".", "");
						value = value.replace(",", ".");
					}
				}
				if (value.indexOf(".") == 0) value = "0"+value;
				
				$(this).attr("value", value);
			});
			
			form.find(".selection").each(function() {
				var select = $(this).find("select");
				select.on("change", function() {
					var elem = $(this);
					if (elem.val() == "*") {
						if (typeof _gaq != "undefined") _gaq.push(['_trackEvent', 'Laminatrechner', 'Manueller Wert', $(this).parent().siblings("label").text()]);
						
						elem.parent().hide();
						elem.parent().siblings(".manual").show();
						
						var name = elem.attr("name").replace(/\[.+\]/, "");
						form.find(".selection[data-dependson="+name+"]").each(function() {
							$(this).hide();
							$(this).siblings(".manual").show();
							$(this).siblings(".manual").find(".reset").show();
							
							if (typeof _gaq != "undefined") _gaq.push(['_trackEvent', 'Laminatrechner', 'Manueller Wert', $(this).siblings("label").text()]);
						});
					} else {
						elem.parent().show();
						var value = elem.find("option[value='"+elem.val()+"']").data("value");
						if (elem.is(":visible")) {
							elem.parent().siblings(".manual").hide().find("input").attr("value", value);
						}
						
						var name = elem.attr("name").replace(/\[.+\]/, "");
						form.find(".selection[data-dependson="+name+"]").each(function() {
							var dependsOnValue = elem.val();
							
							if (!$(this).is(":visible")) {
								if (typeof _gaq != "undefined") _gaq.push(['_trackEvent', 'Laminatrechner', 'Reset manueller Wert', $(this).siblings("label").text()]);
							}
							$(this).siblings(".manual").find(".reset").show();
							
							var newSelect = $(this).children("."+dependsOnValue);
							if (newSelect.val() == "*") {
								newSelect.find("option[value='*']").removeAttr("selected");
								newSelect.find("option:eq(1)").attr("selected", "selected");
							}	
							newSelect.show().trigger("change").siblings().hide();
						});
					}
					
					$(this).parent().find(".footnote").remove();
					var footnoteText = elem.find("option[value="+elem.val()+"]").data("footnote");
					if (footnoteText) {
						$(this).parent().append($('<p class="footnote">'+footnoteText+'</p>'));
					}
				});
				
				$(this).siblings(".manual").find("input").after('<span class="reset"></span>');
				$(this).siblings(".manual").find(".reset").click(function() {
					if (typeof _gaq != "undefined") _gaq.push(['_trackEvent', 'Laminatrechner', 'Reset manueller Wert', $(this).parent().siblings("label").text()]);
					
					var selection = $(this).parent().siblings(".selection");
					selection.show();
					$(this).parent().hide();
					
					var select = selection.find("select:visible");
					select.find("option[value='*']").removeAttr("selected");
					select.find("option:eq(1)").attr("selected", "selected");
					select.trigger("change");
				});
				
				
				if (select.val() == "*") {
					$(this).hide();
					$(this).siblings(".manual").show();
				} else{
					var dependsOnValue = false;
					if (select.length > 1) {
						var dependsOn = $(this).data("dependson");
						if (dependsOn) {
							dependsOnValue = form.find("*[name="+dependsOn+"]").val();
							if (dependsOnValue != "*") {
								select.filter(":not(."+dependsOnValue+")").hide();
							} else {
								$(this).hide();
								$(this).siblings(".manual").show();
							}
						}						
					}
					
					if (dependsOnValue == "*") {
						$(this).hide();
						$(this).siblings(".manual").show();
					} else {
						$(this).show();
						$(this).siblings(".manual").hide();
						
						var value = select.find("option[value='"+select.val()+"']").data("value");
						$(this).siblings(".manual").find("input").attr("value", value);
					}
				}
			});
			
			form.find(".group.q select").change(function() {
				var select = $(this);
				var selection = form.find(".group.phi .selection");
				
				var value = select.val();
				if (value == "*") {
					selection.hide();
					selection.siblings(".manual").show();
				} else {
					var alias = select.find("option[value='"+value+"']").parent().data("alias");
					
					var type = '';
					if (alias.match(/\-unidirektional$/)) type = 'unidirektional';
					else if (alias.match(/\-(multi|bi|tri)axial$/)) type = 'multiaxial';
					else if (alias.match(/^glasmatte|kohlefaservlies$/)) type = 'matten-vlies';
					
					selection.siblings(".manual").hide();
					selection.find("select").hide();
					var phiselect = selection.find(".volumenanteile"+(type ? "-" + type : "")).show();
					selection.show();
				
					selection.siblings(".manual").find("input").attr("value", phiselect.find("option:selected").data("value"));
				}
			});
			form.find(".group.rhoFiber select").change(function() {
				var value = $(this).val();
				if (value == "*") {
					var selection = form.find(".group.phi .selection");
					selection.hide();
					selection.siblings(".manual").show();
				}
			});
			form.find(".group.q select").trigger("change");
			
			form.on("submit", function() {
				$(".mod_laminatrechner .paper").animate({ top:-$(".mod_laminatrechner .paper").height()-20 }, 200, "linear", function() {
					if (typeof _gaq != "undefined") {
						var data = [];
						form.find(":not(.disabled) > label").each(function() {
							var manual = $(this).siblings(".manual");
							var isManual = manual.is(":visible") && $(this).siblings(".selection").length > 0;
							//_gaq.push(['_trackEvent', 'Laminatrechner', 'Rechenwerte', $(this).text() + (isManual ? " (manuell)" : "") + " [" + manual.find(".unit").text().substr(1) + "]", manual.find("input").val()]);
							data.push($(this).text() + (isManual ? " (manuell)" : "") + " [" + manual.find(".unit").text().substr(1) + "]: " + manual.find("input").val());
						});
						_gaq.push(['_trackEvent', 'Laminatrechner', 'Berechnen', data.join(", ")]);
					}
					
					console.log("form data="+form.serialize());
					// var paper = "lalala";
					// $(".mod_laminatrechner  .paper .inside").replaceWith(paper);

					$.ajax({
						type: "POST",
						// url: window.location.href,
						url: ajaxurl,
						data: "action=as21_laminat_calc&"+form.serialize(),
						success: function(data){
							console.log(data);
							// data = $($.parseHTML(data));
							// var paper = data.find(".mod_laminatrechner  .paper .inside");
							var paper = data;
							$(".mod_laminatrechner  .paper .inside").replaceWith(paper);
							
							var height = $(".mod_laminatrechner .paper .inside").height();
							$(".mod_laminatrechner .paper").css({ top:-height-20, height:height }).animate({ top:0 }, 500, "linear");
							
							$(".paper .print").unbind("click").click(function() {
								if (typeof _gaq != "undefined") _gaq.push(['_trackEvent', 'Laminatrechner', 'Drucken', '']);
								window.print();
							});
						}
					});
				});
				
				return false;
			});
		});
		
		
        
        
 
        $(function() {
            $('form#tl_laminatrechner .toggler').click(function() {
                if($('input.layers').is(':checked')) {
                    $(".nob").animate({top:31}, 150);
                    $(".layers").removeAttr("checked");
                    $(".thickness").attr("checked", "checked");

                    $(".layers").addClass("disabled");
                    $(".layers input").attr("disabled", "disabled");
                    $(".thickness").removeClass("disabled");
                    $(".thickness input").removeAttr("disabled");
                }
                
                else{
                    
                    $(this).find(".nob").animate({top:2}, 150);
                    $(this).find(".layers").attr("checked", "checked");
                    $(this).find(".thickness").removeAttr("checked");

                    $(this).parent().find(".layers").removeClass("disabled");
                    $(this).parent().find(".layers input").removeAttr("disabled");
                    $(this).parent().find(".thickness").addClass("disabled");
                    $(this).parent().find(".thickness input").attr("disabled", "disabled");
                }
            });
        });
       
        
   /*           
        $("form#tl_laminatrechner .toggler").click(function() {
			$(this).find(".nob").animate({top:31}, 150);
			$(this).find(".layers").removeAttr("checked");
			$(this).find(".thickness").attr("checked", "checked");
			
			$(this).parent().find(".layers").addClass("disabled");
			$(this).parent().find(".layers input").attr("disabled", "disabled");
			$(this).parent().find(".thickness").removeClass("disabled");
			$(this).parent().find(".thickness input").removeAttr("disabled");
		}, function() {
			$(this).find(".nob").animate({top:2}, 150);
			$(this).find(".layers").attr("checked", "checked");
			$(this).find(".thickness").removeAttr("checked");
			
			$(this).parent().find(".layers").removeClass("disabled");
			$(this).parent().find(".layers input").removeAttr("disabled");
			$(this).parent().find(".thickness").addClass("disabled");
			$(this).parent().find(".thickness input").attr("disabled", "disabled");
		});
     
           */ 
        
        
        
		
		var currentMode = $("form#tl_laminatrechner .toggler input[checked]").val();
		if (currentMode != 'layers') $("form#tl_laminatrechner .toggler").click().find(".nob").stop(true, true);
	});
})(jQuery);