$ ->
  tri1 = $('.hot_news-more svg.svg_icon-triangle_right')
  tri2 = $('.hot_news-more svg.svg_icon-triangle_right-more')
  pdt_sub = $('.pdt-sub_cate')
  $('.main_nav-item.item1').click (event) ->
    isOpen $('.js-subNav'), $('.js-subNav.open')
    return
  $('.hot_news-more a').hover (->
    $(this).find('.animated').each ->
      $(this).addClass 'bounce'
      return
    return
  ), ->
    $(this).find('.animated').removeClass 'bounce'
    return

  pdt_sub.hide()
  $('.js-pdt-main_cate').click () ->
    if $(@).closest("li").children('div.pdt-sub_cate').length > 0
      console.log "yoyo"
      if !$(this).hasClass('open')
        $('.js-pdt-main_cate.open').children('.pdt-sub_cate').hide()
        $('.js-pdt-main_cate.open').removeClass 'open'
        $(this).addClass 'open'
        $(this).children('.pdt-sub_cate').show()
      else
        $('.js-pdt-main_cate.open').removeClass 'open'
        $(this).children('.pdt-sub_cate').hide()
      return
  return
