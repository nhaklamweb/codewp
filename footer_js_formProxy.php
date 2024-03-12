<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
global $lang;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>

<script>
	// File Main Js
jQuery(document).ready(function ($) {
	
	// FORM PROXY
	jQuery('.slct').click(function(e){

		var choosed =  jQuery('.main_select');
		var drop_main = jQuery('.main_select').next();

		if(!jQuery(drop_main).hasClass('choosed')){

			jQuery(drop_main).slideToggle();

		}else if(jQuery(drop_main).hasClass('choosed')){
			jQuery(this).next().slideToggle();
			var drop = jQuery(this).next();
			jQuery('.drop').not(drop).hide();

		}
	});

	// --------------Drop li
	jQuery('.drop li').click(function(e){
		var main_select =  jQuery('.main_select');
		var drop_main = jQuery('.main_select').next();

		jQuery(drop_main).addClass('choosed');
		jQuery(this).parent().addClass('choosed');
		jQuery(this).addClass('active');
		var value = jQuery(this).text();

		jQuery(this).parent().parent().find('.slct').text(value);
		jQuery(this).parent().hide();

		// Check select last
		var drop_main = jQuery('.main_select').next();
		var drop_location = jQuery('.drop.location');
		var drop_period = jQuery('.drop.period');
	});

	//Purpose 	
	jQuery('.drop.purpose li').click(function(e){
		var drop_purpose = jQuery('.slct.purpose').next();
		var value = jQuery(this).text();
		jQuery(drop_purpose).next().val(value);
	});

	// PROXY V2 FORM 
	jQuery('.close_form').click(function(e){
		jQuery('.popup_proxy').hide();
	});
	// Kiểm tra trạng thái của checkbox khi có sự kiện thay đổi
	$('#vtiktok').change(function() {
		if ($(this).is(':checked')) {
			$(this).attr('value',1);
		}
	});
	// Hide popup
	jQuery(document).mouseup(function(e) {
		var container = jQuery(".content_popup");
		var container2 = jQuery(".drop_list");
		// if the target of the click isn't the container nor a descendant of the container
		if (!container.is(e.target) && container.has(e.target).length === 0) 
		{
			jQuery(".popup_proxy").hide();
		}
		if (!container2.is(e.target) && container2.has(e.target).length === 0) 
		{
			jQuery(".drop_list").hide();
		}
	});

	// BUTTON PROXY FORM POPUP HOMEPAGE
	jQuery('.btn_proxy').click(function(e){
		var main_select =  jQuery('.main_select');
		var drop_main = jQuery('.main_select').next();
		var drop_location = jQuery('.drop.location');
		var drop_period = jQuery('.drop.period');

		if(!jQuery(drop_main).hasClass('choosed')){
			jQuery(drop_main).slideToggle();

		}else if(!jQuery(drop_location).hasClass('choosed')){
			jQuery('.drop.location').slideToggle();

		}else if(!jQuery(drop_period).hasClass('choosed')){
			jQuery('.drop.period').slideToggle();
			
		}else if(jQuery(drop_main).hasClass('choosed') || jQuery(drop_location).hasClass('choosed') || jQuery(drop_period).hasClass('choosed') ){

			var quantity = jQuery('#iptinh .amountip input').val();
			var proxyPrice = jQuery('.drop.period .active').attr('data_pricevi');
			var totalprice = Math.round(100*proxyprice*parseInt( quantity ) )/100;
			jQuery('.popup_proxy').toggle();
			jQuery('.drop.purpose').show();
		}
	});
	//Label chooose
	jQuery('.choose_label label').click(function(){
		jQuery('.choose_label label').removeClass('active'); // Loại bỏ class active khỏi tất cả các label
		jQuery(this).addClass('active'); // Thêm class active cho label được click

		// Loại bỏ class active khỏi tất cả các content_label
		jQuery('.content_label').removeClass('active');
		
		// Tìm content_label tương ứng và thêm class active cho nó
		var index = jQuery(this).index();
		jQuery('.content_label').eq(index).addClass('active');
	});
	
	// Lang Shortcode
	$('.languge_switcher').click(function(e){
		$('.sub_lang').slideToggle(100);
	});
});
</script>

