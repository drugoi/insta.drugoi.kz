$(function () {
    var insta_container = $(".instagram"),
    	insta_next_url
    	insta_container.instagram({
    		clientId: '30178bbb27294d62b487399d1ef5a404',
    		hash: 'Karagandy',
    		image_size: 'standard_resolution',
    		show: 60,
    		onComplete: function (photos, data) {
    			insta_next_url = data.pagination.next_url
    		}
    	})
    	$('#loadmore').on('click', function () {
    		var div = $(this),
    			text = div.text()
    			if (div.text() != 'Loading…') {
    				div.text('Loading…')
    				insta_container.instagram({
    					next_url: insta_next_url,
    					show: 58,
    					image_size: 'standard_resolution',
    					onComplete: function (photos, data) {
    						insta_next_url = data.pagination.next_url
    						div.text(text)
    					}
    				})
    			}
    	})
});