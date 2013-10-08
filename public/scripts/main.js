var APP = APP || {};

require.config({
	paths: {
		'jquery': 'vendor/jquery/jquery',
		'underscore': 'vendor/underscore-amd/underscore',
		'backbone': 'vendor/backbone-amd/backbone',
		'text': 'vendor/requirejs-text/text',
        'bootstrap' : 'vendor/bootstrap/dist/js/bootstrap.min'
	}
});

// Write application code here.
require([
    'jquery',
    'backbone',
    'bootstrap'
], function(
    $,
    Backbone
) {
    APP.collections = {
        products : new ProductCollection()
    }
    
    APP.areas = {
        siteselect : $('#site-select'),
    }

    APP.pages = {
        // Site selection
        siteselect : $('#site-select-page').hide(),
    }
    
    APP.showPages = function(pages) { // an array
        for(page in APP.pages) {
            if(pages.indexOf(page) != -1) APP.pages[page].show();
            else APP.pages[page].hide();
        }
    }
    
    APP.views = {
    }
});