<!-- Script API show data -->
<script type="text/javascript">
var weblang = '<?php echo getlang(); ?>';
var arr_service = [
	{
        "data_value": "static_ipv4",
        "data_name": "Static Proxy IPv4",
        "data_namevi": "Proxy Tĩnh IPv4",
        "data_arrtime": [
          {
            "data_value": "31",
            "data_name": "1 Month",
            "data_namevi": "1 Tháng",
            "data_price": 1.82, //$
            "data_pricevi": 40000,
			"data_pricecountry":2.27,
			"data_pricecountryvi":50000,
          },
          {
            "data_value": "93",
            "data_name": "3 Months",
            "data_namevi": "3 Tháng",
            "data_price": 5, //$
            "data_pricevi": 110000,
			"data_pricecountry":6.36,
			"data_pricecountryvi":140000,
          }
        ],
        "data_country": [
          { "data_value": "US", "data_name": "United States", "data_namevi": "Hoa Kỳ" },
          { "data_value": "GB", "data_name": "England", "data_namevi": "Anh" },
          { "data_value": "VN", "data_name": "Vietnam", "data_namevi": "Việt Nam" },
        ]
    },
    {
        "data_value": "static_ipv6",
        "data_name": "Static Proxy IPv6",
        "data_namevi": "Proxy Tĩnh IPv6",
        "data_arrtime": [
          {
            "data_value": "3",
            "data_name": "3 Days",
            "data_namevi": "3 Ngày",
            "data_price": 0.05, //$
            "data_pricevi": 1000
          },
          {
            "data_value": "7",
            "data_name": "7 Days",
            "data_namevi": "7 Ngày",
            "data_price": 0.08, //$
            "data_pricevi": 1700
          },
          {
            "data_value": "31",
            "data_name": "1 Month",
            "data_namevi": "1 Tháng",
            "data_price": 0.18, //$
            "data_pricevi": 4000
          },
          {
            "data_value": "62",
            "data_name": "2 Months",
            "data_namevi": "2 Tháng",
            "data_price": 0.36, //$
            "data_pricevi": 8000
          }
        ],
        "data_country": [
          { "data_value": "US", "data_name": "United States", "data_namevi": "Hoa Kỳ" },
          { "data_value": "GB", "data_name": "England", "data_namevi": "Anh" },
          { "data_value": "VN", "data_name": "Vietnam", "data_namevi": "Việt Nam" },
          { "data_value": "AU", "data_name": "Australia", "data_namevi": "Úc" },
          { "data_value": "DE", "data_name": "Germany", "data_namevi": "Đức" },
          { "data_value": "SG", "data_name": "Singapore", "data_namevi": "Singapo" },
          { "data_value": "FI", "data_name": "Finland", "data_namevi": "Phần Lan" },
          { "data_value": "FR", "data_name": "France", "data_namevi": "Pháp" },
          { "data_value": "CA", "data_name": "Canada", "data_namevi": "Canada" },
          { "data_value": "JP", "data_name": "Japan", "data_namevi": "Nhật Bản" },
        ]
	},
	{
        "data_value": "rotating_ipv4",
        "data_name": "Rotating Proxy IPv4",
        "data_namevi": "Proxy Động IPv4",
        "data_arrtime": [
          {
            "data_value": "31",
            "data_name": "1 Month",
            "data_namevi": "1 Tháng",
            "data_price": 1.8182, //$
            "data_pricevi": 40000
          },
          {
            "data_value": "62",
            "data_name": "2 Months",
            "data_namevi": "2 Tháng",
            "data_price": 3.6364, //$
            "data_pricevi": 80000
          },
          {
            "data_value": "93",
            "data_name": "3 Months",
            "data_namevi": "3 Tháng",
            "data_price": 5, //$
            "data_pricevi": 110000
          }
        ],
        "data_country": [
          { "data_value": "US", "data_name": "United States", "data_namevi": "Hoa Kỳ" },
          { "data_value": "GB", "data_name": "England", "data_namevi": "Anh" },
          { "data_value": "VN", "data_name": "Vietnam", "data_namevi": "Việt Nam" },
          { "data_value": "AU", "data_name": "Australia", "data_namevi": "Úc" },
          { "data_value": "DE", "data_name": "Germany", "data_namevi": "Đức" },
          { "data_value": "SG", "data_name": "Singapore", "data_namevi": "Singapo" },
          { "data_value": "FI", "data_name": "Finland", "data_namevi": "Phần Lan" },
          { "data_value": "FR", "data_name": "France", "data_namevi": "Pháp" },
          { "data_value": "CA", "data_name": "Canada", "data_namevi": "Canada" },
          { "data_value": "JP", "data_name": "Japan", "data_namevi": "Nhật Bản" },
			
        ]
	},
	{
        "data_value": "rotating_ipv6",
        "data_name": "Rotating Proxy IPv6",
        "data_namevi": "Proxy Động IPv6",
        "data_arrtime": [
          {
            "data_value": "3",
            "data_name": "3 Days",
            "data_namevi": "3 Ngày",
            "data_price": 0.11 , //$
            "data_pricevi": 2400
          },
          {
            "data_value": "7",
            "data_name": "7 Days",
            "data_namevi": "7 Ngày",
            "data_price": 0.18, //$
            "data_pricevi": 4000
          },
          {
            "data_value": "31",
            "data_name": "1 Month",
            "data_namevi": "1 Tháng",
            "data_price": 0.36, //$
            "data_pricevi": 8000
          },
          {
            "data_value": "62",
            "data_name": "2 Months",
            "data_namevi": "2 Tháng",
            "data_price": 0.73, //$
            "data_pricevi": 16000
          }
        ],
        "data_country": [
          { "data_value": "US", "data_name": "United States", "data_namevi": "Hoa Kỳ" },
		  { "data_value": "FR", "data_name": "France", "data_namevi": "Pháp" },
		  { "data_value": "CA", "data_name": "Canada", "data_namevi": "Canada" },
          { "data_value": "GB", "data_name": "England", "data_namevi": "Anh" },
          { "data_value": "AU", "data_name": "Australia", "data_namevi": "Úc" },
          { "data_value": "DE", "data_name": "Germany", "data_namevi": "Đức" },
          { "data_value": "SG", "data_name": "Singapore", "data_namevi": "Singapo" },
          { "data_value": "FI", "data_name": "Finland", "data_namevi": "Phần Lan" },
		  { "data_value": "JP", "data_name": "Japan", "data_namevi": "Nhật Bản" },
			
		  
        ]
	},
];
	
