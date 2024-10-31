jQuery( "#deactivate-sell-btc-by-hayyatapps" ).click(function() {
	var uninstall_form = btoa(window.location.href);
window.open('https://wppluginbox.com/uninstall/sell-btc/?uninstall_form='+uninstall_form,'_blank');
});