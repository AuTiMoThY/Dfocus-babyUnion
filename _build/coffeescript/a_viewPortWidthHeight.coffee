viewPortWidthHeight = ->
  wh = {}
  if window.innerWidth
    wh.width = window.innerWidth
    wh.height = window.innerHeight
  else if document.documentElement.clientWidth
    wh.width = document.documentElement.clientWidth
    wh.height = document.documentElement.clientHeight
  else if document.body.clientWidth
    wh.width = document.body.clientWidth
    wh.height = document.body.clientHeight
  wh

viewPortWH = viewPortWidthHeight()
viewPortW = viewPortWH.width
viewPortH = viewPortWH.height