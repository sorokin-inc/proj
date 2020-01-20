if (document.documentElement.clientHeight > document.documentElement.clientWidth) {
    var ask = confirm('Flip your devise or unfold your browser window to fullscreen');
    screen.orientation === "landscape-primary";
}

window.addEventListener("orientationchange", function() {
	alert(screen.orientation);
}, false);