###
# function
###

root = exports ? this

root.addcart = (say = '此商品已加入購物車')->
  alert say
  # alert '此商品已在購物清單中，如欲修改數量請至購物流程更改。'
  # return

root.removecart = () ->
	confirm '確定刪除此商品?'