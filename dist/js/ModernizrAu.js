//查詢瀏覽器
var WHAT = navigator.userAgent;
console.log(WHAT);
var userAgent = window.WHAT.toLowerCase();


// ----------------------------------------------------------
// A short snippet for detecting versions of IE in JavaScript
// without resorting to user-agent sniffing
// ----------------------------------------------------------
// If you're not in IE (or IE version is less than 5) then:
//     ie === undefined
// If you're in IE (>=5) then you can determine which version:
//     ie === 7; // IE7
// Thus, to detect IE:
//     if (ie) {}
// And to detect the version:
//     ie === 6 // IE6
//     ie > 7 // IE8, IE9 ...
//     ie < 9 // Anything less than IE9
// ----------------------------------------------------------
 
// UPDATE: Now using Live NodeList idea from @jdalton
 
var ie = (function(){
 
    var undef,
        v = 3,
        div = document.createElement('div'),
        all = div.getElementsByTagName('i');
 
    while (
        div.innerHTML = '<!--[if gt IE ' + (++v) + ']><i></i><![endif]-->',
        all[0]
    );
 
    return v > 4 ? v : undef;
 
}());



/**
 * Modernizr
 */
if(Modernizr.textshadow){
    // console.log('你的瀏覽器支援textshadow');
}else{
  // not support
  console.log("你的瀏覽器不支援textshadow");
}
if(Modernizr.input.placeholder){
    // console.log('你的瀏覽器支援input placeholder');
}else{
  // not support
  console.log("你的瀏覽器不支援input placeholder");
}
if(Modernizr.inputtypes.search){
    // console.log('你的瀏覽器支援input search');
}else{
  // not support
  console.log("你的瀏覽器不支援input search");
}
if(Modernizr.input.pattern){
    // console.log('你的瀏覽器支援input pattern');
}else{
  // not support
  console.log("你的瀏覽器不支援input pattern");
}
if(Modernizr.input.required){
    // console.log('你的瀏覽器支援input required');
}else{
  // not support
  console.log("你的瀏覽器不支援input required");
}
if(Modernizr.csscolumns){
    // console.log('你的瀏覽器支援csscolumns');
}else{
  // not support
  console.log("你的瀏覽器不支援csscolumns");
}


