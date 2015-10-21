###
#	isOpen
###

isOpen = ($this, $thisClass) ->
  if !$this.hasClass('open')
    $this.addClass 'open'
  else
    $thisClass.removeClass 'open'
  return