var app = app || {};

define([
    'backbone',
    'models/partyelectionresult_m'
], function(
    Backbone,
    PartyElectionResult
) {
    var PartyElectionResultCollection = Backbone.Collection.extend({
        model : PartyElectionResult,
        url : '/data/electionresultsbyparty'
    });
    return PartyElectionResultCollection;
});