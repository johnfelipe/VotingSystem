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
    'collections/politicalparty_c',
    'collections/partyelectionresult_c',
    'collections/constituencyelectionresult_c',
    'models/voter_m',
    'views/start_v',
    'views/vote_v',
    'views/partyelectionresults_v',
    'views/constituencyelectionresults_v',
    'routers/router',
    'bootstrap'
], function(
    $,
    Backbone,
    ConstituencyCollection,
    PoliticalPartyCollection,
    PartyElectionResultCollection,
    ConstituencyElectionResultCollection,
    VoterModel,
    StartView,
    VoteView,
    PartyElectionResultsView,
    ConstituencyElectionResultsView,
    Router
) {
    app.collections = {
        constituencies : new ConstituencyCollection(),
        political_parties : new PoliticalPartyCollection(),
        partyresults: new PartyElectionResultCollection(),
        constituencyresults: new ConstituencyElectionResultCollection()
    }
    
    app.voter = new VoterModel();
    
    app.pages = {
        start : $('#start'),
        vote : $('#vote').hide(),
        dont_vote : $('#dont_vote').hide(),
        results : $('#results').hide()
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
        partyresults : new PartyElectionResultsView(),
        constituencyresults : new ConstituencyElectionResultsView()
    }
    
    app.router = new Router();
    Backbone.history.start({
        pushState : true,
        root : '/'
    });
});