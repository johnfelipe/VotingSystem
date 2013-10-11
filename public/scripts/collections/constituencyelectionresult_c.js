var app = app || {};

define([
    'backbone',
    'models/constituencyelectionresult_m'
], function(
    Backbone,
    ConstituencyElectionResult
) {
    var ConstituencyElectionResultCollection = Backbone.Collection.extend({
        model : ConstituencyElectionResult,
        url : '/data/electionresultsbyconstituency'
    });
    
    return ConstituencyElectionResultCollection;
});