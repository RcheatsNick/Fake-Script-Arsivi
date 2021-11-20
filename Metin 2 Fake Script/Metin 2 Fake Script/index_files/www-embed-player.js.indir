(function(){var l,aa="function"==typeof Object.create?Object.create:function(a){function b(){}
b.prototype=a;return new b},ba;
if("function"==typeof Object.setPrototypeOf)ba=Object.setPrototypeOf;else{var ca;a:{var da={wa:!0},ea={};try{ea.__proto__=da;ca=ea.wa;break a}catch(a){}ca=!1}ba=ca?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var fa=ba;
function n(a,b){a.prototype=aa(b.prototype);a.prototype.constructor=a;if(fa)fa(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.u=b.prototype}
for(var ha="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)},ia="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,ja=function(){function a(){function a(){}
Reflect.construct(a,[],function(){});
return new a instanceof a}
if("undefined"!=typeof Reflect&&Reflect.construct){if(a())return Reflect.construct;var b=Reflect.construct;return function(a,d,e){a=b(a,d);e&&Reflect.setPrototypeOf(a,e.prototype);return a}}return function(a,b,e){void 0===e&&(e=a);
e=aa(e.prototype||Object.prototype);return Function.prototype.apply.call(a,e,b)||e}}(),ka=ia,la=["Reflect",
"construct"],ma=0;ma<la.length-1;ma++){var na=la[ma];na in ka||(ka[na]={});ka=ka[na]}var oa=la[la.length-1];ja!=ka[oa]&&null!=ja&&ha(ka,oa,{configurable:!0,writable:!0,value:ja});var p=this;function q(a){return void 0!==a}
function r(a){return"string"==typeof a}
function t(a,b,c){a=a.split(".");c=c||p;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)!a.length&&q(b)?c[d]=b:c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}}
function u(a,b){for(var c=a.split("."),d=b||p,e=0;e<c.length;e++)if(d=d[c[e]],null==d)return null;return d}
function v(){}
function pa(a){a.ja=void 0;a.getInstance=function(){return a.ja?a.ja:a.ja=new a}}
function qa(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b}
function ra(a){return"array"==qa(a)}
function sa(a){var b=qa(a);return"array"==b||"object"==b&&"number"==typeof a.length}
function ta(a){return"function"==qa(a)}
function ua(a){var b=typeof a;return"object"==b&&null!=a||"function"==b}
var va="closure_uid_"+(1E9*Math.random()>>>0),wa=0;function xa(a,b,c){return a.call.apply(a.bind,arguments)}
function ya(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}}
function w(a,b,c){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?w=xa:w=ya;return w.apply(null,arguments)}
function x(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}}
var z=Date.now||function(){return+new Date};
function A(a,b){function c(){}
c.prototype=b.prototype;a.u=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.gb=function(a,c,f){for(var d=Array(arguments.length-2),e=2;e<arguments.length;e++)d[e-2]=arguments[e];return b.prototype[c].apply(a,d)}}
;function B(a){if(Error.captureStackTrace)Error.captureStackTrace(this,B);else{var b=Error().stack;b&&(this.stack=b)}a&&(this.message=String(a))}
A(B,Error);B.prototype.name="CustomError";var za=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")};
function Aa(a,b){return a<b?-1:a>b?1:0}
function Da(a){for(var b=0,c=0;c<a.length;++c)b=31*b+a.charCodeAt(c)>>>0;return b}
;var Ea=Array.prototype.indexOf?function(a,b,c){return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;
if(r(a))return r(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},C=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=r(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)},Fa=Array.prototype.filter?function(a,b,c){return Array.prototype.filter.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=[],f=0,g=r(a)?a.split(""):a,h=0;h<d;h++)if(h in g){var k=g[h];
b.call(c,k,h,a)&&(e[f++]=k)}return e},Ga=Array.prototype.map?function(a,b,c){return Array.prototype.map.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=Array(d),f=r(a)?a.split(""):a,g=0;g<d;g++)g in f&&(e[g]=b.call(c,f[g],g,a));
return e};
function Ha(a,b){a:{var c=a.length;for(var d=r(a)?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){c=e;break a}c=-1}return 0>c?null:r(a)?a.charAt(c):a[c]}
function Ia(a,b){var c=Ea(a,b);0<=c&&Array.prototype.splice.call(a,c,1)}
function Ja(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]}
function Ka(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(sa(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
;var La;a:{var Ma=p.navigator;if(Ma){var Na=Ma.userAgent;if(Na){La=Na;break a}}La=""}function D(a){return-1!=La.indexOf(a)}
;function Oa(a,b){var c=sa(b),d=c?b:arguments;for(c=c?0:1;c<d.length;c++){if(null==a)return;a=a[d[c]]}return a}
function Pa(a){var b=Qa,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function Ra(a){for(var b in a)return!1;return!0}
function Sa(a,b){if(null!==a&&b in a)throw Error('The object already contains the key "'+b+'"');a[b]=!0}
function Ta(a){var b={},c;for(c in a)b[c]=a[c];return b}
var Ua="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function Va(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<Ua.length;f++)c=Ua[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;function Wa(a){Wa[" "](a);return a}
Wa[" "]=v;function Xa(a,b){var c=Ya;return Object.prototype.hasOwnProperty.call(c,a)?c[a]:c[a]=b(a)}
;var Za=D("Opera"),E=D("Trident")||D("MSIE"),$a=D("Edge"),ab=D("Gecko")&&!(-1!=La.toLowerCase().indexOf("webkit")&&!D("Edge"))&&!(D("Trident")||D("MSIE"))&&!D("Edge"),bb=-1!=La.toLowerCase().indexOf("webkit")&&!D("Edge");function cb(){var a=p.document;return a?a.documentMode:void 0}
var db;a:{var eb="",fb=function(){var a=La;if(ab)return/rv\:([^\);]+)(\)|;)/.exec(a);if($a)return/Edge\/([\d\.]+)/.exec(a);if(E)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(bb)return/WebKit\/(\S+)/.exec(a);if(Za)return/(?:Version)[ \/]?(\S+)/.exec(a)}();
fb&&(eb=fb?fb[1]:"");if(E){var gb=cb();if(null!=gb&&gb>parseFloat(eb)){db=String(gb);break a}}db=eb}var hb=db,Ya={};
function F(a){return Xa(a,function(){for(var b=0,c=za(String(hb)).split("."),d=za(String(a)).split("."),e=Math.max(c.length,d.length),f=0;0==b&&f<e;f++){var g=c[f]||"",h=d[f]||"";do{g=/(\d*)(\D*)(.*)/.exec(g)||["","","",""];h=/(\d*)(\D*)(.*)/.exec(h)||["","","",""];if(0==g[0].length&&0==h[0].length)break;b=Aa(0==g[1].length?0:parseInt(g[1],10),0==h[1].length?0:parseInt(h[1],10))||Aa(0==g[2].length,0==h[2].length)||Aa(g[2],h[2]);g=g[3];h=h[3]}while(0==b)}return 0<=b})}
var ib;var jb=p.document;ib=jb&&E?cb()||("CSS1Compat"==jb.compatMode?parseInt(hb,10):5):void 0;!ab&&!E||E&&9<=Number(ib)||ab&&F("1.9.1");E&&F("9");function kb(){this.b="";this.g=lb}
kb.prototype.ia=!0;kb.prototype.ha=function(){return this.b};
function mb(a){return a instanceof kb&&a.constructor===kb&&a.g===lb?a.b:"type_error:TrustedResourceUrl"}
var lb={};function nb(){this.b="";this.g=pb}
nb.prototype.ia=!0;nb.prototype.ha=function(){return this.b};
function qb(a){return a instanceof nb&&a.constructor===nb&&a.g===pb?a.b:"type_error:SafeUrl"}
var rb=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;function sb(a){if(a instanceof nb)return a;a=a.ia?a.ha():String(a);rb.test(a)||(a="about:invalid#zClosurez");return tb(a)}
var pb={};function tb(a){var b=new nb;b.b=a;return b}
tb("about:blank");function ub(){this.b=""}
ub.prototype.ia=!0;ub.prototype.ha=function(){return this.b};
function vb(a){var b=new ub;b.b=a;return b}
vb("<!DOCTYPE html>");vb("");vb("<br>");function wb(a,b){var c=b instanceof nb?b:sb(b);a.href=qb(c)}
function xb(a,b){a.src=mb(b)}
;function yb(a,b){this.x=q(a)?a:0;this.y=q(b)?b:0}
yb.prototype.equals=function(a){return a instanceof yb&&(this==a?!0:this&&a?this.x==a.x&&this.y==a.y:!1)};
yb.prototype.ceil=function(){this.x=Math.ceil(this.x);this.y=Math.ceil(this.y);return this};
yb.prototype.floor=function(){this.x=Math.floor(this.x);this.y=Math.floor(this.y);return this};
yb.prototype.round=function(){this.x=Math.round(this.x);this.y=Math.round(this.y);return this};function zb(a,b){this.width=a;this.height=b}
l=zb.prototype;l.aspectRatio=function(){return this.width/this.height};
l.isEmpty=function(){return!(this.width*this.height)};
l.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
l.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
l.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};function Ab(a){var b=document;return r(a)?b.getElementById(a):a}
function Bb(a){if(!a)return null;if(a.firstChild)return a.firstChild;for(;a&&!a.nextSibling;)a=a.parentNode;return a?a.nextSibling:null}
function Cb(a){if(!a)return null;if(!a.previousSibling)return a.parentNode;for(a=a.previousSibling;a&&a.lastChild;)a=a.lastChild;return a}
function Db(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;function Eb(a){Fb();var b=new kb;b.b=a;return b}
var Fb=v;var Gb=document,G=window;function Hb(a){"number"==typeof a&&(a=Math.round(a)+"px");return a}
;var Ib=(new Date).getTime();function Jb(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));a=a.substring(0,a.indexOf("://"));if("http"!==a&&"https"!==a&&"chrome-extension"!==a&&"file"!==a&&"android-app"!==a&&"chrome-search"!==a)throw Error("Invalid URI scheme in origin");c="";var d=b.indexOf(":");if(-1!=d){var e=b.substring(d+
1);b=b.substring(0,d);if("http"===a&&"80"!==e||"https"===a&&"443"!==e)c=":"+e}return a+"://"+b+c}
;function Kb(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;y=m=0}
function b(a){for(var b=g,c=0;64>c;c+=4)b[c/4]=a[c]<<24|a[c+1]<<16|a[c+2]<<8|a[c+3];for(c=16;80>c;c++)a=b[c-3]^b[c-8]^b[c-14]^b[c-16],b[c]=(a<<1|a>>>31)&4294967295;a=e[0];var d=e[1],f=e[2],h=e[3],k=e[4];for(c=0;80>c;c++){if(40>c)if(20>c){var m=h^d&(f^h);var Q=1518500249}else m=d^f^h,Q=1859775393;else 60>c?(m=d&f|h&(d|f),Q=2400959708):(m=d^f^h,Q=3395469782);m=((a<<5|a>>>27)&4294967295)+m+k+Q+b[c]&4294967295;k=h;h=f;f=(d<<30|d>>>2)&4294967295;d=a;a=m}e[0]=e[0]+a&4294967295;e[1]=e[1]+d&4294967295;e[2]=
e[2]+f&4294967295;e[3]=e[3]+h&4294967295;e[4]=e[4]+k&4294967295}
function c(a,c){if("string"===typeof a){a=unescape(encodeURIComponent(a));for(var d=[],e=0,g=a.length;e<g;++e)d.push(a.charCodeAt(e));a=d}c||(c=a.length);d=0;if(0==m)for(;d+64<c;)b(a.slice(d,d+64)),d+=64,y+=64;for(;d<c;)if(f[m++]=a[d++],y++,64==m)for(m=0,b(f);d+64<c;)b(a.slice(d,d+64)),d+=64,y+=64}
function d(){var a=[],d=8*y;56>m?c(h,56-m):c(h,64-(m-56));for(var g=63;56<=g;g--)f[g]=d&255,d>>>=8;b(f);for(g=d=0;5>g;g++)for(var k=24;0<=k;k-=8)a[d++]=e[g]>>k&255;return a}
for(var e=[],f=[],g=[],h=[128],k=1;64>k;++k)h[k]=0;var m,y;a();return{reset:a,update:c,digest:d,ya:function(){for(var a=d(),b="",c=0;c<a.length;c++)b+="0123456789ABCDEF".charAt(Math.floor(a[c]/16))+"0123456789ABCDEF".charAt(a[c]%16);return b}}}
;function Lb(a,b,c){var d=[],e=[];if(1==(ra(c)?2:1))return e=[b,a],C(d,function(a){e.push(a)}),Mb(e.join(" "));
var f=[],g=[];C(c,function(a){g.push(a.key);f.push(a.value)});
c=Math.floor((new Date).getTime()/1E3);e=0==f.length?[c,b,a]:[f.join(":"),c,b,a];C(d,function(a){e.push(a)});
a=Mb(e.join(" "));a=[c,a];0==g.length||a.push(g.join(""));return a.join("_")}
function Mb(a){var b=Kb();b.update(a);return b.ya().toLowerCase()}
;function Nb(a){this.b=a||{cookie:""}}
l=Nb.prototype;l.isEnabled=function(){return navigator.cookieEnabled};
l.set=function(a,b,c,d,e,f){if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');q(c)||(c=-1);e=e?";domain="+e:"";d=d?";path="+d:"";f=f?";secure":"";c=0>c?"":0==c?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(z()+1E3*c)).toUTCString();this.b.cookie=a+"="+b+e+d+c+f};
l.get=function(a,b){for(var c=a+"=",d=(this.b.cookie||"").split(";"),e=0,f;e<d.length;e++){f=za(d[e]);if(0==f.lastIndexOf(c,0))return f.substr(c.length);if(f==a)return""}return b};
l.remove=function(a,b,c){var d=q(this.get(a));this.set(a,"",0,b,c);return d};
l.isEmpty=function(){return!this.b.cookie};
l.clear=function(){for(var a=(this.b.cookie||"").split(";"),b=[],c=[],d,e,f=0;f<a.length;f++)e=za(a[f]),d=e.indexOf("="),-1==d?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));for(a=b.length-1;0<=a;a--)this.remove(b[a])};
var Ob=new Nb("undefined"==typeof document?null:document);Ob.g=3950;function Pb(){var a=[],b=Jb(String(p.location.href)),c=p.__OVERRIDE_SID;null==c&&(c=(new Nb(document)).get("SID"));if(c&&(b=(c=0==b.indexOf("https:")||0==b.indexOf("chrome-extension:"))?p.__SAPISID:p.__APISID,null==b&&(b=(new Nb(document)).get(c?"SAPISID":"APISID")),b)){c=c?"SAPISIDHASH":"APISIDHASH";var d=String(p.location.href);return d&&b&&c?[c,Lb(Jb(d),b,a||null)].join(" "):null}return null}
;function Qb(a,b,c){this.h=c;this.f=a;this.i=b;this.g=0;this.b=null}
Qb.prototype.get=function(){if(0<this.g){this.g--;var a=this.b;this.b=a.next;a.next=null}else a=this.f();return a};
function Rb(a,b){a.i(b);a.g<a.h&&(a.g++,b.next=a.b,a.b=b)}
;function Sb(a){p.setTimeout(function(){throw a;},0)}
var Tb;
function Ub(){var a=p.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!D("Presto")&&(a=function(){var a=document.createElement("IFRAME");a.style.display="none";a.src="";document.documentElement.appendChild(a);var b=a.contentWindow;a=b.document;a.open();a.write("");a.close();var c="callImmediate"+Math.random(),d="file:"==b.location.protocol?"*":b.location.protocol+"//"+b.location.host;a=w(function(a){if(("*"==d||a.origin==d)&&a.data==
c)this.port1.onmessage()},this);
b.addEventListener("message",a,!1);this.port1={};this.port2={postMessage:function(){b.postMessage(c,d)}}});
if("undefined"!==typeof a&&!D("Trident")&&!D("MSIE")){var b=new a,c={},d=c;b.port1.onmessage=function(){if(q(c.next)){c=c.next;var a=c.oa;c.oa=null;a()}};
return function(a){d.next={oa:a};d=d.next;b.port2.postMessage(0)}}return"undefined"!==typeof document&&"onreadystatechange"in document.createElement("SCRIPT")?function(a){var b=document.createElement("SCRIPT");
b.onreadystatechange=function(){b.onreadystatechange=null;b.parentNode.removeChild(b);b=null;a();a=null};
document.documentElement.appendChild(b)}:function(a){p.setTimeout(a,0)}}
;function Vb(){this.g=this.b=null}
var Xb=new Qb(function(){return new Wb},function(a){a.reset()},100);
Vb.prototype.remove=function(){var a=null;this.b&&(a=this.b,this.b=this.b.next,this.b||(this.g=null),a.next=null);return a};
function Wb(){this.next=this.scope=this.b=null}
Wb.prototype.set=function(a,b){this.b=a;this.scope=b;this.next=null};
Wb.prototype.reset=function(){this.next=this.scope=this.b=null};function Yb(a,b){Zb||$b();ac||(Zb(),ac=!0);var c=bc,d=Xb.get();d.set(a,b);c.g?c.g.next=d:c.b=d;c.g=d}
var Zb;function $b(){if(-1!=String(p.Promise).indexOf("[native code]")){var a=p.Promise.resolve(void 0);Zb=function(){a.then(cc)}}else Zb=function(){var a=cc;
!ta(p.setImmediate)||p.Window&&p.Window.prototype&&!D("Edge")&&p.Window.prototype.setImmediate==p.setImmediate?(Tb||(Tb=Ub()),Tb(a)):p.setImmediate(a)}}
var ac=!1,bc=new Vb;function cc(){for(var a;a=bc.remove();){try{a.b.call(a.scope)}catch(b){Sb(b)}Rb(Xb,a)}ac=!1}
;var dc=D("Firefox"),ec=(D("Chrome")||D("CriOS"))&&!D("Edge");function H(){this.g=this.g;this.F=this.F}
H.prototype.g=!1;H.prototype.dispose=function(){this.g||(this.g=!0,this.l())};
function fc(a,b){a.g?q(void 0)?b.call(void 0):b():(a.F||(a.F=[]),a.F.push(q(void 0)?w(b,void 0):b))}
H.prototype.l=function(){if(this.F)for(;this.F.length;)this.F.shift()()};
function gc(a){a&&"function"==typeof a.dispose&&a.dispose()}
function hc(a){for(var b=0,c=arguments.length;b<c;++b){var d=arguments[b];sa(d)?hc.apply(null,d):gc(d)}}
;function ic(a){if(a.classList)return a.classList;a=a.className;return r(a)&&a.match(/\S+/g)||[]}
function jc(a,b){if(a.classList)var c=a.classList.contains(b);else c=ic(a),c=0<=Ea(c,b);return c}
function kc(){var a=document.body;a.classList?a.classList.remove("inverted-hdpi"):jc(a,"inverted-hdpi")&&(a.className=Fa(ic(a),function(a){return"inverted-hdpi"!=a}).join(" "))}
;var lc="StopIteration"in p?p.StopIteration:{message:"StopIteration",stack:""};function mc(){}
mc.prototype.next=function(){throw lc;};
mc.prototype.X=function(){return this};
function nc(a){if(a instanceof mc)return a;if("function"==typeof a.X)return a.X(!1);if(sa(a)){var b=0,c=new mc;c.next=function(){for(;;){if(b>=a.length)throw lc;if(b in a)return a[b++];b++}};
return c}throw Error("Not implemented");}
function oc(a,b){if(sa(a))try{C(a,b,void 0)}catch(c){if(c!==lc)throw c;}else{a=nc(a);try{for(;;)b.call(void 0,a.next(),void 0,a)}catch(c){if(c!==lc)throw c;}}}
function pc(a){if(sa(a))return Ja(a);a=nc(a);var b=[];oc(a,function(a){b.push(a)});
return b}
;E&&F("9");!bb||F("528");ab&&F("1.9b")||E&&F("8")||Za&&F("9.5")||bb&&F("528");ab&&!F("8")||E&&F("9");(function(){if(!p.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
p.addEventListener("test",v,b);p.removeEventListener("test",v,b);return a})();function qc(a){var b=[];rc(new sc,a,b);return b.join("")}
function sc(){}
function rc(a,b,c){if(null==b)c.push("null");else{if("object"==typeof b){if(ra(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),rc(a,d[f],c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");e="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(f=b[d],"function"!=typeof f&&(c.push(e),tc(d,c),c.push(":"),rc(a,f,c),e=","));c.push("}");return}}switch(typeof b){case "string":tc(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}
var uc={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},vc=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g;function tc(a,b){b.push('"',a.replace(vc,function(a){var b=uc[a];b||(b="\\u"+(a.charCodeAt(0)|65536).toString(16).substr(1),uc[a]=b);return b}),'"')}
;function wc(a){a.prototype.then=a.prototype.then;a.prototype.$goog_Thenable=!0}
function xc(a){if(!a)return!1;try{return!!a.$goog_Thenable}catch(b){return!1}}
;function I(a,b){this.b=0;this.m=void 0;this.h=this.g=this.f=null;this.i=this.j=!1;if(a!=v)try{var c=this;a.call(b,function(a){yc(c,2,a)},function(a){yc(c,3,a)})}catch(d){yc(this,3,d)}}
function zc(){this.next=this.context=this.g=this.h=this.b=null;this.f=!1}
zc.prototype.reset=function(){this.context=this.g=this.h=this.b=null;this.f=!1};
var Ac=new Qb(function(){return new zc},function(a){a.reset()},100);
function Bc(a,b,c){var d=Ac.get();d.h=a;d.g=b;d.context=c;return d}
function Cc(a){return new I(function(b,c){c(a)})}
function Dc(a,b,c){Ec(a,b,c,null)||Yb(x(b,a))}
function Fc(a){return new I(function(b,c){a.length||b(void 0);for(var d=0,e;d<a.length;d++)e=a[d],Dc(e,b,c)})}
function Gc(a){return new I(function(b){var c=a.length,d=[];if(c)for(var e=function(a,e,f){c--;d[a]=e?{ea:!0,value:f}:{ea:!1,reason:f};0==c&&b(d)},f=0,g;f<a.length;f++)g=a[f],Dc(g,x(e,f,!0),x(e,f,!1));
else b(d)})}
I.prototype.then=function(a,b,c){return Hc(this,ta(a)?a:null,ta(b)?b:null,c)};
wc(I);function Ic(a,b){var c=Bc(b,b,void 0);c.f=!0;Jc(a,c);return a}
function Kc(a,b){return Hc(a,null,b,void 0)}
I.prototype.cancel=function(a){0==this.b&&Yb(function(){var b=new Lc(a);Mc(this,b)},this)};
function Mc(a,b){if(0==a.b)if(a.f){var c=a.f;if(c.g){for(var d=0,e=null,f=null,g=c.g;g&&(g.f||(d++,g.b==a&&(e=g),!(e&&1<d)));g=g.next)e||(f=g);e&&(0==c.b&&1==d?Mc(c,b):(f?(d=f,d.next==c.h&&(c.h=d),d.next=d.next.next):Nc(c),Oc(c,e,3,b)))}a.f=null}else yc(a,3,b)}
function Jc(a,b){a.g||2!=a.b&&3!=a.b||Pc(a);a.h?a.h.next=b:a.g=b;a.h=b}
function Hc(a,b,c,d){var e=Bc(null,null,null);e.b=new I(function(a,g){e.h=b?function(c){try{var e=b.call(d,c);a(e)}catch(m){g(m)}}:a;
e.g=c?function(b){try{var e=c.call(d,b);!q(e)&&b instanceof Lc?g(b):a(e)}catch(m){g(m)}}:g});
e.b.f=a;Jc(a,e);return e.b}
I.prototype.w=function(a){this.b=0;yc(this,2,a)};
I.prototype.A=function(a){this.b=0;yc(this,3,a)};
function yc(a,b,c){0==a.b&&(a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself")),a.b=1,Ec(c,a.w,a.A,a)||(a.m=c,a.b=b,a.f=null,Pc(a),3!=b||c instanceof Lc||Qc(a,c)))}
function Ec(a,b,c,d){if(a instanceof I)return Jc(a,Bc(b||v,c||null,d)),!0;if(xc(a))return a.then(b,c,d),!0;if(ua(a))try{var e=a.then;if(ta(e))return Rc(a,e,b,c,d),!0}catch(f){return c.call(d,f),!0}return!1}
function Rc(a,b,c,d,e){function f(a){h||(h=!0,d.call(e,a))}
function g(a){h||(h=!0,c.call(e,a))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function Pc(a){a.j||(a.j=!0,Yb(a.o,a))}
function Nc(a){var b=null;a.g&&(b=a.g,a.g=b.next,b.next=null);a.g||(a.h=null);return b}
I.prototype.o=function(){for(var a;a=Nc(this);)Oc(this,a,this.b,this.m);this.j=!1};
function Oc(a,b,c,d){if(3==c&&b.g&&!b.f)for(;a&&a.i;a=a.f)a.i=!1;if(b.b)b.b.f=null,Sc(b,c,d);else try{b.f?b.h.call(b.context):Sc(b,c,d)}catch(e){Tc.call(null,e)}Rb(Ac,b)}
function Sc(a,b,c){2==b?a.h.call(a.context,c):a.g&&a.g.call(a.context,c)}
function Qc(a,b){a.i=!0;Yb(function(){a.i&&Tc.call(null,b)})}
var Tc=Sb;function Lc(a){B.call(this,a)}
A(Lc,B);Lc.prototype.name="cancel";function J(a){H.call(this);this.j=1;this.h=[];this.i=0;this.b=[];this.f={};this.m=!!a}
A(J,H);l=J.prototype;l.subscribe=function(a,b,c){var d=this.f[a];d||(d=this.f[a]=[]);var e=this.j;this.b[e]=a;this.b[e+1]=b;this.b[e+2]=c;this.j=e+3;d.push(e);return e};
function Uc(a,b,c,d){if(b=a.f[b]){var e=a.b;(b=Ha(b,function(a){return e[a+1]==c&&e[a+2]==d}))&&a.D(b)}}
l.D=function(a){var b=this.b[a];if(b){var c=this.f[b];0!=this.i?(this.h.push(a),this.b[a+1]=v):(c&&Ia(c,a),delete this.b[a],delete this.b[a+1],delete this.b[a+2])}return!!b};
l.K=function(a,b){var c=this.f[a];if(c){for(var d=Array(arguments.length-1),e=1,f=arguments.length;e<f;e++)d[e-1]=arguments[e];if(this.m)for(e=0;e<c.length;e++){var g=c[e];Vc(this.b[g+1],this.b[g+2],d)}else{this.i++;try{for(e=0,f=c.length;e<f;e++)g=c[e],this.b[g+1].apply(this.b[g+2],d)}finally{if(this.i--,0<this.h.length&&0==this.i)for(;c=this.h.pop();)this.D(c)}}return 0!=e}return!1};
function Vc(a,b,c){Yb(function(){a.apply(b,c)})}
l.clear=function(a){if(a){var b=this.f[a];b&&(C(b,this.D,this),delete this.f[a])}else this.b.length=0,this.f={}};
l.l=function(){J.u.l.call(this);this.clear();this.h.length=0};function Wc(a){this.b=a}
Wc.prototype.set=function(a,b){q(b)?this.b.set(a,qc(b)):this.b.remove(a)};
Wc.prototype.get=function(a){try{var b=this.b.get(a)}catch(c){return}if(null!==b)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
Wc.prototype.remove=function(a){this.b.remove(a)};function Xc(a){this.b=a}
A(Xc,Wc);function Yc(a){this.data=a}
function Zc(a){return!q(a)||a instanceof Yc?a:new Yc(a)}
Xc.prototype.set=function(a,b){Xc.u.set.call(this,a,Zc(b))};
Xc.prototype.g=function(a){a=Xc.u.get.call(this,a);if(!q(a)||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
Xc.prototype.get=function(a){if(a=this.g(a)){if(a=a.data,!q(a))throw"Storage: Invalid value was encountered";}else a=void 0;return a};function $c(a){this.b=a}
A($c,Xc);$c.prototype.set=function(a,b,c){if(b=Zc(b)){if(c){if(c<z()){$c.prototype.remove.call(this,a);return}b.expiration=c}b.creation=z()}$c.u.set.call(this,a,b)};
$c.prototype.g=function(a,b){var c=$c.u.g.call(this,a);if(c){var d;if(d=!b){d=c.creation;var e=c.expiration;d=!!e&&e<z()||!!d&&d>z()}if(d)$c.prototype.remove.call(this,a);else return c}};function ad(a){this.b=a}
A(ad,$c);function bd(){}
;function cd(){}
A(cd,bd);cd.prototype.clear=function(){var a=pc(this.X(!0)),b=this;C(a,function(a){b.remove(a)})};function dd(a){this.b=a}
A(dd,cd);l=dd.prototype;l.isAvailable=function(){if(!this.b)return!1;try{return this.b.setItem("__sak","1"),this.b.removeItem("__sak"),!0}catch(a){return!1}};
l.set=function(a,b){try{this.b.setItem(a,b)}catch(c){if(0==this.b.length)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
l.get=function(a){a=this.b.getItem(a);if(!r(a)&&null!==a)throw"Storage mechanism: Invalid value was encountered";return a};
l.remove=function(a){this.b.removeItem(a)};
l.X=function(a){var b=0,c=this.b,d=new mc;d.next=function(){if(b>=c.length)throw lc;var d=c.key(b++);if(a)return d;d=c.getItem(d);if(!r(d))throw"Storage mechanism: Invalid value was encountered";return d};
return d};
l.clear=function(){this.b.clear()};
l.key=function(a){return this.b.key(a)};function ed(){var a=null;try{a=window.localStorage||null}catch(b){}this.b=a}
A(ed,dd);function fd(){var a=null;try{a=window.sessionStorage||null}catch(b){}this.b=a}
A(fd,dd);function gd(a){if(!ta(a))if(a&&"function"==typeof a.handleEvent)a=w(a.handleEvent,a);else throw Error("Invalid listener argument");return 2147483647<Number(5E3)?-1:p.setTimeout(a,5E3)}
function hd(){var a=null;return Kc(new I(function(b,c){a=gd(function(){b(void 0)});
-1==a&&c(Error("Failed to schedule timer."))}),function(b){p.clearTimeout(a);
throw b;})}
;var id=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;function K(a){return a.match(id)}
function jd(a){return a?decodeURI(a):a}
function kd(a,b,c){if(ra(b))for(var d=0;d<b.length;d++)kd(a,String(b[d]),c);else null!=b&&c.push(a+(""===b?"":"="+encodeURIComponent(String(b))))}
function ld(a){var b=[],c;for(c in a)kd(c,a[c],b);return b.join("&")}
function md(a,b){var c=ld(b);if(c){var d=a.indexOf("#");0>d&&(d=a.length);var e=a.indexOf("?");if(0>e||e>d){e=d;var f=""}else f=a.substring(e+1,d);d=[a.substr(0,e),f,a.substr(d)];e=d[1];d[1]=c?e?e+"&"+c:c:e;c=d[0]+(d[1]?"?"+d[1]:"")+d[2]}else c=a;return c}
;var nd=!1,od="";function pd(a){a=a.match(/[\d]+/g);if(!a)return"";a.length=3;return a.join(".")}
(function(){if(navigator.plugins&&navigator.plugins.length){var a=navigator.plugins["Shockwave Flash"];if(a&&(nd=!0,a.description)){od=pd(a.description);return}if(navigator.plugins["Shockwave Flash 2.0"]){nd=!0;od="2.0.0.11";return}}if(navigator.mimeTypes&&navigator.mimeTypes.length&&(a=navigator.mimeTypes["application/x-shockwave-flash"],nd=!(!a||!a.enabledPlugin))){od=pd(a.enabledPlugin.description);return}try{var b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");nd=!0;od=pd(b.GetVariable("$version"));
return}catch(c){}try{b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");nd=!0;od="6.0.21";return}catch(c){}try{b=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"),nd=!0,od=pd(b.GetVariable("$version"))}catch(c){}})();
var qd=nd,rd=od;var sd=/^\.google\.(com\.)?[a-z]{2,3}$/,td=/\.(cn|com\.bi|do|sl)$/;function ud(a){return sd.test(a)&&!td.test(a)}
var vd=p;function wd(){var a="https://adservice"+L[1]+(L[3]?"/generate_204":"/adsid/integrator.js"),b=["domain="+encodeURIComponent(p.location.hostname)];M[3]>=z()&&b.push("adsid="+encodeURIComponent(M[1]));return a+"?"+b.join("&")}
var M,L;function xd(){vd=p;M=vd.googleToken=vd.googleToken||{};var a=z();M[1]&&M[3]>a&&0<M[2]||(M[1]="",M[2]=-1,M[3]=-1,M[4]="");L=vd.googleIMState=vd.googleIMState||{};ud(L[1])||(L[1]=".google.com");0!=L[2]&&(L[2]=1);"boolean"==typeof L[3]||(L[3]=!1);"boolean"==typeof L[4]||(L[4]=!1);ra(L[5])||(L[5]=[])}
function yd(){xd();return M[1]}
function zd(a){try{a()}catch(b){p.setTimeout(function(){throw b;},0)}}
function Ad(){if(!L[4]){L[4]=!0;var a=p.document;if(0==L[2]){var b=wd().replace(/[\W]/g,function(a){return"&#"+a.charCodeAt()+";"}),c=Wa("script");
a.write("<"+c+' src="'+b+'"></'+c+">"+("<"+c+">processGoogleToken("+(L[3]?'{"newToken":"FBS"}':"{}")+");</"+c+">"))}else{b=a.createElement("script");b.type="text/javascript";b.onerror=function(){return p.processGoogleToken({},2)};
L[3]&&(b.onload=function(){var a={};return p.processGoogleToken((a.newToken="FBA",a))});
c=Eb(wd());xb(b,c);try{(a.head||a.body||a.documentElement).appendChild(b)}catch(d){}p.setTimeout(function(){return p.processGoogleToken({},1)},1E3)}}}
function Bd(a){p.processGoogleToken=p.processGoogleToken||Cd;xd();var b=vd.googleToken[5]||0;a&&(0!=b||M[3]>=z()?zd(a):(L[5].push(a),Ad()));M[3]>=z()&&M[2]>=z()||Ad()}
var Dd=0;
function Cd(a,b){a=void 0===a?{}:a;b=void 0===b?0:b;var c=a.newToken||"",d=a.altDomain||"",e=parseInt(a.freshLifetimeSecs||"",10)||3600,f=parseInt(a.validLifetimeSecs||"",10)||86400,g=a["1p_jar"]||"";xd();L[4]=!1;if(1E-5>Math.random()){var h="https://pagead2.googlesyndication.com/pagead/gen_204?id=imerr&err="+b;p.google_image_requests||(p.google_image_requests=[]);var k=p.document.createElement("img");k.src=h;p.google_image_requests.push(k)}if(!c&&d&&ud(d)&&2>=++Dd)ud(d)&&(L[1]=d),Ad();else{d=vd.googleToken=
vd.googleToken||{};d[5]=b;0==b&&c&&r(c)&&0<e&&0<f&&r(g)&&(h=z(),d[1]=c,d[2]=h+1E3*e,d[3]=h+1E3*f,d[4]=g,xd());c=L[5];for(e=0;e<c.length;e++)zd(c[e]);L[5]=[]}}
;function Ed(a,b){if(1<b.length)a[b[0]]=b[1];else{var c=b[0],d;for(d in c)a[d]=c[d]}}
var N=window.performance&&window.performance.timing&&window.performance.now?function(){return window.performance.timing.navigationStart+window.performance.now()}:function(){return(new Date).getTime()},Fd="Microsoft Internet Explorer"==navigator.appName;var Gd=window.yt&&window.yt.config_||window.ytcfg&&window.ytcfg.data_||{};t("yt.config_",Gd,void 0);function O(a){Ed(Gd,arguments)}
function P(a,b){return a in Gd?Gd[a]:b}
function R(a){return P(a,void 0)}
;function Jd(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){S(b)}}:a}
function S(a,b){var c=u("yt.logging.errors.log");c?c(a,b,void 0,void 0,void 0):(c=P("ERRORS",[]),c.push([a,b,void 0,void 0,void 0]),O("ERRORS",c))}
;function T(a){return P("EXPERIMENT_FLAGS",{})[a]}
;function Kd(a){a&&(a.dataset?a.dataset[Ld("loaded")]="true":a.setAttribute("data-loaded","true"))}
function Md(a,b){return a?a.dataset?a.dataset[Ld(b)]:a.getAttribute("data-"+b):null}
var Nd={};function Ld(a){return Nd[a]||(Nd[a]=String(a).replace(/\-([a-z])/g,function(a,c){return c.toUpperCase()}))}
;function U(a,b){ta(a)&&(a=Jd(a));return window.setTimeout(a,b)}
;var Od=u("ytPubsubPubsubInstance")||new J;J.prototype.subscribe=J.prototype.subscribe;J.prototype.unsubscribeByKey=J.prototype.D;J.prototype.publish=J.prototype.K;J.prototype.clear=J.prototype.clear;t("ytPubsubPubsubInstance",Od,void 0);var Pd=u("ytPubsubPubsubSubscribedKeys")||{};t("ytPubsubPubsubSubscribedKeys",Pd,void 0);var Qd=u("ytPubsubPubsubTopicToKeys")||{};t("ytPubsubPubsubTopicToKeys",Qd,void 0);var Rd=u("ytPubsubPubsubIsSynchronous")||{};t("ytPubsubPubsubIsSynchronous",Rd,void 0);
function Sd(a,b){var c=Td();if(c){var d=c.subscribe(a,function(){var c=arguments;var f=function(){Pd[d]&&b.apply(window,c)};
try{Rd[a]?f():U(f,0)}catch(g){S(g)}},void 0);
Pd[d]=!0;Qd[a]||(Qd[a]=[]);Qd[a].push(d);return d}return 0}
function Ud(a){var b=Td();b&&("number"==typeof a?a=[a]:r(a)&&(a=[parseInt(a,10)]),C(a,function(a){b.unsubscribeByKey(a);delete Pd[a]}))}
function Vd(a,b){var c=Td();c&&c.publish.apply(c,arguments)}
function Wd(a){var b=Td();if(b)if(b.clear(a),a)Xd(a);else for(var c in Qd)Xd(c)}
function Td(){return u("ytPubsubPubsubInstance")}
function Xd(a){Qd[a]&&(a=Qd[a],C(a,function(a){Pd[a]&&delete Pd[a]}),a.length=0)}
;var Yd=/\.vflset|-vfl[a-zA-Z0-9_+=-]+/,Zd=/-[a-zA-Z]{2,3}_[a-zA-Z]{2,3}(?=(\/|$))/;function $d(a,b){if(window.spf){var c="";if(a){var d=a.indexOf("jsbin/"),e=a.lastIndexOf(".js"),f=d+6;-1<d&&-1<e&&e>f&&(c=a.substring(f,e),c=c.replace(Yd,""),c=c.replace(Zd,""),c=c.replace("debug-",""),c=c.replace("tracing-",""))}spf.script.load(a,c,b)}else ae(a,b)}
function ae(a,b){var c=be(a),d=document.getElementById(c),e=d&&Md(d,"loaded"),f=d&&!e;if(e)b&&b();else{if(b){e=Sd(c,b);var g=""+(b[va]||(b[va]=++wa));ce[g]=e}f||(d=de(a,c,function(){Md(d,"loaded")||(Kd(d),Vd(c),U(x(Wd,c),0))}))}}
function de(a,b,c){var d=document.createElement("SCRIPT");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
d.onreadystatechange=function(){switch(d.readyState){case "loaded":case "complete":d.onload()}};
xb(d,Eb(a));a=document.getElementsByTagName("head")[0]||document.body;a.insertBefore(d,a.firstChild);return d}
function ee(a){a=be(a);var b=document.getElementById(a);b&&(Wd(a),b.parentNode.removeChild(b))}
function fe(a,b){if(a&&b){var c=""+(b[va]||(b[va]=++wa));(c=ce[c])&&Ud(c)}}
function be(a){var b=document.createElement("a");wb(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"js-"+Da(a)}
var ce={};var ge=null;function he(){var a=P("BG_I",null),b=P("BG_IU",null),c=P("BG_P",void 0);b?$d(b,function(){window.botguard?ie(c):(ee(b),S(Error("Unable to load Botguard from "+b),"WARNING"))}):a&&(eval(a),ie(c))}
function ie(a){ge=new window.botguard.bg(a);T("botguard_periodic_refresh")&&N()}
function je(){return null!=ge}
function ke(){return ge?ge.invoke():null}
;z();var le=q(XMLHttpRequest)?function(){return new XMLHttpRequest}:q(ActiveXObject)?function(){return new ActiveXObject("Microsoft.XMLHTTP")}:null;
function me(){if(!le)return null;var a=le();return"open"in a?a:null}
function ne(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function oe(a){"?"==a.charAt(0)&&(a=a.substr(1));a=a.split("&");for(var b={},c=0,d=a.length;c<d;c++){var e=a[c].split("=");if(1==e.length&&e[0]||2==e.length){var f=decodeURIComponent((e[0]||"").replace(/\+/g," "));e=decodeURIComponent((e[1]||"").replace(/\+/g," "));f in b?ra(b[f])?Ka(b[f],e):b[f]=[b[f],e]:b[f]=e}}return b}
function pe(a,b){var c=a.split("#",2);a=c[0];c=1<c.length?"#"+c[1]:"";var d=a.split("?",2);a=d[0];d=oe(d[1]||"");for(var e in b)d[e]=b[e];return md(a,d)+c}
;var qe={"X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL","X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-YouTube-Variants-Checksum":"VARIANTS_CHECKSUM"},re=!1;
function se(a,b){b=void 0===b?{}:b;if(!c)var c=window.location.href;var d=K(a)[1]||null,e=jd(K(a)[3]||null);d&&e?(d=c,c=K(a),d=K(d),c=c[3]==d[3]&&c[1]==d[1]&&c[4]==d[4]):c=e?jd(K(c)[3]||null)==e&&(Number(K(c)[4]||null)||null)==(Number(K(a)[4]||null)||null):!0;for(var f in qe){if((e=d=P(qe[f]))&&!(e=c)){e=f;var g=P("CORS_HEADER_WHITELIST")||{},h=jd(K(a)[3]||null);e=h?(g=g[h])?0<=Ea(g,e):!1:!0}e&&(b[f]=d)}return b}
function te(a,b){var c=P("XSRF_FIELD_NAME",void 0),d;b.headers&&(d=b.headers["Content-Type"]);return!b.ib&&(!jd(K(a)[3]||null)||b.withCredentials||jd(K(a)[3]||null)==document.location.hostname)&&"POST"==b.method&&(!d||"application/x-www-form-urlencoded"==d)&&!(b.B&&b.B[c])}
function ue(a,b){var c=b.format||"JSON";b.Da&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var d=P("XSRF_FIELD_NAME",void 0),e=P("XSRF_TOKEN",void 0),f=b.bb;f&&(f[d]&&delete f[d],a=pe(a,f||{}));f=b.postBody||"";var g=b.B;te(a,b)&&(g||(g={}),g[d]=e);g&&r(f)&&(d=oe(f),Va(d,g),f=b.ra&&"JSON"==b.ra?JSON.stringify(d):ld(d));d=f||g&&!Ra(g);!re&&d&&"POST"!=b.method&&(re=!0,S(Error("AJAX request with postData should use POST")));var h=
!1,k,m=ve(a,function(a){if(!h){h=!0;k&&window.clearTimeout(k);var d=ne(a),e=null;if(d||400<=a.status&&500>a.status)e=we(c,a,b.hb);if(d)a:if(204==a.status)d=!0;else{switch(c){case "XML":d=0==parseInt(e&&e.return_code,10);break a;case "RAW":d=!0;break a}d=!!e}e=e||{};var f=b.context||p;d?b.P&&b.P.call(f,a,e):b.onError&&b.onError.call(f,a,e);b.Ja&&b.Ja.call(f,a,e)}},b.method,f,b.headers,b.responseType,b.withCredentials);
b.Z&&0<b.timeout&&(k=U(function(){h||(h=!0,m.abort(),window.clearTimeout(k),b.Z.call(b.context||p,m))},b.timeout))}
function we(a,b,c){var d=null;switch(a){case "JSON":a=b.responseText;b=b.getResponseHeader("Content-Type")||"";a&&0<=b.indexOf("json")&&(d=JSON.parse(a));break;case "XML":if(b=(b=b.responseXML)?xe(b):null)d={},C(b.getElementsByTagName("*"),function(a){d[a.tagName]=ye(a)})}c&&ze(d);
return d}
function ze(a){if(ua(a))for(var b in a){var c;(c="html_content"==b)||(c=b.length-5,c=0<=c&&b.indexOf("_html",c)==c);if(c){c=b;var d=vb(a[b]);a[c]=d}else ze(a[b])}}
function xe(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&0<a.length?a[0]:null:null}
function ye(a){var b="";C(a.childNodes,function(a){b+=a.nodeValue});
return b}
function Ae(a,b){b.method="POST";b.B||(b.B={});ue(a,b)}
function ve(a,b,c,d,e,f,g){function h(){4==(k&&"readyState"in k?k.readyState:0)&&b&&Jd(b)(k)}
c=void 0===c?"GET":c;d=void 0===d?"":d;var k=me();if(!k)return null;"onloadend"in k?k.addEventListener("loadend",h,!1):k.onreadystatechange=h;k.open(c,a,!0);f&&(k.responseType=f);g&&(k.withCredentials=!0);c="POST"==c;if(e=se(a,e))for(var m in e)k.setRequestHeader(m,e[m]),"content-type"==m.toLowerCase()&&(c=!1);c&&k.setRequestHeader("Content-Type","application/x-www-form-urlencoded");k.send(d);return k}
;var Be={},Ce=0;function De(a,b){a&&(P("USE_NET_AJAX_FOR_PING_TRANSPORT",!1)?ve(a,b,"GET","",void 0):Ee(a,b))}
function Ee(a,b){var c=new Image,d=""+Ce++;Be[d]=c;c.onload=c.onerror=function(){b&&Be[d]&&b();delete Be[d]};
c.src=a}
;var Fe={},Ge=0;
function He(a,b,c,d,e,f){f=f||{};f.name=c||P("INNERTUBE_CONTEXT_CLIENT_NAME",1);f.version=d||P("INNERTUBE_CONTEXT_CLIENT_VERSION",void 0);b=void 0===b?"ERROR":b;e=void 0===e?!1:e;e=window&&window.yterr||(void 0===e?!1:e)||!1;if(a&&e&&!(5<=Ge)){e=a.stacktrace;c=a.columnNumber;d=u("window.location.href");if(r(a))a={message:a,name:"Unknown error",lineNumber:"Not available",fileName:d,stack:"Not available"};else{var g=!1;try{var h=a.lineNumber||a.line||"Not available"}catch(Q){h="Not available",g=!0}try{var k=
a.fileName||a.filename||a.sourceURL||p.$googDebugFname||d}catch(Q){k="Not available",g=!0}a=!g&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name?a:{message:a.message||"Not available",name:a.name||"UnknownError",lineNumber:h,fileName:k,stack:a.stack||"Not available"}}e=e||a.stack;h=a.lineNumber.toString();isNaN(h)||isNaN(c)||(h=h+":"+c);if(!(Fe[a.message]||0<=e.indexOf("/YouTubeCenter.js")||0<=e.indexOf("/mytube.js"))){k=e;h={bb:{a:"logerror",t:"jserror",type:a.name,msg:a.message.substr(0,1E3),
line:h,level:void 0===b?"ERROR":b,"client.name":f.name},B:{url:P("PAGE_NAME",window.location.href),file:a.fileName},method:"POST"};f.version&&(h["client.version"]=f.version);k&&(h.B.stack=k);for(var m in f)h.B["client."+m]=f[m];if(m=P("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS",void 0))for(var y in m)h.B[y]=m[y];ue("/error_204",h);Fe[a.message]=!0;Ge++}}}
;var Ie=window.yt&&window.yt.msgs_||window.ytcfg&&window.ytcfg.msgs||{};t("yt.msgs_",Ie,void 0);function Je(a){Ed(Ie,arguments)}
;function Ke(a,b){var c=5E3;isNaN(c)&&(c=void 0);var d=u("yt.scheduler.instance.addJob");return d?d(a,b,c):void 0===c?(a(),NaN):U(a,c||0)}
function Le(a){if(!isNaN(a)){var b=u("yt.scheduler.instance.cancelJob");b?b(a):window.clearTimeout(a)}}
;var Me=[],Ne=!1;function Oe(){function a(){Ne=!0;"google_ad_status"in window?O("DCLKSTAT",1):O("DCLKSTAT",2)}
$d("//static.doubleclick.net/instream/ad_status.js",a);Me.push(Ke(function(){Ne||"google_ad_status"in window||(fe("//static.doubleclick.net/instream/ad_status.js",a),O("DCLKSTAT",3))},1))}
function Pe(){return parseInt(P("DCLKSTAT",0),10)}
;var Qe=0;t("ytDomDomGetNextId",u("ytDomDomGetNextId")||function(){return++Qe},void 0);var Re={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function Se(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.shiftKey=this.ctrlKey=this.altKey=!1;this.clientY=this.clientX=0;this.changedTouches=this.touches=null;if(a=a||window.event){this.event=a;for(var b in a)b in Re||(this[b]=a[b]);(b=a.target||a.srcElement)&&3==b.nodeType&&(b=b.parentNode);this.target=b;if(b=a.relatedTarget)try{b=b.nodeName?b:null}catch(c){b=null}else"mouseover"==this.type?b=a.fromElement:
"mouseout"==this.type&&(b=a.toElement);this.relatedTarget=b;this.clientX=void 0!=a.clientX?a.clientX:a.pageX;this.clientY=void 0!=a.clientY?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||("keypress"==this.type?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey}}
Se.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
Se.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
Se.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var Qa=u("ytEventsEventsListeners")||{};t("ytEventsEventsListeners",Qa,void 0);var Te=u("ytEventsEventsCounter")||{count:0};t("ytEventsEventsCounter",Te,void 0);function Ue(a,b,c,d){d=void 0===d?!1:d;a.addEventListener&&("mouseenter"!=b||"onmouseenter"in document?"mouseleave"!=b||"onmouseenter"in document?"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return Pa(function(e){return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&e[4]==!!d})}
function Ve(a,b,c){var d=void 0===d?!1:d;if(!a||!a.addEventListener&&!a.attachEvent)return"";var e=Ue(a,b,c,d);if(e)return e;e=++Te.count+"";var f=!("mouseenter"!=b&&"mouseleave"!=b||!a.addEventListener||"onmouseenter"in document);var g=f?function(d){d=new Se(d);if(!Db(d.relatedTarget,function(b){return b==a}))return d.currentTarget=a,d.type=b,c.call(a,d)}:function(b){b=new Se(b);
b.currentTarget=a;return c.call(a,b)};
g=Jd(g);a.addEventListener?("mouseenter"==b&&f?b="mouseover":"mouseleave"==b&&f?b="mouseout":"mousewheel"==b&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),a.addEventListener(b,g,d)):a.attachEvent("on"+b,g);Qa[e]=[a,b,c,g,d];return e}
function We(a){a&&("string"==typeof a&&(a=[a]),C(a,function(a){if(a in Qa){var b=Qa[a],d=b[0],e=b[1],f=b[3];b=b[4];d.removeEventListener?d.removeEventListener(e,f,b):d.detachEvent&&d.detachEvent("on"+e,f);delete Qa[a]}}))}
;function Xe(){if(null==u("_lact",window)){var a=parseInt(P("LACT"),10);a=isFinite(a)?z()-Math.max(a,0):-1;t("_lact",a,window);t("_fact",a,window);-1==a&&Ye();Ve(document,"keydown",Ye);Ve(document,"keyup",Ye);Ve(document,"mousedown",Ye);Ve(document,"mouseup",Ye);Sd("page-mouse",Ye);Sd("page-scroll",Ye);Sd("page-resize",Ye)}}
function Ye(){null==u("_lact",window)&&Xe();var a=z();t("_lact",a,window);-1==u("_fact",window)&&t("_fact",a,window);(a=u("ytglobal.ytUtilActivityCallback_"))&&a()}
function Ze(){var a=u("_lact",window);return null==a?-1:Math.max(z()-a,0)}
;function $e(a,b,c,d,e){this.f=a;this.i=b;this.h=c;this.g=d;this.b=e}
var af=1;function bf(a){var b={};void 0!==a.f?b.trackingParams=a.f:(b.veType=a.i,null!=a.h&&(b.veCounter=a.h),null!=a.g&&(b.elementIndex=a.g));void 0!==a.b&&(b.dataElement=bf(a.b));return b}
;var cf={log_event:"events",log_event2:"events",log_interaction:"interactions"},df=Object.create(null);df.log_event="GENERIC_EVENT_LOGGING";df.log_event2="GENERIC_EVENT_LOGGING";df.log_interaction="INTERACTION_LOGGING";var ef={},ff={},gf=0,V=u("ytLoggingTransportLogPayloadsQueue_")||{};t("ytLoggingTransportLogPayloadsQueue_",V,void 0);var hf=u("ytLoggingTransportTokensToCttTargetIds_")||{};t("ytLoggingTransportTokensToCttTargetIds_",hf,void 0);var jf=u("ytLoggingTransportDispatchedStats_")||{};
t("ytLoggingTransportDispatchedStats_",jf,void 0);t("ytytLoggingTransportCapturedTime_",u("ytLoggingTransportCapturedTime_")||{},void 0);function kf(a,b){ff[a.endpoint]=b;if(a.Y){var c=a.Y;var d={};c.videoId?d.videoId=c.videoId:c.playlistId&&(d.playlistId=c.playlistId);hf[a.Y.token]=d;c=lf(a.endpoint,a.Y.token)}else c=lf(a.endpoint);c.push(a.payload);c.length>=(Number(T("web_logging_max_batch")||0)||20)?mf():nf()}
function mf(){window.clearTimeout(gf);if(!Ra(V)){for(var a in V){var b=ef[a];if(!b){var c=ff[a];if(!c)continue;b=new c;ef[a]=b}c=void 0;var d=a,e=b,f=cf[d],g=jf[d]||{};jf[d]=g;b=Math.round(N());for(c in V[d]){var h=e.b;h={client:{hl:h.Ga,gl:h.Fa,clientName:h.Ea,clientVersion:h.innertubeContextClientVersion}};P("DELEGATED_SESSION_ID")&&(h.user={onBehalfOfUser:P("DELEGATED_SESSION_ID")});h={context:h};h[f]=lf(d,c);g.dispatchedEventCount=g.dispatchedEventCount||0;g.dispatchedEventCount+=h[f].length;
h.requestTimeMs=b;var k=hf[c];if(k)a:{var m=h,y=c;if(k.videoId)var Q="VIDEO";else if(k.playlistId)Q="PLAYLIST";else break a;m.credentialTransferTokenTargetId=k;m.context=m.context||{};m.context.user=m.context.user||{};m.context.user.credentialTransferTokens=[{token:y,scope:Q}]}delete hf[c];of(e,d,h)}c=g;d=b;c.previousDispatchMs&&(b=d-c.previousDispatchMs,e=c.diffCount||0,c.averageTimeBetweenDispatchesMs=e?(c.averageTimeBetweenDispatchesMs*e+b)/(e+1):b,c.diffCount=e+1);c.previousDispatchMs=d;delete V[a]}Ra(V)||
nf()}}
function nf(){window.clearTimeout(gf);gf=U(mf,P("LOGGING_BATCH_TIMEOUT",1E4))}
function lf(a,b){b||(b="");V[a]=V[a]||{};V[a][b]=V[a][b]||[];return V[a][b]}
;function pf(a,b,c,d,e){var f={};f.eventTimeMs=Math.round(d||N());f[a]=b;f.context={lastActivityMs:String(d?-1:Ze())};kf({endpoint:"log_event",payload:f,Y:e},c)}
;function qf(a,b,c){rf(sf,{attachChild:{csn:a,parentVisualElement:bf(b),visualElements:[bf(c)]}})}
function rf(a,b,c){b.eventTimeMs=c?c:Math.round(N());b.lactMs=Ze();kf({endpoint:"log_interaction",payload:b},a)}
;function tf(){if(!uf&&!vf||!window.JSON)return null;try{var a=uf.get("yt-player-two-stage-token")}catch(b){}if(!r(a))try{a=vf.get("yt-player-two-stage-token")}catch(b){}if(!r(a))return null;try{a=JSON.parse(a,void 0)}catch(b){}return a}
var vf,wf=new ed;vf=wf.isAvailable()?new ad(wf):null;var uf,xf=new fd;uf=xf.isAvailable()?new ad(xf):null;function yf(){var a=P("ROOT_VE_TYPE",void 0);return a?new $e(void 0,a,void 0):null}
function zf(){var a=P("client-screen-nonce")||P("EVENT_ID");return a?a:null}
;function Af(a,b,c){Ob.set(""+a,b,c,"/","youtube.com",!1)}
;function Bf(a){if(a){a=a.itct||a.ved;var b=u("yt.logging.screen.storeParentElement");a&&b&&b(new $e(a))}}
;function Cf(a,b,c){b=void 0===b?{}:b;c=void 0===c?!1:c;var d=P("EVENT_ID");d&&(b.ei||(b.ei=d));if(b){d=a;var e=P("VALID_SESSION_TEMPDATA_DOMAINS",[]),f=jd(K(window.location.href)[3]||null);f&&e.push(f);f=jd(K(d)[3]||null);if(0<=Ea(e,f)||!f&&0==d.lastIndexOf("/",0))if(T("autoescape_tempdata_url")&&(e=document.createElement("a"),wb(e,d),d=e.href),d){f=K(d);d=f[5];e=f[6];f=f[7];var g="";d&&(g+=d);e&&(g+="?"+e);f&&(g+="#"+f);d=g;e=d.indexOf("#");if(d=0>e?d:d.substr(0,e)){if(b.itct||b.ved)b.csn=b.csn||
zf();if(h){var h=parseInt(h,10);isFinite(h)&&0<h&&(d="ST-"+Da(d).toString(36),e=b?ld(b):"",Af(d,e,h||5),Bf(b))}else h="ST-"+Da(d).toString(36),d=b?ld(b):"",Af(h,d,5),Bf(b)}}}if(c)return!1;if((window.ytspf||{}).enabled)spf.navigate(a);else{var k=void 0===k?{}:k;var m=void 0===m?"":m;var y=void 0===y?window:y;c=y.location;a=md(a,k)+m;a=a instanceof nb?a:sb(a);c.href=qb(a)}return!0}
;t("yt.abuse.botguardInitialized",u("yt.abuse.botguardInitialized")||je,void 0);t("yt.abuse.invokeBotguard",u("yt.abuse.invokeBotguard")||ke,void 0);t("yt.abuse.dclkstatus.checkDclkStatus",u("yt.abuse.dclkstatus.checkDclkStatus")||Pe,void 0);t("yt.player.exports.navigate",u("yt.player.exports.navigate")||Cf,void 0);t("yt.util.activity.init",u("yt.util.activity.init")||Xe,void 0);t("yt.util.activity.getTimeSinceActive",u("yt.util.activity.getTimeSinceActive")||Ze,void 0);
t("yt.util.activity.setTimestamp",u("yt.util.activity.setTimestamp")||Ye,void 0);function Df(a,b,c){c.context&&c.context.capabilities&&(c=c.context.capabilities,c.snapshot||c.golden)&&(a="vix");return"/youtubei/"+a+"/"+b}
;function sf(a){this.b=a||{apiaryHost:R("APIARY_HOST"),fb:R("APIARY_HOST_FIRSTPARTY"),gapiHintOverride:!!P("GAPI_HINT_OVERRIDE",void 0),gapiHintParams:R("GAPI_HINT_PARAMS"),innertubeApiKey:R("INNERTUBE_API_KEY"),innertubeApiVersion:R("INNERTUBE_API_VERSION"),Ea:P("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),innertubeContextClientVersion:R("INNERTUBE_CONTEXT_CLIENT_VERSION"),Ga:R("INNERTUBE_CONTEXT_HL"),Fa:R("INNERTUBE_CONTEXT_GL"),xhrApiaryHost:R("XHR_APIARY_HOST")||"",Ha:R("INNERTUBE_HOST_OVERRIDE")||""}}
function of(a,b,c){var d={};!P("VISITOR_DATA")&&.01>Math.random()&&S(Error("Missing VISITOR_DATA when sending innertube request."),"WARNING");var e={headers:{"Content-Type":"application/json","X-Goog-Visitor-Id":P("VISITOR_DATA","")},B:c,ra:"JSON",Z:d.Z,P:function(a,b){d.P&&d.P(b)},
onError:function(a,b){if(d.onError)d.onError(b)},
timeout:d.timeout,withCredentials:!0},f=Pb();f&&(e.headers.Authorization=f,e.headers["X-Goog-AuthUser"]=P("SESSION_INDEX",0));var g="",h=a.b.Ha;h&&(g=h);f&&!g&&(e.headers["x-origin"]=window.location.origin);Ae(""+g+Df(a.b.innertubeApiVersion,b,c)+"?alt=json&key="+a.b.innertubeApiKey,e)}
;function Ef(a){a=a||{};this.url=a.url||"";this.args=a.args||Ta(Ff);this.assets=a.assets||{};this.attrs=a.attrs||Ta(Gf);this.params=a.params||Ta(Hf);this.minVersion=a.min_version||"8.0.0";this.fallback=a.fallback||null;this.fallbackMessage=a.fallbackMessage||null;this.html5=!!a.html5;this.disable=a.disable||{};this.loaded=!!a.loaded;this.messages=a.messages||{}}
var Ff={enablejsapi:1},Gf={},Hf={allowscriptaccess:"always",allowfullscreen:"true",bgcolor:"#000000"};function If(a){a instanceof Ef||(a=new Ef(a));return a}
function Jf(a){var b=new Ef,c;for(c in a)if(a.hasOwnProperty(c)){var d=a[c];b[c]="object"==qa(d)?Ta(d):d}return b}
;function Kf(a){H.call(this);this.b=[];this.f=a||this}
n(Kf,H);function Lf(a,b,c,d){d=Jd(w(d,a.f));d={target:b,name:c,na:d};b.addEventListener(c,d.na,void 0);a.b.push(d)}
function Mf(a){for(;a.b.length;){var b=a.b.pop();b.target.removeEventListener(b.name,b.na)}}
Kf.prototype.l=function(){Mf(this);H.prototype.l.call(this)};function Nf(){this.b=this.minor=this.major=0;var a=u("window.navigator.plugins"),b=u("window.navigator.mimeTypes");a=a&&a["Shockwave Flash"];b=b&&b["application/x-shockwave-flash"];if(b=a&&b&&b.enabledPlugin&&a.description||""){a=b.indexOf("Shockwave Flash");0<=a&&(b=b.substr(a+15));a=b.split(" ");var c="";b="";for(var d=0,e=a.length;d<e;d++)if(c)if(b)break;else b=a[d];else c=a[d];c=c.split(".");a=parseInt(c[0],10)||0;c=parseInt(c[1],10)||0;d=0;if("r"==b.charAt(0)||"d"==b.charAt(0))d=parseInt(b.substr(1),
10)||0;b=[a,c,d]}else b=[0,0,0];this.major=b[0];this.minor=b[1];this.b=b[2];if(0>=this.major){if(Fd)try{var f=new ActiveXObject("ShockwaveFlash.ShockwaveFlash")}catch(m){f=null}else{var g=document.body;var h=document.createElement("object");h.setAttribute("type","application/x-shockwave-flash");f=g.appendChild(h)}if(f&&"GetVariable"in f)try{var k=f.GetVariable("$version")}catch(m){k=""}g&&h&&g.removeChild(h);(f=k||"")?(f=f.split(" ")[1].split(","),f=[parseInt(f[0],10)||0,parseInt(f[1],10)||0,parseInt(f[2],
10)||0]):f=[0,0,0];this.major=f[0];this.minor=f[1];this.b=f[2]}}
pa(Nf);var Of=/cssbin\/(?:debug-)?([a-zA-Z0-9_-]+?)(?:-2x|-web|-rtl|-vfl|.css)/;function Pf(a){a=a||"";if(window.spf){var b=a.match(Of);spf.style.load(a,b?b[1]:"",void 0)}else Qf(a)}
function Qf(a){var b=Rf(a),c=document.getElementById(b),d=c&&Md(c,"loaded");d||c&&!d||(c=Sf(a,b,function(){Md(c,"loaded")||(Kd(c),Vd(b),U(x(Wd,b),0))}))}
function Sf(a,b,c){var d=document.createElement("link");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
a=Eb(a);d.rel="stylesheet";d.href=mb(a);(document.getElementsByTagName("head")[0]||document.body).appendChild(d);return d}
function Rf(a){var b=document.createElement("A");a=tb(a);wb(b,a);b=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"css-"+Da(b)}
;var X={},Tf=(X["api.invalidparam"]=2,X.auth=150,X["drm.auth"]=150,X["heartbeat.net"]=150,X["heartbeat.servererror"]=150,X["heartbeat.stop"]=150,X["html5.unsupportedads"]=5,X["fmt.noneavailable"]=5,X["fmt.decode"]=5,X["fmt.unplayable"]=5,X["html5.missingapi"]=5,X["html5.unsupportedlive"]=5,X["drm.unavailable"]=5,X);var Uf={cupcake:1.5,donut:1.6,eclair:2,froyo:2.2,gingerbread:2.3,honeycomb:3,"ice cream sandwich":4,jellybean:4.1,kitkat:4.4,lollipop:5.1,marshmallow:6,nougat:7.1},Vf;var Wf=La;Wf=Wf.toLowerCase();if(-1!=Wf.indexOf("android")){var Xf=Wf.match(/android\D*(\d\.\d)[^\;|\)]*[\;\)]/);if(Xf)Vf=parseFloat(Xf[1]);else{var Yf=[],Zf=0,$f;for($f in Uf)Yf[Zf++]=$f;var ag=Wf.match("("+Yf.join("|")+")");Vf=ag?Uf[ag[0]]:0}}else Vf=void 0;var bg=['video/mp4; codecs="avc1.42001E, mp4a.40.2"','video/webm; codecs="vp8.0, vorbis"'],cg=['audio/mp4; codecs="mp4a.40.2"'];var dg=u("ytLoggingLatencyUsageStats_")||{};t("ytLoggingLatencyUsageStats_",dg,void 0);var eg=0;function fg(a){dg[a]=dg[a]||{count:0};var b=dg[a];b.count++;b.time=N();eg||(eg=Ke(gg,0));return 10<b.count?(11==b.count&&He(Error("CSI data exceeded logging limit with key: "+a),0==a.indexOf("info")?"WARNING":"ERROR"),!0):!1}
function gg(){var a=N(),b;for(b in dg)6E4<a-dg[b].time&&delete dg[b];eg=0}
;function hg(a,b){this.version=a;this.args=b}
;function ig(a){this.topic=a}
ig.prototype.toString=function(){return this.topic};var jg=u("ytPubsub2Pubsub2Instance")||new J;J.prototype.subscribe=J.prototype.subscribe;J.prototype.unsubscribeByKey=J.prototype.D;J.prototype.publish=J.prototype.K;J.prototype.clear=J.prototype.clear;t("ytPubsub2Pubsub2Instance",jg,void 0);t("ytPubsub2Pubsub2SubscribedKeys",u("ytPubsub2Pubsub2SubscribedKeys")||{},void 0);t("ytPubsub2Pubsub2TopicToKeys",u("ytPubsub2Pubsub2TopicToKeys")||{},void 0);t("ytPubsub2Pubsub2IsAsync",u("ytPubsub2Pubsub2IsAsync")||{},void 0);
t("ytPubsub2Pubsub2SkipSubKey",null,void 0);function kg(a,b){var c=u("ytPubsub2Pubsub2Instance");c&&c.publish.call(c,a.toString(),a,b)}
;function lg(){var a=P("TIMING_TICK_EXPIRATION");a||(a={},O("TIMING_TICK_EXPIRATION",a));return a}
function mg(){var a=lg(),b;for(b in a)Le(a[b]);O("TIMING_TICK_EXPIRATION",{})}
;function ng(a,b){hg.call(this,1,arguments)}
n(ng,hg);function og(a,b){hg.call(this,1,arguments)}
n(og,hg);var pg=new ig("aft-recorded"),qg=new ig("timing-sent");var Y=window.performance||window.mozPerformance||window.msPerformance||window.webkitPerformance||{};var rg=z().toString();var sg={vc:!0},wg={ad_allowed:"adTypesAllowed",ad_at:"adType",ad_cpn:"adClientPlaybackNonce",ad_docid:"adVideoId",yt_ad_an:"adNetworks",p:"httpProtocol",t:"transportProtocol",cpn:"clientPlaybackNonce",csn:"clientScreenNonce",docid:"videoId",is_nav:"isNavigation",yt_lt:"loadType",yt_ad:"isMonetized",nr:"webInfo.navigationReason",ncnp:"webInfo.nonPreloadedNodeCount",plid:"videoId",paused:"playerInfo.isPausedOnLoad",fmt:"playerInfo.itag",yt_pl:"watchInfo.isPlaylist",yt_ad_pr:"prerollAllowed",yt_red:"isRedSubscriber",
st:"serverTimeMs",vph:"viewportHeight",vpw:"viewportWidth",yt_vis:"isVisible"},xg="ap c cver ei srt yt_fss yt_li ba vpil vpni yt_eil pa GetBrowse_rid GetPlayer_rid GetSearch_rid GetWatchNext_rid cmt pc prerender psc rc start yt_abt yt_fn yt_fs yt_pft yt_pre yt_pt yt_pvis yt_ref yt_sts".split(" "),yg="isNavigation isMonetized playerInfo.isPausedOnLoad prerollAllowed isRedSubscriber isVisible watchInfo.isPlaylist".split(" "),zg=!1;
function Ag(a){if("_"!=a[0]){var b=a;Y.mark&&(0==b.lastIndexOf("mark_",0)||(b="mark_"+b),Y.mark(b))}b=Bg();var c=N();b[a]&&(b["_"+a]=b["_"+a]||[b[a]],b["_"+a].push(c));b[a]=c;b=lg();if(c=b[a])Le(c),b[a]=0;Cg()["tick_"+a]=void 0;N();T("csi_on_gel")?(b=Dg(),"_start"==a?fg("baseline_"+b)||pf("latencyActionBaselined",{clientActionNonce:b},sf,void 0,void 0):fg("tick_"+a+"_"+b)||pf("latencyActionTicked",{tickName:a,clientActionNonce:b},sf,void 0,void 0),a=!0):a=!1;if(a=!a)a=!u("yt.timing.pingSent_");if(a&&
(b=R("TIMING_ACTION"),a=Bg(),u("ytglobal.timingready_")&&b&&a._start&&(b=Eg()))){T("tighter_critical_section")&&!zg&&(kg(pg,new ng(Math.round(b-a._start),void 0)),zg=!0);b=!0;c=P("TIMING_WAIT",[]);if(c.length)for(var d=0,e=c.length;d<e;++d)if(!(c[d]in a)){b=!1;break}b&&Fg()}}
function Gg(){var a=Hg().info.yt_lt="hot_bg";Cg().info_yt_lt=a;if(T("csi_on_gel"))if("yt_lt"in wg){var b={},c=wg.yt_lt;0<=Ea(yg,c)&&(a=!!a);c=c.split(".");for(var d=b,e=0;e<c.length-1;e++)d[c[e]]=d[c[e]]||{},d=d[c[e]];b[c[c.length-1]]=a;a=Dg();c=Object.keys(b).join("");fg("info_"+c+"_"+a)||(b.clientActionNonce=a,pf("latencyActionInfo",b,sf,void 0,void 0))}else 0<=Ea(xg,"yt_lt")||S(Error("Unknown label yt_lt logged with GEL CSI."))}
function Eg(){var a=Bg();if(a.aft)return a.aft;for(var b=P("TIMING_AFT_KEYS",["ol"]),c=b.length,d=0;d<c;d++){var e=a[b[d]];if(e)return e}return NaN}
function Fg(){mg();if(!T("csi_on_gel")){var a=Bg(),b=Hg().info,c=a._start,d;for(d in a)if(0==d.lastIndexOf("_",0)&&ra(a[d])){var e=d.slice(1);if(e in sg){var f=Ga(a[d],function(a){return Math.round(a-c)});
b["all_"+e]=f.join()}delete a[d]}e=!!b.ap;if(f=u("ytglobal.timingReportbuilder_")){if(f=f(a,b,void 0))Ig(f,e),Jg(),Kg(),Lg(!1,void 0),P("TIMING_ACTION")&&O("PREVIOUS_ACTION",P("TIMING_ACTION")),O("TIMING_ACTION","")}else{var g=P("CSI_SERVICE_NAME","youtube");f={v:2,s:g,action:P("TIMING_ACTION",void 0)};var h=b.srt;void 0!==a.srt&&delete b.srt;if(b.h5jse){var k=window.location.protocol+u("ytplayer.config.assets.js");(k=Y.getEntriesByName?Y.getEntriesByName(k)[0]:null)?b.h5jse=Math.round(b.h5jse-k.responseEnd):
delete b.h5jse}a.aft=Eg();Mg()&&"youtube"==g&&(Gg(),g=a.vc,k=a.pbs,delete a.aft,b.aft=Math.round(k-g));for(var m in b)"_"!=m.charAt(0)&&(f[m]=b[m]);a.ps=N();b={};m=[];for(d in a)"_"!=d.charAt(0)&&(g=Math.round(a[d]-c),b[d]=g,m.push(d+"."+g));f.rt=m.join(",");(a=u("ytdebug.logTiming"))&&a(f,b);Ig(f,e,void 0);kg(qg,new og(b.aft+(h||0),void 0))}}}
var Kg=w(Y.clearResourceTimings||Y.webkitClearResourceTimings||Y.mozClearResourceTimings||Y.msClearResourceTimings||Y.oClearResourceTimings||v,Y);
function Ig(a,b,c){if(T("debug_csi_data")){var d=u("yt.timing.csiData");d||(d=[],t("yt.timing.csiData",d,void 0));d.push({page:location.href,time:new Date,args:a})}d="";for(var e in a)d+="&"+e+"="+a[e];a="/csi_204?"+d.substring(1);if(window.navigator&&window.navigator.sendBeacon&&b)try{window.navigator&&window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")||De(a,void 0)}catch(f){De(a,void 0)}else De(a);Lg(!0,c)}
function Dg(){var a=Hg().nonce;if(!a){a:{if(window.crypto&&window.crypto.getRandomValues)try{var b=Array(16),c=new Uint8Array(16);window.crypto.getRandomValues(c);for(a=0;a<b.length;a++)b[a]=c[a];var d=b;break a}catch(e){}d=Array(16);for(b=0;16>b;b++){c=z();for(a=0;a<c%23;a++)d[b]=Math.random();d[b]=Math.floor(256*Math.random())}if(rg)for(b=1,c=0;c<rg.length;c++)d[b%16]=d[b%16]^d[(b-1)%16]/4^rg.charCodeAt(c),b++}b=[];for(c=0;c<d.length;c++)b.push("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_".charAt(d[c]&
63));a=b.join("");Hg().nonce=a}return a}
function Bg(){return Hg().tick}
function Cg(){var a=Hg();"gel"in a||(a.gel={});return a.gel}
function Hg(){return u("ytcsi.data_")||Jg()}
function Jg(){var a={tick:{},info:{}};t("ytcsi.data_",a,void 0);return a}
function Lg(a,b){t("yt.timing."+(b||"")+"pingSent_",a,void 0)}
function Mg(){var a=Bg(),b=a.pbr,c=a.vc;a=a.pbs;return b&&c&&a&&b<c&&c<a&&1==Hg().info.yt_pvis}
;function Ng(a,b){H.call(this);this.o=this.j=a;this.O=b;this.A=!1;this.f={};this.U=this.N=null;this.J=new J;fc(this,x(gc,this.J));this.i={};this.G=this.V=this.h=this.da=this.b=null;this.R=!1;this.H=this.w=this.m=this.M=null;this.W={};this.va=["onReady"];this.S=new Kf(this);fc(this,x(gc,this.S));this.ba=null;this.la=NaN;this.T={};Og(this);this.C("onDetailedError",w(this.Ma,this));this.C("onTabOrderChange",w(this.xa,this));this.C("onTabAnnounce",w(this.ma,this));this.C("WATCH_LATER_VIDEO_ADDED",w(this.Na,
this));this.C("WATCH_LATER_VIDEO_REMOVED",w(this.Oa,this));dc||(this.C("onMouseWheelCapture",w(this.Ka,this)),this.C("onMouseWheelRelease",w(this.La,this)));this.C("onAdAnnounce",w(this.ma,this));this.I=new Kf(this);fc(this,x(gc,this.I));this.ca=!1;this.aa=null}
n(Ng,H);l=Ng.prototype;l.ka=function(a,b){this.g||(Pg(this,a),Qg(this,b),this.A&&Rg(this))};
function Pg(a,b){a.da=b;a.b=Jf(b);a.h=a.b.attrs.id||a.h;"video-player"==a.h&&(a.h=a.O,a.b.attrs.id=a.O);a.o.id==a.h&&(a.h+="-player",a.b.attrs.id=a.h);a.b.args.enablejsapi="1";a.b.args.playerapiid=a.O;a.V||(a.V=Sg(a,a.b.args.jsapicallback||"onYouTubePlayerReady"));a.b.args.jsapicallback=null;var c=a.b.attrs.width;c&&(a.o.style.width=Hb(Number(c)||c));if(c=a.b.attrs.height)a.o.style.height=Hb(Number(c)||c)}
l.Aa=function(){return this.da};
function Rg(a){a.b.loaded||(a.b.loaded=!0,"0"!=a.b.args.autoplay?a.f.loadVideoByPlayerVars(a.b.args):a.f.cueVideoByPlayerVars(a.b.args))}
function Tg(a){var b=a.b&&a.b.args;if(b&&b.fflags){var c=b.el;b=b.fflags;if(!c||"profilepage"==c||"embedded"==c&&0<=b.indexOf("web_player_disable_flash_embed=true")||0<=b.indexOf("web_player_disable_flash_playerproxy=true"))return!1}if(!q(a.b.disable.flash)){c=a.b.disable;b=Nf.getInstance();var d=a.b.minVersion;d="string"==typeof d?d.split("."):[d,void 0,void 0];d[0]=parseInt(d[0],10)||0;d[1]=parseInt(d[1],10)||0;d[2]=parseInt(d[2],10)||0;c.flash=!(b.major>d[0]||b.major==d[0]&&b.minor>d[1]||b.major==
d[0]&&b.minor==d[1]&&b.b>=d[2])}return!a.b.disable.flash}
function Ug(a,b){var c=a.b,d=c&&c.args&&c.args.fflags;!d||0>d.indexOf("web_player_flash_fallback_killswitch=true")||b&&(5!=(Tf[b.errorCode]||5)||-1==Vg.indexOf(b.errorCode))||!Tg(a)||((d=Wg(a))&&d.stopVideo&&d.stopVideo(),d&&d.getUpdatedConfigurationData&&(c=d.getUpdatedConfigurationData(),c=If(c)),c.args.autoplay=1,c.args.html5_unavailable="1",Pg(a,c),Qg(a,"flash"))}
function Qg(a,b){if(!a.g){if(!b){var c;if(!(c=!a.b.html5&&Tg(a))){if(!q(a.b.disable.html5)){c=!0;void 0!=a.b.args.deviceHasDisplay&&(c=a.b.args.deviceHasDisplay);if(2.2==Vf)var d=!0;else{a:{var e=c;c=u("yt.player.utils.videoElement_");c||(c=document.createElement("VIDEO"),t("yt.player.utils.videoElement_",c,void 0));try{if(c.canPlayType){e=e?bg:cg;for(var f=0;f<e.length;f++)if(c.canPlayType(e[f])){d=null;break a}}d="fmt.noneavailable"}catch(g){d="html5.missingapi"}}d=!d}d&&(d=Xg(a)||a.b.assets.js);
a.b.disable.html5=!d;d||(a.b.args.html5_unavailable="1")}c=!!a.b.disable.html5}b=c?Tg(a)?"flash":"unsupported":"html5"}("flash"==b?a.cb:a.eb).call(a)}}
function Xg(a){var b=!0,c=Wg(a);c&&a.b&&(a=a.b,b=Md(c,"version")==a.assets.js);return b&&!!u("yt.player.Application.create")}
l.eb=function(){if(!this.R){var a=Xg(this);if(a&&"html5"==Yg(this))this.G="html5",this.A||this.L();else if(Zg(this),this.G="html5",a&&this.m)this.j.appendChild(this.m),this.L();else{this.b.loaded=!0;var b=!1;this.M=w(function(){b=!0;var a=Jf(this.b);u("yt.player.Application.create")(this.j,a);this.L()},this);
this.R=!0;a?this.M():($d(this.b.assets.js,this.M),Pf(this.b.assets.css),$g(this)&&!b&&t("yt.player.Application.create",null,void 0))}}};
l.cb=function(){var a=Jf(this.b);if(!this.w){var b=Wg(this);b&&(this.w=document.createElement("SPAN"),this.w.tabIndex=0,Lf(this.S,this.w,"focus",this.pa),this.H=document.createElement("SPAN"),this.H.tabIndex=0,Lf(this.S,this.H,"focus",this.pa),b.parentNode&&b.parentNode.insertBefore(this.w,b),b.parentNode&&b.parentNode.insertBefore(this.H,b.nextSibling))}a.attrs.width=a.attrs.width||"100%";a.attrs.height=a.attrs.height||"100%";if("flash"==Yg(this))this.G="flash",this.A||this.L();else{Zg(this);this.G=
"flash";this.b.loaded=!0;window!=window.top&&document.referrer&&(a.args.framer=document.referrer.substring(0,128));b=this.j;var c=a.url;if(c){b=r(b)?Ab(b):b;var d=Ta(a.attrs);d.tabindex=0;var e=Ta(a.params);e.flashvars=ld(a.args);if(Fd){d.classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000";e.movie=c;a=document.createElement("object");for(var f in d)a.setAttribute(f,d[f]);for(var g in e)f=document.createElement("param"),f.setAttribute("name",g),f.setAttribute("value",e[g]),a.appendChild(f)}else{d.type=
"application/x-shockwave-flash";d.src=c;a=document.createElement("embed");a.setAttribute("name",d.id);for(var h in d)a.setAttribute(h,d[h]);for(var k in e)a.setAttribute(k,e[k])}g=document.createElement("div");g.appendChild(a);b.innerHTML=g.innerHTML}this.L()}};
l.pa=function(){Wg(this).focus()};
function Wg(a){var b=Ab(a.h);!b&&a.o&&a.o.querySelector&&(b=a.o.querySelector("#"+a.h));return b}
l.L=function(){if(!this.g){var a=Wg(this),b=!1;try{a&&a.getApiInterface&&a.getApiInterface()&&(b=!0)}catch(f){}if(b)if(this.R=!1,a.isNotServable&&a.isNotServable(this.b.args.video_id))Ug(this);else{Og(this);this.A=!0;a=Wg(this);a.addEventListener&&(this.N=ah(this,a,"addEventListener"));a.removeEventListener&&(this.U=ah(this,a,"removeEventListener"));b=a.getApiInterface();b=b.concat(a.getInternalApiInterface());for(var c=0;c<b.length;c++){var d=b[c];this.f[d]||(this.f[d]=ah(this,a,d))}for(var e in this.i)this.N(e,
this.i[e]);Rg(this);this.V&&this.V(this.f);this.J.K("onReady",this.f)}else this.la=U(w(this.L,this),50)}};
function ah(a,b,c){var d=b[c];return function(){try{return a.ba=null,d.apply(b,arguments)}catch(e){"Bad NPObject as private data!"!=e.message&&"sendAbandonmentPing"!=c&&(e.message+=" ("+c+")",a.ba=e,S(e,"WARNING"))}}}
function Og(a){a.A=!1;if(a.U)for(var b in a.i)a.U(b,a.i[b]);for(var c in a.T)window.clearTimeout(parseInt(c,10));a.T={};a.N=null;a.U=null;for(var d in a.f)a.f[d]=null;a.f.addEventListener=w(a.C,a);a.f.removeEventListener=w(a.Ta,a);a.f.destroy=w(a.dispose,a);a.f.getLastError=w(a.Ba,a);a.f.getPlayerType=w(a.Ca,a);a.f.getCurrentVideoConfig=w(a.Aa,a);a.f.loadNewVideoConfig=w(a.ka,a);a.f.isReady=w(a.Ia,a)}
l.Ia=function(){return this.A};
l.C=function(a,b){if(!this.g){var c=Sg(this,b);if(c){if(!(0<=Ea(this.va,a)||this.i[a])){var d=bh(this,a);this.N&&this.N(a,d)}this.J.subscribe(a,c);"onReady"==a&&this.A&&U(x(c,this.f),0)}}};
l.Ta=function(a,b){if(!this.g){var c=Sg(this,b);c&&Uc(this.J,a,c)}};
function Sg(a,b){var c=b;if("string"==typeof b){if(a.W[b])return a.W[b];c=function(){var a=u(b);a&&a.apply(p,arguments)};
a.W[b]=c}return c?c:null}
function bh(a,b){var c="ytPlayer"+b+a.O,d=w(function(a){if("html5"==Yg(this)){var c=this.b&&this.b.args&&this.b.args.fflags;if(c&&0>c.indexOf("use_html5_player_event_timeout=true")){this.J.K(b,a);return}}var d=U(w(function(){if(!this.g){this.J.K(b,a);var c=this.T,e=String(d);e in c&&delete c[e]}},this),0);
Sa(this.T,String(d))},a);
a.i[b]=c;p[c]=d;return c}
l.xa=function(a){a=a?Cb:Bb;for(var b=a(document.activeElement);b&&(1!=b.nodeType||b==this.w||b==this.H||(b.focus(),b!=document.activeElement));)b=a(b)};
l.ma=function(a){Vd("a11y-announce",a)};
l.Ma=function(a){Ug(this,a)};
l.Na=function(a){Vd("WATCH_LATER_VIDEO_ADDED",a)};
l.Oa=function(a){Vd("WATCH_LATER_VIDEO_REMOVED",a)};
l.Ka=function(){if(!this.ca){if(ec){var a=document,b=a.scrollingElement?a.scrollingElement:bb||"CSS1Compat"!=a.compatMode?a.body||a.documentElement:a.documentElement;a=a.parentWindow||a.defaultView;this.aa=E&&F("10")&&a.pageYOffset!=b.scrollTop?new yb(b.scrollLeft,b.scrollTop):new yb(a.pageXOffset||b.scrollLeft,a.pageYOffset||b.scrollTop);Lf(this.I,window,"scroll",this.Ra);Lf(this.I,this.j,"touchmove",this.Qa)}else Lf(this.I,this.j,"mousewheel",this.qa),Lf(this.I,this.j,"wheel",this.qa);this.ca=!0}};
l.La=function(){Mf(this.I);this.ca=!1};
l.qa=function(a){a=a||window.event;a.returnValue=!1;a.preventDefault&&a.preventDefault()};
l.Ra=function(){window.scrollTo(this.aa.x,this.aa.y)};
l.Qa=function(a){a.preventDefault()};
l.Ca=function(){return this.G||Yg(this)};
l.Ba=function(){return this.ba};
function Yg(a){return(a=Wg(a))?"div"==a.tagName.toLowerCase()?"html5":"flash":null}
function Zg(a){Ag("dcp");a.cancel();Og(a);a.G=null;a.b&&(a.b.loaded=!1);var b=Wg(a);"html5"==Yg(a)?Xg(a)||!$g(a)?a.m=b:(b&&b.destroy&&b.destroy(),a.m=null):b&&b.destroy&&b.destroy();b=a.j;for(var c;c=b.firstChild;)b.removeChild(c);Mf(a.S);a.w=null;a.H=null}
l.cancel=function(){this.M&&fe(this.b.assets.js,this.M);window.clearTimeout(this.la);this.R=!1};
l.l=function(){Zg(this);if(this.m&&this.b&&this.m.destroy)try{this.m.destroy()}catch(b){S(b)}this.W=null;for(var a in this.i)p[this.i[a]]=null;this.da=this.b=this.f=null;delete this.j;delete this.o;H.prototype.l.call(this)};
function $g(a){return a.b&&a.b.args&&a.b.args.fflags?-1!=a.b.args.fflags.indexOf("player_destroy_old_version=true"):!1}
var Vg=["fmt.noneavailable","html5.missingapi","html5.unsupportedads","html5.unsupportedlive"];var ch={},dh="player_uid_"+(1E9*Math.random()>>>0);function eh(a){var b="player";b=r(b)?Ab(b):b;a=If(a);var c=dh+"_"+(b[va]||(b[va]=++wa)),d=ch[c];if(d)return d.ka(a),d.f;d=new Ng(b,c);ch[c]=d;Vd("player-added",d.f);fc(d,x(fh,d));U(function(){d.ka(a)},0);
return d.f}
function fh(a){delete ch[a.O]}
;function gh(a){return(0==a.search("cue")||0==a.search("load"))&&"loadModule"!=a}
function hh(a,b,c){r(a)&&(a={mediaContentUrl:a,startSeconds:b,suggestedQuality:c});b=/\/([ve]|embed)\/([^#?]+)/.exec(a.mediaContentUrl);a.videoId=b&&b[2]?b[2]:null;return ih(a)}
function ih(a,b,c){if(ua(a)){b="endSeconds startSeconds mediaContentUrl suggestedQuality videoId two_stage_token".split(" ");c={};for(var d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}return{videoId:a,startSeconds:b,suggestedQuality:c}}
function jh(a,b,c,d){if(ua(a)&&!ra(a)){b="playlist list listType index startSeconds suggestedQuality".split(" ");c={};for(d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}b={index:b,startSeconds:c,suggestedQuality:d};r(a)&&16==a.length?b.list="PL"+a:b.playlist=a;return b}
function kh(a){var b=a.video_id||a.videoId;if(r(b)){var c=tf()||{},d=tf()||{};q(void 0)?d[b]=void 0:delete d[b];var e=z()+3E5,f=vf;if(f&&window.JSON){r(d)||(d=JSON.stringify(d,void 0));try{f.set("yt-player-two-stage-token",d,e)}catch(g){f.remove("yt-player-two-stage-token")}}(b=c[b])&&(a.two_stage_token=b)}}
;function lh(a){H.call(this);this.f=a;this.f.subscribe("command",this.sa,this);this.h={};this.i=!1}
A(lh,H);l=lh.prototype;l.start=function(){this.i||this.g||(this.i=!0,mh(this.f,"RECEIVING"))};
l.sa=function(a,b){if(this.i&&!this.g){var c=b||{};switch(a){case "addEventListener":if(r(c.event)&&(c=c.event,!(c in this.h))){var d=w(this.Va,this,c);this.h[c]=d;this.addEventListener(c,d)}break;case "removeEventListener":r(c.event)&&nh(this,c.event);break;default:this.b.isReady()&&this.b[a]&&(c=oh(a,b||{}),c=this.b[a].apply(this.b,c),(c=ph(a,c))&&this.i&&!this.g&&mh(this.f,a,c))}}};
l.Va=function(a,b){this.i&&!this.g&&mh(this.f,a,this.fa(a,b))};
l.fa=function(a,b){if(null!=b)return{value:b}};
function nh(a,b){b in a.h&&(a.removeEventListener(b,a.h[b]),delete a.h[b])}
l.l=function(){var a=this.f;a.g||Uc(a.b,"command",this.sa,this);this.f=null;for(var b in this.h)nh(this,b);lh.u.l.call(this)};function qh(a,b){lh.call(this,b);this.b=a;this.start()}
A(qh,lh);qh.prototype.addEventListener=function(a,b){this.b.addEventListener(a,b)};
qh.prototype.removeEventListener=function(a,b){this.b.removeEventListener(a,b)};
function oh(a,b){switch(a){case "loadVideoById":return b=ih(b),kh(b),[b];case "cueVideoById":return b=ih(b),kh(b),[b];case "loadVideoByPlayerVars":return kh(b),[b];case "cueVideoByPlayerVars":return kh(b),[b];case "loadPlaylist":return b=jh(b),kh(b),[b];case "cuePlaylist":return b=jh(b),kh(b),[b];case "seekTo":return[b.seconds,b.allowSeekAhead];case "playVideoAt":return[b.index];case "setVolume":return[b.volume];case "setPlaybackQuality":return[b.suggestedQuality];case "setPlaybackRate":return[b.suggestedRate];
case "setLoop":return[b.loopPlaylists];case "setShuffle":return[b.shufflePlaylist];case "getOptions":return[b.module];case "getOption":return[b.module,b.option];case "setOption":return[b.module,b.option,b.value];case "handleGlobalKeyDown":return[b.keyCode,b.shiftKey]}return[]}
function ph(a,b){switch(a){case "isMuted":return{muted:b};case "getVolume":return{volume:b};case "getPlaybackRate":return{playbackRate:b};case "getAvailablePlaybackRates":return{availablePlaybackRates:b};case "getVideoLoadedFraction":return{videoLoadedFraction:b};case "getPlayerState":return{playerState:b};case "getCurrentTime":return{currentTime:b};case "getPlaybackQuality":return{playbackQuality:b};case "getAvailableQualityLevels":return{availableQualityLevels:b};case "getDuration":return{duration:b};
case "getVideoUrl":return{videoUrl:b};case "getVideoEmbedCode":return{videoEmbedCode:b};case "getPlaylist":return{playlist:b};case "getPlaylistIndex":return{playlistIndex:b};case "getOptions":return{options:b};case "getOption":return{option:b}}}
qh.prototype.fa=function(a,b){switch(a){case "onReady":return;case "onStateChange":return{playerState:b};case "onPlaybackQualityChange":return{playbackQuality:b};case "onPlaybackRateChange":return{playbackRate:b};case "onError":return{errorCode:b}}return qh.u.fa.call(this,a,b)};
qh.prototype.l=function(){qh.u.l.call(this);delete this.b};function rh(a,b,c,d){H.call(this);this.f=b||null;this.o="*";this.h=c||null;this.sessionId=null;this.channel=d||null;this.A=!!a;this.m=w(this.w,this);window.addEventListener("message",this.m)}
n(rh,H);rh.prototype.w=function(a){if(!("*"!=this.h&&a.origin!=this.h||this.f&&a.source!=this.f)&&r(a.data)){try{var b=JSON.parse(a.data)}catch(c){return}if(!(null==b||this.A&&(this.sessionId&&this.sessionId!=b.id||this.channel&&this.channel!=b.channel))&&b)switch(b.event){case "listening":"null"!=a.origin&&(this.h=this.o=a.origin);this.f=a.source;this.sessionId=b.id;this.b&&(this.b(),this.b=null);break;case "command":this.i&&(!this.j||0<=Ea(this.j,b.func))&&this.i(b.func,b.args)}}};
rh.prototype.sendMessage=function(a,b){var c=b||this.f;if(c){this.sessionId&&(a.id=this.sessionId);this.channel&&(a.channel=this.channel);try{var d=qc(a);c.postMessage(d,this.o)}catch(e){S(e,"WARNING")}}};
rh.prototype.l=function(){window.removeEventListener("message",this.m);H.prototype.l.call(this)};function sh(a,b,c){rh.call(this,a,b,c||P("POST_MESSAGE_ORIGIN",void 0)||window.document.location.protocol+"//"+window.document.location.hostname,"widget");this.j=this.b=this.i=null}
n(sh,rh);function th(){var a=this.g=new sh(!!P("WIDGET_ID_ENFORCE")),b=w(this.Sa,this);a.i=b;a.j=null;this.g.channel="widget";if(a=P("WIDGET_ID"))this.g.sessionId=a;this.h=[];this.j=!1;this.i={}}
l=th.prototype;l.Sa=function(a,b){if("addEventListener"==a&&b){var c=b[0];this.i[c]||"onReady"==c||(this.addEventListener(c,uh(this,c)),this.i[c]=!0)}else this.ua(a,b)};
l.ua=function(){};
function uh(a,b){return w(function(a){this.sendMessage(b,a)},a)}
l.addEventListener=function(){};
l.za=function(){this.j=!0;this.sendMessage("initialDelivery",this.ga());this.sendMessage("onReady");C(this.h,this.ta,this);this.h=[]};
l.ga=function(){return null};
function vh(a,b){a.sendMessage("infoDelivery",b)}
l.ta=function(a){this.j?this.g.sendMessage(a):this.h.push(a)};
l.sendMessage=function(a,b){this.ta({event:a,info:void 0==b?null:b})};
l.dispose=function(){this.g=null};function wh(a){th.call(this);this.b=a;this.f=[];this.addEventListener("onReady",w(this.Pa,this));this.addEventListener("onVideoProgress",w(this.Za,this));this.addEventListener("onVolumeChange",w(this.ab,this));this.addEventListener("onApiChange",w(this.Ua,this));this.addEventListener("onPlaybackQualityChange",w(this.Wa,this));this.addEventListener("onPlaybackRateChange",w(this.Xa,this));this.addEventListener("onStateChange",w(this.Ya,this))}
A(wh,th);l=wh.prototype;l.ua=function(a,b){if(this.b[a]){b=b||[];if(0<b.length&&gh(a)){var c=b;if(ua(c[0])&&!ra(c[0]))c=c[0];else{var d={};switch(a){case "loadVideoById":case "cueVideoById":d=ih.apply(window,c);break;case "loadVideoByUrl":case "cueVideoByUrl":d=hh.apply(window,c);break;case "loadPlaylist":case "cuePlaylist":d=jh.apply(window,c)}c=d}kh(c);b.length=1;b[0]=c}this.b[a].apply(this.b,b);gh(a)&&vh(this,this.ga())}};
l.Pa=function(){var a=w(this.za,this);this.g.b=a};
l.addEventListener=function(a,b){this.f.push({eventType:a,listener:b});this.b.addEventListener(a,b)};
l.ga=function(){if(!this.b)return null;var a=this.b.getApiInterface();Ia(a,"getVideoData");for(var b={apiInterface:a},c=0,d=a.length;c<d;c++){var e=a[c],f=e;if(0==f.search("get")||0==f.search("is")){f=e;var g=0;0==f.search("get")?g=3:0==f.search("is")&&(g=2);f=f.charAt(g).toLowerCase()+f.substr(g+1);try{var h=this.b[e]();b[f]=h}catch(k){}}}b.videoData=this.b.getVideoData();b.currentTimeLastUpdated_=z()/1E3;return b};
l.Ya=function(a){a={playerState:a,currentTime:this.b.getCurrentTime(),duration:this.b.getDuration(),videoData:this.b.getVideoData(),videoStartBytes:0,videoBytesTotal:this.b.getVideoBytesTotal(),videoLoadedFraction:this.b.getVideoLoadedFraction(),playbackQuality:this.b.getPlaybackQuality(),availableQualityLevels:this.b.getAvailableQualityLevels(),videoUrl:this.b.getVideoUrl(),playlist:this.b.getPlaylist(),playlistIndex:this.b.getPlaylistIndex(),currentTimeLastUpdated_:z()/1E3,playbackRate:this.b.getPlaybackRate(),
mediaReferenceTime:this.b.getMediaReferenceTime()};this.b.getProgressState&&(a.progressState=this.b.getProgressState());this.b.getStoryboardFormat&&(a.storyboardFormat=this.b.getStoryboardFormat());vh(this,a)};
l.Wa=function(a){vh(this,{playbackQuality:a})};
l.Xa=function(a){vh(this,{playbackRate:a})};
l.Ua=function(){for(var a=this.b.getOptions(),b={namespaces:a},c=0,d=a.length;c<d;c++){var e=a[c],f=this.b.getOptions(e);if(f){b[e]={options:f};for(var g=0,h=f.length;g<h;g++){var k=f[g],m=this.b.getOption(e,k);b[e][k]=m}}else S(Error("getOptions() returns ["+a.join(", ")+"], but getOption("+e+") returns null."))}this.sendMessage("apiInfoDelivery",b)};
l.ab=function(){vh(this,{muted:this.b.isMuted(),volume:this.b.getVolume()})};
l.Za=function(a){a={currentTime:a,videoBytesLoaded:this.b.getVideoBytesLoaded(),videoLoadedFraction:this.b.getVideoLoadedFraction(),currentTimeLastUpdated_:z()/1E3,playbackRate:this.b.getPlaybackRate(),mediaReferenceTime:this.b.getMediaReferenceTime()};this.b.getProgressState&&(a.progressState=this.b.getProgressState());vh(this,a)};
l.dispose=function(){wh.u.dispose.call(this);for(var a=0;a<this.f.length;a++){var b=this.f[a];this.b.removeEventListener(b.eventType,b.listener)}this.f=[]};function xh(){H.call(this);this.b=new J;fc(this,x(gc,this.b))}
A(xh,H);xh.prototype.subscribe=function(a,b,c){return this.g?0:this.b.subscribe(a,b,c)};
xh.prototype.D=function(a){return this.g?!1:this.b.D(a)};
xh.prototype.j=function(a,b){this.g||this.b.K.apply(this.b,arguments)};function yh(a,b,c){xh.call(this);this.f=a;this.h=b;this.i=c}
A(yh,xh);function mh(a,b,c){if(!a.g){var d=a.f;d.g||a.h!=d.b||(a={id:a.i,command:b},c&&(a.data=c),d.b.postMessage(qc(a),d.h))}}
yh.prototype.l=function(){this.h=this.f=null;yh.u.l.call(this)};function zh(a,b,c){H.call(this);this.b=a;this.h=c;this.i=Ve(window,"message",w(this.j,this));this.f=new yh(this,a,b);fc(this,x(gc,this.f))}
A(zh,H);zh.prototype.j=function(a){var b;if(b=!this.g)if(b=a.origin==this.h)a:{b=this.b;do{b:{var c=a.source;do{if(c==b){c=!0;break b}if(c==c.parent)break;c=c.parent}while(null!=c);c=!1}if(c){b=!0;break a}b=b.opener}while(null!=b);b=!1}if(b&&(a=a.data,r(a))){try{a=JSON.parse(a)}catch(d){return}a.command&&(b=this.f,b.g||b.j("command",a.command,a.data))}};
zh.prototype.l=function(){We(this.i);this.b=null;zh.u.l.call(this)};function Ah(){var a=Oa(window,"settings","experiments","flags","html5_serverside_pagead_id_sets_cookie")||P("EXP_HTML5_SERVERSIDE_PAGEAD_ID_SETS_COOKIE",!1)||T("html5_serverside_pagead_id_sets_cookie")?"//googleads.g.doubleclick.net/pagead/id?exp=nomnom":"//googleads.g.doubleclick.net/pagead/id",b=Ta(Bh);return new I(function(c,d){b.P=function(a){ne(a)?c(a):d(new Ch("Request failed, status="+a.status,"net.badstatus"))};
b.onError=function(){d(new Ch("Unknown request error","net.unknown"))};
b.Z=function(){d(new Ch("Request timed out","net.timeout"))};
ue(a,b)})}
function Ch(a,b){B.call(this,a+", errorCode="+b);this.errorCode=b;this.name="PromiseAjaxError"}
n(Ch,B);function Dh(a){this.f=void 0===a?null:a;this.g=0;this.b=null}
Dh.prototype.then=function(a,b,c){return this.f?this.f.then(a,b,c):1===this.g&&a?(a=a.call(c,this.b),xc(a)?a:Eh(a)):2===this.g&&b?(a=b.call(c,this.b),xc(a)?a:Fh(a)):this};
Dh.prototype.getValue=function(){return this.b};
wc(Dh);function Fh(a){var b=new Dh;a=void 0===a?null:a;b.g=2;b.b=void 0===a?null:a;return b}
function Eh(a){var b=new Dh;a=void 0===a?null:a;b.g=1;b.b=void 0===a?null:a;return b}
;function Gh(a){B.call(this,a.message||a.description||a.name);this.isMissing=a instanceof Hh;this.isTimeout=a instanceof Ch&&"net.timeout"==a.errorCode;this.isCanceled=a instanceof Lc}
n(Gh,B);Gh.prototype.name="BiscottiError";function Hh(){B.call(this,"Biscotti ID is missing from server")}
n(Hh,B);Hh.prototype.name="BiscottiMissingError";var Bh={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},Ih=null;function Jh(){if("1"===Oa(P("PLAYER_CONFIG",{}),"args","privembed"))return Cc(Error("Biscotti ID is not available in private embed mode"));Ih||(Ih=Kc(Ah().then(Kh),function(a){return Lh(2,a)}));
return Ih}
function Kh(a){a=a.responseText;if(0!=a.lastIndexOf(")]}'",0))throw new Hh;a=JSON.parse(a.substr(4));if(1<(a.type||1))throw new Hh;a=a.id;Mh(a);Ih=Eh(a);Nh(18E5,2);return a}
function Lh(a,b){var c=new Gh(b);Mh("");Ih=Fh(c);0<a&&Nh(12E4,a-1);throw c;}
function Nh(a,b){U(function(){Kc(Ah().then(Kh,function(a){return Lh(b,a)}),v)},a)}
function Mh(a){t("yt.ads.biscotti.lastId_",a,void 0)}
function Oh(){try{var a=u("yt.ads.biscotti.getId_");return a?a():Jh()}catch(b){return Cc(b)}}
;function Ph(a){B.apply(this,arguments)}
n(Ph,B);Ph.prototype.name="MutsuError";function Qh(){var a=new Ph("ID is missing"),b=new Ph("Timeout"),c=null,d=!1;Bd(function(){c=yd();d=!0});
if(d)return c?Eh(c):Fh(a);var e=new I(function(b,c){Bd(function(){var d=yd();d?b(d):c(a)})}),f=hd().then(function(){return Cc(b)});
return Ic(Fc([e,f]),function(){return f.cancel()})}
;function Rh(a){if("1"!==Oa(P("PLAYER_CONFIG",{}),"args","privembed")){a&&!u("yt.ads.biscotti.getId_")&&t("yt.ads.biscotti.getId_",Jh,void 0);try{var b=Oh();if(T("enable_mutsu")){u("yt.ads.mutsu.getId_")||(xd(),L[3]=!0,t("yt.ads.mutsu.getId_",Qh,void 0));try{var c=u("yt.ads.mutsu.getId_")()}catch(d){c=Cc(d)}}else c=Cc(new Ph("unimplemented"));Gc([b,c]).then(function(a){var b=a[0];a=a[1];if(b.ea||a.ea){b=b.value;a=a.value;var c={};c.dt=Ib;c.flash=rd||"0";a:{try{var d=window.top.location.href}catch(ob){d=
2;break a}d=null!=d?d==window.document.location.href?0:1:2}d=(c.frm=d,c);d.u_tz=-(new Date).getTimezoneOffset();var h=void 0===h?G:h;try{var k=h.history.length}catch(ob){k=0}d.u_his=k;d.u_java=!!G.navigator&&"unknown"!==typeof G.navigator.javaEnabled&&!!G.navigator.javaEnabled&&G.navigator.javaEnabled();G.screen&&(d.u_h=G.screen.height,d.u_w=G.screen.width,d.u_ah=G.screen.availHeight,d.u_aw=G.screen.availWidth,d.u_cd=G.screen.colorDepth);G.navigator&&G.navigator.plugins&&(d.u_nplug=G.navigator.plugins.length);
G.navigator&&G.navigator.mimeTypes&&(d.u_nmime=G.navigator.mimeTypes.length);d.ca_type=qd?"flash":"image";if(T("enable_server_side_search_pyv")||T("enable_server_side_mweb_search_pyv")){k=window;try{var m=k.screenX;var y=k.screenY}catch(ob){}try{var Q=k.outerWidth;var tg=k.outerHeight}catch(ob){}try{var ug=k.innerWidth;var vg=k.innerHeight}catch(ob){}m=[k.screenLeft,k.screenTop,m,y,k.screen?k.screen.availWidth:void 0,k.screen?k.screen.availTop:void 0,Q,tg,ug,vg];y=window.top;try{if(y.document&&!y.document.body)var W=
new zb(-1,-1);else{var Ba=(y||window).document,Hd="CSS1Compat"==Ba.compatMode?Ba.documentElement:Ba.body;W=(new zb(Hd.clientWidth,Hd.clientHeight)).round()}var Ca=W}catch(ob){Ca=new zb(-12245933,-12245933)}W={};Ba=0;p.SVGElement&&p.document.createElementNS&&(Ba|=1);W.bc=Ba;W.bih=Ca.height;W.biw=Ca.width;W.brdim=m.join();Ca=(W.vis={visible:1,hidden:2,prerender:3,preview:4,unloaded:5}[Gb.webkitVisibilityState||Gb.mozVisibilityState||Gb.visibilityState||""]||0,W.wgl=!!G.WebGLRenderingContext,W);for(var Id in Ca)d[Id]=
Ca[Id]}void 0!==b&&(d.bid=b);void 0!==a&&(d.mutsuid=a);d.bsq=Sh++;Ae("//www.youtube.com/ad_data_204",{Da:!1,B:d})}});
U(Rh,18E5)}catch(d){S(d)}}}
var Sh=0;var Z=u("ytglobal.prefsUserPrefsPrefs_")||{};t("ytglobal.prefsUserPrefsPrefs_",Z,void 0);function Th(){this.b=P("ALT_PREF_COOKIE_NAME","PREF");var a=Ob.get(""+this.b,void 0);if(a){a=decodeURIComponent(a).split("&");for(var b=0;b<a.length;b++){var c=a[b].split("="),d=c[0];(c=c[1])&&(Z[d]=c.toString())}}}
Th.prototype.get=function(a,b){Uh(a);Vh(a);var c=void 0!==Z[a]?Z[a].toString():null;return null!=c?c:b?b:""};
Th.prototype.set=function(a,b){Uh(a);Vh(a);if(null==b)throw Error("ExpectedNotNull");Z[a]=b.toString()};
Th.prototype.remove=function(a){Uh(a);Vh(a);delete Z[a]};
Th.prototype.clear=function(){for(var a in Z)delete Z[a]};
function Vh(a){if(/^f([1-9][0-9]*)$/.test(a))throw Error("ExpectedRegexMatch: "+a);}
function Uh(a){if(!/^\w+$/.test(a))throw Error("ExpectedRegexMismatch: "+a);}
function Wh(a){a=void 0!==Z[a]?Z[a].toString():null;return null!=a&&/^[A-Fa-f0-9]+$/.test(a)?parseInt(a,16):null}
pa(Th);var Xh=null,Yh=null,Zh=null,$h={};function ai(a){pf(a.payload_name,a.payload,sf,void 0,void 0)}
function bi(a){var b=a.id;a=a.ve_type;var c=af++;a=new $e(void 0,a,c,void 0,void 0);$h[b]=a;b=zf();c=yf();b&&c&&qf(b,c,a)}
function ci(a){var b=a.csn;a=a.root_ve_type;if(b&&a&&(O("client-screen-nonce",b),O("ROOT_VE_TYPE",a),a=yf()))for(var c in $h){var d=$h[c];d&&qf(b,a,d)}}
function di(a){$h[a.id]=new $e(a.tracking_params)}
function ei(a){var b=zf();a=$h[a.id];b&&a&&rf(sf,{click:{csn:b,visualElement:bf(a)}})}
function fi(a){a=a.ids;var b=zf();if(b)for(var c=0;c<a.length;c++){var d=$h[a[c]];if(d){var e=b,f=sf;T("interaction_logging_on_gel_web")?pf("visualElementShown",{csn:e,ve:bf(d),eventType:1},f):rf(f,{visibilityUpdate:{csn:e,visualElements:[bf(d)]}},void 0)}}}
function gi(){var a=Xh;a&&a.startInteractionLogging&&a.startInteractionLogging()}
;t("yt.setConfig",O,void 0);t("yt.config.set",O,void 0);t("yt.setMsg",Je,void 0);t("yt.msgs.set",Je,void 0);t("yt.logging.errors.log",He,void 0);
t("writeEmbed",function(){var a=P("PLAYER_CONFIG",void 0);Rh(!0);"gvn"==a.args.ps&&(document.body.style.backgroundColor="transparent");var b=document.referrer,c=P("POST_MESSAGE_ORIGIN");window!=window.top&&b&&b!=document.URL&&(a.args.loaderUrl=b);P("LIGHTWEIGHT_AUTOPLAY")&&(a.args.autoplay="1");a.args.autoplay&&kh(a.args);Xh=a=eh(a);a.addEventListener("onScreenChanged",ci);a.addEventListener("onLogClientVeCreated",bi);a.addEventListener("onLogServerVeCreated",di);a.addEventListener("onLogToGel",ai);
a.addEventListener("onLogVeClicked",ei);a.addEventListener("onLogVesShown",fi);a.addEventListener("onReady",gi);b=P("POST_MESSAGE_ID","player");P("ENABLE_JS_API")?Zh=new wh(a):P("ENABLE_POST_API")&&r(b)&&r(c)&&(Yh=new zh(window.parent,b,c),Zh=new qh(a,Yh.f));P("BG_P")&&(P("BG_I")||P("BG_IU"))&&he();Oe()},void 0);
t("yt.www.watch.ads.restrictioncookie.spr",function(a){De(a+"mac_204?action_fcts=1");return!0},void 0);
var hi=Jd(function(){Ag("ol");var a=Th.getInstance(),b=!!((Wh("f"+(Math.floor(119/31)+1))||0)&67108864),c=1<window.devicePixelRatio;if(document.body&&jc(document.body,"exp-invert-logo"))if(c&&!jc(document.body,"inverted-hdpi")){var d=document.body;d.classList?d.classList.add("inverted-hdpi"):jc(d,"inverted-hdpi")||(d.className+=0<d.className.length?" inverted-hdpi":"inverted-hdpi")}else!c&&jc(document.body,"inverted-hdpi")&&kc();if(b!=c){b="f"+(Math.floor(119/31)+1);d=Wh(b)||0;d=c?d|67108864:d&-67108865;
0==d?delete Z[b]:Z[b]=d.toString(16).toString();a=a.b;c=[];for(var e in Z)c.push(e+"="+encodeURIComponent(String(Z[e])));Af(a,c.join("&"),63072E3)}}),ii=Jd(function(){var a=Xh;
a&&a.sendAbandonmentPing&&a.sendAbandonmentPing();P("PL_ATT")&&(ge=null);a=0;for(var b=Me.length;a<b;a++)Le(Me[a]);Me.length=0;ee("//static.doubleclick.net/instream/ad_status.js");Ne=!1;O("DCLKSTAT",0);hc(Zh,Yh);if(a=Xh)a.removeEventListener("onScreenChanged",ci),a.removeEventListener("onLogClientVeCreated",bi),a.removeEventListener("onLogServerVeCreated",di),a.removeEventListener("onLogToGel",ai),a.removeEventListener("onLogVeClicked",ei),a.removeEventListener("onLogVesShown",fi),a.removeEventListener("onReady",
gi),a.destroy();$h={}});
window.addEventListener?(window.addEventListener("load",hi),window.addEventListener("unload",ii)):window.attachEvent&&(window.attachEvent("onload",hi),window.attachEvent("onunload",ii));}).call(this);
