var app = app || {};

require.config({
	paths: {
		'jquery': 'vendor/jquery/jquery',
		'underscore': 'vendor/underscore-amd/underscore',
		'backbone': 'vendor/backbone-amd/backbone',
		'text': 'vendor/requirejs-text/text',
        'bootstrap' : 'vendor/bootstrap/dist/js/bootstrap.min'
	},
    shim : {
        'bootstrap' : {
            'deps': ['jquery']
        }
    }
});

// Write application code here.
require([
    'jquery',
    'backbone',
    'collections/constituency_c',
    'models/voter_m',
    'views/start_v',
    'views/vote_v',
    'routers/router',
    'bootstrap'
], function(
    $,
    Backbone,
    ConstituencyCollection,
    VoterModel,
    StartView,
    VoteView,
    Router
) {
    app.collections = {
        constituencies : new ConstituencyCollection()
    }
    
    app.voter = new VoterModel();
   
    
    app.collections.constituencies.on('reset', function() {
        console.log(app.collections.constituencies.toJSON());
    })
    
    app.areas = {
        siteselect : $('#site-select'),
    }

    app.pages = {
        start : $('#start'),
        vote : $('#vote').hide(),
        dont_vote : $('#dont_vote').hide()
    }
    
    app.showPages = function(pages) { // an array
        for(page in app.pages) {
            if(pages.indexOf(page) != -1) app.pages[page].show();
            else app.pages[page].hide();
        }
    }
    
    app.views = {
        start : new StartView(),
        vote : new VoteView(),
    }
    
    app.router = new Router();
    Backbone.history.start({
        pushState : true,
        root : '/'
    });
});