var proxyprice = 0;
var totalprice = 0;
var pricechar = '<?php echo ($lang == "vi") ? '₫':'$'; ?>';
var priceXu   = '<?php echo ($lang == "vi") ? 'xu':'coin'; ?>';

// Format Price - PROXY456.COM 	
function formatPrice(price){
	if (weblang == 'vi'){
		return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	}else{
		return price;
	}
}
function formatCoin(price){
	return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// Format Price - PROXYINDONESIA.COM 	

// function formatPrice(price) {
//     let formattedPrice;
//     var exchangeRate = 15590;
    
//     // Chuyển đổi giá trị USD sang IDR
//     var priceInIDR = price * exchangeRate;

//     if (weblang === 'id-ID') {
//         // Quy đổi sang IDR trước khi định dạng
//         formattedPrice = priceInIDR.toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
//     } else {
//         // Định dạng cho USD
//         formattedPrice = price.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
//     }

//     return formattedPrice;
// }
// console.log(formatPrice(5)); // Đầu ra mong muốn: "77.950,00"
// console.log(formatPrice(0.05)); // Đầu ra mong muốn: "779,50"

// Format Price - ThailandProxy

// function formatPrice(price){
// 	// Đảm bảo rằng price là một số
//     let numericPrice = Number(price);
//     // Sau đó làm tròn đến 2 chữ số thập phân
//     let roundedPrice = numericPrice.toFixed(2);

//     if (weblang == 'th') {
//         // Định dạng số cho ngôn ngữ Thái
//         return roundedPrice.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
//     } else {
//         // Nếu không phải ngôn ngữ Thái, trả về giá trị đã làm tròn
//         return roundedPrice;
//     }
// }

// Format Price UK & EN - Tiền tệ là $ và bảng anh

// function formatPrice(price) {
//   let formattedPrice;
//   formattedPrice = price.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
//   return formattedPrice;
// }

jQuery(document).ready(function(){
	var $ = jQuery;
	// 	Tab Static
	$('.tabitem-rotating').hide();
	
	$('.tab.static_proxy').on('click',function(e){
		$('.tabitem-rotating').hide();
		$('.tabitem-static').show();
	});
	//Tab Rotating 	
	$('.tab.rotating_proxy').on('click', function(e){
		$('.tabitem-rotating').show();
		$('.tabitem-static').hide();
	});
	
	$('.tab.static_proxy,.tab.rotating_proxy').click(function(e){	
		$('.drop.choosed').removeClass('choosed');
		$('a.main_select').text('<?php echo ($lang == 'vi') ? 'Chọn Loại Proxy:':'Choose a service:' ?>');
		$('.drop.main').removeClass('choosed').show();
		
		$('.drop.main li').on('click',function(e){
			MainProxytypeSelect(this);
    	});
	});
	var quantity   = 1;
	var totalprice = 0;
	
    $('input[name="numberip"]').on('keyup change',function(){
		var quantity = $(this).val();
		// Nếu giá trị rỗng hoặc không hợp lệ, đặt lại giá trị mặc định
        if ($(this).val().trim() === '' || isNaN($(this).val())) {
			$(this).attr('placeholder', (weblang == 'vi') ? 'Vui lòng nhập số lượng' : 'Please type your number');
			totalprice = 0;
        }
		var priceVi = (quantity == 0) ? 0 : $('.drop.period li.active').attr('data_pricevi');
		var proxyindex = $('input[name="proxyIP"]').val();
		var country = $('input[name="section"]').val();
		if(weblang == 'vi'){
			if(proxyindex == 'static_ipv4' && country == 'VN'){
				priceVi = (quantity == 0) ? 0 : $('.drop.period li.active').attr('data_pricecountryvi');
				price = (quantity == 0) ? 0 : $('.drop.period li.active').attr('data_pricecountryvi');
			}else{
				price = (quantity == 0) ? 0 : $('.drop.period li.active').attr('data_pricevi');
			}
		}else{
			if(proxyindex == 'static_ipv4' && country == 'VN'){
				priceVi = (quantity == 0) ? 0 : $('.drop.period li.active').attr('data_pricecountryvi');
				price = (quantity == 0) ? 0 : $('.drop.period li.active').attr('data_pricecountry');
			}else{
				price = (quantity == 0) ? 0 : $('.drop.period li.active').attr('data_price');
			}
		}
		$('input[name="numberip"]').val(quantity);
        $('.total_price .currency').text(pricechar);
		
		totalprice = (isNaN(parseInt(quantity)) || quantity.trim() === '') ? 0 : (price * parseInt(quantity));
		
		var main_select =  jQuery('.main_select');
        var drop_main = jQuery('.main_select').next();
        var drop_location = jQuery('.drop.location');
        var drop_period = jQuery('.drop.period');
		
		// Lấy class hiện giá đã tính vào
		if(!jQuery(drop_main).hasClass('choosed') || !jQuery(drop_location).hasClass('choosed') || !jQuery(drop_period).hasClass('choosed') ){
			totalprice = 0;
		}else{
			$('.total_price .total, .total_bottom .price_total').text(formatCoin(priceVi * quantity) + ' ' + priceXu +  ' ' + '(~' + formatPrice(Math.round(100*totalprice)/100) + ' ' + pricechar + ')');
			$('.total_price_bottom').text( formatCoin(priceVi) + '  ' + priceXu + '  ' + '(~' + Math.round(100*price)/100 + ' ' + pricechar + ')' + '/Proxy');
		}
    });
    
    function BuildProxyForm(proxyindex){
        var proxyform = arr_service[proxyindex];
		
        //reset form
		$('.drop.location').html('');
        $('a.location').text('<?php echo ($lang == 'vi') ? 'Chọn quốc gia:':'Select location:' ?>');
        $('input[name="section"]').val( '' );
        
        $('.drop.period').html('');
        $('a.period').text('<?php echo ($lang == 'vi') ? 'Chọn thời gian:':'Select times:' ?>');
        $('input[name="period"]').val( '' );

        $('input[name="numberip"]').val(2);
        $('input[name="numberip"]').val(1);
        proxyprice = 0;
        totalprice = 0;
		
		$('.total_price .total').text(0);
        $('.total_price_bottom').text('0 xu (~ 0' + pricechar + '/proxy');
        //end reset form

        
        $('input[name="proxyIP"]').val( proxyform.data_value );
        
        //render select country box
        if (proxyform.data_country && proxyform.data_country.length > 0){
            $.each(proxyform.data_country, function(cindex, country) {
            	var dataname = country.data_name;
				if (weblang == 'vi'){
                	dataname = country.data_namevi;
                }
                $('.drop.location').append(`<li data_value="${country.data_value}">${dataname}</li>`);
			});
            
            $('.drop.location li').click(function(e){
            	var location = $(this).text();
                var locationval = $(this).attr('data_value');
                $('a.location').text( location );
                $('.drop.location').addClass('choosed').hide();
                $('input[name="section"]').val( locationval );
            });
        }
		
        //render select times box
        if (proxyform.data_arrtime && proxyform.data_arrtime.length > 0){
            $.each(proxyform.data_arrtime, function(tindex, times) {
            	var dataname = times.data_name;
				if (weblang == 'vi'){
                	dataname = times.data_namevi;
                }
                $('.drop.period').append(`<li data_value="${times.data_value}" data_price="${times.data_price}" data_pricevi="${times.data_pricevi}" data_pricecountry="${times.data_pricecountry}" data_pricecountryVi="${times.data_pricecountryvi}">${dataname}</li>`);
			});
           
			
            $('.drop.period li').click(function(e){
				$(this).addClass('active');
				jQuery(this).nextAll().removeClass('active');
				jQuery(this).prevAll().removeClass('active');
				
				quantity = parseInt($('input[name="numberip"]').val());
				var priceVi = (quantity == 0) ? 0 : parseInt($(this).attr('data_pricevi'));
            	var period = $(this).text();
                var periodval = $(this).attr('data_value');
				var country = $('input[name="section"]').val();
				console.log(country);
				console.log(proxyindex);
                if (weblang == 'vi'){
					if(proxyindex == 0 && country == 'VN'){
						priceVi = (quantity == 0) ? 0 : parseInt($(this).attr('data_pricecountryvi'));
						proxyprice = (quantity == 0) ? 0 : $(this).attr('data_pricecountryvi'); //setprice
                    	pricechar = '₫';
					}else{
						proxyprice = (quantity == 0) ? 0 : $(this).attr('data_pricevi'); //setprice
                    	pricechar = '₫';
					}
				}else{
					if(proxyindex == 0 && country == 'VN'){
						priceVi = (quantity == 0) ? 0 : parseInt($(this).attr('data_pricecountryvi'));
						proxyprice = (quantity == 0) ? 0 : ($(this).attr('data_pricecountry')); // setprice
						pricechar = '$';
					}else{
						proxyprice = (quantity == 0) ? 0 : ($(this).attr('data_price')); // setprice
						pricechar = '$';
					}
					
                }
                proxyprice = parseFloat(proxyprice);
                $('.total_price .currency').text(pricechar);
				
                totalprice = proxyprice*parseInt( $('input[name="numberip"]').val() );
				
                // Total Price
				$('.total_price .total').text(formatCoin(priceVi*quantity) + ' ' + priceXu +  ' ' + '(~' + formatPrice(Math.round(100*totalprice)/100) + ' ' + pricechar + ')');
				$('.price_total').text(formatCoin(priceVi*quantity) + ' ' + priceXu +  ' ' + '(~' + formatPrice(Math.round(100*totalprice)/100) + ' ' + pricechar + ')');

				// Price Bottom
				$('.total_price_bottom, .price_a_ip').text(formatCoin(priceVi) + ' ' + priceXu + ' ' + '( ~' + formatPrice(Math.round(100*proxyprice)/100) + ' ' + pricechar + ')' + '/Proxy');
				
                $('a.period').text( period );
                $('.drop.period').addClass('choosed').hide();
                $('input[name="period"]').val( periodval );
            });
        }
    }
	
	function MainProxytypeSelect(item){
		$('.drop.choosed').removeClass('choosed');
		$('.drop.main').addClass('choosed').hide();
		var proxytype = $(item).text().trim();
		var proxyvalue = $(item).attr('data-value').trim();
		var proxyindex = 0;
		$('a.main_select').text(proxytype);
		
		if (proxyvalue == 'static_ipv4'){
			proxyindex = 0;
			$('.check-v4-tiktok').css("display","block");
		}else if(proxyvalue == 'static_ipv6'){
			proxyindex = 1;
			$('.check-v4-tiktok').css("display","none");
		}else if(proxyvalue == 'rotating_ipv4'){
			proxyindex = 2;
			$('.check-v4-tiktok').css("display","none");
		}else{
			proxyindex = 3;
			$('.check-v4-tiktok').css("display","none");
		}
		BuildProxyForm( proxyindex );
	}
    
	$('.drop.main li').click(function(e){
		MainProxytypeSelect(this);
    });
	
	$('.btn_buyproxy').click(function(e){
		if ($('input[name="numberip"').val() === '' || $('input[name="numberip"').val() == 0){
			alert(weblang == 'vi' ? 'Số lượng không được để trống và phải lớn hơn 0!':'The quantity cannot be empty and must be greater than 0 !');
		}else if (totalprice <= 0){
			alert(weblang == 'vi' ? 'Giá trị đơn hàng phải lớn hơn 0 !':'Order value must be greater than 0 !');
		}else if ($('input[name="section"').val() === ''){
			alert(weblang == 'vi' ? 'Vui lòng chọn Quốc Gia của Proxy!':'Please select Country of Proxy!');
		}else if ($('input[name="purpose"').val() === ''){
			alert(weblang == 'vi' ? 'Bạn biết chúng tôi từ đâu ?':'Where do you know us from?');
		}else if ($('input[name="username"').val() === ''){
			alert(weblang == 'vi' ? 'Vui lòng nhập tên của bạn!':'Please type your Username!');
		}else if ($('input[name="emailform"').val() === ''){
			alert(weblang == 'vi' ? 'Vui lòng nhập Email!':'Please type your Email!');
			$('input[name="emailform"').focus();
		}else if ($('input[name="phone"').val() === ''){
			alert(weblang == 'vi' ? 'Vui lòng nhập số điện thoại!':'Please type your Phone!');
		}else if (!$('input[name="check_privacy"').is(':checked')){
			alert(weblang == 'vi' ? 'Vui lòng đồng ý với chính của chúng tôi !':'Please check agree of Privacy & Terms!');
		}else{
			var quantity = jQuery('#iptinh .amountip input').val();
			var email = jQuery('input[name="emailform"]').val();
			var type = $('input[name="proxyIP"]').val();
			var location = $('input[name="section"]').val();
			var period = $('input[name="period"]').val();
			var vtiktok = $('input[name="vtiktok"]').val();
			var checkTiktok = vtiktok == '1' ? true : false; 
			
			if(type == 'static_ipv4'){
				var url = 'https://app.proxy456.com/confirm-payment/?lang=' + weblang + '&type=' + type + '&location=' + location + '&period=' + period + '&quantity=' + quantity + '&email=' + decodeURIComponent(email) + '&forTiktok=' + checkTiktok;
			}else{
				var url = 'https://app.proxy456.com/confirm-payment/?lang=' + weblang + '&type=' + type + '&location=' + location + '&period=' + period + '&quantity=' + quantity + '&email=' + decodeURIComponent(email);
			}
			
			window.location.href = url;
		}
		
    });
// { 'country-en': 'United States', 'country-vi': 'Hoa Kỳ', 'country-name': 'US', 'priceVi': , 'priceEN':  },
	
	var arrayCountry = [
		[
		  { "data_value": "US", "data_name": "United States", "data_namevi": "Hoa Kỳ" },
          { "data_value": "GB", "data_name": "England", "data_namevi": "Anh" },
          { "data_value": "VN", "data_name": "Vietnam", "data_namevi": "Việt Nam" },
		],
		[
		  { "data_value": "US", "data_name": "United States", "data_namevi": "Hoa Kỳ" },
          { "data_value": "GB", "data_name": "England", "data_namevi": "Anh" },
          { "data_value": "VN", "data_name": "Vietnam", "data_namevi": "Việt Nam" },
          { "data_value": "AU", "data_name": "Australia", "data_namevi": "Úc" },
          { "data_value": "DE", "data_name": "Germany", "data_namevi": "Đức" },
          { "data_value": "SG", "data_name": "Singapore", "data_namevi": "Singapo" },
          { "data_value": "FI", "data_name": "Finland", "data_namevi": "Phần Lan" },
          { "data_value": "FR", "data_name": "France", "data_namevi": "Pháp" },
          { "data_value": "CA", "data_name": "Canada", "data_namevi": "Canada" },
          { "data_value": "JP", "data_name": "Japan", "data_namevi": "Nhật Bản" },
		],
		[
		  { "data_value": "US", "data_name": "United States", "data_namevi": "Hoa Kỳ" },
		  { "data_value": "FR", "data_name": "France", "data_namevi": "Pháp" },
		  { "data_value": "CA", "data_name": "Canada", "data_namevi": "Canada" },
          { "data_value": "GB", "data_name": "England", "data_namevi": "Anh" },
          { "data_value": "AU", "data_name": "Australia", "data_namevi": "Úc" },
          { "data_value": "DE", "data_name": "Germany", "data_namevi": "Đức" },
          { "data_value": "SG", "data_name": "Singapore", "data_namevi": "Singapo" },
          { "data_value": "FI", "data_name": "Finland", "data_namevi": "Phần Lan" },
		  { "data_value": "JP", "data_name": "Japan", "data_namevi": "Nhật Bản" },
		]
	];
	// Select Price Blog & Single 	
	$('#proxy_choose').change(function() {
		// Lấy giá trị của option được chọn
		var selectedOption = $(this).val();
		var total = jQuery('.wg_buynow .total');
		var priceBottom = jQuery('.price_bottom');
		// Khai báo mảng tương ứng với option được chọn
		var selectedArray = [];

		// Kiểm tra giá trị của selectedOption và chọn mảng tương ứng
		if (selectedOption === 'static_ipv4') {
			selectedArray = arrayCountry[0];
			weblang == 'vi' ? total.text('40.000₫') : total.text('$ 1.82') ;
			weblang == 'vi' ? priceBottom.text('40.000₫/Proxy/Tháng') : priceBottom.text('$ 1.82/Proxy/Month') ;
			console.log(selectedArray);
			// Thêm điều kiện kiểm tra nếu data_value là "VN"
			selectedArray.forEach(function(item) {
				// Lấy phần tử select bằng id
				var countrySelect = document.getElementById('country_ipv6');
				// Thêm sự kiện change
				countrySelect.addEventListener('change', function() {
					var selectedOption = this.value; // Lấy giá trị của tùy chọn được chọn
					if (item.data_value == selectedOption) {
						weblang == 'vi' ? total.text('50.000₫') : total.text('$ 2.27') ;
						weblang == 'vi' ? priceBottom.text('50.000₫/Proxy/Tháng') : priceBottom.text('$ 2.27/Proxy/Month') ;
					}else{
						weblang == 'vi' ? total.text('40.000₫') : total.text('$ 1.82') ;
						weblang == 'vi' ? priceBottom.text('40.000₫/Proxy/Tháng') : priceBottom.text('$ 1.82/Proxy/Month') ;
					}
				});
				
			});
			
		} else if (selectedOption === 'static_ipv6') {
			selectedArray = arrayCountry[1];
			weblang == 'vi' ? total.text('4.000₫') : total.text('$ 0.18') ;
			weblang == 'vi' ? priceBottom.text('4.000₫/Proxy/Tháng') : priceBottom.text('$ 0.18/Proxy/Month') ;
			
		} else if (selectedOption === 'rotating_ipv6') {
			selectedArray = arrayCountry[2];
			weblang == 'vi' ? total.text('8.000₫') : total.text('$ 0.36') ;
			weblang == 'vi' ? priceBottom.text('8.000₫/Proxy/Tháng') : priceBottom.text('$ 0.36/Proxy/Month') ;
		}

		// Xóa tất cả các options hiện có trong select country_ipv6
		$('#country_ipv6').empty();

		// Lặp qua mảng đã chọn để thêm options vào select country_ipv6
		$.each(selectedArray, function(index, item) {
			var name = (weblang == 'vi') ? item.data_namevi : item.data_name; // Kiểm tra điều kiện weblang
			$('#country_ipv6').append($('<option>', {
				value: item.data_value,
				text: item.data_name
			}));
		});
	});
	

// 	BuildProxyForm(arr_service[0]);
});
</script>

</body>
</html>