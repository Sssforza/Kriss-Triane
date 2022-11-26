let md = 1024
let xs = 540
console.log('resp')
let viewport = $('meta[name="viewport"]');

if (window.screen.availWidth <= md || device.tablet()) {
	viewport.attr("content", "width=640");
}
if (window.screen.availWidth <= xs || device.mobile()) {
	viewport.attr("content", "width=320");
}