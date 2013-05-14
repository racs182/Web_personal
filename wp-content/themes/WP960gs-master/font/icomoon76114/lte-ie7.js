/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-pencil' : '&#xe000;',
			'icon-spinner' : '&#xe001;',
			'icon-stats' : '&#xe002;',
			'icon-briefcase' : '&#xe003;',
			'icon-airplane' : '&#xe004;',
			'icon-user' : '&#xe005;',
			'icon-signup' : '&#xe006;',
			'icon-wink' : '&#xe007;',
			'icon-loop' : '&#xe008;',
			'icon-arrow-left' : '&#xe009;',
			'icon-arrow-right' : '&#xe00a;',
			'icon-twitter' : '&#x67;',
			'icon-twitter-2' : '&#xe00c;',
			'icon-twitter-3' : '&#xe00d;',
			'icon-youtube' : '&#xe00e;',
			'icon-youtube-2' : '&#xe00f;',
			'icon-github' : '&#x26;',
			'icon-github-2' : '&#xe011;',
			'icon-github-3' : '&#x68;',
			'icon-skype' : '&#x73;',
			'icon-google-plus' : '&#xe015;',
			'icon-google-plus-2' : '&#xe016;',
			'icon-google-plus-3' : '&#xe017;',
			'icon-stats-2' : '&#xe014;',
			'icon-arrow-left-alt1' : '&#xe018;',
			'icon-arrow-right-alt1' : '&#xe019;',
			'icon-left-quote' : '&#xe01a;',
			'icon-right-quote' : '&#xe01b;',
			'icon-left-quote-alt' : '&#xe01c;',
			'icon-right-quote-alt' : '&#xe01d;',
			'icon-play' : '&#xe01e;',
			'icon-play-2' : '&#xe01f;',
			'icon-play-3' : '&#xe020;',
			'icon-bars' : '&#xe021;',
			'icon-menu' : '&#xe022;',
			'icon-menu-2' : '&#xe023;',
			'icon-pencil-2' : '&#xe024;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};