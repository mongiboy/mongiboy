"use strict";function _defineProperty(t,e,o){return e in t?Object.defineProperty(t,e,{value:o,enumerable:!0,configurable:!0,writable:!0}):t[e]=o,t}$(function(){$("a[href^='#']").click(function(){var t=$(this).attr("href");return $("html, body").animate({scrollTop:$(t).offset().top+"px"}),!1})});var top_height=$(".top_no_fixed").innerHeight();function fixed_top_switch(){window.pageYOffset>top_height?$(".top_fixed").addClass("top_fixed_show"):$(".top_fixed").removeClass("top_fixed_show")}$(window).on("scroll",function(){fixed_top_switch()}),$(window).on("load",function(){fixed_top_switch()});var active_class="before_close_popap_active",del_class=active_class+" popap_clear";function form_show(){$("body").addClass(del_class)}$("body").on("click",".fancybox-caption__body",form_show),$(".gallery__elem").on("click",function(){$('form input[name="form"]').val($(this).attr("data-name"))}),$(".material__slider").slick({slidesToShow:3,slidesToScroll:1,prevArrow:'<button type="button" class="slick-prev"><</button>',nextArrow:'<button type="button" class="slick-next">></button>'}),$(".material__sliders-block").slick({slidesToShow:1,slidesToScroll:1,dots:!0,prevArrow:!1,nextArrow:!1});var conf={inp:'input[name="phone"]',musk:"+7 (999) 999-99-99[9]"};console.log(null!=$(conf.inp).inputmask),null!=$(conf.inp).inputmask&&$(conf.inp).inputmask(conf.musk),$(".clockpicker").clockpicker(),function(){var _="example-work__content_gallery_elem_hidden",i={show:"Еще примеры",hidden:"Скрыть"},r={},s={};$(".wrapper_relative").on("click",function(t){"absolute_layer"==t.target.className&&$(this).find(".child_fancy").trigger("click")}),$(".example-work__content_more").on("click",function(){var t,e,o,a,n=$(this).attr("data-type"),l=$('.example-work__content_gallery[data-id="'+n+'"]');if(void 0===r[n]){var c="";console.dir(example_works_elem),$.each(example_works_elem[n],function(t,e){var o,a,n,l,i,r,s;c+=(o=e.img,a=e.description,n=e.slider,l=e.name,i=e.description_bottom,'<div class="cell example-work__content_gallery_elem example-work__content_gallery_elem-'+(t+5)+" "+_+'">\t\t\t\t\t<div>\t\t\t\t\t\t<div class="example-work__content_gallery_elem_img" data-slider='+(r=n,s=[],$.each(r,function(t,e){s.push(e)}),"'"+JSON.stringify(s)+"'")+'>\t\t\t\t\t\t\t<div class="example-work__content_gallery_elem_img_overlay"></div>\t\t\t\t\t\t\t<img src="'+o+'" alt="Изображение">\t\t\t\t\t\t</div>\t\t\t\t\t\t<div class="example-work__content_gallery_elem_name">'+l+'</div>\t\t\t\t\t\t<div class="example-work__content_gallery_elem_desc">'+a+'</div>\t\t\t\t\t</div>\t\t\t\t\t<div>\t\t\t\t\t\t<div class="example-work__content_gallery_elem_desc_bottom">'+i+'</div>\t\t\t\t\t\t<div class="example-work__content_gallery_elem_wrap_btn"><button \t\t\t\t\t\tclass="example-work__content_gallery_elem_btn btn" \t\t\t\t\t\tdata-formname="Отправить стоимость Комплекса" \t\t\t\t\t\tdata-formdesc="Укажите свои данные"\t\t\t\t\t\tdata-form=\'Комплекс: '+l+"'\t\t\t\t\t\tdata-name='"+l+"'>\t\t\t\t\t\tУзнать стоимость</button></div>\t\t\t\t\t</div>\t\t\t\t</div>")}),$(c).appendTo(l),r[n]=!0}else t=l,e=s[n]?"flex":"none",t.toggleClass("example_elem_show"),t.find("."+_).css({display:e}),s[n]=!s[n];a=s[o=n]?i.show:i.hidden,$('.example-work__content_more[data-type="'+o+'"]').html(a),s[n]&&$(window).scrollTop(l.offset().top)})}(),function(){var e=!0,o="before_close_popap_active",a=o+" popap_clear",n="phone_call",l='.before_close_popap__form input[name="form"]',i="form_result_active";function t(t){$(l).val($(this).attr("data-form")),null!=$(this).attr("data-konf")&&$('.before_close_popap__form input[name="konf"]').val($(this).attr("data-konf")),null!=$(this).attr("data-formname")&&($(".before_close_popap__form_name").html($(this).attr("data-formname")),$(".before_close_popap__form_desc").html($(this).attr("data-formdesc"))),$("body").addClass(a),!0===t?$("body").addClass(n):$("body").removeClass(n)}$("body").on("mouseleave",function(t){(t=t||event).clientY<1&&e&&($(l).val("Предложение при попытке выхода с сайта!"),$("body").addClass(o),$("body").removeClass("phone_call popap_clear"),e=!1)}),$(".before_close_popap__exit").on("click",function(){$("body").removeClass(a)}),$(".float_phone img").on("click",function(){t.call(this,!0)}),$(".btn-popap").on("click",t),$(".example-work__content_gallery").on("click",".example-work__content_gallery_elem_btn",t),$(".float_phone_close").on("click",function(){$(".float_phone").css({display:"none"})}),$("form.before_close_popap__form").on("submit",function(t){t.preventDefault();var e=$(this).serialize();console.log(e),$.ajax({type:"POST",url:"send.php",data:e,complete:function(t,e){"success"==e&&"success"==t.responseText?(console.log("Форма отправлена"),$(".before_close_popap__exit").trigger("click"),$("body").addClass(i),setTimeout(function(){$("body").removeClass(i)},15e3)):alert("При отправке данных произошла ошибка! попробуйте еще раз!")}})}),$(".form_result__close span").on("click",function(){$("body").removeClass(i)})}(),$(".example-work__content_gallery").on("click",".example-work__content_gallery_elem_img",function(){var t,o,e=[];try{e=JSON.parse($(this).attr("data-slider"))}catch(t){console.log(t)}$.fancybox.open((t=e,o=[],$.each(t,function(t,e){o.push({src:e,opts:{clickContent:function(){return!1},afterLoad:function(t,e){return!1},loop:!0,thumb:e,buttons:["close"]}})}),o))}),function(){var t=".designer",e=".designer__options",o="show_constuctor",a=".designer__constructor-elem",n=".designer__constructor-elem-pipe",l=".designer__constructor-layout-price",s={elems:{},width_parent_layout:795,callbacks:{hidden_animate:{overlay:r}},counter_show_elem:0};function i(){$(".designer__constructor-layout_l_r").height($(".designer__opacity-layout").height());var n=$(".designer__opacity-layout img").width(),l={};$.each(s.elems,function(t,e){var o=Math.floor(e.width/s.width_parent_layout*n),a=Math.floor(o*e.height/e.width);!function(t,e){if(void 0===t[e])return t[e]={},t[e].count=1,t[e].val=e;t[e].count++}(l,String(a))});var i=function(t){var e={count:0};for(var o in t)e.count<t[o].count&&(e.count=t[o].count,e.val=t[o].val);return e.val}(l);$.each(s.elems,function(t,e){var o=Math.floor(e.width/s.width_parent_layout*n),a=Math.floor(o*e.height/e.width);$(e.mirror_sel).css({width:o,height:i-2<a||i+2<a?i:a})}),$(s.pipe.sel).width(Math.floor(s.pipe.width/s.width_parent_layout*n))}function r(){s.opacity_layout?$(t).addClass(o):$(t).removeClass(o)}function c(t,e){var o;t?(o=e,$(o).css({display:"block"}),$(o).innerHeight(),$(o).css({transform:"rotateY(0deg)"})):function(t){$(t).css({transform:"rotateY(90deg)"});var e=function(t,e){for(var o in $(t).css({display:"none"}),e)e[o]()}.bind(null,t,s.callbacks.hidden_animate);setTimeout(e,300)}(e)}$(".material__category-elem").on("click",function(){var t=$(this).attr("data-active"),o=$(this);if("true"==t)return!0;$(".material__category-elem").each(function(t,e){$(e).attr(_defineProperty({},"data-active","false"))}),$(this).attr(_defineProperty({},"data-active","true")),$(".material__sliders-elem").each(function(t,e){$(e).attr("data-slack")!=o.attr("data-slack")?$(e).css({display:"none"}):($(e).css({display:"flex"}),$('.material__sliders-elem[data-slack="'+$(e).attr("data-slack")+'"] .material__sliders-block').slick("refresh"))})}),$(e+" input").each(function(t,e){var o=$(e).attr("name");s.elems[o]={show:!1,pipe:"true"==$(e).attr("data-pipe"),sel:e,mirror_sel:$(a+'[data-name="'+o+'"]')[0],price:$(e).attr("data-price"),width:+$(e).attr("data-width"),height:+$(e).attr("data-height"),name:$(e).attr("data-title")}}),$(window).on("load",i),$(window).on("resize",i),s.pipe={show:!1,sel:$(n)[0],sel_wrap:$(n+"-wrap")[0],width:+$(n).attr("data-width")},s.opacity_layout=!0,s.opacity_layout_change=!1,s.price=0,$(e+" input").on("click",function(){var t;!function(t){var e=$(t).attr("name");s.elems[e].show=$(t).prop("checked");var o=[],a=0,n=!1,l=!1,i=0,r=!1;$.each(s.elems,function(t,e){e.show&&(o.push(e.name),a++,r=!0,i+=parseInt(e.price)),e.show&&e.pipe&&(l=!0)}),s.price=i,s.opacity_layout=r,s.pipe.show=!!l;0==a&&1==s.counter_show_elem&&(n=!0);1==a&&0==s.counter_show_elem&&(n=!0);s.show_element=o,s.opacity_layout_change=n,s.counter_show_elem=a}(this),s.opacity_layout&&s.opacity_layout_change&&r(),console.log(s),console.log(JSON.stringify(s.show_element)),0<s.show_element.length&&$(".designer__constructor-layout_btn").attr(_defineProperty({},"data-konf",JSON.stringify(s.show_element))),c(s.pipe.show,s.pipe.sel),$.each(s.elems,function(t,e){c(e.show,e.mirror_sel)}),t="от <span>"+s.price+"</span> тыс. руб.",$(l).html(t)})}(),null!=$('.popap input[name="phone"]').inputmask&&$('.popap input[name="phone"]').inputmask("+7 (999) 999-99-99");