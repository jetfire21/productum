// jQuery(function () {
jQuery(document).ready(function() {

    var ajaxurl = 'http://'+window.location.hostname+'/wp-admin/admin-ajax.php';
    // console.log(window.location.hostname);



    jQuery('.a21_big-cart-popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true,
		 callbacks: {
			    open: function() {

			    	console.log("a21_big-cart-popup-modal");
					var data = {
						'action': 'a21_cart_get_products',
						// 'prod_id': prod_id,
						// "cart_count": cart_count
					};

  				    jQuery.ajax({
						url:ajaxurl,
						data:data, 
						type:'POST', 
						success:function(data){
							console.log("ajax yes");
							console.log(data);
							if( data ) { 
						       jQuery("#a21_big_cart .wrap_cart_prod").html(data);
							} else { console.log("data send with errors!");}
						}
					 });
			   }
		}
    });

    jQuery('.a21_popup-modal').magnificPopup({
		// type: 'image',
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true,
		 callbacks: {
			    open: function() {
			      // Will fire when this exact popup is opened
			      // this - is Magnific Popup object
			      console.log("open mag");
			      // console.log(this);
			      // var magnificPopup = $.magnificPopup.instance;
			      // console.log(magnificPopup.content);
			      // console.log(this.content);
			      // console.log(this.content.html());
			      // console.log(this.currItem.el);
			      var price = this.currItem.el.attr("data-price");
			      var title = this.currItem.el.attr("data-title");
			      var img_url = this.currItem.el.attr("data-img-url");
			      var prod_id = this.currItem.el.attr("data-prod-id");
			      console.log("price= "+price);
			      console.log(title);
			      console.log(this.currItem.el.html());

			      // jQuery("#add_product_to_cart .a21_mfp_left img").remove();
			      // jQuery("#add_product_to_cart .a21_mfp_left").append("<img class='img-url' src='"+img_url+"' width='128px' height='128px'/>");
  			    //   jQuery("#add_product_to_cart .a21_mfp_right p").remove();
			      // jQuery("#add_product_to_cart .a21_mfp_right").append("<p class='title'>"+title+"</p>");
			      // jQuery("#add_product_to_cart .a21_mfp_right").append("<p class='price'>"+price+"<span> руб.</span></p>");

			      var cart_sum = jQuery(".a21_top_cart #a21_cart_sum").html();
			      var cart_count = jQuery(".a21_top_cart #a21_cart_count").html();
			      console.log("cart_sum= "+cart_sum);
			      var cart_sum = parseInt(cart_sum) + parseInt(price);
			      cart_count++;
			      // jQuery(".a21_top_cart #a21_cart_sum").html(cart_sum+" р.");
			      // jQuery(".a21_top_cart #a21_cart_count").html(cart_count);
			      console.log("cart_sum= "+cart_sum);

				var data = {
					'action': 'a21_add_cart',
					'prod_id': prod_id,
					"cart_count": cart_count,
					"price": price
				};

  				  jQuery.ajax({
						url:ajaxurl,
						data:data, 
						type:'POST', 
						success:function(data){
							console.log("ajax yes a21_add_cart");
							data = JSON.parse(data);
							console.log(data);
							if( data ) { 
						       jQuery("#a21_cart_count").html(data.total_count);
						       jQuery(".as21_mcc").html(data.total_count).addClass('mini_cart_count').show();
						       // jQuery.append("<psmini_cart_count").html(data.total_count).show();
						       jQuery("#a21_cart_sum").html(data.total_sum);
			   			      jQuery("#add_product_to_cart .a21_mfp_left img").remove();
						      jQuery("#add_product_to_cart .a21_mfp_left").append("<img class='img-url' src='"+data.img+"' width='128px' height='128px'/>");
			  			      jQuery("#add_product_to_cart .a21_mfp_right p").remove();
						      jQuery("#add_product_to_cart .a21_mfp_right").append("<p class='title'>"+data.title+"</p>");
						      jQuery("#add_product_to_cart .a21_mfp_right").append("<p class='price'>"+data.price+"<span> руб.</span></p>");

							} else { console.log("data send with errors!");}
						}
					 });
			    }
		}
	});

	jQuery(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		jQuery.magnificPopup.close();
	});
	jQuery(document).on('click', '#add_product_to_cart #continue_buy', function (e) {
		e.preventDefault();
		jQuery.magnificPopup.close();
	});
	jQuery(document).on('click', '#add_product_to_cart #a21_oformit_zakaz', function (e) {
		e.preventDefault();
		jQuery.magnificPopup.close();
	});


    jQuery("#a21_big_cart").on("click",".a21_cart_del_prod",function(){

		console.log("=========del_prod======");
		var prod_del = confirm("Убрать из корзины?");
		console.log(typeof prod_del);
		console.log(prod_del);
		// console.log(jQuery(this));
		console.log(jQuery(this).html());
		// console.log("jQuery(this).attr "+jQuery(this).attr("data-prod-id"));
		var prod_id = jQuery(this).attr("data-prod-id")
		console.log("jQuery(this).attr prod id "+prod_id);
		if(!prod_del) return false;
		jQuery(this).parent().parent().remove();

		var data = {
			'action': 'a21_cart_del_prod',
			'prod_id': prod_id,
			// "cart_count": cart_count
		};

	    jQuery.ajax({
			url:ajaxurl,
			data:data, 
			type:'POST', 
			success:function(data){
				console.log("====ajax del prod=====");
				data = JSON.parse(data);
				console.log(data);
				if(data.no_prod) { jQuery("#a21_big_cart table").html("Корзина пуста"); jQuery("#a21_big_cart #a21_oformit_zakaz").remove();}
				jQuery(".total_sum, #a21_cart_sum").html(data.total_sum+" р.")
		        jQuery("#a21_cart_count").html(data.total_count);
		        jQuery(".as21_mcc").html(data.total_count);
			}
		 });

	});//

    jQuery("#a21_big_cart").on("keyup",".prod_count",function(){

    	console.log("input change");
    	var input = jQuery(this);
    	console.log(input.val());
    	var prod_count = input.val();
    	var prod_id = input.attr("data-prod-id")
    	// var prod_sum = parseInt(input.parent().next().html());
    	// console.log("prod_sum "+prod_sum);
    	// input.parent().next().html(prod_sum*prod_count+" р.");

    	// console.log(input.closest(".a21_big_cart"));
    	// var total_sum = 0;
    	// input.closest(".a21_big_cart").find( ".prod_sum" ).each(function( index ) {
  //   	jQuery( ".prod_sum" ).each(function( index ) {
		//   console.log( index + ": " + jQuery( this ).text() );
		//   total_sum = total_sum + parseInt(jQuery( this ).text());
		// });
    	// console.log(total_sum);

		var data = {
			'action': 'a21_cart_change_prod_count',
			'count': prod_count,
			'prod_id': prod_id
			// "cart_count": cart_count
		};

	    jQuery.ajax({
			url:ajaxurl,
			data:data, 
			type:'POST', 
			success:function(data){
				data = JSON.parse(data);
				console.log("====change count prod in cart=====");
				console.log(data);
				jQuery(".total_sum, #a21_cart_sum").html(data.total_sum+" р.")
				jQuery("#a21_cart_count").html(data.total_count);
				input.parent().next().html(data.cur_prod_sum+" р.")
			}
		 });

    });

    // jQuery("#a21_oformit_zakaz").on("click", function(){
    jQuery("#a21_big_cart").on("click", "#a21_oformit_zakaz",function(){
    	console.log("oformit zakaz");
		jQuery.magnificPopup.close();
		jQuery(".go_form_oformit_zakaz").trigger("click");
    });

	jQuery('.go_form_oformit_zakaz').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true,
			 callbacks: {
			    open: function() {

			    	// console.log("magnificPopup callback .go_form_oformit_zakaz");

			    	jQuery("#btn_send_from_oform_zakaz").click( function(e){

			    		e.preventDefault();
						 // console.log(jQuery("#a21_cart_sum").html());	
						jQuery(".a21_top_cart #a21_cart_sum").html('0');
						jQuery(".a21_top_cart #a21_cart_count").html('0');	
						jQuery(".as21_mcc").removeClass('mini_cart_count').html('');	
			    		// console.log("btn_send_from_oform_zakaz");
			    		var fields = jQuery('#a21_form_oformit_zakaz form').serialize();
			    		// console.log(data);
	    				var data = {
							'action': 'a21_cart_oformit_zakaz',
							'data': fields
							// 'prod_id': prod_id
							// "cart_count": cart_count
						};
						jQuery(".as21_load").remove();
					    jQuery.ajax({
							url:ajaxurl,
							data:data, 
							type:'POST', 
							success:function(data){
								data = JSON.parse(data);
								// jQuery(this).hide();
								console.log("==== wp ajax oformit zakaz =====");
								console.log(typeof data);
								console.log(data);
								console.log(data.errors);
								jQuery(".as21_load").remove();
								jQuery('#a21_form_oformit_zakaz form .as21_mes_errors').remove();
								if(data.errors) jQuery('#a21_form_oformit_zakaz form').prepend(data.errors);
								else { alert("Ваш заказ успешно отправлен!"); jQuery.magnificPopup.close(); }

							},
							beforeSend:function(){
								jQuery("#a21_form_oformit_zakaz form").append("<p class='as21_load'><img src='"+theme+"/images/a21/loading.gif'/></p>");
							}

						 });

			    	});

				}
			}
	});

	jQuery("a.laminatrechner").click(function()
	{	
		console.log("click a.laminatrechner");
		var href=jQuery("a.laminatrechner").attr("href");
		var target=jQuery("a.laminatrechner").attr("target");
		var maxHeight=900;
		if(screen.height<900)maxHeight=screen.height-40;
		var win=window.open(href,target,"width=550,height="+maxHeight+",location=no,toolbar=no,status=no");
		win.focus();
		return false;
	});

});

