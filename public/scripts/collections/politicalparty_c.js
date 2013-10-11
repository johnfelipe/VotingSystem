var app = app || {};

define([
    'backbone',
    'models/politicalparty_m'
], function(
    Backbone,
    PoliticalParty
) {
    var PoliticalPartyCollection = Backbone.Collection.extend({
        model : PoliticalParty,
        url : '/data/parties'
    });
    return PoliticalPartyCollection;
});